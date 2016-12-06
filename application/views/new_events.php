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

                    <div class="content_sec new_events">
                        <h1 class="add_title">Post New Event</h1>
                        <div class="instrction_box">
                            EthioEdu is the leading educational directory in Ethiopia and we offer post event facility
                           <!-- <ul><li><strong>Free/Basic Listing</strong> - Due to workload, free listings take a longer time (Upto a month and not guaranteed) to appear online and are placed below paid/premium listings. Only basic information is published.</li>
                                <li><strong>Paid/Premium listings</strong> - Premium listings appear online within 24 hours of payment. They are usually placed among the top in the colleges listings page. We publish detailed institution's information for premium listing. The cost is  1,000 Birr per year only.</li>
                            </ul>-->
                        </div>
                        <div class="new_events_form">
                           <form id="postevent" method="post" action="<?php echo site_url('index.php/new_events')?>" class="col m12" enctype="multipart/form-data">
                              <!-- <div class="form-group input-field col s12">
                                        <input id="event_name" name="event_name" type="text" class="validate">
                                        <label for="Caption"> Event Name</label>
                                </div>-->
                               <div class="form-group input-field col s12">
                                    <input id="event_title" name="event_title" type="text" class="validate">
                                    <label for="Caption">Event Title</label>
                                </div>
                                <div class="form-group input-field col s12">
                                    <input id="event_venue" name="event_venue" type="text" class="validate">
                                    <label for="Caption">Event Happening in</label>
                                </div>
                                
                                <!--<div class="form-group input-field col s12">
                                    <input id="subject" type="text" name="subject" class="validate">
                                    <label for="Subject">Subject</label>
                                </div>-->
								 <div class="form-group file-field input-field col s12">
                                        <div class="btn">
                                            <span>Attach Photo</span>
                                            <input name="avatar" type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload Photo">
                                        </div>
                                    </div>
									
								  <div class="form-group input-field col s12">
                                    <textarea id="description" name="Description" class="materialize-textarea"></textarea>
                                    <label for="Caption">Description</label>
                                </div>
                                <!-- <div class="form-group input-field col s12">
                                        <input id="date" type="date" name="date" class="datepicker">
                                        <label for="date">Date of Posting</label>
                                    </div>-->
								
                                <div class="form-group input-field col s12">
                                    <input id="postedby" name="postedby" type="text" class="validate">
                                    <label for="Caption">Posted by</label>
                                </div>
                                <input type="hidden" name="post_type" value="event">
                                <input type="hidden" name="approve_status" value="0">
                           
                                <div class="new_account input-field col s12">
                                    <button class="btn waves-effect waves-light red" type="submit" name="action">Submit
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
<script type="text/javascript" src="<?php echo base_url() .'js/events-validate.js' ?>"></script>
                                    
