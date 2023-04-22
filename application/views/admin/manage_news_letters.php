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
			
			$cat_stat_name="Newsletters Saved Successfully";
			$alert_name="alert-success";
		}		else if($this->session->userdata('alert_status') == 2){
			
			$cat_stat_name="Newsletters Published";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 4){
			
			$cat_stat_name="Newsletters Updated";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 5){
			
			$cat_stat_name="No change in Newsletters";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 6){
			
			$cat_stat_name="Newsletters Deleted";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 7){
			
			$cat_stat_name="Newsletters Cannot be deleted as it has reference associated with it";
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
							<h4 class="text-blue" >NewsLetter Settings</h4>
						<br/>
							<p class=" font-14 pull-right">	<a href="<?php echo base_url();?>home_settings/manage_news_letter_emails/" class="btn btn-outline-info pull-right " type="button" rel="0"> <i class="fa fa-forward">  Manage Newsletter Emails</i> </a>
				     </p><br/>
						</div>
						
					</div>
					<form id="news_letter" action="" method="post" enctype="multipart/form-data">
					<div			<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label >Newletter Title<span style="color:red">*</span></label>
											<input type="text" class="form-control" name="news_letter_title" id="news_letter_title" value="">
										</div>
									</div>
														<div class="col-md-4">
										<div class="form-group">
											<label >Institute<span style="color:red">*</span></label>
												<select class="custom-select form-control" name="news_letter_institute" id="news_letter_institute">
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
											<label >Content Category<span style="color:red">*</span></label>
												<select class="custom-select form-control" name="news_letter_category" id="news_letter_category">
												<option value="1"> Message Content</option>
												<option value="2">Poster Image Content</option>
						
											
											</select>
										</div>
									</div>
								
								</div>
											<div class="row">
													<div class="col-md-4 news_image" style="display:none;">
										<div class="form-group">
											<label >Poster Image</label>
												<input type="file" class="form-control image_event" name="news_letter_image" id="news_letter_image" accept="image/png, image/gif, image/jpeg">
										</div>
									</div>
												<div class="col-md-12 news_content" style="display:block;">
										<div class="form-group ">
											<label >Newsletter Content<span style="color:red">*</span> </label>
											<textarea class="textarea_editor form-control border-radius-0" name="news_letter_content" id="news_letter_content" value="" row=""></textarea>
										</div>
									</div>
									</div>
										<div class="row">
				
							
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
						<button class="btn btn-outline-info pull-right  save_news_letter" type="button" rel="0"> Save </button>
				      </div>
				     </div>
					</form>
					</div>
								<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
			<div class="row">
			<table class="data-table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus ">Newsletter Title</th>
									<th>Institute</th>
									<th>Status</th>
								
									
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php  if(isset($news_letters)){
								foreach($news_letters as $n){
								
								?>
								<tr>
									<td class="table-plus"><?php echo $n["web_news_letter_manage_title"];?></td>
									<td><?php echo ucfirst($n["web_inst_name"]);?></td>
									<td><?php if($n["web_news_letter_manage_status"]==1){ echo "Draft Saved";}else{  echo "Published";}?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-left">
												<a class="dropdown-item" href="<?php echo base_url();?>home_settings/edit_manage_news_letter/<?php echo $n["web_news_letter_manage_id"]; ?>" rel=""><i class="fa fa-pencil"></i> Edit</a>
												<?php if($n["web_news_letter_manage_status"]==1){?><a class="dropdown-item" href="<?php echo base_url();?>home_settings/publish_news_letter/<?php echo $n["web_news_letter_manage_id"]; ?>" rel=""><i class="fa fa-send"></i> Publish</a>
												<?php }?>
												<a class="dropdown-item delete_news_letter" href="#" rel="<?php echo $n["web_news_letter_manage_id"];?>"><i class="fa fa-trash"></i> Delete</a>
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
		
		$("#checkAll").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});
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
								$(document).on("click", ".save_news_letter", function(e){
				e.preventDefault();
				var id= $(this).attr("rel");
				var category= $("#news_letter_category").val();
				//alert(category);
				 $(".form-control").css("border","1px solid #d1d7dc");
				if ($.trim($("#news_letter_title").val()) == "") {
					//alert("first");
            $("#news_letter_title").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#news_letter_title").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#news_letter_institute").val()) == 0) {
					//alert("first");
            $("#news_letter_institute").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#news_letter_institute").offset().top - 100},
                    'slow');
            return false;
        } else if ($.trim($("#news_letter_content").val()) == "" && category==1) {
				alert("Content Emply");
            $("#news_letter_content").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#news_letter_content").offset().top - 100},
                    'slow');
            return false;
        }   else if ($("#news_letter_image").val() == "" && category==2) {
				//alert("Please upload Image");
            $("#news_letter_image").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#news_letter_image").offset().top - 100},
                    'slow');
            return false;
        } else{
				if(id==0){
			$("form#news_letter").attr("action", "<?=base_url()?>home_settings/save_news_letter/");
			} else{
				
				$("form#news_letter").attr("action", "<?=base_url()?>home_settings/update_news_letter/"+id);
			}
		//	$("form#category").attr("action", "<?=base_url()?>settings/save_category/");
            $("form#news_letter").submit();
			//alert("here");
		}
			
			});		
							$(document).on("change", "#news_letter_category", function(e){
				e.preventDefault();
	//var id= $(this).attr("rel");
	var val =  $(this).val();
	//alert(val);
  if(val==1){
	  
	  $(".news_content").show();
	  $(".news_image").hide();
  }else{
	  $(".news_content").hide();
	  $(".news_image").show(); 
	  
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