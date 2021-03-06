<?php  $this->load->view('header'); ?>
<meta name="viewport" content="width=device-width">
        <div class="service-wrap ">
            <div class="row">
                <div class="col s12 m2  grid-example">
                    <div class="service_col z-depth-1  darken-1 hide-on-small-only">
                        <a href="#">
                            <?php foreach ($banners as $key => $value) {
                            if($value['advertise_position']=='Left')
                                 echo "<img src='../uploads/".$value['advertise_attachment']."'>";
                                    }?>
                            <!-- <img src="<?php //echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>"> -->

                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1 hide-on-small-only ">
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
                                    <h3>WEL-Come To ETHIOEDU</h3>
                                    <h5 class="light grey-text text-lighten-3">We provide the best Education Option.</h5>
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url() . 'images/slider/eduban2.jpg' ?>"> <!-- random image -->
                                <div class="caption left-align">
                                    <h3>Largest INFO OF COLLEGE</h3>
                                    <h5 class="light grey-text text-lighten-3">Get info of all college in Ethiopia.</h5>
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
                            <div class="col s12 m4 z-pad z-depth-1">
                                <div class="news_container ">
                                    <h5>
                                        Latest News
                                    </h5>
                                    <ul>
                                        <?php 
                                        //$query = $this->db->query("select * from tbl_posts where post_type = 'news' and post_approve = 1 limit 10");

                                        foreach ($news as $row){

                                        $news_id = $row['post_id'];
                                         ?>
                                        <li><a href="<?php echo base_url()?>news_detail/show_one/<?= $news_id   ?>" data-toggle="tooltip" title="<?php echo $row['post_title'];?>"><?php $desc=$row['post_title']; $limitdesc = substr($desc,0,70);
                                        $etc = '...';
                                        echo $limitdesc."".$etc;?></a></li>
                                        <?php } ?>
                                         <li class=" center-align"><a class=" center-align waves-effect waves-light btn red darken-2" href="<?php echo base_url().'/index.php/News'?>">READ MORE</a>
                                    </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col s12 m4 z-pad z-depth-1">
                               <div class="row">
                                <h5>
                                    Search For School
                                </h5>
                                <ul><?php
                                      $query = $this->db->query("select school_name,school_id from tbl_school_meta where school_approve = 1 ORDER BY school_date DESC,school_time DESC limit 10");
                                       foreach ($query->result_array() as $row){ 
                                          $sid = $row['school_id'];
                                        ?>

                                    <li><a href="<?php echo base_url()?>Schooldetails/show_one/<?= $sid   ?>" data-toggle="tooltip" title="<?php echo $row['school_name'];?>"><?php $desc=$row['school_name']; $limitdesc = substr($desc,0,70);
                                        $etc = '...';
                                        echo $limitdesc."".$etc;?></a></li>
                                  
                                   <?php } ?>
                                   <li class=" center-align"><a class=" center-align waves-effect waves-light btn red darken-2" href="<?php echo base_url().'/index.php/schools'?>">READ MORE</a>
                                    </li>

                                </ul>
                                </div>
                            </div>
                            <div class="col s12 m4 z-pad z-depth-1">
                                  <div class="row">
                                <h5>

                                  Latest Project Topics
                                </h5>
                                <ul><?php 
                                 $query = $this->db->query("select * from tbl_projects where project_approve = 1  ORDER BY project_date DESC , project_time DESC limit 10");
                                    foreach ($query->result_array() as $row){ 
                                          $pro_id = $row['project_id'];
                                 ?>

                                   <li><a href="<?php echo base_url() . 'index.php/Projectlist?id='.$pro_id ?>" data-toggle="tooltip" title="<?php echo $row['project_title'];?>"><?php $desc=$row['project_title']; $limitdesc = substr($desc,0,70);
                                        $etc = '...';
                                        echo $limitdesc."".$etc;?></a></li> 
                                     <?php } ?>
                                    <li class=" center-align"><a class=" center-align waves-effect waves-light btn red darken-2" href="<?php echo base_url().'/index.php/Projectlist'?>">READ MORE</a>
                                    </li>
                                        
                                </ul>
                                   </div>
                            </div>

                        </div>

                    </div>
                    <div class="content_sec">
                        <div class="row">
                            <div class="col s12 m4 z-pad z-depth-1">
                                <div class="event_container ">
                                    <h5>
                                        Coming Events
                                    </h5>
                                    <ul> 
                                        <?php 
                                          $query = $this->db->query("select * from tbl_posts where post_type = 'event' and post_approve = 1 ORDER BY tbl_posts.post_date DESC,tbl_posts.post_time  DESC limit 5");
                                              //print_r($query->result_array());
                                        foreach ($query->result_array() as $row){ 

                                          $event_id = $row['post_id'];
                                            ?>

                                        <li><div class="row"> <div class="col l4 blue date"><div class="calender_bar"><span class="day"><?php echo $row['post_event_date']; ?></span><br><span class="monthyear"><?php echo $row['post_event_time']; ?></span></div></div> <div class="col l8 "><a href="<?php echo base_url()?>event_details/show_one/<?= $event_id   ?>" data-toggle="tooltip" title="<?php echo $row['post_title'];?>"><?php $desc=$row['post_title']; $limitdesc = substr($desc,0,40);
                                        $etc = '...';
                                        echo $limitdesc."".$etc; ?></a><div class="happen_loc"><span>Happning at:<a href="#"><?php echo $row['post_venue'];  ?></a></span></div><div class="event_by"><span><?php //echo $row['post_author'];?></span></div> </div></li>
                                       
                                        </li>
                                          <?php } ?>
                                          <li class=" center-align"><a class=" center-align waves-effect waves-light btn red darken-2" href="<?php echo base_url().'/index.php/event'?>">READ MORE</a>
                                    </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col s12 m4 z-pad z-depth-1"><h5>
                                    List Of Vacancy/Tender
                                </h5>
                                <ul> <?php 
                                // $query = $this->db->query("select * from tbl_vacancy where vacancy_approve = 1 limit 10");
                                    foreach ($previous_vacancy as $row){ 
                                          $vac_id = $row['vacancy_id'];

                                            ?>
                                    <li><a href="<?php echo base_url() . 'index.php/vacancy-details?id='.$vac_id ?>" data-toggle="tooltip" title="<?php echo $row['vacancy_name'];?>"><?php $desc=$row['vacancy_name']; $limitdesc = substr($desc,0,70);
                                        $etc = '...';
                                        echo $limitdesc."".$etc; ?></a>
                                    
                                    </li>
                                             <?php } ?>
                                             <li class=" center-align"><a class=" center-align waves-effect waves-light btn red darken-2" href="<?php echo base_url().'/index.php/vactender'?>">READ MORE</a>
                                    </li>


                                </ul></div>
                            <div class="col s12 m4 z-pad z-depth-1"><h5>
                                   questions and answers
                                </h5>
                                <ul><?php 
                                 $query = $this->db->query("select * from tbl_questions where question_approve=1 limit 10");
                                    //$query = $this->db->query("select * from tbl_questions where question_approve=1 ORDER BY question_date DESC,question_time DESC limit 10");
                                     //$query = $this->db->query("select tbl_questions.* ,tbl_userresponse.question_id question_id from tbl_questions LEFT JOIN tbl_userresponse on tbl_userresponse.question_id=tbl_questions.question_id where tbl_userresponse.question_id = (SELECT MAX(question_id) FROM tbl_userresponse WHERE question_id = tbl_userresponse.question_id) AND question_approve=1 limit 10");

                                     foreach ($query->result_array() as $row){
                                        $que_id=$row['question_id'];
                                        $query1 = $this->db->query("select count(*) as row_count from tbl_userresponse where question_id = '".$que_id."'");
                                         //$query1 = $this->db->query("select count(*) as row_count from tbl_userresponse where question_id = '".$que_id."' and response_like = '1'");
                                     ?>
                                     <li><?php echo $row['question_category']; ?>:<a href="<?php echo base_url() . 'index.php/QuesAns?id='.$que_id ?>" data-toggle="tooltip" title="<?php echo $row['question_desc'];?>"><?php $desc=$row['question_desc'];$limitdesc = substr($desc,0,70);
                                        $etc = '...';
                                        echo $limitdesc."".$etc; ?>(<?php echo $query1->result()[0]->row_count;?>)</a>     <a href="<?= base_url() ?>ansQues/show_one/<?= $que_id   ?>" >
                                          
                                  
                                     <p class="green-text">Ans this</p></a></li> <?php } ?>
                                    <li class=" center-align"><a class=" center-align waves-effect waves-light btn red darken-2" href="<?php echo base_url().'/index.php/QuesAns'?>">More Question</a>
                                    </li>
                                   

                                </ul></div>

                        </div>

                    </div>
                    <div class="featured_schools col s12 m12">

                        <h5>Featured Schools</h5>
                        <div class="featured_slider">
                            <?php  foreach ($homeschool as $row){ 
                                          $sid = $row['school_id']; ?>
                            <div class="item"><a href="<?php echo base_url()?>Schooldetails/show_one/<?= $sid   ?>"><img src="<?php echo base_url();?>uploads/<?php echo $row['school_logo']; ?>"></a></div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="col s12 m2 ">
                    <div class="service_col z-depth-1 darken-1 hide-on-small-only">
                        <a href="#">
                            <?php foreach ($banners as $key => $value) {
                            if($value['advertise_position']=='Right')
                                 echo "<img src='../uploads/".$value['advertise_attachment']."'>";
                                    }?>
                            <!-- <img src="<?php //echo base_url().'images/slider/Banner-Vertical.jpg' ?>"> -->
                        </a>
                    </div>
                    <div class="service_col z-depth-1 darken-1 hide-on-small-only">
                        <a href="#">
                            <img src="<?php echo base_url().'images/slider/Banner_Vertical.jpg' ?>">
                        </a>


                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('footer'); ?>
