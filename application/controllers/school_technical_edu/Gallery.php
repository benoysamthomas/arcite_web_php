<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

   function __construct()
	{	
        parent::__construct();	
       // $this->load->model('login_model');
		$this->load->library('session');
		$this->load->helper('cookie');
		 $this->load->model('admin_model');
		 $this->load->model('home_model');
		 $this->load->model('gallery_model');
		//$this->load->library('encrypt');
	}
	public function index()
	{
		  $data["active_class"]=5;
		  $data["menu"]=5;
		$data["submenu"]=50;
		$data["dept_menu"]=0;
		$data["course_menu"]=0;
		$data["main_gallery"] = $this->gallery_model->get_main_gallery(ARC_TECH_SCHOOL);
		$this->load->view('school_technical_edu/gallery',$data);
	}
	
	public function gallery_category_details($en_gallery_id){
		
				  $data["active_class"]=5;
		  $data["menu"]=5;
		$data["submenu"]=50;
		$data["dept_menu"]=0;
		$data["course_menu"]=0;
			 $gallery_id=base64_decode($en_gallery_id);
		$data["gallery_category"] = $this->gallery_model->get_gallery_category_details($gallery_id);
		$this->load->view('school_technical_edu/gallery_category_details',$data);
	}

}
?>