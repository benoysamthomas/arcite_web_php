           <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_45" data-sync-height="height-2">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-widget">
                                                    <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" id="div_1dd7_46">
                                                        <div class="gdlr-core-block-item-title-inner clearfix">
                                                            <h3 class="gdlr-core-block-item-title" id="h3_1dd7_10">News & Updates</h3>
                                                            <div class="gdlr-core-block-item-title-divider" id="div_1dd7_47"></div>
                                                        </div>
                                                        <a class="gdlr-core-block-item-read-more" href="<?php echo base_url(); ?>school_technical_edu/news/" target="_self" id="a_1dd7_5">Read All News</a>
                                                    </div>
                                                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                                        <div class="gdlr-core-item-list-wrap gdlr-core-column-30">
                                                            <div class="gdlr-core-item-list-inner gdlr-core-item-mglr">
                                                                <div class="gdlr-core-blog-grid ">
																<?php 
																$i=0;
																foreach($news as $n1){
																	if($i<1){
																	?>
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <?php if($n1["web_news_image"]==""){?>
																		<a href="#">
                                                                            <img src="<?php echo base_url(); ?>school_technical_edu/upload/news1.jpg" width="700" height="430" alt="" />
                                                                        </a>
																		<?php  } else{?>
																		<a href="#">
                                                                            <img src="<?php echo base_url(); ?>news_images/<?php echo $n1["web_news_image"];?>" width="700" height="430" alt="" />
                                                                        </a>
																		<?php }?>
                                                                    </div>
																
                                                                    <div class="gdlr-core-blog-grid-content-wrap">
                                                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                <a href="#"><?php echo  date("d M, Y",strtotime($n1["web_news_date"]));?></a>
                                                                            </span>
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                                <a href="#" rel="tag"><?php echo $n1["news_category"]?></a>
                                                                               
                                                                            </span>
                                                                        </div>
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_11">
                                                                            <a href="#" ><?php echo ucwords($n1["web_news_head"])?></a>
                                                                        </h3>
                                                                    </div>
																		<?php }
																
																$i++;}?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list-wrap gdlr-core-column-30">
														<?php 
														$i=0;
														foreach($news as $ns){
															if($i>0 && $i<5){
																if($ns["web_news_image"]!=""){
																	$image=explode(".",$ns["web_news_image"]);
										$image_thumb= $image[0]."_thumb.".$image[1];
																}else{
																	
																$image_thumb="";	
																}
															?>
														
                                                            <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix gdlr-core-style-small">
                                                                <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                    <?php if($image_thumb==""){?>
																	
																	<a href="#">
                                                                        <img src="upload/shutterstock_218235004-150x150.jpg" alt="" width="150" height="150" title="Student" />
                                                                    </a>
																	
																	<?php } else{?>
																	<a href="#">
                                                                        <img src="<?php echo base_url(); ?>news_images/thumbnails/<?php echo $image_thumb?>" alt="" width="150" height="150" title="Student" />
                                                                    </a>
																	
																	
																	<?php }?>
                                                                </div>
                                                                <div class="gdlr-core-blog-widget-content">
                                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <a href="#"><?php echo  date("d M, Y",strtotime($ns["web_news_date"]));?></a>
                                                                        </span>
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                            <a href="#" rel="tag" style="align:left;" ><?php echo $ns["news_category"]?></a>
                                                                         
                                                                        </span>
                                                                    </div>
                                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_12" style="text-align:left;">
                                                                        <a href="#" style="align:left;"><?php echo $ns["web_news_head"]?></a>
                                                                    </h3>
                                                                </div>
                                                            </div>
															
															<?php }
														$i++;
														}?>
                                                           <!-- <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix gdlr-core-style-small">
                                                                <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                    <a href="#">
                                                                        <img src="upload/shutterstock_481869205-150x150.jpg" alt="" width="150" height="150" title="shutterstock_481869205" />
                                                                    </a>
                                                                </div>
                                                                <div class="gdlr-core-blog-widget-content">
                                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <a href="#">June 6, 2016</a>
                                                                        </span>
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                            <a href="#" rel="tag">Admission</a>
                                                                            <span class="gdlr-core-sep">,</span>
                                                                            <a href="#" rel="tag">Event</a>
                                                                        </span>
                                                                    </div>
                                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_13">
                                                                        <a href="#" >Professor Tom comments on voluntary recalls by snack brands</a>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix gdlr-core-style-small">
                                                                <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                    <a href="#">
                                                                        <img src="upload/shutterstock_361397258-150x150.jpg" alt="" width="150" height="150" title="shutterstock_361397258" />
                                                                    </a>
                                                                </div>
                                                                <div class="gdlr-core-blog-widget-content">
                                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <a href="#">June 6, 2016</a>
                                                                        </span>
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                            <a href="#" rel="tag">Article</a>
                                                                            <span class="gdlr-core-sep">,</span>
                                                                            <a href="#" rel="tag">Research</a>
                                                                        </span>
                                                                    </div>
                                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_14">
                                                                        <a href="#" >Professor Alexa is interviewed about Twitter&#8217;s valuation</a>
                                                                    </h3>
                                                                </div>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>