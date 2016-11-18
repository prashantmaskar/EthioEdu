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
                
                <div class="col s12 m8 grid-example z-depth-1">
                    <div class="advertise_details">
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
                                <form id="advertiseform" method="post"action="<?php echo site_url('index.php/Advertising')?>" class="col m12" enctype="multipart/form-data">
                                    <div class=" form-group input-field col s12">
                                        <input id="Caption" name="Caption" type="text" class="validate">
                                        <label for="Caption">Name</label>
                                    </div>
                                <div class="form-group input-field col s12">
                                        <input id="Caption" name="email" type="email" class="validate">
                                        <label for="Caption">Email</label>
                                    </div>
                                      <div class="form-group input-field col s12">
                                        <input id="Caption" name="contact" type="text" class="validate">
                                        <label for="Caption">Contact</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <select class="form-control browser-default" name="catagory" >
                                            <option value="" disabled selected>Category</option>
                                            <option value="Admission">Admission</option>
                                            <option value="Departmental">Departmental</option>
                                            <option value="Entertainments">Entertainments</option>
                                            <option value="Events">Events</option>
                                            <option value="General">General</option>
                                            <option value="Part Time">Part Time</option>
                                            <option value="Full Time">Full Time</option>
                                            <option value="Sport">Sport</option>
                                            <option value="Pre Degree">Pre Degree</option>
                                            <option value="Post Degree">Post Degree</option>
                                            <option value="Scholarship">Scholarship</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <!--<label>Category</label>-->
                                    </div>
									<div class="form-group input-field col s12">
                                        <select class="form-control browser-default" name="addposition" >
                                           <option  value="" disabled="" selected="">Add Position</option>
                                                            <option value="Top">Top</option>
                                                            <option value="Left">Left</option>
                                                            <option value="Right">Right</option>
                                        </select>
                                      <!--  <label>Add Position</label>-->
                                    </div>
									<div class="form-group input-field col s12">
                                        <select class="form-control browser-default " name="paymentmethod" >
                                           <option  value="" disabled="" selected="">Payment Method</option>
                                                            <option value="1">M-Birr</option>
                                                            <option value="2">Hello-Cash</option>
                                        </select>
                                       <!-- <label>Payment Method</label>-->
                                    </div>
									<div class="form-group input-field col s12">
                                                        <input id="subject" type="text" class="validate" name="subject">
                                                        <label for="subject">Subject</label>
                                                    </div>
													

                                                    <div class="form-group file-field input-field col s12">
                                                        <div class="btn">
                                                            <span>Attach Add</span>
                                                            <input type="file" name="fileformat" multiple>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Upload Add baner">
                                                        </div>
                                                    </div>
													<div class="form-group input-field col s12">
                                                        <textarea id="message" class="materialize-textarea" name="message"></textarea>
                                                        <label for="message">Message</label>
                                                    </div> 
													 <div class="captch">
                                                     <img class="responsive-img" src="<?php echo base_url() . 'images/Captcha.png' ?>">
                                                       </div>
													<div class=" form-group input-field col s12">
                                                 <input id="captch" type="text" name="captcha" class="validate">
                                                  <label for="captch">Add Above Code</label>
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
<script type="text/javascript" src="<?php echo base_url() .'js/advertise.js' ?>"></script>

