<?php  $this->load->view('header'); ?>
        <div class="connect-wrap ">
            <div class="row">
                <div class="col s12 m9">
                    <div class="connectme_form z-depth-1">
                        <div class="row">
                            <div class="col m12 s12"><h2 class="form_heading">Find Friends/Student</h2></div>
                            <div class="col m6 s12">
                                <form id="connectme" action="<?php echo base_url() . 'index.php/connectresult/search' ?>" method="post" class="row">
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
                                    <div class="form-group col s12">
                                        <select class="form-control " name="choiceage">
                                            <option value="" disabled selected>Any Age</option>
                                            <option value="16-19">16-19</option>
                                            <option value="20-25">20-25</option>
                                            <option value="26-29">26-29</option>
                                            <option value="30+">30+</option>

                                        </select>
                                        <label>Between The Age</label>
                                    </div>
                                    <div class="col s12">
                                        <select class="form-control" name="institutions">
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
                                            <option value="clubbing this weekend">clubbing this weekend</option>
                                            <option value="hanging out this weekend">hanging out this weekend</option>
                                              <option value="Being chat pals">Being chat pals</option>
                                                <option value="Flirting">Flirting</option>
                                                  <option value="Friendship">Friendship</option>
                                                    <option value="Dating">Dating</option>
                                                      <option value="Marriage">Marriage</option>
                                        </select>
                                        <label>Special Interest In</label>
                                    </div>
                                   
                                <div class="new_account input-field col s12">
                                    <button class="btn waves-effect waves-light " type="submit" name="action">FIND
                                        </button>
                                    
                                </div>
                                </form>
                            </div>
                            <div class="vr-line col m1 hide-on-small-only">
                                <img src="<?php echo base_url() . 'images/or-vertical.png' ?>">
                            </div>
                             <div class="hr-line col s12 hide-on-med-and-up">
                                <img src="<?php echo base_url() . 'images/or_horizontal.png' ?>">
                            </div>
                            <div class="col m5 s12">

                                <h3>Find User Name</h3>
                                <div class="col m12 s12">
                                    <form id="userform" method="post" action="<?php echo base_url() . 'index.php/connectresult/search' ?>">
                                        <div class="form-group input-field col s12">
                                            <input id="Username" name="username" type="text" class="validate">
                                            <label for="Username">Enter Ethioedu user name</label>
                                        </div>
                                        <div class="new_account input-field col s12">
                                            <button class="btn waves-effect waves-light " type="submit" name="action">Connect2Me
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

                
                <div class="col s12 m3 margin-t-15">
                   
                    <div class="online_std z-depth-1">
                         <center><h5>Connect to me<h5></center>
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
<!--<script type="text/javascript" src="<?php //echo base_url() .'js/connectme-validation.js' ?>"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>-->