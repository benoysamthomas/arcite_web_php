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
			<div class="row clearfix progress-box">
						<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p">
						<h4 class="mb-30">Course Search Log</h4>
						<div class="device-manage-progress-chart">
							<ul>
							<?php 
							$tech_count=0;
							$media_count=0;
							$comp_count=0;

                   if(!empty($technical)){

							foreach($technical as $t);
							
							$tech_count=$t["inst_count"];
				   }
				      if(!empty($media)){
							foreach($media as $m); 
							$media_count=$m["inst_count"];
							
					  }
							if(!empty($competitive)){
								foreach($competitive as $cmp)
								$comp_count=$cmp["inst_count"];
								}
						
$total=	$tech_count+$media_count+$comp_count;


$percent_tech=($tech_count/$total)*100;
$percent_media=($media_count/$total)*100;
$percent_comp=($comp_count/$total)*100;
					?>
								<li class="clearfix">
									<div class="device-name" style="width:150px;">Technical School</div>
									<div class="device-progress">
										<div class="progress">
											<div class="progress-bar window border-radius-8" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percent_tech;?>%;">
											</div>
										</div>
									</div>
									<div class="device-total"><?php echo $tech_count;?></div>
								</li>
								<li class="clearfix">
									<div class="device-name" style="width:150px;">Media School</div>
									<div class="device-progress">
										<div class="progress">
											<div class="progress-bar mac border-radius-8" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percent_media;?>%;">
											</div>
										</div>
									</div>
									<div class="device-total"><?php echo $media_count;?></div>
								</li>
								<li class="clearfix">
									<div class="device-name" style="width:150px;">Competitive Exams</div>
									<div class="device-progress">
										<div class="progress">
											<div class="progress-bar android border-radius-8" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percent_comp;?>%;">
											</div>
										</div>
									</div>
									<div class="device-total"><?php echo $comp_count;?></div>
								</li>
						
							</ul>
						</div>
					</div>
				</div>
			</div>
	    <script src="<?php echo base_url();?>vendors/scripts/jquery-3.5.1.min.js"></script>
		<script>
  $(document).ready(
	function() {
		
		
	});
	
</script>
				<?php $this->load->view('include/footer');?>
		</div>
	</div>
				<?php $this->load->view('include/script');?>

</body>
</html>