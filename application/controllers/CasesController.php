<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CasesController extends CI_Controller {

	public function __construct() {
       parent::__construct();
       $this->load->model('CommonModel');
       $this->load->model('CasesModel');
    }

    public function index(){
    	$table = "insurance_companies";
		$data['companies'] = $this->CommonModel->fetch_data($table); 
        $table = "coordinators";
        $condition = "admin_id <> ".$_SESSION['user_data'][0]['admin_id'];
        $data['c_nator'] = $this->CommonModel->fetch_data($table,$condition); 
    	$this->load->view('layout/header');
		$this->load->view('intimation_form',$data);
		$this->load->view('layout/footer');
    }

    public function update_case(){
        $case_id = $this->input->post('case_id');
        unset($_POST['case_id']);
        $condition = array('case_id'=>$case_id);
        $table = "cases";
        $update = $this->CommonModel->update_table($table,$_POST,$condition);
        if ($update) {
            die(json_encode(array('status'=>'1','msg'=>'Case Updated Successfully')));
        }
        else{
            die(json_encode(array('status'=>'0','msg'=>'Something Went Wrong')));
        }
    }

    public function view_edit_case($id){
        $case_id = base64_decode($id);
        $table = "cases";
        $condition = array('case_id'=>$case_id);
        $data['c_nator'] = $this->CommonModel->fetch_data($table,$condition); 
        $this->load->view('layout/header');
        $this->load->view('intimation_form_edit',$data);
        $this->load->view('layout/footer');
    }

    public function executive_assigned_cases(){
        $this->load->library('pagination'); 
        $case_status = 1;  

        $coord_id = $_SESSION['user_data'][0]['admin_id'];

        $config['base_url'] = base_url().'new-cases';        

        $config['total_rows'] = $this->CasesModel->count_all_users($coord_id,$case_status);      

        $config['per_page'] = 5;        

        $config['uri_segment'] = 2;        

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = ['class' => 'page-link'];
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $this->pagination->initialize($config);        

        $data['links'] = $this->pagination->create_links();        

        $data['cases'] = $this->CasesModel->get_users($config["per_page"], $page,$coord_id,$case_status); 

        //$data['cases'] = $this->CasesModel->fetch_new_cases($coord_id);
        $this->load->view('layout/header');
        $this->load->view('cases',$data);
        $this->load->view('layout/footer');
    }

    public function new_case(){
        $this->load->library('pagination'); 
        $case_status = 0;  

        $coord_id = $_SESSION['user_data'][0]['admin_id'];

        $config['base_url'] = base_url().'new-cases';        

        $config['total_rows'] = $this->CasesModel->count_all_users($coord_id,$case_status);      

        $config['per_page'] = 5;        

        $config['uri_segment'] = 2;        

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['attributes'] = ['class' => 'page-link'];
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $this->pagination->initialize($config);        

        $data['links'] = $this->pagination->create_links();        

        $data['cases'] = $this->CasesModel->get_users($config["per_page"], $page,$coord_id,$case_status); 

        //$data['cases'] = $this->CasesModel->fetch_new_cases($coord_id);
        $this->load->view('layout/header');
        $this->load->view('cases',$data);
        $this->load->view('layout/footer');
    }

    public function create_case(){
        $coord_id = $_SESSION['user_data'][0]['admin_id'];
        $isp_branch = $this->input->post('isp_branch');
        $assigned_fe = $this->input->post('assigned_fe');
        $source_branch = $isp_branch;
        if ($coord_id==$isp_branch) {
            $destination_branch="";
        }
        else{
            $destination_branch = $isp_branch;
        }
        $case_status = $assigned_fe == "" ? 0 : 1;
        unset($_POST['isp_branch']);
        $_POST['source_branch'] = $source_branch;
        $_POST['destination_branch'] = $destination_branch;
        $_POST['coordinator_id'] = $isp_branch;
        $_POST['case_status'] = $case_status;
        $table = "cases";
        $insert = $this->CommonModel->insert_function($table,$_POST);
        if ($insert) {
            die(json_encode(array('status'=>'1','msg'=>'Case Added Successfully')));
        }
        else{
            die(json_encode(array('status'=>'0','msg'=>'Something Went Wrong')));
        }
    }

    public function fetch_make(){
    	$type = $_POST['veh_class'];
    	$table = "make_model";
    	$column_name = "MANUFACTURE";
    	$condition = array('TYPE_OF_VEHICLE'=>$type);
    	$data = $this->CasesModel->select_distinct($column_name,$condition,$table);
    	if (count($data)>0) {
    		die(json_encode(array('status'=>'1','data'=>$data)));
    	}
    	else{
    		die(json_encode(array('status'=>'0','msg'=>'error')));
    	}
    }

    public function fetch_model(){
    	$type = $_POST['veh_make'];
    	$table = "make_model";
    	$column_name = "MODEL";
    	$condition = array('MANUFACTURE'=>$type);
    	$data = $this->CasesModel->select_distinct($column_name,$condition,$table);
    	if (count($data)>0) {
    		die(json_encode(array('status'=>'1','data'=>$data)));
    	}
    	else{
    		die(json_encode(array('status'=>'0','msg'=>'error')));
    	}
    }

    public function fetch_variant(){
    	$type = $_POST['veh_model'];
    	$table = "make_model";
    	$column_name = "VARINAT";
    	$condition = array('MODEL'=>$type);
    	$data = $this->CasesModel->select_distinct($column_name,$condition,$table);
    	if (count($data)>0) {
    		die(json_encode(array('status'=>'1','data'=>$data)));
    	}
    	else{
    		die(json_encode(array('status'=>'0','msg'=>'error')));
    	}
    }

}