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



        <div class="kingster-page-title-wrap  kingster-style-medium kingster-left-align" style="background-image: url(<?php echo base_url(); ?>school_technical_edu/images/courses.jpg)">
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr">
                        <!--<div class="kingster-page-caption">Course List</div>-->
                        <h1 class="kingster-page-title">Course List </h1></div>
                </div>
            </div>
     
             <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="kingster-content-container kingster-container">
                    <div class=" kingster-sidebar-wrap clearfix kingster-line-height-0 kingster-sidebar-style-right">
                        <div class=" kingster-sidebar-center kingster-column-40 kingster-line-height">
                            <div class="gdlr-core-page-builder-body">
                                <div class="gdlr-core-pbf-wrapper ">
                                    <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                                        <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
														<?php  
                                               $dm=1;
												
														if($dept_id==0){ 
													$departments=$this->home_model->get_department_by_institution(ARC_TECH_SCHOOL);
													
											  if(isset($departments)){
								foreach($departments as $d){
									$cm=1;
								?>
										
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;"><?php echo ucwords($d["web_dept_name"]);?></h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-course-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-course-style-list" style="padding-bottom: 45px ;">
												
												<?php 
												
												
												$course_list=$this->home_model->get_course_detials($course_name,$mode_of_training,$duration,$d["web_dept_id"]);
														  if(isset($course_list)){
								foreach($course_list as $c){
										$en_course_id=base64_encode($c["web_course_id"]);
												?>
                                                    <div class="gdlr-core-course-item-list">
													<a class="gdlr-core-course-item-link" href="<?php echo base_url(); ?>school_technical_edu/course_search/course_details/<?php echo $dm;?>/<?php echo $cm;?>/<?php echo $en_course_id?>">
													<span class="gdlr-core-course-item-id gdlr-core-skin-caption" ><?php echo ucfirst($c["web_course_number"])?></span>
													<span class="gdlr-core-course-item-title gdlr-core-skin-title" ><?php echo ucfirst($c["web_course_name"])?></span>
													<!--<span class="gdlr-core-course-item-title gdlr-core-skin-title" style="padding-left:20%" > <?php echo ucfirst($c["duration"])?>  </span>
													<span class="gdlr-core-course-item-title gdlr-core-skin-title"  style=" padding-left:20%" > <?php echo ucfirst($c["mode_of_training"])?>  </span>-->
													<i class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right" ></i></a></div>
								<?php 
								$cm++;
								}
								
					} 
					else{ 
						?> 
					    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >BPS201</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Business Processes and Controls</span><i class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right" ></i></a></div>
                                                  
					<?php }?>

										 </div>
                                            </div>
											
														<?php 
														$dm++;
														}
													}
												} else{
													$departments=$this->admin_model->get_department_details($dept_id);
															  if(isset($departments)){
								foreach($departments as $d){
										$cm=1;
									
								?>
										
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;"><?php echo ucwords($d["web_dept_name"]);?></h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-course-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-course-style-list" style="padding-bottom: 45px ;">
												
												<?php $course_list=$this->home_model->get_course_detials($course_name,$mode_of_training,$duration,$d["web_dept_id"]);
														  if(isset($course_list)){
								foreach($course_list as $c){
									$en_course_id=base64_encode($c["web_course_id"]);
												?>
                                                    <div class="gdlr-core-course-item-list">
													<a class="gdlr-core-course-item-link" href="<?php echo base_url(); ?>school_technical_edu/course_search/course_details/0/<?php echo $cm;?>/<?php echo $en_course_id?>">
													<span class="gdlr-core-course-item-id gdlr-core-skin-caption" ><?php echo ucfirst($c["web_course_number"])?></span>
													<span class="gdlr-core-course-item-title gdlr-core-skin-title" ><?php echo ucfirst($c["web_course_name"])?></span>
												<!--	<span class="gdlr-core-course-item-title gdlr-core-skin-title" style="padding-left:20%" > <?php echo ucfirst($c["duration"])?>  </span>
													<span class="gdlr-core-course-item-title gdlr-core-skin-title"  style=" padding-left:20%" > <?php echo ucfirst($c["mode_of_training"])?>  </span>-->
													<i class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right" ></i></a></div>
								<?php 
								$cm++; }
								
					} 
					else{ 
						?> 
					    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" ></span><span class="gdlr-core-course-item-title gdlr-core-skin-title" ></span><i class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right" ></i></a></div>
                                                  
					<?php }?>

										 </div>
                                            </div>
											
														<?php 
														}
													}
												}?>
                                           <!-- <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 20px ;font-weight: 600 ;">Elective Courses</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-course-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-course-style-list">
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >BPS201</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Business Processes and Controls</span><i class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right" ></i></a></div>
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >CAA558</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Cost Accounting</span><i class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right" ></i></a></div>
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#course/advanced-cost-accounting-and-management/index.html"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >ACC604</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Advanced Cost Accounting and Management</span><i class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right" ></i></a></div>
                                                    <div class="gdlr-core-course-item-list"><a class="gdlr-core-course-item-link" href="#course/auditing/index.html"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >AUD012</span><span class="gdlr-core-course-item-title gdlr-core-skin-title" >Auditing</span><i class="gdlr-core-course-item-icon gdlr-core-skin-icon fa fa-long-arrow-right" ></i></a></div>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" kingster-sidebar-right kingster-column-20 kingster-line-height kingster-line-height">
                            <div class="kingster-sidebar-area kingster-item-pdlr">
                                <div id="text-18" class="widget widget_text kingster-widget">
                                    <div class="textwidget">
                                        <div class="gdlr-core-widget-box-shortcode " style="color: #ffffff ;padding: 30px 45px;background-color: #192f59 ;">
                                            <div class="gdlr-core-widget-box-shortcode-content">
                                                </p>
                                                <h3 style="font-size: 20px; color: #fff; margin-bottom: 25px;text-align:left;"> Contact Info</h3>
                                                <p><!--<span style="color: #3db166; font-size: 16px; font-weight: 600;">Bachelor Of Science in Business Administration</span>-->
                                                    <span style="font-size: 15px;"><br />  2nd Floor, SAS Arcade
                                        <br /> Opp. Vyapara Bhavan
                                        <br />Kottiyam, Kollam, Kerala 691571</span></p>
                                                <p><span style="font-size: 15px;"><i class="fa fa-phone" id=""></i> +91-799 421 1144<br/><a href="https://wa.me/919400441133" target="_blank" style="color:#fff;"><i class="fa fa-whatsapp"></i> +91 940 044 1133</a><br /><i class="fa fa-envelope"></i> info@arcite.in<br /> </span></p>
                                                <p><span style="font-size: 16px; color: #3db166;">Mon &#8211; Fri 9:00A.M. &#8211; 5:00P.M.</span></p> <span class="gdlr-core-space-shortcode" style="margin-top: 40px ;"></span>
                                                <h3 style="font-size: 20px; color: #fff; margin-bottom: 15px;">Social Info</h3>
                                                <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;">
													<a href="https://www.facebook.com/arcinstitutekottiyam" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="color: #3db166 ;"><i class="fa fa-facebook" ></i></a>
												<a href="https://g.co/kgs/n5gMdx" target="_blank" class="gdlr-core-social-network-icon" title="google" style="color: #3db166 ;"><i class="fa fa-google" ></i></a>
												<a href="https://youtube.com/channel/UCUwyhU-_akWoja6HTuH3RxQ" target="_blank" class="gdlr-core-social-network-icon" title="youtube" style="color: #3db166 ;"><i class="fa fa-youtube-play" ></i></a>
												<a href="https://www.linkedin.com/company/arc-institute-of-technical-education" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="color: #3db166 ;"><i class="fa fa-linkedin" ></i></a>
												<a href="https://t.me/ArciteKollam" target="_blank" class="gdlr-core-social-network-icon" title="telegram" style="color: #3db166 ;"><i class="fa fa-telegram" ></i></a>
												<a href="https://twitter.com/arcite_in" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="color: #3db166 ;"><i class="fa fa-twitter" ></i></a>
												<a href="https://www.instagram.com/arcite.in" target="_blank" class="gdlr-core-social-network-icon" title="instagram" style="color: #3db166 ;"><i class="fa fa-instagram" ></i></a></div> <span class="gdlr-core-space-shortcode" style="margin-top: 40px ;"></span> <!--<a class="gdlr-core-button gdlr-core-button-shortcode  gdlr-core-button-gradient gdlr-core-button-no-border" href="#" style="padding: 16px 27px 18px;margin-right: 20px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;"><span class="gdlr-core-content" >Student Resources</span></a>-->
												</div> <span class="gdlr-core-space-shortcode" style="margin-top: 40px ;"></span> <!--<a class="gdlr-core-button gdlr-core-button-shortcode  gdlr-core-button-gradient gdlr-core-button-no-border" href="#" style="padding: 16px 27px 18px;margin-right: 20px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;"><span class="gdlr-core-content" >Student Resources</span></a>-->
                                                <p>
                                            </div>
                                        </div>
                                    </div>
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
        var kingster_script_core = {
            "home_url": ""
        };
    </script>
    <script type='text/javascript' src='<?php echo base_url(); ?>school_technical_edu/js/plugins.min.js'></script>
</body>
</html>