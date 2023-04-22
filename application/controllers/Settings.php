<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
  function __construct()
	{	
        parent::__construct();	
        $this->load->model('admin_model');
	}

	public function index()
	{
		$data["menu"]=3;
		$data["submenu"]=31;
		$data["categories"] = $this->admin_model->get_categories();
		$this->load->view('admin/categories',$data);
	}
	
	public  function save_category(){
		
		$cat_name=$this->input->post("cat_name");
		//echo $cat_name; exit;
		$check_cat_name=$this->admin_model->check_category($cat_name);
		if($check_cat_name==0){
			$save_cat_status=$this->admin_model->save_category();
			if($save_cat_status==1){
				$this->session->set_userdata('alert_status', 1);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
			
		} else{
			
			$this->session->set_userdata('alert_status', 2);
		}
		redirect(site_url('settings'));	
	}
		public  function update_category($id){
		
		$cat_name=$this->input->post("cat_name");
		$check_cat_name=$this->admin_model->check_category($cat_name);
				//echo $cat_name; exit;
			if($check_cat_name==0){
			$save_cat_status=$this->admin_model->update_category($cat_name,$id);
			if($save_cat_status==1){
				$this->session->set_userdata('alert_status', 4);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
			
		} else{
			
			$this->session->set_userdata('alert_status', 5);
		}
		redirect(site_url('settings'));	
	}
		
	public function get_category($cat_id){
		$category_details=$this->admin_model->get_category($cat_id);
		foreach($category_details as $cd){
			$web_cat_name=$cd["web_cat_name"];
		}
		 $output = array("web_cat_name" => $web_cat_name);
	echo json_encode($output);
	}
	public function subcategory()
	{
		$data["menu"]=3;
		$data["submenu"]=32;
		$data["categories"] = $this->admin_model->get_categories();
		$data["cat_sub_cat_list"] = $this->admin_model->get_sub_cat_subcat_list();
		$this->load->view('admin/sub_categories',$data);
	}
	public  function save_sub_category(){
		
		$cat_id=$this->input->post("cat_name");
		$sub_cat_name=$this->input->post("sub_cat_name");
		//echo $cat_name; exit;
		$check_cat_name=$this->admin_model->check_sub_category($cat_id,$sub_cat_name);
		if($check_cat_name==0){
			$save_cat_status=$this->admin_model->save_sub_category();
			if($save_cat_status==1){
				$this->admin_model->update_category_status($cat_id);
				$this->session->set_userdata('alert_status', 1);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
			
		} else{
			
			$this->session->set_userdata('alert_status', 2);
		}
		redirect(site_url('settings/subcategory'));	
	}
	
	public function get_sub_category($sub_cat_id){
		$sub_category_details=$this->admin_model->get_sub_category($sub_cat_id);
		foreach($sub_category_details as $sd){
			$web_cat_id=$sd["web_cat_id"];
			$web_sub_cat_name=$sd["web_sub_cat_name"];
		}
		 $output = array("web_cat_id" => $web_cat_id,"web_sub_cat_name"=>$web_sub_cat_name);
	echo json_encode($output);
	}
	public  function update_sub_category($id){
		
		$cat_id=$this->input->post("cat_name");
		$sub_cat_name=$this->input->post("sub_cat_name");
		//echo $cat_name; exit;
		$check_cat_name=$this->admin_model->check_sub_category($cat_id,$sub_cat_name,$id);
		if($check_cat_name==0){
			$save_cat_status=$this->admin_model->update_sub_category($id);
			if($save_cat_status==1){
				$this->admin_model->update_category_status($cat_id);
				$this->session->set_userdata('alert_status', 4);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
			
		} else{
			
			$this->session->set_userdata('alert_status', 5);
		}
		redirect(site_url('settings/subcategory'));	
	}
	public function delete_sub_category($id){
	$this->admin_model->delete_sub_category($id);	
		$this->session->set_userdata('alert_status', 6);
		redirect(site_url('settings/subcategory'));
	}
		public function delete_category($id){
	$del_status=$this->admin_model->delete_category($id);
if($del_status==1){	
		$this->session->set_userdata('alert_status', 6);
}else{
	$this->session->set_userdata('alert_status', 7);
}
		redirect(site_url('settings'));
	}
	
		public function admin_menu()
	{
		$data["menu"]=3;
		$data["submenu"]=34;
		$data["admin_menus"] = $this->admin_model->get_admin_menus();
		//$data["cat_sub_cat_list"] = $this->admin_model->get_admin_submenus();
		$this->load->view('admin/admin_menu',$data);
	}
	
	public function save_admin_menu(){
		$admin_menu_name=$this->input->post("admin_menu_name");
		//echo $cat_name; exit;
		$check_admin_menu_name=$this->admin_model->check_admin_menu_name($admin_menu_name);
		if($check_admin_menu_name==0){
			$save_admin_menu_status=$this->admin_model->save_admin_menu();
			if($save_admin_menu_status==1){
				$this->session->set_userdata('alert_status', 1);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
			
		} else{
			
			$this->session->set_userdata('alert_status', 2);
		}
		redirect(site_url('settings/admin_menu'));	
		
	}
		public function get_admin_menu($id){
		$admin_menu_details=$this->admin_model->get_admin_menu($id);
		foreach($admin_menu_details as $am){
			$admin_menu_name=$am["web_admin_menu_name"];
		}
		 $output = array("admin_menu_name" => $admin_menu_name);
		
	echo json_encode($output);
	}
	
	
			public  function update_admin_menu($id){
		
			$admin_menu_name=$this->input->post("admin_menu_name");
		//echo $cat_name; exit;
		$check_admin_menu_name=$this->admin_model->check_admin_menu_name($admin_menu_name);
				//echo $cat_name; exit;
			if($check_admin_menu_name==0){
			$save_cat_status=$this->admin_model->update_admin_menu($admin_menu_name,$id);
			if($save_cat_status==1){
				$this->session->set_userdata('alert_status', 4);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
			
		} else{
			
			$this->session->set_userdata('alert_status', 5);
		}
		redirect(site_url('settings/admin_menu'));	
	}
	public function delete_admin_menu($id){
		$delete_admin_menu_status=$this->admin_model->delete_admin_menu($id);
if($delete_admin_menu_status==1){	
		$this->session->set_userdata('alert_status', 6);
}else{
	$this->session->set_userdata('alert_status', 7);
}
		redirect(site_url('settings/admin_menu'));
		
	}
		public function admin_submenu()
	{
		$data["menu"]=3;
		$data["submenu"]=35;
		$data["admin_menus"] = $this->admin_model->get_admin_menus();
		$data["admin_submenus"] = $this->admin_model->get_admin_submenus();
		$this->load->view('admin/admin_submenu',$data);
	}
		public  function save_sub_admin_menu(){
		
		$admin_menu_id=$this->input->post("admin_menu_name");
		$sub_admin_menu_name=$this->input->post("sub_admin_menu_name");
		//echo $cat_name; exit;
		$check_sub_admin_menu_name=$this->admin_model->check_sub_admin_menu($admin_menu_id,$sub_admin_menu_name);
		if($check_sub_admin_menu_name==0){
			$save_sub_admin_menu_status=$this->admin_model->save_sub_admin_menu();
			if($save_sub_admin_menu_status==1){
				$this->admin_model->update_admin_menu_status($admin_menu_id);
				$this->session->set_userdata('alert_status', 1);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
			
		} else{
			
			$this->session->set_userdata('alert_status', 2);
		}
		redirect(site_url('settings/admin_submenu'));	
	}
	public function get_sub_admin_menu($sub_admin_menu_id){
		$sub_admin_menu_details=$this->admin_model->get_sub_admin_menu($sub_admin_menu_id);
		foreach($sub_admin_menu_details as $sd){
			$web_admin_menu_ref_id=$sd["web_admin_menu_ref_id"];
			$web_admin_submenu_name=$sd["web_admin_submenu_name"];
		}
		 $output = array("web_admin_menu_ref_id" => $web_admin_menu_ref_id,"web_admin_submenu_name"=>$web_admin_submenu_name);
	echo json_encode($output);
	}


function update_sub_admin_menu($id){
			$admin_menu_id=$this->input->post("admin_menu_name");
		$sub_admin_menu_name=$this->input->post("sub_admin_menu_name");
		//echo $cat_name; exit;
		$check_sub_admin_menu_name=$this->admin_model->check_sub_admin_menu($admin_menu_id,$sub_admin_menu_name);
		if($check_cat_name==0){
			$save_cat_status=$this->admin_model->update_sub_admin_menu($id);
			if($save_cat_status==1){
				$this->admin_model->update_admin_menu_status($admin_menu_id);
				$this->session->set_userdata('alert_status', 4);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
			
		} else{
			
			$this->session->set_userdata('alert_status', 5);
		}
		redirect(site_url('settings/admin_submenu'));	
	
}
	public function delete_sub_admin_menu($id){
		$delete_admin_menu_status=$this->admin_model->delete_sub_admin_menu($id);
if($delete_admin_menu_status==1){	
		$this->session->set_userdata('alert_status', 6);
}else{
	$this->session->set_userdata('alert_status', 7);
}
		redirect(site_url('settings/admin_submenu'));
		
	}
	
	public function user_settings(){
			$data["menu"]=3;
		$data["submenu"]=33;
		$data["user_roles"] = $this->admin_model->get_user_roles();
		$data["user_details"] = $this->admin_model->get_user_details();
		$this->load->view('admin/user_settings',$data);
		
	}
	public function save_user(){
		$user_name=$this->input->post("user_name");
		$user_email=$this->input->post("user_email");
		//echo $cat_name; exit;
		$check_user_name=$this->admin_model->check_user_name($user_name);
		if($check_user_name==0){
				$check_user_email=$this->admin_model->check_user_email($user_email);
				if($check_user_email==0){
						$save_user_status=$this->admin_model->save_user_info();
			if($save_user_status==1){
				$this->session->set_userdata('alert_status', 1);
			}else{
				$this->session->set_userdata('alert_status', 8);
				
			}	
					
				} else{
					
					$this->session->set_userdata('alert_status', 3);
				}
	
			
		} else{
			
			$this->session->set_userdata('alert_status', 2);
		}
		redirect(site_url('settings/user_settings'));	
	}
	
	public function edit_user_settings($id){
		$data["menu"]=3;
		$data["submenu"]=33;
		$data["user_roles"] = $this->admin_model->get_user_roles();
		$data["user_info"] = $this->admin_model->get_user($id);
		$this->load->view('admin/edit_user_settings',$data);
		
	}
		public function update_user($id){
		//$user_name=$this->input->post("user_name");
		//$user_email=$this->input->post("user_email");
		//echo $cat_name; exit;

						$save_user_status=$this->admin_model->update_user_info($id);
			if($save_user_status==1){
				$this->session->set_userdata('alert_status', 4);
			}else{
				$this->session->set_userdata('alert_status', 8);
				
			}	
					
				
		
		redirect(site_url('settings/user_settings'));	
	}
		public function delete_user($id){
		$delete_user_status=$this->admin_model->delete_user($id);
if($delete_user_status==1){	
		$this->session->set_userdata('alert_status', 6);
}else{
	$this->session->set_userdata('alert_status', 7);
}
		redirect(site_url('settings/user_settings'));
		
	}
	public function user_priv_settings(){
			$data["menu"]=3;
		$data["submenu"]=34;
		$data["user_roles"] = $this->admin_model->get_user_roles();
		$data["user_details"] = $this->admin_model->get_user_details();
		$this->load->view('admin/user_priv_settings',$data);
		
	}
	public function save_user_privileges(){
		$role_id=$this->input->post("role");
		$user_priv="";
		foreach($this->input->post("user_priveleges") as $selected){
 $user_priv .=$selected.",";
}
$user_priv = rtrim($user_priv,",");
		//print_r($user_priv);
		//echo implode(",",$user_priv); 
		$is_role_saved=$this->admin_model->check_role_saved($role_id);
		if($is_role_saved==1){
			$this->admin_model->update_user_privilege($role_id,$user_priv);
			$this->session->set_userdata('alert_status', 4);
		}else{
			$this->admin_model->save_user_privilege($user_priv);
			$this->session->set_userdata('alert_status', 1);
		}
	
$uRole=$this->session->userdata('uRole');
$user_privilege_menus= $this->admin_model->get_user_privileges($uRole);
						//print_r($user_privilege_menus);
						foreach($user_privilege_menus as $up){
							
							$user_privileges=$up["web_user_priveleges"];
						}

$user_privi = explode(',', $user_privileges);
	$this->session->set_userdata('user_priv', $user_privi);
		redirect(site_url('settings/user_priv_settings'));
	}
	
	public function get_user_privileges($id){
			$user_privileges=$this->admin_model->get_user_privileges($id);
		$user_privs[]="";
			$user_priv=""; 
			$checkbox="";
			if(isset($user_privileges)){
		foreach($user_privileges as $up){
			$user_priv=$up["web_user_priveleges"];
		}
		$user_privs=explode(",",$user_priv);
		//print_r($user_privs);
		$check1="";
		$check2="";
		$check3="";
		$check4="";
		$check5="";
		$check6="";
		
		$priv_len=count($user_privs);
		for($i=0; $i<$priv_len; $i++){
			
		if($user_privs[$i]==1){
				
			$check1 .= "checked";
		}
			if($user_privs[$i]==2){
				
			$check2 .= "checked";
		} 
		if($user_privs[$i]==3){
				
			$check3 .= "checked";
		}
			if($user_privs[$i]==4){
				
			$check4 .= "checked";
		}
		if($user_privs[$i]==5){
				
			$check5 .= "checked";
		}
		if($user_privs[$i]==6){
				
			$check6 .= "checked";
		}
		}
		$checkbox ='	<label class="weight-600">User Pages</label>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input checkbox_check" id="customCheck1-1" value="1" name="user_priveleges[]" '.$check1.'>
					<label class="custom-control-label" for="customCheck1-1">Dashboard</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input checkbox_check" id="customCheck2-1" value="2" name="user_priveleges[]"  '.$check2.' >
					<label class="custom-control-label" for="customCheck2-1">Enquiry List</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input checkbox_check" id="customCheck3-1" value="3" name="user_priveleges[]" '.$check3.'>
					<label class="custom-control-label" for="customCheck3-1">Settings</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input checkbox_check" id="customCheck4-1" value="4" name="user_priveleges[]" '.$check4.'>
					<label class="custom-control-label" for="customCheck4-1">Course Settings</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input checkbox_check" id="customCheck5-1" value="5" name="user_priveleges[]" '.$check5.'>
					<label class="custom-control-label" for="customCheck5-1">Home Page Settings</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input checkbox_check" id="customCheck6-1" value="6" name="user_priveleges[]" '.$check6.'>
					<label class="custom-control-label" for="customCheck6-1">Gallery Settings</label>
				</div>';
				$status=1;
			}else{
				
				$status=0;
			}
		 $output = array("checkboxes" => $checkbox,"status"=>$status);
	echo json_encode($output);
		
	}
	
	public function institue_settings(){
		
			$data["menu"]=3;
		$data["submenu"]=35;
	$data["institutions"] = $this->admin_model->get_institutions();
		$this->load->view('admin/institute_settings',$data);
	}
	public function save_institute(){
		
			$inst_name=$this->input->post("inst_name");
		//echo $cat_name; exit;
		$check_inst_name=$this->admin_model->check_institute($inst_name);
		if($check_inst_name==0){
			$save_inst_status=$this->admin_model->save_institute();
			if($save_inst_status==1){
				$this->session->set_userdata('alert_status', 1);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
			
		} else{
			
			$this->session->set_userdata('alert_status', 2);
		}
		redirect(site_url('settings/institue_settings'));	
	}
	public function edit_institute_settings($id){
		$data["menu"]=3;
		$data["submenu"]=35;
		$data["institute_details"] = $this->admin_model->get_institute_details($id);
		$this->load->view('admin/edit_institute_settings',$data);
		
	}
	public function update_institute($id){
			$update_inst_status=$this->admin_model->update_institute($id);
			if($update_inst_status==1){
				$this->session->set_userdata('alert_status', 4);
			}else{
				$this->session->set_userdata('alert_status', 8);
				
			}
			
		
		redirect(site_url('settings/institue_settings'));	
	}
	function delete_institute($id){
	
			$del_inst_status=$this->admin_model->delete_institute($id);
			if($del_inst_status==1){
				$this->session->set_userdata('alert_status', 6);
			}else{
				$this->session->set_userdata('alert_status', 7);
				
			}
		redirect(site_url('settings/institue_settings'));	
	}
}
?>