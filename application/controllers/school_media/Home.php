<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$data["submenu"]=11;
			$data["dept_menu"]=0;
		$data["course_menu"]=0;
		$data["departments"] = $this->home_model->get_department_by_institution(ARC_MEDIA_SCHOOL);
		$data["course_duration"] = $this->admin_model->get_sub_category_type(ARC_DURATION);
		$data["mode_of_training"] = $this->admin_model->get_sub_category_type(ARC_MODE);
		$data["campus_location"] = $this->home_model->get_sub_category_type(ARC_CAMPUS);
		$data["news"] = $this->home_model->get_news(ARC_MEDIA_SCHOOL);
		$data["upcoming_events"] = $this->home_model->get_events(ARC_MEDIA_SCHOOL);
			$this->session->set_userdata('institute_session',ARC_MEDIA_SCHOOL);
		$this->load->view('school_media/home',$data);
	}
	public function faculty(){
		
		 $data["active_class"]=1;
		$this->load->view('school_media/tech_include/faculty',$data);
	}
	public function testimonials(){
		
		  $data["active_class"]=3;
		   $data["menu"]=3;
		$data["submenu"]=33;
		$data["dept_menu"]=0;
		$data["course_menu"]=0;
		$data["testimonials"] = $this->home_model->get_testimonials(ARC_MEDIA_SCHOOL);
		$this->load->view('school_media/student_testimonials',$data);
		
	}
	public function save_newsletter(){
		
		$this->home_model->save_newsletter(ARC_MEDIA_SCHOOL);
	// $this->session->set_userdata('alert_status', 1);
	 	//redirect(site_url('school_technical_edu/contact_us'));	
		 $output = array("newsletter_status" => 1);
		
	echo json_encode($output);
	}
}
?>