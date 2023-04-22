	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="<?php echo base_url(); ?>dashboard">
				<img src="<?php echo base_url(); ?>src/images/logo1.png" alt="">
			</a>
		</div>
		<div class="menu-block customscroll">
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
							<li><a href="<?php echo base_url(); ?>enquiry_list/enquiry_form" class="<?php if($submenu==22){ echo 'active'; }?>">Enquiry Form</a></li>
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
							<!--<li><a href="<?php echo base_url(); ?>settings/admin_menu"  class="<?php if($submenu==37){ echo 'active'; }?>">Admin Menus</a></li>
							<li><a href="<?php echo base_url(); ?>settings/admin_submenu"  class="<?php if($submenu==38){ echo 'active'; }?>">Admin Sub Menus</a></li>-->
						</ul>
					</li>
<?php  } if (in_array(4, $this->session->userdata('user_priv'))){?>
				<li class="">
						<a href="javascript:;" class="dropdown-toggle  <?php if($menu==4){ echo 'active'; }?>">
							<span class="fa fa-book"></span><span class="mtext">Course Settings</span>
						</a>		<ul class="submenu">
							<li><a href="<?php echo base_url(); ?>course_settings" class="<?php if($submenu==41){ echo 'active'; }?>">Course Settings</a></li>
							<li><a href="<?php echo base_url(); ?>course_settings/departments" class="<?php if($submenu==42){ echo 'active'; }?>">Department Settings</a></li>
						<!--	<li><a href="<?php echo base_url(); ?>course_settings/user_settings"  class="<?php if($submenu==43){ echo 'active'; }?>">User Settings</a></li>
							<li><a href="<?php echo base_url(); ?>course_settings/user_priv_settings"  class="<?php if($submenu==44){ echo 'active'; }?>">User Role Privileges</a></li>-->
						</ul>
					</li>
					
<?php }if (in_array(5, $this->session->userdata('user_priv'))){?>
				<li class="">
						<a href="javascript:;" class="dropdown-toggle  <?php if($menu==5){ echo 'active'; }?>">
							<span class="fa fa-home"></span><span class="mtext">Home Page Settings</span>
						</a>		<ul class="submenu">
							<li><a href="<?php echo base_url(); ?>home_settings" class="<?php if($submenu==51){ echo 'active'; }?>">Manage News & Updates</a></li>
							<li><a href="<?php echo base_url(); ?>home_settings/manage_events" class="<?php if($submenu==52){ echo 'active'; }?>">Manage Events</a></li>
						<!--<li><a href="<?php echo base_url(); ?>home_settings/faculty_settings"  class="<?php if($submenu==53){ echo 'active'; }?>">Faculty Settings</a></li>-->
						<li><a href="<?php echo base_url(); ?>home_settings/manage_certificates"  class="<?php if($submenu==53){ echo 'active'; }?>">Manage Certificates</a></li>
						<li><a href="<?php echo base_url(); ?>home_settings/manage_testimonials"  class="<?php if($submenu==54){ echo 'active'; }?>">Manage Testimonials</a></li>
						<li><a href="<?php echo base_url(); ?>home_settings/manage_news_letters"  class="<?php if($submenu==55){ echo 'active'; }?>">Manage News Letter</a></li>
						<li><a href="<?php echo base_url(); ?>home_settings/manage_feedback"  class="<?php if($submenu==56){ echo 'active'; }?>">Manage Feedback</a></li>
							<!--	<li><a href="<?php echo base_url(); ?>course_settings/user_priv_settings"  class="<?php if($submenu==54){ echo 'active'; }?>">User Role Privileges</a></li>-->
						</ul>
					</li>
					

<?php }if (in_array(6, $this->session->userdata('user_priv'))){?>
				<li class="">
						<a href="javascript:;" class="dropdown-toggle  <?php if($menu==6){ echo 'active'; }?>">	<!--	<li><a href="<?php echo base_url(); ?>course_settings/user_priv_settings"  class="<?php if($submenu==54){ echo 'active'; }?>">User Role Privileges</a></li>-->
					
							<span class="fa ion-android-image"></span><span class="mtext">Gallery Settings</span>
						</a>		<ul class="submenu">
							<li><a href="<?php echo base_url(); ?>gallery_settings" class="<?php if($submenu==61){ echo 'active'; }?>">Manage Main Gallery</a></li>
							<li><a href="<?php echo base_url(); ?>gallery_settings/manage_gallery_category" class="<?php if($submenu==62){ echo 'active'; }?>">Manage Gallery Category</a></li>
					</ul>
					</li>
					

<?php }
?>

		
				</ul>
			</div>
		</div>
	</div>