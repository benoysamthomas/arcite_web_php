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
			
			$cat_stat_name="News Saved";
			$alert_name="alert-success";
		}		else if($this->session->userdata('alert_status') == 2){
			
			$cat_stat_name="News Already Exists";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 4){
			
			$cat_stat_name="News Updated";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 5){
			
			$cat_stat_name="No change in News";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 6){
			
			$cat_stat_name="News Deleted";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 7){
			
			$cat_stat_name="News Cannot be deleted as it has reference associated with it";
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
							<h4 class="text-blue" >Edit Manage News & Updates</h4>
							<p class="mb-30 font-14"></p>
						</div>
						
					</div>
					<form id="news" action="" method="post" enctype="multipart/form-data">
					<?php foreach($news_details as $n);?>
					<div			<div class="row">
									<div class="col-md-8">
										<div class="form-group">
											<label >News Headline <span style="color:red">*</span></label>
											<input type="text" class="form-control" name="news_head" id="news_head" value="<?php echo $n["web_news_head"]?>">
										</div>
									</div>
												<div class="col-md-4">
										<div class="form-group">
											<label >News Category<span style="color:red">*</span></label>
												<select class="custom-select form-control" name="news_category" id="news_category">
												<option value="0">Select Category</option>
												<?php foreach($news_category as $nc){?>
												<option value="<?php echo $nc["web_sub_cat_id"]?>" <?php if($nc["web_sub_cat_id"]==$n["web_news_category"]){ echo "selected";}?>><?php echo $nc["web_sub_cat_name"]?></option>
												<?php }?>
											
											</select>
										</div>
									</div>
									
								
								
								
								</div>
											<div class="row">
												<div class="col-md-4">
										<div class="form-group">
											<label >News Date <span style="color:red">*</span></label>
											<input type="text" class="form-control date-picker" name="news_date" id="news_date" value="<?php echo  date("d-m-Y",strtotime($n["web_news_date"]))?>">
										</div>
									
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label >Institute<span style="color:red">*</span></label>
												<select class="custom-select form-control" name="news_institute" id="news_institute">
												<option value="0">Select Institute</option>
												<?php  if(isset($institutions)){
								foreach($institutions as $i){
									
								?>
												<option value="<?php echo $i["web_inst_id"]?>" <?php if($n["web_news_inst_id"]==$i["web_inst_id"]){ echo "selected";}?>><?php echo $i["web_inst_name"]?></option>
												<?php }
												}?>
											
											</select>
										</div>
									</div>
								<div class="col-md-4">
										<div class="form-group">
											<label >News Image</label>
												<input type="file" class="form-control image_event" name="news_image" id="news_image" accept="image/png, image/gif, image/jpeg">
										</div>
									</div>
									<?php if($n["web_news_image"]!=""){?>
									<div class="col-md-3">
										<div class="form-group">
											<label >Saved Image </label>
											<a href="<?php echo base_url();?>news_images/<?php echo $n["web_news_image"]?>" target="_blank"class="" ><?php echo $n["web_news_image"]?></a>
										</div>
									</div>
									<?php }?>
									<!--<div class="col-md-3">
										<div class="form-group">
											<label >Institute Email</label>
											<input type="text" class="form-control" name="inst_email" id="inst_email" value="">
										</div>
									</div>-->
								
								</div>
							<div class="row">
								<div class="col-md-12">
										<div class="form-group">
											<label >News Description<span style="color:red">*</span> </label>
											<textarea class="textarea_editor form-control border-radius-0" name="news_details" id="news_details" value="<?php echo $n["web_news_details"]?>"><?php echo $n["web_news_details"]?></textarea>
										</div>
									</div>
							</div>
								<br/>
								<div class="form-group row ">
							
							<div class="col-sm-12 col-md-7">
						<button class="btn btn-outline-info pull-right  save_news" type="button" rel="<?php echo $n["web_news_id"];?>"> update </button>
				      </div>
				     </div>
					</form>
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
						$(document).on("click", ".save_news", function(e){
				e.preventDefault();
				var id= $(this).attr("rel");
				 $(".form-control").css("border","1px solid #d1d7dc");
				if ($.trim($("#news_head").val()) == "") {
					//alert("first");
            $("#news_head").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#news_head").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#news_category").val()) == 0) {
					//alert("first");
            $("#news_category").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#news_category").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#news_details").val()) == "") {
					//alert("first");
            $("#news_details").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#news_details").offset().top - 100},
                    'slow');
            return false;
        } else if ($.trim($("#news_date").val()) == "") {
					//alert("first");
            $("#news_date").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#news_date").offset().top - 100},
                    'slow');
            return false;
        } else if ($.trim($("#news_institute").val()) == 0) {
					//alert("first");
            $("#news_institute").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#news_institute").offset().top - 100},
                    'slow');
            return false;
        } else{
				if(id==0){
			$("form#news").attr("action", "<?=base_url()?>home_settings/save_news/");
			} else{
				
				$("form#news").attr("action", "<?=base_url()?>home_settings/update_news/"+id);
			}
		//	$("form#category").attr("action", "<?=base_url()?>settings/save_category/");
            $("form#news").submit();
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
					$(document).on("click", ".delete_news", function(e){
				e.preventDefault();
				//alert("Are You Sure You want to delete?");
				if (confirm("Are you sure You want to delete?")) {
       	var id= $(this).attr("rel");
				$("form#news").attr("action", "<?=base_url()?>home_settings/delete_news/"+id);
            $("form#news").submit();
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