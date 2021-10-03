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