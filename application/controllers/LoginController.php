<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

    public function __construct() {
       parent::__construct();
       $this->load->model('LoginModel');
    }

	public function index(){
		if(!$this->session->userdata('user_data')){
			$this->load->view('login/index');
		}
		else{
			redirect(base_url('new-cases'));
		}
	}

	public function checkLogin(){
		$username = $this->input->post('username');
    	$password = $this->input->post('password');
 		$login_as = $this->input->post('login_as');
    	$check_user = $this->LoginModel->signin($username,$password,$login_as);
    	if ($check_user) {
    		if ($login_as==1) {
    			$this->session->set_userdata('user_data',$check_user);
    			redirect(base_url('new-cases'));
    		}
    	}
    	else{
    		die(json_encode(array('status'=>'0','msg'=>'Credentials are Invalid Or Account is Inactive')));
    	}
	}

    public function logout(){
    	$this->session->unset_userdata('user_data');
        //$this->session->unset_userdata('location_user');
		$this->session->sess_destroy();
		redirect(base_url());
    }

}