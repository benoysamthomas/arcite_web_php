<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_settings extends CI_Controller {
  function __construct()
	{	
        parent::__construct();	
        $this->load->model('home_model');
        $this->load->model('admin_model');
        $this->load->model('gallery_model');
	}

	public function index()
	{
		$data["menu"]=6;
		$data["submenu"]=61;
	  // $data["news_category"] = $this->home_model->get_sub_category_type(NEWS_CAT);
		$data["institutions"] = $this->admin_model->get_institutions();
	   // $data["mode_of_training"] = $this->home_model->get_sub_category_type(ARC_MODE);
		$data["gallery"] = $this->gallery_model->get_main_gallery();
		$this->load->view('admin/manage_main_gallery',$data);
	}
	
	public function save_gallery(){
		$file_name="";
       // $image_name_thumb="";
		$image_width=400;
		$image_height=534;
		$image_folder='gallery_images';
		//$image_thumb_width=150;
		//$image_thumb_height=150;
		$config['upload_path']   = './gallery_images/'; 
     $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png'; 
      $config['max_size']      = 1024;
	  //$config['overwrite'] = TRUE;
      $this->load->library('upload', $config);
	 // $this->upload->initialize($config);
	 if ($this->upload->do_upload('gallery_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImageWithoutThumb($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
		
		$save_news_status=$this->gallery_model->save_gallery($file_name);
			if($save_news_status==1){
				$this->session->set_userdata('alert_status', 1);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
				redirect(site_url('gallery_settings'));	
		
	}
	
	
   public function resizeImage($filename,$width,$height,$image_folder){
	    $source_path =  './'.$image_folder.'/' . $filename;
      $target_path =  './'.$image_folder.'/thumbnails/';
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'create_thumb' => TRUE,
          'thumb_marker' => '_thumb',
          'width' => $width,
          'height' => $height
      );
      $this->load->library('image_lib', $config_manip);
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      } 
      $this->image_lib->clear();
   }
	   
   	   public function resizeImageWithoutThumb($filename,$width,$height,$image_folder){
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

		public function edit_gallery_settings($id){
		$data["menu"]=5;
		$data["submenu"]=51;
		$data["gallery_details"] = $this->gallery_model->get_gallery_details($id);
		$data["institutions"] = $this->admin_model->get_institutions();
		$this->load->view('admin/edit_manage_main_gallery',$data);
		
	}
		public function update_gallery($id){
					$file_name="";
       // $image_name_thumb="";
			$image_width=400;
		$image_height=534;
		$image_folder='gallery_images';
		//$image_thumb_width=150;
		//$image_thumb_height=150;
		$config['upload_path']   = './gallery_images/'; 
     $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png'; 
      $config['max_size']      = 1024;
      $this->load->library('upload', $config);
	 // $this->upload->initialize($config);
	 if ($this->upload->do_upload('gallery_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImageWithoutThumb($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
			$update_news_status=$this->gallery_model->update_gallery($file_name,$id);
			if($update_news_status==1){
				$this->session->set_userdata('alert_status', 4);
			}else{
				$this->session->set_userdata('alert_status', 8);
				
			}
		redirect(site_url('gallery_settings'));	
	}
	function delete_gallery($id){
	
			$del_news_status=$this->gallery_model->delete_gallery($id);
			if($del_news_status==1){
				$this->session->set_userdata('alert_status', 6);
			}else{
				$this->session->set_userdata('alert_status', 7);
				
			}
		redirect(site_url('gallery_settings'));	
	}
		public function manage_gallery_category()
	{
		$data["menu"]=6;
		$data["submenu"]=62;
		//$data["course_duration"] = $this->home_model->get_sub_category_type(ARC_DURATION);
		$data["institutions"] = $this->admin_model->get_institutions();
	   // $data["mode_of_training"] = $this->home_model->get_sub_category_type(ARC_MODE);
			$data["gallery_category"] = $this->gallery_model->get_gallery_category();
		$this->load->view('admin/manage_gallery_category',$data);
	}
	
	public function get_inst_gallery($inst_id){
				$gallery=$this->gallery_model->get_main_gallery($inst_id);
		$gallery_select='<option value="0">Select Gallery</option>';
		foreach($gallery as $g){
			
			$gallery_select .='<option value="'.$g['web_gallery_id'].'">'.$g['web_gallery_category_name'].'</option>';
		}
		 $output = array("gallery_select" => $gallery_select);
	echo json_encode($output);	
		
	}
		public function save_gallery_category(){
		$file_name="";
       // $image_name_thumb="";
		$image_width=800;
		$image_height=533;
		$image_folder='gallery_category_images';
		//$image_thumb_width=150;
		//$image_thumb_height=150;
		$config['upload_path']   = './gallery_category_images/'; 
     $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png'; 
      $config['max_size']      = 10024;
	  //$config['overwrite'] = TRUE;
      $this->load->library('upload', $config);
	 // $this->upload->initialize($config);
	 if ($this->upload->do_upload('gallery_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImageWithoutThumb($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
		
		$save_news_status=$this->gallery_model->save_gallery_category($file_name);
			if($save_news_status==1){
				$this->session->set_userdata('alert_status', 1);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
				redirect(site_url('gallery_settings/manage_gallery_category'));	
		
	}
	public function edit_gallery_category_settings($id){
		$data["menu"]=6;
		$data["submenu"]=62;
		$data["gallery_category_info"] = $this->gallery_model->get_gallery_category_info($id);
		$data["institutions"] = $this->admin_model->get_institutions();
		$this->load->view('admin/edit_manage_gallery_category',$data);
		
	}
	public function update_gallery_category($id){
		$file_name="";
       // $image_name_thumb="";
		$image_width=800;
		$image_height=533;
		$image_folder='gallery_category_images';
		//$image_thumb_width=150;
		//$image_thumb_height=150;
		$config['upload_path']   = './gallery_category_images/'; 
     $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png'; 
      $config['max_size']      = 10024;
	  //$config['overwrite'] = TRUE;
      $this->load->library('upload', $config);
	 // $this->upload->initialize($config);
	 if ($this->upload->do_upload('gallery_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImageWithoutThumb($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
		
		$save_news_status=$this->gallery_model->update_gallery_category($file_name,$id);
			if($save_news_status==1){
				$this->session->set_userdata('alert_status', 4);
			}else{
				$this->session->set_userdata('alert_status', 5);
				
			}
				redirect(site_url('gallery_settings/manage_gallery_category'));	
		
	}
		function delete_gallery_category($id){
	
			$del_event_status=$this->gallery_model->delete_gallery_category($id);
			if($del_event_status==1){
				$this->session->set_userdata('alert_status', 6);
			}else{
				$this->session->set_userdata('alert_status', 7);
				
			}
			redirect(site_url('gallery_settings/manage_gallery_category'));	
	}
	
	}