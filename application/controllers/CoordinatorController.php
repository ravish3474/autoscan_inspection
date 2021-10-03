<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CoordinatorController extends CI_Controller {

	public function __construct() {
       parent::__construct();
       $this->load->model('CommonModel');
    }

	public function index(){
		$table = 'coordinators';
		$condition = "admin_id <> 1";
		$data['c_nator'] = $this->CommonModel->fetch_data($table,$condition); 
		$this->load->view('layout/header');
		$this->load->view('create_coordinator',$data);
		$this->load->view('layout/footer');
	}

	public function createCoordinator(){
		$username = $this->input->post('username');
		$table = 'coordinators';
		$table_field_name = 'username';
		if($this->CommonModel->check_user($username,$table,$table_field_name)){
			$insert = $this->CommonModel->insert_function($table,$_POST);
			if ($insert) {
				die(json_encode(array('status'=>'1','msg'=>'Coordinator Added Successfully')));
			}
		}
		else{
			die(json_encode(array('status'=>'0','msg'=>'Coordinator Already Exists')));
		}
	}

	public function fetch_coordinator(){
		$table = "coordinators";
		$admin_id = $this->input->post('admin_id');
		$where = "admin_id=".$admin_id;
		$data = $this->CommonModel->fetch_data($table,$where);
		if ($data) {
			die(json_encode(array('status'=>'1','data'=>$data)));
		}
		else{
			die(json_encode(array('status'=>'0','msg'=>'Something Went Wrong')));
		}
	}

	public function updateCoordinator(){
		$admin_id = $this->input->post('admin_id');
		$password = $this->input->post('c_password');
		unset($_POST['admin_id']);
		unset($_POST['c_password']);
		$_POST['password'] = $password;
		$table = "coordinators";
		$condition = array('admin_id'=>$admin_id);
		$update = $this->CommonModel->update_table($table,$_POST,$condition);
		if ($update) {
			die(json_encode(array('status'=>'1','msg'=>'Updated Successfully')));
		}
		else{
			die(json_encode(array('status'=>'0','msg'=>'Failed')));
		}
	}

}