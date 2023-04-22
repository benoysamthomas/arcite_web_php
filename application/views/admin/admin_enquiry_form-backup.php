<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('include/head');?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/plugins/datatables/media/css/responsive.dataTables.css">
</head>
<body>
	<?php $this->load->view('include/header-enquiry');?>
	<?php $this->load->view('include/sidebar-enquiry');?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="min-height-200px">
		<?php if($this->session->has_userdata('alert_status')){
		if($this->session->userdata('alert_status') == 1){
			
			$cat_stat_name="Enquiry Saved Successfully";
			$alert_name="alert-success";
		}		else if($this->session->userdata('alert_status') == 2){
			
			$cat_stat_name="Enquiry Already Exists";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 6){
			
			$cat_stat_name="Enquiry Deleted";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 7){
			
			$cat_stat_name="Enquiry Cannot be deleted as it has subcategory associated with it";
			$alert_name="alert-danger";
		}else{
			
			$cat_stat_name="Some Error Occurred,Please try again";
			$alert_name="alert-danger";	
		}

		?>
<div class="alert <?php echo $alert_name;?> alert-dismissible fade show " role="alert">
						<strong><center><?php echo $cat_stat_name;?></center>	</strong>	
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
<?php
$this->session->unset_userdata('alert_status');
 } ?>
				<!--<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					
					<form id="category" action="" method="post" enctype="multipart/form-data">
					<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Category Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="cat_name" id="cat_name" placeholder="">
							</div>
						</div>
								<br/>
								<div class="form-group row ">
							
							<div class="col-sm-12 col-md-7">
						<button class="btn btn-outline-info pull-right  save_cat" type="button"> Save </button>
				      </div>
				     </div>
					</form>
					</div>-->
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue" >Course Enquiry Form</h4>
							<p class="mb-30 font-14"></p>
						</div>
							<div class="pull-right">
						
							<!--<p class="mb-30 font-14">
							<select class="custom-select form-control inst_select" name="inst_id" id="inst_id">
												<?php  if(isset($institutions)){
								foreach($institutions as $i){
									
								?>
												<option value="<?php echo $i["web_inst_id"]?>"><?php echo $i["web_inst_name"]?></option>
												<?php }
												}?>
											
							</select>
							</p>-->
						</div>
					</div>
	<form method="post" action="" id="adm_enquiry" enctype="multipart/form-data">
					<p class="mb-30 font-18"><strong>Personal Details</strong></p>
					<input type="hidden" name="inst_id" id="inst_id" value="<?php echo $inst_id;?>">
							<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label >First Name <span style="color:red">*</span></label>
											<input type="text" class="form-control" name="f_name" id="f_name" value="">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label >Middle Name </label>
											<input type="text" class="form-control" name="m_name" id="m_name" value="">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label >Last Name <span style="color:red">*</span></label>
											<input type="text" class="form-control" name="l_name" id="l_name" value="">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label >Date of Birth <span style="color:red">*</span></label>
											<input type="text" class="form-control date-picker" Placeholder="DD-MM-YYYY" name="dob" id="dob" >
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label >Gender<span style="color:red">*</span></label>
												<select class="custom-select form-control" name="gender" id="gender">
												<option value="0">Select Gender</option>
												<?php foreach($gender_list as $gl){?>
												<option value="<?php echo $gl["web_sub_cat_id"]?>"><?php echo $gl["web_sub_cat_name"]?></option>
												<?php }?>
											
											</select>
										</div>
									</div>
									<div class="col-md-3">
									<div class="form-group">
											<label >Mobile Number <span style="color:red">*</span></label>
											<input type="text" class="form-control" name="mobile" id="mobile" value="">
										</div>
										
									</div>
									<div class="col-md-3">
											<div class="form-group">
											<label >Telephone </label>
											<input type="text" class="form-control " Placeholder="" name="telephone" id="telephone" value="">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
										
											<label >Email <span style="color:red">*</span></label>
											<input type="text" class="form-control" name="email" id="email" value="">
										</div>
									</div>
								</div>
									<div class="row">
									
									<div class="col-md-3">
												<div class="form-group">
											<label >Highest Qualification <span style="color:red">*</span></label>
										<select class="custom-select form-control" name="high_qualify" id="high_qualify">
												<option value="0">Select Qualification</option>
										<?php foreach($qualification_list as $ql){?>
												<option value="<?php echo $ql["web_sub_cat_id"]?>"><?php echo $ql["web_sub_cat_name"]?></option>
												<?php }?>
											</select>
									</div>
									</div>
									<div class="col-md-3">
									<div class="form-group">
										
											<label >Gaurdian Name </label>
											<input type="text" class="form-control" name="gaurdian_name" id="gaurdian_name" value="">
										</div>
									</div>
										<div class="col-md-3">
									<div class="form-group">
										
											<label >Relationship to Gaurdian </label>
											<input type="text" class="form-control" name="gaurdian_relation" id="gaurdian_relation" value="">
										</div>
									</div>
									<div class="col-md-3">
									<div class="form-group">
										
											<label >Gaurdian Telephone </label>
											<input type="text" class="form-control" name="gaurdian_tele" id="gaurdian_tele" value="">
										</div>
									</div>
								</div>
									<div class="row">
									<div class="col-md-3">
									<div class="form-group">
										
											<label > Street Address <span style="color:red">*</span></label>
											<textarea class="form-control" name="st_address" id="st_address"></textarea>
												
										</div>
									
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label >State <span style="color:red">*</span></label>
											<input type="text" class="form-control" name="state" id="state" value="" >
										</div>
									</div>
									<div class="col-md-3">
								<div class="form-group">
											<label >City <span style="color:red">*</span></label>
											<input type="text" class="form-control" name="city" id="city" value="" >
										</div>
									</div>
									<div class="col-md-3">
								<div class="form-group">
											<label > Zipcode <span style="color:red">*</span></label>
											<input type="text" class="form-control" name="zipcode" id="zipcode" value="" >
										</div>
									</div>
								</div>
										<p class="mb-30 font-18"><strong>Courses Opted</strong> <span style="color:red">*</span</p>
										
				<div class="row">
				<div class="col-md-10">
											
								<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">Department</th>
								<th scope="col">Preffered Courses</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody id="child_exam">
							<tr>
								<td>
								   <select class="custom-select form-control dept_select" rel="1" name="dept_name[]" id="dept_name_1">
												<option value="0">Select Department</option>
												<?php 
