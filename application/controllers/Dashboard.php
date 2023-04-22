<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
   function __construct()
	{	
        parent::__construct();	
       // $this->load->model('login_model');
		$this->load->library('session');
		$this->load->helper('cookie');
		 $this->load->model('admin_model');
		//$this->load->library('encrypt');
	}

	public function index()
	{
		$data["menu"]=1;
		$data["submenu"]=0;
		$data["technical"] = $this->admin_model->get_course_log_inst_count(ARC_TECH_SCHOOL);
		$data["media"] = $this->admin_model->get_course_log_inst_count(ARC_MEDIA_SCHOOL);
		$data["competitive"] = $this->admin_model->get_course_log_inst_count(ARC_COMP_SCHOOL);
		$this->load->view('admin/dashboard',$data);
	}
}



?>