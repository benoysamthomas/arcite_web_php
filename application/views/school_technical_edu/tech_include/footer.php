  <footer>
                <div class="kingster-footer-wrapper ">
                    <div class="kingster-footer-container kingster-container clearfix">
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="text-2" class="widget widget_text kingster-widget">
                                <div class="textwidget">
                                    <p><img src="<?php echo base_url(); ?>school_technical_edu/upload/arc-for-web.png" alt="" />
                                        <br /> <span class="gdlr-core-space-shortcode" id="span_1dd7_10"></span>
                                        <br />  2nd Floor, SAS Arcade
                                        <br /> Opp. Vyapara Bhavan
                                        <br />Kottiyam, Kollam, Kerala 691571</p>
                                    <p><span id="span_1dd7_11"><i class="fa fa-phone"> +91-799 421 1144</i><br/><a href="https://wa.me/919400441133" target="_blank" style="color:#fff"><i class="fa fa-whatsapp"> +91 940 044 1133</i></a></span>
                                        <br /> <span class="gdlr-core-space-shortcode" id="span_1dd7_12"></span>
                                        <br /> <a id="a_1dd7_8" href="mailto:info@arcite.in"><i class="fa fa-envelope"> info@arcite.in</i></a></p>
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
									<?php $dept_foot=$this->home_model->get_department_by_institution(ARC_TECH_SCHOOL);
													$i=1;
													$j=1;
											  if(isset($dept_foot)){
								foreach($dept_foot as $dt){
									if($dt["web_dept_course_mode"]==1){
									$en_dept_id=base64_encode($dt["web_dept_id"]);
								?>
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_technical_edu/course_search/course_dept/<?php echo $i?>/<?php echo $en_dept_id ?>"><?php echo ucwords($dt["web_dept_name"]);?></a></li>
								<?php } else{?>
								             <li class="menu-item"><a href="#"><?php echo ucwords($dt["web_dept_name"]);?></a></li>
							
								<?php }
								 }
								}?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-20">
                            <div id="gdlr-core-custom-menu-widget-3" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Quick Menus</h3><span class="clear"></span>
                                <div class="menu-campus-life-container">
                                    <ul id="menu-campus-life" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_technical_edu/about_us">Who We Are</a></li>
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_technical_edu/gallery">Gallery</a></li>
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_technical_edu/igbc_student_chapter">IGBC </a></li>
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_technical_edu/contact_us">Contact Us</a></li>
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_media/home">ARCITE School of Media</a></li>
                                        <li class="menu-item"><a href="<?php echo base_url(); ?>school_competitive_exams/home">ARCITE School of Competitive Exams</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       <!-- <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="gdlr-core-custom-menu-widget-4" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Academics</h3><span class="clear"></span>
                                <div class="menu-academics-container">
                                    <ul id="menu-academics" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                                        <li class="menu-item"><a href="#">Canvas</a></li>
                                        <li class="menu-item"><a href="#">Catalyst</a></li>
                                        <li class="menu-item"><a href="#">Library</a></li>
                                        <li class="menu-item"><a href="#">Time Schedule</a></li>
                                        <li class="menu-item"><a href="#">Apply For Admissions</a></li>
                                        <li class="menu-item"><a href="#">Pay My Tuition</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
                
                <div class="kingster-copyright-wrapper">
                    <div class="kingster-copyright-container kingster-container clearfix">
                        <div class="kingster-copyright-left kingster-item-pdlr">Copyright &copy; <?php echo date("Y")?>,  ARCITE</div>
                        <div class="kingster-copyright-right kingster-item-pdlr">
                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" id="div_1dd7_112">
                                <a href="https://www.facebook.com/arciteschooloftechnicaleducation" target="_blank" class="gdlr-core-social-network-icon" title="facebook">
                                    <i class="fa fa-facebook" ></i>
                                </a>
                                <a href="https://g.co/kgs/n5gMdx" target="_blank" class="gdlr-core-social-network-icon" title="google">
                                    <i class="fa fa-google" ></i>
                                </a>
								<a href="https://youtube.com/channel/UCUwyhU-_akWoja6HTuH3RxQ" target="_blank" class="gdlr-core-social-network-icon" title="youtube">
                                    <i class="fa fa-youtube-play" ></i>
                                </a>
                                <a href="https://www.linkedin.com/company/arc-institute-of-technical-education" target="_blank" class="gdlr-core-social-network-icon" title="linkedin">
                                    <i class="fa fa-linkedin" ></i>
                                </a>
                                <a href="https://t.me/ArciteKollam" target="_blank" class="gdlr-core-social-network-icon" title="telegram">
                                    <i class="fa fa-telegram" ></i>
                                </a>
                                <a href="https://twitter.com/arcite_in" target="_blank" class="gdlr-core-social-network-icon" title="twitter">
                                    <i class="fa fa-twitter" ></i>
                                </a>
                                <a href="https://www.instagram.com/arcite.in" target="_blank" class="gdlr-core-social-network-icon" title="instagram">
                                    <i class="fa fa-instagram" ></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>