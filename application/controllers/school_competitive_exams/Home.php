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
		$data["departments"] = $this->home_model->get_department_by_institution(ARC_COMP_SCHOOL);
		$data["course_duration"] = $this->admin_model->get_sub_category_type(ARC_DURATION);
		$data["mode_of_training"] = $this->admin_model->get_sub_category_type(ARC_MODE);
		$data["campus_location"] = $this->home_model->get_sub_category_type(ARC_CAMPUS);
			$this->session->set_userdata('institute_session',ARC_COMP_SCHOOL);
			//$data['goto'] = '<span id="goto">stem_canvas</span>';
			$course_name=$this->input->post("course_name");
		$department=$this->input->post("department");
		$mode_of_training=$this->input->post("mode_of_training");
		$duration=$this->input->post("duration");
		$data["dept_id"]=$department;
		$data["course_name"]=$course_name;
		$data["mode_of_training"]=$mode_of_training;
		$data["duration"]=$duration;
		$data["courses"] = $this->home_model->get_course_detials($course_name,$mode_of_training,$duration,$department);
		$data['goto'] = '';
		$this->load->view('school_competitive_exams/home',$data);
	}
	public function announcements(){
		 $data["active_class"]=6;
		  $data["menu"]=6;
		$data["submenu"]=61;
			$data["dept_menu"]=0;
		$data["course_menu"]=0;
		$data["departments"] = $this->home_model->get_department_by_institution(ARC_COMP_SCHOOL);
		$data["course_duration"] = $this->admin_model->get_sub_category_type(ARC_DURATION);
		$data["mode_of_training"] = $this->admin_model->get_sub_category_type(ARC_MODE);
		$data["campus_location"] = $this->home_model->get_sub_category_type(ARC_CAMPUS);
			$this->session->set_userdata('institute_session',ARC_COMP_SCHOOL);
	//$data['goto'] = '<span id="goto">announcements</span>';
		$data['goto'] = '';
			$data["news"] = $this->home_model->get_news(ARC_COMP_SCHOOL);
		$this->load->view('school_competitive_exams/announcements',$data);
		
	}
	
	public function announcement_in_detail($en_news_id){
		  $data["menu"]=6;
		$data["submenu"]=61;
			$data["dept_menu"]=0;
		$data["course_menu"]=0;
		$news_id=base64_decode($en_news_id);
		$data["news_details"] = $this->home_model->get_news_details($news_id);
				$this->load->view('school_competitive_exams/announcement_in_detail',$data);
		
	}
		public function save_newsletter(){
		
		$this->home_model->save_newsletter(ARC_COMP_SCHOOL);
	 $this->session->set_userdata('alert_status', 1);
	 	redirect(site_url('school_competitive_exams/home'));	
		 
	}
}
?>