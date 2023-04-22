<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Igbc_student_chapter extends CI_Controller {

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
		  $data["active_class"]=6;
		  $data["menu"]=6;
		$data["submenu"]=60;
		$data["dept_menu"]=0;
		$data["course_menu"]=0;
		//$data["events"] = $this->home_model->get_events(ARC_TECH_SCHOOL);
		$this->load->view('school_technical_edu/igbc_student_chapter',$data);
	}

	
}
?>