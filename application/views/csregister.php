<?php  $this->load->view('header'); ?>
        <div class="regist-wrap ">
            <div class="row">
                <div class="col s12 m9">
                    <div class="regist_form z-depth-1">
                        <div class="row">
                            <div class="col m12 s12"><h2 class="form_heading">Register as a Member: Final Step</h2></div>
                            <div class="col m12 s12">

                                <form class="row">
                                    <h4 class="red-text">personal Information</h4>
                                    <div class="input-field col s12">
                                        <input id="first_name" type="text" class="validate">
                                        <label for="Caption"> first Name</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="last_name" type="text" class="validate">
                                        <label for="Caption"> Last Name</label>
                                    </div>
                                    <div class="col s12">
                                        <select>
                                            <option value="" disabled selected>Select gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>

                                        </select>
                                        <label>Gender</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="mobile" type="text" class="validate">
                                        <label for="Caption">Mobile Number</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="email" type="text" class="validate">
                                        <label for="Caption">Email Id</label>
                                    </div>
                                    <div class="file-field input-field col s12">
                                        <div class="btn">
                                            <span>Attach Photo</span>
                                            <input type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload Photo">
                                        </div>
                                    </div>


                                    <h4 class="red-text">Connect2Me Information</h4>

                                    <div class="input-field col s12">
                                        <input id="date" type="date" class="datepicker">
                                        <label for="date">Date of Birth</label>
                                    </div>
                                    <div class="col s12">
                                        <select>
                                            <option value="" disabled selected>Currently Single</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>

                                        </select>
                                        <label>Currently</label>
                                    </div>
                                    <div class="col s12">
                                        <select>
                                            <option value="" disabled selected>Interested In</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>

                                        </select>
                                        <label>Interested In</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <textarea id="aboutme" class="materialize-textarea"></textarea>
                                        <label for="aboutme">About Me</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <textarea id="myinterest" class="materialize-textarea"></textarea>
                                        <label for="myinterest">My Interests</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <textarea id="myhobby" class="materialize-textarea"></textarea>
                                        <label for="myhobby">My Hobby</label>
                                    </div>
                                    <div class="col m12 margin-t-15 center-align">
                                        <button class="btn waves-effect waves-light red" type="submit" name="action">Register
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