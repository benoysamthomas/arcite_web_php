<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller {

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
		$data["submenu"]=80;
		$data["dept_menu"]=0;
		$data["course_menu"]=0;
		//$data["events"] = $this->home_model->get_events(ARC_TECH_SCHOOL);
		$this->load->view('school_competitive_exams/contact_us',$data);
	}
 function save_feedback(){
	 $this->home_model->save_feedback(ARC_MEDIA_SCHOOL);
	 $this->session->set_userdata('alert_status', 1);
	 	redirect(site_url('school_competitive_exams/contact_us'));	
 }
	
}
?>