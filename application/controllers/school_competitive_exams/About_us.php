<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

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
		  $data["active_class"]=8;
		  $data["menu"]=8;
		$data["submenu"]=81;
				$data["dept_menu"]=0;
		$data["course_menu"]=0;
		$this->load->view('school_competitive_exams/about_us',$data);
	}
	
	
}
?>