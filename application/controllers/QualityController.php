<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QualityController extends CI_Controller {

	public function __construct() {
       parent::__construct();
       $this->load->model('CommonModel');
    }

    public function pvt_cars($id){
        $data['case_id'] = $id;
    	$this->load->view('layout/header');
		$this->load->view('pvt_cars',$data);
		$this->load->view('layout/footer');
    }

    public function two_wheeler($id){
        $data['case_id'] = $id;
    	$this->load->view('layout/header');
		$this->load->view('two_wheeler',$data);
		$this->load->view('layout/footer');
    }

    public function commercial($id){
        $data['case_id'] = $id;
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