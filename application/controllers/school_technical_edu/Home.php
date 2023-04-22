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
			//$this->load->library('twitterfetcher');
	}
	public function index()
	{
		
	

     /*  $tweets = $this->twitterfetcher->getTweets(array(
            'consumerKey'       => 'IKoqZJNbBWAqXk4KCzFKBXzHZ',
            'consumerSecret'    => 'Bp2Jwu640B9mIq9DvwhPnTV0RewJWkGBt0Ey5s8bJJSKBhYZsO',
            'accessToken'       => '1385166778460893184-6UA0TGGisUniehADTeepMV2fpG2Uv0',
            'accessTokenSecret' => '6dJ2GiMzRTPNzJ2IpJmiEkkGR69sv1IiyI8zTAVIxjSL8',
            'usecache'          => false,
            'count'             => 2,  //this how many tweets to fectch
            'numdays'           => 30
        ));
    $data['twiites'] = $tweets  ; */

		
		  $data["active_class"]=1;
		  $data["menu"]=1;
		$data["submenu"]=11;
		$data["dept_menu"]=0;
		$data["course_menu"]=0;
		$data["departments"] = $this->home_model->get_department_by_institution(ARC_TECH_SCHOOL);
		$data["course_duration"] = $this->admin_model->get_sub_category_type(ARC_DURATION);
		$data["mode_of_training"] = $this->admin_model->get_sub_category_type(ARC_MODE);
		$data["campus_location"] = $this->home_model->get_sub_category_type(ARC_CAMPUS);
		$data["news"] = $this->home_model->get_news(ARC_TECH_SCHOOL);
		$data["upcoming_events"] = $this->home_model->get_events(ARC_TECH_SCHOOL);
		$this->session->set_userdata('institute_session',ARC_TECH_SCHOOL);
		$data["testimonials"] = $this->home_model->get_testimonials(ARC_TECH_SCHOOL);
		$this->load->view('school_technical_edu/home',$data);
	}
	public function faculty(){
		
		 $data["active_class"]=1;
		 		$data["dept_menu"]=0;
		$data["course_menu"]=0;
		$this->load->view('school_technical_edu/tech_include/faculty',$data);
	}
	public function testimonials(){
		
		  $data["active_class"]=3;
		   $data["menu"]=3;
		$data["submenu"]=33;
		$data["dept_menu"]=0;
		$data["course_menu"]=0;
		$data["testimonials"] = $this->home_model->get_testimonials(ARC_TECH_SCHOOL);
		$this->load->view('school_technical_edu/student_testimonials',$data);
		
	}
	public function save_newsletter(){
		
		$this->home_model->save_newsletter(ARC_TECH_SCHOOL);
	// $this->session->set_userdata('alert_status', 1);
	 	//redirect(site_url('school_technical_edu/contact_us'));	
		 $output = array("newsletter_status" => 1);
		
	echo json_encode($output);
	}
	
}
?>