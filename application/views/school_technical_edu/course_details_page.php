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




            <div class="kingster-page-title-wrap  kingster-style-custom kingster-left-align" style="background-image: none;">
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr" style="padding-top: 91px ;padding-bottom: 0px ;">		<?php foreach($course_info as $ci);?>
                        <div class="kingster-page-caption" style="font-size: 21px ;font-weight: 400 ;letter-spacing: 0px ;color: #516894 ;"><?php echo $ci["web_course_number"]?></div>
                        <h1 class="kingster-page-title" style="font-size: 45px ;font-weight: 700 ;text-transform: none ;letter-spacing: 0px ;color: #161616 ;"><?php echo $ci["web_course_name"]?></h1></div>
                </div>
            </div>
            <div class="kingster-breadcrumbs" style="padding-top: 12px ;padding-bottom: 60px ;">
                <div class="kingster-breadcrumbs-container kingster-container">
                    <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to ARCITE" href="<?php echo base_url(); ?>school_technical_edu/home" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Courses." href="<?php echo base_url(); ?>school_technical_edu/course_dept" class="post post-page"><span property="name">Courses</span></a>
                        <meta property="position" content="2">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to  <?php echo $ci['web_dept_name']?>." href="<?php echo base_url(); ?>school_technical_edu/course_search" class="post post-page"><span property="name"><?php echo $ci['web_dept_name']?></span></a>
                        <meta property="position" content="3">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name"><?php echo $ci["web_course_abbrv"]?></span>
                        <meta property="position" content="4">
                        </span>
                    </div>
                </div>
            </div>
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 30px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 10px 0px 0px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;">
													<?php if($ci["web_course_image"]==""){?>
                                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="#"><img src="<?php echo base_url(); ?>school_technical_edu/upload/shutterstock_361397258-400x363.jpg" width="550" height="500"  alt="" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i></span></a>
													<?php } else{?>
													     <img src="<?php echo base_url(); ?>course_images/<?php echo $ci["web_course_image"]?>" width="550" height="500"  alt="" />
													<?php }?>

												   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-40">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 0px 100px 0px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-course-info-item gdlr-core-item-pdlr gdlr-core-item-pdb" style="padding-bottom: 45px ;">
                                                    <div class="gdlr-core-course-info-item-inner clearfix" style="color: #ffffff ;background-color: #3db166 ;">
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                                            <div class="gdlr-core-head">Course ID</div>
                                                            <div class="gdlr-core-tail"><?php echo $ci["web_course_number"]?></div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-40">
                                                            <div class="gdlr-core-head">Course Abbreviation</div>
                                                            <div class="gdlr-core-tail"><?php echo $ci["web_course_abbrv"]?></div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                                            <div class="gdlr-core-head">Mode of Training</div>
                                                            <div class="gdlr-core-tail"><?php echo $ci["mode_of_training"]?></div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-20 ">
                                                            <div class="gdlr-core-head">Duration</div>
                                                            <div class="gdlr-core-tail"><?php echo $ci["duration"]?></div>
                                                        </div>
                                                        <!--<div class="gdlr-core-pbf-column gdlr-core-column-20">
                                                            <div class="gdlr-core-head">Credit</div>
                                                            <div class="gdlr-core-tail">4.000</div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                                            <div class="gdlr-core-head">Method</div>
                                                            <div class="gdlr-core-tail">Lecture</div>
                                                        </div>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--<div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 10px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 21px ;text-transform: none ;color: #3db166 ;">
                                                        <p>If you&#8217;re an educational professional who are looking to progress into management and consultancy, or an educational planning or development role, this is the best degree for you.</p>
                                                    </div>
                                                </div>
                                            </div>-->
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #3db166 ;border-bottom-width: 3px ;"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 17px ;text-transform: none ;">
                                                        <p><?php echo $ci["web_course_desc"]?></p>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                          <!--  <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-icon-list-item gdlr-core-item-pdlr gdlr-core-item-pdb clearfix " style="padding-bottom: 25px ;">
                                                    <ul>
                                                        <li class=" gdlr-core-skin-divider" style="margin-bottom: 18px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #4f4f4f ;font-size: 18px ;width: 18px ;" ></i></span>
                                                            <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 18px ;">Banking</span></div>
                                                        </li>
                                                        <li class=" gdlr-core-skin-divider" style="margin-bottom: 18px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #4f4f4f ;font-size: 18px ;width: 18px ;" ></i></span>
                                                            <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 18px ;">Economic Policy</span></div>
                                                        </li>
                                                        <li class=" gdlr-core-skin-divider" style="margin-bottom: 18px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #4f4f4f ;font-size: 18px ;width: 18px ;" ></i></span>
                                                            <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 18px ;">Financial Sector Management</span></div>
                                                        </li>
                                                        <li class=" gdlr-core-skin-divider" style="margin-bottom: 18px ;"><span class="gdlr-core-icon-list-icon-wrap" style="margin-top: 5px ;"><i class="gdlr-core-icon-list-icon fa fa-dot-circle-o" style="color: #4f4f4f ;font-size: 18px ;width: 18px ;" ></i></span>
                                                            <div class="gdlr-core-icon-list-content-wrap"><span class="gdlr-core-icon-list-content" style="font-size: 18px ;">Quantitative Finance</span></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>-->
                                           <!--<div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <div class="gdlr-core-text-box-item-content" style="text-transform: none ;">
                                                        <div style="overflow-x: auto;">
                                                            <table style="min-width: 835px;">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Time</th>
                                                                        <th>Place</th>
                                                                        <th>Room</th>
                                                                        <th>Date Range</th>
                                                                        <th>Instructor</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>9:00am &#8211; 11:00am</td>
                                                                        <td>KU2 Hill</td>
                                                                        <td>203</td>
                                                                        <td>Aug 21, 2018 &#8211; Dec 15, 2018</td>
                                                                        <td>Carol Dawson (PhD)</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 <!--   <div class="gdlr-core-pbf-wrapper " style="padding: 75px 0px 60px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #192f59 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-36 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="margin: -130px 0px 0px 0px;padding: 0px 40px 0px 0px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;"><img src="upload/shutterstock_218235004-800x533.jpg" width="2000" height="1334"  alt="" /></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-24">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 45px 70px 0px 0px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 29px ;">
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
                            </div>
                        </div>
                    </div>
                    <div class="gdlr-core-pbf-wrapper " style="padding: 80px 0px 45px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js "></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-40">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 18px ;text-transform: none ;">
                                                        <p>The programme aims to promote an understanding of the principles of legislative and an awareness of what constitutes legislative quality, how this can be achieved.</p>
                                                        <p><u>Legislative drafting is often perceived as a skill</u> that one learns on the job.
                                                            <br />Legislative drafting has evolved to become the bedrock of political, economic and social transformation. The view of the Institute’s Sir William Doe Centre for Legislative Studies is that legislative drafting is a practical discipline requiring awareness of the principles of drafting along with great experience on the job. It is still, however, relatively unexplored as a discipline. The PLP examines issues related to the policy process, the legislative process and the drafting process.</p>
                                                        <p><span style="color: #3db166;">The PLP is aimed at those seeking a career</span> in legislative drafting, those already working as drafters or those who want a career in or already working for, organizations that produce different types of normative acts. Many of our students are mid-career drafters employed by government (for example, by LG Chambers, the Ministry of Justice or any other ministries).</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align" style="margin-bottom: 60px ;">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #3db166 ;border-bottom-width: 3px ;"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-accordion-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-accordion-style-background-title-icon gdlr-core-left-align gdlr-core-icon-pos-right">
                                                    <div class="gdlr-core-accordion-item-tab clearfix  gdlr-core-active">
                                                        <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                                        <div class="gdlr-core-accordion-item-content-wrapper">
                                                            <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content">Entry requirements</h4>
                                                            <div class="gdlr-core-accordion-item-content">
                                                                <p>Provided by the KU Institute of Education, this programme is available by distance learning, allowing you to study flexibly while balancing work and personal lifes.</p>
                                                                <p>The MSc Finance (EG. Banking) deepens your understanding of banks and financial markets, and how they relate to performance. It will help you to advance your career in finance and policy.
                                                                    <br /> <span class="gdlr-core-space-shortcode" style="margin-top: 10px ;"></span>
                                                                    <br /> <i class="fa fa-dot-circle-o" style="font-size: 16px ;margin-right: 11px ;"></i>Banking</p>
                                                                <p><i class="fa fa-dot-circle-o" style="font-size: 16px ;margin-right: 11px ;"></i>Economic Policy</p>
                                                                <p><i class="fa fa-dot-circle-o" style="font-size: 16px ;margin-right: 11px ;"></i>Financial Sector Management</p>
                                                                <p><i class="fa fa-dot-circle-o" style="font-size: 16px ;margin-right: 11px ;"></i>Quantitative Finance</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-accordion-item-tab clearfix ">
                                                        <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                                        <div class="gdlr-core-accordion-item-content-wrapper">
                                                            <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content">Course structure and modules</h4>
                                                            <div class="gdlr-core-accordion-item-content">
                                                                <p>Provided by the KU Institute of Education, this programme is available by distance learning, allowing you to study flexibly while balancing work and personal lifes.</p>
                                                                <p>The MSc Finance (EG. Banking) deepens your understanding of banks and financial markets, and how they relate to performance. It will help you to advance your career in finance and policy.
                                                                    <br /> <span class="gdlr-core-space-shortcode" style="margin-top: 10px ;"></span>
                                                                    <br /> <i class="fa fa-dot-circle-o" style="font-size: 16px ;margin-right: 11px ;"></i>Banking</p>
                                                                <p><i class="fa fa-dot-circle-o" style="font-size: 16px ;margin-right: 11px ;"></i>Economic Policy</p>
                                                                <p><i class="fa fa-dot-circle-o" style="font-size: 16px ;margin-right: 11px ;"></i>Financial Sector Management</p>
                                                                <p><i class="fa fa-dot-circle-o" style="font-size: 16px ;margin-right: 11px ;"></i>Quantitative Finance</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-accordion-item-tab clearfix ">
                                                        <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                                        <div class="gdlr-core-accordion-item-content-wrapper">
                                                            <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content">How you study</h4>
                                                            <div class="gdlr-core-accordion-item-content">
                                                                <p>Provided by the KU Institute of Education, this programme is available by distance learning, allowing you to study flexibly while balancing work and personal lifes.</p>
                                                                <p>The MSc Finance (EG. Banking) deepens your understanding of banks and financial markets, and how they relate to performance. It will help you to advance your career in finance and policy.
                                                                    <br /> <span class="gdlr-core-space-shortcode" style="margin-top: 10px ;"></span>
                                                                    <br /> <i class="fa fa-dot-circle-o" style="font-size: 16px ;margin-right: 11px ;"></i>Banking</p>
                                                                <p><i class="fa fa-dot-circle-o" style="font-size: 16px ;margin-right: 11px ;"></i>Economic Policy</p>
                                                                <p><i class="fa fa-dot-circle-o" style="font-size: 16px ;margin-right: 11px ;"></i>Financial Sector Management</p>
                                                                <p><i class="fa fa-dot-circle-o" style="font-size: 16px ;margin-right: 11px ;"></i>Quantitative Finance</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-accordion-item-tab clearfix ">
                                                        <div class="gdlr-core-accordion-item-icon gdlr-core-js gdlr-core-skin-icon "></div>
                                                        <div class="gdlr-core-accordion-item-content-wrapper">
                                                            <h4 class="gdlr-core-accordion-item-title gdlr-core-js  gdlr-core-skin-e-background gdlr-core-skin-e-content">Career opportunities</h4>
                                                            <div class="gdlr-core-accordion-item-content">
                                                                <p>Provided by the KU Institute of Education, this programme is available by distance learning, allowing you to study flexibly while balancing work and personal lifes.</p>
                                                                <p>The MSc Finance (EG. Banking) deepens your understanding of banks and financial markets, and how they relate to performance. It will help you to advance your career in finance and policy.
                                                                    <br /> <span class="gdlr-core-space-shortcode" style="margin-top: 10px ;"></span>
                                                                    <br /> <i class="fa fa-dot-circle-o" style="font-size: 16px ;margin-right: 11px ;"></i>Banking</p>
                                                                <p><i class="fa fa-dot-circle-o" style="font-size: 16px ;margin-right: 11px ;"></i>Economic Policy</p>
                                                                <p><i class="fa fa-dot-circle-o" style="font-size: 16px ;margin-right: 11px ;"></i>Financial Sector Management</p>
                                                                <p><i class="fa fa-dot-circle-o" style="font-size: 16px ;margin-right: 11px ;"></i>Quantitative Finance</p>
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
                    </div>-->
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