<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_settings extends CI_Controller {
  function __construct()
	{	
        parent::__construct();	
        $this->load->model('admin_model');
       // $this->load->model('enquiry_model');
	}

	public function index()
	{
		$data["menu"]=4;
		$data["submenu"]=41;
		$data["course_duration"] = $this->admin_model->get_sub_category_type(ARC_DURATION);
		$data["departments"] = $this->admin_model->get_departments(ARC_TECH_SCHOOL);
		$data["institutions"] = $this->admin_model->get_institutions();
	    $data["mode_of_training"] = $this->admin_model->get_sub_category_type(ARC_MODE);
		$data["courses"] = $this->admin_model->get_courses();
		$this->load->view('admin/course_settings',$data);
	}
		public function get_inst_department($inst_id=0){
		$departments=$this->admin_model->get_departments($inst_id);
		$dept_select='<option value="0">Select Department</option>';
		foreach($departments as $d){
			
			$dept_select .='<option value="'.$d['web_dept_id'].'">'.$d['web_dept_name'].'</option>';
		}
		 $output = array("dept_select" => $dept_select);
	echo json_encode($output);	
		
	}
	public function save_course(){
		$course_name=$this->input->post("course_name");
			$course_number=$this->input->post("course_number");
		//echo $cat_name; exit;
		$check_course=$this->admin_model->check_course($course_name,$course_number);
		if($check_course==0){
				$file_name="";
       // $image_name_thumb="";
		$image_width=400;
		$image_height=363;
		$image_folder='course_images';
		//$image_thumb_width=150;
		//$image_thumb_height=150;
		$config['upload_path']   = './course_images/'; 
     $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png|webp|WEBP'; 
      $config['max_size']      = 10024;
	  $config['overwrite'] = TRUE;
      $this->load->library('upload', $config);
	 // $this->upload->initialize($config);
	 if ($this->upload->do_upload('course_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImage($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
			
			
			$save_course_status=$this->admin_model->save_course($file_name);
			if($save_course_status==1){
				$this->session->set_userdata('alert_status', 1);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
			
		} else{
			
			$this->session->set_userdata('alert_status', 2);
		}
		redirect(site_url('course_settings'));	
		
	}
	   public function resizeImage($filename,$width,$height,$image_folder){
	    $source_path =  './'.$image_folder.'/' . $filename;
      $target_path =  './'.$image_folder.'/';
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'create_thumb' => FALSE,
          'width' => $width,
          'height' => $height
      );
      $this->load->library('image_lib', $config_manip);
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      } 
      $this->image_lib->clear();
   }
		public function edit_course_settings($id){
		$data["menu"]=4;
		$data["submenu"]=41;
		$dept=0;
		$data["course_details"] = $this->admin_model->get_course_details($id,$dept);
	$data["course_duration"] = $this->admin_model->get_sub_category_type(ARC_DURATION);
		//$data["departments"] = $this->admin_model->get_departments();
		$data["institutions"] = $this->admin_model->get_institutions();
	    $data["mode_of_training"] = $this->admin_model->get_sub_category_type(ARC_MODE);
	//	$data["courses"] = $this->admin_model->get_courses();
		$this->load->view('admin/edit_course_settings',$data);
		
	}
		public function update_course($id){
							$file_name="";
       // $image_name_thumb="";
	   if($this->input->post('inst_id')==ARC_COMP_SCHOOL){
		   	$image_width=700;
		$image_height=450;
		
	   }else{
		$image_width=400;
		$image_height=363;
	   }
		$image_folder='course_images';
		//$image_thumb_width=150;
		//$image_thumb_height=150;
		$config['upload_path']   = './course_images/'; 
     $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png|webp|WEBP'; 
      $config['max_size']      = 1024;
	  $config['overwrite'] = TRUE;
      $this->load->library('upload', $config);
	 // $this->upload->initialize($config);
	
	 if ($this->upload->do_upload('course_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImage($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
			
			$update_dept_status=$this->admin_model->update_course($id,$file_name);
			if($update_dept_status==1){
				$this->session->set_userdata('alert_status', 4);
			}else{
				$this->session->set_userdata('alert_status', 8);
				
			}
		redirect(site_url('course_settings'));	
	}
	function delete_course($id){
	
			$del_course_status=$this->admin_model->delete_course($id);
			if($del_course_status==1){
				$this->session->set_userdata('alert_status', 6);
			}else{
				$this->session->set_userdata('alert_status', 7);
				
			}
		redirect(site_url('course_settings'));	
	}
	public function departments(){
		$data["menu"]=4;
		$data["submenu"]=42;
		$data["departments"] = $this->admin_model->get_departments();
		$data["institutions"] = $this->admin_model->get_institutions();
		$this->load->view('admin/departments',$data);
		
	}
	public function save_department(){
		
			$dept_name=$this->input->post("dept_name");
			$inst_id=$this->input->post("inst_id");
		//echo $cat_name; exit;
		$check_dept_name=$this->admin_model->check_department($dept_name,$inst_id);
		if($check_dept_name==0){
			$file_name="";
					$image_width=1800;
		$image_height=700;
		$image_folder='department_images';
		//$image_thumb_width=150;
		//$image_thumb_height=150;
		$config['upload_path']   = './department_images/'; 
     $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png|webp|WEBP'; 
      $config['max_size']      = 20000;
	  $config['overwrite'] = TRUE;
      $this->load->library('upload', $config);
	 // $this->upload->initialize($config);
	 if ($this->upload->do_upload('dept_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImage($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
			
			
			$save_dept_status=$this->admin_model->save_department($file_name);
			if($save_dept_status==1){
				$this->session->set_userdata('alert_status', 1);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
			
		} else{
			
			$this->session->set_userdata('alert_status', 2);
		}
		redirect(site_url('course_settings/departments'));	
	}
		public function edit_dept_settings($id){
		$data["menu"]=4;
		$data["submenu"]=42;
		$data["department_details"] = $this->admin_model->get_department_details($id);
		//$data["departments"] = $this->admin_model->get_departments();
		$data["institutions"] = $this->admin_model->get_institutions();
		$this->load->view('admin/edit_departments',$data);
		
	}
		public function update_department($id){
			$file_name="";
							$image_width=1800;
		$image_height=700;
		$image_folder='department_images';
		//$image_thumb_width=150;
		//$image_thumb_height=150;
		$config['upload_path']   = './department_images/'; 
     $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png|webp|WEBP'; 
      $config['max_size']      = 20000;
	  $config['overwrite'] = TRUE;
      $this->load->library('upload', $config);
	 // $this->upload->initialize($config);
	 if ($this->upload->do_upload('dept_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImage($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
			
			
			$update_dept_status=$this->admin_model->update_department($id,$file_name);
			if($update_dept_status==1){
				$this->session->set_userdata('alert_status', 4);
			}else{
				$this->session->set_userdata('alert_status', 8);
				
			}
		redirect(site_url('course_settings/departments'));	
	}
		function delete_department($id){
	
			$del_dept_status=$this->admin_model->delete_department($id);
			if($del_dept_status==1){
				$this->session->set_userdata('alert_status', 6);
			}else{
				$this->session->set_userdata('alert_status', 7);
				
			}
		redirect(site_url('course_settings/departments'));	
	}
	
	}