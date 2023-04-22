<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

   function __construct()
	{	
        parent::__construct();	
       // $this->load->model('login_model');
		$this->load->library('session');
		$this->load->helper('cookie');
		//$this->load->library('encrypt');
	}
	public function index()
	{
		  $data["active_class"]=1;
		$this->load->view('landing',$data);
	}
}
?>