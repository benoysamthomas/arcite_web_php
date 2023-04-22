<?php $this->load->view('school_competitive_exams/competitive_include/head');?>

<body class="home page-template-default page page-id-6208 gdlr-core-body tribe-no-js kingster-body kingster-body-front kingster-full kingster-with-sticky-navigation kingster-sticky-navigation-no-logo kingster-blockquote-style-1 gdlr-core-link-to-lightbox" >
<?php $this->load->view('school_competitive_exams/competitive_include/mobile-header');?>
    <div class="kingster-body-outer-wrapper">
        <div class="kingster-body-wrapper clearfix kingster-with-transparent-header kingster-with-frame">
            <div class="kingster-header-background-transparent">
          <?php $this->load->view('school_competitive_exams/competitive_include/topbar');?>
          <?php $this->load->view('school_competitive_exams/competitive_include/header');?>
 
                <!-- header -->
            </div>

            <div class="kingster-page-title-wrap kingster-style-custom kingster-center-align" style="background-image: url(<?php echo base_url(); ?>school_competitive_exams/images/COURSE-LIST.jpg);">
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-container kingster-container">
				<?php foreach($course_info as $ci);?>
                    <div class="kingster-page-title-content kingster-item-pdlr" style="padding-top: 80px; padding-bottom: 90px;">
                        <div class="kingster-page-caption" style="font-size: 21px; font-weight: 400; letter-spacing: 0px;"><?php echo $ci["web_course_number"]?></div>
                        <h1 class="kingster-page-title" style="font-size: 45px; font-weight: 700; text-transform: none; letter-spacing: 0px;"><?php echo $ci["web_course_name"]?></h1>
                    </div>
                </div>
            </div>
            <div class="kingster-breadcrumbs" style="padding-top: 20px; padding-bottom: 60px;">
                <div class="kingster-breadcrumbs-container kingster-container">
                    <div class="kingster-breadcrumbs-item kingster-item-pdlr">
                        <!-- Breadcrumb NavXT 6.5.0 -->
                        <span property="itemListElement" typeof="ListItem">
                            <a property="item" typeof="WebPage" title="Go to Kingster - College." href="<?php echo base_url(); ?>school_competitive_exams/home" class="home"><span property="name">Home</span></a>
                            <meta property="position" content="1" />
                        </span>
                        &gt;
                        <span property="itemListElement" typeof="ListItem">
                            <span property="name" class="post post-course current-item"><?php echo $ci["web_course_name"]?></span><meta property="url" content="<?php echo base_url(); ?>school_competitive_exams/home" /><meta property="position" content="2" />
                        </span>
                    </div>
                </div>
            </div>
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-wrapper" style="padding: 0px 0px 30px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 10px 0px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdb gdlr-core-center-align gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image gdlr-core-image-item-style-rectangle" style="border-width: 0px;">
                                                      
																<?php if($ci["web_course_image"]==""){?>
                                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="#"><img src="<?php echo base_url(); ?>school_competitive_exams/upload/shutterstock_361397258-550x500.jpg" width="550" height="500"  alt="" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-22 fa fa-search"  ></i></span></a>
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
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js" style="padding: 0px 0px 100px 0px;">
                                        <div class="gdlr-core-pbf-background-wrap"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-course-info-item gdlr-core-item-pdlr gdlr-core-item-pdb" style="padding-bottom: 45px;">
                                                    <div class="gdlr-core-course-info-item-inner clearfix" style="color: #ffffff; background-color: #0082fa;">
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                                            <div class="gdlr-core-head">Course ID</div>
                                                            <div class="gdlr-core-tail"><?php echo $ci["web_course_number"]?></div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                                            <div class="gdlr-core-head">Training Mode</div>
                                                            <div class="gdlr-core-tail"><?php echo $ci["mode_of_training"]?></div>
                                                        </div>
                                                        <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                                            <div class="gdlr-core-head">Duration</div>
                                                            <div class="gdlr-core-tail"><?php echo $ci["duration"]?></div>
                                                        </div>
                                                       <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first">
                                                            <div class="gdlr-core-head">Course Name</div>
                                                            <div class="gdlr-core-tail"><?php echo $ci["web_course_name"]?></div>
                                                        </div>
                                                        <!-- <div class="gdlr-core-pbf-column gdlr-core-column-20">
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
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 10px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 21px; text-transform: none; color: #0082fa;">
                                                        <p>
                                                            If you&#8217;re an educational professional who are looking to progress into management and consultancy, or an educational planning or development role, this is the best degree
                                                            for you.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>-->
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style="border-color: #0082fa; border-width: 3px;"></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 17px; text-transform: none;">
                                                        <p><?php echo $ci["web_course_desc"]?>
                                                        </p>
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
            </div>



            



  <?php $this->load->view('school_competitive_exams/competitive_include/footer');?>
        </div>
    </div>



    <script src="<?php echo base_url(); ?>school_competitive_exams/js/jquery/jquery.js" id="jquery-core-js"></script>
    <script src="<?php echo base_url(); ?>school_competitive_exams/js/kingster-learnpress.js" id="kingster-learnpress-js"></script>
    <script>
        ( function ( body ) {
            'use strict';
            body.className = body.className.replace( /\btribe-no-js\b/, 'tribe-js' );
        } )( document.body );
    </script>
    <script>
        /* <![CDATA[ */var tribe_l10n_datatables = {"aria":{"sort_ascending":": activate to sort column ascending","sort_descending":": activate to sort column descending"},"length_menu":"Show _MENU_ entries","empty_table":"No data available in table","info":"Showing _START_ to _END_ of _TOTAL_ entries","info_empty":"Showing 0 to 0 of 0 entries","info_filtered":"(filtered from _MAX_ total entries)","zero_records":"No matching records found","search":"Search:","all_selected_text":"All items on this page were selected. ","select_all_link":"Select all pages","clear_selection":"Clear Selection.","pagination":{"all":"All","next":"Next","previous":"Previous"},"select":{"rows":{"0":"","_":": Selected %d rows","1":": Selected 1 row"}},"datepicker":{"dayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"dayNamesShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"dayNamesMin":["S","M","T","W","T","F","S"],"monthNames":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesShort":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthNamesMin":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"nextText":"Next","prevText":"Prev","currentText":"Today","closeText":"Done","today":"Today","clear":"Clear"}};/* ]]> */
    </script>
    <script src="<?php echo base_url(); ?>school_competitive_exams/js/script.js" id="gdlr-core-plugin-js"></script>
    <script id="gdlr-core-page-builder-js-extra">
        /* <![CDATA[ */
        var gdlr_core_pbf = {"admin":"","video":{"width":"640","height":"360"},"ajax_url":"#"};
        /* ]]> */
    </script>
    <script src="<?php echo base_url(); ?>school_competitive_exams/js/page-builder.js" id="gdlr-core-page-builder-js"></script>
    <script src="<?php echo base_url(); ?>school_competitive_exams/js/jquery/ui/effect.min.js" id="jquery-effects-core-js"></script>
    <script id="kingster-script-core-js-extra">
        /* <![CDATA[ */
        var kingster_script_core = {"home_url":""};
        /* ]]> */
    </script>
    <script src="<?php echo base_url(); ?>school_competitive_exams/js/script-core.js" id="kingster-script-core-js"></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>school_competitive_exams/js/isotope.js'></script>
</body>
</html>