//print_r($departments);
												if(isset($departments)){
													foreach($departments as $d){?>
												<option value="<?php echo $d["web_dept_id"]?>"><?php echo $d["web_dept_name"]?></option>
												<?php }
												}?>
											</select>
						
								</td>
								<td class="">
								  		   <select class="custom-select form-control  course_select" rel="1" name="course_name[]" id="course_name_1">
												<option value="0">Select Course</option>
											</select>
							  </td>
								<td>
								</td>
							</tr>
						</tbody>
					</table>
		         </div>
		         </div>
					
						<div class="row">
											<div class="col-md-12 col-sm-12">
										<div class="pull-right"><button class="btn btn-outline-primary  add_qual" rel="2" >Add Course <i class="fa fa-plus"></i></button></div>
											</div>
											</div>
										<br/>		
										<p class="mb-30 font-18"><strong>References (if Any)</strong></p>
										
				<div class="row">
				<div class="col-md-10">
											
								<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col">Referenced Person</th>
								<th scope="col">Relationship to the reference</th>
								<th scope="col">Reference Contact Number</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody id="child_ref">
							<tr>
								<td>
								
								  		<input type="text" class="form-control" name="reference_person[]" id="reference_person_1" >      
						
								</td>
								<td>
								  		<input type="text" class="form-control" name="reference_person_relation[]" id="reference_person_relation_1" >      
							  </td>
							  <td>
								  		<input type="text" class="form-control" name="reference_contact[]" id="reference_contact" >      
							  </td>
								<td>
								</td>
							</tr>
						</tbody>
					</table>
		         </div>
		         </div>
						<div class="row">
											<div class="col-md-12 col-sm-12">
										<div class="pull-right"><button class="btn btn-outline-primary  add_ref" rel="2" >Add Rerences <i class="fa fa-plus"></i></button></div>
											</div>
											</div>
												<div class="row">
									<div class="col-md-5">
									<div class="form-group">
										
											<label > Comments </label>
											<textarea class="form-control" name="comments" id="comments"></textarea>
												
										</div>
									
									</div>
									</div>
										<br/>
							<div class="form-group row ">
							
							<div class="col-sm-12 col-md-7">
						<button class="btn btn-outline-info pull-right submit_enquiry" type="button"> Submit Enquiry</button>
				      </div>
				     </div>
					</form>
						
			
				</div>
		</div>
		
	    <script src="<?php echo base_url();?>vendors/scripts/jquery-3.5.1.min.js"></script>

				<?php $this->load->view('include/footer');?>
		</div>
	</div>
				<?php $this->load->view('include/script');?>
		<script type="text/javascript">
  $(document).ready(
	function() {
		var course_list='<option value="0">Select Department</option><?php if(isset($departments)){foreach($departments as $d){?><option value="<?php echo $d["web_dept_id"]?>"><?php echo $d["web_dept_name"]?></option><?php }}?>';		
												$(document).on("click", ".add_qual", function(e){
				e.preventDefault();
				var counter2= $(this).attr("rel");				
                var tr="child_exam";
                var tab = document.createElement('tr');
		         tab.setAttribute("id", "id_"+counter2);
                 tab.innerHTML = '<td><select class="custom-select form-control dept_select" name="dept_name[]" id="dept_name_'+counter2+'" rel="'+counter2+'">'+course_list+'</select></td><td><select class="custom-select form-control  course_select"  name="course_name[]" id="course_name_'+counter2+'" rel="'+counter2+'"><option value="0">Select Course</option></td><td><button class="btn btn-outline-danger removeInput" rel="'+counter2+'"><i class="fa fa-trash-o" ></i></button></td>';
		         document.getElementById(tr).appendChild(tab);				
		         counter2++;
             $(".add_qual").attr("rel",counter2);
		});
				$(document).on("change", ".dept_select", function(e){
					var id=$(this).attr("rel");
					var val=$(this).val();
					//alert(id);
					$.ajax({
		url: "<?php echo base_url();?>enquiry_form/get_courses/"+val,
		type: 'post',
		context: document.body,
		data: $("#adm_enquiry").serialize(),
		success:function(data){  
			var data = $.parseJSON(data);	
            var course_select= data["course_select"];				
         				
			$("#course_name_"+id+"").html(course_select);
			
			
			
		}
	});
				});
		
		$(document).on("click", ".removeInput", function(e){	
		e.preventDefault();
				var id= $(this).attr("rel");				
                var child = document.getElementById('id_'+id);
                var parent = document.getElementById('child_exam');
                 parent.removeChild(child);
		
		});
				$(document).on("click", ".add_ref", function(e){
				e.preventDefault();
				var counter3= $(this).attr("rel");				
                var tr="child_ref";
                var tab = document.createElement('tr');
		         tab.setAttribute("id", "id_"+counter3);
                 tab.innerHTML = '<td><input type="text" class="form-control" name="reference_person[]" id="reference_person_'+counter3+'"  ></td><td><input type="text" class="form-control" name="reference_person_relation[]" id="reference_person_relation_'+counter3+'"  ></td><td><input type="text" class="form-control" name="reference_contact[]" id="reference_contact'+counter3+'"  ></td><td><button class="btn btn-outline-danger removeReference" rel="'+counter3+'"><i class="fa fa-trash-o" ></i></button></td>';
		         document.getElementById(tr).appendChild(tab);				
		         counter3++;
             $(".add_ref").attr("rel",counter3);
		});
		$(document).on("click", ".removeReference", function(e){	
		e.preventDefault();
				var id= $(this).attr("rel");				
                var child = document.getElementById('id_'+id);
                var parent = document.getElementById('child_ref');
                 parent.removeChild(child);
		
		});
		$('.date-picker-dob').datepicker({
		language: 'en',
		autoClose: true,
		dateFormat: 'dd-mm-yyyy',
		changeYear:true,
		changeMonth: true,
    //yearRange: "2020:2020"
	});
		
				$( "#dob1" ).datepicker({
		
		changeMonth: true,
		changeYear: true,
		dateFormat: 'mm-dd-yyyy',
		showAnim:"slideDown",
		yearRange: "-80:+0"
		});
		
			$(document).on("click", ".submit_enquiry", function(e){
				 $(".form-control").css("border","1px solid #d1d7dc");
				var course=1;
				var course_id="";
						 $('.course_select').each(function() {
							  $(".course_select").css("border","1px solid #d1d7dc");
			//alert($(this).val());
        if ($(this).val() == 0) {
           course=0;
           course_id=$(this).attr("rel");
		   return false;
        }
    });
		var dept=1;
				var dept_id="";
						 $('.dept_select').each(function() {
							  $(".dept_select").css("border","1px solid #d1d7dc");
			//alert($(this).val());
        if ($(this).val() == 0) {
           dept=0;
           dept_id=$(this).attr("rel");
		   return false;
        }
    });
				//e.preventDefault();
				if ($.trim($("#f_name").val()) == "") {
					//alert("first");
            $("#f_name").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#f_name").offset().top - 100},
                    'slow');
            return false;
        } else if ($.trim($("#l_name").val()) == "") {
			 $("#f_name").css("border","1px solid #d1d7dc");
            $("#l_name").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#l_name").offset().top - 100},
                    'slow');
            return false;
        } else if ($.trim($("#dob").val()) == "") {
			 $("#l_name").css("border","1px solid #d1d7dc");
            $("#dob").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#dob").offset().top - 100},
                    'slow');
            return false;
        } else if ($.trim($("#gender").val()) == 0) {
			 $("#dob").css("border","1px solid #d1d7dc");
            $("#gender").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#gender").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#mobile").val()) == "") {
			 $("#gender").css("border","1px solid #d1d7dc");
            $("#mobile").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#mobile").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#email").val()) == "") {
			 $("#mobile").css("border","1px solid #d1d7dc");
            $("#email").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#email").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#high_qualify").val()) == 0) {
			 $("#email").css("border","1px solid #d1d7dc");
            $("#high_qualify").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#high_qualify").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#st_address").val()) == "") {
			 $("#high_qualify").css("border","1px solid #d1d7dc");
            $("#st_address").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#st_address").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#state").val()) == "") {
			 $("#st_address").css("border","1px solid #d1d7dc");
            $("#state").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#state").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#city").val()) == "") {
			 $("#state").css("border","1px solid #d1d7dc");
            $("#city").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#city").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#zipcode").val()) == "") {
			 $("#city").css("border","1px solid #d1d7dc");
            $("#zipcode").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#zipcode").offset().top - 100},
                    'slow');
            return false;
        }else if(dept==0){
			 $("#zipcode").css("border","1px solid #d1d7dc");
			  $("#dept_name_"+dept_id+"").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#dept_name_"+dept_id+"").offset().top - 100},
                    'slow');
            return false;
		
			
		}else if(course==0){
			 $("#dept_name_"+dept_id+"").css("border","1px solid #d1d7dc");
			  $("#course_name_"+course_id+"").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#course_name_"+course_id+"").offset().top - 100},
                    'slow');
            return false;
		
			
		}else{
			
	
			$("form#adm_enquiry").attr("action", "<?=base_url()?>enquiry_list/submit_equiry/");
            $("form#adm_enquiry").submit();
			//alert("here");
		}
			
			});		
	});
	

</script>
</body>
</html>