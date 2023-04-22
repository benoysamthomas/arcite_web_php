<?php $this->load->view('school_media/school_include/head');?>
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
  <?php $this->load->view('school_media/school_include/mobile-header');?>
    <div class="kingster-body-outer-wrapper ">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">
     <?php $this->load->view('school_media/school_include/topbar');?>
     <?php $this->load->view('school_media/school_include/header');?>
            <div class="kingster-page-title-wrap  kingster-style-medium kingster-left-align" style="background-image:url(<?php echo base_url(); ?>school_media/upload/event_calendar.jpg)">
                <div class="kingster-header-transparent-substitute"></div>
                <div class="kingster-page-title-overlay"></div>
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr">
                        <h1 class="kingster-page-title">Event Calendar</h1></div>
                </div>
            </div>
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-wrapper ">
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-event-item gdlr-core-item-pdb">
                                        <div class="gdlr-core-event-item-holder clearfix">
										<?php $i=0; if(isset($events)){foreach($events as $e){?>
                                            <div class="gdlr-core-event-item-list gdlr-core-style-grid gdlr-core-item-pdlr gdlr-core-column-20  clearfix" style="margin-bottom: 45px ;">
                                                <div class="gdlr-core-event-item-thumbnail">
                                                  <?php if($e["web_event_image"]!=""){?> 
												   <a href="#"><img src="<?php echo base_url(); ?>event_images/<?php echo $e["web_event_image"];?>" width="700" height="450"  alt="" /></a>
												  <?php } else{?>
												   <a href="#"><img src="<?php echo base_url(); ?>event_images/no-event-poster.png" width="700" height="450"  alt="" /></a>
												   
												  <?php }?></div><span class="gdlr-core-event-item-info gdlr-core-type-start-date-month"><span class="gdlr-core-date" ><?php echo  date("d",strtotime($e["web_event_date"]));?></span><span class="gdlr-core-month"><?php echo  date("M",strtotime($e["web_event_date"]));?></span></span>
                                                <div class="gdlr-core-event-item-content-wrap">
                                                    <h3 class="gdlr-core-event-item-title"><a href="#" ><?php echo ucwords($e["web_event_name"]);?></a></h3>
                                                    <div class="gdlr-core-event-item-info-wrap"><span class="gdlr-core-event-item-info gdlr-core-type-time"><span class="gdlr-core-head" ><i class="icon_clock_alt" ></i></span><span class="gdlr-core-tail"><?php echo ucfirst($e["web_event_time"]);?></span></span><span class="gdlr-core-event-item-info gdlr-core-type-location"><span class="gdlr-core-head" ><i class="icon_pin_alt" ></i></span><span class="gdlr-core-tail"><?php echo ucwords($e["web_event_location"]);?></span></span>
                                                    </div>
                                                </div>
                                            </div>
										<?php  $i++;}}
										if($i==0){?>
										    <div class="gdlr-core-event-item-list gdlr-core-style-grid gdlr-core-item-pdlr gdlr-core-column-20  clearfix" style="margin-bottom: 45px ;">
                                                <div class="gdlr-core-event-item-thumbnail">
                                                </div>
                                                <div class="gdlr-core-event-item-content-wrap">
                                                    <h3 class="gdlr-core-event-item-title">No  Events Posted!</h3>
                                                 
                                                </div>
                                            </div>
										<?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

   
     <?php $this->load->view('school_media/school_include/footer');?>




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