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
			
			$cat_stat_name="Newsletters Sent Successfully";
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
							<h4 class="text-blue" >Manage News Letter Emails</h4>
							<br/>
							<p class=" font-14 pull-right">	<a href="<?php echo base_url();?>home_settings/manage_news_letters/" class="btn btn-outline-info pull-right " type="button" rel="0"> <i class="fa fa-reply">  News Letter Settings</i> </a>
				     </p><br/>
						</div>
						
					</div>
					<form id="news_letter" action="" method="post" enctype="multipart/form-data">
						<div class="row">
			<table class="data-table stripe hover nowrap">
							<thead>
								<tr>
									<th ><!--<input type="checkbox"  id="checkAll"  name="check_all" value="all"> Check All-->Sl.No</th>
									<th >Subscriber Email</th>
									<th>Institute</th>
									<th>Subrciber Status</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php $i=1; if(isset($news_letter_emails)){
								foreach($news_letter_emails as $n){
								
								?>
								<tr>
									<td class="table-plus"> <?php echo $i;?><!--<input type="checkbox"  class="check" id="check_news_<?php echo $i;?>" name="check_news[]" value="<?php echo $n["web_news_letter_id"]; ?>">--></td>
									<td ><?php echo $n["web_news_letter_email"];?></td>
									<td><?php echo ucfirst($n["web_inst_name"]);?></td>
									<td><?php if($n["web_news_letter_status"]==1){ echo "Subscribed";}else if($n["web_news_letter_status"]==2){ echo "Email Sent";} else{ echo "Unsubscribed";}?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-left">
												<!--<a class="dropdown-item" href="<?php echo base_url();?>home_settings/sent_news_letters/<?php echo $n["web_news_letter_id"]; ?>" rel=""><i class="fa fa-envelope"></i> Sent</a>-->
												<a class="dropdown-item delete_newsletter_email" href="#" rel="<?php echo $n["web_news_letter_id"];?>"><i class="fa fa-trash"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
								<?php $i++;}
									}
							?>
								</tbody>
						</table>
								
			</div>
					
							
								<br/>
								<div class="form-group row ">
							
							<!--<div class="col-sm-12 col-md-7">
						<button class="btn btn-outline-info pull-right  send_newsletter" type="button" rel="0"> <i class="fa fa-envelope">  Send Newsletters</i> </button>
				      </div>-->
				     </div>
					</form>
					</div>
					<!--<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					
		
				</div>-->
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
						$(document).on("click", ".send_newsletter", function(e){
				e.preventDefault();
				var id= $(this).attr("rel");
				if($('#news_letter input:checked').length <= 0){
					
				alert("Check atleast one checkbox to send Mail");	
					
				}  else{
				if(id==0){
			$("form#news_letter").attr("action", "<?=base_url()?>home_settings/send_news_letter_mail/");
			} else{
				
				//$("form#news_letter").attr("action", "<?=base_url()?>home_settings/update_testimonial/"+id);
			}
		//	$("form#category").attr("action", "<?=base_url()?>settings/save_category/");
            $("form#news_letter").submit();
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