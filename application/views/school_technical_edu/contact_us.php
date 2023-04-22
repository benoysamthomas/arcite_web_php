<?php $this->load->view('school_technical_edu/tech_include/head');?>
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
    <?php $this->load->view('school_technical_edu/tech_include/mobile-header');?>
    <div class="kingster-body-outer-wrapper ">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">
   <?php $this->load->view('school_technical_edu/tech_include/topbar');?>
            <header class="kingster-header-wrap kingster-header-style-plain  kingster-style-menu-right kingster-sticky-navigation kingster-style-fixed" data-navigation-offset="75px">
                <div class="kingster-header-background"></div>
         <?php $this->load->view('school_technical_edu/tech_include/header');?>
            </header>

            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-wrapper " style="margin: 0px 0px 0px 0px;padding: 290px 0px 170px 0px;">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php echo base_url(); ?>school_technical_edu/images/contact_us.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed="0.3"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " data-gdlr-animation="fadeIn" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 75px ;font-weight: 700 ;color: #ffffff ;">Contact Us</h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" style="font-size: 25px ;font-style: normal ;letter-spacing: 1px ;text-transform: uppercase ;color: #ffffff ;margin-top: 15px ;"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper ">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #f5f5f5 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 32px ;font-weight: 700 ;">Leave us your info</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 35px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;">
                                                        <p>Please Share your feedbacks and your queries in the Message box below and we will be in touch with you soon</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-contact-form-7-item gdlr-core-item-pdlr gdlr-core-item-pdb ">
                                                    <div role="form" class="wpcf7" id="wpcf7-f1979-p1977-o1" lang="en-US" dir="ltr">
																									<?php if($this->session->has_userdata('alert_status')){
															if($this->session->userdata('alert_status') == 1){ ?>
                                                        <div class="screen-reader-response" style="color:green;"><strong><i class="fa fa-thumbs-up"></i> Thank You For Your Feedback/ Queries. Will Respond to you Soon </strong></div>
														<br/>	<?php }
														
$this->session->unset_userdata('alert_status');
}
  ?>
                                                        <form class="quform"  id="contact_form" action="" method="post" enctype="multipart/form-data" onclick="">

                                                            <div class="quform-elements">
                                                                <div class="quform-element">
                                                                    <p>Your Name (required)
                                                                        <br>
                                                                        <span class="wpcf7-form-control-wrap your-name">
                                                                            <input type="text" name="contact_name" id="contact_name" size="40" class="input1" aria-required="true" aria-invalid="false">
                                                                        </span> 
                                                                    </p>
                                                                </div>
                                                                <div class="quform-element">
                                                                    <p>Your Email (required)
                                                                        <br>
                                                                        <span class="wpcf7-form-control-wrap your-email">
                                                                            <input  type="text" name="contact_email" id="contact_email" size="40" class="input1" aria-required="true" aria-invalid="false">
                                                                        </span> 
                                                                    </p>
                                                                </div>
                                                                <div class="quform-element">
                                                                    <p>Your Message(required)
                                                                        <br>
                                                                        <span class="wpcf7-form-control-wrap your-message">
                                                                            <textarea  id="feedback_message" name="feedback_message" cols="40" rows="10" class="input1" aria-invalid="false"></textarea>
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <p>
                                                                    <!-- Begin Submit button -->
                                                                    <div class="quform-submit">
                                                                        <div class="quform-submit-inner">
                                                                            <button type="button" class="submit-button submit_feeback"><span>Send</span></button>
                                                                        </div>
                                                                        <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                                    </div>
                                                                </p>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 50px 20px 0px 20px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px ;font-weight: 700 ;">Location</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 0px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;">
                                                        <p>Head Office:<br/> 2nd Floor, SAS Arcade.<br/>Opp. Vyapara Bhavan
                                                            <br />Kottiyam, Kollam, Kerala 691571<br/>
															
															<br/>Branch Location:<br/> Prasanthi Towers,
