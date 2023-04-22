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

<?php foreach($course_info as $ci);?>



            <div class="kingster-page-title-wrap  kingster-style-medium kingster-left-align" <?php  if(!empty($course_info)){ if($ci['web_dept_image']!=""){?> style="background-image:url(<?php echo base_url(); ?>department_images/<?php echo $ci['web_dept_image']?>) !important;" <?php }}?>>
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr">
					<?php if(!empty($course_info)){ ?>
                        <div class="kingster-page-caption">Department of</div>
						
                        <h1 class="kingster-page-title"><?php echo $ci['web_dept_name']?></h1>
						
					<?php }?></div>
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
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-course-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-course-style-list-info">
												
												<?php
$j=1;
												 if(!empty($course_info)){
													 foreach($course_info as $c_inf){
													
													$en_course_id=base64_encode($c_inf["web_course_id"]);
													$dept_id=0;
													?>
                                                   <div class="gdlr-core-course-item-list">
                                                        <h3 class="gdlr-core-course-item-title"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" ><?php echo $c_inf["web_course_number"]?></span><?php echo $c_inf["web_course_name"]?></h3>
                                                        <div class="gdlr-core-course-item-info-wrap">
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Course Abbreviation : </span><span class="gdlr-core-tail"><?php echo $c_inf["web_course_abbrv"]?></span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Mode of Training : </span><span class="gdlr-core-tail"><?php echo $c_inf["mode_of_training"]?></span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Duration : </span><span class="gdlr-core-tail"><?php echo $c_inf["duration"]?></span></div>
                                                           <!-- <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Instructor : </span><span class="gdlr-core-tail">Carol Dawson (PhD)</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Semester : </span><span class="gdlr-core-tail">Fall 2018</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Credit : </span><span class="gdlr-core-tail">4.000</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Method : </span><span class="gdlr-core-tail">Lecture</span></div>-->
                                                        </div>
														<a href="<?php echo base_url(); ?>school_competitive_exams/course_search/course_details/<?php echo $dept_menu?>/<?php echo $j;?>/<?php echo $en_course_id ?>" class="gdlr-core-course-item-button gdlr-core-button">More Detail</a></div>
														
												 <?php $j++; } } else{?>
												  <h3 class="gdlr-core-course-item-title"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" ></span>No Courses Listed</h3>
												 
												 <?php }?>
                                                 <!--    <div class="gdlr-core-course-item-list">
                                                        <h3 class="gdlr-core-course-item-title"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >ACC201</span>Introduction to Managerial Accounting</h3>
                                                        <div class="gdlr-core-course-item-info-wrap">
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Department : </span><span class="gdlr-core-tail">Business Adminstration</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Campus : </span><span class="gdlr-core-tail">KU2 Hill</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Level : </span><span class="gdlr-core-tail">Graduate</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Instructor : </span><span class="gdlr-core-tail">John Hagensy (PhD)</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Semester : </span><span class="gdlr-core-tail">Fall 2018</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Credit : </span><span class="gdlr-core-tail">3.000</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Method : </span><span class="gdlr-core-tail">Lecture</span></div>
                                                        </div><a href="#" class="gdlr-core-course-item-button gdlr-core-button">More Detail</a></div>
                                                    <div class="gdlr-core-course-item-list">
                                                        <h3 class="gdlr-core-course-item-title"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >ACC402</span>Intermediate Accounting I</h3>
                                                        <div class="gdlr-core-course-item-info-wrap">
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Department : </span><span class="gdlr-core-tail">Business Adminstration</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Campus : </span><span class="gdlr-core-tail">Kingster's 80</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Level : </span><span class="gdlr-core-tail">Graduate</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Instructor : </span><span class="gdlr-core-tail">Angelina Jones (PhD)</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Semester : </span><span class="gdlr-core-tail">Spring 2019</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Credit : </span><span class="gdlr-core-tail">4.000</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Method : </span><span class="gdlr-core-tail">Online, Seminar</span></div>
                                                        </div><a href="#" class="gdlr-core-course-item-button gdlr-core-button">More Detail</a></div>
                                                    <div class="gdlr-core-course-item-list">
                                                        <h3 class="gdlr-core-course-item-title"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >ACC302</span>Contemporary Accounting Topics</h3>
                                                        <div class="gdlr-core-course-item-info-wrap">
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Department : </span><span class="gdlr-core-tail">Business Adminstration</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Campus : </span><span class="gdlr-core-tail">Kingster's 80</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Level : </span><span class="gdlr-core-tail">Undergraduate</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Instructor : </span><span class="gdlr-core-tail">Carol Dawson (PhD)</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Semester : </span><span class="gdlr-core-tail">Spring 2019</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Credit : </span><span class="gdlr-core-tail">4.000</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Method : </span><span class="gdlr-core-tail">Lecture, Seminar</span></div>
                                                        </div><a href="#" class="gdlr-core-course-item-button gdlr-core-button">More Detail</a></div>
                                                    <div class="gdlr-core-course-item-list">
                                                        <h3 class="gdlr-core-course-item-title"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >ITT203</span>Introduction to Taxation</h3>
                                                        <div class="gdlr-core-course-item-info-wrap">
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Department : </span><span class="gdlr-core-tail">Business Adminstration</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Campus : </span><span class="gdlr-core-tail">Adman's Hall</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Level : </span><span class="gdlr-core-tail">Undergraduate</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Instructor : </span><span class="gdlr-core-tail">Bruce Willis (PhD)</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Semester : </span><span class="gdlr-core-tail">Spring 2019</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Credit : </span><span class="gdlr-core-tail">3.000</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Method : </span><span class="gdlr-core-tail">Lecture, Online</span></div>
                                                        </div><a href="#" class="gdlr-core-course-item-button gdlr-core-button">More Detail</a></div>
                                                    <div class="gdlr-core-course-item-list">
                                                        <h3 class="gdlr-core-course-item-title"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >ASC103</span>Accounting Systems and Auditing</h3>
                                                        <div class="gdlr-core-course-item-info-wrap">
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Department : </span><span class="gdlr-core-tail">Business Adminstration</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Campus : </span><span class="gdlr-core-tail">KU2 Hill</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Level : </span><span class="gdlr-core-tail">Graduate</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Instructor : </span><span class="gdlr-core-tail">Angelina Jones (PhD)</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Semester : </span><span class="gdlr-core-tail">Spring 2019</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Credit : </span><span class="gdlr-core-tail">4.000</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Method : </span><span class="gdlr-core-tail">Lecture</span></div>
                                                        </div><a href="#" class="gdlr-core-course-item-button gdlr-core-button">More Detail</a></div>
                                                    <div class="gdlr-core-course-item-list">
                                                        <h3 class="gdlr-core-course-item-title"><span class="gdlr-core-course-item-id gdlr-core-skin-caption" >BPS201</span>Business Processes and Controls</h3>
                                                        <div class="gdlr-core-course-item-info-wrap">
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Department : </span><span class="gdlr-core-tail">Business Adminstration</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Campus : </span><span class="gdlr-core-tail">Adman's Hall</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Level : </span><span class="gdlr-core-tail">Undergraduate</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Instructor : </span><span class="gdlr-core-tail">Bruce Willis (PhD)</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Semester : </span><span class="gdlr-core-tail">Spring 2019</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Credit : </span><span class="gdlr-core-tail">2.000</span></div>
                                                            <div class="gdlr-core-course-item-info"><span class="gdlr-core-head">Method : </span><span class="gdlr-core-tail">Lecture, Online</span></div>
                                                        </div><a href="#" class="gdlr-core-course-item-button gdlr-core-button">More Detail</a></div>-->
                                                  <!--  <div class="gdlr-core-pagination  gdlr-core-style-round gdlr-core-left-align"><span aria-current='page' class='page-numbers current'>1</span> <a class='page-numbers' href='page/2/index.html'>2</a>
                                                        <a class="next page-numbers" href="page/2/index.html"></a>
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php  if(!empty($course_info)){ ?>
                        <div class=" kingster-sidebar-right kingster-column-20 kingster-line-height kingster-line-height">
                            <div class="kingster-sidebar-area kingster-item-pdlr">
                                <div id="text-18" class="widget widget_text kingster-widget">
                                    <div class="textwidget">
                                        <div class="gdlr-core-widget-box-shortcode " style="color: #ffffff ;padding: 30px 45px;background-color: #192f59 ;">
                                            <div class="gdlr-core-widget-box-shortcode-content">
                                                </p>
                                                <h3 style="font-size: 20px; color: #fff; margin-bottom: 25px;">Department Contact Info</h3>
                                                <p><span style="color: #3db166; font-size: 16px; font-weight: 600;"><?php echo $ci['web_dept_name']?> Department</span>
                                                    <br /> <span style="font-size: 15px;"><br /> 2nd Floor SAS Arcade<br /> Opp.Valyapara Bhavan, Kollam, Kerala 691571</span></p>
                                                <p><span style="font-size: 15px;"><i class="fa fa-phone"> +91-799 421 1144</i><br/><a href="https://wa.me/919633738601" target="_blank" style="color:#fff"><i class="fa fa-whatsapp"> +91 963 373 8601</i></a><br /><i class="fa fa-envelope"> schoolofcompetitiveexams@arcite.in</i> <br/></span></p>
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
						<?php }?>
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