     <div class="gdlr-core-pbf-wrapper " id="div_1dd7_105">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_106" data-parallax-speed="0"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js "></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr">
                                                    <div class="gdlr-core-title-item-title-wrap clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_34">Search For Courses</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-course-search-item gdlr-core-item-pdb gdlr-core-item-pdlr">
                                                    <form class="gdlr-core-course-form clearfix" action="<?php echo base_url(); ?>school_technical_edu/course_search" method="post">
                                                        <div class=" gdlr-core-course-column gdlr-core-column-60 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-keywords">
                                                                <input type="text" placeholder="Course Name"  name="course_name" value="" />
                                                            </div>
                                                        </div>
                                                        <!--<div class=" gdlr-core-course-column gdlr-core-column-30">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-course-id">
                                                                <input type="text" placeholder="Course ID" name="course-id" value="" />
                                                            </div>
                                                        </div>-->
                                                        <div class=" gdlr-core-course-column gdlr-core-column-30 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-department">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="department" >
                                                                        <option value="0">Search By Department</option>
																		<?php  if(isset($departments)){
								foreach($departments as $d){
									
								?>
                                                                        <option value="<?php echo $d["web_dept_id"];?>"><?php echo $d["web_dept_name"];?></option>
                                                                    	<?php }
									}
							?></select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" gdlr-core-course-column gdlr-core-column-30">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-campus">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="campus">
                                                                        <option value="0">Search By Campus</option>
                                                                      				<?php  if(isset($campus_location)){
								foreach($campus_location as $cl){
									
								?>
												<option value="<?php echo $cl["web_sub_cat_id"]?>" ><?php echo $cl["web_sub_cat_name"]?></option>
												<?php }
												}?>
                                                                      
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" gdlr-core-course-column gdlr-core-column-30 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-level">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="mode_of_training">
                                                                        <option value="0">Search by Mode Of Training</option>
                                                                       		<?php foreach($mode_of_training as $md){?>
												<option value="<?php echo $md["web_sub_cat_id"]?>"><?php echo $md["web_sub_cat_name"]?></option>
												<?php }?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--<div class=" gdlr-core-course-column gdlr-core-column-30">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-instructor">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="duration">
                                                                        <option value="0">Search By Duration</option>
                                                                       	<?php foreach($course_duration as $cd){?>
												<option value="<?php echo $cd["web_sub_cat_id"]?>"><?php echo $cd["web_sub_cat_name"]?></option>
												<?php }?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>-->
														<input type="hidden" name="duration" value="0" />
                                                       <!-- <div class=" gdlr-core-course-column gdlr-core-column-30 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-semester">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="semester">
                                                                        <option value="">Semester</option>
                                                                        <option value="fall-2018">Fall 2018</option>
                                                                        <option value="spring-2019">Spring 2019</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>-->
                                                        <!--<div class=" gdlr-core-course-column gdlr-core-column-30">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-credit">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="credit">
                                                                        <option value="">Credit</option>
                                                                        <option value="2-000">2.000</option>
                                                                        <option value="3-000">3.000</option>
                                                                        <option value="4-000">4.000</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>-->
                                                        <div class="gdlr-core-course-form-submit gdlr-core-course-column gdlr-core-column-first gdlr-core-center-align">
                                                            <input class="gdlr-core-full-size" type="submit" value="Search Courses" />
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