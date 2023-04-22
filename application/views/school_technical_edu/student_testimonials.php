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





                <div class="kingster-page-title-wrap  kingster-style-medium kingster-left-align" style="background-image: url(<?php echo base_url(); ?>school_technical_edu/images/studenttestimonials.jpg) ;">
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr">
                        <h1 class="kingster-page-title">Student Testimonials</h1></div>
                </div>
            </div>
            <div class="kingster-breadcrumbs">
                <div class="kingster-breadcrumbs-container kingster-container">
                    <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home." href="<?php echo base_url(); ?>school_technical_edu/home" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">Alumini Testimonials</span>
                        <meta property="position" content="4">
                        </span>
                    </div>
                </div>
            </div>
                 <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-sidebar-wrapper ">
                        <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                           
<?php foreach($testimonials as $t){?>
						   <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-60 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 40px 0px 0px 0px;">
                                <div class="gdlr-core-pbf-sidebar-content-inner" data-skin="Personnel">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium">
                                            <div class="gdlr-core-personnel-list-column  gdlr-core-column-60 gdlr-core-column-first gdlr-core-item-pdlr">
                                                <div class="gdlr-core-personnel-list clearfix">
                                                    <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" style="background:#fff;">
                                                       <?php if($t["web_testimonial_image"]!=""){?>
													   <a href="#"><img src="<?php echo base_url(); ?>testimonial_images/<?php echo $t["web_testimonial_image"]?>" style="border-radius:50%; background-color:transparent; width:200px; height:200px;" alt="" width="500" height="500" title="personnel-1" /></a>
													   <?php } else{?>
													    <a href="#"><img src="<?php echo base_url(); ?>school_technical_edu/upload/personnel-1-500x500.jpg" style="border-radius:50%; background-color:transparent; width:200px; height:200px;" alt="" width="500" height="500" title="personnel-1" /></a>
													  
													   
													   <?php }?>
												   </div>
                                                    <div class="gdlr-core-personnel-list-content-wrap">
                                                       <div class="gdlr-core-personnel-info clearfix"></div>
                                                       <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption " style="font-size: 16px ;font-weight: 500 ;font-style: normal ;letter-spacing: 0px ;">
													   <blockquote>"<?php echo  $t["web_testimonial_message"]?>"</blockquote><br/><p style="text-align:right!important;">-	<?php echo  $t["web_testimonial_person"]?></p></div>
                                                      
														</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php }?>
							   <!--  <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-60 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 40px 0px 0px 0px;">
                                <div class="gdlr-core-pbf-sidebar-content-inner" data-skin="Personnel">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium">
                                            <div class="gdlr-core-personnel-list-column  gdlr-core-column-60 gdlr-core-column-first gdlr-core-item-pdlr">
                                                <div class="gdlr-core-personnel-list clearfix">
                                                    <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" style="background:#fff;">
                                                        <a href="#"><img src="<?php echo base_url(); ?>school_technical_edu/upload/personnel-1-500x500.jpg" style="border-radius:50%; background-color:transparent; width:200px; height:200px;" alt="" width="500" height="500" title="personnel-1" /></a>
                                                    </div>
                                                    <div class="gdlr-core-personnel-list-content-wrap">
                                                       <div class="gdlr-core-personnel-info clearfix"></div>
                                                       <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption " style="font-size: 16px ;font-weight: 500 ;font-style: normal ;letter-spacing: 0px ;">
													   <blockquote>
													   "Completing CONSTRUCTION SITE ENGINEER course at ARCITE helped to mark my place among the competitive people.The course offered better practical knowledge at site works and software skill development.And this also showed me the wider chance of Civil Engineering like Estimation,Quality Control etc. I'm glad and satisfied for choosing this course.Thank You ARCITE."
													   </blockquote><br/><p style="text-align:right!important;">	-	Nimita Iqbal</p></div>
                                                      
														</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							    <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-60 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 40px 0px 0px 0px;">
                                <div class="gdlr-core-pbf-sidebar-content-inner" data-skin="Personnel">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium">
                                            <div class="gdlr-core-personnel-list-column  gdlr-core-column-60 gdlr-core-column-first gdlr-core-item-pdlr">
                                                <div class="gdlr-core-personnel-list clearfix">
                                                    <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" style="background:#fff;">
                                                        <a href="#"><img src="<?php echo base_url(); ?>school_technical_edu/upload/personnel-1-500x500.jpg" style="border-radius:50%; background-color:transparent; width:200px; height:200px;" alt="" width="500" height="500" title="personnel-1" /></a>
                                                    </div>
                                                    <div class="gdlr-core-personnel-list-content-wrap">
                                                       <div class="gdlr-core-personnel-info clearfix"></div>
                                                       <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption " style="font-size: 16px ;font-weight: 500 ;font-style: normal ;letter-spacing: 0px ;">
													   <blockquote>
													   "ARCITE offers quality education to engineering graduates Offering a practical approach to the class. They provide real hands on training which gives us a professional attitude towards our career. ARCITE grooms students to be talented professionals by helping us upgrade our skills."
													   </blockquote><br/><p style="text-align:right!important;">	-	Nafeesath</p></div>
                                                      
														</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
								    <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-60 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 40px 0px 0px 0px;">
                                <div class="gdlr-core-pbf-sidebar-content-inner" data-skin="Personnel">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium">
                                            <div class="gdlr-core-personnel-list-column  gdlr-core-column-60 gdlr-core-column-first gdlr-core-item-pdlr">
                                                <div class="gdlr-core-personnel-list clearfix">
                                                    <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" style="background:#fff;">
                                                        <a href="#"><img src="<?php echo base_url(); ?>school_technical_edu/upload/personnel-1-500x500.jpg" style="border-radius:50%; background-color:transparent; width:200px; height:200px;" alt="" width="500" height="500" title="personnel-1" /></a>
                                                    </div>
                                                    <div class="gdlr-core-personnel-list-content-wrap">
                                                       <div class="gdlr-core-personnel-info clearfix"></div>
                                                       <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption " style="font-size: 16px ;font-weight: 500 ;font-style: normal ;letter-spacing: 0px ;">
													   <blockquote>
													   "I'm a Mechanical Engineer and I opted for MEP and QA/QC courses from ARCITE. Classes and placement support from ARCITE is excellent. I completed my course in 3 months and was Placed in one of the reputed MEP company in Kerala with ARCITE's help. Only reason I cracked my interview was the training i got from ARCITE. Proud to be an ARCITIAN."
													   </blockquote><br/><p style="text-align:right!important;">	-	Thoufeeq</p></div>
                                                      
														</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							    <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-60 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 40px 0px 0px 0px;">
                                <div class="gdlr-core-pbf-sidebar-content-inner" data-skin="Personnel">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium">
                                            <div class="gdlr-core-personnel-list-column  gdlr-core-column-60 gdlr-core-column-first gdlr-core-item-pdlr">
                                                <div class="gdlr-core-personnel-list clearfix">
                                                    <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" style="background:#fff;">
                                                        <a href="#"><img src="<?php echo base_url(); ?>school_technical_edu/upload/personnel-1-500x500.jpg" style="border-radius:50%; background-color:transparent; width:200px; height:200px;" alt="" width="500" height="500" title="personnel-1" /></a>
                                                    </div>
                                                    <div class="gdlr-core-personnel-list-content-wrap">
                                                       <div class="gdlr-core-personnel-info clearfix"></div>
                                                       <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption " style="font-size: 16px ;font-weight: 500 ;font-style: normal ;letter-spacing: 0px ;">
													   <blockquote>
													   "It's one of the  best academy for MEP/HVAC training. They provide Mep software sections  and tests. The faculty encourage students to participate and interact during class sessions. I highly recommend The ARCITE to all."
													   </blockquote><br/><p style="text-align:right!important;">	-	Amal S Kumar</p></div>
                                                      
														</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							  <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-60 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 40px 0px 0px 0px;">
                                <div class="gdlr-core-pbf-sidebar-content-inner" data-skin="Personnel">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-personnel-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-personnel-item-style-medium gdlr-core-personnel-style-medium">
                                            <div class="gdlr-core-personnel-list-column  gdlr-core-column-60 gdlr-core-column-first gdlr-core-item-pdlr">
                                                <div class="gdlr-core-personnel-list clearfix">
                                                    <div class="gdlr-core-personnel-list-image gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover" style="background:#fff;">
                                                        <a href="#"><img src="<?php echo base_url(); ?>school_technical_edu/upload/personnel-1-500x500.jpg" style="border-radius:50%; background-color:transparent; width:200px; height:200px;" alt="" width="500" height="500" title="personnel-1" /></a>
                                                    </div>
                                                    <div class="gdlr-core-personnel-list-content-wrap">
                                                       <div class="gdlr-core-personnel-info clearfix"></div>
                                                       <div class="gdlr-core-personnel-list-position gdlr-core-info-font gdlr-core-skin-caption " style="font-size: 16px ;font-weight: 500 ;font-style: normal ;letter-spacing: 0px ;">
													   <blockquote>
													   "I am , Sayed completed mechanical engineering from Kerala University in 2019. After that I heard about ARCITE from my friends. I joined for MEP course. Faculty was very friendly and helpful throughout the course duration. I found very comfortable and would like to recommend ARCITE for all who are in a dilemma to join the institute.
													   </blockquote><br/><p style="text-align:right!important;">	-	Mohammed Sayed</p></div>
                                                      
														</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
							
                           <!-- <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  kingster-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 40px 0px 30px 0px;">
                                <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                                    <div id="gdlr-core-custom-menu-widget-6" class="widget widget_gdlr-core-custom-menu-widget kingster-widget">
                                        <h3 class="kingster-widget-title">Finance Major</h3><span class="clear"></span>
                                        <div class="menu-finance-menu-container">
                                            <ul id="menu-finance-menu" class="gdlr-core-custom-menu-widget gdlr-core-menu-style-list">
                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5818"><a href="#">Course Curriculum</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5822 current_page_item menu-item-5824"><a href="index.html">Finance Faculty</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5820"><a target="_blank" href=#scholarships/index.html">Scholarships</a></li>
                                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5821"><a target="_blank" href="#">Application</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="text-21" class="widget widget_text kingster-widget">
                                        <div class="textwidget">
                                            <div class="gdlr-core-widget-box-shortcode " style="color: #ffffff ;padding: 30px 45px;background-color: #192f59 ;">
                                                <div class="gdlr-core-widget-box-shortcode-content">
                                                    </p>
                                                    <h3 style="font-size: 20px; color: #fff; margin-bottom: 25px;">Department Contact Info</h3>
                                                    <p><span style="color: #3db166; font-size: 16px; font-weight: 600;">Bachelor Of Science in Business Administration</span>
                                                        <br /> <span style="font-size: 15px;"><br /> 1810 Campus Way NE<br /> Bothell, WA 98011-8246</span></p>
                                                    <p><span style="font-size: 15px;">+1-2345-5432-45<br /> bsba@kuuniver.edu<br /> </span></p>
                                                    <p><span style="font-size: 16px; color: #3db166;">Mon &#8211; Fri 9:00A.M. &#8211; 5:00P.M.</span></p> <span class="gdlr-core-space-shortcode" style="margin-top: 40px ;"></span>
                                                    <h3 style="font-size: 20px; color: #fff; margin-bottom: 15px;">Social Info</h3>
                                                    <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;"><a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="color: #3db166 ;"><i class="fa fa-facebook" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="google-plus" style="color: #3db166 ;"><i class="fa fa-google-plus" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="color: #3db166 ;"><i class="fa fa-linkedin" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="color: #3db166 ;"><i class="fa fa-skype" ></i></a><a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="color: #3db166 ;"><i class="fa fa-twitter" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="instagram" style="color: #3db166 ;"><i class="fa fa-instagram" ></i></a></div> <span class="gdlr-core-space-shortcode" style="margin-top: 40px ;"></span> <a class="gdlr-core-button gdlr-core-button-shortcode  gdlr-core-button-gradient gdlr-core-button-no-border" href="#" style="padding: 16px 27px 18px;margin-right: 20px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;"><span class="gdlr-core-content" >Student Resources</span></a>
                                                    <p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="text-22" class="widget widget_text kingster-widget">
                                        <div class="textwidget">
                                            <div class="gdlr-core-widget-box-shortcode  gdlr-core-center-align" style="padding: 55px 0 35px;border: 5px solid #3db166 ;">
                                                <div class="gdlr-core-widget-box-shortcode-content">
                                                    <p> <span style="font-size: 17px; font-weight: 600; color: #9ba7bf; text-transform: uppercase;">Join Special Event</span>
                                                        <br /> <span style="font-size: 20px; font-weight: bold; color: #192f59; text-transform: uppercase;">Accounting Open House</span>
                                                        <br /> <span class="gdlr-core-space-shortcode" style="margin-top: 18px ;"></span><span style="font-size: 15px;">Get real experience in our campus<br /> start in 16 August 2020</span>
                                                        <br /> <span class="gdlr-core-space-shortcode" style="margin-top: 5px ;"></span>
                                                        <br /> <a class="gdlr-core-button gdlr-core-button-shortcode  gdlr-core-button-gradient gdlr-core-button-no-border" href="#" style="padding: 16px 27px 18px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;"><span class="gdlr-core-content" >Click to see more</span></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
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