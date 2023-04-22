<?php 
class Gallery_Model extends CI_Model {
	
	function __construct(){
		$this->load->database();
    }	
	
function save_gallery($image_name){
			
				$data=array(
				"web_gallery_category_name"=>$this->input->post("gallery_cat_name"),
				"web_gallery_image_caption"=>$this->input->post("gallery_image_caption"),
				'web_gallery_inst_id'=>$this->input->post("gallery_institute"),
				'web_gallery_main_image'=>$image_name
				);
				$this->db->insert('arc_web_gallery', $data);
					return true;
			
		}
		function update_gallery($image_name,$id){
			if($image_name!=""){
				$data=array(
				"web_gallery_category_name"=>$this->input->post("gallery_cat_name"),
				"web_gallery_image_caption"=>$this->input->post("gallery_image_caption"),
				'web_gallery_inst_id'=>$this->input->post("gallery_institute"),
				'web_gallery_main_image'=>$image_name
				);
			} else{
			$data=array(
				"web_gallery_category_name"=>$this->input->post("gallery_cat_name"),
				"web_gallery_image_caption"=>$this->input->post("gallery_image_caption"),
				'web_gallery_inst_id'=>$this->input->post("gallery_institute"),
				);
			}
				 $this->db->where('web_gallery_id', $id);
				$this->db->update('arc_web_gallery', $data);
				return 1;
		}
		function delete_gallery($id){
		$this->db->where('web_gallery_ref_id', $id);
			$dquery=$this->db->get('arc_web_gallery_category');
			if($dquery->num_rows()>0){
			return 0;
		}else{
			
				$data=array("web_gallery_status"=>0);
				 $this->db->where('web_gallery_id', $id);
				$this->db->update('arc_web_gallery', $data);
					return 1;
		}
				
		}
			function get_main_gallery($inst_id=""){
		$this->db->select("SQL_CALC_FOUND_ROWS g.*,i.web_inst_name",false);
		$this->db->from("arc_web_gallery g");
		$this->db->join("arc_web_institutions i","i.web_inst_id=g.web_gallery_inst_id","left");
		$this->db->where("g.web_gallery_status ",1);
		$this->db->where("i.web_inst_status ",1);
		if($inst_id!=""){
			$this->db->where("g.web_gallery_inst_id ",$inst_id);	
		}
		//$this->db->order_by("n.web_news_date","asc");
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->result_array();
		}
		function get_gallery_details($id){
				$this->db->where('web_gallery_id', $id);
			$dquery=$this->db->get('arc_web_gallery');
		return $dquery->result_array();
		}
		
		function save_gallery_category($image_name){
			
				$data=array(
				"web_gallery_cat_caption"=>$this->input->post("gallery_image_caption"),
				'web_gallery_ref_id'=>$this->input->post("gallery_category"),
				'web_gallery_cat_image'=>$image_name
				);
				$this->db->insert('arc_web_gallery_category', $data);
					return true;
			
		}
		function update_gallery_category($image_name,$id){
			if($image_name!=""){
				$data=array(
				"web_gallery_cat_caption"=>$this->input->post("gallery_image_caption"),
				'web_gallery_ref_id'=>$this->input->post("gallery_category"),
				'web_gallery_cat_image'=>$image_name
				);
			} else{
			$data=array(
				"web_gallery_cat_caption"=>$this->input->post("gallery_image_caption"),
				'web_gallery_ref_id'=>$this->input->post("gallery_category"),
				);
			}
				 $this->db->where('web_gallery_cat_id', $id);
				$this->db->update('arc_web_gallery_category', $data);
				return 1;
		}
			function get_gallery_category($inst_id=""){
		$this->db->select("SQL_CALC_FOUND_ROWS gc.*, g.*,i.web_inst_name",false);
		$this->db->from("arc_web_gallery_category gc");
		$this->db->join("arc_web_gallery g","g.web_gallery_id=gc.web_gallery_ref_id","left");
		$this->db->join("arc_web_institutions i","i.web_inst_id=g.web_gallery_inst_id","left");
		$this->db->where("gc.web_gallery_cat_status ",1);
		$this->db->where("g.web_gallery_status ",1);
		$this->db->where("i.web_inst_status ",1);
		if($inst_id!=""){
			$this->db->where("g.web_gallery_inst_id ",$inst_id);	
		}
		//$this->db->order_by("n.web_news_date","asc");
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->result_array();
		}
		
		function get_gallery_category_details($gal_id=0){
				$this->db->select("SQL_CALC_FOUND_ROWS gc.*, g.*",false);
		$this->db->from("arc_web_gallery_category gc");
		$this->db->join("arc_web_gallery g","g.web_gallery_id=gc.web_gallery_ref_id","left");
		$this->db->where("gc.web_gallery_cat_status ",1);
		$this->db->where("g.web_gallery_status ",1);
		if($gal_id!=0){
			$this->db->where("gc.web_gallery_ref_id ",$gal_id);	
		}
		//$this->db->order_by("n.web_news_date","asc");
		$query = $this->db->get();
		//echo $this->db->last_query(); exit;
		return $query->result_array();	
			
		}
			function get_gallery_category_info($id){
				
				$this->db->select("SQL_CALC_FOUND_ROWS gc.*, g.*",false);
		$this->db->from("arc_web_gallery_category gc");
		$this->db->join("arc_web_gallery g","g.web_gallery_id=gc.web_gallery_ref_id","left");
		$this->db->where("g.web_gallery_status ",1);
	
				$this->db->where('web_gallery_cat_id', $id);
				$dquery = $this->db->get();
		return $dquery->result_array();
		}
		
				function delete_gallery_category($id){
			
				$data=array("web_gallery_cat_status"=>0);
				 $this->db->where('web_gallery_cat_id', $id);
				$this->db->update('arc_web_gallery_category', $data);
					return 1;
		
				
		}
		
}