<br/>Near Sports Club,
<br/>Kadappakada, Kerala 691001</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix ">
                                                    <ul>
                                                        <li class=" gdlr-core-skin-divider gdlr-core-with-hover"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon-hover fa fa-envelope-o" style="font-size: 16px ;"  ></i><i class="gdlr-core-icon-list-icon fa fa-envelope-o" style="font-size: 16px ;width: 16px ;" ></i></span>
                                                            <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 16px ;">info@arcite.in</span></div>
                                                        </li>
                                                        <li class=" gdlr-core-skin-divider gdlr-core-with-hover"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon-hover fa fa-phone" style="font-size: 16px ;"  ></i><i class="gdlr-core-icon-list-icon fa fa-phone" style="font-size: 16px ;width: 16px ;" ></i></span>
                                                            <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 16px ;"> 91-799 421 1144</span></div>
                                                        </li>
														 <li class=" gdlr-core-skin-divider gdlr-core-with-hover"><span class="gdlr-core-icon-list-icon-wrap"><i class="gdlr-core-icon-list-icon-hover fa fa-whatsapp" style="font-size: 16px ;"  ></i><i class="gdlr-core-icon-list-icon fa fa-whatsapp" style="font-size: 16px ;width: 16px ;" ></i></span>
                                                            <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 16px ;"> 
															<a href="https://wa.me/919400441133" target="_blank" style="color:#6b6b6b;" >+91 940 044 1133</a></span></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 25px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 28px ;font-weight: 700 ;">Map</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-wp-google-map-plugin-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">
                                                    <div style="overflow:hidden;width: 100%;position: relative;">
                                                        <iframe  style="width:100%; height:380px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.120477290474!2d76.66897011380848!3d8.868375093928188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05e365cc8bceef%3A0xc36a034edd789774!2sARCITE%20(ARC%20INSTITUTE%20OF%20TECHNICAL%20EDUCATION)!5e0!3m2!1sen!2sin!4v1644565290168!5m2!1sen!2sin" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                                       <!-- <iframe  src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d19905.696399556287!2d-0.3007084089960577!3d51.417531259591925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s2334+Peterson+Street+Kingston+UK+London+H14D!5e0!3m2!1sen!2s!4v1546697086219" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                                                        <div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;">

                                                        </div>
                                                        <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " style="padding: 75px 0px 75px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #ffffff ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js " data-gdlr-animation="fadeInUp" data-gdlr-animation-duration="600ms" data-gdlr-animation-offset="0.8">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-center-align gdlr-core-item-pdlr" style="padding-bottom: 0px ;">
									<a href="mailto:info@arcite.in" target="_blank" class="gdlr-core-social-network-icon" title="email" style="font-size: 20px ;color: #232323 ;"><i class="fa fa-envelope" ></i></a>
									<a href="https://www.facebook.com/arcinstitutekottiyam" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="font-size: 20px ;color: #232323 ;margin-left: 37px ;"><i class="fa fa-facebook" ></i></a>
									<a href="https://g.co/kgs/n5gMdx"" target="_blank" class="gdlr-core-social-network-icon" title="google" style="font-size: 20px ;color: #232323 ;margin-left: 37px ;"><i class="fa fa-google" ></i></a>
									<a href="https://www.linkedin.com/company/arc-institute-of-technical-education" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="font-size: 20px ;color: #232323 ;margin-left: 37px ;"><i class="fa fa-linkedin" ></i></a>
									<a href="https://youtube.com/channel/UCUwyhU-_akWoja6HTuH3RxQ" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="font-size: 20px ;color: #232323 ;margin-left: 37px ;"><i class="fa fa-youtube-play" ></i></a>
									<a href="https://twitter.com/arcite_in" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="font-size: 20px ;color: #232323 ;margin-left: 37px ;"><i class="fa fa-twitter" ></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


              <?php $this->load->view('school_technical_edu/tech_include/footer');?>
        </div>
    </div>


	<script type='text/javascript' src='<?php echo base_url(); ?>school_technical_edu/js/jquery/jquery.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>school_technical_edu/js/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>school_technical_edu/plugins/goodlayers-core/plugins/combine/script.js'></script>
    <script type='text/javascript'>
        var gdlr_core_pbf = {
            "admin": "",
            "video": {
                "width": "640",
                "height": "360"
            },
            "ajax_url": "#"
        };
	
    </script>
    <script type='text/javascript' src='<?php echo base_url(); ?>school_technical_edu/plugins/goodlayers-core/include/js/page-builder.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>school_technical_edu/js/jquery/ui/effect.min.js'></script>
    <script type='text/javascript'>
 jQuery(document).ready(
	function() {       
	   jQuery(document).on("click", ".submit_feeback", function(e){
						if (jQuery.trim(jQuery("#contact_name").val()) == "") {
					//alert("first");
            jQuery("#contact_name").css("border","1px solid #ff0000");
            jQuery('html,body').animate({
                    scrollTop: jQuery("#contact_name").offset().top - 100},
                    'slow');
            return false;
        }else if (jQuery.trim(jQuery("#contact_email").val()) == "") {
					//alert("first");
            jQuery("#contact_email").css("border","1px solid #ff0000");
            jQuery('html,body').animate({
                    scrollTop: jQuery("#contact_email").offset().top - 100},
                    'slow');
            return false;
        }else if (jQuery.trim(jQuery("#feedback_message").val()) == "") {
					//alert("first");
            jQuery("#feedback_message").css("border","1px solid #ff0000");
            jQuery('html,body').animate({
                    scrollTop: jQuery("#feedback_message").offset().top - 100},
                    'slow');
            return false;
        }  else{
				
			jQuery("form#contact_form").attr("action", "<?=base_url()?>school_technical_edu/contact_us/save_feedback");
            jQuery("form#contact_form").submit();
			//alert("here");
		}
			
		});
		
	});
		var kingster_script_core = {
            "home_url": ""
        };
		
		
    </script>
    <script type='text/javascript' src='<?php echo base_url(); ?>school_technical_edu/js/plugins.min.js'></script>
	  <script type='text/javascript' src='<?php echo base_url(); ?>school_technical_edu/js/isotope.js'></script>

</body>
</html>