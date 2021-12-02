<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiController extends CI_Controller {
	public function __construct() {
       parent::__construct();
       $this->load->model('CommonModel');
    }

    public function fe_login(){
    	$phone_number = $this->input->post('phone_number'); 
    	$table = "field_executive";
    	$condition = array('fe_phone'=>$phone_number,'fe_status'=>'1');
    	$data = $this->CommonModel->fetch_data($table,$condition);
    	if ($data) {
    		die(json_encode(array('status'=>'1','data'=>$data)));
    	}
    	else{
    		die(json_encode(array('status'=>'0','msg'=>'Invalid User')));
    	}
    }

    public function fe_landing(){
    	$fe_id = $this->input->post('fe_id');
    	$table = "cases";
    	$cond1 = array('assigned_fe'=>$fe_id,'case_status'=>'1','vehicle_class'=>'COMMERCIAL');
    	$cond2 = array('assigned_fe'=>$fe_id,'case_status'=>'1','vehicle_class'=>'PRIVATE VEHICLE');
    	$cond3 = array('assigned_fe'=>$fe_id,'case_status'=>'1','vehicle_class'=>'TWO WHEELERS');
    	$commercial = count($this->CommonModel->fetch_data($table,$cond1));
    	$pvt = count($this->CommonModel->fetch_data($table,$cond2));
    	$two_wheel = count($this->CommonModel->fetch_data($table,$cond3));
    	$data = array(array(
    		'two_wheeler'=>$two_wheel,
    		'private_vehicle'=>$pvt,
    		'commercial'=>$commercial
    					));
    	die(json_encode(array('status'=>'1','data'=>$data)));
    }

    public function fe_task_list(){
    	$fe_id = $this->input->post('fe_id');
    	$category_name = $this->input->post('category_name');
    	$table = "cases";
    	$condition = array('assigned_fe'=>$fe_id,'vehicle_class'=>$category_name,'case_status'=>'1');
    	$data = $this->CommonModel->fetch_data($table,$condition);
    	if ($data) {
    		die(json_encode(array('status'=>'1','data'=>$data)));
    	}
    	else{
    		die(json_encode(array('status'=>'0','msg'=>'No Tasks Found')));
    	}

    }

    public function upload_pics(){
        $title = "test";
        $video = "";
        $all_pics = "";
        $chasis_pic = "";
        $path = "./upload/images/";
        $path_video = "./upload/videos/";
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
        if (!empty($_FILES['video']['name'][0])) {
            $result = $this->upload_files_video($path_video,$title, $_FILES['video']);
            if ($result === FALSE) {
                $data['error'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');
                die(json_encode(array('status'=>'0','msg'=>$data['error'])));
            }
            else{
                $video = implode(",",$result);
            }
        }
        $case_id = $this->input->post('task_id');
        $table = "vehicle_pics";
        $data = array('case_id'=>$case_id,'all_pics'=>$all_pics,'chasis_pic'=>$chasis_pic,'video'=>$video);
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

    private function upload_files_video($path, $title, $files)
    {
        $config = array(
            'upload_path'   => $path,
            'allowed_types' => 'mp4',
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
                //$this->resizeImage($fileName);
            } else {
                return false;
            }
        }

        return $images;
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

   public function agent_login(){
    $agent_code = $this->input->post('agent_code');
    $table = "insurance_companies"; 
    $table = "agents";
    $table1 = "insurance_companies";
    $condition1 = "agents.company_id = insurance_companies.company_id";
    $table2 = "company_branches";
    $condition2 = "agents.branch_id = company_branches.branch_id";
    $where = array('agents.agent_code'=>$agent_code);
    $agents = $this->CommonModel->fetch_data_join_double_api($table,$table1,$condition1,$table2,$condition2,$where);
    if (count($agents)>0) {
        die(json_encode(array('status'=>'1','data'=>array($agents[0]))));
    }
    else{
        die(json_encode(array('status'=>'0','msg'=>'Login Failed')));
    }
   }

   public function self_inspection(){
    $prefix = $this->input->post('prefix_ins');
    $prefix = $prefix."-".date("Y")."-";
    unset($_POST['prefix_ins']);
    $table = "cases";
    $insert = $this->CommonModel->insert_last_function($table,$_POST);
    if ($insert) {
        $ref_no = $prefix.$insert;
        $case_id = $insert;
        $condition = array('case_id'=>$case_id);
        $table = "cases";
        $data = array('ref_no'=>$ref_no);
        $update = $this->CommonModel->update_table($table,$data,$condition);
        if ($update) {
            die(json_encode(array('status'=>'1','msg'=>'Case Added Successfully')));
        }
        else{
            die(json_encode(array('status'=>'0','msg'=>'Something Went Wrong')));
        }
    }
    else{
        die(json_encode(array('status'=>'0','msg'=>'Something Went Wrong')));
    }
   }

   public function view_cases(){
    $agent_code = $this->input->post('agent_code');
    $table = "cases";
    $condition = array('agent_code'=>$agent_code);
    $data = $this->CommonModel->fetch_data($table,$condition); 
    if (count($data)>0) {
        die(json_encode(array('status'=>'1','data'=>$data)));
    }
    else{
        die(json_encode(array('status'=>'0','msg'=>'No Data')));
    }
   }
}