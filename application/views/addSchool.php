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
                             <?php
    if ($this->session->flashdata('message')) {
    ?>
    <div class="message flash">
      <div class="message-data">
        <p class="success-msg"><?php echo $this->session->flashdata('message'); ?></p>
        <button class="btn success-close">Close</button>
        </div>   
        </div>
    <?php
    }
?>
                <div class="col s12 m8 z-depth-1 white ">

                    <div class="content_sec add-school">
                        <h1 class="add_title">Add/Edit Schools</h1>
                        <div class="instrction_box">
                            EthioEdu is the leading educational directory in Ethiopia and we offer two options for listing your institution.
                            <ul><li><strong>Free/Basic Listing</strong> - Due to workload, free listings take a longer time (Upto a month and not guaranteed) to appear online and are placed below paid/premium listings. Only basic information is published.</li>
                                <li><strong>Paid/Premium listings</strong> - Premium listings appear online within 24 hours of payment. They are usually placed among the top in the colleges listings page. We publish detailed institution's information for premium listing. The cost is  1,000 Birr per year only.</li>
                            </ul>
                        </div>                   

                         <div class="container">
                        <div class="section">
                            <p class="caption">Fill all required fields.</p>
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">BASIC FORM</h4>
                                            <div class="row">
                                                 <form id="homeaddschoolform" action="<?php echo site_url('index.php/addschool')?>" method="post">
                                                    <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="choice">

                                                            <option value="">Registration type</option>
                                                             <option value="Normal Registration">Normal Registration</option>
                                                            <option value="Premium Registration">Premium Registration</option>
                                                        
                                                        </select>
                                                       </div>
                                                    <div class= "form-group input-field col s12">
                                                        <input type="text"  id="user_name" name="user_name" class="form-control">
                                                        <label for="user_name">user_name</label>
                                                    </div>
                                                    <div class= "form-group input-field col s12">
                                                        <input type="text"  id="fullname" name="fullname" class="form-control">
                                                        <label for="fullname">Full Name</label>
                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <input id="email" type="text" name="email" class="form-control">
                                                        <label for="email">Email Id</label>
                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <input id="School_name" name="schoolname" type="text" class="validate">
                                                        <label for="School_name">School Name</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="cat">

                                                            <option value="">School category</option>
                                                             <option value="KINDERGARTENS and NURSERY ">KINDERGARTENS and NURSERY </option>
                                                            <option value="PRIMARY">PRIMARY</option>
                                                         <option value="PRIMARY">SECONDARY</option>
                                                          <option value="PRIMARY">PREPARATORY</option>
                                                        </select>
                                                       </div>

                                                            <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="choice2">

                                                            <option value="">University</option>
                                                             <option value="Agriculture ">Agriculture </option>
                                                            <option value="Account">Account</option>
                                                         
                                                        </select>
                                                       </div>
                                                               
                                                      <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="choice3">

                                                            <option value="">Colleges</option>
                                                             <option value="KINDERGARTENS and NURSERY ">Commerce and business </option>
                                                            <option value="PRIMARY">Computer training and IT</option>
                                                         <option value="PRIMARY">Distance education</option>
                                                          <option value="PRIMARY">Engineering</option>
                                                            <option value="PRIMARY">Medical schools</option>
                                                              <option value="PRIMARY">University-Colleges</option>
                                                                <option value="PRIMARY">Theology and bible</option>
                                                                 <option value="PRIMARY">Agriculture</option>
                                                        </select>
                                                       </div>                                                 
                                                               
                                                            <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="choice4">

                                                            <option value="">Other catagogory</option>
                                                             <option value="Account">Account </option>
                                                            <option value="Agreeculture">Agreeculture</option>
                                                        
                                                        </select>
                                                       </div>
                                                   <div class= "form-group input-field col s12">
                                                        <input type="text"  id="phone_number" name="phone_number" class="form-control">
                                                        <label for="phone_number">phone_number</label>
                                                    </div>

                                                   
                                                               <div class="form-group input-field col s12">
                                                             <select class="form-control browser-default " name="choice5">
                                                      
                                                            <option value="">Choose Country</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Africa">Africa</option>
                                                        </select>

                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="choice6">
                                                            <option value="">Choose City</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Africa">Africa</option>
                                                        </select>
                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <select class=" form-control browser-default" name="choice7">
                                                            <option value="" >Choose Region</option>
                                                            <option value="addisababa">ADDIS ABABA</option>
                                                            <option value="oromia">OROMIA</option>
                                                            <option value="amhara">AMHARA</option>
															 <option value="tigray">TIGRAY</option>
															  <option value="snnp">SNNP</option>
															   <option value="somali">SOMALI</option>
															    <option value="afar">AFAR</option>
																 <option value="ben">BENISHANGUL - GUMUZ</option>
																  <option value="diredawa">DIRE DAWA</option> 
																  <option value="gambella">GAMBELLA</option>
																   <option value="horari">HORARI</option>
                                                        </select>
                                                    </div>


                                                          <div class=" form-group input-field col s12">
                                                        <select class=" form-control browser-default" name="choice8">
                                                            <option value="" >School type</option>
                                                            <option value="Ethiopia">public</option>
                                                            <option value="Kenya">private</option>
                                                         
                                                        </select>
                                                    </div>


                                                  
                                                    <div class=" form-group input-field col s12">
                                                        <input id="student_population" name="student_population" type="text" class="validate">
                                                        <label for="student_population">Student Population</label>
                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <input id="t_staff" type="text" name="t_staff" class="validate">
                                                        <label for="staff">Teaching Staff</label>
                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <input id="non_teach" type="text" name="non_teach" class="validate">
                                                        <label for="non_teach">Non-Teaching Staff</label>
                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <input id="past_award" type="text" name="past_award" class="validate">
                                                        <label for="past_award">Past Awards</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="year" type="text" name="year" class="validate">
                                                        <label for="year">Acadamic Year</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="Fee" type="text" name="fee" class="validate">
                                                        <label for="Fee">Acadamic Fee</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <textarea id="Admissios_pro" class="materialize-textarea" name="Admissios_pro"></textarea>
                                                        <label for="Description">Admission Procedures</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <textarea id="Description" class="materialize-textarea" name="Description"></textarea>
                                                        <label for="Description">Acadamic Requirement</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="scolership" type="text" class="validate" name="scolership">
                                                        <label for="password">Scholarships</label>
                                                    </div>
                                                     <div class="form-group input-field col s12">
                                                        <textarea id="Description" class="materialize-textarea" name="tell_us"></textarea>
                                                        <label for="Description">Tell Us About yourself</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="address" type="text" class="validate" name="address">
                                                        <label for="password">Address</label>
                                                    </div>
                                                    <div id="map"class="col m12">     
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8067573.325322677!2d36.00181604982493!3d9.132349675141633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1635d0cedd6cfd2b%3A0x7bf6a67f5348c55a!2sEthiopia!5e0!3m2!1sen!2sin!4v1470819730373"  height="200" frameborder="0" style="border:0" allowfullscreen></iframe>

                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="web" type="text" name="website" class="validate">
                                                        <label for="password">Web Url</label>
                                                    </div>
                    

                                                     <div class=" form-group input-field col s12">
                                                   <input id="password" name="password" type="text"  class="validate">
                                                <label for="password">password</label>
                                                      </div>
                                                       <div class="form-group input-field col s12">
                                                      <input id="cpassword" name="cpassword" type="text" class="validate">
                                                    <label for="cpassword">Confirm password</label>
                                                      </div>
                                                      <div class="captch">
                                                     <img class="responsive-img" src="<?php echo base_url() . 'images/Captcha.png' ?>">
                                                       </div>
                                                  <div class=" form-group input-field col s12">
                                                 <input id="captch" type="text" name="captcha" class="validate">
                                                  <label for="captch">Add Above Code</label>
                                                    </div>
                                                       <div class="form-group input-field col s12">
                                                      <input type="checkbox" name="filled-in-box"class="filled-in" id="filled-in-box" checked="checked" />
                                                     <label for="filled-in-box">I accept terms & conditions</label>
                                                      </div>

                                                    <input type="hidden" name="approve_status" value="0">
                                                    <div class="input-field col s4">
                                                        <div class="input-field col s12">
                                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action"><i class="mdi-action-perm-identity"></i> Register</button>
                                                              &nbsp;&nbsp;<span>Already A User? <a href="#">Login</a> </span>
                                    <p class="t20margin"><a href="#">Forgot Password?</a> </p>
                                </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         
            </div>
        </div>
		<div class="col s12 m2 ">
                    <div class="service_col z-depth-1 darken-1">
                        <a href="#">
                            <img src="<?php echo base_url().'images/slider/Banner-Vertical.jpg'?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1 darken-1">
                        <a href="#">
                            <img src="<?php echo base_url().'images/slider/Banner_Vertical.jpg'?>">
                        </a>


                    </div>
                </div>
		</div>
		</div>
        <?php $this->load->view('footer'); ?>
<script type="text/javascript" src="<?php echo base_url() .'js/addschool.js' ?>"></script>

