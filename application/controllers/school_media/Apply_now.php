<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply_now extends CI_Controller {

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
		  $data["active_class"]=1;
		  $data["menu"]=1;
		$data["submenu"]=11;
		$data["dept_menu"]=0;
		$data["course_menu"]=0;
		$this->load->view('school_media/apply_now',$data);
	}
}
?>