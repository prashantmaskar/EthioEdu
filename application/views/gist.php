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
                <div class="col s12 m7 grid-example">
                    <div class="news_details row z-depth-1">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">  Featured Gist from Student Bloggers<span class="News-button"><a class="waves-effect waves-light btn"href="<?php echo site_url('index.php/reportgist')?>">Report Gist</a></span> </h1>
                            </div>
                            <div class="gistbrdr_bottom">
                            <p class="black-text">Gist us about your day. Become an Eye Withness, Report your School, Riots, Queues, SUG, Stress, Roads, Groove, Parties, Events, Student Celebrities, Lectures, Tests, Exams, Hook-ups, break-ups, Outings... Anything.</p>
                            </div>
                        </div>
                        <div class="col s12 m12 ">
                            <div class="gist_wrap">


                            <?php
                                foreach ($gist as $row){ ?>
                                <div class="gits_content row">
                                    <div class="gist_ainfo">
                                        <div class="col s1">
                                        <?php $gistattachment = $row['user_avatar']; ?>
                                            <img class="circle responsive-img valign profile-image" src="<?php echo base_url();?>uploads/<?php echo $gistattachment; ?>"> 

                                        </div>
                                        <div class="col s11">
                                            <div class="gist_dinfo">
                                            <?php if(! $row['post_date'] == ""){?>
                                                <span class="green-text">On <?php echo $row['post_date'];?></span>
                                                <?php } ?>
                                                <?php if(! $row['post_time'] == ""){?>
                                                <span class="green-text">At <?php echo $row['post_time'];?></span>
                                                <?php } ?>
                                                By <a href="<?php echo base_url(); ?>userdashboard?uid=<?php echo $row['user_id'];?>"><?php echo $row['post_author'];?></a>
                                                <span>Writes for School</span>
                                            </div>
                                            <div class="gist_title">
                                                <h1><a href="#"><?php echo $row['post_title'];?></a></h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="git_img col m12">
                                          <?php 
                                          $gist_attachment = $row['post_attachment']; 
                                               $gist_id = $row['post_id'];
                                               $query1 = $this->db->query("select count(*) as row_count from tbl_postlikes where post_id = '".$row['post_id']."'");
                                                $query2 = $this->db->query("select count(*) as row_count from tbl_postresponse where post_id = '".$row['post_id']."'");
                                           ?>
                                          <img class="materialboxed" src="<?php echo base_url() . 'uploads/'.$gist_attachment ?>">
                                        
                                        <span class="see_more"><a href="#">See More Photos</a></span>
                                    </div>
                                    <div class="col m12 git_desc">
                                        <p class="black-text"><?php echo $row['post_desc']; ?></p>
                                    </div>
                                    <div class="social_share col m12">
                                        <span><a href="#">Like(<?php echo $query1->result()[0]->row_count; ?> )</a></span>&nbsp;
                                        <span><a href="<?php echo base_url()?>gist_details/show_one/<?= $gist_id   ?>"><?php echo $query2->result()[0]->row_count; ?> Comments</a></span>&nbsp;
                                        <span><a href="<?php echo base_url()?>gist_details/show_one/<?= $gist_id   ?>">Reply</a></span>
                                    </div>
                                </div>
                               <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col s12 m3 z-depth-1">
                    <div class="featured_gist row">
                        <div class="col m12">
                            <h3 class="featured_gist_title">Student just gisted about..</h3>
                        </div>
                        <div class="fgist_list_wrap col m12">
                            <ul class="latest_news_list">
                              <?php  
                               foreach ($gist as $row){ ?>
                                <li class="Latest_news_content">
                                    <div class="row">
                                        <div class="fgist col s12">
                                            <div class="fgist_info col s12">
                                            <?php if(! $row['post_date'] == ""){?>
                                                <span class="green-text">On <?php echo $row['post_date'];?></span>
                                                <?php } ?>
                                                <?php if(! $row['post_time'] == ""){?>
                                                <span class="green-text">At <?php echo $row['post_time'];?></span>
                                                <?php } ?>
                                                By <a href="<?php echo base_url(); ?>userdashboard?uid=<?php echo $row['user_id'];?>""><?php echo $row['post_author'];?></a>
                                                <span><?php echo $row['post_category'];?></span>
                                            </div>
                                            <div class="fgist_thumb col s3">
                                                <?php $gistattachment = $row['user_avatar']; ?>
                                            <img class="circle responsive-img valign profile-image" src="<?php echo base_url();?>uploads/<?php echo $gistattachment; ?>"> 
                                            </div>
                                            <div class="fgist_title col s9">
                                                <h1><a href="#"><?php echo $row['post_title'];?></a></h1>

                                            </div>

                                        </div>
                                    </div>
                                </li>  
                                <?php } ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <?php $this->load->view('footer'); ?>