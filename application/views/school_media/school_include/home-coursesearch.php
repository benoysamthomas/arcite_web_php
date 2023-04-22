              <div class="gdlr-core-pbf-wrapper " style="padding: 115px 0px 85px 0px;">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" style="background-image: url(<?php echo base_url(); ?>school_media/upload/search-for-courses.jpg) ;background-size: cover ;background-position: center ;" data-parallax-speed="0"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-60 gdlr-core-column-first" data-skin="White Title">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-course-search-item gdlr-core-item-pdb gdlr-core-item-pdlr">
                                                    <h3 class="gdlr-core-course-search-item-title gdlr-core-center-align" style="font-size: 24px ;letter-spacing: 0px ; color:#fff">Search For Courses</h3>
                                                    <form class="gdlr-core-course-form clearfix" action="<?php echo base_url(); ?>school_media/course_search" method="post">
                                                        <div class=" gdlr-core-course-column gdlr-core-column-40 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-keywords">
                                                                <input type="text" placeholder="Course Name" name="course_name" value="" />
                                                            </div>
                                                        </div>
                                                     
                                                        <div class=" gdlr-core-course-column gdlr-core-column-15 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-department">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                                             <select class="gdlr-core-skin-e-content" name="department" >
                                                                        <option value="0">Search By Area</option>
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
                                                        <div class=" gdlr-core-course-column gdlr-core-column-15">
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
														    <div class=" gdlr-core-course-column gdlr-core-column-15">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-campus">
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
                                                        <!--<div class=" gdlr-core-course-column gdlr-core-column-15 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-level">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="level">
                                                                        <option value="">Level</option>
                                                                        <option value="graduate">Graduate</option>
                                                                        <option value="undergraduate">Undergraduate</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" gdlr-core-course-column gdlr-core-column-15">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-instructor">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="instructor">
                                                                        <option value="">Instructor</option>
                                                                        <option value="albert-coman-phd">Albert Coman (PhD)</option>
                                                                        <option value="angelina-jones-phd">Angelina Jones (PhD)</option>
                                                                        <option value="bruce-willis-phd">Bruce Willis (PhD)</option>
                                                                        <option value="carol-dawson-phd">Carol Dawson (PhD)</option>
                                                                        <option value="john-hagensy">John Hagensy (PhD)</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" gdlr-core-course-column gdlr-core-column-15">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-semester">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="semester">
                                                                        <option value="">Semester</option>
                                                                        <option value="fall-2018">Fall 2018</option>
                                                                        <option value="spring-2019">Spring 2019</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=" gdlr-core-course-column gdlr-core-column-15">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-method">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="method">
                                                                        <option value="">Method</option>
                                                                        <option value="lecture">Lecture</option>
                                                                        <option value="online">Online</option>
                                                                        <option value="seminar">Seminar</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>-->
														<input type="hidden" name="duration" value="0" />
                                                        <div class="gdlr-core-course-form-submit gdlr-core-course-column gdlr-core-column-first gdlr-core-center-align">
                                                            <input class="gdlr-core-auto-size" type="submit" value="Search Courses" />
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