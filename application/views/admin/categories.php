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
			
			$cat_stat_name="Category Saved";
			$alert_name="alert-success";
		}		else if($this->session->userdata('alert_status') == 2){
			
			$cat_stat_name="Category Already Exists";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 4){
			
			$cat_stat_name="Category Updated";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 5){
			
			$cat_stat_name="No change in Category";
			$alert_name="alert-danger";
		}else if($this->session->userdata('alert_status') == 6){
			
			$cat_stat_name="Category Deleted";
			$alert_name="alert-success";
		}else if($this->session->userdata('alert_status') == 7){
			
			$cat_stat_name="Category Cannot be deleted as it has subcategory associated with it";
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
							<h4 class="text-blue" >Category Settings</h4>
							<p class="mb-30 font-14"></p>
						</div>
						
					</div>
					<form id="category" action="" method="post" enctype="multipart/form-data">
					<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Category Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="cat_name" id="cat_name" placeholder="">
							</div>
						</div>
								<br/>
								<div class="form-group row ">
							
							<div class="col-sm-12 col-md-7">
						<button class="btn btn-outline-info pull-right  save_cat" type="button" rel="0"> Save </button>
				      </div>
				     </div>
					</form>
					</div>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
			<div class="row">
			<table class="data-table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus ">Category ID</th>
									<th>Category Name</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php  if(isset($categories)){
								foreach($categories as $c){
									
								?>
								<tr>
									<td class="table-plus"><?php echo $c["web_cat_id"];?></td>
									<td><?php echo ucfirst($c["web_cat_name"]);?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item edit_cat" href="#" rel="<?php echo $c["web_cat_id"];?>"><i class="fa fa-pencil"></i> Edit</a>
												<a class="dropdown-item delete_cat" href="#" rel="<?php echo $c["web_cat_id"];?>"><i class="fa fa-trash"></i> Delete</a>
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
						$(document).on("click", ".save_cat", function(e){
				e.preventDefault();
				var id= $(this).attr("rel");
				if ($.trim($("#cat_name").val()) == "") {
					//alert("first");
            $("#cat_name").css("border","1px solid #ff0000");
            $('html,body').animate({
                    scrollTop: $("#cat_name").offset().top - 100},
                    'slow');
            return false;
        } else{
				if(id==0){
			$("form#category").attr("action", "<?=base_url()?>settings/save_category/");
			} else{
				
				$("form#category").attr("action", "<?=base_url()?>settings/update_category/"+id);
			}
		//	$("form#category").attr("action", "<?=base_url()?>settings/save_category/");
            $("form#category").submit();
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
					$(document).on("click", ".delete_cat", function(e){
				e.preventDefault();
				//alert("Are You Sure You want to delete?");
				if (confirm("Are you sure You want to delete?")) {
       	var id= $(this).attr("rel");
				$("form#category").attr("action", "<?=base_url()?>settings/delete_category/"+id);
            $("form#category").submit();
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