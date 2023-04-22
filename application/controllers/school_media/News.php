<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

   function __construct()
	{	
        parent::__construct();	
       // $this->load->model('login_model');
		$this->load->library('session');
		$this->load->helper('cookie');
		 $this->load->model('admin_model');
		 $this->load->model('home_model');
		//$this->load->library('encrypt');
	}
	public function index()
	{
		  $data["active_class"]=1;
		  $data["menu"]=1;
		$data["submenu"]=10;
		$data["dept_menu"]=0;
		$data["course_menu"]=0;
		$data["news"] = $this->home_model->get_news(ARC_MEDIA_SCHOOL);
		$this->load->view('school_media/news_all',$data);
	}

	
}
?>