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
			
			$cat_stat_name="User Settings Saved";
			$alert_name="alert-success";
		}		else if($this->session->userdata('alert_status') == 2){
			
			$cat_stat_name="Username Already Exists! Please use a different username";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 3){
			
			$cat_stat_name="Email Already Exists! Please use a different Email address";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 4){
			
			$cat_stat_name="User Settings Updated";
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
							<h4 class="text-blue" >Edit User Settings</h4>
							<p class="mb-30 font-14"></p>
						</div>
						
					</div>
					<form id="usr_settings" action="" method="post" enctype="multipart/form-data">
										<div class="row">
									<div class="col-md-4">
									<?php foreach($user_info as $u); ?>
										<div class="form-group">
											<label >First Name <span style="color:red">*</span></label>
											<input type="text" class="form-control" name="user_fname" id="user_fname" value="<?php echo $u["web_user_fname"];?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label >Last Name<span style="color:red">*</span> </label>
											<input type="text" class="form-control" name="user_lname" id="user_lname" value="<?php echo $u["web_user_lname"];?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label >User Name <span style="color:red">*</span></label>
											<input type="text" class="form-control" name="user_name" id="user_name" value="<?php echo $u["web_user_name"];?>">
										</div>
									</div>
								
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label >Password <span style="color:red">*</span></label>
											<input type="password" class="form-control" Placeholder="" name="paswd" id="paswd" value="">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label >User Email <span style="color:red">*</span></label>
											<input type="text" class="form-control" name="user_email" id="user_email" value="<?php echo $u["web_user_email"];?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label >User Contact <span style="color:red">*</span> </label>
											<input type="text" class="form-control" name="user_contact" id="user_contact" value="<?php echo $u["web_user_contact"];?>">
										</div>
									
								</div>
								</div>
									<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label >User Role <span style="color:red">*</span></label>
											<select class="form-control"name="role" id="role" >
											<option value="0"> Select Role</option>
											<?php  if(isset($user_roles)){
								foreach($user_roles as $ur){
									
								?>
								
								<option value="<?php echo $ur["web_role_id"]?>" <?php if( $ur["web_role_id"]==$u["web_user_role"]){ echo "selected";}?>><?php echo $ur["web_role"];?></option>
							<?php 
								}
											}?>
											</select>
										</div>
									</div>
								
								</div>
								<br/>
								<div class="form-group row ">
							
							<div class="col-sm-12 col-md-7">
						<button class="btn btn-outline-info pull-right  update_user" type="button" rel="<?php echo $u["web_user_id"];?>"> Update </button>
				      </div>
				     </div>
					</form>
					</div>
					<!--<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
			<div class="row">
			<table class="data-table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus "> Full Name</th>
									<th>User Name</th>
									<th>Email</th>
									<th>Contact</th>
									<th>Role</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php  if(isset($user_details)){
								foreach($user_details as $ud){
									
								?>
								<tr>
									<td class="table-plus"><?php echo ucfirst($ud["web_user_fname"]." ".$ud["web_user_lname"]);?></td>
									<td><?php echo ucfirst($ud["web_user_name"]);?></td>
									<td><?php echo ucfirst($ud["web_user_email"]);?></td>
									<td><?php echo ucfirst($ud["web_user_contact"]);?></td>
									<td><?php echo ucfirst($ud["web_role"]);?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item edit_cat" href="<?php echo base_url();?>settings/edit_user_settings/<?php echo $ud["web_user_id"]; ?>" rel="<?php echo $ud["web_user_id"];?>"><i class="fa fa-pencil"></i> Edit</a>
												<a class="dropdown-item delete_cat" href="#" rel="<?php echo $ud["web_user_id"];?>"><i class="fa fa-trash"></i> Delete</a>
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
				</div>-->
		</div>
		
	    <script src="<?php echo base_url();?>vendors/scripts/jquery-3.5.1.min.js"></script>
	<?php $this->load->view('include/script');?>
				
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/plugins/datatables/media/css/responsive.dataTables.css">
	<script>
  $(document).ready(
	function() {
			
						$(document).on("click", ".update_user", function(e){
				e.preventDefault();
				 $(".form-control").css("border","1px solid #d1d7dc");
				var id= $(this).attr("rel");
				if ($.trim($("#user_fname").val()) == "") {
					//alert("first");
            $("#user_fname").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#user_fname").offset().top - 100},
                    'slow');
            return false;
        } else if ($.trim($("#user_lname").val()) == "") {
					//alert("first");
            $("#user_lname").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#user_lname").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#user_name").val()) == "") {
					//alert("first");
            $("#user_name").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#user_name").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#user_email").val()) == "") {
					//alert("first");
            $("#user_email").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#user_email").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#user_contact").val()) == "") {
					//alert("first");
            $("#user_contact").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#user_contact").offset().top - 100},
                    'slow');
            return false;
        }else if ($.trim($("#role").val()) == 0) {
					//alert("first");
            $("#role").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#role").offset().top - 100},
                    'slow');
            return false;
        }else{
				if(id==0){
					//alert("dsd");
			$("form#usr_settings").attr("action", "<?=base_url()?>settings/save_user/");
			} else{
				
				$("form#usr_settings").attr("action", "<?=base_url()?>settings/update_user/"+id);
			}
		//	$("form#category").attr("action", "<?=base_url()?>settings/save_category/");
            $("form#usr_settings").submit();
			//alert("here");
		}
			
			});		
					
					$(document).on("click", ".edit_cat", function(e){
						    $('html,body').animate({
                    scrollTop: $("#cat_name").offset().top - 100},
                    'slow');
				
				e.preventDefault();
				
	var id= $(this).attr("rel");
	
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
					$(document).on("click", ".delete_cat", function(e){
				e.preventDefault();
				//alert("Are You Sure You want to delete?");
				if (confirm("Are you sure You want to delete?")) {
       	var id= $(this).attr("rel");
				$("form#usr_settings").attr("action", "<?=base_url()?>settings/delete_category/"+id);
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