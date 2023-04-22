      <div class="kingster-header-container  kingster-container">
                    <div class="kingster-header-container-inner clearfix">
                        <div class="kingster-logo  kingster-item-pdlr">
                            <div class="kingster-logo-inner">
                                <a class="" href="<?php echo base_url(); ?>school_technical_edu/home"><img src="<?php echo base_url(); ?>school_technical_edu/images/arc-logo-black-1.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="kingster-navigation kingster-item-pdlr clearfix ">
                            <div class="kingster-main-menu" id="kingster-main-menu">
                                <ul id="menu-main-navigation-1" class="sf-menu">
                                    <li class="menu-item menu-item-home  menu-item-has-children kingster-normal-menu <?php if($menu==1){ echo 'current-menu-item'; }?>"><a href="<?php echo base_url(); ?>school_technical_edu/home" class="sf-with-ul-pre">Home</a>
                                      <!--  <ul class="sub-menu">
                                            <li class="menu-item menu-item-home" data-size="60"><a href="index.html">Homepage 1</a></li>
                                            <li class="menu-item" data-size="60"><a href="homepage-2.html">Homepage 2</a></li>
                                        </ul>-->
                                    </li>
									  <li class="menu-item kingster-normal-menu <?php if($menu==4){ echo 'current-menu-item'; }?>"><a href="<?php echo base_url(); ?>school_technical_edu/about_us">Who We Are</a></li>
                                  
                                   <li class="menu-item menu-item-has-children kingster-normal-menu  <?php if($menu==2){ echo 'current-menu-item'; }?>"><a href="<?php echo base_url(); ?>school_technical_edu/course_search" class="sf-with-ul-pre">Courses</a>
                                        <ul class="sub-menu">
                                          				<?php $dept=$this->home_model->get_department_by_institution(ARC_TECH_SCHOOL);
													$i=1;
													$j=1;
											  if(isset($dept)){
								foreach($dept as $dt){
									if($dt["web_dept_course_mode"]==1){
									$en_dept_id=base64_encode($dt["web_dept_id"]);
								?>
                                            <li class="menu-item menu-item-has-children  <?php if($dept_menu==$i){ echo 'current-menu-item'; }?>" data-size="60">
											<a href="<?php echo base_url(); ?>school_technical_edu/course_search/course_dept/<?php echo $i?>/<?php echo $en_dept_id ?>" class="sf-with-ul-pre"><?php echo ucwords($dt["web_dept_name"]);?></a>
                                                <ul class="sub-menu">
													<?php 
												$crse_name="";
												$mode_of_train=0;
												$durtn=0;
												
												$crse_list=$this->home_model->get_course_detials($crse_name,$mode_of_train,$durtn,$dt["web_dept_id"]);
														  if(isset($crse_list)){
								foreach($crse_list as $cs){
									
									$en_course_id=base64_encode($cs["web_course_id"]);
												?>
                                                    <li class="menu-item <?php if($course_menu==$j){ echo 'current-menu-item'; }?>">
													<?php if($cs["web_course_disp_mode"]==1){?>
													<a href="<?php echo base_url(); ?>school_technical_edu/course_search/course_details/<?php echo $i?>/<?php echo $j?>/<?php echo $en_course_id ?>"><?php echo $cs["web_course_name"];?></a>
													<?php } else{?>
													<a href="#"><?php echo $cs["web_course_name"];?></a>
													<?php }?>
													</li>
                                            <?php 
												   
												   $j++;}
													 }
									  ?>        
                                                </ul>
                                            </li>
                                      <?php 
									}else {?>
									      <li class="menu-item menu-item-has-children  <?php if($dept_menu==$i){ echo 'current-menu-item'; }?>" data-size="60"><a href="#" class="sf-with-ul-pre"><?php echo ucwords($dt["web_dept_name"]);?></a>
                                                <ul class="sub-menu">
														<?php 
												$crse_name="";
												$mode_of_train=0;
												$durtn=0;
												
												$crse_list=$this->home_model->get_course_detials($crse_name,$mode_of_train,$durtn,$dt["web_dept_id"]);
														  if(isset($crse_list)){
								foreach($crse_list as $cs){
									
									$en_course_id=base64_encode($cs["web_course_id"]);
												?>
                                                    
                                                    <li class="menu-item">
													<?php if($cs["web_course_disp_mode"]==1){?>
													<a href="<?php echo base_url(); ?>school_technical_edu/course_search/course_details/<?php echo $i?>/<?php echo $j?>/<?php echo $en_course_id ?>"><?php echo $cs["web_course_name"];?></a>
													<?php } else{?>
													<a href="#"><?php echo $cs["web_course_name"];?></a>
													<?php }?>
													</li>
													      <?php 
												   
												   $j++;}
													 }
									  ?>   
                                                
                                                </ul>
                                            </li>
									<?php }
											  $i++;}
									}?>
                                          
                                        </ul>
                                    </li>
                                   <!-- <li class="menu-item menu-item-has-children kingster-mega-menu <?php if($menu==2){ echo 'current-menu-item'; }?>"><a href="#" class="sf-with-ul-pre">Courses</a>
                                        <div class="sf-mega sf-mega-full megaimg" >
                                            <ul class="sub-menu" >
														<?php $dept=$this->home_model->get_department_by_institution(ARC_TECH_SCHOOL);
													$i=1;
													$j=1;
											  if(isset($dept)){
								foreach($dept as $dt){
									if($dt["web_dept_course_mode"]==1){
									$en_dept_id=base64_encode($dt["web_dept_id"]);
								?>
                                                <li class="menu-item menu-item-has-children <?php if($dept_menu==$i){ echo 'current-menu-item'; }?>" data-size="15">
												<a class="sf-with-ul-pre" href="<?php echo base_url(); ?>school_technical_edu/course_search/course_dept/<?php echo $i?>/<?php echo $en_dept_id ?>"><?php echo ucwords($dt["web_dept_name"]);?></a>
                                                    <ul class="sub-menu">
													
												<?php 
												$crse_name="";
												$mode_of_train=0;
												$durtn=0;
												
												$crse_list=$this->home_model->get_course_detials($crse_name,$mode_of_train,$durtn,$dt["web_dept_id"]);
														  if(isset($crse_list)){
								foreach($crse_list as $cs){
									
									$en_course_id=base64_encode($cs["web_course_id"]);
												?>
                                                        <li class="menu-item <?php if($course_menu==$j){ echo 'current-menu-item'; }?>" >
														<a style="font-size:12px!important; padding:4px!important;" href="<?php echo base_url(); ?>school_technical_edu/course_search/course_details/<?php echo $i?>/<?php echo $j?>/<?php echo $en_course_id ?>"><strong><?php echo $cs["web_course_name"];?></strong></a></li>
                                                   <?php 
												   
												   $j++;}
													 }
									} else {?>  
									    <!--  <li class="menu-item menu-item-has-children   <?php if($dept_menu==$i){ echo 'current-menu-item'; }?>" data-size="15"><a class="sf-with-ul-pre" href="<?php echo base_url(); ?>school_technical_edu/enquiry_form_search/<?php echo $en_dept_id ?>" target="_blank"><?php echo ucwords($dt["web_dept_name"]);?></a>
									      <li class="menu-item menu-item-has-children   <?php if($dept_menu==$i){ echo 'current-menu-item'; }?>" data-size="15"><a class="sf-with-ul-pre" href="#"><?php echo ucwords($dt["web_dept_name"]);?></a>
                                                    <ul class="sub-menu">
													
												<?php 
												$crse_name="";
												$mode_of_train=0;
												$durtn=0;
												
												$crse_list=$this->home_model->get_course_detials($crse_name,$mode_of_train,$durtn,$dt["web_dept_id"]);
														  if(isset($crse_list)){
								foreach($crse_list as $cs){
									
									$en_course_id=base64_encode($cs["web_course_id"]);
												?>
                                                       <!-- <li class="menu-item <?php if($course_menu==$j){ echo 'current-menu-item'; }?>"><a style="font-size:12px!important; padding:4px!important;"href="<?php echo base_url(); ?>school_technical_edu/enquiry_form_search/<?php echo $en_course_id ?>" target="_blank"><strong><?php echo $cs["web_course_name"];?></strong></a></li>
													   <li class="menu-item <?php if($course_menu==$j){ echo 'current-menu-item'; }?>"><a style="font-size:12px!important; padding:4px!important;"href="#" ><strong><?php echo $cs["web_course_name"];?></strong></a></li>
													   
                                                   <?php 
												   
												   $j++;}
													 }
									 } ?>

												   </ul>
													
														
                                                </li>
											  <?php  $i++;}
											  }?>
                                            
                                            </ul>
                                        </div>
                                    </li>-->
                                   <!-- <li class="menu-item menu-item-has-children kingster-normal-menu <?php if($menu==3){ echo 'current-menu-item'; }?>"><a href="#" class="sf-with-ul-pre">Academics</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item <?php if($submenu==31){ echo 'current-menu-item'; }?>" data-size="60"><a href="<?php echo base_url(); ?>school_technical_edu/apply_now">Apply To ARCITE</a></li>
                                            <li class="menu-item <?php if($submenu==32){ echo 'current-menu-item'; }?>" data-size="60"><a href="#">Campus Tour</a></li>

                                            <li class="menu-item <?php if($submenu==33){ echo 'current-menu-item'; }?>" data-size="60"><a href="<?php echo base_url(); ?>school_technical_edu/home/testimonials">Alumini Testimonials</a></li>
                                            <li class="menu-item  <?php if($submenu==34){ echo 'current-menu-item'; }?>" " data-size="60"><a href="<?php echo base_url(); ?>school_technical_edu/events/">Event Calendar</a></li>
                                        </ul>
                                    </li>-->
                                    <!--<li class="menu-item menu-item-has-children kingster-normal-menu"><a href="#" class="sf-with-ul-pre">Courses</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item" data-size="60"><a href="course-list-1.html">Course List 1</a></li>
                                            <li class="menu-item" data-size="60"><a href="course-list-2.html">Course List 2</a></li>
                                        </ul>
                                    </li>-->
                                    <li class="menu-item kingster-normal-menu <?php if($menu==5){ echo 'current-menu-item'; }?>" ><a href="<?php echo base_url(); ?>school_technical_edu/gallery">Gallery</a></li>
                                    <li class="menu-item kingster-normal-menu <?php if($menu==6){ echo 'current-menu-item'; }?>" ><a href="<?php echo base_url(); ?>school_technical_edu/igbc_student_chapter">IGBC </a></li>
                                    <li class="menu-item kingster-normal-menu <?php if($menu==8){ echo 'current-menu-item'; }?>" ><a href="<?php echo base_url(); ?>school_technical_edu/certificate_verification">Certificate Verification </a></li>
                                    <li class="menu-item kingster-normal-menu <?php if($menu==7){ echo 'current-menu-item'; }?>" ><a href="<?php echo base_url(); ?>school_technical_edu/contact_us">Contact Us</a></li>
                                  
                                    <!--<li class="menu-item kingster-normal-menu"><a href="university-life.html">University Life</a></li>-->
                                </ul>
                                <div class="kingster-navigation-slide-bar" id="kingster-navigation-slide-bar"></div>
                            </div>
                           <!-- <div class="kingster-main-menu-right-wrap clearfix ">
                                <div class="kingster-main-menu-search" id="kingster-top-search"><i class="icon_search"></i></div>
                                <div class="kingster-top-search-wrap">
                                    <div class="kingster-top-search-close"></div>
                                    <div class="kingster-top-search-row">
                                        <div class="kingster-top-search-cell">
                                            <form role="search" method="get" class="search-form" action="#">
                                                <input type="text" class="search-field kingster-title-font" placeholder="Search..." value="" name="s">
                                                <div class="kingster-top-search-submit"><i class="fa fa-search"></i></div>
                                                <input type="submit" class="search-submit" value="Search">
                                                <div class="kingster-top-search-close"><i class="icon_close"></i></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>