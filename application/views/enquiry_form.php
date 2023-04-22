<!DOCTYPE html>
<html >
<head>
<?php $this->load->view('include/enquiry_head');?>
</head>
<body class="">
	

	<div class="enquiry-main-container ">
		<div class="pd-ltr-20  height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
							<?php if($inst_id==ARC_TECH_SCHOOL){?>
							<img src="<?php echo base_url(); ?>school_technical_edu/images/arc-logo-black-1.png" alt="Arcite Logo" style="height:50px;">
							<?php }else if($inst_id==ARC_MEDIA_SCHOOL){?>
									<img src="<?php echo base_url(); ?>school_media/images/arcite-media-black.png" alt="Arcite Logo" style="height:50px;">
							<?php } else if($inst_id==ARC_COMP_SCHOOL){?>
										<img src="<?php echo base_url(); ?>school_competitive_exams/images/ARCITE_COMPETITIVE_BLACK.png" alt="Arcite Logo" style="height:50px;" >
							<?php } else{?>
								<img src="<?php echo base_url(); ?>src/images/logo1.png" alt="Arcite Logo">
							<?php }?>
								
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
						<div class="pull-right">
										<!--<a class="btn btn-outline-primary" href="<?php echo base_url(); ?>feed">Rss Feed <i class="fa fa-rss"></i></a>-->
										<?php if($this->session->userdata('institute_session')==ARC_TECH_SCHOOL||$inst_id==ARC_TECH_SCHOOL){?>
										<a class="btn btn-outline-primary" href="<?php echo base_url(); ?>school_technical_edu/home">Home <i class="fa fa-home"></i></a>
										<?php } else if($this->session->userdata('institute_session')==ARC_MEDIA_SCHOOL||$inst_id==ARC_MEDIA_SCHOOL){?>
											<a class="btn btn-outline-primary" href="<?php echo base_url(); ?>school_media/home">Home <i class="fa fa-home"></i></a>
									
										<?php } else{?>
											<a class="btn btn-outline-primary" href="<?php echo base_url(); ?>">Home <i class="fa fa-home"></i></a>
									
										<?php }?>
						</div>
					</div>
					</div>
					<br/>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue" >ADMISSION ENQUIRY FORM</h4>
							<p class="mb-30 font-14"></p>
						</div>
						
					</div>
					<form method="post" action="" id="adm_enquiry" enctype="multipart/form-data">
					<?php if(($this->session->userdata('institute_session'))){ ?>
					<input type="hidden" name="inst_id" id="inst_id" value="<?php echo $this->session->userdata('institute_session');?>">
					<?php } else if($inst_id!=0){?>
						<input type="hidden" name="inst_id" id="inst_id" value="<?php echo $inst_id;?>">
					<?php } else{?>
						<input type="hidden" name="inst_id" id="inst_id" value="0">
					<?php }?>
					<p class="mb-30 font-18"><strong>Personal Details</strong></p>
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
											<input type="text" class="form-control date-picker-dob" Placeholder="DD-MM-YYYY" name="dob" id="dob" >
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
										
											<label >Guardian Name </label>
											<input type="text" class="form-control" name="gaurdian_name" id="gaurdian_name" value="">
										</div>
									</div>
										<div class="col-md-3">
									<div class="form-group">
										
											<label >Relationship to Guardian </label>
											<input type="text" class="form-control" name="gaurdian_relation" id="gaurdian_relation" value="">
										</div>
									</div>
									<div class="col-md-3">
									<div class="form-group">
										
											<label >Guardian Telephone </label>
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
										<div class="pull-right"><button class="btn btn-outline-primary  add_ref" rel="2" >Add References <i class="fa fa-plus"></i></button></div>
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
				<!-- Default Basic Forms End -->

				<!-- horizontal Basic Forms Start -->
		
				<!-- horizontal Basic Forms End -->

				<!-- Form grid Start -->
			
				<!-- Form grid End -->

				<!-- Input Validation Start -->
				<!--<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Input Validation</h4>
							<p class="mb-30 font-14">Validation styles for error, warning, and success</p>
						</div>
						<div class="pull-right">
							<a href="#input-validation-form" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<form>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group has-success">
									<label class="form-control-label">Input with success</label>
									<input type="text" class="form-control form-control-success">
									<div class="form-control-feedback">Success! You've done it.</div>
									<small class="form-text text-muted">Example help text that remains unchanged.</small>
								</div>
								<div class="form-group has-warning">
									<label class="form-control-label">Input with warning</label>
									<input type="text" class="form-control form-control-warning">
									<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
									<small class="form-text text-muted">Example help text that remains unchanged.</small>
								</div>
								<div class="form-group has-danger">
									<label class="form-control-label">Input with danger</label>
									<input type="text" class="form-control form-control-danger">
									<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
									<small class="form-text text-muted">Example help text that remains unchanged.</small>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group has-success row">
									<label class="form-control-label col-sm-12 col-md-3 col-form-label">Input with success</label>
									<div class="col-sm-12 col-md-9">
										<input type="text" class="form-control form-control-success">
										<div class="form-control-feedback">Success! You've done it.</div>
										<small class="form-text text-muted">Example help text that remains unchanged.</small>
									</div>
								</div>
								<div class="form-group has-warning row">
									<label class="form-control-label col-sm-12 col-md-3 col-form-label">Input with warning</label>
									<div class="col-sm-12 col-md-9">
										<input type="text" class="form-control form-control-warning">
										<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
										<small class="form-text text-muted">Example help text that remains unchanged.</small>
									</div>
								</div>
								<div class="form-group has-danger row">
									<label class="form-control-label col-sm-12 col-md-3 col-form-label">Input with danger</label>
									<div class="col-sm-12 col-md-9">
										<input type="text" class="form-control form-control-danger">
										<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
										<small class="form-text text-muted">Example help text that remains unchanged.</small>
									</div>
								</div>
							</div>
						</div>
					</form>
					<div class="collapse collapse-box" id="input-validation-form" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#input-validation"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#input-validation-form" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="input-validation">
