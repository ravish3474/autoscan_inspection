<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InsuranceController extends CI_Controller {

	public function __construct() {
       parent::__construct();
       $this->load->model('CommonModel');
    }

    public function index(){
		$table = 'insurance_companies';
		$data['comp'] = $this->CommonModel->fetch_data($table); 
		$this->load->view('layout/header');
		$this->load->view('create_insurance',$data);
		$this->load->view('layout/footer');   	
    }

    public function create_branch_ajax(){
    	$table = "company_branches";
    	$insert = $this->CommonModel->insert_function($table,$_POST);
    	if ($insert) {
			die(json_encode(array('status'=>'1','msg'=>'Inserted Successfully')));
		}
		else{
			die(json_encode(array('status'=>'0','msg'=>'Failed')));
		}
    }

    public function fetch_branch_data(){
    	$branch_id = $this->input->post('branch_id');
    	$table = "company_branches";
    	$condition = array('branch_id'=>$branch_id);
    	$data = $this->CommonModel->fetch_data($table,$condition);
    	if ($data) {
    		die(json_encode(array('status'=>'1','data'=>$data)));
    	}
    	else{
    		die(json_encode(array('status'=>'0','msg'=>'Something Went Wrong')));
    	}
    }

    public function viewBranch(){
    	$table = 'insurance_companies';
    	$table2 = $table;
    	$table1 = "company_branches";
    	$condition = "company_branches.company_id = insurance_companies.company_id";
    	$data['modal_data'] = $this->CommonModel->fetch_data_join($table1,$table2,$condition);
		$data['comp'] = $this->CommonModel->fetch_data($table); 
		$this->load->view('layout/header');
		$this->load->view('create_branch',$data);
		$this->load->view('layout/footer');
    }

    public function update_insurance(){
    	$company_id = $this->input->post('company_id');
    	unset($_POST['company_id']);
    	$table = "insurance_companies";
		$condition = array('company_id'=>$company_id);
		$update = $this->CommonModel->update_table($table,$_POST,$condition);
		if ($update) {
			die(json_encode(array('status'=>'1','msg'=>'Updated Successfully')));
		}
		else{
			die(json_encode(array('status'=>'0','msg'=>'Failed')));
		}
    }

    public function update_branch_ajax(){
    	$branch_id = $this->input->post('branch_id');
    	unset($_POST['branch_id']);
    	$table = "company_branches";
    	$condition = array('branch_id'=>$branch_id);
		$update = $this->CommonModel->update_table($table,$_POST,$condition);
		if ($update) {
			die(json_encode(array('status'=>'1','msg'=>'Updated Successfully')));
		}
		else{
			die(json_encode(array('status'=>'0','msg'=>'Failed')));
		}
    }

    public function fetch_companies(){
		$table = "insurance_companies";
		$comp_id = $this->input->post('comp_id');
		$where = "company_id=".$comp_id;
		$data = $this->CommonModel->fetch_data($table,$where);
		if ($data) {
			die(json_encode(array('status'=>'1','data'=>$data)));
		}
		else{
			die(json_encode(array('status'=>'0','msg'=>'Something Went Wrong')));
		}
    }

    public function add_company(){
    	$company_name = $this->input->post('company_name');
		$table = 'insurance_companies';
		$table_field_name = 'company_name';
		if($this->CommonModel->check_user($company_name,$table,$table_field_name)){
			$insert = $this->CommonModel->insert_function($table,$_POST);
			if ($insert) {
				die(json_encode(array('status'=>'1','msg'=>'Insurance Company Added Successfully')));
			}
		}
		else{
			die(json_encode(array('status'=>'0','msg'=>'Insurance Company Already Exists')));
		}
    }

}