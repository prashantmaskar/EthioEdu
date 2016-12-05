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
                <div class="col s12 m10 grid-example z-depth-1">
                    <div class="school_category">
                        <div class="col m12 s12">
                            <div class="course_info">
                                <h1 class="page-heading">Courses offered by colleges and universities in Ethiopia </h1>

                                <p>Search for courses offered in colleges and universities in Ethiopia. Click on a course link and a page showing information about the course is displayed. You can also search for a course by using the search box provided.</p>
                                <p><b>University Courses</b> - Courses offered by universities in Kenya. Find undergraduate, graduate and postgraduate degree courses offered in private and public universities.</p>
                                <p><b>College Courses</b> - Courses offered by colleges in Kenya. Search through a wide collection of courses offered in Ethiopia colleges. View complete information on certificate courses, diploma and higher diploma courses offered by leading colleges.</p>
                            </div>
                        </div>
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Course Category <span class="News-button"><a class="waves-effect waves-light btn" href="<?php echo base_url() . 'index.php/addcourse' ?>">Add Course</a></span></h1>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_category_box">
                                <ul class="s_category_list">
                                    <li class="catrgory_list_item"><a href="<?php echo base_url() . 'index.php/course/search?category=Degree' ?>">Degree (52)</a></li>
                                    <li class="catrgory_list_item"><a href="<?php echo base_url() . 'index.php/course/search?category=Degree' ?>">Diploma (15)</a></li>
                                    <li class="catrgory_list_item"><a href="<?php echo base_url() . 'index.php/course/search?category=Degree' ?>">Graduate Diploma (15)</a></li>
                                    <li class="catrgory_list_item"><a href="<?php echo base_url() . 'index.php/course/search?category=Degree' ?>">Higher Diploma (15)</a></li>
                                    <li class="catrgory_list_item"><a href="<?php echo base_url() . 'index.php/course/search?category=Degree' ?>">Advance Diploma (02)</a></li>
                                    <li class="catrgory_list_item"><a href="<?php echo base_url() . 'index.php/course/search?category=Degree' ?>">Pre University (85   )</a></li>
                                    <li class="catrgory_list_item"><a href="<?php echo base_url() . 'index.php/course/search?category=Degree' ?>">Certificate (20)</a></li>
                                    <li class="catrgory_list_item"><a href="<?php echo base_url() . 'index.php/course/search?category=Degree' ?>">Doctorate (20)</a></li>
                                    <li class="catrgory_list_item"><a href="<?php echo base_url() . 'index.php/course/search?category=Degree' ?>">Masters(20)</a></li>
                                    <li class="catrgory_list_item"><a href="<?php echo base_url() . 'index.php/course/search?category=Degree' ?>">Bridging(20)</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="serch_schools col m12 ">
                        <div class="row">
                        <datalist id="coursenames">
    <?php  foreach ($course as $row){ ?>
    <option value="<?php echo $row->course_name;?>"><?php echo $row->course_name;?></option>
     <?php }   ?>

</datalist>
                            <form class="col s12" action="<?php echo site_url('index.php/course/search')?>" method="post">
                                <div class="row border-b">
                                    <div class="page-heading-wrap col s12 m2">
                                        <h6 class="page-heading">Course Name:</h6>
                                    </div>
                                    <div class="input-field col s12 m3">
                                        <input id="Course_name" name="course_name" type="text" list="coursenames" class="validate">
                                        <label for="Course_name">Course Name</label>
                                    </div>


                                    <div class="input-field col s2">
                                        <button class="waves-effect waves-light btn margin-t-15" type="submit" name="search">Search</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="course_search_result">
                        <div class="row">
                            <div class="col m12">
                                <div class="collection">
                                    <h4>Course Name</h4>
                             
                                <?php
               
                                foreach ($course as $row){ ?>
                                <?php $c_id = $row->course_id;
                                        ?>
                                    <a href="<?php echo base_url().'index.php/coursedetails?id='.$c_id ?>" class="collection-item s"><?php echo $row->course_name; ?></a>
                                      <?php } ?>
                             </div>
                            </div>
                            <div>
                            
                                <!-- <li><a href="#!"><i class="fa fa-chevron-left"></i></a></li>
                                <li class="active"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="fa fa-chevron-right"></i></a></li> --><?php echo $pagination?>
                           
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

                </div>
            </div>
        </div>
<?php $this->load->view('footer'); ?>