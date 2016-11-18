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
                        <h1 class="add_title">Add/Edit Course</h1>
                        <div class="instrction_box">
                            EthioEdu is the leading educational directory in Ethiopia and we offer two options for listing your Course.
                            <ul><li><strong>Free/Basic Listing</strong> - Due to workload, free listings take a longer time (Upto a month and not guaranteed) to appear online and are placed below paid/premium listings. Only basic information is published.</li>
                                <li><strong>Paid/Premium listings</strong> - Premium listings appear online within 24 hours of payment. They are usually placed among the top in the colleges listings page. We publish detailed institution's information for premium listing. The cost is Ksh. 15,000 per year only.</li>
                            </ul>
                        </div>
                        <div class="school_form">
                           <form id="addcourseform" action="<?php echo site_url('index.php/addcourse')?>" method="post" class="col m12">
                                                    <div class="form-group input-field col s12">
                                                        <input id="Course_name" name="Course_name" type="text" class="validate">
                                                        <label for="Course_name">Course Name</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="Major_sub" name="Major_sub" type="text" class="validate">
                                                        <label for="Major_sub">Major Subject</label>
                                                    </div>
                                                   
													
													   <div class=" form-group input-field col s12">
                                                        <select class=" form-control browser-default" name="course_cat">
                                                            <option value="">Course Category</option>
                                                            <option value="advancediploma">Advance Diploma</option>
                                                            <option value="bridging">Bridging</option>
                                                            <option value="certificate">Certificate</option>
															<option value="degree">Degree</option>
															<option value="diploma">Diploma</option>
															<option value="graduatediploma">Graduate Diploma</option>
															<option value="higherdiploma">Higher Diploma</option>
															<option value="masters">Masters</option>
															<option value="postgraduatediploma">Post Graduate Diploma</option>
															<option value="preuniversity">Pre University</option>
                                                        </select>
                                                    </div>
                                                    <div class="col s2">
                                                        <label class="s_duration">Study Duration</label>
                                                    </div>
                                                    <div class="form-group input-field col s5">
                                                        <select class="form-control browser-default" name="duration">

                                                            <option value="">select duration</option>
                                                             <option value="year">year</option>
                                                            <option value="Month">Month</option>
                                                            <option value="Day">Day</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group input-field col s5">
                                                        <input id="course_duration" name="c_duration" type="text" class="validate">
                                                        <label for="course_duration">Course Duration</label>
                                                    </div>


                                                    <div class=" form-group input-field col s12">
                                                        <select class=" form-control browser-default" name="addschool">
                                                            <option value="">Add School</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Africa">Africa</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <select class=" form-control browser-default" name="adduniversity">
                                                            <option value="">Add University</option>
                                                            <option value="1">Ethiopia</option>
                                                            <option value="2">Kenya</option>
                                                            <option value="3">Africa</option>
                                                        </select>
                                                    </div>

                                                    <div class=" form-group input-field col s12">
                                                        <textarea id="Details" class="materialize-textarea" name="details"></textarea>
                                                        <label for="Details">Details</label>
                                                    </div>
                                                     <input type="hidden" name="approve_status" value="0">

                                <div class="col s12">
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                        <i class="material-icons right">send</i>
                                    </button>
                                    <button class="btn waves-effect waves-light red" type="submit" name="action">cancel
                                        <i class="material-icons right">cancel</i>
                                    </button>
                                </div>
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
<script type="text/javascript" src="<?php echo base_url() . 'js/addcource.js' ?>"></script>

