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
							<h4 class="text-blue" >Student Enquiry Info</h4>
							<p class="mb-30 font-14"></p>
						</div>
						
					</div>	
					<?php foreach($enquiry_details as $enq)?>
			
				<form>
						<div class="form-group row">
									<label class="col-sm-12 col-md-8 col-form-label">Institution Enquired : &nbsp;<span style="color:grey; font-weight:lighter" > <?php echo $enq["web_inst_name"];?></span></label>
					
						<label class="col-sm-12 col-md-4 col-form-label">Date Of Enquiry : &nbsp;<span style="color:grey; font-weight:lighter" > <?php echo date("d-m-Y",strtotime($enq["arc_adm_enq_date"]));?></span></label>
						</div>
						<div class="form-group row">
						<label class="col-sm-12 col-md-8 col-form-label"> Full Name : &nbsp;<span style="color:grey; font-weight:lighter" > <?php echo ucfirst($enq["arc_adm_fname"])." ".ucfirst($enq["arc_adm_mname"])." ".ucfirst($enq["arc_adm_lname"])?></span></label>
						
					<label class="col-sm-12 col-md-4 col-form-label">Highest Qualification : &nbsp;<span style="color:grey; font-weight:lighter" > <?php echo ucfirst($enq["qualification"])?></span></label>
							</div>
							<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label"> Gender : &nbsp;<span style="color:grey; font-weight:lighter" > <?php echo ucfirst($enq["gender"])?></span></label>
							<label class="col-sm-12 col-md-3 col-form-label">D.O.B : &nbsp;<span style="color:grey; font-weight:lighter" > <?php echo date("d-m-Y",strtotime($enq["arc_adm_dob"]));?></span></label>
							<label class="col-sm-12 col-md-4 col-form-label">Email : &nbsp;<span style="color:grey; font-weight:lighter" > <?php echo ucfirst($enq["arc_adm_stud_email"])?></span></label>
						</div>
							<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label"> Mobile : &nbsp;<span style="color:grey; font-weight:lighter" > <?php echo ucfirst($enq["arc_adm_stud_mob"])?></span></label>
							<label class="col-sm-12 col-md-3 col-form-label">Telephone : &nbsp;<span style="color:grey; font-weight:lighter" > <?php echo $enq["arc_adm_stud_tele"];?></span></label>
							<label class="col-sm-12 col-md-6 col-form-label">Street Address : &nbsp;<span style="color:grey; font-weight:lighter" > <?php echo ucfirst($enq["arc_adm_staddress"]).",".$enq["arc_adm_city"].",".$enq["arc_adm_state"]." - ".$enq["arc_adm_zipcode"]?></span></label>
						</div>
						<?php if($enq["arc_adm_gaurdian_name"]!=""){?>
						<div class="form-group row">
							<label class="col-sm-12 col-md-4 col-form-label"> Gaurdian Name : &nbsp;<span style="color:grey; font-weight:lighter" > <?php echo ucfirst($enq["arc_adm_gaurdian_name"])?></span></label>
							<label class="col-sm-12 col-md-4 col-form-label">Gaurdian Name : &nbsp;<span style="color:grey; font-weight:lighter" > <?php echo $enq["arc_adm_gaurdian_relation"];?></span></label>
							<label class="col-sm-12 col-md-4 col-form-label">Gaurdian Contact : &nbsp;<span style="color:grey; font-weight:lighter" > <?php echo ucfirst($enq["arc_adm_gaurdian_tele"])?></span></label>
						</div>
						<?php }?>
				<div class="form-group row">
							<label class="col-sm-12 col-md-4 col-form-label"> Courses Enquired: &nbsp;</label>
	</div>
	<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">

<?php $course_info=$this->enquiry_model->get_student_enquiry_courses($enq_id); ?>	
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Department</th>
      <th scope="col">Course Name</th>
     
    </tr>
  </thead>
  <tbody>
  <?php  $i=1;foreach($course_info as $ci){?>
    <tr>
      <td scope="row" style="color:grey"><?php echo $i;?></td>
      <td scope="row" style="color:grey"><?php echo $ci["web_dept_name"];?></td>
      <td scope="row"style="color:grey"><?php echo $ci["web_course_name"];?></td>
    </tr>
  <?php $i++;}?>
  </tbody>
</table>

</div>
			
				<div class="form-group row">
							<label class="col-sm-12 col-md-4 col-form-label"> References: &nbsp;</label>
	</div>
	<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">

<?php $reference_info=$this->enquiry_model->get_student_enquiry_references($enq_id); ?>	
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Reference Name</th>
      <th scope="col">Reference Relation</th>
      <th scope="col">Rerence Contact No.</th>
     
    </tr>
  </thead>
  <tbody>
  <?php  $i=1;foreach($reference_info as $ri){?>
    <tr>
      <td scope="row" style="color:grey"><?php echo $i;?></td>
      <td scope="row" style="color:grey"><?php echo ucfirst($ri["arc_enq_ref_person"]);?></td>
      <td scope="row"style="color:grey"><?php echo $ri["arc_ref_relation"];?></td>
      <td scope="row"style="color:grey"><?php echo $ri["arc_enq_ref_mob"];?></td>
    </tr>
  <?php $i++;}?>
  </tbody>
</table>

</div>
					<div class="form-group row">
									<label class="col-sm-12 col-md-12 col-form-label">Comments : &nbsp;<span style="color:grey; font-weight:lighter" > <?php echo $enq["arc_adm_enq_comments"];?></span></label>
					</div>
					<div class="clearfix">
								<a href="<?php echo base_url();?>enquiry_list" class="btn btn-primary btn-sm  " ><i class="icon-copy fa fa-mail-reply" aria-hidden="true"></i> Back</a>
								<!--<a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>-->
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