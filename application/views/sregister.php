<?php  $this->load->view('header'); ?>
        <div class="regist-wrap ">
            <div class="row">
                <div class="col s12 m9">
                    <div class="regist_form z-depth-1">
                        <div class="row">
                            <div class="col m12 s12"><h2 class="form_heading">Register as a Member</h2></div>
                            <div class="col m12 s12">
                                <div class="instrction_box">
                                    <p><strong>Brief Instruction</strong></p>
                                    <p>1.Registration is open to Aspirants,students & Graduates.</p>
                                    <p>2.Aspirants should select the institution they intend to get into.</p>
                                    <p>3.Graduates should select the institute they graduated from.</p>
                                </div>
                                <form class="row" action="<?php echo base_url(). 'index.php/csregister'?>">
                                    <h4 class="red-text">Community Information</h4>

                                    <div class="col s12">
                                        <select>
                                            <option value="" disabled selected>Select your school type</option>
                                            <option value="1">Anything</option>
                                            <option value="2">Friendship</option>
                                            <option value="3">Dating</option>
                                        </select>
                                        <label>Institutes</label>
                                    </div>
                                    <div class="col s12">
                                        <select>
                                            <option value="" disabled selected>Select School</option>
                                            <option value="1">Anything</option>
                                            <option value="2">Friendship</option>
                                            <option value="3">Dating</option>
                                        </select>
                                        <label>School</label>
                                    </div>
                                    <div class="col s12">
                                        <select>
                                            <option value="" disabled selected>Select Level </option>
                                            <option value="1">Anything</option>
                                            <option value="2">Friendship</option>
                                            <option value="3">Dating</option>
                                        </select>
                                        <label>Level</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="Caption" type="text" class="validate">
                                        <label for="Caption">Department</label>
                                    </div>
                                    <h4 class="red-text">Login Information</h4>
                                    <div class="input-field col s12">
                                        <input id="Caption" type="text" class="validate">
                                        <label for="Caption">Username</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="Caption" type="text" class="validate">
                                        <label for="Caption">password</label>
                                    </div>
                                     <div class="input-field col s12">
                                        <input id="Caption" type="text" class="validate">
                                        <label for="Caption"> verify password</label>
                                    </div>
                                      <div class=" col s2">
                                          <p class="right-align">Connect2Me</p>
                                    </div>  <div class=" col s8">
                                        <input type="checkbox" id="Chic" />
                                        <label for="Chic">Enable Connect2me! Allow my profile to be viewed so people can connect2me</label>
                                    </div>
                                    <div class="col m12 margin-t-15 center-align">
                                        <button class="btn waves-effect waves-light red" type="submit" name="action">Register:continue

                                        </button>
                                    </div>
                                </form>
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
                                        <img src="http://localhost/ETHIO/images/user.jpg">  
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
                                        <img src="http://localhost/ETHIO/images/user.jpg">  
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
                                        <img src="http://localhost/ETHIO/images/user.jpg">  
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
                                        <img src="http://localhost/ETHIO/images/user.jpg">  
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





<script type="text/javascript" src="../js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="../css/bootstrapValidator.css">
<script type="text/javascript" src="../js/bootstrapValidator.js"></script>