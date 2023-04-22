<?php 
class Enquiry_Model extends CI_Model {
	
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
	   
	   function get_course_fee($course_id){
		   if($course_id!=0){
		   $dquery=$this->db->get_where('arc_course_fee', array('arc_course_fee_isactive' => 1,'arc_course_id'=>$course_id));
		   
		   $course_fee_details=$dquery->result_array();
			foreach($course_fee_details as $cf){
				$course_fee=$cf["arc_fee"];
			}
			return $course_fee;
		   }else{
			   
			   return 0;
		   }
	   }
	   function insert_enquiry($data){
		   	$dquery=$this->db->get_where('arc_admission_enquiry', $data);
		if($dquery->num_rows()>0){
				return 0;
				}else{
				 $this->db->insert('arc_admission_enquiry', $data); 
				if($this->db->affected_rows() > 0){
                return $this->db->insert_id();
				}else{
				return 0;	
				}
			}
		   
       
        }
		function insert_course_details($data){
			  $this->db->insert_batch('arc_enq_courses', $data); 
	
            return 1;
     	
		}
		function insert_reference_details($data){
			  $this->db->insert_batch('arc_enq_reference', $data); 
            return 1;
       
			
		}
		
		   /*------ENQUIRY LIST-----*/
	   
	   function get_enquiry_details(){
		   $this->db->select("SQL_CALC_FOUND_ROWS enq.*,i.*",false);
		$this->db->from("arc_admission_enquiry enq");
		$this->db->join("arc_web_institutions i","i.web_inst_id=enq.arc_adm_inst_id","left");
		$this->db->where("enq.arc_adm_user_status ",1);
		if($this->session->userdata('uRole') == ROLE_COUNSELOR){
			$this->db->where("enq.arc_adm_staff_id ",$this->session->userdata('userid'));
			
		}
		//$this->db->where("sc.arc_sub_cat_isactive ",1);
		$this->db->order_by("enq.arc_adm_enq_date","asc");
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->result_array();  
	   }
	   
	   
	   function get_student_enquiry_info($id){
			   $this->db->select("SQL_CALC_FOUND_ROWS enq.*,i.*,g.web_sub_cat_name as gender,q.web_sub_cat_name as qualification",false);
		$this->db->from("arc_admission_enquiry enq");
				$this->db->join("arc_web_institutions i","i.web_inst_id=enq.arc_adm_inst_id","left");
		$this->db->join("arc_web_sub_categories g","g.web_sub_cat_id=enq.arc_adm_enq_gender","left");
		$this->db->join("arc_web_sub_categories q","q.web_sub_cat_id=enq.arc_adm_enq_high_qual","left");
		$this->db->where("enq.arc_adm_id",$id);
		//$this->db->where("sc.web_sub_cat_status ",1);
	//	$this->db->order_by("enq.arc_adm_enq_date","asc");
		$query = $this->db->get();
		return $query->result_array();  
		   
	   }
	   function get_student_enquiry_courses($id){
		 		   $this->db->select("SQL_CALC_FOUND_ROWS ec.*,c.*,d.*",false);
		$this->db->from("arc_enq_courses ec");
				$this->db->join("arc_web_courses c","c.web_course_id=ec.arc_course_id","left");
		$this->db->join("arc_web_departments d","d.web_dept_id=ec.arc_course_dept_id","left");
		$this->db->where("ec.arc_adm_enq_id",$id);
		//$this->db->where("sc.web_sub_cat_status ",1);
	//	$this->db->order_by("enq.arc_adm_enq_date","asc");
		$query = $this->db->get();
		return $query->result_array();    
		   
	   }
	   	   function get_student_enquiry_references($id){
		 		   $this->db->select("SQL_CALC_FOUND_ROWS r.*",false);
		$this->db->from("arc_enq_reference r");
		$this->db->where("r.arc_enq_id",$id);
		//$this->db->where("sc.web_sub_cat_status ",1);
	//	$this->db->order_by("enq.arc_adm_enq_date","asc");
		$query = $this->db->get();
		return $query->result_array();    
		   
	   }
	   
	    function get_course_list($inst_id=0){
				$this->db->select("SQL_CALC_FOUND_ROWS c.*,d.web_dept_name,dr.web_sub_cat_name as duration,m.web_sub_cat_name as mode_of_training",false);
		$this->db->from("arc_web_courses c");
		$this->db->join("arc_web_departments d","d.web_dept_id = c.web_course_dept_ref_id","left");
		$this->db->join("arc_web_sub_categories dr","dr.web_sub_cat_id  = c.web_course_duration","left");
		$this->db->join("arc_web_sub_categories m","m.web_sub_cat_id  = c.web_mode_of_training","left");
		$this->db->where("d.web_dept_status",1);
		$this->db->where("c.web_course_status",1);
		$this->db->where("dr.web_sub_cat_isactive",1);
		$this->db->where("m.web_sub_cat_isactive",1);
		if($inst_id!=0){
				$this->db->where("d.web_inst_dept_ref_id",$inst_id);
		}
			$query = $this->db->get();
		return $query->result_array();
		}
	   function get_departments($inst_id=0){
		 				$this->db->select("SQL_CALC_FOUND_ROWS d.*",false);
		$this->db->from("arc_web_departments d");
		$this->db->where("d.web_dept_status",1);
		if($inst_id!=0){
				$this->db->where("d.web_inst_dept_ref_id",$inst_id);
		}
			$query = $this->db->get();  
			return $query->result_array();
		   //echo $this->db->last_query();
	   }
	   
	       function get_courses($dept_id=0){
				$this->db->select("SQL_CALC_FOUND_ROWS c.*",false);
		$this->db->from("arc_web_courses c");
		if($dept_id!=0){
				$this->db->where("c.web_course_dept_ref_id",$dept_id);
		}
	   	$query = $this->db->get();  
			return $query->result_array();
		   //echo $this->db->last_query();
	   
		
	   }
	   
	
}
