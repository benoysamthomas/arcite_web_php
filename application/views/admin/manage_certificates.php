<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('include/head');?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/plugins/datatables/media/css/responsive.dataTables.css">
</head>
<body>
	<?php $this->load->view('include/header');?>
	<?php $this->load->view('include/sidebar');?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="min-height-200px">
		<?php if($this->session->has_userdata('alert_status')){
		if($this->session->userdata('alert_status') == 1){
			
			$cat_stat_name="Certificate Settings Saved";
			$alert_name="alert-success";
		}		else if($this->session->userdata('alert_status') == 2){
			
			$cat_stat_name="Certificate Settings Already Exists";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 4){
			
			$cat_stat_name="Certificate Settings Updated";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 5){
			
			$cat_stat_name="No change in Certificate Settings";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 6){
			
			$cat_stat_name="Certificate Settings Deleted";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 7){
			
			$cat_stat_name="Certificate Settings Cannot be deleted as it has reference associated with it";
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
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue" >Manage Certificates</h4>
							<p class="mb-30 font-14"></p>
						</div>
						
					</div>
					<form id="certificate" action="" method="post" enctype="multipart/form-data">
				
											<div class="row">
												<div class="col-md-4">
										<div class="form-group">
											<label >Certificate Registration No.<span style="color:red">*</span></label>
											<input type="text" class="form-control " name="cert_registration" id="cert_registration" value="">
										</div>
									
									</div>
									<div class="col-md-4">
								<div class="form-group">
											<label >Student Name<span style="color:red">*</span></label>
											<input type="text" class="form-control " name="student_name" id="student_name" value="">
										</div>
									</div>
								<div class="col-md-4">
										<div class="form-group">
											<label >Institute<span style="color:red">*</span></label>
												<select class="custom-select form-control" name="cert_institute" id="cert_institute">
												<option value="0">Select Institute</option>
												<?php  if(isset($institutions)){
								foreach($institutions as $i){
									
								?>
												<option value="<?php echo $i["web_inst_id"]?>"><?php echo $i["web_inst_name"]?></option>
												<?php }
												}?>
											
											</select>	</div>
									</div>
								
								</div>
								<div class="row">
								
										<div class="col-md-4">
										<div class="form-group">
											<label >Course Department<span style="color:red">*</span></label>
												<select class="custom-select form-control" name="course_dept" id="course_dept">
												<option value="0">Select Department</option>
											
											</select>	</div>
									</div>
								
											<div class="col-md-4">
										<div class="form-group">
										<label >Course <span style="color:red">*</span></label>
												<select class="custom-select form-control" name="course_name" id="course_name">
												<option value="0">Select Course</option>
											
											</select>
											</div>
									
									</div>
									<div class="col-md-4">
										<div class="form-group">
												<label >Duration <span style="color:red">*</span></label>
											<input type="text" class="form-control " name="duration" id="duration" value="" readonly>
											<input type="hidden" class="form-control " name="cert_duration" id="cert_duration" value="" >
									
											
											</div>
									</div>
								</div>
										<div class="row">
												<div class="col-md-4">
										<div class="form-group">
											<label >Certificate Issue Date<span style="color:red">*</span></label>
											<input type="text" class="form-control date-picker" name="cert_issue_date" id="cert_issue_date" value="">
										</div>
									
									</div>
										<div class="col-md-4">
										<div class="form-group">
										<label >Course Result <span style="color:red">*</span></label>
												<select class="custom-select form-control" name="course_status" id="course_status">
												<option value="1">Passed</option>
												<option value="2">Failed</option>
												<option value="3">Course Completed</option>
												<option value="4">Course Not Completed</option>
											
											</select>
											</div>
									
									</div>
								</div>
								<br/>
								<div class="form-group row ">
							
							<div class="col-sm-12 col-md-7">
						<button class="btn btn-outline-info pull-right  save_certificate" type="button" rel="0"> Save </button>
				      </div>
				     </div>
					</form>
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
			<div class="row">
			<table class="data-table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus ">Certificate No.</th>
									<th>Student Name</th>
									<th> Course Name</th>
									<th>Duration</th>
									<th>Issue Date</th>
									<th>Status</th>
									
								
									
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php  if(isset($certificates)){
								foreach($certificates as $c){
								
								?>
								<tr>
									<td class="table-plus"><?php echo $c["web_cert_reg_id"];?></td>
									<td><?php echo ucfirst($c["web_cert_student_name"]);?></td>
									<td><?php echo ucfirst($c["web_course_name"]);?></td>
									<td><?php echo $c["duration"];?></td>
									<td><?php echo date("d-m-Y",strtotime($c["web_cert_issue_date"]));?></td>
									<td><?php if($c["web_cert_status"]==1){ echo "Passed";}else if($c["web_cert_status"]==2){ echo "Failed";} else if ($c["web_cert_status"]==3){ echo "Course Completed";}else { echo "Course Not Completed";}?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-left">
												<a class="dropdown-item" href="<?php echo base_url();?>home_settings/edit_manage_certificate/<?php echo $c["web_cert_id"]; ?>" rel=""><i class="fa fa-pencil"></i> Edit</a>
												<a class="dropdown-item delete_certificate" href="#" rel="<?php echo $c["web_cert_id"];?>"><i class="fa fa-trash"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<?php }
									}
							?>
								</tbody>
						</table>
								
			</div>
				</div>
		</div>
		
	    <script src="<?php echo base_url();?>vendors/scripts/jquery-3.5.1.min.js"></script>

				<?php $this->load->view('include/footer');?>
		</div>
	</div>
	<script>
  $(document).ready(
	function() {
		$( "#issue_date1" ).datepicker({
		
		changeMonth: true,
		changeYear: true,
		dateFormat: 'dd-mm-yyyy',
		showAnim:"slideDown",
		yearRange: "-80:+0"
		});
			$('.data-table').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
			});
			
					$(document).on("change", "#cert_institute", function(e){
					var val=$(this).val();
					//alert(id);
					$.ajax({
		url: "<?php echo base_url();?>home_settings/get_inst_department/"+val,
		type: 'post',
		context: document.body,
		data: $("#certificate").serialize(),
		success:function(data){  
			var data = $.parseJSON(data);	
            var dept_select= data["dept_select"];				
         				
			$("#course_dept").html(dept_select);
			$("#duration").val("");
			$("#cert_duration").val(0);
			$("#course_name").val(0);
			
			
		}
	});
			});
					$(document).on("change", "#course_dept", function(e){
					var val=$(this).val();
					//alert(id);
					$.ajax({
		url: "<?php echo base_url();?>home_settings/get_dept_course/"+val,
		type: 'post',
		context: document.body,
		data: $("#certificate").serialize(),
		success:function(data){  
			var data = $.parseJSON(data);	
            var crs_select= data["crs_select"];				
         				
			$("#course_name").html(crs_select);
			$("#duration").val("");
			$("#cert_duration").val(0);
			
			
		}
	});
			});
					$(document).on("change", "#course_name", function(e){
					var val=$(this).val();
					//alert(id);
					$.ajax({
		url: "<?php echo base_url();?>home_settings/get_course_duration/"+val,
		type: 'post',
		context: document.body,
		data: $("#certificate").serialize(),
		success:function(data){  
			var data = $.parseJSON(data);	
            var duration= data["duration"];				
            var cert_duration= data["cert_duration"];				
         				
			$("#duration").val(duration);
			$("#cert_duration").val(cert_duration);
			
			
			
		}
	});
			});
			$(document).on("click", ".save_certificate", function(e){
				e.preventDefault();
				var id= $(this).attr("rel");
				 $(".form-control").css("border","1px solid #d1d7dc");
				if ($.trim($("#cert_registration").val()) == "") {
					//alert("first");
            $("#cert_registration").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#cert_registration").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#student_name").val()) == "") {
					//alert("first");
            $("#student_name").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#student_name").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#cert_institute").val()) == 0) {
					//alert("first");
            $("#cert_institute").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#cert_institute").offset().top - 100},
                    'slow');
            return false;
        } else if ($.trim($("#course_dept").val()) == 0) {
					//alert("first");
            $("#course_dept").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#course_dept").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#course_name").val()) == 0) {
					//alert("first");
            $("#course_name").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#course_name").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#cert_issue_date").val()) == '') {
					//alert("first");
            $("#cert_issue_date").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#cert_issue_date").offset().top - 100},
                    'slow');
            return false;
        }else{
				if(id==0){
			$("form#certificate").attr("action", "<?=base_url()?>home_settings/save_certificate/");
			} else{
				
				$("form#certificate").attr("action", "<?=base_url()?>home_settings/update_certificate/"+id);
			}
		//	$("form#category").attr("action", "<?=base_url()?>settings/save_category/");
            $("form#certificate").submit();
			//alert("here");
		}
			
			});		
						$(document).on("change", ".image_faculty", function(e){
				e.preventDefault();
	//var id= $(this).attr("rel");
	var fileSize = this.files[0];
    var sizeInMb = fileSize.size/1024;
	var sizeLimit= 1024*10;
	 if(sizeInMb > sizeLimit){
		 //alert(sizeInMb);
		 alert("File Size cannot be more than 10 MB");
		 $("#faculty_image").val("");
	 }
	
	});
					$(document).on("click", ".delete_certificate", function(e){
				e.preventDefault();
				//alert("Are You Sure You want to delete?");
				if (confirm("Are you sure You want to delete?")) {
       	var id= $(this).attr("rel");
				$("form#certificate").attr("action", "<?=base_url()?>home_settings/delete_certificate/"+id);
            $("form#certificate").submit();
    }



	});
	
		
	});
	
</script>
				<?php $this->load->view('include/script');?>
	<script src="<?php echo base_url();?>src/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>src/plugins/datatables/media/js/dataTables.bootstrap4.js"></script>
	<script src="<?php echo base_url();?>src/plugins/datatables/media/js/dataTables.responsive.js"></script>
	<script src="<?php echo base_url();?>src/plugins/datatables/media/js/responsive.bootstrap4.js"></script>
		<!-- buttons for Export datatable -->
	<script src="<?php echo base_url();?>src/plugins/datatables/media/js/button/dataTables.buttons.js"></script>
	<script src="<?php echo base_url();?>src/plugins/datatables/media/js/button/buttons.bootstrap4.js"></script>
	<script src="<?php echo base_url();?>src/plugins/datatables/media/js/button/buttons.print.js"></script>
	<script src="<?php echo base_url();?>src/plugins/datatables/media/js/button/buttons.html5.js"></script>
	<script src="<?php echo base_url();?>src/plugins/datatables/media/js/button/buttons.flash.js"></script>
	<script src="<?php echo base_url();?>src/plugins/datatables/media/js/button/vfs_fonts.js"></script>
		
</body>
</html>