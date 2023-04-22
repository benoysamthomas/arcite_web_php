<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_search extends CI_Controller {

   function __construct()
	{	
        parent::__construct();	
       $this->load->model('admin_model');
       $this->load->model('home_model');
		$this->load->library('session');
		$this->load->helper('cookie');
		//$this->load->library('encrypt');
	}
	public function index()
	{
		 $ip= $this->input->ip_address();
		 $inst_id=ARC_COMP_SCHOOL;
		  $data["active_class"]=4;
		   $data["menu"]=4;
		$data["submenu"]=40;
		$data["dept_menu"]=0;
		$data["course_menu"]=0;
		$course_name=$this->input->post("course_name");
		$department=$this->input->post("department");
		$mode_of_training=$this->input->post("mode_of_training");
		$duration=$this->input->post("duration");
		$data["dept_id"]=$department;
		$data["course_name"]=$course_name;
		$data["mode_of_training"]=$mode_of_training;
		$data["duration"]=$duration;
			 $campus="";
		$data["courses"] = $this->home_model->get_course_detials($course_name,$mode_of_training,$duration,$department);
			$this->home_model->save_course_search_log($ip,$course_name,$mode_of_training,$duration,$department,$campus,$inst_id);
		$this->load->view('school_competitive_exams/course_list',$data);
		
	}
	public function course_details($dept_menu=0,$course_menu=0,$en_course_id){
		
		  $data["active_class"]=4;
		   $data["menu"]=4;
		$data["submenu"]=41;
		$data["dept_menu"]=$dept_menu;
		$data["course_menu"]=$course_menu;
		 $course_id=base64_decode($en_course_id);
		 $dept_id=0;
		 $data["course_info"] = $this->admin_model->get_course_details($course_id,$dept_id);
		   $course_name="";
		 $mode_of_training="";
		 $duration="";
		 $department=$dept_id;
		 $campus="";
		 	 $ip= $this->input->ip_address();
		 $inst_id=ARC_COMP_SCHOOL;
		 	$this->home_model->save_course_search_log($ip,$course_name,$mode_of_training,$duration,$department,$campus,$inst_id);
		$this->load->view('school_competitive_exams/course_details',$data);
		
	}
		public function course_dept($dept_menu=0,$dept_id){
		
		  $data["active_class"]=4;
		   $data["menu"]=4;
		$data["submenu"]=40;
		$data["dept_menu"]=$dept_menu;
		$data["course_menu"]=0;
		 $dept_id=base64_decode($dept_id);
		  $course_id=0;
		 $data["course_info"] = $this->admin_model->get_course_details($course_id,$dept_id);
		 $course_name="";
		 $mode_of_training="";
		 $duration="";
		 $department=$dept_id;
		 $campus="";
		 	 $ip= $this->input->ip_address();
		 $inst_id=ARC_COMP_SCHOOL;
		 	$this->home_model->save_course_search_log($ip,$course_name,$mode_of_training,$duration,$department,$campus,$inst_id);
		$this->load->view('school_competitive_exams/course_dept_list',$data);
		
	}
}
?>