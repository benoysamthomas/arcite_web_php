<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry_form extends CI_Controller {
function __construct()
	{	
        parent::__construct();	
        $this->load->model('enquiry_model');
	}

	public function index()
	{
		$data["menu"]=1;
		$data["submenu"]=0;
	    $data["gender_list"] = $this->enquiry_model->get_sub_category_type(ARC_GENDER);
	    $data["qualification_list"] = $this->enquiry_model->get_sub_category_type(ARC_QUALIFICATION);
	  //  $data["course_list"] = $this->enquiry_model->get_sub_category_type(ARC_COURSES);
	   $data["inst_id"]=0;
	    $data["departments"] = $this->enquiry_model->get_departments($this->session->userdata('institute_session'));
	    $data["course_list"] = $this->enquiry_model->get_course_list($this->session->userdata('institute_session'));
		$this->load->view('enquiry_form',$data);
	}
	public function technical_school_enquiry(){
		
		$data["menu"]=1;
		$data["submenu"]=0;
	    $data["gender_list"] = $this->enquiry_model->get_sub_category_type(ARC_GENDER);
	    $data["qualification_list"] = $this->enquiry_model->get_sub_category_type(ARC_QUALIFICATION);
	  //  $data["course_list"] = $this->enquiry_model->get_sub_category_type(ARC_COURSES);
	    $data["departments"] = $this->enquiry_model->get_departments(ARC_TECH_SCHOOL);
	    $data["course_list"] = $this->enquiry_model->get_course_list(ARC_TECH_SCHOOL);
		  $data["inst_id"]=ARC_TECH_SCHOOL;
		$this->load->view('enquiry_form',$data);	
		
	}
		public function media_school_enquiry(){
		
		$data["menu"]=1;
		$data["submenu"]=0;
	    $data["gender_list"] = $this->enquiry_model->get_sub_category_type(ARC_GENDER);
	    $data["qualification_list"] = $this->enquiry_model->get_sub_category_type(ARC_QUALIFICATION);
	  //  $data["course_list"] = $this->enquiry_model->get_sub_category_type(ARC_COURSES);
	    $data["departments"] = $this->enquiry_model->get_departments(ARC_MEDIA_SCHOOL);
	    $data["course_list"] = $this->enquiry_model->get_course_list(ARC_MEDIA_SCHOOL);
		  $data["inst_id"]=ARC_MEDIA_SCHOOL;
		$this->load->view('enquiry_form',$data);	
		
	}
			public function competitive_school_enquiry(){
		
		$data["menu"]=1;
		$data["submenu"]=0;
	    $data["gender_list"] = $this->enquiry_model->get_sub_category_type(ARC_GENDER);
	    $data["qualification_list"] = $this->enquiry_model->get_sub_category_type(ARC_QUALIFICATION);
	  //  $data["course_list"] = $this->enquiry_model->get_sub_category_type(ARC_COURSES);
	    $data["departments"] = $this->enquiry_model->get_departments(ARC_COMP_SCHOOL);
	    $data["course_list"] = $this->enquiry_model->get_course_list(ARC_COMP_SCHOOL);
		  $data["inst_id"]=ARC_COMP_SCHOOL;
		$this->load->view('enquiry_form',$data);	
		
	}
	public function submit_equiry(){
		

		$inst_id=$this->input->post("inst_id");
		$f_name=$this->input->post("f_name");
		$m_name=$this->input->post("m_name");
		$l_name=$this->input->post("l_name");
		$dob=date("Y-m-d",strtotime($this->input->post("dob")));
		$gender=$this->input->post("gender");
		$mobile=$this->input->post("mobile");
		$telephone=$this->input->post("telephone");
		$email=$this->input->post("email");
		$high_qualify=$this->input->post("high_qualify");
		$gaurdian_name=$this->input->post("gaurdian_name");
		$gaurdian_relation=$this->input->post("gaurdian_relation");
		$gaurdian_tele=$this->input->post("gaurdian_tele");
		$st_address=$this->input->post("st_address");
		$state=$this->input->post("state");
		$city=$this->input->post("city");
		$zipcode=$this->input->post("zipcode");
		$comments=$this->input->post("comments");
		$reference_person=$this->input->post("reference_person");
	if(empty($reference_person)){
		$ref_status=0;
	
	}else{
	$ref_status=1;	
	}
		$enquiry_data= array(
		"arc_adm_inst_id"=>$inst_id,
		"arc_adm_fname"=>$f_name,
		"arc_adm_mname"=>$m_name,
		"arc_adm_lname"=>$l_name,
		"arc_adm_dob"=>$dob,
		"arc_adm_enq_gender"=>$gender,
		"arc_adm_stud_mob"=>$mobile,
		"arc_adm_stud_tele"=>$telephone,
		"arc_adm_stud_email"=>$email,
		"arc_adm_enq_high_qual"=>$high_qualify,
		"arc_adm_gaurdian_name"=>$gaurdian_name,
		"arc_adm_gaurdian_relation"=>$gaurdian_relation,
		"arc_adm_gaurdian_tele"=>$gaurdian_tele,
		"arc_adm_staddress"=>$st_address,
		"arc_adm_state"=>$state,
		"arc_adm_city"=>$city,
		"arc_adm_zipcode"=>$zipcode,
		"arc_adm_enq_comments"=>$comments,
		"arc_adm_ref_status"=>$ref_status,
		"arc_adm_enq_course_status"=>1
		
		);
		$course_id=$this->enquiry_model->insert_enquiry($enquiry_data);
		//echo $course_id; exit;
		//$course_id=1;
		if($course_id!=0){
		$course=$this->input->post("course_name");
		$dept_name=$this->input->post("dept_name");
		$course_details= array();
		for($i=0; $i<count($course);$i++){
			$course_details[]= array(
			"arc_adm_enq_id"=>$course_id,
			"arc_course_id"=>$course[$i],
			"arc_course_dept_id"=>$dept_name[$i],
			);
		}
		//print_r($course_details); exit;
			$check_course=$this->enquiry_model->insert_course_details($course_details);
			if($ref_status==1){
			$reference_person_relation=$this->input->post("reference_person_relation");
			$reference_contact=$this->input->post("reference_contact");
			$reference_details= array();
		for($i=0; $i< count($reference_person);$i++){
			$reference_details[]= array(
			"arc_enq_id"=>$course_id,
			"arc_enq_ref_person	"=>$reference_person[$i],
			"arc_enq_ref_mob"=>$reference_contact[$i],
			"arc_ref_relation"=>$reference_person_relation[$i],
			);
		}
			$check_ref=$this->enquiry_model->insert_reference_details($reference_details);
	}
	$data["status"]=1;
	
			$this->load->view('enquiry_submit',$data);
			
		}else{
				$data["status"]=0;
	
				$this->load->view('enquiry_submit',$data);
		}
	}
	
	public function get_course_fee($course_id){
		$course_fee=$this->enquiry_model->get_course_fee($course_id);
		
		 $output = array("course_fee" => $course_fee);
	echo json_encode($output);	
		
	}
	public function get_courses($dept_id=0){
		$courses=$this->enquiry_model->get_courses($dept_id);
		$course_select='<option value="0">Select Course</option>';
		foreach($courses as $c){
			
			$course_select .='<option value="'.$c['web_course_id'].'">'.$c['web_course_name'].'</option>';
		}
		 $output = array("course_select" => $course_select);
	echo json_encode($output);	
		
	}
	
}



?>