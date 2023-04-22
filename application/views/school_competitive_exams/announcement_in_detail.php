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
<?php foreach($news_details as $n);?>

            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="kingster-blog-title-wrap kingster-style-custom kingster-feature-image" style="background-image: url(<?php echo base_url(); ?>school_competitive_exams/images/ANNOUNCEMENTS.jpg);">
                    <div class="kingster-header-transparent-substitute"></div>
                    <div class="kingster-blog-title-overlay" style="opacity: 0.01;"></div>
                    <div class="kingster-blog-title-bottom-overlay"></div>
                    <div class="kingster-blog-title-container kingster-container">
                        <div class="kingster-blog-title-content kingster-item-pdlr" style="padding-top: 400px; padding-bottom: 80px;">
                            <header class="kingster-single-article-head clearfix">
                                <div class="kingster-single-article-date-wrapper post-date updated">
                                    <div class="kingster-single-article-date-day"><?php echo  date("d",strtotime($n["web_news_date"]));?></div>
                                    <div class="kingster-single-article-date-month"><?php echo  date("M Y",strtotime($n["web_news_date"]));?></div>
                                </div>
                                <div class="kingster-single-article-head-right">
                                    <h1 class="kingster-single-article-title"><?php echo ucwords($n["web_news_head"])?></h1>
                                    <div class="kingster-blog-info-wrapper">
                                        <div class="kingster-blog-info kingster-blog-info-font kingster-blog-info-author vcard author post-author">
                                            <span class="kingster-head"></span><span class="fn"><a href="#" title="News Category" rel=""><?php echo $n["news_category"]?></a></span>
                                        </div>
                                        <!--<div class="kingster-blog-info kingster-blog-info-font kingster-blog-info-category">
                                            <a href="#" rel="tag">Blog</a><span class="gdlr-core-sep">,</span> <a href="#" rel="tag">Post Format</a>
                                        </div>
                                        <div class="kingster-blog-info kingster-blog-info-font kingster-blog-info-tag"><a href="#" rel="tag">News</a></div>
                                        <div class="kingster-blog-info kingster-blog-info-font kingster-blog-info-comment-number">
                                            <span class="kingster-head"><i class="fa fa-comments-o"></i></span>0
                                        </div>-->
                                    </div>
                                </div>
                            </header>
                        </div>
                    </div>
                </div>
                <div class="kingster-breadcrumbs">
                    <div class="kingster-breadcrumbs-container kingster-container">
                        <div class="kingster-breadcrumbs-item kingster-item-pdlr">
                            <!-- Breadcrumb NavXT 6.5.0 -->
                            <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" title="Go to Homepage." href="<?php echo base_url(); ?>school_competitive_exams/home/" class="home"><span property="name">Home</span></a>
                                <meta property="position" content="1" />
                            </span>
                            &gt;
                            <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" title="Go to Announcements." href="<?php echo base_url(); ?>school_competitive_exams/home/announcements" class="taxonomy category"><span property="name">Announcements</span></a>
                                <meta property="position" content="2" />
                            </span>
                            &gt;
                            <span property="itemListElement" typeof="ListItem">
                                <span property="name" class="post post-post current-item">Announcement Details</span><meta property="url" content="<?php echo base_url(); ?>school_competitive_exams/home/announcements" /><meta property="position" content="3" />
                            </span>
                        </div>
                    </div>
                </div>
                <div class="kingster-content-container kingster-container">
                    <div class="kingster-sidebar-wrap clearfix kingster-line-height-0 kingster-sidebar-style-none">
                        <div class="kingster-sidebar-center kingster-column-60 kingster-line-height">
                            <div class="kingster-content-wrap kingster-item-pdlr clearfix">
                                <div class="kingster-content-area">
                                    <article id="post-1268" class="post-1268 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-post-format tag-news">
                                        <div class="kingster-single-article clearfix">
                                            <div class="kingster-single-article-content">
                                                <p>
                                              <?php echo $n["web_news_details"];?>  </p>
                                              
                                            </div>
                                        </div>
                                        <!-- kingster-single-article -->
                                    </article>
                                    <!-- post-id -->
                                </div>
                           
                                <div class="clear"></div>
                        
             
                                <!-- kingster-comments-area -->
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