<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate_verification extends CI_Controller {

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
		$this->load->view('school_technical_edu/certificate_verification',$data);
	}
 function validate_certificate(){
	  $data["active_class"]=8;
		  $data["menu"]=8;
		  $data["submenu"]=80;
		$data["dept_menu"]=0;
		$data["course_menu"]=0;
	 $reg_no=$this->input->post("registration_no"); 
	$data["certificate_details"]= $this->home_model->get_registration_details($reg_no);
	// $this->session->set_userdata('alert_status', 1);
	 	//redirect(site_url('school_technical_edu/validate_certificate'));	
			$this->load->view('school_technical_edu/validate_certificate',$data);
	
 }
	
}
?>