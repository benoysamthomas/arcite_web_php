<?php $this->load->view('school_media/school_include/head');?>
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
  <?php $this->load->view('school_media/school_include/mobile-header');?>
    <div class="kingster-body-outer-wrapper ">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">
     <?php $this->load->view('school_media/school_include/topbar');?>
     <?php $this->load->view('school_media/school_include/header');?>
            <div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align" style="background-image:url(<?php echo base_url(); ?>school_technical_edu/upload/page-title-1.jpg)">
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr">
                        <div class="kingster-page-caption"></div>
                        <h1 class="kingster-page-title">News & Updates</h1></div>
                </div>
            </div>
			 <div class="kingster-breadcrumbs" style="padding-top: 12px ;padding-bottom: 60px ;">
                <div class="kingster-breadcrumbs-container kingster-container">
                    <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home" href="<?php echo base_url(); ?>school_media/home" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">News</span>
                        <meta property="position" content="4">
                        </span>
                    </div>
                </div>
            </div>
                      <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-sidebar-wrapper ">
                        <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                            <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 60px 10px 30px 0px;">
                                <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
                                <div class="gdlr-core-pbf-sidebar-content-inner">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full-with-frame" style="padding-bottom: 40px ;">
                                            <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                               
<?php $i=0; if(isset($news)){	foreach($news as $n1){ ?>
											   <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#">
                                                                   <?php if($n1["web_news_image"]==""){?>
                                                                            <!--<img src="<?php echo base_url(); ?>school_technical_edu/upload/news1.jpg" width="900" height="500" alt="" />-->
                                                                     
																		<?php  } else{?>
																	
                                                                            <img src="<?php echo base_url(); ?>news_images/<?php echo $n1["web_news_image"];?>" width="900" height="500" alt="" />
                                                                    
																		<?php }?>
                                                        </a>
                                                    </div>
                                                    <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class="gdlr-core-blog-full-head-right">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="#" ><?php echo ucwords($n1["web_news_head"])?></a></h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#"><?php echo  date("d M, Y",strtotime($n1["web_news_date"]));?></a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" ><?php echo $n1["news_category"]?></span><!--<a href="#" title="Posts by John Smith" rel="author">John Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href="#" rel="tag">Blog</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment-number"><span class="gdlr-core-head" ><i class="fa fa-comments-o" ></i></span><a href="##respond">3 </a></span>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-blog-content"><?php echo ucwords($n1["web_news_details"])?>
                                                            <div class="clear"></div>
															<!--<a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="#">Read More</a>-->
															</div>
                                                    </div>
                                                </div>
												
<?php $i++;}} if($i==0){?>


	   <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                
                                                    </div>
                                                    <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class="gdlr-core-blog-full-head-right">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;">No News Posted!</h3>
                                                                
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
<?php }?>
                                              <!--  <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#"><img src="upload/shutterstock_135948689-600x333.jpg" width="900" height="500" alt="" /></a>
                                                    </div>
                                                    <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class="gdlr-core-blog-full-head-right">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="#" >Professor Albert joint research on mobile money in Tanzania</a></h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href="#" rel="tag">Blog</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment-number"><span class="gdlr-core-head" ><i class="fa fa-comments-o" ></i></span><a href="##respond">2 </a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-blog-content">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be...
                                                            <div class="clear"></div><a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="#">Read More</a></div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#"><img src="upload/shutterstock_218235004-600x333.jpg" width="900" height="500" alt="" /></a>
                                                    </div>
                                                    <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class="gdlr-core-blog-full-head-right">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="#" >A Global MBA for the next generation of business leaders</a></h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href="#" rel="tag">Masonry</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment-number"><span class="gdlr-core-head" ><i class="fa fa-comments-o" ></i></span><a href="##respond">1 </a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-blog-content">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be...
                                                            <div class="clear"></div><a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="#">Read More</a></div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#"><img src="upload/shutterstock_481869205-600x333.jpg" width="900" height="500"  alt="" /></a>
                                                    </div>
                                                    <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class="gdlr-core-blog-full-head-right">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="#" >Professor Tom comments on voluntary recalls by snack brands</a></h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href="#" rel="tag">Blog</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment-number"><span class="gdlr-core-head" ><i class="fa fa-comments-o" ></i></span><a href="##respond">1 </a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-blog-content">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be...
                                                            <div class="clear"></div><a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="#">Read More</a></div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#"><img src="upload/shutterstock_361397258-600x333.jpg" width="900" height="500" alt="" /></a>
                                                    </div>
                                                    <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class="gdlr-core-blog-full-head-right">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="#" >Professor Alexa is interviewed about Twitter&#8217;s valuation</a></h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href="#" rel="tag">Blog</a><span class="gdlr-core-sep">,</span> <a href="#" rel="tag">Masonry</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment-number"><span class="gdlr-core-head" ><i class="fa fa-comments-o" ></i></span><a href="##respond">3 </a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-blog-content">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be...
                                                            <div class="clear"></div><a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="#">Read More</a></div>
                                                    </div>
                                                </div>
                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#"><img src="upload/shutterstock_213333985-600x333.jpg" width="900" height="500"  alt="" /></a>
                                                    </div>
                                                    <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                        <div class="gdlr-core-blog-full-head clearfix">
                                                            <div class="gdlr-core-blog-full-head-right">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ;"><a href="#" >Kingster Public Safety Survey open through Nov. 30</a></h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href="#" rel="tag">Blog</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-comment-number"><span class="gdlr-core-head" ><i class="fa fa-comments-o" ></i></span><a href="##respond">0 </a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-blog-content">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo. Donec id elit non mi porta gravida at eget metus. Curabitur blandit tempus porttitor. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                                            <div class="clear"></div><a class="gdlr-core-excerpt-read-more gdlr-core-button gdlr-core-rectangle" href="#">Read More</a></div>
                                                    </div>
                                                </div>-->
                                            </div>
                                            <!--<div class="gdlr-core-pagination  gdlr-core-style-round gdlr-core-left-align gdlr-core-item-pdlr"><span aria-current='page' class='page-numbers current'>1</span> <a class='page-numbers' href='page/2/index.html'>2</a> <a class='page-numbers' href='page/3/index.html'>3</a>
                                                <a class="next page-numbers" href="page/2/index.html"></a>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <!-- <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  kingster-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height">
                                <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
                                <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                                    <div id="text-5" class="widget widget_text kingster-widget">
                                        <h3 class="kingster-widget-title">Text Widget</h3><span class="clear"></span>
                                        <div class="textwidget">Nulla vitae elit libero, a pharetra augue. Nulla vitae elit libero, a pharetra augue. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui. Etiam porta sem malesuada.</div>
                                    </div>
                                    <div id="gdlr-core-recent-post-widget-1" class="widget widget_gdlr-core-recent-post-widget kingster-widget">
                                        <h3 class="kingster-widget-title">Recent News</h3><span class="clear"></span>
                                        <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src="upload/shutterstock_135948689-150x150.jpg" alt="" width="150" height="150" title="shutterstock_135948689" /></div>
                                                <div class="gdlr-core-recent-post-widget-content">
                                                    <div class="gdlr-core-recent-post-widget-title"><a href="#">Professor Albert joint research on mobile money in Tanzania</a></div>
                                                    <div class="gdlr-core-recent-post-widget-info"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src="upload/shutterstock_218235004-150x150.jpg" alt="" width="150" height="150" title="Student" /></div>
                                                <div class="gdlr-core-recent-post-widget-content">
                                                    <div class="gdlr-core-recent-post-widget-title"><a href="#">A Global MBA for the next generation of business leaders</a></div>
                                                    <div class="gdlr-core-recent-post-widget-info"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src="upload/shutterstock_481869205-150x150.jpg" alt="" width="150" height="150" title="shutterstock_481869205" /></div>
                                                <div class="gdlr-core-recent-post-widget-content">
                                                    <div class="gdlr-core-recent-post-widget-title"><a href="#">Professor Tom comments on voluntary recalls by snack brands</a></div>
                                                    <div class="gdlr-core-recent-post-widget-info"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"><span class="gdlr-core-head" >By</span><a href="#" title="Posts by John Smith" rel="author">John Smith</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div id="tag_cloud-1" class="widget widget_tag_cloud kingster-widget">
                                        <h3 class="kingster-widget-title">Tag Cloud</h3><span class="clear"></span>
                                        
                                        <div class="tagcloud">
                                            <a href="#" class="tag-cloud-link tag-link-7 tag-link-position-1" style="font-size: 12.2pt;" aria-label="Admission (2 items)">Admission</a>
                                            <a href="#" class="tag-cloud-link tag-link-5 tag-link-position-2" style="font-size: 8pt;" aria-label="Article (1 item)">Article</a>
                                            <a href="#" class="tag-cloud-link tag-link-14 tag-link-position-3" style="font-size: 12.2pt;" aria-label="Event (2 items)">Event</a>
                                            <a href="#" class="tag-cloud-link tag-link-103 tag-link-position-4" style="font-size: 8pt;" aria-label="Hot (1 item)">Hot</a>
                                            <a href="#" class="tag-cloud-link tag-link-10 tag-link-position-5" style="font-size: 12.2pt;" aria-label="News (2 items)">News</a>
                                            <a href="#" class="tag-cloud-link tag-link-12 tag-link-position-6" style="font-size: 22pt;" aria-label="Post Format (7 items)">Post Format</a>
                                            <a href="#" class="tag-cloud-link tag-link-6 tag-link-position-7" style="font-size: 15pt;" aria-label="Research (3 items)">Research</a>
                                            <a href="#" class="tag-cloud-link tag-link-9 tag-link-position-8" style="font-size: 8pt;" aria-label="Social (1 item)">Social</a>
                                            <a href="#" class="tag-cloud-link tag-link-13 tag-link-position-9" style="font-size: 8pt;" aria-label="Sport (1 item)">Sport</a>
                                            <a href="#" class="tag-cloud-link tag-link-8 tag-link-position-10" style="font-size: 12.2pt;" aria-label="Student (2 items)">Student</a>
                                            <a href="#" class="tag-cloud-link tag-link-11 tag-link-position-11" style="font-size: 12.2pt;" aria-label="Updates (2 items)">Updates</a>
                                        </div>
                                    </div>

                                    <div id="gdlr-core-recent-portfolio-widget-1" class="widget widget_gdlr-core-recent-portfolio-widget kingster-widget">
                                        <h3 class="kingster-widget-title">Recent Works</h3><span class="clear"></span>
                                        <div class="gdlr-core-recent-portfolio-widget-wrap clearfix">
                                            <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
                                                <a href="#"><img src="upload/shutterstock_53600224-150x150.jpg" alt="" width="150" height="150" title="shutterstock_53600224" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-15 icon_link_alt"  ></i></span></a>
                                            </div>
                                            <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
                                                <a href="#"><img src="upload/rawpixel-577480-unsplash-1-150x150.jpg" alt="" width="150" height="150" title="rawpixel-577480-unsplash" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-15 icon_link_alt"  ></i></span></a>
                                            </div>
                                            <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
                                                <a href="#"><img src="upload/pexels-photo-150x150.jpg" alt="" width="150" height="150" title="pexels-photo" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-15 icon_link_alt"  ></i></span></a>
                                            </div>
                                            <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
                                                <a href="#"><img src="upload/training-train-lime-barbell-39688-150x150.jpg" alt="" width="150" height="150" title="training-train-lime-barbell-39688" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-15 icon_link_alt"  ></i></span></a>
                                            </div>
                                            <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
                                                <a href="#"><img src="upload/joshua-fuller-368384-unsplash-150x150.jpg" alt="" width="150" height="150" title="joshua-fuller-368384-unsplash" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-15 icon_link_alt"  ></i></span></a>
                                            </div>
                                            <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
                                                <a href="#"><img src="upload/austin-neill-247047-unsplash-150x150.jpg" alt="" width="150" height="150" title="austin-neill-247047-unsplash" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-15 icon_link_alt"  ></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>

         
     
     <?php $this->load->view('school_media/school_include/footer');?>
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