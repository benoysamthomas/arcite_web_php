<?php 
class Admin_Model extends CI_Model {
	
	function __construct(){
		$this->load->database();
    }	
	
			function get_categories(){
			$this->db->where('web_cat_isactive', 1);
				$this->db->order_by('web_cat_name', 'asc');
			$dquery=$this->db->get('arc_web_categories');
		return $dquery->result_array();
        
			}
					function get_category($cat_id){
			$this->db->where('web_cat_isactive', 1);
			$this->db->where('web_cat_id', $cat_id);
				$this->db->order_by('web_cat_name', 'asc');
			$dquery=$this->db->get('arc_web_categories');
		return $dquery->result_array();
        
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
			function check_category($cat_name){
				//$this->db->where('web_cat_isactive', 1);
			$dquery=$this->db->get_where('arc_web_categories', array('web_cat_isactive' => 1,'LOWER(web_cat_name)'=>strtolower($cat_name)));
		if($dquery->num_rows()>0){
				return 1;
				}else{
				return 0;
				}
		}
		function save_category(){
			$data=array("web_cat_name"=>$this->input->post("cat_name"));
				$this->db->insert('arc_web_categories', $data);
					return true;
			
		}	function check_sub_category($cat_id,$sub_cat_name,$id=0){
			if($id!=0){
			$dquery=$this->db->get_where('arc_web_sub_categories', array('web_sub_cat_isactive' => 1,'LOWER(web_sub_cat_name)'=>strtolower($sub_cat_name),'web_cat_id'=>$cat_id,"web_sub_cat_id"=>$id));
				
				
			}else{
				//$this->db->where('web_sub_cat_isactive', 1);
			$dquery=$this->db->get_where('arc_web_sub_categories', array('web_sub_cat_isactive' => 1,'LOWER(web_sub_cat_name)'=>strtolower($sub_cat_name),'web_cat_id'=>$cat_id));
			}
		if($dquery->num_rows()>0){
				return 1;
				}else{
				return 0;
				}
		}
		function update_category($cat_name,$id){
			$data=array("web_cat_name"=>$cat_name);
				 $this->db->where('web_cat_id', $id);
				$this->db->update('arc_web_categories', $data);
					return true;
			
		}
		
		function delete_category($id){
				$dquery=$this->db->get_where('arc_web_sub_categories', array('web_sub_cat_isactive' => 1,'web_cat_id'=>$id));
			
		if($dquery->num_rows()>0){
				return 0;
				}else{
				$data=array("web_cat_isactive"=>0);
				 $this->db->where('web_cat_id', $id);
				$this->db->update('arc_web_categories', $data);
					return 1;
				}
		
			
		}
			function save_sub_category(){
			$data=array("web_cat_id"=>$this->input->post("cat_name"),'web_sub_cat_name'=>$this->input->post("sub_cat_name"));
				$this->db->insert('arc_web_sub_categories', $data);
					return true;
			
		}
			function update_sub_category($id){
			$data=array("web_cat_id"=>$this->input->post("cat_name"),'web_sub_cat_name'=>$this->input->post("sub_cat_name"));
				 $this->db->where('web_sub_cat_id', $id);
				$this->db->update('arc_web_sub_categories', $data);
					return true;
			
		}
			function delete_sub_category($id){
			$data=array("web_sub_cat_isactive"=>0);
				 $this->db->where('web_sub_cat_id', $id);
				$this->db->update('arc_web_sub_categories', $data);
					return true;
			
		}
		function update_category_status($cat_id){
				$dquery=$this->db->get_where('arc_web_categories', array('web_cat_isactive' => 1,'web_cat_id'=>$cat_id));
		if($dquery->num_rows()>0){
			$categories=$dquery->result_array();
			foreach($categories as $c){
				$sub_cat_status=$c["web_sub_cat_status"];
			}
			
		}if($sub_cat_status==0){
	 $this->db->where('web_cat_id', $cat_id);
	$this->db->update('arc_web_categories', array("web_sub_cat_status"=>1));
			}
		return true;	

		}
		function get_sub_cat_subcat_list(){
			
				$this->db->select("SQL_CALC_FOUND_ROWS sc.*,c.web_cat_name",false);
		$this->db->from("arc_web_sub_categories sc");
		$this->db->join("arc_web_categories c","c.web_cat_id=sc.web_cat_id","left");
		$this->db->where("c.web_sub_cat_status",1);
		$this->db->where("c.web_cat_isactive",1);
		$this->db->where("sc.web_sub_cat_isactive",1);
		$query = $this->db->get();
		return $query->result_array();
		}
       function get_sub_category($sub_cat_id){
		 		$this->db->select("SQL_CALC_FOUND_ROWS sc.*,c.web_cat_name",false);
		$this->db->from("arc_web_sub_categories sc");
		$this->db->join("arc_web_categories c","c.web_cat_id=sc.web_cat_id","left");
		$this->db->where("sc.web_sub_cat_id ",$sub_cat_id);
		$query = $this->db->get();
		return $query->result_array();  
		   
	   }
	   function get_admin_menus(){
		   $this->db->where('web_admin_menu_status', 1);
				$this->db->order_by('web_admin_menu_id', 'asc');
			$dquery=$this->db->get('arc_web_admin_menu');
		return $dquery->result_array();
        
		   
	   }
	   		function check_admin_menu_name($admin_menu_name){
				//$this->db->where('web_cat_isactive', 1);
			$dquery=$this->db->get_where('arc_web_admin_menu', array('web_admin_menu_status' => 1,'LOWER(web_admin_menu_name)'=>strtolower($admin_menu_name)));
		if($dquery->num_rows()>0){
				return 1;
				}else{
				return 0;
				}
		}
			function save_admin_menu(){
			$data=array("web_admin_menu_name"=>$this->input->post("admin_menu_name"));
				$this->db->insert('arc_web_admin_menu', $data);
					return true;
			
		}
		  function get_admin_menu($id){
		   $this->db->where('web_admin_menu_status', 1);
		   $this->db->where('web_admin_menu_id', $id);
			$dquery=$this->db->get('arc_web_admin_menu');
		return $dquery->result_array();
        
		   
	   }
	   function update_admin_menu($admin_menu_name,$id){
		   
		  $data=array("web_admin_menu_name"=>$admin_menu_name);
				 $this->db->where('web_admin_menu_id', $id);
				$this->db->update('arc_web_admin_menu', $data);
					return true; 
	   }
function delete_admin_menu($id){
	
					$dquery=$this->db->get_where('arc_web_admin_menu', array('web_admin_menu_sub_status' => 1,'web_admin_menu_id'=>$id));
			
		if($dquery->num_rows()>0){
				return 0;
				}else{
				$data=array("web_admin_menu_status"=>0);
				 $this->db->where('web_admin_menu_id', $id);
				$this->db->update('arc_web_admin_menu', $data);
					return 1;
				}
}

function get_admin_submenus(){		
				$this->db->select("SQL_CALC_FOUND_ROWS asm.*,am.web_admin_menu_name",false);
		$this->db->from("arc_web_admin_submenu asm");
		$this->db->join("arc_web_admin_menu am","am.web_admin_menu_id = asm.web_admin_menu_ref_id","left");
		$this->db->where("am.web_admin_menu_sub_status",1);
		$this->db->where("am.web_admin_menu_status",1);
		$this->db->where("asm.web_admin_submenu_status",1);
		$query = $this->db->get();
		return $query->result_array();
}
function get_sub_admin_menu($sub_admin_menu_id){		
				$this->db->select("SQL_CALC_FOUND_ROWS asm.*,am.web_admin_menu_name",false);
		$this->db->from("arc_web_admin_submenu asm");
		$this->db->join("arc_web_admin_menu am","am.web_admin_menu_id = asm.web_admin_menu_ref_id","left");
		$this->db->where("am.web_admin_menu_sub_status",1);
		$this->db->where("am.web_admin_menu_status",1);
		$this->db->where("asm.web_admin_submenu_status",1);
		$this->db->where("asm.web_admin_submenu_id",$sub_admin_menu_id);
		$query = $this->db->get();
		return $query->result_array();
}
function check_sub_admin_menu($admin_menu_id,$sub_admin_menu_name,$id=0){
			if($id!=0){
			$dquery=$this->db->get_where('arc_web_admin_submenu', array('web_admin_submenu_status' => 1,'LOWER(web_admin_submenu_name)'=>strtolower($sub_admin_menu_name),'web_admin_menu_ref_id'=>$admin_menu_id,"web_admin_submenu_id"=>$id));
				
				
			}else{
				//$this->db->where('web_sub_cat_isactive', 1);
			$dquery=$this->db->get_where('arc_web_admin_submenu', array('web_admin_submenu_status' => 1,'LOWER(web_admin_submenu_name)'=>strtolower($sub_admin_menu_name),'web_admin_menu_ref_id'=>$admin_menu_id));
			}
		if($dquery->num_rows()>0){
				return 1;
				}else{
				return 0;
				}
		}
function  save_sub_admin_menu(){
			$data=array("web_admin_menu_ref_id"=>$this->input->post("admin_menu_name"),'web_admin_submenu_name'=>$this->input->post("sub_admin_menu_name"));
				$this->db->insert('arc_web_admin_submenu', $data);
					return true;
	
}
	function update_admin_menu_status($id){
		$dquery=$this->db->get_where('arc_web_admin_menu', array('web_admin_menu_status' => 1,'web_admin_menu_id'=>$id));
		if($dquery->num_rows()>0){
			$admin_menus=$dquery->result_array();
			foreach($admin_menus as $am){
				$web_admin_menu_sub_status=$am["web_admin_menu_sub_status"];
			}
			
		}if($web_admin_menu_sub_status==0){
	 $this->db->where('web_admin_menu_id', $id);
	$this->db->update('arc_web_admin_menu', array("web_admin_menu_sub_status"=>1));
			}
		return true;	

			
		}
			function update_sub_admin_menu($id){
			$data=array("web_admin_menu_ref_id"=>$this->input->post("admin_menu_name"),'web_admin_submenu_name'=>$this->input->post("sub_admin_menu_name"));
				 $this->db->where('web_admin_submenu_id', $id);
				$this->db->update('arc_web_admin_submenu', $data);
					return true;
			
		}
		function delete_sub_admin_menu($id){
	
		$data=array("web_admin_submenu_status"=>0);
				 $this->db->where('web_admin_submenu_id', $id);
				$this->db->update('arc_web_admin_submenu', $data);
					return true;
}

function get_user_roles(){
	$this->db->where('web_role_status', 1);
				$this->db->order_by('web_role', 'asc');
			$dquery=$this->db->get('arc_web_user_role');
		return $dquery->result_array();
	
}
	function check_user_name($user_name){
				//$this->db->where('web_cat_isactive', 1);
			$dquery=$this->db->get_where('arc_web_users', array('web_user_status' => 1,'LOWER(web_user_name)'=>strtolower($user_name)));
		if($dquery->num_rows()>0){
				return 1;
				}else{
				return 0;
				}
		}
			function check_user_email($user_email){
				//$this->db->where('web_cat_isactive', 1);
			$dquery=$this->db->get_where('arc_web_users', array('web_user_status' => 1,'LOWER(web_user_email)'=>strtolower($user_email)));
		if($dquery->num_rows()>0){
				return 1;
				}else{
				return 0;
				}
		}
		function save_user_info(){
			$password=$this->input->post("paswd");
			$hashed_password=password_hash($password, PASSWORD_DEFAULT);
				$data=array(
				"web_user_name"=>$this->input->post("user_name"),
				'web_user_email'=>$this->input->post("user_email"),
				'web_user_role'=>$this->input->post("role"),
				'web_user_fname'=>$this->input->post("user_fname"),
				'web_user_lname'=>$this->input->post("user_lname"),
				'web_user_contact'=>$this->input->post("user_contact"),
				'web_password'=>$hashed_password
				);
				$this->db->insert('arc_web_users', $data);
					return true;
			
		}
		function get_user_details(){
			
				$this->db->select("SQL_CALC_FOUND_ROWS ud.*,ur.web_role",false);
		$this->db->from("arc_web_users ud");
		$this->db->join("arc_web_user_role ur","ur.web_role_id = ud.web_user_role","left");
		$this->db->where("ud.web_user_status",1);
		$this->db->where("ur.web_role_status",1);
	
		$query = $this->db->get();
		return $query->result_array();
}	
		
		function get_user($id){
				$this->db->where('web_user_id', $id);
			$dquery=$this->db->get('arc_web_users');
		return $dquery->result_array();
		}
		
		function update_user_info($id){
			
			$password=$this->input->post("paswd");
			if($password=""){
				$data=array(
				"web_user_name"=>$this->input->post("user_name"),
				'web_user_email'=>$this->input->post("user_email"),
				'web_user_role'=>$this->input->post("role"),
				'web_user_fname'=>$this->input->post("user_fname"),
				'web_user_lname'=>$this->input->post("user_lname"),
				'web_user_contact'=>$this->input->post("user_contact")

				);	
			}else{
			$hashed_password=password_hash($password, PASSWORD_DEFAULT);
				$data=array(
				"web_user_name"=>$this->input->post("user_name"),
				'web_user_email'=>$this->input->post("user_email"),
				'web_user_role'=>$this->input->post("role"),
				'web_user_fname'=>$this->input->post("user_fname"),
				'web_user_lname'=>$this->input->post("user_lname"),
				'web_user_contact'=>$this->input->post("user_contact"),
				'web_password'=>$hashed_password
				);
			}
			 $this->db->where('web_user_id', $id);
				$this->db->update('arc_web_users', $data);
					return true;
		}
			function delete_user($id){
	
		$data=array("web_user_status"=>0);
				 $this->db->where('web_user_id', $id);
				$this->db->update('arc_web_users', $data);
					return true;
}
function check_role_saved($id){
	
	$dquery=$this->db->get_where('arc_web_user_privilelge', array('web_user_role_ref_id' => $id));
		if($dquery->num_rows()>0){
				return 1;
				}else{
				return 0;
				}
}
function update_user_privilege($id,$user_priv){
	$data=array(
				"web_user_role_ref_id"=>$id,
				'web_user_priveleges'=>$user_priv,
				);
	 $this->db->where('web_user_role_ref_id', $id);
	 $this->db->update('arc_web_user_privilelge', $data);
					return true;
}
function save_user_privilege($user_priv){
	$data=array(
				"web_user_role_ref_id"=>$this->input->post("role"),
				'web_user_priveleges'=>$user_priv,
				);
	// $this->db->where('web_user_role_ref_id', $id);
	 $this->db->insert('arc_web_user_privilelge', $data);
					return true;
}
function get_user_privileges($role_id){
	$dquery=$this->db->get_where('arc_web_user_privilelge', array('web_user_role_ref_id' => $role_id));
	return $dquery->result_array();
	
	
}
	function check_institute($inst_name){
				//$this->db->where('web_cat_isactive', 1);
			$dquery=$this->db->get_where('arc_web_institutions', array('web_inst_status' => 1,'LOWER(web_inst_name)'=>strtolower(trim($inst_name))));
		if($dquery->num_rows()>0){
				return 1;
				}else{
				return 0;
				}
		}
			function save_institute(){
			
				$data=array(
				"web_inst_name"=>$this->input->post("inst_name"),
				'web_inst_address'=>$this->input->post("inst_address"),
				'web_inst_city'=>$this->input->post("inst_city"),
				'web_inst_state'=>$this->input->post("inst_state"),
				'web_inst_zip'=>$this->input->post("inst_zipcode"),
				'web_inst_email'=>$this->input->post("inst_email"),
				'web_inst_contact'=>$this->input->post("inst_contact"),
				);
				$this->db->insert('arc_web_institutions', $data);
					return true;
			
		}
		function get_institutions(){
	$this->db->where('web_inst_status', 1);
				$this->db->order_by('web_inst_id', 'asc');
			$dquery=$this->db->get('arc_web_institutions');
		return $dquery->result_array();
	
}

function get_institute_details($id){
	
	$this->db->where('web_inst_id', $id);
			$dquery=$this->db->get('arc_web_institutions');
		return $dquery->result_array();
}

function update_institute($id){
		$data=array(
				"web_inst_name"=>$this->input->post("inst_name"),
				'web_inst_address'=>$this->input->post("inst_address"),
				'web_inst_city'=>$this->input->post("inst_city"),
				'web_inst_state'=>$this->input->post("inst_state"),
				'web_inst_zip'=>$this->input->post("inst_zipcode"),
				'web_inst_email'=>$this->input->post("inst_email"),
				'web_inst_contact'=>$this->input->post("inst_contact"),
				);
	 $this->db->where('web_inst_id', $id);
	 $this->db->update('arc_web_institutions', $data);
					return true;
	
}

	function delete_institute($id){
				$dquery=$this->db->get_where('arc_web_departments', array('web_dept_status' => 1,'web_inst_dept_ref_id'=>$id));
			
		if($dquery->num_rows()>0){
				return 0;
				}else{
				$data=array("web_inst_status"=>0);
				 $this->db->where('web_inst_id', $id);
				$this->db->update('arc_web_institutions', $data);
					return 1;
				}
		
			
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
			function save_course($file_name){
			
				$data=array(
				"web_course_name"=>$this->input->post("course_name"),
				'web_course_number'=>$this->input->post("course_number"),
				'web_course_abbrv'=>$this->input->post("course_abbrv"),
				'web_course_duration'=>$this->input->post("course_duration"),
				'web_course_desc'=>$this->input->post("course_desc"),
				'web_course_dept_ref_id'=>$this->input->post("course_dept"),
				'web_mode_of_training'=>$this->input->post("mode_of_training"),
				'web_course_disp_mode'=>$this->input->post("disp_mode"),
				'web_course_image'=>$file_name
				);
				$this->db->insert('arc_web_courses', $data);
					return true;
			
		}
		function update_course($id,$file_name){
			
			if($file_name!=""){
				$data=array(
				"web_course_name"=>$this->input->post("course_name"),
				'web_course_number'=>$this->input->post("course_number"),
				'web_course_abbrv'=>$this->input->post("course_abbrv"),
				'web_course_duration'=>$this->input->post("course_duration"),
				'web_course_desc'=>$this->input->post("course_desc"),
				'web_course_dept_ref_id'=>$this->input->post("course_dept"),
				'web_mode_of_training'=>$this->input->post("mode_of_training"),
				'web_course_disp_mode'=>$this->input->post("disp_mode"),
				'web_course_image'=>$file_name
				);
			}else{
				
					$data=array(
				"web_course_name"=>$this->input->post("course_name"),
				'web_course_number'=>$this->input->post("course_number"),
				'web_course_abbrv'=>$this->input->post("course_abbrv"),
				'web_course_duration'=>$this->input->post("course_duration"),
				'web_course_desc'=>$this->input->post("course_desc"),
				'web_course_dept_ref_id'=>$this->input->post("course_dept"),
				'web_mode_of_training'=>$this->input->post("mode_of_training"),
				'web_course_disp_mode'=>$this->input->post("disp_mode"),
				);
			}
				 $this->db->where('web_course_id', $id);
				$this->db->update('arc_web_courses', $data);
				return 1;
		}
		function delete_course($id){
		
				$data=array("web_course_status"=>0);
				 $this->db->where('web_course_id', $id);
				$this->db->update('arc_web_courses', $data);
					return 1;
				
		}
			function get_courses(){
			
			$this->db->select("SQL_CALC_FOUND_ROWS c.*,i.*,d.web_dept_name,dr.web_sub_cat_name as duration,m.web_sub_cat_name as mode_of_training",false);
		$this->db->from("arc_web_courses c");
		$this->db->join("arc_web_departments d","d.web_dept_id = c.web_course_dept_ref_id","left");
		$this->db->join("arc_web_institutions i","i.web_inst_id = d.web_inst_dept_ref_id","left");
		$this->db->join("arc_web_sub_categories dr","dr.web_sub_cat_id  = c.web_course_duration","left");
		$this->db->join("arc_web_sub_categories m","m.web_sub_cat_id  = c.web_mode_of_training","left");
		$this->db->where("d.web_dept_status",1);
		$this->db->where("c.web_course_status",1);
		$this->db->where("dr.web_sub_cat_isactive",1);
		$this->db->where("m.web_sub_cat_isactive",1);
		$query = $this->db->get();
		return $query->result_array();
		}
		function get_course_details($course_id,$dept_id){
				$this->db->select("SQL_CALC_FOUND_ROWS c.*,i.*,d.web_dept_name,d.web_dept_image,dr.web_sub_cat_name as duration,m.web_sub_cat_name as mode_of_training",false);
		$this->db->from("arc_web_courses c");
		$this->db->join("arc_web_departments d","d.web_dept_id = c.web_course_dept_ref_id","left");
		$this->db->join("arc_web_institutions i","i.web_inst_id = d.web_inst_dept_ref_id","left");
		$this->db->join("arc_web_sub_categories dr","dr.web_sub_cat_id  = c.web_course_duration","left");
		$this->db->join("arc_web_sub_categories m","m.web_sub_cat_id  = c.web_mode_of_training","left");
		$this->db->where("d.web_dept_status",1);
		$this->db->where("c.web_course_status",1);
		$this->db->where("dr.web_sub_cat_isactive",1);
		$this->db->where("m.web_sub_cat_isactive",1);
		if($course_id!=0){
				$this->db->where('c.web_course_id', $course_id);
		}if($dept_id!=0){
			$this->db->where('c.web_course_dept_ref_id', $dept_id);
			
		}
			$dquery=$this->db->get();
		return $dquery->result_array();
		}
		function get_departments($inst_id=0){
			
			$this->db->select("SQL_CALC_FOUND_ROWS d.*,i.web_inst_name",false);
		$this->db->from("arc_web_departments d");
		$this->db->join("arc_web_institutions i","i.web_inst_id = d.web_inst_dept_ref_id","left");
		$this->db->where("d.web_dept_status",1);
		$this->db->where("i.web_inst_status",1);
		if($inst_id!=0){
		$this->db->where("d.web_inst_dept_ref_id",$inst_id);	
			
		}
		$query = $this->db->get();
		return $query->result_array();
		}
			function check_department($dept_name,$inst_id){
				//$this->db->where('web_cat_isactive', 1);
			$dquery=$this->db->get_where('arc_web_departments', array('web_dept_status' => 1,'web_inst_dept_ref_id'=>$inst_id,'LOWER(web_dept_name)'=>strtolower(trim($dept_name))));
		if($dquery->num_rows()>0){
				return 1;
				}else{
				return 0;
				}
		}
				function save_department($file_name){
			
				$data=array(
				"web_dept_name"=>$this->input->post("dept_name"),
				'web_inst_dept_ref_id'=>$this->input->post("inst_id"),
				'web_dept_course_mode'=>$this->input->post("dept_mode"),
				'web_dept_image'=>$file_name
				);
				$this->db->insert('arc_web_departments', $data);
					return true;
			
		}
		
		function update_department($id,$file_name){
			if($file_name!=""){
				$data=array(
				"web_dept_name"=>$this->input->post("dept_name"),
				'web_inst_dept_ref_id'=>$this->input->post("inst_id"),
				'web_dept_course_mode'=>$this->input->post("dept_mode"),
				'web_dept_image'=>$file_name
			);
			}else{
				$data=array(
				"web_dept_name"=>$this->input->post("dept_name"),
				'web_inst_dept_ref_id'=>$this->input->post("inst_id"),
				'web_dept_course_mode'=>$this->input->post("dept_mode")
			);	
			}
				 $this->db->where('web_dept_id', $id);
				$this->db->update('arc_web_departments', $data);
				return 1;
		}
			function delete_department($id){
				$dquery=$this->db->get_where('arc_web_courses', array('web_course_status' => 1,'web_course_dept_ref_id	'=>$id));
			
		if($dquery->num_rows()>0){
				return 0;
				}else{
				$data=array("web_dept_status"=>0);
				 $this->db->where('web_dept_id', $id);
				$this->db->update('arc_web_departments', $data);
					return 1;
				}
		}
			function get_department_details($id){
				$this->db->where('web_dept_id', $id);
			$dquery=$this->db->get('arc_web_departments');
		return $dquery->result_array();
		}
			function get_course_log_inst_count($inst_id=0){
				
				$this->db->select('COUNT(web_course_log_inst_id) as inst_count');
 $this->db->group_by('web_course_log_inst_id'); 
 if($inst_id!=0){
 	$this->db->where('web_course_log_inst_id', $inst_id);
 }
$dquery= $this->db->get('web_course_search_log');
if($dquery->num_rows() > 0){
	return $dquery->result_array();
} else {
   return 0;
}

			}
			
			function save_news_letter($filename=""){
			
				$data=array(
				"web_news_letter_manage_title"=>$this->input->post("news_letter_title"),
				'web_news_letter_manage_category'=>$this->input->post("news_letter_category"),
				'web_news_letter_manage_content'=>$this->input->post("news_letter_content"),
				'web_news_letter_manage_poster'=>$filename,
				'web_news_letter_manage_inst_id'=>$this->input->post("news_letter_institute")
				
				);
				$this->db->insert('arc_news_letter_manage', $data);
					return true;
			
		}
		function get_news_letter_settings($inst_id=""){
			$this->db->select("SQL_CALC_FOUND_ROWS n.*,i.web_inst_name",false);
		$this->db->from("arc_news_letter_manage n");
		$this->db->join("arc_web_institutions i","i.web_inst_id = n.web_news_letter_manage_inst_id","left");
		//$this->db->where("d.web_dept_status",1);
		$this->db->where("i.web_inst_status",1);
		$this->db->where('n.web_news_letter_manage_status >=', 1);
				//$this->db->order_by('web_inst_id', 'asc');
				if($inst_id!=""){
				$this->db->where('n.web_news_letter_manage_inst_id', $inst_id);	
				}
			$dquery=$this->db->get();
		return $dquery->result_array();
	
		}
		function get_news_letter_settings_id($id){
	
	$this->db->where('web_news_letter_manage_id', $id);
			$dquery=$this->db->get('arc_news_letter_manage');
		return $dquery->result_array();
}

function news_publish_status($id){
	$data=array("web_news_letter_manage_status"=>2);
				 $this->db->where('web_news_letter_manage_id', $id);
				$this->db->update('arc_news_letter_manage', $data);
					return 1;
}

}