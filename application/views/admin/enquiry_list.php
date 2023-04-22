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
				<!--<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					
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
						<button class="btn btn-outline-info pull-right  save_cat" type="button"> Save </button>
				      </div>
				     </div>
					</form>
					</div>-->
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue" >Enquiry List</h4>
							<p class="mb-30 font-14"></p>
						</div>
						
					</div>
			<div class="row" id="enq_list">
		
			<table class="data-table stripe hover nowrap" >
							<thead>
								<tr>
									<th class="table-plus ">Student Name</th>
									<th>Institution Enquired</th>
									<th>Enquiry Date</th>
									<th>Student Email</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($enquiry_details as $enq){?>
								<tr>
									<td class="table-plus"><?php echo ucfirst($enq["arc_adm_fname"])." ".ucfirst($enq["arc_adm_lname"])?></td>
								<td><?php echo $enq["web_inst_name"]?></td>
									<td><?php echo date("d-m-Y",strtotime($enq["arc_adm_enq_date"]));?></td>
									<td><?php echo $enq["arc_adm_stud_email"]?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item pull-right " href="<?=base_url()?>enquiry_list/get_student_enquiry_info/<?php echo $enq["arc_adm_id"];?>" rel=""><i class="fa fa-user"></i>  View Details</a>
												<a class="dropdown-item pull-right" href="#" rel="<?php echo $enq["arc_adm_id"]?>"><i class=" fa fa-paper-plane"></i> Send Admission Link</a>
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
	<script src="<?php echo base_url();?>src/plugins/datatables/media/js/button/pdfmake.min.js"></script>
	<script src="<?php echo base_url();?>src/plugins/datatables/media/js/button/vfs_fonts.js"></script>
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
						
					$(document).on("click", ".enq_person", function(e){
				e.preventDefault();
				//alert("Are You Sure You want to delete?");
				//alert("alrt");
       	var id= $(this).attr("rel");
				$(".enq_person").attr("href", "<?=base_url()?>enquiry_list/get_student_enquiry_info/"+id);

	});
	
		
	});
	
</script>
</body>
</html>