        <footer class="kingster-no-title-divider">
                <div class="kingster-footer-wrapper">
                    <div class="kingster-footer-container kingster-container clearfix">
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="text-2" class="widget widget_text kingster-widget">
                                <div class="textwidget">
                                    <p>
                                        <img src="<?php echo base_url(); ?>school_competitive_exams/images/ARCITE_COMPETITIVE_WHITE.png" alt="" width="190" /><br />
                                        <span class="gdlr-core-space-shortcode" style="margin-top: 0px;"></span><br />
                                        Prasanthi Towers, 2nd Floor,<br/>
Near Sports Club,<br/>
Kadappakada, Kerala 691001
                                    </p>
                                    <p>
                                        <span style="font-size: 15px; color: #ffffff;"><i class="fa fa-phone" id=""></i> +91-799 421 1144<br/><a href="https://wa.me/919633738601" target="_blank" style="color:#fff"><i class="fa fa-whatsapp"> +91  963 373 8601</i></a></span><br />
                                        <span class="gdlr-core-space-shortcode" style="margin-top: -20px;"></span><br />
                                        <a style="font-size: 15px; color: #8dd7e5;" href="#">
                                            <span class="__cf_email__"><i class="fa fa-envelope"></i> schoolofcompetitiveexams@arcite.in</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="gdlr-core-custom-menu-widget-2" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Our Courses</h3>
                                <span class="clear"></span>
                                <div class="menu-our-campus-container">
                                    <ul id="menu-our-campus" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
									<?php	$i=1;$dept=$this->home_model->get_department_by_institution(ARC_COMP_SCHOOL);
									foreach($dept as $dt){
												$en_dept_id=base64_encode($dt["web_dept_id"]);?>
                                        <li class="menu-item  kingster-normal-menu"><a href="<?php echo base_url(); ?>school_competitive_exams/course_search/course_dept/<?php echo $i?>/<?php echo $en_dept_id ?>"><?php echo $dt["web_dept_name"]?></a></li>
									<?php 
									$i++;}
									?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="gdlr-core-custom-menu-widget-4" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Main Menus</h3>
                                <span class="clear"></span>
                                <div class="menu-academics-container">
                                    <ul id="menu-academics" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                                        <li class="menu-item  kingster-normal-menu"><a href="#">Bookstore</a></li>
                                        <li class="menu-item  kingster-normal-menu"><a href="<?php echo base_url(); ?>enquiry_form/competitive_school_enquiry">Registration</a></li>
                                        <li class="menu-item  kingster-normal-menu"><a href="<?php echo base_url(); ?>school_competitive_exams/course_search">Courses</a></li>
                                        <li class="menu-item  kingster-normal-menu"><a href="#">Downloads</a></li>
                                        <li class="menu-item  kingster-normal-menu"><a href="<?php echo base_url(); ?>school_competitive_exams/home/announcements">Announcements</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="kingster-footer-column kingster-item-pdlr kingster-column-15">
                            <div id="gdlr-core-custom-menu-widget-3" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                <h3 class="kingster-widget-title">Quick Links</h3>
                                <span class="clear"></span>
                                <div class="menu-campus-life-container">
                                    <ul id="menu-campus-life" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-plain">
                                        <li class="menu-item  kingster-normal-menu"><a href="<?php echo base_url(); ?>school_competitive_exams/contact_us">Contact Us</a></li>
                                        <li class="menu-item  kingster-normal-menu"><a href="<?php echo base_url(); ?>school_competitive_exams/about_us">About US</a></li>
                                   </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kingster-copyright-wrapper">
                    <div class="kingster-copyright-container kingster-container clearfix">
                        <div class="kingster-copyright-left kingster-item-pdlr">Copyright All Right Reserved <?php echo date("Y")?>, ARCITE</div>
                        <div class="kingster-copyright-right kingster-item-pdlr">
                            <div class="gdlr-core-social-network-item gdlr-core-item-pdb gdlr-core-none-align" style="padding-bottom: 0px;">
                                <a href="https://m.facebook.com/102869268617007/" target="_blank" class="gdlr-core-social-network-icon" title="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="https://g.co/kgs/R8Js4Q" target="_blank" class="gdlr-core-social-network-icon" title="google"><i class="fa fa-google"></i></a>
                                <a href="https://twitter.com/arcinstitutein1" target="_blank" class="gdlr-core-social-network-icon" title="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="https://instagram.com/arcite_competitive_exams?igshid=YmMyMTA2M2Y=" target="_blank" class="gdlr-core-social-network-icon" title="instagram"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>