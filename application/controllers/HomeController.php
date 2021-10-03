<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index(){
			$this->load->view('layout/header');
			$this->load->view('home');
			$this->load->view('layout/footer');
	}

	public function worksheet(){
		$this->load->view('layout/header');
		$this->load->view('worksheet');
		$this->load->view('layout/footer');
	}

	public function cases()
	{
		$this->load->view('layout/header');
		$this->load->view('cases');
		$this->load->view('layout/footer');
	}
	public function create_task(){
		$this->load->view('layout/header');
		$this->load->view('intimation_form');
		$this->load->view('layout/footer');
	}

	public function create_agent(){
		$this->load->view('layout/header');
		$this->load->view('create_agent');
		$this->load->view('layout/footer');
	}

	public function create_branch(){
		$this->load->view('layout/header');
		$this->load->view('create_branch');
		$this->load->view('layout/footer');
	}

	public function create_insurance(){
		$this->load->view('layout/header');
		$this->load->view('create_insurance');
		$this->load->view('layout/footer');
	}
	public function two_wheeler(){
		$this->load->view('layout/header');
		$this->load->view('two_wheeler');
		$this->load->view('layout/footer');
	}
	public function commerical_vehicle()
	{
		$this->load->view('layout/header');
		$this->load->view('commercial_vehicle');
		$this->load->view('layout/footer');
	}
	public function pvt_cars()
	{
		$this->load->view('layout/header');
		$this->load->view('pvt_cars');
		$this->load->view('layout/footer');
	}
}