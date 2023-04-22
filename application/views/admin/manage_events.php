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
			
			$cat_stat_name="Events Saved";
			$alert_name="alert-success";
		}		else if($this->session->userdata('alert_status') == 2){
			
			$cat_stat_name="Events Already Exists";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 4){
			
			$cat_stat_name="Events Updated";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 5){
			
			$cat_stat_name="No change in Events";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 6){
			
			$cat_stat_name="Events Deleted";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 7){
			
			$cat_stat_name="Events Cannot be deleted as it has reference associated with it";
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
							<h4 class="text-blue" >Manage Events</h4>
							<p class="mb-30 font-14"></p>
						</div>
						
					</div>
					<form id="event" action="" method="post" enctype="multipart/form-data">
					<div			<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label >Event Name <span style="color:red">*</span></label>
											<input type="text" class="form-control" name="event_name" id="event_name" value="">
										</div>
									</div>
										<div class="col-md-4">
										<div class="form-group">
											<label >Event Location<span style="color:red">*</span> </label>
											<input type="text" class="form-control" name="event_location" id="event_location" value="">
										</div>
									</div>
								
											<div class="col-md-4">
										<div class="form-group">
											<label >Event Date <span style="color:red">*</span></label>
											<input type="text" class="form-control date-picker" name="event_date" id="event_date" value="">
										</div>
									
									</div>
								
								</div>
											<div class="row">
												<div class="col-md-4">
										<div class="form-group">
											<label >Event Time (Ex:10 a.m to 5 p.m) <span style="color:red">*</span></label>
											<input type="text" class="form-control " name="event_time" id="event_time" value="">
										</div>
									
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label >Institute<span style="color:red">*</span></label>
												<select class="custom-select form-control" name="event_institute" id="event_institute">
												<option value="0">Select Institute</option>
												<?php  if(isset($institutions)){
								foreach($institutions as $i){
									
								?>
												<option value="<?php echo $i["web_inst_id"]?>"><?php echo $i["web_inst_name"]?></option>
												<?php }
												}?>
											
											</select>
										</div>
									</div>
								<div class="col-md-4">
										<div class="form-group">
											<label >Event Image</label>
												<input type="file" class="form-control image_event" name="event_image" id="event_image"   accept="image/png, image/gif, image/jpeg">
										</div>
									</div>
									<!--<div class="col-md-3">
										<div class="form-group">
											<label >Institute Contact </label>
											<input type="text" class="form-control" name="inst_contact" id="inst_contact" value="">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label >Institute Email</label>
											<input type="text" class="form-control" name="inst_email" id="inst_email" value="">
										</div>
									</div>-->
								
								</div>
							
								<br/>
								<div class="form-group row ">
							
							<div class="col-sm-12 col-md-7">
						<button class="btn btn-outline-info pull-right  save_event" type="button" rel="0"> Save </button>
				      </div>
				     </div>
					</form>
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
			<div class="row">
			<table class="data-table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus ">News Headline</th>
									<th>Institute</th>
									<th>Location</th>
									<th>Date</th>
									<th>Time</th>
									<th>Image</th>
								
									
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php  if(isset($events)){
								foreach($events as $e){
								
								?>
								<tr>
									<td class="table-plus"><?php echo $e["web_event_name"];?></td>
									<td><?php echo ucfirst($e["web_inst_name"]);?></td>
									<td><?php echo ucfirst($e["web_event_location"]);?></td>
									<td><?php echo  date("d-m-Y",strtotime($e["web_event_date"]));?></td>
									<td><?php echo $e["web_event_time"];?></td>
									<td><?php echo $e["web_event_image"];?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-left">
												<a class="dropdown-item" href="<?php echo base_url();?>home_settings/edit_event_settings/<?php echo $e["web_event_id"]; ?>" rel=""><i class="fa fa-pencil"></i> Edit</a>
												<a class="dropdown-item delete_event" href="#" rel="<?php echo $e["web_event_id"];?>"><i class="fa fa-trash"></i> Delete</a>
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
		$( "#news_date1" ).datepicker({
		
		changeMonth: true,
		changeYear: true,
		dateFormat: 'mm-dd-yyyy',
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
						$(document).on("click", ".save_event", function(e){
				e.preventDefault();
				var id= $(this).attr("rel");
				 $(".form-control").css("border","1px solid #d1d7dc");
				if ($.trim($("#event_name").val()) == "") {
					//alert("first");
            $("#event_name").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#event_name").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#event_location").val()) == "") {
					//alert("first");
            $("#event_location").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#event_location").offset().top - 100},
                    'slow');
            return false;
        } else if ($.trim($("#event_date").val()) == "") {
					//alert("first");
            $("#event_date").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#event_date").offset().top - 100},
                    'slow');
            return false;
        }  else if ($.trim($("#event_time").val()) == "") {
					//alert("first");
            $("#event_time").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#event_time").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#event_institute").val()) == 0) {
					//alert("first");
            $("#event_institute").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#event_institute").offset().top - 100},
                    'slow');
            return false;
        } else{
				if(id==0){
			$("form#event").attr("action", "<?=base_url()?>home_settings/save_event/");
			} else{
				
				$("form#event").attr("action", "<?=base_url()?>home_settings/update_event/"+id);
			}
		//	$("form#category").attr("action", "<?=base_url()?>settings/save_category/");
            $("form#event").submit();
			//alert("here");
		}
			
			});		
						$(document).on("change", ".image_event", function(e){
				e.preventDefault();
	//var id= $(this).attr("rel");
	var fileSize = this.files[0];
    var sizeInMb = fileSize.size/1024;
	var sizeLimit= 1024*10;
	 if(sizeInMb > sizeLimit){
		 //alert(sizeInMb);
		 alert("File Size cannot be more than 10 MB");
		 $("#event_image").val("");
	 }
	
	});
					$(document).on("click", ".delete_event", function(e){
				e.preventDefault();
				//alert("Are You Sure You want to delete?");
				if (confirm("Are you sure You want to delete?")) {
       	var id= $(this).attr("rel");
				$("form#event").attr("action", "<?=base_url()?>home_settings/delete_event/"+id);
            $("form#event").submit();
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