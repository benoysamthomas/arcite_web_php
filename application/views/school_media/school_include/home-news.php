     <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-column" style="padding-bottom: 0px ;">
                                        <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" style="margin-bottom: 40px ;">
                                            <div class="gdlr-core-block-item-title-inner clearfix">
                                                <h3 class="gdlr-core-block-item-title" style="font-size: 24px ;font-style: normal ;text-transform: none ;letter-spacing: 0px ;color: #163269 ;">News & Updates</h3>
                                                <div class="gdlr-core-block-item-title-divider" style="font-size: 24px ;border-bottom-width: 2px ;"></div>
                                            </div><a class="gdlr-core-block-item-read-more" href="<?php echo base_url(); ?>school_media/news/" target="_self" style="color: #9C425E ;">Read All News</a></div>
                                        <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
<?php 
																$i=0;
																foreach($news as $n1){
																	if($i<3){
																	?>                                           

										   <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20 ">
                                                <div class="gdlr-core-blog-grid ">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                       <?php if($n1["web_news_image"]==""){?>
																		<a href="#">
                                                                            <img src="<?php echo base_url(); ?>school_technical_edu/upload/shutterstock_135948689-600x333.jpg" width="900" height="500"  alt="" />
                                                                        </a>
																		<?php  } else{?>
																		<a href="#">
                                                                            <img src="<?php echo base_url(); ?>news_images/<?php echo $n1["web_news_image"];?>" width="700" height="430" alt="" />
                                                                        </a>
																		<?php }?>
													</div>
                                                    <div class="gdlr-core-blog-grid-content-wrap">
                                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#"><?php echo  date("d M, Y",strtotime($n1["web_news_date"]));?></a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href="#" rel="tag"><?php echo $n1["news_category"]?></a></span></div>
                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 17px ;font-weight: 600 ;letter-spacing: 0px ;"><a href="#" ><?php echo ucwords($n1["web_news_head"])?></a></h3></div>
                                                </div>
                                            </div>
																<?php }
																
																$i++;} if($i==0){?>
											
                                            <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20">
                                                <div class="gdlr-core-blog-grid ">
                                                   
                                                    <div class="gdlr-core-blog-grid-content-wrap">
                                                       <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 17px ;font-weight: 600 ;letter-spacing: 0px ;">No News Posted!</h3></div>
                                                </div>
                                            </div>
																<?php }?>
                                           <!-- <div class="gdlr-core-item-list  gdlr-core-item-pdlr gdlr-core-column-20">
                                                <div class="gdlr-core-blog-grid ">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#"><img src="<?php echo base_url(); ?>school_technical_edu/upload/shutterstock_481869205-600x333.jpg" width="900" height="500" alt="" /></a>
                                                    </div>
                                                    <div class="gdlr-core-blog-grid-content-wrap">
                                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#">June 6, 2016</a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-category"><a href="#" rel="tag">Blog</a></span></div>
                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" style="font-size: 17px ;font-weight: 600 ;letter-spacing: 0px ;"><a href="#" >Professor Tom comments on voluntary recalls by snack brands</a></h3></div>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>