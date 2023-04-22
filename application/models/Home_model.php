<?php 
class Home_Model extends CI_Model {
	
	function __construct(){
		$this->load->database();
    }	
	
		 function get_sub_category_type($cat_id){
		$this->db->select("SQL_CALC_FOUND_ROWS sc.*",false);
		$this->db->from("arc_web_sub_categories sc");
		//$this->db->join("arc_categories c","c.web_cat_id=sc.web_cat_id","left");
		$this->db->where("sc.web_cat_id ",$cat_id);
		$this->db->where("sc.web_sub_cat_isactive ",1);
		$query = $this->db->get();
		return $query->result_array();  
		   
	   }
	   	function get_departments(){
			
			$this->db->select("SQL_CALC_FOUND_ROWS d.*,i.web_inst_name",false);
		$this->db->from("arc_web_departments d");
		$this->db->join("arc_web_institutions i","i.web_inst_id = d.web_inst_dept_ref_id","left");
		$this->db->where("d.web_dept_status",1);
		$this->db->where("i.web_inst_status",1);
		$query = $this->db->get();
		return $query->result_array();
		}
	
			function check_course($course_name,$course_num){
				//$this->db->where('web_cat_isactive', 1);
				$this->db->where("web_course_status",1);
		$this->db->where("LOWER(web_course_name)",strtolower(trim($course_name)));
		$this->db->or_where("web_course_number",$course_num);
			$dquery=$this->db->get('arc_web_courses');
		if($dquery->num_rows()>0){
				return 1;
				}else{
				return 0;
				}
		}
			function save_news($image_name){
			
				$data=array(
				"web_news_head"=>$this->input->post("news_head"),
				"web_news_category"=>$this->input->post("news_category"),
				'web_news_details'=>$this->input->post("news_details"),
				'web_news_date'=>date("Y-m-d",strtotime($this->input->post("news_date"))),
				'web_news_inst_id'=>$this->input->post("news_institute"),
				'web_news_image'=>$image_name
				);
				$this->db->insert('arc_web_news', $data);
					return true;
			
		}
		function update_news($image_name,$id){
			if($image_name!=""){
				$data=array(
				"web_news_head"=>$this->input->post("news_head"),
				"web_news_category"=>$this->input->post("news_category"),
				'web_news_details'=>$this->input->post("news_details"),
				'web_news_date'=>date("Y-m-d",strtotime($this->input->post("news_date"))),
				'web_news_inst_id'=>$this->input->post("news_institute"),
				'web_news_image'=>$image_name
				);
			} else{
			$data=array(
				"web_news_head"=>$this->input->post("news_head"),
				"web_news_category"=>$this->input->post("news_category"),
				'web_news_details'=>$this->input->post("news_details"),
				'web_news_date'=>date("Y-m-d",strtotime($this->input->post("news_date"))),
				'web_news_inst_id'=>$this->input->post("news_institute"),
				);	
			}
				 $this->db->where('web_news_id', $id);
				$this->db->update('arc_web_news', $data);
				return 1;
		}
		function delete_news($id){
		
				$data=array("web_news_status"=>0);
				 $this->db->where('web_news_id', $id);
				$this->db->update('arc_web_news', $data);
					return 1;
				
		}
			function get_news($inst_id=""){
		$this->db->select("SQL_CALC_FOUND_ROWS n.*,i.web_inst_name, c.web_sub_cat_name as news_category",false);
		$this->db->from("arc_web_news n");
		$this->db->join("arc_web_institutions i","i.web_inst_id=n.web_news_inst_id","left");
		$this->db->join("arc_web_sub_categories c","c.web_sub_cat_id  = n.web_news_category","left");
		$this->db->where("n.web_news_status ",1);
		$this->db->where("i.web_inst_status ",1);
		if($inst_id!=""){
			$this->db->where("n.web_news_inst_id ",$inst_id);	
		}
		$this->db->order_by("n.web_news_date","desc");
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->result_array();
		}
		function get_news_details($id){
			$this->db->select("SQL_CALC_FOUND_ROWS n.*,i.web_inst_name, c.web_sub_cat_name as news_category",false);
		$this->db->from("arc_web_news n");
		$this->db->join("arc_web_institutions i","i.web_inst_id=n.web_news_inst_id","left");
		$this->db->join("arc_web_sub_categories c","c.web_sub_cat_id  = n.web_news_category","left");
		$this->db->where("n.web_news_status ",1);
		$this->db->where("i.web_inst_status ",1);
				$this->db->where('n.web_news_id', $id);
			$dquery=$this->db->get();
		return $dquery->result_array();
		}
		function save_event($image_name){
			
				$data=array(
				"web_event_name"=>$this->input->post("event_name"),
				'web_event_location'=>$this->input->post("event_location"),
				'web_event_time'=>$this->input->post("event_time"),
				'web_event_date'=>date("Y-m-d",strtotime($this->input->post("event_date"))),
				'web_event_inst_id'=>$this->input->post("event_institute"),
				'web_event_image'=>$image_name
				);
				$this->db->insert('arc_web_events', $data);
					return true;
			
		}
			function update_event($image_name,$id){
			if($image_name!=""){
				$data=array(
				"web_event_name"=>$this->input->post("event_name"),
				'web_event_location'=>$this->input->post("event_location"),
				'web_event_time'=>$this->input->post("event_time"),
				'web_event_date'=>date("Y-m-d",strtotime($this->input->post("event_date"))),
				'web_event_inst_id'=>$this->input->post("event_institute"),
				'web_event_image'=>$image_name
				);
			} else{
			$data=array(
				"web_event_name"=>$this->input->post("event_name"),
				'web_event_location'=>$this->input->post("event_location"),
				'web_event_time'=>$this->input->post("event_time"),
				'web_event_date'=>date("Y-m-d",strtotime($this->input->post("event_date"))),
				'web_event_inst_id'=>$this->input->post("event_institute"),
				);
			}
				 $this->db->where('web_event_id', $id);
				$this->db->update('arc_web_events', $data);
				return 1;
		}
			function get_events($inst_id=""){
		$this->db->select("SQL_CALC_FOUND_ROWS e.*,i.web_inst_name",false);
		$this->db->from("arc_web_events e");
		$this->db->join("arc_web_institutions i","i.web_inst_id=e.web_event_inst_id","left");
		$this->db->where("e.web_event_status ",1);
		$this->db->where("i.web_inst_status ",1);
		if($inst_id!=""){
			$this->db->where("e.web_event_inst_id ",$inst_id);	
		}
		$this->db->order_by("e.web_event_date","desc");
		$query = $this->db->get();
		return $query->result_array();
		}
        	function get_event_details($id){
				$this->db->where('web_event_id', $id);
			$dquery=$this->db->get('arc_web_events');
		return $dquery->result_array();
		}
		function delete_event($id){
		
				$data=array("web_event_status"=>0);
				 $this->db->where('web_event_id', $id);
				$this->db->update('arc_web_events', $data);
					return 1;
				
		}
		
