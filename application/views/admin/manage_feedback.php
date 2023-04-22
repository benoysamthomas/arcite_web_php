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
			
			$cat_stat_name="Testimonial Saved";
			$alert_name="alert-success";
		}		else if($this->session->userdata('alert_status') == 2){
			
			$cat_stat_name="Testimonial Already Exists";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 4){
			
			$cat_stat_name="Testimonial Updated";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 5){
			
			$cat_stat_name="No change in Testimonial";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 6){
			
			$cat_stat_name="Testimonial Deleted";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 7){
			
			$cat_stat_name="Testimonial Cannot be deleted as it has reference associated with it";
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
							<h4 class="text-blue" >Manage Feedback</h4>
							<p class="mb-30 font-14"></p>
						</div>
						
					</div>
					<!--<form id="testimonials" action="" method="post" enctype="multipart/form-data">
					<div			<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label >Testimonial Person<span style="color:red">*</span></label>
											<input type="text" class="form-control" name="testimonial_person" id="testimonial_person" value="">
										</div>
									</div>
										<div class="col-md-8">
										<div class="form-group">
											<label >Testimonial<span style="color:red">*</span> </label>
											<textarea class="form-control" name="testimonial_message" id="testimonial_message" value=""></textarea>
										</div>
									</div>
								
								
								</div>
											<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label >Institute<span style="color:red">*</span></label>
												<select class="custom-select form-control" name="testimonial_institute" id="testimonial_institute">
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
											<label >Testimonial Image</label>
												<input type="file" class="form-control image_testimonial" name="testimonial_image" id="testimonial_image"   accept="image/png, image/gif, image/jpeg">
										</div>
									</div>
								
								</div>
							
								<br/>
								<div class="form-group row ">
							
							<div class="col-sm-12 col-md-7">
						<button class="btn btn-outline-info pull-right  save_testimonial" type="button" rel="0"> Save </button>
				      </div>
				     </div>
					</form>-->
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
			<div class="row">
			<div class="col-md-12">
			<table class="data-table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus ">Feedback Date</th>
										<th>Feedback Person</th>
									<th>Institute</th>
									<th>Feedback Email</th>
									<th>Feedback Reply Status</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php  if(isset($feedbacks)){
								foreach($feedbacks as $f){
								
								?>
								<tr>
									
									<td class="table-plus" <?php  if($f["web_feedback_reply_status"]==0){?> style="color:red;"<?php } else{?>style="color:green;"<?php }?>><?php echo date("d-m-Y",strtotime($f["web_feedback_date"]));?></td>
										<td ><?php echo $f["web_feedback_person"];?></td>
									<td><?php echo ucfirst($f["web_inst_name"]);?></td>
									<td><?php echo $f["web_feedback_email"];?></td>
									<td><?php  if($f["web_feedback_reply_status"]==0){ echo "Did Not Reply";} else{ echo "Replied";};?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-left">
												<a class="dropdown-item" href="<?php echo base_url();?>home_settings/feedback_reply/<?php echo $f["web_feedback_id"]; ?>" rel=""><i class="fa fa-reply"></i> Reply</a>
												<a class="dropdown-item delete_testimonial" href="#" rel="<?php echo $f["web_feedback_id"]; ?>"><i class="fa fa-trash"></i> Delete</a>
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
						$(document).on("click", ".save_testimonial", function(e){
				e.preventDefault();
				var id= $(this).attr("rel");
				 $(".form-control").css("border","1px solid #d1d7dc");
				if ($.trim($("#testimonial_person").val()) == "") {
					//alert("first");
            $("#testimonial_person").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#testimonial_person").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#testimonial_message").val()) == "") {
					//alert("first");
            $("#testimonial_message").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#testimonial_message").offset().top - 100},
                    'slow');
            return false;
        } else if ($.trim($("#testimonial_institute").val()) == "") {
					//alert("first");
            $("#testimonial_institute").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#testimonial_institute").offset().top - 100},
                    'slow');
            return false;
        }  else{
				if(id==0){
			$("form#testimonials").attr("action", "<?=base_url()?>home_settings/save_testimonial/");
			} else{
				
				$("form#testimonials").attr("action", "<?=base_url()?>home_settings/update_testimonial/"+id);
			}
		//	$("form#category").attr("action", "<?=base_url()?>settings/save_category/");
            $("form#testimonials").submit();
			//alert("here");
		}
			
			});		
						$(document).on("change", ".image_testimonial", function(e){
				e.preventDefault();
	//var id= $(this).attr("rel");
	var fileSize = this.files[0];
    var sizeInMb = fileSize.size/1024;
	var sizeLimit= 1024*10;
	 if(sizeInMb > sizeLimit){
		 //alert(sizeInMb);
		 alert("File Size cannot be more than 10 MB");
		 $("#testimonial_image").val("");
	 }
	
	});
					$(document).on("click", ".delete_testimonial", function(e){
				e.preventDefault();
				//alert("Are You Sure You want to delete?");
				if (confirm("Are you sure You want to delete?")) {
       	var id= $(this).attr("rel");
				$("form#testimonials").attr("action", "<?=base_url()?>home_settings/delete_testimonial/"+id);
            $("form#testimonials").submit();
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