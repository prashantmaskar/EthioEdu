
<?php  $this->load->view('header'); ?>
        <div class="service-wrap ">
            <div class="row">
                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
                <div class="col s12 m8 grid-example ">
                    <div class="course_details row z-depth-1">
                        <div class="col m12">
                           <!-- <h1 class="course_title"> Diploma in Maritime Transport and Logistics Management(Maritime Transport)
                                Colleges and Universities Offering Diploma in Maritime Transport and Logistics Management(Maritime Transport) in Ethiopia</h1>-->
                        </div>
                        <div class="col m12">
                         <?php $c_id = $_GET['id'];
                        $query = $this->db->query("select * from tbl_course where course_id = '" .$c_id. "'");

                        
                                foreach ($query->result_array() as $row){ 
                                $duration = $row['course_duration'];
                                    if($duration>=365){
                                        $year=(int)($duration/365);
                                        $days=$duration%365;
                                        $month=(int)($days/30);
                                        $days=(int)($days%30);
                                          }elseif($duration<365 && $duration>30){
                                           $month=(int)($duration/30);
                                           $days=(int)($duration%30);
                                          }else{
                                            $days = $duration;
                                          }
                                    
                        ?>
                            <div class="course_short_details">
                                <ul class="collection with-header">
                                    <li class="collection-header red"><h4>Course Details</h4></li>
                                    <li class="collection-item"><div><span><strong>Course Name:</strong></span> <?php echo $row['course_name']; ?></div></li>
                                    <li class="collection-item"><div><span><strong>Major Subject:</strong></span><?php echo $row['course_subject']; ?></div></li>
                                    <li class="collection-item"><div><span><strong>Course Category:</strong></span><?php echo $row['course_category']; ?></div></li>
                                    <li class="collection-item"><div><span><strong>Average Study Duration:</strong> </span><?php if(isset($year)){
                                       echo $year." Year "; } if(isset($month) && $month!==0){echo $month." Month ";}
                                    if(isset($days) && $days!==0){echo $days." Day ";}
                                       ?></div></li>
                                       <li class="collection-item"><div><span><strong>Course Description:</strong></span><?php echo $row['course_desc']; ?></div></li>
                                </ul>
                                <p class="black-text"></p>
                            </div>
                              <?php } ?>
                        </div>
                        <div class="col m12">

                            <div class="school_country">
                                <h2 class="sch_det_title">Course Rate & Review</h2>
                                <div class="review_info"><form id="reviewform" action="#" method="post" class="col m12">
                                                    <div class="form-group input-field col s12">
                                                        <input id="Reviewer_name" name="Reviewer_name" type="text" class="validate">
                                                        <label for="Reviewer_name">Reviewer's Name</label>
                                                    </div>
													<div class=" form-group input-field col s12">
                                                        <input id="email" type="text" name="email" class="form-control">
                                                        <label for="email">Reviewer's Email</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="Review_title" name="Review_title" type="text" class="validate">
                                                        <label for="Review_title">Review Title</label>
                                                    </div>
                                                    <!--<div class=" form-group input-field col s12">
                                                        <input id="course_cat" name="course_cat" type="text" class="validate">
                                                        <label for="course_cat">Course Category</label>
                                                    </div>-->
													
													          
													
													
													
                                                    <div class="col s4">
                                                        <label class="s_duration">Rating</label>
                                                    </div>
                                                    <div class="form-group input-field col s8">
                                                        <div class="stars">
												 <!-- <form action="">-->
													<input class="star star-5" id="star-5" type="radio" name="star" />
													<label class="star star-5" for="star-5"></label>
													<input class="star star-4" id="star-4" type="radio" name="star"/>
													<label class="star star-4" for="star-4"></label>
													<input class="star star-3" id="star-3" type="radio" name="star"/>
													<label class="star star-3" for="star-3"></label>
													<input class="star star-2" id="star-2" type="radio" name="star"/>
													<label class="star star-2" for="star-2"></label>
													<input class="star star-1" id="star-1" type="radio" name="star"/>
													<label class="star star-1" for="star-1"></label>
												  <!--</form>-->
                                                         </div>              
                                                    </div>
                                                    


                                                   

                                                    <div class=" form-group input-field col s12">
                                                        <textarea id="Review_Contents" class="materialize-textarea" name="Review_Contents"></textarea>
                                                        <label for="Review_Contents">Review Contents</label>
                                                    </div>

                                                    <div class="col s12">
                                                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                                            <i class="mdi-content-send right"></i>
                                                        </button>

                                                    </div>
                                                </form></div>
                               
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">More Courses</h2>
                            <?php if(isset($_GET['id'])){$crs_id = $_GET['id'];}
                                $query = $this->db->query("select * from  tbl_course where   
                                 course_id != '" .$crs_id. "'");
                                foreach ($query->result_array() as $row)
                                { 
                                    $c_id = $row['course_id'];
                             ?>
                                <ul>
                                    <li><a href="<?php echo base_url().'index.php/coursedetails?id='.$c_id ?>"><?php echo $row['course_name'];?></a></li>
                                   
                                </ul>
                                <?php } ?>
                            </div>
                     </div>


                     <div>
                            <ul class="pagination">
                                <li><a href="#!"><i class="fa fa-chevron-left"></i></a></li>
                                <li class="active"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                  </div>
                        <div class="col m12">
                            <div class="school_social">
                                <ul>
                                    <li><a href="#" class="waves-effect waves-light btn facebook darken-3"><i class="fa fa-facebook-square"></i> Facebook</a></li> 
                                    <li><a href="#" class="waves-effect waves-light btn light-blue darken-2"><i class="fa fa-envelope"></i> Mail</a></li> 

                                    <li><a href="#" class="waves-effect waves-light btn linkedin darken-3"><i class="fa fa-linkedin"></i> Linkedin</a></li> 

                                    <li><a href="#" class="waves-effect waves-light btn twitter darken-3"><i class="fa fa-twitter"></i> Twitter</a></li> 

                                    <li><a href="#" class="waves-effect waves-light btn googleplus darken-3"><i class="fa fa-google-plus"></i> Google</a></li> 

                                </ul>
                            </div>
                        </div>

                        <div class="featured_schools col s12 m12">

                            <h5>Featured Course</h5>
                            <div class="featured_slider">
                                       <div class="item"><img src="<?php echo base_url(). 'images/slider_upper/featured_sc1.jpg'?>"></div>
                                    <div class="item"><img src="<?php echo base_url().'images/slider_upper/featured_sc2.jpg'?>"></div>
                                    <div class="item"><img src="<?php echo base_url().'images/slider_upper/featured_sc3.png'?>"></div>
                                    <div class="item"><img src="<?php echo base_url().'images/slider_upper/featured_sc2.jpg'?>"></div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>

