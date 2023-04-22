          <div class="gdlr-core-pbf-wrapper " id="div_1dd7_91">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                
                                <div class="gdlr-core-pbf-column gdlr-core-column-20 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                   
                                         
                                        
												<?php 
												$i=0; 
												$curr_date=date("Y-m-d");
												foreach($upcoming_events as $ue){
														if($i<1){
															
																$image_thumb="";
									if($ue["web_event_image"]!=""){
										$image=explode(".",$ue["web_event_image"]);
										$image_thumb= $image[0]."_thumb.".$image[1];
									}
													?>
													         <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-round" id="div_1dd7_92">
                                                       <?php 	if($ue["web_event_image"]!=""){?>
													   <img src="<?php echo base_url(); ?>event_images/<?php echo $ue["web_event_image"];?>" width="400" height="212" alt="" />
													   <?php } else{?>
													   
													    <img src="<?php echo base_url(); ?>school_technical_edu/upload/events.jpg" width="700" height="372" alt="" />
													  
													   <?php }?>
													</div>
                                                </div>
                                            </div>
													   <div class="gdlr-core-pbf-element">
												   <div class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_97">
                                                            <span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                                                <span class="gdlr-core-date" ><?php echo  date("d",strtotime($ue["web_event_date"]));?></span>
                                                                <span class="gdlr-core-month"><?php echo  date("M",strtotime($ue["web_event_date"]));?></span>
                                                            </span>
                                                            <div class="gdlr-core-event-item-content-wrap">
                                                                <h3 class="gdlr-core-event-item-title" style="text-align:left;">
                                                                    <a href="#" ><?php echo ucwords($ue["web_event_name"]);?></a>
                                                                </h3>
                                                                <div class="gdlr-core-event-item-info-wrap">
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-time">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_clock_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail" style="text-align:left;"><?php echo ucwords($ue["web_event_time"]);?></span>
                                                                    </span><br/>
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-location">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_pin_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail" style="text-align:left;"><?php echo ucwords($ue["web_event_location"]);?></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
														    </div>
													<?php
													}
													$i++;	
												
											}
												?>
                                        
                                           <!-- <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
                                                    <a class="gdlr-core-button  gdlr-core-button-solid gdlr-core-button-no-border" href="#" id="a_1dd7_6">
                                                        <i class="gdlr-core-pos-left fa fa-heart"  ></i>
                                                        <span class="gdlr-core-content" >Become a donor</span>
                                                    </a>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>

                                <div class="gdlr-core-pbf-column gdlr-core-column-20">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_93">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-event-item gdlr-core-item-pdb" id="div_1dd7_94">
                                                    <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" id="div_1dd7_95">
                                                        <div class="gdlr-core-block-item-title-inner clearfix">
                                                            <h3 class="gdlr-core-block-item-title" id="h3_1dd7_32">Latest Events</h3>
                                                            <div class="gdlr-core-block-item-title-divider" id="div_1dd7_96"></div>
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-event-item-holder clearfix">
													<?php 
													$i=0;
													foreach($upcoming_events as $ue){
													
														if($i>0 && $i<5){
													?>
                                                   	   <div class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_97">
                                                            <span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                                                <span class="gdlr-core-date" ><?php echo  date("d",strtotime($ue["web_event_date"]));?></span>
                                                                <span class="gdlr-core-month"><?php echo  date("M",strtotime($ue["web_event_date"]));?></span>
                                                            </span>
                                                            <div class="gdlr-core-event-item-content-wrap">
                                                                <h3 class="gdlr-core-event-item-title" style="text-align:left;">
                                                                    <a href="#" ><?php echo ucwords($ue["web_event_name"]);?></a>
                                                                </h3>
                                                                <div class="gdlr-core-event-item-info-wrap" style="text-align:left!important;">
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-time">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_clock_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail" style="text-align:left;"><?php echo ucwords($ue["web_event_time"]);?></span>
                                                                    </span><br/>
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-location">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_pin_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail" ><?php echo ucwords($ue["web_event_location"]);?></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
																<?php
													}
													$i++;	
												
											} if($i==0){
												?>
												            	   <div class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_97">
                                                         
                                                            <div class="gdlr-core-event-item-content-wrap">
                                                                <h4 class="gdlr-core-event-item-title">
                                                                    <a href="#" >No  Events</a>
                                                                </h4>
                                                   
                                                            </div>
                                                        </div>
											<?php }?>
														
                                                       <!-- <div class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_98">
                                                            <span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                                                <span class="gdlr-core-date" >01</span>
                                                                <span class="gdlr-core-month">Jan</span>
                                                            </span>
                                                            <div class="gdlr-core-event-item-content-wrap">
                                                                <h3 class="gdlr-core-event-item-title">
                                                                    <a href="#" >Kingster’s Alumni Hot Air Ballon Trip in Turkey</a>
                                                                </h3>
                                                                <div class="gdlr-core-event-item-info-wrap">
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-time">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_clock_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail">10:00 am - 4:30 pm</span>
                                                                    </span>
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-location">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_pin_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail">Kingster Grand Hall</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_99">
                                                            <span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
                                                                <span class="gdlr-core-date" >17</span>
                                                                <span class="gdlr-core-month">Dec</span>
                                                            </span>
                                                            <div class="gdlr-core-event-item-content-wrap">
                                                                <h3 class="gdlr-core-event-item-title">
                                                                    <a href="#" >Fintech &#038; Key Investment Conference</a>
                                                                </h3>
                                                                <div class="gdlr-core-event-item-info-wrap">
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-time">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_clock_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail">1:00 pm - 5:00 pm</span>
                                                                    </span>
                                                                    <span class="gdlr-core-event-item-info gdlr-core-type-location">
                                                                        <span class="gdlr-core-head" >
                                                                            <i class="icon_pin_alt" ></i>
                                                                        </span>
                                                                        <span class="gdlr-core-tail">Kingster Grand Hall</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>-->
                                                    </div>
                                                </div>
                                            </div>
											<?php if($i>0){?>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-button-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align">
												<a class="gdlr-core-button  gdlr-core-button-transparent gdlr-core-button-no-border" href="<?php echo base_url(); ?>school_technical_edu/events/" id="a_1dd7_7"><span class="gdlr-core-content" >View All Events</span><i class="gdlr-core-pos-right fa fa-long-arrow-right" id="i_1dd7_2"  ></i></a></div>
                                            </div>
											<?php }?>
                                        </div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-20" data-skin="Newsletter">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_100">
                                        <div class="gdlr-core-pbf-background-wrap">
                                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_101" data-parallax-speed="0"></div>
                                        </div>
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-image-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-center-align" id="div_1dd7_102">
                                                    <div class="gdlr-core-image-item-wrap gdlr-core-media-image  gdlr-core-image-item-style-rectangle" id="div_1dd7_103"><img src="upload/icon-envelope.png" alt="" width="78" height="60" title="icon-envelope" /></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-center-align gdlr-core-title-item-caption-bottom gdlr-core-item-pdlr" id="div_1dd7_104">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_33">Subscribe To Newsletter</h3></div><span class="gdlr-core-title-item-caption gdlr-core-info-font gdlr-core-skin-caption" id="span_1dd7_9">Get updates to news & events</span></div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-newsletter-item gdlr-core-item-pdlr gdlr-core-item-pdb  gdlr-core-style-rectangle-full">
     <div class="screen-reader-response" id="newsletter-response" style="color:#96aad3; display:none"><strong><i class="fa fa-thumbs-up"></i> Thank You For Your Subscription </strong></div>
													
                                                    <div class="newsletter newsletter-subscription">
                                                        <form class="gdlr-core-newsletter-form clearfix" id="news_letter" method="post" action="#">
                                                            <div class="gdlr-core-newsletter-email">
                                                                <input class="newsletter-email gdlr-core-skin-e-background gdlr-core-skin-e-content" placeholder="Your Email Address" type="email" name="news_letter_email" id="news_letter_email" size="30" required />
                                                            </div>
                                                            <div class="gdlr-core-newsletter-submit" 
															>
                                                                <input class="newsletter-submit newsletter-save" style="font-size:15px !important;padding:17px 19px !important; font-weight:700 !important; line-height:20px !important;line-spacing:0!important; width:100% !important" id="" type="button"  value="Subscribe" />
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>