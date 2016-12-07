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
                                            <?php
                        
                                foreach ($related_res as $row){ 

                                            ?>
                                            <div class="row">
                                                 <form id="enquiryform" action="#" method="post">
                                                    
                                                    <div class= "form-group input-field col s12">
                                                        <input type="text"  id="school" name="school" value="<?php echo $_GET['name']; ?>" class="form-control" readonly>
                                                        <label for="school">School</label>
                                                    </div>
                                                    <div class= "form-group input-field col s12">
                                                        <input type="text"  id="fullname" name="fullname" value="<?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?>" class="form-control" readonly>
                                                        <label for="fullname">Full Name</label>
                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <input id="email" type="text" value="<?php echo $row['user_email']; ?>" name="email" class="form-control" readonly>
                                                        <label for="email">Email Id</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="address" type="text" class="validate" name="address">
                                                        <label for="password">Location</label>
                                                    </div>
                                                    <div id="map" style="height:200px;width:100%;" ></div>
                                                    <!-- <div id="map"class="col m12">     
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8067573.325322677!2d36.00181604982493!3d9.132349675141633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1635d0cedd6cfd2b%3A0x7bf6a67f5348c55a!2sEthiopia!5e0!3m2!1sen!2sin!4v1470819730373"  height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                        
                                                    </div> -->
                                                    <div class="form-group input-field col s12">
                                                        <input id="web" type="text" name="website" class="validate">
                                                        <label for="password">Web Url</label>
                                                    </div>
                                                   <div class= "form-group input-field col s12">
                                                        <input type="text"  id="phone_number" value="<?php echo $row['mobile_no']; ?>" name="phone_number" class="form-control" readonly>
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
                                                   <input type="hidden" name="sid" value="<?php echo $_GET['id']; ?>">
                                                    <div class="input-field col s4">
                                                        <div class="input-field col s12">
                                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action"> Submit</button>
                                                             
                                    
                                </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
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
<script type="text/javascript" src="<?php echo base_url() .'/js/enquiry.js' ?>"></script>


<script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: -34.397, lng: 150.644}
        });
        var geocoder = new google.maps.Geocoder();

        document.getElementById('address').addEventListener("focusout", function() {
            var address = document.getElementById('address').value;
            if(address.length>2){
                geocodeAddress(geocoder, map);
            }
          
        });
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCntmJ5TdbgO9HQ-fsPqVYtmxuuYMcQKwE&callback=initMap">
    </script>

