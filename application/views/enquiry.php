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

                    <div class="content_sec enquiry">
                        <h1 class="add_title">Make Enquiry</h1>
                       <div class="container">
                        <div class="section">
                            
                            <!--<div class="divider"></div>-->
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            
                                            <div class="row">
                                                 <form id="enquiryform" action="#" method="post">
                                                    
                                                    <div class= "form-group input-field col s12">
                                                        <input type="text"  id="school" name="school" class="form-control">
                                                        <label for="school">School</label>
                                                    </div>
                                                    <div class= "form-group input-field col s12">
                                                        <input type="text"  id="fullname" name="fullname" class="form-control">
                                                        <label for="fullname">Full Name</label>
                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <input id="email" type="text" name="email" class="form-control">
                                                        <label for="email">Email Id</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="address" type="text" class="validate" name="address">
                                                        <label for="password">Location</label>
                                                    </div>
                                                    <div id="map"class="col m12">     
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8067573.325322677!2d36.00181604982493!3d9.132349675141633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1635d0cedd6cfd2b%3A0x7bf6a67f5348c55a!2sEthiopia!5e0!3m2!1sen!2sin!4v1470819730373"  height="200" frameborder="0" style="border:0" allowfullscreen></iframe>

                                                    </div>
                                                    
                                                   <div class= "form-group input-field col s12">
                                                        <input type="text"  id="phone_number" name="phone_number" class="form-control">
                                                        <label for="phone_number">phone_number</label>
                                                    </div>
													 <div class= "form-group input-field col s12">
                                                        <input type="text"  id="subject" name="subject" class="form-control">
                                                        <label for="subject">Subject</label>
                                                    </div>
                                                    
                                                 <div class="form-group input-field col s12">
                                                        <textarea id="enquirybox" class="materialize-textarea" name="enquirybox"></textarea>
                                                        <label for="enquirybox">Enquiry</label>
                                                    </div>
                                                   

                                                     
                                                  
                                                   
                                                    <div class="input-field col s4">
                                                        <div class="input-field col s12">
                                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action"> Submit</button>
                                                             
                                    
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

<!-- <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"> 
<script type="text/javascript" src="../js/bootstrap.min.js"></script> -->

<link rel="stylesheet" type="text/css" href="../css/bootstrapValidator.css">
<script type="text/javascript" src="../js/bootstrapValidator.js"></script> 
<script type="text/javascript" src="../js/enquiry.js"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>

