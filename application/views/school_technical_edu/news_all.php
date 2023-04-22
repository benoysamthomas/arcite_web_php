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


            <div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align" style="background-image: url(<?php echo base_url(); ?>school_technical_edu/images/news_and_updates.jpg)">
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
                    <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home" href="<?php echo base_url(); ?>school_technical_edu/home" class="home"><span property="name">Home</span></a>
                        <meta property="position" content="1">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name">News</span>
                        <meta property="position" content="4">
                        </span>
                    </div>
                </div>
            </div>
                        <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 30px 0px;">
                        <div class="gdlr-core-pbf-background-wrap"></div>
						<?php 	foreach($news as $n1){ ?>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " style="padding: 0px 10px 0px 0px;">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" style="border-width: 0px;">
												        <?php if($n1["web_news_image"]==""){?>
                                                                           <!-- <img src="<?php echo base_url(); ?>school_technical_edu/upload/news1.jpg" width="900" height="500" alt="" />-->
                                                                     
																		<?php  } else{?>
																	
                                                                            <img src="<?php echo base_url(); ?>news_images/<?php echo $n1["web_news_image"];?>" width="500" height="550" alt="" />
                                                                    
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
                                           <div class="gdlr-core-blog-full-head-right">
                                                                <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 33px ;font-weight: 700 ;letter-spacing: 0px ; text-align:left;"><a href="#" ><?php echo ucwords($n1["web_news_head"])?></a></h3>
                                                                <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"  style="margin-left:10px;">
																<span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
																<a href="#"><?php echo  date("d M, Y",strtotime($n1["web_news_date"]));?></a></span>
																<!--<span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author">
																<span class="gdlr-core-head" ><?php echo $n1["news_category"]?></span>-->
												
                                                                </div>
                                                            </div>
                                            </div>
                                  
                                           <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr gdlr-core-center-align">
                                                    <div class="gdlr-core-divider-line gdlr-core-skin-divider" style=""></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 20px ;">
                                                    <div class="gdlr-core-text-box-item-content" style="font-size: 17px ;text-transform: none ;">
                                                        <p><?php echo ucwords($n1["web_news_details"])?></p>
                                                       
                                                    </div>
                                                </div>
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