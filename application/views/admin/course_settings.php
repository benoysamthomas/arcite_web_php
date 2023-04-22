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
			
			$cat_stat_name="Course Settings Saved";
			$alert_name="alert-success";
		}		else if($this->session->userdata('alert_status') == 2){
			
			$cat_stat_name="Course Name/Number Already Exists";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 4){
			
			$cat_stat_name="Course Settings Updated";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 5){
			
			$cat_stat_name="No change in Course Settings";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 6){
			
			$cat_stat_name="Course Settings Deleted";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 7){
			
			$cat_stat_name="Course Settings Cannot be deleted as it has reference associated with it";
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
							<h4 class="text-blue" >Course Settings</h4>
							<p class="mb-30 font-14"></p>
						</div>
						
					</div>
					<form id="course" action="" method="post" enctype="multipart/form-data">
					<div class="row">
											<div class="col-md-8">
										<div class="form-group">
											<label >Institute</label>
												<select class="custom-select form-control inst_select" name="inst_id" id="inst_id">
												<?php foreach($institutions as $i){?>
												<option value="<?php echo $i["web_inst_id"];?>"><?php echo $i["web_inst_name"];?></option>
												<?php }?>
											
											</select>
										</div>
									</div>
					</div>
					<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label >Course Number <span style="color:red">*</span></label>
											<input type="text" class="form-control" name="course_number" id="course_number" value="">
										</div>
									</div>
										<div class="col-md-8">
										<div class="form-group">
											<label >Course Name <span style="color:red">*</span> </label>
											<input type="text" class="form-control" name="course_name" id="course_name" value="">
										</div>
									</div>
								
								
								
								</div>
											<div class="row">
												<div class="col-md-4">
										<div class="form-group">
											<label >Course Abbreviation <span style="color:red">*</span> </label>
											<input type="text" class="form-control" name="course_abbrv" id="course_abbrv" value="">
										</div>
									</div>
													<div class="col-md-4">
										<div class="form-group">
											<label >Course Department<span style="color:red">*</span></label>
												<select class="custom-select form-control" name="course_dept" id="course_dept">
												<option value="0">Select Department</option>
												<?php foreach($departments as $d){?>
												<option value="<?php echo $d["web_dept_id"]?>"><?php echo $d["web_dept_name"]?></option>
												<?php }?>
											
											</select>
										</div>
									</div>
								
								<div class="col-md-4">
										<div class="form-group">
											<label >Course Image (png/jpg) </label>
														<input type="file" class="form-control image_course" name="course_image" id="course_image" accept="image/png, image/gif, image/jpeg, image/webp">
									</div>
									</div>
										<!--<div class="col-md-3">
										<div class="form-group">
											<label >Institute Email</label>
											<input type="text" class="form-control" name="inst_email" id="inst_email" value="">
										</div>
									</div>-->
								
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label >Course Duration<span style="color:red">*</span></label>
												<select class="custom-select form-control" name="course_duration" id="course_duration">
												<option value="0">Select Duration</option>
												<?php foreach($course_duration as $cd){?>
												<option value="<?php echo $cd["web_sub_cat_id"]?>"><?php echo $cd["web_sub_cat_name"]?></option>
												<?php }?>
											
											</select>
										</div>
									</div>
								<div class="col-md-4">
										<div class="form-group">
											<label >Mode of Training<span style="color:red">*</span></label>
												<select class="custom-select form-control" name="mode_of_training" id="mode_of_training">
												<option value="0">Select Mode</option>
												<?php foreach($mode_of_training as $md){?>
												<option value="<?php echo $md["web_sub_cat_id"]?>"><?php echo $md["web_sub_cat_name"]?></option>
												<?php }?>
											
											</select>
										</div>
									</div>
										<div class="col-md-4">
										<div class="form-group">
											<label >Display Mode  <span style="color:red">*</span></label>
											<select class="form-control" name="disp_mode" id="disp_mode">
											<option value="1"> Course Display</option>
											<option value="2"> Enquiry Display</option>
								
											</select>
										</div>
									</div>
								</div>
							<div class="row">
							<div class="col-md-12">
										<div class="form-group">
											<label >Course Description<span style="color:red">*</span> </label>
											<textarea class="textarea_editor form-control border-radius-0" name="course_desc" id="course_desc" placeholder="Enter text ..."></textarea>
										</div>
									
							</div>
							
							</div>
								<br/>
								<div class="form-group row ">
							
							<div class="col-sm-12 col-md-7">
						<button class="btn btn-outline-info pull-right  save_course" type="button" rel="0"> Save </button>
				      </div>
				     </div>
					</form>
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
			<div class="row">
			<table class="data-table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus ">Course Number</th>
									<th>Course Abbreviation</th>
									<th>Department</th>
									<th>Course Name</th>
									<th>Course Duration</th>
									<th>Mode of training</th>
									
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php  if(isset($courses)){
								foreach($courses as $c){
									
								?>
								<tr>
									<td class="table-plus"><?php echo $c["web_course_number"];?></td>
									<td><?php echo ucfirst($c["web_course_abbrv"]);?></td>
									<td><?php echo ucfirst($c["web_dept_name"]);?></td>
										<td><?php echo ucfirst($c["web_course_name"]);?></td>
									<td><?php echo $c["duration"];?></td>
									<td><?php echo $c["mode_of_training"];?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-left">
												<a class="dropdown-item" href="<?php echo base_url();?>course_settings/edit_course_settings/<?php echo $c["web_course_id"]; ?>" rel="<?php echo $c["web_course_id"];?>"><i class="fa fa-pencil"></i> Edit</a>
												<a class="dropdown-item delete_course" href="#" rel="<?php echo $c["web_course_id"];?>"><i class="fa fa-trash"></i> Delete</a>
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
					$(document).on("change", ".inst_select", function(e){
					var val=$(this).val();
					//alert(id);
					$.ajax({
		url: "<?php echo base_url();?>course_settings/get_inst_department/"+val,
		type: 'post',
		context: document.body,
		data: $("#course").serialize(),
		success:function(data){  
			var data = $.parseJSON(data);	
            var dept_select= data["dept_select"];				
         				
			$("#course_dept").html(dept_select);
			
			
			
		}
	});
				});
						$(document).on("click", ".save_course", function(e){
				e.preventDefault();
				var id= $(this).attr("rel");
				 $(".form-control").css("border","1px solid #d1d7dc");
				if ($.trim($("#course_number").val()) == "") {
					//alert("first");
            $("#course_number").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#course_number").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#course_name").val()) == "") {
					//alert("first");
            $("#course_name").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#course_name").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#course_abbrv").val()) == "") {
					//alert("first");
            $("#course_abbrv").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#course_abbrv").offset().top - 100},
                    'slow');
            return false;
        } else if ($.trim($("#course_dept").val()) == 0) {
					//alert("first");
            $("#course_dept").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#course_dept").offset().top - 100},
                    'slow');
            return false;
        } else if ($.trim($("#course_desc").val()) == "") {
					//alert("first");
            $("#course_desc").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#course_desc").offset().top - 100},
                    'slow');
            return false;
        } else if ($.trim($("#course_duration").val()) == 0) {
					//alert("first");
            $("#course_duration").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#course_duration").offset().top - 100},
                    'slow');
            return false;
        } else if ($.trim($("#mode_of_training").val()) == 0) {
					//alert("first");
            $("#mode_of_training").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#mode_of_training").offset().top - 100},
                    'slow');
            return false;
        } else{
				if(id==0){
			$("form#course").attr("action", "<?=base_url()?>course_settings/save_course/");
			} else{
				
				$("form#course").attr("action", "<?=base_url()?>course_settings/update_course/"+id);
			}
		//	$("form#category").attr("action", "<?=base_url()?>settings/save_category/");
            $("form#course").submit();
			//alert("here");
		}
			
			});
		$(document).on("change", ".image_course", function(e){
				e.preventDefault();
	//var id= $(this).attr("rel");
	var fileSize = this.files[0];
    var sizeInMb = fileSize.size/1024;
	var sizeLimit= 1024*10;
	 if(sizeInMb > sizeLimit){
		 //alert(sizeInMb);
		 alert("File Size cannot be more than 10 MB");
		 $("#course_image").val("");
	 }
	
	});			
						$(document).on("click", ".edit_cat", function(e){
				
				e.preventDefault();
				
	var id= $(this).attr("rel");
	 $('html,body').animate({
                    scrollTop: $("#cat_name").offset().top - 100},
                    'slow')
$.ajax({
		url: "<?php echo base_url();?>settings/get_category/"+id,
		type: 'post',
		context: document.body,
		data: $("#category").serialize(),
		success:function(data){  
			var data = $.parseJSON(data);	
          				
             var cat_name= data["web_cat_name"];				
			$("#cat_name").val(cat_name);
			
			$(".save_cat").attr("rel",id);
			$(".save_cat").html("Update");
		;
			//jQuery("#master-wrap").attr("tabindex",-1).focus();
		}
	});
	
	});
					$(document).on("click", ".delete_course", function(e){
				e.preventDefault();
				//alert("Are You Sure You want to delete?");
				if (confirm("Are you sure You want to delete?")) {
       	var id= $(this).attr("rel");
				$("form#course").attr("action", "<?=base_url()?>course_settings/delete_course/"+id);
            $("form#course").submit();
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