<?php  $this->load->view('header'); ?>
        <div class="cresult-wrap ">
            <div class="row">
                <div class="col s12 m9">
                    <div class="result_list_wrap z-depth-1">
                        <h5 class="red-text">250 profile Connect2u</h5>
                      <!--  <ul class="pagination margin-b-10">
                            <li><a href="#!"><i class="fa fa-chevron-left"></i></a></li>
                            <li class="active"><a href="#!">1</a></li>
                            <li class="waves-effect"><a href="#!">2</a></li>
                            <li class="waves-effect"><a href="#!">3</a></li>
                            <li class="waves-effect"><a href="#!">4</a></li>
                            <li class="waves-effect"><a href="#!">5</a></li>
                            <li class="waves-effect"><a href="#!"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>  -->
                        <?php //echo $pagination; ?>
                        <ul class="cresult_list">
                       <?php  $resultcount = count($conresult);
                       if($resultcount >= 1 ){
                        foreach ($conresult as $row){ ?>
                        <?php $avatar = $row->user_avatar;  ?>
                            <li>
                                <div class="row">
                                    <div class="col m2 s12 std_thumb">
                                        <img src="<?php echo base_url() ?>uploads/<?php echo $avatar?>">  
                                    </div>
                                    <div class="col m9 std_details">
                                        <p class="std_name"><a href="<?php echo base_url(); ?>index.php/userdashboard?uid=<?php echo $row->user_id; ?>"><?php echo $row->first_name; ?> <span><?php echo $row->last_name; ?></span></a></p>
                                        <p class="std_age">Age : <span><strong><?php echo $row->user_age?>| <?php echo $row->user_gender; ?></strong></span></p>
                                        <p class="std_school">Level: <span><strong><?php echo $row->user_level; ?></strong></span></p>
                                        <p class="std_interaest">he is Interested In <?php echo $row->user_interest; ?> <span><a href="<?php echo base_url(); ?>index.php/userdashboard?uid=<?php echo $row->user_id; ?>">View Full profile</a></span></p>
                                    </div>
                                </div> 
                            </li> 
                            <?php }}else{

                                echo"Result Not Found";
                                } ?>
                            
                        </ul>
                      <!--  <ul class="pagination margin-b-10">
                        </ul> -->
                        <?php echo $pagination; ?>
                    </div>
                    <div class="row">
                        <div class="col s12 m12">
                            <div class="connectme_form z-depth-1" style="width: 100%;">
                                <div class="row">
                                    <div class="col m12 s12"><h2 class="form_heading">Find Friends/Student</h2></div>
                                    <div class="col m6 s12">
                                        <form class="row" action="<?php echo base_url() . 'index.php/connectresult/search' ?>" method="post">
                                            <div class=" col s4">
                                                <label for="Caption">I am Looking For:</label>
                                            </div>
                                            <div class=" col s4">
                                                <input type="radio" value="Male" id="Guy" name="gender"/>
                                                <label for="Guy">Guy</label>
                                            </div>
                                            <div class=" col s4">
                                                <input type="radio" value="Female" id="Chic" name="gender"/>
                                                <label for="Chic">Chic</label>
                                            </div>
                                            <div class="col s12">
                                                <select name="choiceage">
                                                    <option value="" disabled selected>Any Age</option>
                                                    <option value="16-19">16-19</option>
                                                    <option value="20-25">20-25</option>
                                                    <option value="26-29">26-29</option>
                                                    <option value="30+">30+</option>

                                                </select>
                                                <label>Between The Age</label>
                                            </div>
                                            <div class="col s12">
                                                <select name="institutions">
                                                    <option value="" disabled selected>Institutions</option>
                                                    <option value="Ethiopian">Ethiopian</option>
                                                    <option value="Ethiopian">Ethiopian</option>
                                                    <option value="Ethiopian">Ethiopian</option>
                                                    <option value="Ethiopian">Ethiopian</option>
                                                </select>
                                                <label>Institutions</label>
                                            </div>
                                            <div class="col s12">
                                                <select class="form-control" name="level">
                                                    <option value="" disabled selected>At Level Of</option>
                                                    <option value="Anything">Anything</option>
                                                    <option value="Student">Student</option>
                                                    <option value="Graduate">Graduate</option>
                                                </select>
                                                <label>At Level Of</label>
                                            </div>
                                            <div class="col s12">
                                                <select class="form-control" name="interest">
                                                    <option value="" disabled selected>Special Interest In</option>
                                                    <option value="Anything">Anything</option>
                                                    <option value="Friendship">Friendship</option>
                                                    <option value="Dating">Dating</option>
                                                </select>
                                                <label>Special Interest In</label>
                                            </div>
                                            <div class="col m12">
                                                <button class="btn waves-effect waves-light" type="submit" name="action">Find

                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="vr-line col m1">
                                        <img src="<?php echo base_url() . 'images/or-vertical.png' ?>">
                                    </div>
                                    <div class="col m5 s12">

                                        <h3>Find User Name</h3>
                                        <div class="col m12 s12">
                                            <form method="post" action="<?php echo base_url() . 'index.php/connectresult/search' ?>">
                                                <div class="input-field col s12">
                                                    <input id="Username" name="username" type="text" class="validate">
                                                    <label for="Username">Enter Ethioedu user name</label>
                                                </div>
                                                <div class="col m12">
                                                    <button class="btn waves-effect waves-light" type="submit" name="action">Connect2Me
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col m12">
                                        <?php if (!$this->session->userdata('logged_in')){?>
                                            <div class="lr_link-wrap">
                                                <p><a href="<?php echo base_url() . 'index.php/sregister' ?>">Register To ETHIOEDU</a></p>
                                                <p><a href="<?php echo base_url().'/login/fergot_password'?>">Forgot password ?</a></p>
                                                <p class="text-black">All Ready User ?  <a href="<?php echo base_url() . 'index.php/login' ?>"> Login</a></p>
                                            </div>
                                            <?php } ?>
                                        </div>
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
                                        <p class="std_name"><a href="<?php echo base_url(); ?>index.php/userdashboard?uid=<?php echo $row['user_id']; ?>"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></a></p>
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
        </div>
       <?php $this->load->view('footer'); ?>