<form>
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="form-group has-success">
				<label class="form-control-label">Input with success</label>
				<input type="text" class="form-control form-control-success">
				<div class="form-control-feedback">Success! You've done it.</div>
				<small class="form-text text-muted">Example help text that remains unchanged.</small>
			</div>
			<div class="form-group has-warning">
				<label class="form-control-label">Input with warning</label>
				<input type="text" class="form-control form-control-warning">
				<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
				<small class="form-text text-muted">Example help text that remains unchanged.</small>
			</div>
			<div class="form-group has-danger">
				<label class="form-control-label">Input with danger</label>
				<input type="text" class="form-control form-control-danger">
				<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
				<small class="form-text text-muted">Example help text that remains unchanged.</small>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="form-group has-success row">
				<label class="form-control-label col-sm-12 col-md-2 col-form-label">Input with success</label>
				<div class="col-sm-12 col-md-10">
					<input type="text" class="form-control form-control-success">
					<div class="form-control-feedback">Success! You've done it.</div>
					<small class="form-text text-muted">Example help text that remains unchanged.</small>
				</div>
			</div>
			<div class="form-group has-warning row">
				<label class="form-control-label col-sm-12 col-md-2 col-form-label">Input with warning</label>
				<div class="col-sm-12 col-md-10">
					<input type="text" class="form-control form-control-warning">
					<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
					<small class="form-text text-muted">Example help text that remains unchanged.</small>
				</div>
			</div>
			<div class="form-group has-danger row">
				<label class="form-control-label col-sm-12 col-md-2 col-form-label">Input with danger</label>
				<div class="col-sm-12 col-md-10">
					<input type="text" class="form-control form-control-danger">
					<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
					<small class="form-text text-muted">Example help text that remains unchanged.</small>
				</div>
			</div>
		</div>
	</div>
</form>
							</code></pre>
						</div>
					</div>
				</div>-->
				<!-- Input Validation End -->

			</div>
	    <script src="<?php echo base_url();?>vendors/scripts/jquery-3.5.1.min.js"></script>
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
					if(val!=0){
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
					}else{
						
						$("#course_name_"+id+"").html('<option value="0">Select Course</option>');	
						
					}
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
			
	
			$("form#adm_enquiry").attr("action", "<?=base_url()?>enquiry_form/submit_equiry/");
            $("form#adm_enquiry").submit();
			//alert("here");
		}
			
			});		
	});
	

</script>
				<?php $this->load->view('include/footer');?>
		</div>
	</div>

</body>
</html>