<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QualityController extends CI_Controller {

	public function __construct() {
       parent::__construct();
       $this->load->model('CommonModel');
    }

    public function pvt_cars($id){
    	$this->load->view('layout/header');
		$this->load->view('pvt_cars');
		$this->load->view('layout/footer');
    }

    public function two_wheeler($id){
    	$this->load->view('layout/header');
		$this->load->view('two_wheeler');
		$this->load->view('layout/footer');
    }

    public function commercial($id){
    	$this->load->view('layout/header');
		$this->load->view('commercial_vehicle');
		$this->load->view('layout/footer');
    }

}