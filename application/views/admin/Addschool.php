<?php  $this->load->view('admin/header'); ?>
        <!--start main-->
        <div id="main">
            <div class="wrapper">
                <?php  $this->load->view('admin/sidebar'); ?>
                <section id="content">
                    <div id="breadcrumbs-wrapper">
                        <!-- Search for small screen -->
                        <div class="header-search-wrapper grey hide-on-large-only">
                            <i class="mdi-action-search active"></i>
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <h5 class="breadcrumbs-title">Add School</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">Add School</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
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
                                                 <form id="addschoolform" action="<?php echo site_url('index.php/admin/Addschool')?>" method="post">
                                                    <div class="form-group input-field col s12">
                                                       <select class="form-control browser-default" name="choice">
                                                             <option value="">Registration type</option>
                                                            <option value="Normal Registration">Normal Registration</option>
                                                            <option value="Premium Registration (1,000 Birr per year)">Premium Registration (1,000 Birr per year)</option>

                                                        </select>

                                                    </div>
                                                    <div class= "form-group input-field col s12">
                                                        <input type="text"  id="user_name" name="user_name" class="form-control">
                                                        <label for="user_name">User Name</label>
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
                                                    <div class=" form-group input-field col s12">
                                                      <select class="form-control browser-default" name="choice1">
                                                             <option value="">School catagory</option>
                                                              <option value="Account">Account</option>
                                                            <option value="Agriculture">Agriculture</option>
                                                             <option value="Account">Account</option>
                                                                
                                                        </select>

                                                    </div>

                                                           <div class=" form-group input-field col s12">
                                                      <select class="form-control browser-default" name="choice2">
                                                             <option value="">University</option>
                                                              <option value="">School catagory</option>
                                                              <option value="Account">Account</option>
                                                            <option value="Agriculture">Agriculture</option>
                                                             <option value="Account">Account</option>

                                                        </select>

                                                    </div>

                                                               <div class=" form-group input-field col s12">
                                                      <select class="form-control browser-default" name="choice3">

                                                             <option value="">Institute</option>
                                                             <option value="">School catagory</option>
                                                              <option value="Account">Account</option>
                                                            <option value="Agriculture">Agriculture</option>
                                                             <option value="Account">Account</option>

                                                        </select>

                                                    </div>
                                                              
                                                               <div class="form-group input-field col s12">
                                                             <select class="form-control browser-default" name="choice4">
                                                             <option value="">other catagory</option>
                                                             <option value="">School catagory</option>
                                                              <option value="Account">Account</option>
                                                            <option value="Agriculture">Agriculture</option>
                                                             <option value="Account">Account</option>

                                                          
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
                                                    <div class=" form-group input-field col s12">
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
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Africa">Africa</option>
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

                                                    <div class="form-group input-field col s12">
                                                        <textarea id="Description" class="materialize-textarea" name="tell_us"></textarea>
                                                        <label for="Description">Tell Us About yourself</label>
                                                    </div>
                                                     <input type="hidden" name="approve_status" value="0">
                                                    <div class="input-field col s4">
                                                        <div class="input-field col s12">
                                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action"><i class="mdi-action-perm-identity"></i> Register</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                </section>
                            </div>
                        </div>
                         <?php  $this->load->view('admin/footer'); ?>
                         <script type="text/javascript" src="<?php echo base_url().'/js/admin/admin-addschool-validate.js' ?>"></script>
