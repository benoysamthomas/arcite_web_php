	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="#">
				<img src="<?php echo base_url(); ?>src/images/logo1.png" alt="">
			</a>
		</div>
		<!--<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
				
					<?php


if (in_array(1, $this->session->userdata('user_priv'))){

?>			<li class="">
						<a href="<?php echo base_url(); ?>dashboard" class="dropdown-toggle no-arrow <?php if($menu==1){ echo 'active'; }?>">
							<span class="fa fa-dashboard"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
<?php }
if (in_array(2, $this->session->userdata('user_priv'))){ ?>
						<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle <?php if($menu==2){ echo 'active'; }?>">
							<span class="fa fa-list-alt"></span><span class="mtext">Admission Enquiry</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url(); ?>enquiry_list" class="<?php if($submenu==21){ echo 'active'; }?>">Enquiry List</a></li>
							<li><a href="<?php echo base_url(); ?>enquiry_list/enquiry_form" class="<?php if($submenu==22){ echo 'active'; }?>" target="_blank">Enquiry Form</a></li>
						</ul>
					</li>
<?php } if (in_array(3, $this->session->userdata('user_priv'))){?>
						<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle <?php if($menu==3){ echo 'active'; }?>">
							<span class="fa fa-gear"></span><span class="mtext">General Settings</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url(); ?>settings" class="<?php if($submenu==31){ echo 'active'; }?>">Categories</a></li>
							<li><a href="<?php echo base_url(); ?>settings/subcategory" class="<?php if($submenu==32){ echo 'active'; }?>">Sub Categories</a></li>
							<li><a href="<?php echo base_url(); ?>settings/user_settings"  class="<?php if($submenu==33){ echo 'active'; }?>">User Settings</a></li>
							<li><a href="<?php echo base_url(); ?>settings/user_priv_settings"  class="<?php if($submenu==34){ echo 'active'; }?>">User Role Privileges</a></li>
							<li><a href="<?php echo base_url(); ?>settings/institue_settings"  class="<?php if($submenu==35){ echo 'active'; }?>">Institution Settings</a></li>
					</li>
<?php  } if (in_array(4, $this->session->userdata('user_priv'))){?>
				<li class="">
						<a href="javascript:;" class="dropdown-toggle  <?php if($menu==4){ echo 'active'; }?>">
							<span class="fa fa-book"></span><span class="mtext">Course Settings</span>
						</a>		<ul class="submenu">
							<li><a href="<?php echo base_url(); ?>course_settings" class="<?php if($submenu==41){ echo 'active'; }?>">Course Settings</a></li>
							<li><a href="<?php echo base_url(); ?>course_settings/departments" class="<?php if($submenu==42){ echo 'active'; }?>">Department Settings</a></li>
					</li>
					
<?php }if (in_array(5, $this->session->userdata('user_priv'))){?>
				<li class="">
						<a href="javascript:;" class="dropdown-toggle  <?php if($menu==5){ echo 'active'; }?>">
							<span class="fa fa-home"></span><span class="mtext">Home Page Settings</span>
						</a>		<ul class="submenu">
							<li><a href="<?php echo base_url(); ?>home_settings" class="<?php if($submenu==51){ echo 'active'; }?>">Manage News & Updates</a></li>
							<li><a href="<?php echo base_url(); ?>home_settings/manage_events" class="<?php if($submenu==52){ echo 'active'; }?>">Manage Events</a></li>
						<li><a href="<?php echo base_url(); ?>home_settings/faculty_settings"  class="<?php if($submenu==53){ echo 'active'; }?>">Faculty Settings</a></li>
						<li><a href="<?php echo base_url(); ?>home_settings/manage_testimonials"  class="<?php if($submenu==54){ echo 'active'; }?>">Manage Testimonials</a></li>
					</li>
					
<?php }
?>

		
				</ul>
			</div>
		</div>-->
	</div>