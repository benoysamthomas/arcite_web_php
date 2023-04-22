<!DOCTYPE html>
<html >
<head>
<?php $this->load->view('include/head');?>
</head>
<body class="">
	

	<div class="enquiry-main-container ">
		<div class="pd-ltr-20  height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<img src="<?php echo base_url(); ?>src/images/logo1.png" alt="Arcite Logo">
								
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
						<!--<div class="pull-right">
										<a class="btn btn-outline-primary" href="<?php echo base_url(); ?>login">Login <i class="fa fa-sign-in"></i></a>
							
						</div>-->
					</div>
					</div>
					<br/>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue" ></h4>
							<p class="mb-30 font-14"></p>
						</div>
						<p>
						<?php if($status==1){?>
						<div class=" text-center font-18">
											<h3 class="mb-20">Enquiry Submitted Successfully! <a href="<?php echo base_url();?>" class="pull-right" alt="Enquiry Form"><i class="fa fa-home"></i></a></h3>
											<div class="mb-30 text-center"><img src="<?php echo base_url(); ?>vendors/images/success.png"></div>
										 Your Enquiry was submitted successfully. Our Staff will follow up with you shortly.
										</div>
						<?php } else{?>
								<div class=" text-center font-18">
											<h3 class="mb-20"><i class="fa fa-exclamation-triangle" style="color:red"></i> Some Error Occured!! <a href="<?php echo base_url();?>" class="pull-right"><i class="fa fa-home"></i></a></h3>
											<div class="mb-30 text-center"></div>
										 Please Resubmit the Enquiry
										</div>
						
						<?php }?>
						</p>
					</div>

				</div>
				<!-- Default Basic Forms End -->

				<!-- horizontal Basic Forms Start -->
		
				<!-- horizontal Basic Forms End -->

				<!-- Form grid Start -->
			
				<!-- Form grid End -->

				<!-- Input Validation Start -->
				<!--<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue">Input Validation</h4>
							<p class="mb-30 font-14">Validation styles for error, warning, and success</p>
						</div>
						<div class="pull-right">
							<a href="#input-validation-form" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
						</div>
					</div>
					<form>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group has-success">
									<label class="form-control-label">Input with success</label>
									<input type="text" class="form-control form-control-success">
									<div class="form-control-feedback">Success! You've done it.</div>
									<small class="form-text text-muted">Example help text that remains unchanged.</small>
								</div>
								<div class="form-group has-warning">
									<label class="form-control-label">Input with warning</label>
									<input type="text" class="form-control form-control-warning">
									<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
									<small class="form-text text-muted">Example help text that remains unchanged.</small>
								</div>
								<div class="form-group has-danger">
									<label class="form-control-label">Input with danger</label>
									<input type="text" class="form-control form-control-danger">
									<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
									<small class="form-text text-muted">Example help text that remains unchanged.</small>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group has-success row">
									<label class="form-control-label col-sm-12 col-md-3 col-form-label">Input with success</label>
									<div class="col-sm-12 col-md-9">
										<input type="text" class="form-control form-control-success">
										<div class="form-control-feedback">Success! You've done it.</div>
										<small class="form-text text-muted">Example help text that remains unchanged.</small>
									</div>
								</div>
								<div class="form-group has-warning row">
									<label class="form-control-label col-sm-12 col-md-3 col-form-label">Input with warning</label>
									<div class="col-sm-12 col-md-9">
										<input type="text" class="form-control form-control-warning">
										<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
										<small class="form-text text-muted">Example help text that remains unchanged.</small>
									</div>
								</div>
								<div class="form-group has-danger row">
									<label class="form-control-label col-sm-12 col-md-3 col-form-label">Input with danger</label>
									<div class="col-sm-12 col-md-9">
										<input type="text" class="form-control form-control-danger">
										<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
										<small class="form-text text-muted">Example help text that remains unchanged.</small>
									</div>
								</div>
							</div>
						</div>
					</form>
					<div class="collapse collapse-box" id="input-validation-form" >
						<div class="code-box">
							<div class="clearfix">
								<a href="javascript:;" class="btn btn-primary btn-sm code-copy pull-left"  data-clipboard-target="#input-validation"><i class="fa fa-clipboard"></i> Copy Code</a>
								<a href="#input-validation-form" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Code</a>
							</div>
							<pre><code class="xml copy-pre" id="input-validation">
<form>
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="form-group has-success">
				<label class="form-control-label">Input with success</label>
				<input type="text" class="form-control form-control-success">
				<div class="form-control-feedback">Success! You've done it.</div>
				<small class="form-text text-muted">Example help text that remains unchanged.</small>
			</div>
			<div class="form-group has-warning">
				<label class="form-control-label">Input with warning</label>
				<input type="text" class="form-control form-control-warning">
				<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
				<small class="form-text text-muted">Example help text that remains unchanged.</small>
			</div>
			<div class="form-group has-danger">
				<label class="form-control-label">Input with danger</label>
				<input type="text" class="form-control form-control-danger">
				<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
				<small class="form-text text-muted">Example help text that remains unchanged.</small>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="form-group has-success row">
				<label class="form-control-label col-sm-12 col-md-2 col-form-label">Input with success</label>
				<div class="col-sm-12 col-md-10">
					<input type="text" class="form-control form-control-success">
					<div class="form-control-feedback">Success! You've done it.</div>
					<small class="form-text text-muted">Example help text that remains unchanged.</small>
				</div>
			</div>
			<div class="form-group has-warning row">
				<label class="form-control-label col-sm-12 col-md-2 col-form-label">Input with warning</label>
				<div class="col-sm-12 col-md-10">
					<input type="text" class="form-control form-control-warning">
					<div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
					<small class="form-text text-muted">Example help text that remains unchanged.</small>
				</div>
			</div>
			<div class="form-group has-danger row">
				<label class="form-control-label col-sm-12 col-md-2 col-form-label">Input with danger</label>
				<div class="col-sm-12 col-md-10">
					<input type="text" class="form-control form-control-danger">
					<div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
					<small class="form-text text-muted">Example help text that remains unchanged.</small>
				</div>
			</div>
		</div>
	</div>
</form>
							</code></pre>
						</div>
					</div>
				</div>-->
				<!-- Input Validation End -->

			</div>
	    <script src="<?php echo base_url();?>vendors/scripts/jquery-3.5.1.min.js"></script>
			<?php $this->load->view('include/script');?>
		<script type="text/javascript">
  $(document).ready(
	function() {
	
	});
	

</script>
				<?php $this->load->view('include/footer');?>
		</div>
	</div>

</body>
</html>