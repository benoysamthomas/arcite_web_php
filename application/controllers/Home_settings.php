<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_settings extends CI_Controller {
  function __construct()
	{	
        parent::__construct();	
        $this->load->model('home_model');
        $this->load->model('admin_model');
	}

	public function index()
	{
		$data["menu"]=5;
		$data["submenu"]=51;
	   $data["news_category"] = $this->home_model->get_sub_category_type(NEWS_CAT);
		$data["institutions"] = $this->admin_model->get_institutions();
	   // $data["mode_of_training"] = $this->home_model->get_sub_category_type(ARC_MODE);
		$data["news"] = $this->home_model->get_news();
		$this->load->view('admin/manage_news',$data);
	}
	
	public function save_news(){
		$file_name="";
       // $image_name_thumb="";
		$image_width=150;
		$image_height=150;
		$image_folder='news_images';
		//$image_thumb_width=150;
		//$image_thumb_height=150;
		$config['upload_path']   = './news_images/'; 
     $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png'; 
      $config['max_size']      = 1024;
	  //$config['overwrite'] = TRUE;
      $this->load->library('upload', $config);
	 // $this->upload->initialize($config);
	 if ($this->upload->do_upload('news_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImage($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
		
		$save_news_status=$this->home_model->save_news($file_name);
			if($save_news_status==1){
				$this->session->set_userdata('alert_status', 1);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
				redirect(site_url('home_settings'));	
		
	}
	
	
   public function resizeImage($filename,$width,$height,$image_folder){
	    $source_path =  './'.$image_folder.'/' . $filename;
      $target_path =  './'.$image_folder.'/thumbnails/';
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'create_thumb' => TRUE,
          'thumb_marker' => '_thumb',
          'width' => $width,
          'height' => $height
      );
      $this->load->library('image_lib', $config_manip);
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      } 
      $this->image_lib->clear();
   }
	   
   

		public function edit_news_settings($id){
		$data["menu"]=5;
		$data["submenu"]=51;
		$data["news_details"] = $this->home_model->get_news_details($id);
		$data["institutions"] = $this->admin_model->get_institutions();
		  $data["news_category"] = $this->home_model->get_sub_category_type(NEWS_CAT);
		$this->load->view('admin/edit_news_settings',$data);
		
	}
		public function update_news($id){
					$file_name="";
       // $image_name_thumb="";
		$image_width=150;
		$image_height=150;
		$image_folder='news_images';
		//$image_thumb_height=150;
		$config['upload_path']   = './news_images/'; 
     $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png'; 
      $config['max_size']      = 1024;
	  //$config['overwrite'] = TRUE;
      $this->load->library('upload', $config);
	 // $this->upload->initialize($config);
	 if ($this->upload->do_upload('news_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImage($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
			$update_news_status=$this->home_model->update_news($file_name,$id);
			if($update_news_status==1){
				$this->session->set_userdata('alert_status', 4);
			}else{
				$this->session->set_userdata('alert_status', 8);
				
			}
		redirect(site_url('home_settings'));	
	}
	function delete_news($id){
	
			$del_news_status=$this->home_model->delete_news($id);
			if($del_news_status==1){
				$this->session->set_userdata('alert_status', 6);
			}else{
				$this->session->set_userdata('alert_status', 7);
				
			}
		redirect(site_url('home_settings'));	
	}
		public function manage_events()
	{
		$data["menu"]=5;
		$data["submenu"]=52;
		//$data["course_duration"] = $this->home_model->get_sub_category_type(ARC_DURATION);
		$data["institutions"] = $this->admin_model->get_institutions();
	   // $data["mode_of_training"] = $this->home_model->get_sub_category_type(ARC_MODE);
		$data["events"] = $this->home_model->get_events();
		$this->load->view('admin/manage_events',$data);
	}
		public function save_event(){
		$file_name="";
       // $image_name_thumb="";
		$image_width=400;
		$image_height=212;
		$image_folder='event_images';
		//$image_thumb_height=150;
		$config['upload_path']   = './event_images/'; 
      $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png'; 
      $config['max_size']      = 1024;
	  //$config['overwrite'] = TRUE;
      $this->load->library('upload', $config);
	 // $this->upload->initialize($config);
	 if ($this->upload->do_upload('event_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImage($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
		
		$save_event_status=$this->home_model->save_event($file_name);
			if($save_event_status==1){
				$this->session->set_userdata('alert_status', 1);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
				redirect(site_url('home_settings/manage_events'));	
		
	}
	public function edit_event_settings($id){
		$data["menu"]=5;
		$data["submenu"]=52;
		$data["event_details"] = $this->home_model->get_event_details($id);
		$data["institutions"] = $this->admin_model->get_institutions();
		$this->load->view('admin/edit_event_settings',$data);
		
	}
	public function update_event($id){
					$file_name="";
       // $image_name_thumb="";
		$image_width=400;
		$image_height=212;
		$image_folder='event_images';
		//$image_thumb_height=150;
		$config['upload_path']   = './event_images/'; 
     $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png'; 
      $config['max_size']      = 1024;
	  //$config['overwrite'] = TRUE;
      $this->load->library('upload', $config);
	 // $this->upload->initialize($config);
	 if ($this->upload->do_upload('event_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImage($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
			$update_event_status=$this->home_model->update_event($file_name,$id);
			if($update_event_status==1){
				$this->session->set_userdata('alert_status', 4);
			}else{
				$this->session->set_userdata('alert_status', 8);
				
			}
		redirect(site_url('home_settings/manage_events'));	
	}
		function delete_event($id){
	
			$del_event_status=$this->home_model->delete_event($id);
			if($del_event_status==1){
				$this->session->set_userdata('alert_status', 6);
			}else{
				$this->session->set_userdata('alert_status', 7);
				
			}
		redirect(site_url('home_settings/manage_events'));	
	}
		public function faculty_settings()
	{
		$data["menu"]=5;
		$data["submenu"]=53;
		$data["campus_location"] = $this->home_model->get_sub_category_type(ARC_CAMPUS);
		//$data["institutions"] = $this->admin_model->get_institutions();
	   // $data["mode_of_training"] = $this->home_model->get_sub_category_type(ARC_MODE);
		$data["faculties"] = $this->home_model->get_faculties();
		$this->load->view('admin/faculty_settings',$data);
	}
	public function edit_faculty_settings($id){
		$data["menu"]=5;
		$data["submenu"]=53;
		$data["faculty_details"] = $this->home_model->get_faculty_details($id);
		$data["campus_location"] = $this->home_model->get_sub_category_type(ARC_CAMPUS);
		$this->load->view('admin/edit_faculty_settings',$data);
		
	}
		public function save_faculty(){
		$file_name="";
       // $image_name_thumb="";
		$image_width=150;
		$image_height=150;
		$image_folder='faculty_images';
		//$image_thumb_height=150;
		$config['upload_path']   = './faculty_images/'; 
      $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png'; 
      $config['max_size']      = 1024;
	  //$config['overwrite'] = TRUE;
      $this->load->library('upload', $config);
	 // $this->upload->initialize($config);
	 if ($this->upload->do_upload('faculty_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImage($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
		
		$save_faculty_status=$this->home_model->save_faculty($file_name);
			if($save_faculty_status==1){
				$this->session->set_userdata('alert_status', 1);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
				redirect(site_url('home_settings/faculty_settings'));	
		
	}
		public function update_faculty($id){
					$file_name="";
       // $image_name_thumb="";
		$image_width=150;
		$image_height=150;
		$image_folder='faculty_images';
		//$image_thumb_height=150;
		$config['upload_path']   = './faculty_images/'; 
     $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png'; 
      $config['max_size']      = 1024;
	  //$config['overwrite'] = TRUE;
      $this->load->library('upload', $config);
	 // $this->upload->initialize($config);
	 if ($this->upload->do_upload('faculty_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImage($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
			$update_faculty_status=$this->home_model->update_faculty($file_name,$id);
			if($update_faculty_status==1){
				$this->session->set_userdata('alert_status', 4);
			}else{
				$this->session->set_userdata('alert_status', 8);
				
			}
		redirect(site_url('home_settings/faculty_settings'));	
	}
	function delete_faculty($id){
	
			$del_faculty_status=$this->home_model->delete_faculty($id);
			if($del_faculty_status==1){
				$this->session->set_userdata('alert_status', 6);
			}else{
				$this->session->set_userdata('alert_status', 7);
				
			}
		redirect(site_url('home_settings/faculty_settings'));	
	}
	public function manage_testimonials()
	{
		$data["menu"]=5;
		$data["submenu"]=54;
		//$data["course_duration"] = $this->home_model->get_sub_category_type(ARC_DURATION);
		$data["institutions"] = $this->admin_model->get_institutions();
	   // $data["mode_of_training"] = $this->home_model->get_sub_category_type(ARC_MODE);
		$data["testimonials"] = $this->home_model->get_testimonials();
		$this->load->view('admin/manage_testimonials',$data);
	}
		public function edit_manage_testimonials($id){
		$data["menu"]=5;
		$data["submenu"]=54;
		$data["testimonial_details"] = $this->home_model->get_testimonial_details($id);
		$data["institutions"] = $this->admin_model->get_institutions();
		$this->load->view('admin/edit_manage_testimonials',$data);
		
	}
	public function save_testimonial(){
			$file_name="";
       // $image_name_thumb="";
		$image_width=150;
		$image_height=150;
		$image_folder='testimonial_images';
		//$image_thumb_height=150;
		$config['upload_path']   = './testimonial_images/'; 
      $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png'; 
      $config['max_size']      = 1024;
	  //$config['overwrite'] = TRUE;
      $this->load->library('upload', $config);
	 // $this->upload->initialize($config);
	 if ($this->upload->do_upload('testimonial_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImageWithoutThumb($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
		
		$save_event_status=$this->home_model->save_testimonial($file_name);
			if($save_event_status==1){
				$this->session->set_userdata('alert_status', 1);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
				redirect(site_url('home_settings/manage_testimonials'));	
	}
			public function update_testimonial($id){
					$file_name="";
       // $image_name_thumb="";
		$image_width=150;
		$image_height=150;
		$image_folder='testimonial_images';
		//$image_thumb_height=150;
		$config['upload_path']   = './testimonial_images/'; 
     $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png'; 
      $config['max_size']      = 1024;
	  //$config['overwrite'] = TRUE;
      $this->load->library('upload', $config);
	 // $this->upload->initialize($config);
	 if ($this->upload->do_upload('testimonial_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImageWithoutThumb($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
			$update_faculty_status=$this->home_model->update_testimonial($file_name,$id);
			if($update_faculty_status==1){
				$this->session->set_userdata('alert_status', 4);
			}else{
				$this->session->set_userdata('alert_status', 8);
				
			}
		redirect(site_url('home_settings/manage_testimonials'));	
	}
	   public function resizeImageWithoutThumb($filename,$width,$height,$image_folder){
	    $source_path =  './'.$image_folder.'/' . $filename;
      $target_path =  './'.$image_folder.'/';
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'create_thumb' => FALSE,
          'width' => $width,
          'height' => $height
      );
      $this->load->library('image_lib', $config_manip);
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      } 
      $this->image_lib->clear();
   }
	public function delete_testimonial($id){
		$del_faculty_status=$this->home_model->delete_testimonial($id);
			if($del_faculty_status==1){
				$this->session->set_userdata('alert_status', 6);
			}else{
				$this->session->set_userdata('alert_status', 7);
				
			}
		redirect(site_url('home_settings/manage_testimonials'));	
	}
	public function manage_news_letters(){
			$data["menu"]=5;
		$data["submenu"]=55;
		//$data["course_duration"] = $this->home_model->get_sub_category_type(ARC_DURATION);
	$data["institutions"] = $this->admin_model->get_institutions();
	   // $data["mode_of_training"] = $this->home_model->get_sub_category_type(ARC_MODE);
	   $data["news_letters"] = $this->admin_model->get_news_letter_settings();
		$data["news_letter_emails"] = $this->home_model->get_news_letter_emails();
		$this->load->view('admin/manage_news_letters',$data);
		
	}
		public function manage_news_letter_emails(){
			$data["menu"]=5;
		$data["submenu"]=55;
		//$data["course_duration"] = $this->home_model->get_sub_category_type(ARC_DURATION);
		//$data["institutions"] = $this->admin_model->get_institutions();
	   // $data["mode_of_training"] = $this->home_model->get_sub_category_type(ARC_MODE);
		$data["news_letter_emails"] = $this->home_model->get_news_letter_emails();
		$this->load->view('admin/manage_news_letter_emails',$data);
		
	}
	public function save_news_letter(){
			//	$cat_name=$this->input->post("cat_name");
		//echo $cat_name; exit;
		//$this->admin_model->check_category($cat_name);
		$file_name="";
       // $image_name_thumb="";
	   if($this->input->post("news_letter_category")==2){
		$image_width=700;
		$image_height=450;
		$image_folder='news_letter_images';
		$config['upload_path']   = './news_letter_images/'; 
      $config['allowed_types'] = 'gif|GIF|JPG|jpg|jpeg|JPEG|PNG|png'; 
      $config['max_size']      = 1024;
      $this->load->library('upload', $config);
	 if ($this->upload->do_upload('news_letter_image'))

			{
				$upload_data = $this->upload->data();  
				$file_name =   $upload_data['file_name'];
				$uploadedImage = $this->upload->data();
                $this->resizeImageWithoutThumb($uploadedImage['file_name'],$image_width,$image_height,$image_folder);
			}
	   }
		
		//$save_event_status=$this->home_model->save_testimonial($file_name);
			$save_cat_status=$this->admin_model->save_news_letter($file_name);
				$this->session->set_userdata('alert_status', 1);
		
		redirect(site_url('home_settings/manage_news_letters'));	
	}
	
	public function send_news_letter_mail(){
		
		//print_r($this->input->post("check_news"));
		$i=0;
		$n=$this->input->post("check_news");
		$size=sizeof($this->input->post("check_news"));
		for( $i=0;$i<$size; $i++){
			
			$news_letter_id= $n[$i];
			
		$news_letter_details=$this->home_model->get_news_letter_details($news_letter_id);
	
			
		foreach($news_letter_details as $n){
		
		$test=0;
		$message1="";
		if($test!=0){

							$message='<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body topmargin="0">'.$message1.'

</body>
</html>';

		$subject ="ARCITE Newsletters";			

					 }else{
		 $message='<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body topmargin="0">
<table width="700px" cellpadding="0" cellspacing="0" border="0" align="center" style="border: 1px solid #fff;">
	<tr>
    	<td valign="top">
        	<table width="95%" cellpadding="0" cellspacing="0" border="0" align="center">
            	
                <tr>
                	<td colspan="2">
                    	<table width="100%" cellpadding="3" cellspacing="2" border="0">
                        	<tr>
                            	<td height="50px"></td>
                            </tr>
                            <tr>
                            	<td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#292929; padding-left:15px;"><i></i></td>
                            </tr>
							<tr>
							<td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#292929; padding-left:15px;">
							     <h2> <u>News Letter From '.ucfirst($n["web_inst_name"]).'</u><h2>   <br/> <br/><br/>
							</td>
							</tr>
                            <tr>
                            	<td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#414141; padding-left:15px;"><b></b></td>
                            </tr>
                            <tr>
                            	<td height="10px"></td>
                            </tr>
                            <tr>
                              
							   <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#292929; padding-left:15px;"><b>'.ucwords($n["web_news_head"]).'</b></td>
							
                              
                            </tr>
							     <tr style="width:20%">
                            
                              <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#292929; padding-left:15px;">'.ucwords($n["web_news_details"]).'
							
                                </td>
                            </tr>
							      <tr >

  <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#292929; padding-left:15px;">News Date :&nbsp;'.date("d/m/Y",strtotime($n["web_news_date"])).'</td>

 </tr>
   <tr >

  <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#292929; padding-left:15px;"></td>

 </tr>
 <tr >

  <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#292929; padding-left:15px;"></td>

 </tr>
  <tr >

  <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#292929; padding-left:15px;"></td>

 </tr>

                            	<td height="30px" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#292929; padding-left:15px;">To Unsubscribe from our Newsletters  <a href="'.base_url().'" target="_self"> click here</a>.<br/><br/></td>
                            </tr>
                            <tr>
                            	<td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#414141; padding-left:15px; font-weight:bold;">
                             Regards, Team ARCITE 
									<br/><br/>
Note:- This is an automatically generated email , Please do not  reply back to this mail
                                </td>
                            </tr>
                            <tr>
                            	<td height="50px"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                	<td colspan="2" valign="top">
                    
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>';
$subject =ucfirst($n["web_inst_name"])." Newsletter";
}
$admin_mail="info@arcite.in";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'From: '.$admin_mail.'' . "\r\n" .
    'Reply-To:'.$admin_mail.' ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$to =$n["web_news_letter_email"];
/*echo $message;
echo "<br/>";
echo "TO:";
echo $to;
echo "<br/>";
echo "SUBJECT:";
echo $subject;
echo "<br/>";
echo "<br/>";
echo "<br/>";*/
mail($to, $subject, $message, $headers);
		}	
		}
		
	$this->session->set_userdata('alert_status', 1);
				
			
		redirect(site_url('home_settings/manage_news_letters'));		
	}
	
	public function publish_news_letter($news_letter_id){
		
		
		  $news_letter_details = $this->admin_model->get_news_letter_settings_id($news_letter_id);
		  foreach($news_letter_details as $nd);
			  $inst_id=$nd["web_news_letter_manage_inst_id"];
		$subscribed_emails = $this->home_model->get_news_letter_emails($inst_id);
			$subject =$nd["web_news_letter_manage_title"];			
if( $inst_id==ARC_COMP_SCHOOL){
					 
$admin_mail="schoolofcompetitiveexams@arcite.in";
}else if($inst_id==ARC_MEDIA_SCHOOL){
					 
$admin_mail="schoolofmedia@arcite.in";
}else if($inst_id==ARC_TECH_SCHOOL){
					 
$admin_mail="info@arcite.in";
}else{
	$admin_mail="info@arcite.in";
}

$content="";
if($nd["web_news_letter_manage_category"]==1){
	
	$content=$nd["web_news_letter_manage_content"];
}else{
	
	$content=	'<img src="'.base_url().'news_letter_images/'.$nd["web_news_letter_manage_poster"].'" width="700" height="450"  alt="" />';
													
}
		  foreach($subscribed_emails as $n){
			  
			  							$message='<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body topmargin="0">'.$content.'

</body>
</html>';

	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'From: '.$admin_mail.'' . "\r\n" .
    'Reply-To:'.$admin_mail.' ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$to =$n["web_news_letter_email"];
/*echo "from:".$admin_mail;
echo $content;
echo "<br/>";
echo "TO:";
echo $to;
echo "<br/>";
echo "SUBJECT:";
echo $subject;
echo "<br/>";
echo "<br/>";
echo "<br/>";*/
mail($to, $subject, $message, $headers);
		  }
		 
		 $this->admin_model->news_publish_status($news_letter_id);
		
		
		$this->session->set_userdata('alert_status', 2);
				
			
		redirect(site_url('home_settings/manage_news_letters'));
		
	}
		public function manage_feedback(){
			$data["menu"]=5;
		$data["submenu"]=56;
		//$data["course_duration"] = $this->home_model->get_sub_category_type(ARC_DURATION);
		$data["institutions"] = $this->admin_model->get_institutions();
	   // $data["mode_of_training"] = $this->home_model->get_sub_category_type(ARC_MODE);
		$data["feedbacks"] = $this->home_model->get_feedbacks();
		$this->load->view('admin/manage_feedback',$data);
		
	}
	public function manage_certificates()
	{
		$data["menu"]=5;
		$data["submenu"]=53;
		$data["campus_location"] = $this->home_model->get_sub_category_type(ARC_CAMPUS);
		//$data["institutions"] = $this->admin_model->get_institutions();
	   // $data["mode_of_training"] = $this->home_model->get_sub_category_type(ARC_MODE);
		$data["certificates"] = $this->home_model->get_certificates();
		$data["institutions"] = $this->admin_model->get_institutions();
		$this->load->view('admin/manage_certificates',$data);
	}
		public function get_inst_department($inst_id=0){
		$departments=$this->admin_model->get_departments($inst_id);
		$dept_select='<option value="0">Select Department</option>';
		foreach($departments as $d){
			
			$dept_select .='<option value="'.$d['web_dept_id'].'">'.$d['web_dept_name'].'</option>';
		}
		 $output = array("dept_select" => $dept_select);
	echo json_encode($output);	
		
	}
	
	public function get_dept_course($dept_id=0){
		
		$crse_name="";
		$mode_of_train=0;
		$durtn=0;
		$crs_select='<option value="0">Select Course</option>';
		$crse_list=$this->home_model->get_course_detials($crse_name,$mode_of_train,$durtn,$dept_id);
			foreach($crse_list as $cs){
					$crs_select .='<option value="'.$cs["web_course_id"].'">'.$cs["web_course_name"].'</option>';
		
				
			}
			
			$output = array("crs_select" => $crs_select);
	echo json_encode($output);	
	}
	public function get_course_duration($course_id=0){
	$duration='';
	$cert_duration=0;
		$course_duration=$this->home_model->get_course_duration($course_id);
			foreach($course_duration as $cd);
		$duration=$cd["duration"];
		$cert_duration=$cd["web_course_duration"];
			$output = array("duration" => $duration,"cert_duration" => $cert_duration);
	echo json_encode($output);	
		
	}
	public function save_certificate(){
		$save_cert_status=$this->home_model->save_certificate();
			if($save_cert_status==1){
				$this->session->set_userdata('alert_status', 1);
			}else{
				$this->session->set_userdata('alert_status', 3);
				
			}
				redirect(site_url('home_settings/manage_certificates'));		
		
	}
		public function edit_manage_certificate($id)
	{
		$data["menu"]=5;
		$data["submenu"]=53;
		$data["campus_location"] = $this->home_model->get_sub_category_type(ARC_CAMPUS);
		//$data["institutions"] = $this->admin_model->get_institutions();
	   // $data["mode_of_training"] = $this->home_model->get_sub_category_type(ARC_MODE);
		$data["certificates"] = $this->home_model->get_certificates($id);
		$data["institutions"] = $this->admin_model->get_institutions();
		$this->load->view('admin/edit_manage_certificates',$data);
	}
	public function update_certificate($id){
	$update_cert_status=$this->home_model->update_certificate($id);
			if($update_cert_status==1){
				$this->session->set_userdata('alert_status', 4);
			}else{
				$this->session->set_userdata('alert_status', 8);
				
			}
		redirect(site_url('home_settings/manage_certificates'));	
	}
	public function delete_certificate($id){
			$del_news_status=$this->home_model->delete_certificate($id);
			if($del_news_status==1){
				$this->session->set_userdata('alert_status', 6);
			}else{
				$this->session->set_userdata('alert_status', 7);
				
			}
		redirect(site_url('home_settings/manage_certificates'));	
		
	}
	
	}