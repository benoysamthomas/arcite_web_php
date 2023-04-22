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
			
			$cat_stat_name="Faculty Settings Saved";
			$alert_name="alert-success";
		}		else if($this->session->userdata('alert_status') == 2){
			
			$cat_stat_name="Faculty Settings Already Exists";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 4){
			
			$cat_stat_name="Faculty Settings Updated";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 5){
			
			$cat_stat_name="No change in Faculty Settings";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 6){
			
			$cat_stat_name="Faculty Settings Deleted";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 7){
			
			$cat_stat_name="Faculty Settings Cannot be deleted as it has reference associated with it";
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
							<h4 class="text-blue" >Edit Faculty Settings</h4>
							<p class="mb-30 font-14"></p>
						</div>
						
					</div>
					<form id="faculty" action="" method="post" enctype="multipart/form-data">
					<?php foreach($faculty_details as $f);?>
					<div			<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label >Faculty Name <span style="color:red">*</span></label>
											<input type="text" class="form-control" name="faculty_name" id="faculty_name" value="<?php echo $f["web_faculty_name"];?>">
										</div>
									</div>
										<div class="col-md-4">
										<div class="form-group">
											<label >Faculty Proffession<span style="color:red">*</span> </label>
											<input type="text" class="form-control" name="faculty_prof" id="faculty_prof" value="<?php echo $f["web_faculty_prof"];?>">
										</div>
									</div>
								
											<div class="col-md-4">
										<div class="form-group">
											<label >Faculty Desription</label>
											<textarea  class="form-control" name="faculty_desc" id="faculty_desc" value="<?php echo $f["web_faculty_desc"];?>"><?php echo $f["web_faculty_desc"];?></textarea>
										</div>
									
									</div>
								
								</div>
											<div class="row">
												<div class="col-md-4">
										<div class="form-group">
											<label >Faculty Qualification</label>
											<input type="text" class="form-control " name="faculty_qual" id="faculty_qual" value="<?php echo $f["web_faculty_qual"];?>">
										</div>
									
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label >Faculty Location<span style="color:red">*</span></label>
												<select class="custom-select form-control" name="faculty_location" id="faculty_location">
												<option value="0">Select Location</option>
												<?php  if(isset($campus_location)){
								foreach($campus_location as $cl){
									
								?>
												<option value="<?php echo $cl["web_sub_cat_id"]?>" <?php if($f["web_faculty_location"]==$cl["web_sub_cat_id"]){ echo "Selected";}?>><?php echo $cl["web_sub_cat_name"]?></option>
												<?php }
												}?>
											
											</select>
										</div>
									</div>
								<div class="col-md-4">
										<div class="form-group">
											<label >Faculty Image</label>
												<input type="file" class="form-control image_faculty" name="faculty_image" id="faculty_image"   accept="image/png, image/gif, image/jpeg">
										</div>
									</div>
											<?php if($f["web_faculty_image"]!=""){?>
									<div class="col-md-3">
										<div class="form-group">
											<label >Saved Image </label>
											<a href="<?php echo base_url();?>faculty_images/<?php echo $f["web_faculty_image"]?>" target="_blank"class="" ><?php echo $f["web_faculty_image"]?></a>
										</div>
									</div>
									<?php }?>
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
						<button class="btn btn-outline-info pull-right  save_faculty" type="button" rel="<?php echo $f["web_faculty_id"]?>"> Update </button>
				      </div>
				     </div>
					</form>
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
						$(document).on("click", ".save_faculty", function(e){
				e.preventDefault();
				var id= $(this).attr("rel");
				 $(".form-control").css("border","1px solid #d1d7dc");
				if ($.trim($("#faculty_name").val()) == "") {
					//alert("first");
            $("#faculty_name").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#faculty_name").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#faculty_prof").val()) == "") {
					//alert("first");
            $("#faculty_prof").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#faculty_prof").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#faculty_location").val()) == 0) {
					//alert("first");
            $("#faculty_location").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#faculty_location").offset().top - 100},
                    'slow');
            return false;
        } else{
				if(id==0){
			$("form#faculty").attr("action", "<?=base_url()?>home_settings/save_faculty/");
			} else{
				
				$("form#faculty").attr("action", "<?=base_url()?>home_settings/update_faculty/"+id);
			}
		//	$("form#category").attr("action", "<?=base_url()?>settings/save_category/");
            $("form#faculty").submit();
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
					$(document).on("click", ".delete_faculty", function(e){
				e.preventDefault();
				//alert("Are You Sure You want to delete?");
				if (confirm("Are you sure You want to delete?")) {
       	var id= $(this).attr("rel");
				$("form#faculty").attr("action", "<?=base_url()?>home_settings/delete_faculty/"+id);
            $("form#faculty").submit();
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