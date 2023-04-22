<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('include/head');?>

</head>
<body>
	<?php $this->load->view('include/header');?>
	<?php $this->load->view('include/sidebar');?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="min-height-200px">
		<?php if($this->session->has_userdata('alert_status')){
		if($this->session->userdata('alert_status') == 1){
			
			$cat_stat_name="User Privilege Settings Saved";
			$alert_name="alert-success";
		}		else if($this->session->userdata('alert_status') == 2){
			
			$cat_stat_name="Username Already Exists! Please use a different username";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 3){
			
			$cat_stat_name="Email Already Exists! Please use a different Email address";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 4){
			
			$cat_stat_name="User Privilege Settings Updated";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 5){
			
			$cat_stat_name="No change in User Settings";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 6){
			
			$cat_stat_name="User Settings Deleted";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 7){
			
			$cat_stat_name="User Cannot be deleted as user has functions associated with it";
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
							<h4 class="text-blue" >User Role Privileges</h4>
							<p class="mb-30 font-14"></p>
						</div>
						
					</div>
					<form id="usr_settings" action="" method="post" enctype="multipart/form-data">
										<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label >User Role <span style="color:red">*</span></label>
											<select class="form-control role_select"name="role" id="role" >
											<option value="0"> Select Role</option>
											<?php  if(isset($user_roles)){
								foreach($user_roles as $ur){
									
								?>
								
							<option value="<?php echo $ur["web_role_id"]?>"><?php echo $ur["web_role"];?></option>
							<?php 
								}
											}?>
											</select>
											</div>
									</div>
									
														<div class="col-md-6 col-sm-12"  id="checkboxcontainer">
				<label class="weight-600">User Pages</label>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input checkbox_check" id="customCheck1-1" value="1" name="user_priveleges[]" >
					<label class="custom-control-label" for="customCheck1-1">Dashboard</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input checkbox_check" id="customCheck2-1" value="2" name="user_priveleges[]"  >
					<label class="custom-control-label" for="customCheck2-1">Enquiry List</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input checkbox_check" id="customCheck3-1" value="3" name="user_priveleges[]">
					<label class="custom-control-label" for="customCheck3-1">Settings</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input checkbox_check" id="customCheck4-1" value="4" name="user_priveleges[]">
					<label class="custom-control-label" for="customCheck4-1">Course Settings</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input checkbox_check" id="customCheck5-1" value="5" name="user_priveleges[]">
					<label class="custom-control-label" for="customCheck5-1">Home Page Settings</label>
				</div>
				<div class="custom-control custom-checkbox mb-5">
					<input type="checkbox" class="custom-control-input checkbox_check" id="customCheck5-1" value="6" name="user_priveleges[]">
					<label class="custom-control-label" for="customCheck5-1">Gallery Settings</label>
				</div>
			</div>
								
								</div>
						
									<div class="row">
							
					
								</div>
								<br/>
								<div class="form-group row ">
							
							<div class="col-sm-12 col-md-6">
						<button class="btn btn-outline-info pull-right  save_priv" type="button" rel="0"> Submit </button>
				      </div>
				     </div>
					</form>
					</div>
			
		</div>
		
	    <script src="<?php echo base_url();?>vendors/scripts/jquery-3.5.1.min.js"></script>
	<?php $this->load->view('include/script');?>
				
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/plugins/datatables/media/css/responsive.dataTables.css">
	<script>
  $(document).ready(
	function() {
			
						$(document).on("click", ".save_priv", function(e){
				e.preventDefault();
			
 
				$(".form-control").css("border","1px solid #d1d7dc");
				var id= $(this).attr("rel");
				if ($.trim($("#role").val()) == 0) {
					//alert("first");
            $("#role").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#role").offset().top - 100},
                    'slow');
            return false;
        } else if ($('input:checkbox').filter(':checked').length < 1){
        alert("Please Check at least one Check Box");
 return false;
 }  else {
                       $("form#usr_settings").attr("action", "<?=base_url()?>settings/save_user_privileges/");
            $("form#usr_settings").submit();
						 
                    }
		//	$("form#category").attr("action", "<?=base_url()?>settings/save_category/");
		
			//alert("here");
		
			
			});		
					
					$(document).on("change", ".role_select", function(e){
						  
				e.preventDefault();
				
	var id= $(this).val();
	//alert(id);
	
$.ajax({
		url: "<?php echo base_url();?>settings/get_user_privileges/"+id,
		type: 'post',
		context: document.body,
		data: $("#usr_settings").serialize(),
		success:function(data){  
			var data = $.parseJSON(data);	
          				
             var checkboxes= data["checkboxes"];				
             var status= data["status"];
if(status==1){			 
			$("#checkboxcontainer").html(checkboxes);
}
		
			//jQuery("#master-wrap").attr("tabindex",-1).focus();
		}
	});
	
	});
					$(document).on("click", ".delete_user", function(e){
				e.preventDefault();
				//alert("Are You Sure You want to delete?");
				if (confirm("Are you sure You want to delete?")) {
       	var id= $(this).attr("rel");
				$("form#usr_settings").attr("action", "<?=base_url()?>settings/delete_user/"+id);
            $("form#usr_settings").submit();
    }



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
	});
	
</script>
			
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
		
<?php $this->load->view('include/footer');?>
		</div>
	</div>

</body>
</html>