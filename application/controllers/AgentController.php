<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgentController extends CI_Controller {

	public function __construct() {
       parent::__construct();
       $this->load->model('CommonModel');
    }

    public function index(){
    	$table = "insurance_companies";
		$data['companies'] = $this->CommonModel->fetch_data($table); 
		$table = "agents";
		$table1 = "insurance_companies";
		$condition1 = "agents.company_id = insurance_companies.company_id";
		$table2 = "company_branches";
		$condition2 = "agents.branch_id = company_branches.branch_id";
		$data['agents'] = $this->CommonModel->fetch_data_join_double($table,$table1,$condition1,$table2,$condition2);
		$this->load->view('layout/header');
		$this->load->view('create_agent',$data);
		$this->load->view('layout/footer');
    }

    public function update_agent(){
        $table = "agents";
        $agent_email = $this->input->post('agent_email');
        $agent_phone = $this->input->post('agent_phone');
        $agent_id = $this->input->post('agent_id');
        $where = "agent_id<>".$agent_id;
        $where2 = array('agent_email'=>$agent_email);
        $where3 = array('agent_phone'=>$agent_phone);
        if(count($this->CommonModel->fetch_data_double_and($table,$where,$where2))==0 && count($this->CommonModel->fetch_data_double_and($table,$where,$where3))==0){
            unset($_POST['agent_id']);
            $condition = array('agent_id'=>$agent_id);
            $update = $this->CommonModel->update_table($table,$_POST,$condition);
            if ($update) {
                die(json_encode(array('status'=>'1','msg'=>'Updated Successfully')));
            }
            else{
                die(json_encode(array('status'=>'0','msg'=>'Failed')));
            }
        }
        else{
            die(json_encode(array('status'=>'0','msg'=>'Agent with same email or phone already exists')));
        }
        //print_r($_POST);
    }

    public function fetch_agent_data(){
        $agent_id = $this->input->post('agent_id');
        $table = "agents";
        $condition = array('agent_id'=>$agent_id);
        $data = $this->CommonModel->fetch_data($table,$condition);
        if ($data) {
            die(json_encode(array('status'=>'1','data'=>$data)));
        }
        else{
            die(json_encode(array('status'=>'0','data'=>'No Data Found')));
        }
    }

    public function fetch_company_branches(){
    	$company_id = $this->input->post('company_id');
    	$table = "company_branches";
    	$condition = array('company_id'=>$company_id);
    	$data = $this->CommonModel->fetch_data($table,$condition);
    	if ($data) {
    		die(json_encode(array('status'=>'1','data'=>$data)));
    	}
    	else{
    		die(json_encode(array('status'=>'0','data'=>'No Branch Found For This Company')));
    	}
    }

    public function add_agent(){
    	$agent_phone = $this->input->post('agent_phone');
    	$agent_email = $this->input->post('agent_email');
    	$table_field_name1 = array("agent_phone" => $agent_phone);
    	$table_field_name2 = array("agent_email" => $agent_email);
    	$table = "agents";
    	if($this->CommonModel->check_user($agent_phone,$table,$table_field_name1) && $this->CommonModel->check_user($agent_email,$table,$table_field_name2)){
    		$insert = $this->CommonModel->insert_function($table,$_POST);
			if ($insert) {
				die(json_encode(array('status'=>'1','msg'=>'Agent Added Successfully')));
			}
			else{
				die(json_encode(array('status'=>'0','msg'=>'Something Went Wrong')));
			}
    	}
    	else{
    		die(json_encode(array('status'=>'0','msg'=>'Agent with same email or phone already exists')));
    	}
    }

}