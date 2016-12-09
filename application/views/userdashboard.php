<?php  $this->load->view('header'); ?>
        <div class="udetails-wrap">
            <div class="row">
                <div class="col s12 m9 margin-t-15">
                    <div class="udetail_container  ">
                        <div class="row">
                         <?php $sessid= $this->session->userdata('suserid');
                         $sessname = $this->session->userdata('susername');

                        $query = $this->db->query("select tbl_users.username, tbl_users.first_name, tbl_users.last_name, tbl_users.user_email, tbl_users.user_role, tbl_user_meta.school_type, tbl_user_meta.user_school, tbl_user_meta.user_level, tbl_user_meta.user_dept, tbl_user_meta.user_gender, tbl_user_meta.mobile_no, tbl_user_meta.user_avatar, tbl_user_meta.marital_status, tbl_user_meta.user_age, tbl_user_meta.interested_in, tbl_user_meta.about_user, tbl_user_meta.user_interest, tbl_user_meta.user_hobby from tbl_users INNER JOIN tbl_user_meta On tbl_users.user_id = tbl_user_meta.user_id where tbl_users.user_id = '" .$sessid. "'");
                        
                                foreach ($query->result_array() as $row){ 
                                  $pimg = $row['user_avatar']; 
                                 ?>
                            <div class="col m4 s12">
                                <div class="uprofile_container z-depth-1 card-panel">
                                <div class="user-pic-name">
                                <img src="<?php echo base_url();?>uploads/<?php echo $pimg; ?>" class="user-img circle"> 
                                <h2 class="user-name-title red-text"><?php echo $row['username']; ?></h2> 
                                </div>
                                <div class="user-info-content">
                                <p class="user-university">Graduate of Science in<a href="#"> <?php echo $row['user_school']; ?></a></p>
                                <p class="user-brifinfo">Popularly Known as <?php echo $row['username']; ?>, his age <?php echo $row['user_age']; ?>, <?php echo $row['marital_status']; ?> and interested in <?php echo $row['interested_in']; ?>.</p>
                                <p class="user-about"><span class="red-text">About Me: &nbsp;</span>Hi i am <?php echo $row['first_name']; ?></p>
                                <p class="user-interest"><span class="red-text">My Interest:&nbsp;</span><?php echo $row['user_interest']; ?></p>
                               <p class="user-hobby"><span class="red-text">My Hobby:&nbsp;</span><?php echo $row['user_hobby']; ?></p>
                                <p class="user-contact">
                                <span class="red-text">Contact Me:&nbsp;</span>
                                <p class="user-phone"><span class="red-text">Phone :&nbsp;</span><?php echo $row['mobile_no']; ?></p>
                                <p class="user-mail"><span class="red-text">Mail :&nbsp;</span><?php echo $row['user_email']; ?></p>
                                </p>
                                </div>
                                </div>
                            </div>
                            <?php
                            $query = $this->db->query("select user_id, post_date, post_time, post_title, post_type as type, post_id as id from tbl_posts where post_approve = 1 and user_id = '".$sessid."'");

                            ?>
                            <div class="col m8 s12 ">
                              <div class="row">
                                  <div class="col s12 m12 card-panel">
                                      <div class="container-header">
                                      <?Php //print_r($query->result_array()); ?>
                                          <?php foreach($query->result_array() as $row){ 
                                            $id = $row['id'];
                                            ?>
                                            <?php if($row['type'] == 'event'){?>
                                          <div class="row no-margin">
                                              <div class="col s1">
                                                  <img src="<?php echo base_url().'images/user.jpg'?>" class=" user-icon circle"> 
                                              </div>
                                              <div class="col s9">
                                                  <p><?php echo $sessname; ?>  Added <a href="<?php echo base_url() . 'index.php/event_details?id='.$id?>"><?php echo $row['post_title']; ?></a> Event </p>
                                                  <p class="activity-date grey-text">Posted On: <?php echo $row['post_date']; ?> at <?php echo $row['post_time']; ?> </p>
                                              </div>
                                          </div>    
                                          <?php } ?>
                                          <?php if($row['type'] == 'news'){?>
                                          <div class="row no-margin">
                                              <div class="col s1">
                                                  <img src="<?php echo base_url().'images/user.jpg'?>" class=" user-icon circle"> 
                                              </div>
                                              <div class="col s9">
                                                  <p><?php echo $sessname; ?>  Added <a href="<?php echo base_url() . 'index.php/news_detail?id='.$id?>"><?php echo $row['post_title']; ?></a> News </p>
                                                  <p class="activity-date grey-text">Posted On: <?php echo $row['post_date']; ?> at <?php echo $row['post_time']; ?> </p>
                                              </div>
                                          </div>    
                                          <?php } ?>
                                          <?php if($row['type'] == 'gist'){?>
                                          <div class="row no-margin">
                                              <div class="col s1">
                                                  <img src="<?php echo base_url().'images/user.jpg'?>" class=" user-icon circle"> 
                                              </div>
                                              <div class="col s9">
                                                  <p><?php echo $sessname; ?>  Added <a href="<?php echo base_url() . 'index.php/gist'?>"><?php echo $row['post_title']; ?></a> Gist </p>
                                                  <p class="activity-date grey-text">Posted On: <?php echo $row['post_date']; ?> at <?php echo $row['post_time']; ?> </p>
                                              </div>
                                          </div>    
                                          <?php } ?>
                                          <?php } ?>
                                      </div>
                                      <div class="container-content"></div>
                                  </div>
                      

                              </div>
                        </div>

                    </div>
                </div>
            </div>
                <div class="col s12 m3 margin-t-15">
                    <div class="online_std z-depth-1">
                        <ul class="online_std_list">
                            <?php 
//print_r($related_users);
                       foreach ($related_res as $row){ ?>
                            <li>
                            <?php $pimg = $row['user_avatar']; ?>
                                <div class="row">
                                    <div class="col m3 s12 std_thumb">
                                        <img class="circle responsive-img valign profile-image" src="<?php echo base_url();?>uploads/<?php echo $pimg; ?>">
                                    </div>
                                    <div class="col m9 std_details">
                                        <p class="std_name"><a href="#"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></a></p>
                                        <p class="std_university"><?php echo $row['user_gender']; ?></p>
                                        <p class="std_name"><?php echo $row['user_school']; ?></p>
                                    </div>
                                </div> 
                            </li>
                            <?php } ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

       <?php $this->load->view('footer'); ?>