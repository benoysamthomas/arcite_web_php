 <div class="gdlr-core-pbf-wrapper "  id="gdlr-core-wrapper-3">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container  gdlr-core-container-custom" id="div_1dd7_81">
							    <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" id="div_1dd7_46">
                                                        <div class="gdlr-core-block-item-title-inner clearfix">
                                                            <h3 class="gdlr-core-block-item-title" id="h3_1dd7_10">Alumini Testimonials</h3>
                                                            <div class="gdlr-core-block-item-title-divider" id="div_1dd7_47"></div>
                                                        </div>
                                                        <a class="gdlr-core-block-item-read-more" href="<?php echo base_url(); ?>school_technical_edu/home/testimonials" target="_self" id="a_1dd7_5">Read All Testimonials</a>
                                                    </div>
                               
                           
<?php  $i=1;
shuffle($testimonials);
foreach($testimonials as $t){ if($i==1){?>
							   <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_82" data-sync-height="height-column" data-sync-height-center>
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_83" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_1dd7_84" >
                                                    <!--<div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_28">Undergraduate</h3>
                                                    </div>-->
                                                    <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" id="span_1dd7_5" style="margin-top:0px!important; text-align:left;">
													<cite>"<?php echo  $t["web_testimonial_message"]?>"</cite><br/><p style="text-align:right!important;"> - <?php echo  $t["web_testimonial_person"]?>
													<br/><br/> </p></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php } else if($i==2){ ?>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_85" data-sync-height="height-column" data-sync-height-center>
                                        <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_86"></div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_1dd7_87">
                                                   <!-- <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_29">Graduated & Professional</h3>
                                                    </div>-->
                                                    <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" id="span_1dd7_6"  style="margin-top:0px!important; text-align:left;">
													<cite>"<?php echo  $t["web_testimonial_message"]?>"</cite>
													<br/><p style="text-align:right!important;"> - <?php echo  $t["web_testimonial_person"]?></p></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php } else if($i==3){ ?>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_88" data-sync-height="height-column" data-sync-height-center>
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_89" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_1dd7_90">
                                                   <!-- <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_30">Scholarships & Financial AID</h3>
                                                    </div>-->
                                                                                                  <span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" id="span_1dd7_6"  style="margin-top:0px!important; text-align:left;">
																								  <cite>"<?php echo  $t["web_testimonial_message"]?>"</cite><br/><p style="text-align:right!important;"> 	-	<?php echo  $t["web_testimonial_person"]?></p></span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php } else{
	
	break;
}
$i++;
}?>
                            </div>
                        </div>
                    </div>