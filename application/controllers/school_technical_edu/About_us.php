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
		  $data["active_class"]=4;
		  $data["menu"]=4;
		$data["submenu"]=41;
				$data["dept_menu"]=0;
		$data["course_menu"]=0;
		//$data['goto'] = '<span id="goto">stem_canvas</span>';
		$data['goto'] = '';
		$this->load->view('school_technical_edu/about_us',$data);
	}
	public function arcite_edu_soln_ltd(){
		
		  $data["active_class"]=4;
		  $data["menu"]=4;
		$data["submenu"]=41;
				$data["dept_menu"]=0;
		$data["course_menu"]=0;
		//$data['goto'] = '';
		$data['goto'] = '<span id="goto">technical_edu</span>';
		$this->load->view('school_technical_edu/about_us',$data);
	}
		public function stem(){
		
		  $data["active_class"]=4;
		  $data["menu"]=4;
		$data["submenu"]=41;
				$data["dept_menu"]=0;
		$data["course_menu"]=0;
		//$data['goto'] = '';
		$data['goto'] = '<span id="goto">stem</span>';
		$this->load->view('school_technical_edu/about_us',$data);
	}
	public function canvas(){
		
		  $data["active_class"]=4;
		  $data["menu"]=4;
		$data["submenu"]=41;
				$data["dept_menu"]=0;
		$data["course_menu"]=0;
		//$data['goto'] = '';
		$data['goto'] = '<span id="goto">canvas</span>';
		$this->load->view('school_technical_edu/about_us',$data);
	}
}
?>