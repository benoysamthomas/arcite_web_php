				   <footer>
                <div class="kingster-footer-wrapper ">
                    <div class="kingster-footer-container kingster-container clearfix">
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="text-2" class="widget widget_text kingster-widget">
                             <div class="textwidget">
                                    <p><img src="<?php echo base_url(); ?>school_media/upload/arcite_media_white.png" alt="" />
                                        <br /> <span class="gdlr-core-space-shortcode" id="span_1dd7_10"></span>
                                        <br />  Prasanthi Towers,
                                        <br /> Near Sports Club, 
                                        <br /> Kadappakada, Kerala 691001</p>
                                    <p><span id="span_1dd7_11"><i class="fa fa-phone"> +91-799 422 1133</i><br/><a href="https://wa.me/919400441110" target="_blank" style="color:#fff"><i class="fa fa-whatsapp"> +91 940 044 1110</i></a></span>
                                        <br /> <span class="gdlr-core-space-shortcode" id="span_1dd7_12"></span>
                                        <br /> <a id="a_1dd7_8" href="mailto:schoolofmedia@arcite.in"><i class="fa fa-envelope"> schoolofmedia@arcite.in</i></a></p>
                                    <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-left-align">
                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_1dd7_111"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-20">
                            <div id="gdlr-core-custom-menu-widget-2" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Our Courses</h3><span class="clear"></span>
                                <div class="menu-our-campus-container">
                                    <ul id="menu-our-campus" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                                        
										<?php $dept_f=$this->home_model->get_department_by_institution(ARC_MEDIA_SCHOOL);
													$i=1;
													$j=1;
								foreach($dept_f as $dt);
								$crse_name="";
												$mode_of_train=0;
												$durtn=0;
												
												$crse_list_f=$this->home_model->get_course_detials($crse_name,$mode_of_train,$durtn,$dt["web_dept_id"]);
														  if(isset($crse_list_f)){
								foreach($crse_list_f as $cs){
									
									$en_course_id=base64_encode($cs["web_course_id"]);
									 if($cs["web_course_disp_mode"]==1){?>
										<li class="menu-item"><a href="<?php echo base_url(); ?>school_media/course_search/course_details/<?php echo $i?>/<?php echo $j?>/<?php echo $en_course_id ?>"><?php echo ucwords(strtolower($cs["web_course_name"]));?></a></li>
										
									 <?php } else{?>
                                        <li class="menu-item"><a href="#"><?php echo $cs["web_course_name"];?></a></li>
									 <?php }
													 $j++;	  }
										}
									?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-10">
                            <div id="gdlr-core-custom-menu-widget-3" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Quick Links</h3><span class="clear"></span>
                                <div class="menu-campus-life-container">
                                    <ul id="menu-campus-life" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_media/apply_now">Apply Now</a></li>
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_media/about_us/arcite_edu_soln_ltd" target="_self" > ARCITE Educational Solution Pvt Ltd</a></li>
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_media/about_us/stem" target="_self" > STEM</a></li>
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_media/about_us/canvas" target="_self" > CANVAS</a></li>
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_media/events">Events Calendar</a></li>
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_media/news">News & Updates</a></li>
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_media/home/testimonials">Alumni Testimonials</a></li>
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>enquiry_form/media_school_enquiry" target="_blank">Admission Enquiry</a></li>
                                     
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-10">
                            <div id="gdlr-core-custom-menu-widget-4" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Main Menus</h3><span class="clear"></span>
                                <div class="menu-academics-container">
                                    <ul id="menu-academics" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_media/home">Home</a></li>
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_media/course_search">Courses</a></li>
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_media/about_us">Who We Are</a></li>
                                        <!--<li class="menu-item"><a href="<?php echo base_url(); ?>school_media/gallery">Gallery</a></li>-->
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_media/contact_us">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
				<div class="kingster-copyright-wrapper">
					<div class="kingster-copyright-container kingster-container clearfix">
						<div class="kingster-copyright-left kingster-item-pdlr">Copyright All Right Reserved <?php echo date("Y");?>, ARCITE</div>
						<div class="kingster-copyright-right kingster-item-pdlr">
							<div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;">
						        <a href="https://www.facebook.com/ArciteSchoolofMedia/" target="_blank" class="gdlr-core-social-network-icon" title="facebook">
                                    <i class="fa fa-facebook" ></i>
                                </a>
                                <a href="http://bit.ly/ArciteSchoolofMedia" target="_blank" class="gdlr-core-social-network-icon" title="google">
                                    <i class="fa fa-google" ></i>
                                </a>
								<a href="https://youtube.com/channel/UCI-rNXhrfPXlcOGIh52eUnA" target="_blank" class="gdlr-core-social-network-icon" title="youtube">
                                    <i class="fa fa-youtube-play" ></i>
                                </a>
                                <a href="https://www.linkedin.com/in/arcite-media-school-4082921a2" target="_blank" class="gdlr-core-social-network-icon" title="linkedin">
                                    <i class="fa fa-linkedin" ></i>
                                </a>
                               <!-- <a href="https://t.me/ArciteKollam" target="_blank" class="gdlr-core-social-network-icon" title="telegram">
                                    <i class="fa fa-telegram" ></i>
                                </a>-->
                                <a href="https://twitter.com/arcite_of?s=08" target="_blank" class="gdlr-core-social-network-icon" title="twitter">
                                    <i class="fa fa-twitter" ></i>
                                </a>
                                <a href="https://instagram.com/arcite_school_of_media" target="_blank" class="gdlr-core-social-network-icon" title="instagram">
                                    <i class="fa fa-instagram" ></i>
                                </a>
							</div>
						</div>
					</div>
				</div>
            </footer>
        </div>
    </div>