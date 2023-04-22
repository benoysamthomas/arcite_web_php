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

<?php foreach($gallery_category as $g);?>

           <!-- <div class="kingster-page-title-wrap  kingster-style-medium kingster-center-align">
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr">
                        <h1 class="kingster-page-title"><?php echo ucfirst($g["web_gallery_category_name"]);?> </h1></div>
                </div>
            </div>-->
			 <div class="kingster-breadcrumbs" style="padding-top: 12px ;padding-bottom: 60px ;">
                <div class="kingster-breadcrumbs-container kingster-container">
                    <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Gallery" href="<?php echo base_url(); ?>school_technical_edu/gallery" class="home"><span property="name">Gallery</span></a>
                        <meta property="position" content="1">
                        </span>&gt;<span property="itemListElement" typeof="ListItem"><span property="name"><?php echo ucfirst($g["web_gallery_category_name"]);?></span>
                        <meta property="position" content="4">
                        </span>
                    </div>
                </div>
            </div>
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">

                    <div class="gdlr-core-pbf-wrapper " style="padding: 120px 20px 70px 20px;" data-skin="White Text">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #0a0a0a ;">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(upload/coming-soon.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed="0.2"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
							
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" style="padding-bottom: 60px ;">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="text-transform: none ;"><?php echo ucfirst($g["web_gallery_category_name"]);?></h3></div>
											<span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption"><?php echo ucfirst($g["web_gallery_image_caption"]);?></span></div>
                                </div>
								
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-slider gdlr-core-item-pdlr ">
                                        <div class="gdlr-core-flexslider flexslider gdlr-core-js-2 " data-type="slider" data-effect="default" data-nav="navigation">
                                            <ul class="slides">
                                               
<?php foreach($gallery_category as $gc){?>
											   <li>
                                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="<?php echo base_url();?>gallery_category_images/<?php echo $gc["web_gallery_cat_image"]?>" data-sub-html="<?php echo $g["web_gallery_cat_caption"]?>" data-lightbox-group="gdlr-core-img-group-4"><img src="<?php echo base_url();?>gallery_category_images/<?php echo $gc["web_gallery_cat_image"]?>" width="700" height="100"  alt="" />
														<!--<span class="gdlr-core-image-overlay  gdlr-core-gallery-image-overlay gdlr-core-left-align"><span class="gdlr-core-image-overlay-content" ><span class="gdlr-core-image-overlay-title gdlr-core-title-font" ><?php echo $gc["web_gallery_cat_caption"]?></span><span class="gdlr-core-image-overlay-caption gdlr-core-info-font"></span></span>
                                                            </span>-->
                                                        </a>
                                                    </div>
                                                </li>
												
<?php }?>
                                               <!-- <li>
                                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="<?php echo base_url(); ?>school_technical_edu/upload/shutterstock_381527992.jpg" data-sub-html="Subject" data-lightbox-group="gdlr-core-img-group-4"><img src="<?php echo base_url(); ?>school_technical_edu/upload/shutterstock_381527992-800x533.jpg" width="1500" height="1000"  alt="" /><span class="gdlr-core-image-overlay  gdlr-core-gallery-image-overlay gdlr-core-left-align"><span class="gdlr-core-image-overlay-content" ><span class="gdlr-core-image-overlay-title gdlr-core-title-font" >Mathematic</span><span class="gdlr-core-image-overlay-caption gdlr-core-info-font">Subject</span></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="<?php echo base_url(); ?>school_technical_edu/upload/shutterstock_450689383.jpg" data-sub-html="Women" data-lightbox-group="gdlr-core-img-group-4"><img src="<?php echo base_url(); ?>school_technical_edu/upload/shutterstock_450689383-800x533.jpg" width="1500" height="1000"  alt="" /><span class="gdlr-core-image-overlay  gdlr-core-gallery-image-overlay gdlr-core-left-align"><span class="gdlr-core-image-overlay-content" ><span class="gdlr-core-image-overlay-title gdlr-core-title-font" >Portrait</span><span class="gdlr-core-image-overlay-caption gdlr-core-info-font">Women</span></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="gdlr-core-gallery-list gdlr-core-media-image">
                                                        <a class="gdlr-core-lightgallery gdlr-core-js " href="<?php echo base_url(); ?>school_technical_edu/upload/shutterstock_284650220.jpg" data-sub-html="Group" data-lightbox-group="gdlr-core-img-group-4"><img src="<?php echo base_url(); ?>school_technical_edu/upload/shutterstock_284650220-800x533.jpg" width="1500" height="1000"  alt="" /><span class="gdlr-core-image-overlay  gdlr-core-gallery-image-overlay gdlr-core-left-align"><span class="gdlr-core-image-overlay-content" ><span class="gdlr-core-image-overlay-title gdlr-core-title-font" >Brainstorm</span><span class="gdlr-core-image-overlay-caption gdlr-core-info-font">Group</span></span>
                                                            </span>
                                                        </a>
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
            "home_url": "index.html"
        };
    </script>
    <script type='text/javascript' src='<?php echo base_url(); ?>school_technical_edu/js/plugins.min.js'></script>
</body>
</html>