		function get_faculties(){
			
			$this->db->select("SQL_CALC_FOUND_ROWS f.*,c.web_sub_cat_name as campus",false);
		$this->db->from("arc_web_faculty f");
		$this->db->join("arc_web_sub_categories c","c.web_sub_cat_id  = f.web_faculty_location","left");
		$this->db->where("f.web_faculty_status",1);
		$this->db->where("c.web_sub_cat_isactive",1);
		$query = $this->db->get();
		return $query->result_array();
		}
			function get_faculty_details($id){
				$this->db->where('web_faculty_id', $id);
			$dquery=$this->db->get('arc_web_faculty');
		return $dquery->result_array();
		}
		function save_faculty($image_name){
			
				$data=array(
				"web_faculty_name"=>$this->input->post("faculty_name"),
				'web_faculty_prof'=>$this->input->post("faculty_prof"),
				'web_faculty_desc'=>$this->input->post("faculty_desc"),
				'web_faculty_qual'=>$this->input->post("faculty_qual"),
				'web_faculty_location'=>$this->input->post("faculty_location"),
				'web_faculty_image'=>$image_name
				);
				$this->db->insert('arc_web_faculty', $data);
					return true;
			
		}
			function update_faculty($image_name,$id){
			if($image_name!=""){
			$data=array(
				"web_faculty_name"=>$this->input->post("faculty_name"),
				'web_faculty_prof'=>$this->input->post("faculty_prof"),
				'web_faculty_desc'=>$this->input->post("faculty_desc"),
				'web_faculty_qual'=>$this->input->post("faculty_qual"),
				'web_faculty_location'=>$this->input->post("faculty_location"),
				'web_faculty_image'=>$image_name
				);
			} else{
		$data=array(
				"web_faculty_name"=>$this->input->post("faculty_name"),
				'web_faculty_prof'=>$this->input->post("faculty_prof"),
				'web_faculty_desc'=>$this->input->post("faculty_desc"),
				'web_faculty_qual'=>$this->input->post("faculty_qual"),
				'web_faculty_location'=>$this->input->post("faculty_location"),
				);
			}
				 $this->db->where('web_faculty_id', $id);
				$this->db->update('arc_web_faculty', $data);
				return 1;
		}
			function delete_faculty($id){
		
				$data=array("web_faculty_status"=>0);
				 $this->db->where('web_faculty_id', $id);
				$this->db->update('arc_web_faculty', $data);
					return 1;
				
		}
		function get_course_detials($course_name,$mode_of_training,$duration,$dept){
			
		$this->db->select("SQL_CALC_FOUND_ROWS c.*,d.web_dept_name,dr.web_sub_cat_name as duration,m.web_sub_cat_name as mode_of_training",false);
		$this->db->from("arc_web_courses c");
		$this->db->join("arc_web_departments d","d.web_dept_id = c.web_course_dept_ref_id","left");
		$this->db->join("arc_web_sub_categories dr","dr.web_sub_cat_id  = c.web_course_duration","left");
		$this->db->join("arc_web_sub_categories m","m.web_sub_cat_id  = c.web_mode_of_training","left");
		$this->db->where("d.web_dept_status",1);
		$this->db->where("c.web_course_status",1);
		$this->db->where("dr.web_sub_cat_isactive",1);
		$this->db->where("m.web_sub_cat_isactive",1);
	
		if($mode_of_training!=0){
				$this->db->where("c.web_mode_of_training",$mode_of_training);
		}
		if($duration!=0){
				$this->db->where("c.web_course_duration",$duration);
		}
		if($dept!=0){
				$this->db->where("c.web_course_dept_ref_id",$dept);
		}
			if(trim($course_name)!=""){
			$this->db->or_like("LOWER(c.web_course_name)",strtolower(trim($course_name)));
		}
		$query = $this->db->get();
		return $query->result_array();
		}
			function get_department_by_institution($inst_id){
				$this->db->where('web_inst_dept_ref_id', $inst_id);
				$this->db->where('web_dept_status',1);
			$dquery=$this->db->get('arc_web_departments');
		return $dquery->result_array();
		}
			function save_feedback($inst_id){
			
				$data=array(
				"web_feedback_person"=>$this->input->post("contact_name"),
				'web_feedback_email'=>$this->input->post("contact_email"),
				'web_feedback_message'=>$this->input->post("feedback_message"),
				'web_feedback_inst_id'=>$inst_id,
				);
				$this->db->insert('arc_web_feedback', $data);
					return true;
			
		}
		function save_newsletter($inst_id){
					$data=array(
				"web_news_letter_email"=>$this->input->post("news_letter_email"),
				"web_news_letter_inst_id"=>$inst_id
				);
				$this->db->insert('arc_news_letters', $data);
					return true;
		}
		function save_testimonial($image_name){
			
				$data=array(
				"web_testimonial_person"=>$this->input->post("testimonial_person"),
				'web_testimonial_message'=>$this->input->post("testimonial_message"),
				'web_testimonial_inst_ref_id'=>$this->input->post("testimonial_institute"),
				'web_testimonial_image'=>$image_name
				);
				$this->db->insert('arc_web_testimonials', $data);
					return true;
			
		}
			function update_testimonial($image_name,$id){
			if($image_name!=""){
				$data=array(
				"web_testimonial_person"=>$this->input->post("testimonial_person"),
				'web_testimonial_message'=>$this->input->post("testimonial_message"),
				'web_testimonial_inst_ref_id'=>$this->input->post("testimonial_institute"),
				'web_testimonial_image'=>$image_name
				);
			} else{
			$data=array(
				"web_testimonial_person"=>$this->input->post("testimonial_person"),
				'web_testimonial_message'=>$this->input->post("testimonial_message"),
				'web_testimonial_inst_ref_id'=>$this->input->post("testimonial_institute"),
				);
			}
				 $this->db->where('web_testimonial_id', $id);
				$this->db->update('arc_web_testimonials', $data);
				return 1;
		}
		
