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
	public function hello()
	{
	$pdf = new \Mpdf\Mpdf([
		    'mode' => 'c',
		    'margin_top' => 0,
		    'margin_right' => 2,
		    'margin_left' => 2,
		    'margin_bottom' => 0,
		    'margin_header' => 2,
		    'margin_footer' => 0,
		  ]);

		 $pdf->SetHTMLHeader('
		<table>
		<tr style="margin-top:10px">
			<td style="width:60%">
			    <img src="assets/img/logo.png" height="80" width="180"/>
			</td> 
			<td style="width:40%; font-size:12px">
			   	<p>Head Office: Sector-16, Rohini,Delhi-110089</p>
			    <p>Office: CSC-7/43, F Block, DDA Market, Sector-16, Rohini,Delhi</p>
			    <p>Phone: 9999999999</p>
			    <p>Website: www.autoscanbookvalue.com</p>
			</td> 
			</tr>
		</table>
		');

		// $pdf->SetHTMLFooter('
		// <div style="text-align: right; font-weight: bold;">
		//     <img src="assets/img/logo.png" height="60" width="900"/>
		// </div> ');

		$pdf->useSubstitutions=false;
		$pdf->setAutoTopMargin = 'stretch';
		$pdf->SetDisplayMode('fullpage');


		$html=$this->load->view('html',[],true);
		$html1=' <div style="width:100%; height:80px;">
        
			  </div>
			  <table class="img-tbl" style="margin-top:100px">
				<tr>
				<td> <img src="https://www.autoscan.co.in/uploadFiles/0fa42762-f78f-4a23-8447-479a8461f0c2.jpg" height="450" width="500"/>
				</td>
				<td> <img src="https://www.autoscan.co.in/uploadFiles/0fa42762-f78f-4a23-8447-479a8461f0c2.jpg" height="450" width="500"/>
				</td>
				<td> <img src="https://www.autoscan.co.in/uploadFiles/0fa42762-f78f-4a23-8447-479a8461f0c2.jpg" height="450" width="500"/>
				</td>
				</tr>

			</table>
		  	<table class="img-tbl" style="margin-top:100px">
				<tr>
				<td> <img src="https://www.autoscan.co.in/uploadFiles/0fa42762-f78f-4a23-8447-479a8461f0c2.jpg" height="400" width="500"/>
				</td>
				<td> <img src="https://www.autoscan.co.in/uploadFiles/0fa42762-f78f-4a23-8447-479a8461f0c2.jpg" height="400" width="500"/>
				</td>
				<td> <img src="https://www.autoscan.co.in/uploadFiles/0fa42762-f78f-4a23-8447-479a8461f0c2.jpg" height="400" width="500"/>
				</td>
				</tr>
			</table>
			 <table class="img-tbl" style="margin-top:100px">
				<tr>
				<td> <img src="https://www.autoscan.co.in/uploadFiles/0fa42762-f78f-4a23-8447-479a8461f0c2.jpg" height="400" width="500"/>
				</td>
				<td> <img src="https://www.autoscan.co.in/uploadFiles/0fa42762-f78f-4a23-8447-479a8461f0c2.jpg" height="400" width="500"/>
				</td>
				<td> <img src="https://www.autoscan.co.in/uploadFiles/0fa42762-f78f-4a23-8447-479a8461f0c2.jpg" height="400" width="500"/>
				</td>
				</tr>
			</table>
			 <table class="img-tbl" style="margin-top:100px">
				<tr>
				<td> <img src="https://www.autoscan.co.in/uploadFiles/0fa42762-f78f-4a23-8447-479a8461f0c2.jpg" height="400" width="500"/>
				</td>
				<td> <img src="https://www.autoscan.co.in/uploadFiles/0fa42762-f78f-4a23-8447-479a8461f0c2.jpg" height="400" width="500"/>
				</td>
				<td> <img src="https://www.autoscan.co.in/uploadFiles/0fa42762-f78f-4a23-8447-479a8461f0c2.jpg" height="400" width="500"/>
				</td>
				</tr>
			</table>';

		$stylesheet='assets/css/bootstrap.css';
		$pdf->WriteHTML($stylesheet,1);
		$pdf->WriteHTML($html);
		$pdf->AddPage();
		$pdf->WriteHTML($html1,2);
		$pdf->Output();
		// $pdf->Output($pdf_path, \Mpdf\Output\Destination::FILE);
	}
}