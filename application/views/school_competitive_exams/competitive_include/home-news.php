               <div id="announcements"></div>
			   <div class="gdlr-core-pbf-wrapper" style="padding: 100px 0px 450px 0px;" id="gdlr-core-wrapper-6">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #f3f3f3;">
                            <div
                                class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js"
                                style="background-image: url(<?php echo base_url(); ?>school_competitive_exams/images/home_news.jpg); background-repeat: no-repeat; background-position: top center;"
                                data-parallax-speed="0.15"
                            ></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-left-align gdlr-core-style-vertical" style="margin-bottom: 50px;">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #d1d1d1; height: 100px;"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                                    <span
                                                        class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"
                                                        style="font-size: 15px; font-style: normal; letter-spacing: 1px; text-transform: uppercase; color: #333333;"
                                                    >
                                                        
                                                    </span>
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title" style="font-size: 42px; font-weight: 400; letter-spacing: 0px; color: #fff;"> 	Courses</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-89816">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding-top: 240px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-right-align">
                                                   <!-- <a
                                                        class="gdlr-core-button gdlr-core-button-transparent gdlr-core-right-align gdlr-core-button-with-border"
                                                        href="#"
                                                        style="
                                                            font-size: 13px;
                                                            font-weight: 600;
                                                            letter-spacing: 1px;
                                                            color: #222222;
                                                            padding: 0px 0px 2px 0px;
                                                            text-transform: uppercase;
                                                            border-radius: 0px;
                                                            -moz-border-radius: 0px;
                                                            -webkit-border-radius: 0px;
                                                            border-width: 0px 0px 1px 0px;
                                                            border-color: #c5c5c5;
                                                        "
                                                    >
                                                        <span class="gdlr-core-content">Visit Our Blog</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" style="font-size: 15px; color: #222222;"></i>
                                                    </a>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					                    <div class="gdlr-core-pbf-wrapper gdlr-core-hide-in-tablet-mobile" style="margin: -448px 0px 0px 0px; padding: 0px 0px 90px 0px;" id="gdlr-core-wrapper-7">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" id="gdlr-core-column-37730" style="z-index: 9;">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js gdlr-core-item-mglr gdlr-core-item-mgb" style="margin: 0px 0px 0px 0px; padding-top: 50px; padding-bottom: 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix gdlr-core-style-blog-column-with-frame gdlr-core-item-pdlr" style="padding-bottom: 0px;">
                                                    <div
                                                        class="gdlr-core-flexslider flexslider gdlr-core-js-2 gdlr-core-bullet-style-round3 gdlr-core-color-bullet"
                                                        data-type="carousel"
                                                        data-column="2"
                                                        data-move="1"
                                                        data-nav="bullet"
                                                        data-nav-parent="gdlr-core-blog-item"
                                                        data-controls-top-margin="70px"
                                                    >
                                                        <ul class="slides">
															<?php  
                                               $dm=1;
													$departments=$this->home_model->get_department_by_institution(ARC_COMP_SCHOOL);
											  if(isset($departments)){
								foreach($departments as $d){
									$cm=1;
										$en_dept_id=base64_encode($d["web_dept_id"]);
												$course_list=$this->home_model->get_course_detials($course_name,$mode_of_training,$duration,$d["web_dept_id"]);
														  if(isset($course_list)){
								foreach($course_list as $c){
										$en_course_id=base64_encode($c["web_course_id"]);
								?>
                                                            <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-style-4 gdlr-core-js gdlr-core-left-button gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-with-thumbnail"
                                                                    style="box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1); -moz-box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1); -webkit-box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1);"
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover">
                                                                       
																				<?php if($c["web_course_image"]==""){?>
                                                        <a class=" " href="#"><img src="<?php echo base_url(); ?>school_competitive_exams/upload/3454568-1-700x450.jpg" width="700" height="450"  alt="" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i></span></a>
													<?php } else{?>
													     <img src="<?php echo base_url(); ?>course_images/<?php echo $c["web_course_image"]?>" width="700" height="450"  alt="" />
													<?php }?>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position clearfix">
                                                                        <div class="gdlr-core-blog-grid-top-info clearfix">
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                <a href="#"></a>
                                                                            </span>
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                                <a href="<?php echo base_url(); ?>school_competitive_exams/course_search/course_dept/<?php echo $dm?>/<?php echo $en_dept_id ?>" rel="tag"><?php echo ucwords($d["web_dept_name"]);?></a><span class="gdlr-core-sep"> </span> <a href="#" rel="tag"></a>
                                                                            </span>
                                                                        </div>
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 24px; font-weight: 500; letter-spacing: 1px;">
                                                                            <a href="<?php echo base_url(); ?>school_competitive_exams/course_search/course_details/0/<?php echo $cm;?>/<?php echo $en_course_id?>"><?php echo ucfirst($c["web_course_name"])?></a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            <a class="gdlr-core-excerpt-read-more gdlr-core-plain-text" href="<?php echo base_url(); ?>school_competitive_exams/course_search/course_details/0/<?php echo $cm;?>/<?php echo $en_course_id?>">
                                                                                More Details<i class="fa fa-long-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
																<?php 
								$cm++;
								}
								
					
														}
														 $dm++;
													}
												}
					
						?> 	
                                                            <!--<li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-style-4 gdlr-core-js gdlr-core-left-button gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-with-thumbnail"
                                                                    style="box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1); -moz-box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1); -webkit-box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1);"
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover">
                                                                        <a href="#">
                                                                            <img src="upload/shutterstock_62838724-700x450.jpg" alt="" width="700" height="450" title="shutterstock_62838724" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position clearfix">
                                                                        <div class="gdlr-core-blog-grid-top-info clearfix">
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                <a href="#">June 6, 2016</a>
                                                                            </span>
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                                <a href="#" rel="tag">Hot</a><span class="gdlr-core-sep">,</span> <a href="#" rel="tag">Updates</a>
                                                                            </span>
                                                                        </div>
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 24px; font-weight: 500; letter-spacing: 1px;">
                                                                            <a href="#">Can Biology and Chemistry work to save the world?</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            <a class="gdlr-core-excerpt-read-more gdlr-core-plain-text" href="#">
                                                                                Read More<i class="fa fa-long-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>-->
                                                           <!-- <li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-style-4 gdlr-core-js gdlr-core-left-button gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-with-thumbnail"
                                                                    style="box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1); -moz-box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1); -webkit-box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1);"
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover">
                                                                        <a href="#">
                                                                            <img src="upload/shutterstock_1102460810-700x450.jpg" alt="" width="700" height="450" title="shutterstock_1102460810" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position clearfix">
                                                                        <div class="gdlr-core-blog-grid-top-info clearfix">
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                <a href="#">June 6, 2016</a>
                                                                            </span>
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                                <a href="#" rel="tag">Admission</a><span class="gdlr-core-sep">,</span> <a href="#" rel="tag">Event</a>
                                                                            </span>
                                                                        </div>
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 24px; font-weight: 500; letter-spacing: 1px;">
                                                                            <a href="#">
                                                                                Professor Tom comments on voluntary recalls by snack brands
                                                                            </a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            <a class="gdlr-core-excerpt-read-more gdlr-core-plain-text" href="#">
                                                                                Read More<i class="fa fa-long-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>-->
                                                            <!--<li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-style-4 gdlr-core-js gdlr-core-left-button gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-with-thumbnail"
                                                                    style="box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1); -moz-box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1); -webkit-box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1);"
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover">
                                                                        <a href="#">
                                                                            <img src="upload/iStock-1093522584-700x450.jpg" alt="" width="700" height="450" title="iStock-1093522584" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position clearfix">
                                                                        <div class="gdlr-core-blog-grid-top-info clearfix">
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                <a href="#">June 6, 2016</a>
                                                                            </span>
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                                <a href="#" rel="tag">Article</a><span class="gdlr-core-sep">,</span> <a href="#" rel="tag">Research</a>
                                                                            </span>
                                                                        </div>
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 24px; font-weight: 500; letter-spacing: 1px;">
                                                                            <a href="#">Professor Alexa is interviewed about Twitter&#8217;s valuation</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            <a class="gdlr-core-excerpt-read-more gdlr-core-plain-text" href="#">
                                                                                Read More<i class="fa fa-long-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>-->
                                                            <!--<li class="gdlr-core-item-mglr">
                                                                <div
                                                                    class="gdlr-core-blog-grid gdlr-core-style-4 gdlr-core-js gdlr-core-left-button gdlr-core-blog-grid-with-frame gdlr-core-item-mgb gdlr-core-skin-e-background gdlr-core-outer-frame-element gdlr-core-with-thumbnail"
                                                                    style="box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1); -moz-box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1); -webkit-box-shadow: 0 20px 35px rgba(10, 10, 10, 0.1);"
                                                                    data-sync-height="blog-item-1"
                                                                >
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image gdlr-core-opacity-on-hover">
                                                                        <a href="#">
                                                                            <img src="upload/iStock-539246041-700x450.jpg" alt="" width="700" height="450" title="iStock-539246041" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-frame gdlr-core-sync-height-space-position clearfix">
                                                                        <div class="gdlr-core-blog-grid-top-info clearfix">
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                <a href="#">June 6, 2016</a>
                                                                            </span>
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                                <a href="#" rel="tag">Event</a><span class="gdlr-core-sep">,</span> <a href="#" rel="tag">Student</a>
                                                                            </span>
                                                                        </div>
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 24px; font-weight: 500; letter-spacing: 1px;">
                                                                            <a href="#">Kingster Public Safety Survey open through Nov. 30</a>
                                                                        </h3>
                                                                        <div class="gdlr-core-blog-content clearfix">
                                                                            <a class="gdlr-core-excerpt-read-more gdlr-core-plain-text" href="#">
                                                                                Read More<i class="fa fa-long-arrow-right"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>-->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
