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
                <div class="col s12 m8 z-depth-1 white ">

                    <div class="content_sec add-school">
                        <h1 class="add_title">Add/Edit Schools</h1>
                        <div class="instrction_box">
                            EthioEdu is the leading educational directory in Ethiopia and we offer two options for listing your institution.
                            <ul><li><strong>Free/Basic Listing</strong> - Due to workload, free listings take a longer time (Upto a month and not guaranteed) to appear online and are placed below paid/premium listings. Only basic information is published.</li>
                                <li><strong>Paid/Premium listings</strong> - Premium listings appear online within 24 hours of payment. They are usually placed among the top in the colleges listings page. We publish detailed institution's information for premium listing. The cost is  1,000 Birr per year only.</li>
                            </ul>
                        </div>
                        <div class="school_form">
                            <form class="col m12">
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Registration Type</option>
                                        <option value="1">Normal Registration</option>
                                        <option value="2">Premium Registration (1,000 Birr per year)</option>

                                    </select>
                                    <label>Registration Type</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="user_name" type="text" class="validate">
                                    <label for="User_name">User Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="name" type="text" class="validate">
                                    <label for="name">Full Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="email" type="text" class="validate">
                                    <label for="email">Email Id</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="School_name" type="text" class="validate">
                                    <label for="School_name">School Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>school Category</option>
                                        <option value="1">Account</option>
                                        <option value="2">Agriculture</option>
                                        <option value="3">Account</option>
                                    </select>
                                    <label>school Category</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>University</option>
                                        <option value="1">Account</option>
                                        <option value="2">Agriculture</option>
                                        <option value="3">Account</option>
                                    </select>
                                    <label>University</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Institute</option>
                                        <option value="1">Account</option>
                                        <option value="2">Agriculture</option>
                                        <option value="3">Account</option>
                                    </select>
                                    <label>Institute</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Other Category</option>
                                        <option value="1">Account</option>
                                        <option value="2">Agriculture</option>
                                        <option value="3">Account</option>
                                    </select>
                                    <label>Other Category</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="contact1" type="text" class="validate">
                                    <label for="contact">Phone Number </label>
                                </div>

                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Choose Country</option>
                                        <option value="1">Ethiopia</option>
                                        <option value="2">Kenya</option>
                                        <option value="3">Africa</option>
                                    </select>
                                    <label>Choose Country</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Choose City</option>
                                        <option value="1">Ethiopia</option>
                                        <option value="2">Kenya</option>
                                        <option value="3">Africa</option>
                                    </select>
                                    <label>Choose Country</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Choose Region</option>
                                        <option value="1">Ethiopia</option>
                                        <option value="2">Kenya</option>
                                        <option value="3">Africa</option>
                                    </select>
                                    <label>Choose Country</label>
                                </div>

                                <div class="input-field col s12">
                                    <input id="school_type" type="text" class="validate">
                                    <label for="password">School Type</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="1">Public</option>
                                        <option value="2">Private</option>
                                    </select>
                                    <label>School Ownership Type</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="student_population" type="text" class="validate">
                                    <label for="student_population">Student Population</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="staff" type="text" class="validate">
                                    <label for="staff">Teaching Staff</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="non_teach" type="text" class="validate">
                                    <label for="non_teach">Non-Teaching Staff</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="past_award" type="text" class="validate">
                                    <label for="past_award">Past Awards</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="year" type="text" class="validate">
                                    <label for="year">Acadamic Year</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="Fee" type="text" class="validate">
                                    <label for="Fee">Acadamic Fee</label>
                                </div>
                                <div class="input-field col s12">
                                    <textarea id="Admissios_pro" class="materialize-textarea"></textarea>
                                    <label for="Description">Admission Procedures</label>
                                </div>
                                <div class="input-field col s12">
                                    <textarea id="Description" class="materialize-textarea"></textarea>
                                    <label for="Description">Acadamic Requirement</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="scolership" type="text" class="validate">
                                    <label for="password">Scholarships</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="address" type="text" class="validate">
                                    <label for="password">Address</label>
                                </div>
                                <div id="map"class="col m12">     
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8067573.325322677!2d36.00181604982493!3d9.132349675141633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1635d0cedd6cfd2b%3A0x7bf6a67f5348c55a!2sEthiopia!5e0!3m2!1sen!2sin!4v1470819730373"  height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                                
                                </div>
                                <div class="input-field col s12">
                                    <input id="web" type="text" class="validate">
                                    <label for="password">Web Url</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="password" type="text" class="validate">
                                    <label for="password">password</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="cpassword" type="text" class="validate">
                                    <label for="cpassword">Confirm password</label>
                                </div>

                                <div class="input-field col s12">
                                    <textarea id="Description" class="materialize-textarea"></textarea>
                                    <label for="Description">Tell Us About yourself</label>
                                </div>
                                <div class="captch">
                                    <img class="responsive-img" src="<?php echo base_url() . 'images/Captcha.png' ?>">
                                </div>
                                <div class="input-field col s12">
                                    <input id="captch" type="text" class="validate">
                                    <label for="captch">Add Above Code</label>
                                </div>
                                <div class="input-field col s12">
                                    <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                                    <label for="filled-in-box">I accept terms & conditions</label>
                                </div>
                                <div class="new_account input-field col s12">
                                    <a class="btn waves-effect waves-light">Register</a>
                                    &nbsp;&nbsp;<span>Already A User? <a href="#">Login</a> </span>
                                    <p class="t20margin"><a href="#">Forgot Password?</a> </p>
                                </div>
                                <!--                                <div class="input-field col s12">
                                                                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                                                        <i class="material-icons right">send</i>
                                                                    </button>
                                                                    <button class="btn waves-effect waves-light red" type="submit" name="action">cancel
                                                                        <i class="material-icons right">cancel</i>
                                                                    </button>
                                                                </div>-->
                            </form>
                        </div>

                    </div>

                </div>
                <div class="col s12 m2 ">
                    <div class="service_col z-depth-1 darken-1">
                        <a href="#">
                            <img src="http://localhost/ETHIO/images/slider/Banner-Vertical.jpg">
                        </a>
                    </div>
                    <div class="service_col z-depth-1 darken-1">
                        <a href="#">
                            <img src="http://localhost/ETHIO/images/slider/Banner_Vertical.jpg">
                        </a>


                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('footer'); ?>