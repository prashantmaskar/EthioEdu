<?php  $this->load->view('header'); ?>
<meta name="viewport" content="width=device-width">
        <div class="service-wrap ">
            <div class="row">
                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1 hide-on-small-only">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1 hide-on-small-only">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
                <div class="col s12 m8 grid-example">

                    <div class="event_details col m12 z-depth-1">
                         <!-- <div class="col s12 offset-s6 hide-on-med-and-up"> <span class="Event-button col s12"><a href="<?php //echo base_url().'index.php/new_events'?>"class="waves-effect waves-light btn">
                            Post A New Event</a></span></div> -->

                        <div class="col m12 s12">
                            <span class="Event-button col s12 offset-s6 m12 offset-m8"><a href="<?php echo base_url().'index.php/new_events'?>"class="waves-effect waves-light btn">Post A New Event</a></span>
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Upcoming Events In Schools</h1>
                            </div>

                        </div>
                          <div class="col m12 s12">
                            <div class="event_sort_form col m12 s12">
                            <form id="sortevent" method="post" action="<?php echo base_url() . 'index.php/event/search' ?>">
                                <div class="col s12 m2">
                                    <p class="black-text">Sort Events:</p>
                                </div>
                                
                                <div class="input-field col s6 m5">
                                        <input id="startdate" type="date" class=" datepicker validate" name="eventd1" >
                                        <label for="Caption">Event From</label>
                                    </div>
                                <div class="input-field col s6 m5">
                                        <input id="enddate" type="date" class=" datepicker validate" name="eventd2">
                                        <label for="Caption">Event To</label>
                                    </div>
                                <div class="input-field col m12 offset-m9 s12 offset-s6">
                                         <button class="btn waves-effect waves-light" type="submit" name="searchaction">search
                                            <i class="material-icons ">search</i>
                                        </button>
                                    </div></form>
                            </div>
                        </div>
                       
                        <div class="col s12 m12 ">
                            <div class="event_list">
                            <?php
                              
                             /*     if(isset($_POST['searchaction'])){

                                    $sdate = $_POST['newsd1'];
                                    $edate = $_POST['newsd2'];

                                    $query = $this->db->query("select * from tbl_posts where post_date between '".$sdate."' and '".$edate."' and  post_type = 'event' and post_approve = 1");

                                    }else{

                                        $query = $this->db->query("select * from tbl_posts where post_type = 'event' and post_approve = 1");

                                    }  */

                                    $resultcount = count($event);
                                    if($resultcount >= 1){
                             foreach($event as $row)
                                { ?>
                           <?php $event_id = $row->post_id;
                                        ?>
                                   <div class="col m12 event_content">
                                    <div class="event_date col m2 s4 offset-s4">
                                        <div class="edate z-depth-1 red lighten-1 white-text center-align">
                                            <strong></strong><br>
                                            <span class="b_date"><?php echo $row->post_event_date; ?><span><br><?php echo $row->post_event_time;?></span><br>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="event_list_content col m10">
                                        <div class="event_count green-text">
                                            <!--<h2>2 Event Available</h2>-->
                                        </div>
                                    
                                            <div class="elist_content row ">
                                                    <div class="elist_info col m12">
                                                        <a href="<?php echo base_url()?>event_details/show_one/<?= $event_id   ?>"> <?php echo $row->post_title; ?> <span class="green-text">Add Comment</span></a><br>
                                                         
                                                        <span>Posted By:<a href="#"><?php echo $row->post_author;?></a> Happening In <a href="#"><?php echo $row->post_venue;  ?></a></span><br>
                                                        <a href="#" class="green-text">Click here for news reference</a>
                                                    </div>  
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <?php }}else{

                                        echo "Result Not Found";
                                        } ?>
                                    <?php echo $pagination; ?>
                                </div>
                            </div>
                        </div>

                    </div>
            
                <div class="col s12 m2 ">
                    <div class="service_col z-depth-1 darken-1 hide-on-small-only">
                        <a href="#">
                            <img src="<?php echo base_url().'images/slider/Banner-Vertical.jpg'?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1 darken-1 hide-on-small-only">
                        <a href="#">
                           <img src="<?php echo base_url().'images/slider/Banner-Vertical.jpg'?>">
                        </a>


                    </div>
                </div>
            </div>
        </div>
        </div>
       <?php $this->load->view('footer'); ?>