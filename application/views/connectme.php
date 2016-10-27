<?php  $this->load->view('header'); ?>
        <div class="connect-wrap ">
            <div class="row">
                <div class="col s12 m9">
                    <div class="connectme_form z-depth-1">
                        <div class="row">
                            <div class="col m12 s12"><h2 class="form_heading">Find Friends/Student</h2></div>
                            <div class="col m6 s12">
                                <form id="connectme" action="#" method="post" class="row">
                                    <div class=" col s4">
                                        <label for="Caption">I am Looking For:</label>
                                    </div>
                                    <div class=" col s4">
                                        <input type="checkbox" name="Caption[]" id="Guy" />
                                        <label for="Guy">Guy</label>
                                    </div>
                                    <div class=" col s4">
                                        <input type="checkbox" name="caption[]" id="Chic" />
                                        <label for="Chic">Chic</label>
                                    </div>
                                    <div class="col s12">
                                        <select name="choiceage">
                                            <option value="" disabled selected>Any Age</option>
                                            <option value="1">16-19</option>
                                            <option value="2">20-25</option>
                                            <option value="3">26-29</option>
                                            <option value="4">30+</option>

                                        </select>
                                        <label>Between The Age</label>
                                    </div>
                                    <div class="col s12">
                                        <select >
                                            <option value="" disabled selected>Institutions</option>
                                            <option value="1">Ethiopian</option>
                                            <option value="2">Ethiopian</option>
                                            <option value="3">Ethiopian</option>
                                            <option value="4">Ethiopian</option>
                                        </select>
                                        <label>Institutions</label>
                                    </div>
                                    <div class="col s12">
                                        <select >
                                            <option value="" disabled selected>At Level Of</option>
                                            <option value="1">Anything</option>
                                            <option value="2">Student</option>
                                            <option value="3">Graduate</option>
                                        </select>
                                        <label>At Level Of</label>
                                    </div>
                                    <div class="col s12">
                                        <select >
                                            <option value="" disabled selected>Special Interest In</option>
                                            <option value="1">Anything</option>
                                            <option value="2">Friendship</option>
                                            <option value="3">Dating</option>
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
                                    <form>
                                        <div class="input-field col s12">
                                            <input id="Username" type="text" class="validate">
                                            <label for="Username">Enter Ethioedu user name</label>
                                        </div>
                                        <div class="col m12">
                                            <a btn="btn waves-effect waves-light" type="submit" name="action">Connect2Me
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
		
		