					function get_testimonials($inst_id=""){
		$this->db->select("SQL_CALC_FOUND_ROWS t.*,i.web_inst_name",false);
		$this->db->from("arc_web_testimonials t");
		$this->db->join("arc_web_institutions i","i.web_inst_id=t.web_testimonial_inst_ref_id","left");
		$this->db->where("t.web_testimonial_status ",1);
		$this->db->where("i.web_inst_status ",1);
		if($inst_id!=""){
			$this->db->where("t.web_testimonial_inst_ref_id ",$inst_id);	
		}
		//$this->db->order_by("t.web_event_date","asc");
		$query = $this->db->get();
		return $query->result_array();
		}
		  	function get_testimonial_details($id){
				$this->db->where('web_testimonial_id', $id);
			$dquery=$this->db->get('arc_web_testimonials');
		return $dquery->result_array();
		}
			function delete_testimonial($id){
		
				$data=array("web_testimonial_status"=>0);
				 $this->db->where('web_testimonial_id', $id);
				$this->db->update('arc_web_testimonials', $data);
					return 1;
				
		}
							function get_feedbacks($inst_id=""){
		$this->db->select("SQL_CALC_FOUND_ROWS f.*,i.web_inst_name",false);
		$this->db->from("arc_web_feedback f");
		$this->db->join("arc_web_institutions i","i.web_inst_id=f.web_feedback_inst_id","left");
		$this->db->where("f.web_feedback_status",1);
		$this->db->where("i.web_inst_status ",1);
		if($inst_id!=""){
			$this->db->where("f.web_feedback_inst_id ",$inst_id);	
		}
		$this->db->order_by("f.web_feedback_date","asc");
		$query = $this->db->get();
		return $query->result_array();
		}
								function get_news_letter_emails($inst_id=""){
		$this->db->select("SQL_CALC_FOUND_ROWS n.*,i.web_inst_name",false);
		$this->db->from("arc_news_letters n");
		$this->db->join("arc_web_institutions i","i.web_inst_id=n.web_news_letter_inst_id","left");
		//$this->db->where("n.web_news_letter_status",1);
		$this->db->where("i.web_inst_status ",1);
		if($inst_id!=""){
			$this->db->where("n.web_news_letter_inst_id ",$inst_id);	
		}
		//$this->db->order_by("n.web_news_letter_email","asc");
		$query = $this->db->get();
		return $query->result_array();
		}
								function get_news_letter_details($news_letter_id=""){
		$this->db->select("SQL_CALC_FOUND_ROWS n.*,ns.*,i.web_inst_name",false);
		$this->db->from("arc_news_letters n");
		$this->db->join("arc_web_news ns","ns.web_news_inst_id=n.web_news_letter_inst_id","left");
		$this->db->join("arc_web_institutions i","i.web_inst_id=n.web_news_letter_inst_id","left");
		//$this->db->where("n.web_news_letter_status",1);
		$this->db->where("ns.web_news_status ",1);
		$this->db->where("i.web_inst_status ",1);
		if($news_letter_id!=""){
			$this->db->where("n.web_news_letter_id ",$news_letter_id);	
		}
		//$this->db->order_by("n.web_news_letter_email","asc");
		$query = $this->db->get();
		return $query->result_array();
		}
		
