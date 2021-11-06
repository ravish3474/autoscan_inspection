<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QualityController extends CI_Controller {

	public function __construct() {
       parent::__construct();
       $this->load->model('CommonModel');
    }

    public function qc_commercial(){
        $case_id = $this->input->post('case_id');
        $all_pics = implode(",",$this->input->post('all_pics'));
        $recomm = $this->input->post('recomm');
        $case_status = $recomm=="On Hold" ? 4:3;
        unset($_POST['all_pics']);
        $vehicle_number = $this->input->post('vehicle_num_qc');
        $pdf_name = $vehicle_number."-".date('Y-m-d').".pdf";
        $_POST['coordinator_id'] = $_SESSION['user_data'][0]['admin_id'];
        $_POST['file_name'] = $pdf_name;
        $_POST['all_pics'] = $all_pics;
        $table = 'qc_commercial';
        $table_field_name = 'case_id';
        if($this->CommonModel->check_user($case_id,$table,$table_field_name)){
            $insert = $this->CommonModel->insert_function($table,$_POST);
            if ($insert) {
                    $this->commercial_pdf($_POST,$pdf_name);
                    $table = "cases";
                    $data = array('case_status'=>$case_status,'pdf_name'=>$pdf_name);
                    $condition = array('case_id'=>$case_id);
                    $update = $this->CommonModel->update_table($table,$data,$condition);
                    die(json_encode(array('status'=>'1','msg'=>'Qc Submitted Successfully')));
            }
            else{
                die(json_encode(array('status'=>'0','msg'=>'Something Went Wrong')));
            }
        }
        else{
        unset($_POST['case_id']);
        $condition = array('case_id'=>$case_id);
        $update = $this->CommonModel->update_table($table,$_POST,$condition);
            if ($update) {
                $this->commercial_pdf($_POST,$pdf_name);
                $table = "cases";
                $data = array('case_status'=>$case_status,'pdf_name'=>$pdf_name);
                $condition = array('case_id'=>$case_id);
                $update = $this->CommonModel->update_table($table,$data,$condition);
                die(json_encode(array('status'=>'1','msg'=>'Qc Submitted Successfully')));
            }
            else{
                die(json_encode(array('status'=>'0','msg'=>'Failed')));
            }
        }
    }

    public function qc_two_wheeler(){
        $case_id = $this->input->post('case_id');
        $all_pics = implode(",",$this->input->post('all_pics'));
        $recomm = $this->input->post('recomm');
        $case_status = $recomm=="On Hold" ? 4:3;
        unset($_POST['all_pics']);
        $vehicle_number = $this->input->post('vehicle_num_qc');
        $pdf_name = $vehicle_number."-".date('Y-m-d').".pdf";
        $_POST['coordinator_id'] = $_SESSION['user_data'][0]['admin_id'];
        $_POST['file_name'] = $pdf_name;
        $_POST['all_pics'] = $all_pics;
        $table = 'qc_two_wheeler';
        $table_field_name = 'case_id';
        if($this->CommonModel->check_user($case_id,$table,$table_field_name)){
            $insert = $this->CommonModel->insert_function($table,$_POST);
            if ($insert) {
                    $this->two_wheel_pdf($_POST,$pdf_name);
                    $table = "cases";
                    $data = array('case_status'=>$case_status,'pdf_name'=>$pdf_name);
                    $condition = array('case_id'=>$case_id);
                    $update = $this->CommonModel->update_table($table,$data,$condition);
                    die(json_encode(array('status'=>'1','msg'=>'Qc Submitted Successfully')));
            }
            else{
                die(json_encode(array('status'=>'0','msg'=>'Something Went Wrong')));
            }
        }
        else{
        unset($_POST['case_id']);
        $condition = array('case_id'=>$case_id);
        $update = $this->CommonModel->update_table($table,$_POST,$condition);
            if ($update) {
                $this->two_wheel_pdf($_POST,$pdf_name);
                $table = "cases";
                $data = array('case_status'=>$case_status,'pdf_name'=>$pdf_name);
                $condition = array('case_id'=>$case_id);
                $update = $this->CommonModel->update_table($table,$data,$condition);
                die(json_encode(array('status'=>'1','msg'=>'Qc Submitted Successfully')));
            }
            else{
                die(json_encode(array('status'=>'0','msg'=>'Failed')));
            }
        }
    }
    public function qc_pvt_car(){
        $case_id = $this->input->post('case_id');
        $all_pics = implode(",",$this->input->post('all_pics'));
        $recomm = $this->input->post('recomm');
        $case_status = $recomm=="On Hold" ? 4:3;
        unset($_POST['all_pics']);
        $vehicle_number = $this->input->post('vehicle_num_qc');
        $pdf_name = $vehicle_number."-".date('Y-m-d').".pdf";
        $_POST['coordinator_id'] = $_SESSION['user_data'][0]['admin_id'];
        $_POST['file_name'] = $pdf_name;
        $_POST['all_pics'] = $all_pics;
        $table = 'qc_pvt_cars';
        $table_field_name = 'case_id';
        if($this->CommonModel->check_user($case_id,$table,$table_field_name)){
            $insert = $this->CommonModel->insert_function($table,$_POST);
            if ($insert) {
                    $this->pvt_pdf($_POST,$pdf_name);
                    $table = "cases";
                    $data = array('case_status'=>$case_status,'pdf_name'=>$pdf_name);
                    $condition = array('case_id'=>$case_id);
                    $update = $this->CommonModel->update_table($table,$data,$condition);
                    die(json_encode(array('status'=>'1','msg'=>'Qc Submitted Successfully')));
            }
            else{
                die(json_encode(array('status'=>'0','msg'=>'Something Went Wrong')));
            }
        }
        else{
        unset($_POST['case_id']);
        $condition = array('case_id'=>$case_id);
        $update = $this->CommonModel->update_table($table,$_POST,$condition);
            if ($update) {
                $this->pvt_pdf($_POST,$pdf_name);
                $table = "cases";
                $data = array('case_status'=>$case_status,'pdf_name'=>$pdf_name);
                $condition = array('case_id'=>$case_id);
                $update = $this->CommonModel->update_table($table,$data,$condition);
                die(json_encode(array('status'=>'1','msg'=>'Qc Submitted Successfully')));
            }
            else{
                die(json_encode(array('status'=>'0','msg'=>'Failed')));
            }
        }
    }

    public function commercial_pdf($data,$pdf_name)
    {
    $all_pics = $data['all_pics'];
    $all_pics_array = explode(",",$all_pics);
    $pdf = new \Mpdf\Mpdf([
            'mode' => 'c',
            'margin_top' => 30,
            'margin_right' => 2,
            'margin_left' => 2,
            'margin_bottom' => 0,
            'margin_header' => 2,
            'margin_footer' => 2,
          ]);

         $pdf->SetHTMLHeader('
        <table>
        <tr>
            <td style="width:60%">
                <img src="assets/img/logo.png" height="80" width="150"/>
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
         $pdf->SetHTMLFooter('
        <table width="100%">
            <tr>
                <td width="50%" style="font-size:10px;">This is an auto generated Report and Digitally Signed By Authorised Sugnature</td>
                <td width="50%" align="right" style="font-size:10px;">Page {PAGENO} of {nbpg}</td>
            </tr>
        </table>');
        $pdf->useSubstitutions=false;
        $pdf->setAutoTopMargin = 'stretch';
        $pdf->SetDisplayMode('fullpage');
        $html=$this->load->view('commercial_pdf',$data,true);
        $div_open = '<div style="padding-top:50px" >';
        $div_close = '</div>';

        $ttl_pics = count($all_pics_array);
        $main_loop = round($ttl_pics/3);
        $tablets = '';

        for ($i=0; $i < $main_loop; $i++) { 
            $tablets .= '<table class="img-tbl" style="margin-top:100px">
                <tr>';
                $j = $i*3;
                $z = $j+2;
                if ($z>=($ttl_pics-1)) {
                    $z = $ttl_pics-1;
                }
                for ($j; $j <= $z; $j++) { 
                    $tablets .='<td> <img src="'.base_url().'upload/images/'.$all_pics_array[$j].'" height="450" width="500"/>
                </td>';
                }
            $tablets .='</tr>
            </table>';
        }
        $html1 = $div_open.$tablets.$div_close;

        $pdf_path = "upload/".$pdf_name;
        $stylesheet='assets/css/bootstrap.css';
        $pdf->WriteHTML($stylesheet,1);
        $pdf->WriteHTML($html);
        $pdf->AddPage();
        $pdf->WriteHTML($html1,2);
        // $pdf->Output();
        $pdf->Output($pdf_path, \Mpdf\Output\Destination::FILE);
        // $pdf->Output($pdf_path, \Mpdf\Output\Destination::FILE);
    }

    public function pvt_pdf($data,$pdf_name)
    {
    $all_pics = $data['all_pics'];
    $all_pics_array = explode(",",$all_pics);
    $pdf = new \Mpdf\Mpdf([
            'mode' => 'c',
            'margin_top' => 26,
            'margin_right' => 2,
            'margin_left' => 2,
            'margin_bottom' => 0,
            'margin_header' => 2,
            'margin_footer' => 2,
          ]);

         $pdf->SetHTMLHeader('
        <table>
        <tr>
            <td style="width:60%">
                <img src="assets/img/logo.png" height="80" width="150"/>
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
         $pdf->SetHTMLFooter('
        <table width="100%">
            <tr>
                <td width="50%" style="font-size:10px;">This is an auto generated Report and Digitally Signed By Authorised Sugnature</td>
                <td width="50%" align="right" style="font-size:10px;">Page {PAGENO} of {nbpg}</td>
            </tr>
        </table>');
        $pdf->useSubstitutions=false;
        $pdf->setAutoTopMargin = 'stretch';
        $pdf->SetDisplayMode('fullpage');
        $html=$this->load->view('pvt_pdf',$data,true);
        $div_open = '<div style="padding-top:50px" >';
        $div_close = '</div>';

        $ttl_pics = count($all_pics_array);
        $main_loop = round($ttl_pics/3);
        $tablets = '';

        for ($i=0; $i < $main_loop; $i++) { 
            $tablets .= '<table class="img-tbl" style="margin-top:100px">
                <tr>';
                $j = $i*3;
                $z = $j+2;
                if ($z>=($ttl_pics-1)) {
                    $z = $ttl_pics-1;
                }
                for ($j; $j <= $z; $j++) { 
                    $tablets .='<td> <img src="'.base_url().'upload/images/'.$all_pics_array[$j].'" height="450" width="500"/>
                </td>';
                }
            $tablets .='</tr>
            </table>';
        }
        $html1 = $div_open.$tablets.$div_close;
        $pdf_path = "upload/".$pdf_name;
        $stylesheet='assets/css/bootstrap.css';
        $pdf->WriteHTML($stylesheet,1);
        $pdf->WriteHTML($html);
        $pdf->AddPage();
        $pdf->WriteHTML($html1,2);
        // $pdf->Output();
        $pdf->Output($pdf_path, \Mpdf\Output\Destination::FILE);
        // $pdf->Output($pdf_path, \Mpdf\Output\Destination::FILE);
    }

    public function two_wheel_pdf($data,$pdf_name)
    {
    $all_pics = $data['all_pics'];
    $all_pics_array = explode(",",$all_pics);
    $pdf = new \Mpdf\Mpdf([
            'mode' => 'c',
            'margin_top' => 30,
            'margin_right' => 2,
            'margin_left' => 2,
            'margin_bottom' => 0,
            'margin_header' => 2,
            'margin_footer' => 2,
          ]);

         $pdf->SetHTMLHeader('
        <table>
        <tr>
            <td style="width:60%">
                <img src="assets/img/logo.png" height="80" width="150"/>
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
         $pdf->SetHTMLFooter('
        <table width="100%">
            <tr>
                <td width="50%" style="font-size:10px;">This is an auto generated Report and Digitally Signed By Authorised Sugnature</td>
                <td width="50%" align="right" style="font-size:10px;">Page {PAGENO} of {nbpg}</td>
            </tr>
        </table>');
        $pdf->useSubstitutions=false;
        $pdf->setAutoTopMargin = 'stretch';
        $pdf->SetDisplayMode('fullpage');
        $html=$this->load->view('two_pdf',$data,true);
        $div_open = '<div style="padding-top:50px" >';
        $div_close = '</div>';

        $ttl_pics = count($all_pics_array);
        $main_loop = round($ttl_pics/3);
        $tablets = '';

        for ($i=0; $i < $main_loop; $i++) { 
            $tablets .= '<table class="img-tbl" style="margin-top:100px">
                <tr>';
                $j = $i*3;
                $z = $j+2;
                if ($z>=($ttl_pics-1)) {
                    $z = $ttl_pics-1;
                }
                for ($j; $j <= $z; $j++) { 
                    $tablets .='<td> <img src="'.base_url().'upload/images/'.$all_pics_array[$j].'" height="450" width="500"/>
                </td>';
                }
            $tablets .='</tr>
            </table>';
        }
        $html1 = $div_open.$tablets.$div_close;
        $pdf_path = "upload/".$pdf_name;
        $stylesheet='assets/css/bootstrap.css';
        $pdf->WriteHTML($stylesheet,1);
        $pdf->WriteHTML($html);
        $pdf->AddPage();
        $pdf->WriteHTML($html1,2);
        //$pdf->Output();
        $pdf->Output($pdf_path, \Mpdf\Output\Destination::FILE);
        // $pdf->Output($pdf_path, \Mpdf\Output\Destination::FILE);
    }

    public function two_wheeler($id){
        $data['case_id'] = $id;
        $case_id = base64_decode($id);
        $table = "vehicle_pics";
        $condition = array('case_id'=>$case_id);
        $data['vehicle_pics'] = $this->CommonModel->fetch_data($table,$condition);
        $table = "cases";
        $data['case_data'] = $this->CommonModel->fetch_data($table,$condition);
        $table = "qc_two_wheeler";
        $data['qc_data'] = $this->CommonModel->fetch_data($table,$condition);
    	$this->load->view('layout/header');
		$this->load->view('two_wheeler',$data);
		$this->load->view('layout/footer');
    }

    public function pvt_cars($id){
        $data['case_id'] = $id;
        $case_id = base64_decode($id);
        $table = "vehicle_pics";
        $condition = array('case_id'=>$case_id);
        $data['vehicle_pics'] = $this->CommonModel->fetch_data($table,$condition);
        $table = "cases";
        $data['case_data'] = $this->CommonModel->fetch_data($table,$condition);
        $table = "qc_pvt_cars";
        $data['qc_data'] = $this->CommonModel->fetch_data($table,$condition);
        $this->load->view('layout/header');
        $this->load->view('pvt_cars',$data);
        $this->load->view('layout/footer');
    }

    public function commercial($id){
        $data['case_id'] = $id;
        $case_id = base64_decode($id);
        $table = "vehicle_pics";
        $condition = array('case_id'=>$case_id);
        $data['vehicle_pics'] = $this->CommonModel->fetch_data($table,$condition);
        $table = "cases";
        $data['case_data'] = $this->CommonModel->fetch_data($table,$condition);
        $table = "qc_commercial";
        $data['qc_data'] = $this->CommonModel->fetch_data($table,$condition);
    	$this->load->view('layout/header');
		$this->load->view('commercial_vehicle',$data);
		$this->load->view('layout/footer');
    }

    public function upload_pics(){
        $title = "test";
        $all_pics = "";
        $chasis_pic = "";
        $path = "./upload/images/";
        if (!empty($_FILES['all_pics']['name'][0])) {
            $result = $this->upload_files($path,$title, $_FILES['all_pics']);
            if ($result === FALSE) {
                $data['error'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');
                die(json_encode(array('status'=>'0','msg'=>$data['error'])));
            }
            else{
                $all_pics = implode(",",$result);
            }
        }  
        if (!empty($_FILES['chasis_pic']['name'][0])) {
            if ($this->upload_files($path,$title, $_FILES['chasis_pic']) === FALSE) {
                $data['error'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');
                die(json_encode(array('status'=>'0','msg'=>$data['error'])));
            }
            else{
                $chasis_pic = $result[0];
            }
        } 
        $case_id = $this->input->post('task_id');
        $table = "vehicle_pics";
        $data = array('case_id'=>$case_id,'all_pics'=>$all_pics,'chasis_pic'=>$chasis_pic);
        $insert = $this->CommonModel->insert_function($table,$data);
        if ($insert) {
            $table = "cases";
            $data = array('case_status'=>'2');
            $condition = array('case_id'=>$case_id);
            $update = $this->CommonModel->update_table($table,$data,$condition);
            die(json_encode(array('status'=>'1','msg'=>'Uploaded Successfully')));
        }
        else{
            die(json_encode(array('status'=>'0','msg'=>'Something Went Wrong')));
        }
    }

    private function upload_files($path, $title, $files)
    {
        $config = array(
            'upload_path'   => $path,
            'allowed_types' => 'jpg|gif|png|jpeg',
            'overwrite'     => 1,                       
        );

        $this->load->library('upload', $config);

        $images = array();

        foreach ($files['name'] as $key => $image) {
            $_FILES['images[]']['name']= $files['name'][$key];
            $_FILES['images[]']['type']= $files['type'][$key];
            $_FILES['images[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['images[]']['error']= $files['error'][$key];
            $_FILES['images[]']['size']= $files['size'][$key];

            $path = $image;
            $newName = md5(time().mt_rand(000000,999999)).".".pathinfo($path, PATHINFO_EXTENSION); 

            //$fileName = $title .'_'. $image;
            $fileName = $newName;

            $images[] = $fileName;

            $config['file_name'] = $fileName;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('images[]')) {
                $this->upload->data();
                $this->resizeImage($fileName);
            } else {
                return false;
            }
        }

        return $images;
    }

    public function resizeImage($filename)
   {
      $source_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/images/' . $filename;
      $target_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/images/';
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'width' => 500,
      );

      $this->load->library('image_lib');
// Set your config up
      $this->image_lib->initialize($config_manip);
        // Do your manipulation
      $this->image_lib->clear();
   
   }

}