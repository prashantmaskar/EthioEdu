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
                                            <option value="">Any Age</option>
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
                                            <option value="1">Ethiopian</option>
                                            <option value="2">Ethiopian</option>
                                            <option value="3">Ethiopian</option>
                                            <option value="4">Ethiopian</option>
                                        </select>
                                        <label>Institutions</label>
                                    </div>
                                    <div class="col s12">
                                        <select ="form-control" name="level">
                                            <option value="" disabled selected>At Level Of</option>
                                            <option value="1">Anything</option>
                                            <option value="2">Student</option>
                                            <option value="3">Graduate</option>
                                        </select>
                                        <label>At Level Of</label>
                                    </div>
                                    <div class="col s12">
                                        <select class="form-control" name="interest">
                                            <option value="" disabled selected>Special Interest In</option>
                                            <option value="1">Anything</option>
                                            <option value="2">Friendship</option>
                                            <option value="3">Dating</option>
                                        </select>
                                        <label>Special Interest In</label>
                                    </div>
                                   
                                <div class="new_account input-field col s12">
                                    <button class="btn waves-effect waves-light " type="submit" name="action">FIND
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
                                    <div class="lr_link-wrap">
                                        <p><a href="<?php echo base_url() . 'index.php/sregister' ?>">Register To ETHIOEDU</a></p>
                                        <p><a href="#">Forgot password ?</a></p>
                                        <p class="text-black">All Ready User ?  <a href="#"> Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3 margin-t-15">
                    <div class="online_std z-depth-1">
                        <ul class="online_std_list">
                            <li>
                                <div class="row">
                                    <div class="col m3 s12 std_thumb">
                                        <img src="<?php echo base_url() . 'images/user.jpg' ?>">  
                                    </div>
                                    <div class="col m9 std_details">
                                        <p class="std_name"><a href="#">Sudhir Lahave</a></p>
                                        <p class="std_university">(Male)</p>
                                        <p class="std_name">Unilorin Student</p>
                                    </div>
                                </div> 
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col m3 s12 std_thumb">
                                        <img src="<?php echo base_url() . 'images/user.jpg' ?>">  
                                    </div>
                                    <div class="col m9 std_details">
                                        <p class="std_name"><a href="#">Sudhir Lahave</a></p>
                                        <p class="std_university">(Male)</p>
                                        <p class="std_name">Unilorin Student</p>
                                    </div>
                                </div> 
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col m3 s12 std_thumb">
                                        <img src="<?php echo base_url() . 'images/user.jpg' ?>">  
                                    </div>
                                    <div class="col m9 std_details">
                                        <p class="std_name"><a href="#">Sudhir Lahave</a></p>
                                        <p class="std_university">(Male)</p>
                                        <p class="std_name">Unilorin Student</p>
                                    </div>
                                </div> 
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col m3 s12 std_thumb">
                                        <img src="<?php echo base_url() . 'images/user.jpg' ?>">  
                                    </div>
                                    <div class="col m9 std_details">
                                        <p class="std_name"><a href="#">Sudhir Lahave</a></p>
                                        <p class="std_university">(Male)</p>
                                        <p class="std_name">Unilorin Student</p>
                                    </div>
                                </div> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('footer'); ?>
<!--<script type="text/javascript" src="<?php //echo base_url() .'js/connectme-validation.js' ?>"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script> -->