		function save_course_search_log($ip,$course_name,$mode_of_training,$duration,$department,$campus,$inst_id){
			
			$data=array(
				"web_course_log_ip"=>$ip,
				"web_course_log_dept"=>$department,
				"web_course_log_location"=>$campus,
				"web_course_log_course"=>$course_name,
				"web_course_log_mode"=>$mode_of_training,
				"web_course_log_duration"=>$duration,
				"web_course_log_inst_id"=>$inst_id,
				
				);
				$this->db->insert('web_course_search_log', $data);
					return true;	
		}
		
			function get_course_duration($course_id){
		$this->db->select("SQL_CALC_FOUND_ROWS c.*,dr.web_sub_cat_name as duration",false);
		$this->db->from("arc_web_courses c");
		$this->db->join("arc_web_sub_categories dr","dr.web_sub_cat_id  = c.web_course_duration","left");
		$this->db->where("dr.web_sub_cat_isactive",1);
		$this->db->where("c.web_course_id",$course_id);
		$query = $this->db->get();
		return $query->result_array();
		}
		function save_certificate(){
			
				$data=array(
				"web_cert_reg_id"=>$this->input->post("cert_registration"),
				'web_cert_student_name'=>$this->input->post("student_name"),
				'web_cert_course_id'=>$this->input->post("course_name"),
				'web_cert_duration_id'=>$this->input->post("cert_duration"),
				'web_cert_status'=>$this->input->post("course_status"),
				'web_cert_issue_date'=>date("Y-m-d",strtotime($this->input->post("cert_issue_date")))
				);
				$this->db->insert('arc_web_certificate_validation', $data);
					return true;
		}
		function get_certificates($cert_id=0){
		$this->db->select("SQL_CALC_FOUND_ROWS ct.*,c.*,dr.web_sub_cat_name as duration,dpt.web_dept_id,i.web_inst_id",false);
		$this->db->from("arc_web_certificate_validation ct");
		$this->db->join("arc_web_courses c","c.web_course_id = ct.web_cert_course_id","left");
		$this->db->join("arc_web_sub_categories dr","dr.web_sub_cat_id  = ct.web_cert_duration_id","left");
		$this->db->join("arc_web_departments dpt","dpt.web_dept_id  = c.web_course_dept_ref_id","left");
		$this->db->join("arc_web_institutions i","i.web_inst_id  = dpt.web_inst_dept_ref_id","left");
		$this->db->where("dr.web_sub_cat_isactive",1);
		$this->db->where("ct.web_cert_status !=",0);
		if($cert_id!=0){
		$this->db->where("ct.web_cert_id",$cert_id);
		}
		$query = $this->db->get();
		return $query->result_array();
		}
			
