<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<?php $this->load->view('include/login-head');?>
</head>
<body>
<?php if ($msg==1){?>
<div class="alert alert-danger alert-dismissible fade show " role="alert">
						<strong><center>Incorrect Username Or Password</center>	</strong>	
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
<?php }?>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
	
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
		<h4><a href="<?php echo base_url();?>feed" class="pull-right"><i class="fa fa-home"></i></a></h4>
			<img src="<?php echo base_url(); ?>src/images/logo1.png" alt="login" class="login-img"> 
			<form class="" action="<?php echo base_url();?>/login" method="post">
				<div class="input-group custom input-group-lg">
					<input type="text" class="form-control" placeholder="Username" name="username" required>
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" placeholder="Password"  name="password" required>
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
							-->
						
							<button class="btn btn-outline-primary btn-lg btn-block">
							Login
						</button>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="forgot-password padding-top-10"><a href="forgot-password.php">Forgot Password</a></div>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php $this->load->view('include/script');?>
<script src="<?php echo base_url();?>src/plugins/sweetalert2/sweetalert2.all.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>src/plugins/sweetalert2/sweetalert2.css">
	<script src="<?php echo base_url();?>src/plugins/sweetalert2/sweet-alert.init.js"></script>
</body>
</html>