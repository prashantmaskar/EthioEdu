<?php  $this->load->view('header'); ?>
        <div class="service-wrap ">
            <div class="row">
                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <?php foreach ($banners as $key => $value) {
                            if($value['advertise_position']=='Left')
                                 echo "<img src='../uploads/".$value['advertise_attachment']."'>";
                                    }?>
                            <!-- <img src="<?php //echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>"> -->

                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#"> 
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>"> 
                        </a>
                    </div>
                </div>
                <div class="col s12 m8 z-depth-1 white ">

                    <div class="slider">
                        <ul class="slides">
                            <li>
                                <img src="<?php echo base_url() . 'images/slider/bg-6.jpg' ?>"> <!-- random image -->
                                <div class="caption center-align">
                                    <h3>WEL-Come To ETHIEDUO</h3>
                                    <h5 class="light grey-text text-lighten-3">We provide the best Eduction Option.</h5>
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url() . 'images/slider/eduban2.jpg' ?>"> <!-- random image -->
                                <div class="caption left-align">
                                    <h3>Largest INFO OF COLLAGE</h3>
                                    <h5 class="light grey-text text-lighten-3">Get info of all collage in Ethiopia.</h5>
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url() . 'images/slider/eduban3.jpg' ?>"> <!-- random image -->
                                <div class="caption right-align">
                                    <h3>Get Best Deal All Time</h3>
                                    <h5 class="light grey-text text-lighten-3">Each Time We Are Best.</h5>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="content_sec">
                        <div class="row">
                            <div class="col sm12 m4 z-pad z-depth-1">
                                <div class="news_container ">
                                    <h5>
                                        Latest News
                                    </h5>
                                    <ul>
                                        <?php 
                                        $query = $this->db->query("select * from tbl_posts where post_type = 'news' and post_approve = 1");

                                        foreach ($query->result_array() as $row){

                                        $news_id = $row['post_id'];
                                         ?>
                                        <li><a href="<?php echo base_url().'index.php/news_detail?id='.$news_id ?>"><?php echo $row['post_title']; ?></a></li>
                                        <?php } ?>
                                    </ul>

                                </div>
                            </div>
                            <div class="col sm12 m4 z-pad z-depth-1"><h5>
                                    Search For School
                                </h5>
                                <ul><?php
                                      $query = $this->db->query("select school_name,school_id from tbl_school_meta where school_approve = 1");
                                       foreach ($query->result_array() as $row){ 
                                          $sid = $row['school_id'];




                                        ?>

                                    <li><a href="<?php echo base_url().'index.php/schooldetails?id='.$sid?>"><?php echo $row['school_name'];?></a></li>
                                  
                                   <?php } ?>

                                </ul></div>
                            <div class="col sm12 m4  z-depth-1"><h5>
                                  Latest Project Topics
                                </h5>
                                <ul><?php 
                                 $query = $this->db->query("select * from tbl_projects where project_approve = 1");
                                    foreach ($query->result_array() as $row){ 
                                          $pro_id = $row['project_id'];
                                 ?>

                                   <li><a href="<?php echo base_url() . 'index.php/Projectlist?id='.$pro_id ?>"><?php echo $row['project_title']; ?></a></li> 
                                     <?php } ?>
                                    <li class=" center-align"><a class=" center-align waves-effect waves-light btn red darken-2" href="<?php echo base_url().'/index.php/schools'?>">READ MORE</a>
                                    </li>
                                        
                                </ul></div>

                        </div>

                    </div>
                    <div class="content_sec">
                        <div class="row">
                            <div class="col sm12 m4 z-pad z-depth-1">
                                <div class="event_container ">
                                    <h5>
                                        Coming Events
                                    </h5>
                                    <ul> 
                                        <?php 
                                          $query = $this->db->query("select * from tbl_posts where post_type = 'event' and post_approve = 1");

                                        foreach ($query->result_array() as $row){ 

                                          $event_id = $row['post_id'];
                                            ?>

                                        <li><div class="row"> <div class="col l4 blue date"><div class="calender_bar"><span class="day"><?php echo $row['post_date']; ?></span><br><span class="monthyear"><?php echo $row['post_time']; ?></span></div></div> <div class="col l8 "><a href="<?php echo base_url().'index.php/event_details?id='.$event_id?>"><?php echo $row['post_title']; ?></a><div class="happen_loc"><span>Happning at:<a href="#"><?php echo $row['post_venue'];  ?></a></span></div><div class="event_by"><span><?php echo $row['post_author'];?></span></div> </div></li>
                                       
                                        </li>
                                          <?php } ?>

                                    </ul>

                                </div>
                            </div>
                            <div class="col sm12 m4 z-pad z-depth-1"><h5>
                                    List Of Vacancy/Tender
                                </h5>
                                <ul> <?php 
                                 $query = $this->db->query("select * from tbl_vacancy where vacancy_approve = 1");
                                    foreach ($query->result_array() as $row){ 
                                          $vac_id = $row['vacancy_id'];

                                            ?>
                                    <li><a href="<?php echo base_url() . 'index.php/vacancy-details?id='.$vac_id ?>"><?php echo $row['vacancy_name']; ?></a>
                                    
                                    </li>
                                             <?php } ?>

                                </ul></div>
                            <div class="col sm12 m4  z-depth-1"><h5>
                                   questions and answers
                                </h5>
                                <ul><?php 
                                     $query = $this->db->query("select * from tbl_questions where question_approve=1");
                                     foreach ($query->result_array() as $row){
                                        $que_id=$row['question_id'];
                                     ?>
                                     <li><a href="<?php echo base_url() . 'index.php/QuesAns?id='.$que_id ?>"><?php echo $row['question_desc']; ?></a></li> <?php } ?>
                                    <li class=" center-align"><a class=" center-align waves-effect waves-light btn red darken-2">READ MORE</a>
                                    </li>
                                   

                                </ul></div>

                        </div>

                    </div>
                    <div class="featured_schools col s12 m12">

                        <h5>Featured Schools</h5>
                        <div class="featured_slider">
                            <div class="item"><img src="<?php echo base_url().'images/slider_upper/featured_sc1.jpg' ?>"></div>
                            <div class="item"><img src="<?php echo base_url().'images/slider_upper/featured_sc2.jpg' ?>"></div>
                            <div class="item"><img src="<?php echo base_url().'images/slider_upper/featured_sc3.png' ?>"></div>
                            <div class="item"><img src="<?php echo base_url().'images/slider_upper/featured_sc2.jpg' ?>"></div>

                        </div>
                    </div>
                </div>
                <div class="col s12 m2 ">
                    <div class="service_col z-depth-1 darken-1">
                        <a href="#">
                            <?php foreach ($banners as $key => $value) {
                            if($value['advertise_position']=='Right')
                                 echo "<img src='../uploads/".$value['advertise_attachment']."'>";
                                    }?>
                            <!-- <img src="<?php //echo base_url().'images/slider/Banner-Vertical.jpg' ?>"> -->
                        </a>
                    </div>
                    <div class="service_col z-depth-1 darken-1">
                        <a href="#">
                            <img src="<?php echo base_url().'images/slider/Banner_Vertical.jpg' ?>">
                        </a>


                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('footer'); ?>
