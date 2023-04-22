          
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-event-item gdlr-core-item-pdb" style="padding-bottom: 25px ;">
                                        <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" style="margin-bottom: 37px ;">
                                            <div class="gdlr-core-block-item-title-inner clearfix">
                                                <h3 class="gdlr-core-block-item-title" style="font-size: 24px ;font-style: normal ;text-transform: none ;letter-spacing: 0px ;color: #163269 ;"> Events</h3>
                                                <div class="gdlr-core-block-item-title-divider" style="font-size: 24px ;border-bottom-color: #dcdcdc ;border-bottom-width: 2px ;"></div>
                                            </div><a class="gdlr-core-block-item-read-more" href="<?php echo base_url(); ?>school_media/events/" target="_self" style="color: #9C425E ;">View All Events</a></div>
                                        <div class="gdlr-core-event-item-holder clearfix">
                                          <?php 
												$i=0; 
												$curr_date=date("Y-m-d");
												foreach($upcoming_events as $ue){
													
														if($i<3){
													?>

										  <div class="gdlr-core-event-item-list gdlr-core-style-grid gdlr-core-item-pdlr gdlr-core-column-20   clearfix">
                                                <div class="gdlr-core-event-item-thumbnail">
                                                    <a href="#"><img src="<?php echo base_url(); ?>/event_images/<?php echo $ue["web_event_image"];?>" width="900" height="500"  alt="" /></a>
                                                </div><span class="gdlr-core-event-item-info gdlr-core-type-start-date-month"><span class="gdlr-core-date" ><?php echo  date("d",strtotime($ue["web_event_date"]));?></span><span class="gdlr-core-month"><?php echo  date("M",strtotime($ue["web_event_date"]));?></span></span>
                                                <div class="gdlr-core-event-item-content-wrap">
                                                    <h3 class="gdlr-core-event-item-title"><a href="#" ><?php echo ucwords($ue["web_event_name"]);?></a></h3>
                                                    <div class="gdlr-core-event-item-info-wrap"><span class="gdlr-core-event-item-info gdlr-core-type-time"><span class="gdlr-core-head" ><i class="icon_clock_alt" ></i></span><span class="gdlr-core-tail"><?php echo ucwords($ue["web_event_time"]);?></span></span><span class="gdlr-core-event-item-info gdlr-core-type-location"><span class="gdlr-core-head" ><i class="icon_pin_alt" ></i></span><span class="gdlr-core-tail"><?php echo ucwords($ue["web_event_location"]);?></span></span>
                                                    </div>
                                                </div>
                                            </div>
											
														<?php }
													$i++;
												} if($i==0) {?>
                                            <div class="gdlr-core-event-item-list gdlr-core-style-grid gdlr-core-item-pdlr gdlr-core-column-20  clearfix">
                                                <div class="gdlr-core-event-item-thumbnail">
                                                </div>
											  <div class="gdlr-core-event-item-content-wrap">
                                                    <h3 class="gdlr-core-event-item-title">No  Events Now!</h3>
                                                    </div>
                                                </div>
                                            </div>
											
												<?php }?>
                                          <!--  <div class="gdlr-core-event-item-list gdlr-core-style-grid gdlr-core-item-pdlr gdlr-core-column-20  clearfix">
                                                <div class="gdlr-core-event-item-thumbnail">
                                                    <a href="#"><img src="<?php echo base_url(); ?>school_technical_edu/upload/tyler-callahan-662157-unsplash-600x333.jpg" width="900" height="500" alt="" /></a>
                                                </div><span class="gdlr-core-event-item-info gdlr-core-type-start-date-month"><span class="gdlr-core-date" >17</span><span class="gdlr-core-month">Dec</span></span>
                                                <div class="gdlr-core-event-item-content-wrap">
                                                    <h3 class="gdlr-core-event-item-title"><a href="#" >Fintech &#038; Key Investment Conference</a></h3>
                                                    <div class="gdlr-core-event-item-info-wrap"><span class="gdlr-core-event-item-info gdlr-core-type-time"><span class="gdlr-core-head" ><i class="icon_clock_alt" ></i></span><span class="gdlr-core-tail">1:00 pm - 5:00 pm</span></span><span class="gdlr-core-event-item-info gdlr-core-type-location"><span class="gdlr-core-head" ><i class="icon_pin_alt" ></i></span><span class="gdlr-core-tail">Kingster Grand Hall</span></span>
                                                    </div>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                    