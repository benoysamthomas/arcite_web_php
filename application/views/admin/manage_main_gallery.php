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
			
			$cat_stat_name="Gallery Saved";
			$alert_name="alert-success";
		}		else if($this->session->userdata('alert_status') == 2){
			
			$cat_stat_name="Gallery Already Exists";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 4){
			
			$cat_stat_name="Gallery Updated";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 5){
			
			$cat_stat_name="No change in Gallery";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 6){
			
			$cat_stat_name="Gallery Deleted";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 7){
			
			$cat_stat_name="Gallery Cannot be deleted as it has reference associated with it";
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
							<h4 class="text-blue" >Manage Main Gallery</h4>
							<p class="mb-30 font-14"></p>
						</div>
						
					</div>
					<form id="gallery" action="" method="post" enctype="multipart/form-data">
					<div			<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label >Gallery Category Name <span style="color:red">*</span></label>
											<input type="text" class="form-control" name="gallery_cat_name" id="gallery_cat_name" value="">
										</div>
									</div>
											<div class="col-md-6">
										<div class="form-group">
											<label >Institute<span style="color:red">*</span></label>
												<select class="custom-select form-control" name="gallery_institute" id="gallery_institute">
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
										
								
								
								
								</div>
											<div class="row">
												<div class="col-md-6">
										<div class="form-group">
											<label >Image Caption <span style="color:red"></span></label>
											<input type="text" class="form-control " name="gallery_image_caption" id="gallery_image_caption" value="">
										</div>
									
									</div>
								<div class="col-md-4">
										<div class="form-group">
											<label >Gallery Image</label>
												<input type="file" class="form-control image_event" name="gallery_image" id="gallery_image" accept="image/png, image/gif, image/jpeg">
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
						<button class="btn btn-outline-info pull-right  save_gallery" type="button" rel="0"> Save </button>
				      </div>
				     </div>
					</form>
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
			<div class="row">
			<table class="data-table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus ">Gallery Name</th>
									<th>Institute</th>
									<th>Gallery Caption</th>
									<th>Image</th>
									
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($gallery as $g){?>
								<tr>
									<td class="table-plus"><?php echo $g["web_gallery_category_name"]?></td>
									<td><?php echo $g["web_inst_name"]?></td>
									<td><?php echo $g["web_gallery_image_caption"]?></td>
									<td><?php echo $g["web_gallery_main_image"]?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-left">
												<a class="dropdown-item" href="<?php echo base_url();?>gallery_settings/edit_gallery_settings/<?php echo $g["web_gallery_id"]?>" rel=""><i class="fa fa-pencil"></i> Edit</a>
												<a class="dropdown-item delete_gallery" href="#" rel="<?php echo $g["web_gallery_id"]?>"><i class="fa fa-trash"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
							<?php }?>
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
						$(document).on("click", ".save_gallery", function(e){
				e.preventDefault();
				var id= $(this).attr("rel");
				 $(".form-control").css("border","1px solid #d1d7dc");
				if ($.trim($("#gallery_cat_name").val()) == "") {
					//alert("first");
            $("#gallery_cat_name").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#gallery_cat_name").offset().top - 100},
                    'slow');
            return false;
        } else if ($.trim($("#gallery_institute").val()) == 0) {
					//alert("first");
            $("#gallery_institute").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#gallery_institute").offset().top - 100},
                    'slow');
            return false;
        } else{
				if(id==0){
			$("form#gallery").attr("action", "<?=base_url()?>gallery_settings/save_gallery/");
			} else{
				
				$("form#gallery").attr("action", "<?=base_url()?>gallery_settings/update_gallery/"+id);
			}
		//	$("form#category").attr("action", "<?=base_url()?>settings/save_category/");
            $("form#gallery").submit();
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
		 $("#news_image").val("");
	 }
	
	});
					$(document).on("click", ".delete_gallery", function(e){
				e.preventDefault();
				//alert("Are You Sure You want to delete?");
				if (confirm("Are you sure You want to delete?")) {
       	var id= $(this).attr("rel");
				$("form#gallery").attr("action", "<?=base_url()?>gallery_settings/delete_gallery/"+id);
            $("form#gallery").submit();
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