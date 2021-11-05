<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MakeController extends CI_Controller {

	public function __construct() {
       parent::__construct();
       $this->load->model('CommonModel');
       $this->load->model('CasesModel');
    }

    public function index(){
    	$this->load->view('layout/header');
		$this->load->view('add_make_model');
		$this->load->view('layout/footer');
    }

    public function add_make_model_ajax(){
    	$table = "make_model";
    	$insert = $this->CommonModel->insert_function($table,$_POST);
		if ($insert) {
			die(json_encode(array('status'=>'1','msg'=>'Added Successfully')));
		}
		else{
			die(json_encode(array('status'=>'0','msg'=>'Something Went Wrong')));
		}
    }

    public function manage_make_model(){
    	$table = "make_model";
    	$this->load->library('pagination'); 

        $config['base_url'] = base_url().'manage-make-model';        

        $config['total_rows'] = $this->CasesModel->count_all_models($table);      

        $config['per_page'] = 20;        

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

        $data['models'] = $this->CasesModel->get_all_models($config["per_page"], $page,$table); 

        //$data['cases'] = $this->CasesModel->fetch_new_cases($coord_id);
        $this->load->view('layout/header');
        $this->load->view('manage_make_model',$data);
        $this->load->view('layout/footer');
    }

}