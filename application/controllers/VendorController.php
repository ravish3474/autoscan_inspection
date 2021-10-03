<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VendorController extends CI_Controller {

	public function __construct() {
       parent::__construct();
       $this->load->model('CommonModel');
    }

    public function index(){
    	$table = "field_executive";
        $sess_coord_id = $_SESSION['user_data'][0]['admin_id'];
        $condition = array('coordinator_id'=>$sess_coord_id);
		$data['vendors'] = $this->CommonModel->fetch_data($table,$condition);
    	$this->load->view('layout/header');
		$this->load->view('create_vendor',$data);
		$this->load->view('layout/footer');
    }

    public function fetch_isp_fe(){
        $coord_id = $this->input->post('coord_id');
        $sess_coord_id = $_SESSION['user_data'][0]['admin_id'];
        if ($sess_coord_id==1 || $coord_id==$sess_coord_id) {
            $table = "field_executive";
            $condition = array('coordinator_id'=>$coord_id);
            $data = $this->CommonModel->fetch_data($table,$condition);
            if (count($data)>0) {
                die(json_encode(array('status'=>'1','data'=>$data)));
            }
            else{
                die(json_encode(array('status'=>'0')));
            }
        }
        else{
            die(json_encode(array('status'=>'0')));
        }
    }

    public function update_vendor(){
    	$table = "field_executive";
        $fe_email = $this->input->post('fe_email');
        $fe_phone = $this->input->post('fe_phone');
        $fe_id = $this->input->post('fe_id');
        $where = "fe_id<>".$fe_id;
        $where2 = array('fe_email'=>$fe_email);
        $where3 = array('fe_phone'=>$fe_phone);
        if(count($this->CommonModel->fetch_data_double_and($table,$where,$where2))==0 && count($this->CommonModel->fetch_data_double_and($table,$where,$where3))==0){
            unset($_POST['fe_id']);
            $condition = array('fe_id'=>$fe_id);
            $update = $this->CommonModel->update_table($table,$_POST,$condition);
            if ($update) {
                die(json_encode(array('status'=>'1','msg'=>'Updated Successfully')));
            }
            else{
                die(json_encode(array('status'=>'0','msg'=>'Failed')));
            }
        }
        else{
            die(json_encode(array('status'=>'0','msg'=>'FE with same email or phone already exists')));
        }
    }

    public function fetch_fe_data(){
    	$fe_id = $this->input->post('fe_id');
        $table = "field_executive";
        $condition = array('fe_id'=>$fe_id);
        $data = $this->CommonModel->fetch_data($table,$condition);
        if ($data) {
            die(json_encode(array('status'=>'1','data'=>$data)));
        }
        else{
            die(json_encode(array('status'=>'0','data'=>'No Data Found')));
        }
    }

    public function add_vendor(){
    	$coordinator_id = $_SESSION['user_data'][0]['admin_id'];
    	$_POST['coordinator_id'] = $coordinator_id;
    	$fe_phone = $this->input->post('fe_phone');
    	$fe_email = $this->input->post('fe_email');
    	$table_field_name1 = array("fe_phone" => $fe_phone);
    	$table_field_name2 = array("fe_email" => $fe_email);
    	$table = "field_executive";
    	if($this->CommonModel->check_user($fe_phone,$table,$table_field_name1) && $this->CommonModel->check_user($fe_email,$table,$table_field_name2)){
    		$insert = $this->CommonModel->insert_function($table,$_POST);
			if ($insert) {
				die(json_encode(array('status'=>'1','msg'=>'FE Added Successfully')));
			}
			else{
				die(json_encode(array('status'=>'0','msg'=>'Something Went Wrong')));
			}
    	}
    	else{
    		die(json_encode(array('status'=>'0','msg'=>'FE with same email or phone already exists')));
    	}
    }

}