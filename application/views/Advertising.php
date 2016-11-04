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
                <div class="col s12 m8 grid-example z-depth-1">
                    <div class="news_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Advertising On EthioEdu.com</h1>
                            </div>
                        </div>
                        <div class="col s12 m12 ">
                            <div class="advertise_info">
                                <p class="black-text">Ethioedu Limited runs www.ethioedu.com, Ethiopia's No1 Students' and Educational Resource Website with the highest traffic and pageviews from youths, students and prospective students across the country. With this status, we command the Ethiopia Educational Sphere. Students and youths across the country use our platform to interact and gain relevant information and resources that impact positively on their educational pursuits, hence the reason why they come over and over again.</p>
                                <h4 class="ad_sbtitle">Let's start with our Site Statistics:</h4>
                                <p class="black-text">Our website statistics is based on PURE STUDENTS, that are mostly seeking admission or already in the higher institution.</p>
                                <ul>
                                    <li> 8.5 Million page views per month[Currently]</li>
                                    <li> 2.3 Million Sessions Per Month [Average]</li>
                                </ul>
                                <h4 class="ad_sbtitle red-text bo_bor padd_b5">Let's get started... Let's know what you need. Write us using the form below</h4>
                                <form id="advertiseform" class="col m12">
                                    <div class=" form-group input-field col s12">
                                        <input id="Caption" name="Caption" type="text" class="validate">
                                        <label for="Caption">Name</label>
                                    </div>
                                <div class="form-group input-field col s12">
                                        <input id="Caption" name="email" type="email" class="validate">
                                        <label for="Caption">Email</label>
                                    </div>
                                      <div class="form-group input-field col s12">
                                        <input id="Caption" name="contact" type="number" class="validate">
                                        <label for="Caption">Contact</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <select class="form-control" name="catagory" >
                                            <option value="" disabled selected>Category</option>
                                            <option value="1">Admission</option>
                                            <option value="2">Departmental</option>
                                            <option value="3">Entertainments</option>
                                            <option value="4">Events</option>
                                            <option value="5">General</option>
                                            <option value="6">Part Time</option>
                                            <option value="7">Full Time</option>
                                            <option value="8">Sport</option>
                                            <option value="9">Pre Degree</option>
                                            <option value="10">Post Degree</option>
                                            <option value="8">Scholarship</option>
                                            <option value="8">Other</option>
                                        </select>
                                        <label>Category</label>
                                    </div>

                                    <div class="col s5 offset-s5 margin-b-10">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Send
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

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
            </div>
        </div>
       <?php $this->load->view('footer'); ?>


<link rel="stylesheet" type="text/css" href="../css/bootstrapValidator.css">
<script type="text/javascript" src="../js/bootstrapValidator.js"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>
<script type="text/javascript" src="../js/advertising-validation.js"></script>