			function update_certificate($cert_id){
			
				$data=array(
				"web_cert_reg_id"=>$this->input->post("cert_registration"),
				'web_cert_student_name'=>$this->input->post("student_name"),
				'web_cert_course_id'=>$this->input->post("course_name"),
				'web_cert_duration_id'=>$this->input->post("cert_duration"),
				'web_cert_status'=>$this->input->post("course_status"),
				'web_cert_issue_date'=>date("Y-m-d",strtotime($this->input->post("cert_issue_date")))
				);
			
			 $this->db->where('web_cert_id', $cert_id);
				$this->db->update('arc_web_certificate_validation', $data);
				return 1;
}
	function delete_certificate($id){
		
				$data=array("web_cert_status"=>0);
				 $this->db->where('web_cert_id', $id);
				$this->db->update('arc_web_certificate_validation', $data);
					return 1;
				
		}
		
		function get_registration_details($reg_no=''){
		$this->db->select("SQL_CALC_FOUND_ROWS ct.*,c.*,dr.web_sub_cat_name as duration,dpt.web_dept_id,i.web_inst_id",false);
		$this->db->from("arc_web_certificate_validation ct");
		$this->db->join("arc_web_courses c","c.web_course_id = ct.web_cert_course_id","left");
		$this->db->join("arc_web_sub_categories dr","dr.web_sub_cat_id  = ct.web_cert_duration_id","left");
		$this->db->join("arc_web_departments dpt","dpt.web_dept_id  = c.web_course_dept_ref_id","left");
		$this->db->join("arc_web_institutions i","i.web_inst_id  = dpt.web_inst_dept_ref_id","left");
		$this->db->where("dr.web_sub_cat_isactive",1);
		$this->db->where("ct.web_cert_status !=",0);
		if($reg_no!=''){
		$this->db->where("ct.web_cert_reg_id",$reg_no);
		} 
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result_array();
		}


}