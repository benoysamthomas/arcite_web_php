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



            <div class="kingster-page-title-wrap  kingster-style-custom kingster-left-align" style="background-image: url(<?php echo base_url(); ?>school_technical_edu/upload/shutterstock_212251981.jpg) ;">
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-bottom-gradient"></div>
                <div class="kingster-page-title-container kingster-container">
				<?php foreach($course_info as $ci);?>
                    <div class="kingster-page-title-content kingster-item-pdlr" style="padding-top: 400px ;padding-bottom: 60px ;">
                        <div class="kingster-page-caption" style="font-size: 21px ;font-weight: 400 ;letter-spacing: 0px ;">Department of</div>
                        <h1 class="kingster-page-title" style="font-size: 48px ;font-weight: 700 ;text-transform: none ;letter-spacing: 0px ;color: #ffffff ;"><?php echo $ci['web_dept_name']?></h1></div>
                </div>
            </div>
            <div class="kingster-breadcrumbs">
                <div class="kingster-breadcrumbs-container kingster-container">
                    <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home." href="<?php echo base_url(); ?>school_technical_edu/home" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name"><?php echo $ci['web_dept_name']?></span>
                        <meta property="position" content="2">
                        </span>
                    </div>
                </div>
            </div>
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-sidebar-wrapper " style="margin: 0px 0px 30px 0px;">
                        <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                            <div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 35px 0px 20px 0px;">
                                <div class="gdlr-core-pbf-sidebar-content-inner">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 27px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;"><?php echo $ci["web_course_name"]?></h3></div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <div class="gdlr-core-text-box-item-content" style="font-size: 16px ;text-transform: none ;">
                                                <p>The Academic offers include 14 majors, 15 minors, and more than 100 in major specializations so your degree will surely reflect your interests and strengths.</p>
                                                <p>Not only does Kingster University provide you the practical skills that is necessary to transition seamlessly into the workforce upon your graduation, but we also make sure that you will have a good sense of social justice so that you make the transition responsibly.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 40px ;">
                                            <div class="gdlr-core-title-item-title-wrap clearfix">
                                                <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;color: #223d71 ;margin-right: 30px ;">Majors</h3>
                                                <div class="gdlr-core-title-item-divider gdlr-core-right gdlr-core-skin-divider" style="font-size: 22px ;border-bottom-width: 3px ;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px -7px 0px 0px;">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-feature-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                        <div class="gdlr-core-feature-box gdlr-core-js gdlr-core-feature-box-type-outer" style="background-color: #3db166 ;border-width: 0px 0px 0px 0px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;">
                                                            <div class="gdlr-core-feature-box-background" style="background-image: url(upload/shutterstock_327174593.jpg) ;opacity: 0.14 ;"></div>
                                                            <div class="gdlr-core-feature-box-content gdlr-core-sync-height-content">
                                                                <h3 class="gdlr-core-feature-box-item-title" style="font-size: 16px ;font-weight: 600 ;">Business Regulation</h3></div>
                                                            <a class="gdlr-core-feature-box-link" href="business-regulation/index.html" target="_self"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px -3px 0px -3px;">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-feature-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                        <div class="gdlr-core-feature-box gdlr-core-js gdlr-core-feature-box-type-outer" style="background-color: #3db166 ;border-width: 0px 0px 0px 0px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;">
                                                            <div class="gdlr-core-feature-box-background" style="background-image: url(upload/shutterstock_339364214.jpg) ;opacity: 0.14 ;"></div>
                                                            <div class="gdlr-core-feature-box-content gdlr-core-sync-height-content">
                                                                <h3 class="gdlr-core-feature-box-item-title" style="font-size: 16px ;font-weight: 600 ;">International Tax</h3></div>
                                                            <a class="gdlr-core-feature-box-link" href="international-taxation/index.html" target="_self"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                        <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: 0px 0px 0px -7px;padding: 0px 0px 45px 0px;">
                                            <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                                <div class="gdlr-core-pbf-element">
                                                    <div class="gdlr-core-feature-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-center-align">
                                                        <div class="gdlr-core-feature-box gdlr-core-js gdlr-core-feature-box-type-outer" style="background-color: #3db166 ;border-width: 0px 0px 0px 0px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;">
                                                            <div class="gdlr-core-feature-box-background" style="background-image: url(upload/shutterstock_547272460.jpg) ;opacity: 0.14 ;"></div>
                                                            <div class="gdlr-core-feature-box-content gdlr-core-sync-height-content">
                                                                <h3 class="gdlr-core-feature-box-item-title" style="font-size: 16px ;font-weight: 600 ;">Corporate Law</h3></div>
                                                            <a class="gdlr-core-feature-box-link" href="#" target="_self"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 15px ;">
                                            <div class="gdlr-core-text-box-item-content" style="font-size: 21px ;text-transform: none ;color: #3db166 ;">
                                                <p>If you&#8217;re an educational professional who are looking to progress into management and consultancy, or an educational planning or development role, this is the best degree for you.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                            <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #3db166 ;border-bottom-width: 3px ;"></div>
                                        </div>
                                    </div>-->
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                            <div class="gdlr-core-text-box-item-content" style="font-size: 17px ;text-transform: none ;">
                                                <p>Provided by the KU Institute of Education, this programme is available by distance learning, allowing you to study flexibly while balancing work and personal lifes. The MSc Finance (EG. Banking) deepens your understanding of banks and financial markets, and how they relate to performance. It will help you to advance your career in finance and policy.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix " style="padding-bottom: 25px ;">
                                            <ul>
                                                <li class=" gdlr-core-skin-divider" style="margin-bottom: 18px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #192f59 ;font-size: 18px ;width: 18px ;" ></i></span>
                                                    <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 18px ;">Banking</span></div>
                                                </li>
                                                <li class=" gdlr-core-skin-divider" style="margin-bottom: 18px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #192f59 ;font-size: 18px ;width: 18px ;" ></i></span>
                                                    <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 18px ;">Economic Policy</span></div>
                                                </li>
                                                <li class=" gdlr-core-skin-divider" style="margin-bottom: 18px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #192f59 ;font-size: 18px ;width: 18px ;" ></i></span>
                                                    <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 18px ;">Financial Sector Management</span></div>
                                                </li>
                                                <li class=" gdlr-core-skin-divider" style="margin-bottom: 18px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #192f59 ;font-size: 18px ;width: 18px ;" ></i></span>
                                                    <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 18px ;">Quantitative Finance</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  kingster-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height" style="padding: 35px 0px 30px 0px;">
                                <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                                    <div id="text-23" class="widget widget_text kingster-widget">
                                        <div class="textwidget">
                                            <div class="gdlr-core-widget-box-shortcode " style="color: #ffffff ;padding: 30px 45px;background-color: #192f59 ;">
                                                <div class="gdlr-core-widget-box-shortcode-content">
                                                    </p>
                                                    <h3 style="font-size: 20px; color: #fff; margin-bottom: 25px;text-align:left;">Academic Counsellor Contact Info</h3>
                                                    <p><span style="color: #3db166; font-size: 16px; font-weight: 600;">School Of Technical Education</span>
                                                      </p>
                                                    <p><span style="font-size: 15px;">+1-2345-5432-45<br /> mailto:info@arcite.in<br /> </span></p>
                                                    <p><span style="font-size: 16px; color: #3db166;">Mon &#8211; Fri 9:00A.M. &#8211; 5:00P.M.</span></p> <span class="gdlr-core-space-shortcode" style="margin-top: 40px ;"></span>
                                                    <h3 style="font-size: 20px; color: #fff; margin-bottom: 15px;">Social Info</h3>
                                                    <div class="gdlr-core-social-network-item gdlr-core-item-pdb  gdlr-core-none-align" style="padding-bottom: 0px ;"><a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="facebook" style="color: #3db166 ;"><i class="fa fa-facebook" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="google-plus" style="color: #3db166 ;"><i class="fa fa-google-plus" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="linkedin" style="color: #3db166 ;"><i class="fa fa-linkedin" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="skype" style="color: #3db166 ;"><i class="fa fa-skype" ></i></a><a href="#url" target="_blank" class="gdlr-core-social-network-icon" title="twitter" style="color: #3db166 ;"><i class="fa fa-twitter" ></i></a><a href="#" target="_blank" class="gdlr-core-social-network-icon" title="instagram" style="color: #3db166 ;"><i class="fa fa-instagram" ></i></a></div> <span class="gdlr-core-space-shortcode" style="margin-top: 40px ;"></span> <a class="gdlr-core-button gdlr-core-button-shortcode  gdlr-core-button-gradient gdlr-core-button-no-border" href="#" style="padding: 16px 27px 18px;margin-right: 20px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;"><span class="gdlr-core-content" >Student Resources</span></a>
                                                    <p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <!--  <div class="gdlr-core-pbf-wrapper " style="padding: 90px 0px 60px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #efefef ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style1-horizontal gdlr-core-item-pdlr">
                                        <div class="gdlr-core-tab-item-content-image-wrap clearfix">
                                            <div class="gdlr-core-tab-item-image  gdlr-core-active" data-tab-id="1"><a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg"><span class="gdlr-core-tab-item-image-background" style="background-image: url(upload/tab-1-1.jpg) ;"  ></span><i class="fa fa-play" ></i></a></div>
                                            <div class="gdlr-core-tab-item-image " data-tab-id="2"><a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg"><span class="gdlr-core-tab-item-image-background" style="background-image: url(upload/tab-2.jpg) ;"  ></span><i class="fa fa-play" ></i></a></div>
                                            <div class="gdlr-core-tab-item-image " data-tab-id="3"><a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg"><span class="gdlr-core-tab-item-image-background" style="background-image: url(upload/tab-3.jpg) ;"  ></span><i class="fa fa-play" ></i></a></div>
                                            <div class="gdlr-core-tab-item-image " data-tab-id="4"><a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg"><span class="gdlr-core-tab-item-image-background" style="background-image: url(upload/tab-4.jpg) ;"  ></span><i class="fa fa-play" ></i></a></div>
                                        </div>
                                        <div class="gdlr-core-tab-item-wrap">
                                            <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
                                                <div class="gdlr-core-tab-item-title  gdlr-core-active" data-tab-id="1">Benefits</div>
                                                <div class="gdlr-core-tab-item-title " data-tab-id="2">Self Development</div>
                                                <div class="gdlr-core-tab-item-title " data-tab-id="3">Spirituality</div>
                                                <div class="gdlr-core-tab-item-title " data-tab-id="4">Alumni</div>
                                            </div>
                                            <div class="gdlr-core-tab-item-content-wrap clearfix">
                                                <div class="gdlr-core-tab-item-content  gdlr-core-active" data-tab-id="1" style="background-color: #ffffff ;background-image: url(upload/tab-bg.png) ;background-position: top right ;">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">Why Choose Kingster?<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p>The Kingster University Alumni Association is excited to announce the arrival of KU Alumni Connect. This is a new community building platform for Kinster’s alumni. It is the only place online where you can find, and connect with, all 90,000 Kingster’s alumni. All alumni are automatically enrolled!</p>
                                                    <p>Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                                                </div>
                                                <div class="gdlr-core-tab-item-content " data-tab-id="2" style="background-color: #ffffff ;background-image: url(upload/tab-bg.png) ;background-position: top right ;">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">Self Development<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p>The Kingster University Alumni Association is excited to announce the arrival of KU Alumni Connect. This is a new community building platform for Kinster’s alumni. It is the only place online where you can find, and connect with, all 90,000 Kingster’s alumni. All alumni are automatically enrolled!</p>
                                                    <p>Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                                                </div>
                                                <div class="gdlr-core-tab-item-content " data-tab-id="3" style="background-color: #ffffff ;background-image: url(upload/tab-bg.png) ;background-position: top right ;">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">Spirituality<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p>The Kingster University Alumni Association is excited to announce the arrival of KU Alumni Connect. This is a new community building platform for Kinster’s alumni. It is the only place online where you can find, and connect with, all 90,000 Kingster’s alumni. All alumni are automatically enrolled!</p>
                                                    <p>Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                                                </div>
                                                <div class="gdlr-core-tab-item-content " data-tab-id="4" style="background-color: #ffffff ;background-image: url(upload/tab-bg.png) ;background-position: top right ;">
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 22px ;font-weight: 700 ;text-transform: none ;color: #314e85 ;">Alumni<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p>The Kingster University Alumni Association is excited to announce the arrival of KU Alumni Connect. This is a new community building platform for Kinster’s alumni. It is the only place online where you can find, and connect with, all 90,000 Kingster’s alumni. All alumni are automatically enrolled!</p>
                                                    <p>Kingster University was established by John Smith in 1920 for the public benefit and it is recognized globally. Throughout our great history, Kingster has offered access to a wide range of academic opportunities. As a world leader in higher education, the University has pioneered change in the sector.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                   <!-- <div class="gdlr-core-pbf-wrapper " style="padding: 95px 0px 45px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="padding-bottom: 35px ;">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 27px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">Why Study Here?</h3></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 5px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                        <p>The Academic offers include 14 majors, 15 minors, and more than 100 in major specializations so your degree will surely reflect your interests and strengths.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                        <p>Not only does Kingster University provide you the practical skills that is necessary to transition seamlessly into the workforce upon your graduation, but we also make sure that you will have a good sense of social justice so that you make the transition responsibly.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <div class="gdlr-core-pbf-wrapper " style="padding: 65px 0px 60px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #192f59 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 45px 0px 0px 0px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 23px ;text-transform: none ;color: #ffffff ;">
                                                        <p>The PLP in Drafting Legislation, Regulation, and Policy has been offered by the Institute of Advanced Legal Studies with considerable success since 2004.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align"><a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="#" style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;padding: 13px 26px 16px 30px;text-transform: none ;margin: 0px 10px 10px 0px;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;background: #3db166 ;"><span class="gdlr-core-content" >Apply</span><i class="gdlr-core-pos-right fa fa-external-link" style="font-size: 14px ;"  ></i></a><a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="#" style="font-size: 14px ;font-weight: 700 ;letter-spacing: 0px ;padding: 13px 26px 16px 30px;text-transform: none ;border-radius: 2px;-moz-border-radius: 2px;-webkit-border-radius: 2px;background: #3db166 ;"><span class="gdlr-core-content" >Download Brochure</span><i class="gdlr-core-pos-right fa fa-file-pdf-o" style="font-size: 14px ;"  ></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30" id="gdlr-core-column-1">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: -123px 0px 0px 0px;padding: 0px 0px 0px 40px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="<?php echo base_url(); ?>school_technical_edu/upload/shutterstock_183400235-400x257.jpg" width="700" height="450"  alt="" /></div>
                                                </div>
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