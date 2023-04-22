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
			
			$cat_stat_name="Department Saved";
			$alert_name="alert-success";
		}		else if($this->session->userdata('alert_status') == 2){
			
			$cat_stat_name="Department Already Exists";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 4){
			
			$cat_stat_name="Department Updated";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 5){
			
			$cat_stat_name="No change in Department";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 6){
			
			$cat_stat_name="Department Deleted";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 7){
			
			$cat_stat_name="Department Cannot be deleted as it has a reference associated with it";
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
							<h4 class="text-blue" >Department Settings</h4>
							<p class="mb-30 font-14"></p>
						</div>
						
					</div>
					<form id="dept" action="" method="post" enctype="multipart/form-data">
					<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label >Department Name <span style="color:red">*</span></label>
											<input type="text" class="form-control" name="dept_name" id="dept_name" value="">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label >Institute  <span style="color:red">*</span></label>
											<select class="form-control" name="inst_id" id="inst_id">
											<option value="0">Select Institute</option>
											<?php  if(isset($institutions)){
								foreach($institutions as $i){
									
								?>
								<option value="<?php echo $i["web_inst_id"];?>"><?php echo $i["web_inst_name"];?></option>
										<?php }
									}
							?>	
											</select>
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="form-group">
											<label >Department Mode  <span style="color:red">*</span></label>
											<select class="form-control" name="dept_mode" id="dept_mode">
											<option value="1"> Course Display</option>
											<option value="2"> Enquiry Display</option>
								
											</select>
										</div>
									</div>
								</div>
									<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label >Department Images (png/jpg) <span style="color:red">*</span></label>
											<input type="file" class="form-control" name="dept_image" id="dept_image" value="">
										</div>
									</div>
                                  </div>									
							
								<br/>
								<div class="form-group row ">
							
							<div class="col-sm-12 col-md-7">
						<button class="btn btn-outline-info pull-right  save_dept" type="button" rel="0"> Save </button>
				      </div>
				     </div>
					</form>
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
			<div class="row">
			<table class="data-table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus ">Department Name</th>
									<th>Institute Name</th>
									<th>Department Mode</th>
									
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php  if(isset($departments)){
								foreach($departments as $d){
									
								?>
								<tr>
									<td class="table-plus"><?php echo $d["web_dept_name"];?></td>
									<td><?php echo $d["web_inst_name"];?></td>
									<td><?php  if ($d["web_dept_course_mode"]==1){ echo "Course Display";} else{ echo "Enquiry Display"; }?></td>
									
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-left">
												<a class="dropdown-item" href="<?php echo base_url();?>course_settings/edit_dept_settings/<?php echo $d["web_dept_id"]; ?>" rel=""><i class="fa fa-pencil"></i> Edit</a>
												<a class="dropdown-item delete_dept" href="#" rel="<?php echo $d["web_dept_id"];?>"><i class="fa fa-trash"></i> Delete</a>
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
						$(document).on("click", ".save_dept", function(e){
				e.preventDefault();
				var id= $(this).attr("rel");
				if ($.trim($("#dept_name").val()) == "") {
					//alert("first");
            $("#dept_name").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#dept_name").offset().top - 100},
                    'slow');
            return false;
        } else if ($.trim($("#inst_id").val()) == 0) {
					//alert("first");
            $("#inst_id").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#inst_id").offset().top - 100},
                    'slow');
            return false;
        } else{
				if(id==0){
			$("form#dept").attr("action", "<?=base_url()?>course_settings/save_department/");
			} else{
				
				$("form#dept").attr("action", "<?=base_url()?>course_settings/update_department/"+id);
			}
		//	$("form#category").attr("action", "<?=base_url()?>settings/save_category/");
            $("form#dept").submit();
			//alert("here");
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
					$(document).on("click", ".delete_dept", function(e){
				e.preventDefault();
				//alert("Are You Sure You want to delete?");
				if (confirm("Are you sure You want to delete?")) {
       	var id= $(this).attr("rel");
				$("form#dept").attr("action", "<?=base_url()?>course_settings/delete_department/"+id);
            $("form#dept").submit();
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