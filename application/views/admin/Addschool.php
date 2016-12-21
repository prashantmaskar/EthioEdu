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
                                        <li><a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>">Dashboard</a>
                                        </li>
                                        
                                    </ol>
                                </div>
                            </div>
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
                    <div class="container">
                        <div class="section">
                            
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">BASIC FORM</h4>
                                            <div class="row">
                                                 <form id="addschoolform" action="<?php echo site_url('index.php/admin/Addschool')?>" method="post" enctype="multipart/form-data">
                                                    <div class="form-group input-field col s12">
                                                       <select class="form-control browser-default" name="choice">
                                                             <option value="Registration type">Registration type</option>
                                                            <option value="Normal Registration">Normal Registration</option>
                                                            <option value="Premium Registration">Premium Registration</option>

                                                        </select>

                                                    </div>
                                                    <!--<div class= "form-group input-field col s12">
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
                                                    </div>-->
                                                    <div class=" form-group input-field col s12">
                                                        <input id="School_name" name="schoolname" type="text" class="validate">
                                                        <label for="School_name">School Name</label>
                                                    </div>

                                                   <div class="form-group file-field input-field col s12">
                                        <div class="btn">
                                            <span>Attach logo</span>
                                            <input name="fileformat" type="file" multiple >
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="attach image only">
                                        </div>
                                    </div>

                                                    <div class=" form-group input-field col s12">
                                                      <select class="form-control browser-default" name="choice1">
                                                             <option value="">School catagory</option>
                                                              <option value="Kindergartens and Nursery">Kindergartens and Nursery</option>
                                                            <option value="International">International</option>
                                                             <option value="Primary">Primary</option>
                                                             <option value="Secondary">Secondary</option>
                                                             <option value="preparatory">preparatory</option>
                                                                
                                                        </select>

                                                    </div>
                                                     <div class="row">
                                                    <div class="col s12">
                                                    <div class="tokenfield">
                                                       <div class="form-group input-field col s12">
                                                         
                                                        <input type="text" class="autocomplete" name="Programoffered" id="Program_tokenfield" value="primary,Nursary "/ placeholder="Program offered">
                                                        <!--label for="facilities">Facilities</label-->
                                                       </div>
                                                   </div>
                                                  </div>
                                                     </div>


                                                    <div class="row">
                                                    <div class="col s12">
                                                    <div class="tokenfield">
                                                       <div class="form-group input-field col s12">
                                                         
                                                        <input type="text" class="autocomplete" name="tokenfield" id="tokenfield" value="Computer Study Lab,Football Pitch "/ placeholder="facilities">
                                                        <!--label for="facilities">Facilities</label-->
                                                       </div>
                                                   </div>
                                                  </div>
                                                     </div>

                                                           <div class=" form-group input-field col s12">
                                                      <select class="form-control browser-default" name="choice2">
                                                             <option value="">University</option>
                                                              
                                                              <option value="Account">Account</option>
                                                            <option value="Agriculture">Agriculture</option>
                                                             <option value="Account">Account</option>

                                                        </select>

                                                    </div>

                                                               <div class=" form-group input-field col s12">
                                                      <select class="form-control browser-default" name="choice3">

                                                             <option value="">Institute</option>
                                                            
                                                              <option value="Account">Account</option>
                                                            <option value="Agriculture">Agriculture</option>
                                                             <option value="Account">Account</option>

                                                        </select>

                                                    </div>
                                                              
                                                               <div class="form-group input-field col s12">
                                                             <select class="form-control browser-default" name="choice4">
                                                             <option value="">other catagory</option>
                                                            
                                                              <option value="Account">Aviation</option>
                                                            <option value="Arts and Design">Arts and Design</option>
                                                             <option value="Health and Beauty">Health and Beauty</option>
                                                             <option value="Counsellling and Enterprenuership">Counsellling and Enterprenuership</option>
                                                             <option value="Driving Schools">Driving Schools</option>
                                                             <option value="Language,computer and IT training school">Language,computer and IT training schools</option>
                                                             <option value="Tutorial centers">Tutorial centers</option>
                                                             <option value="Hotel,tourism and Hospitality">Hotel,tourism and Hospitality</option>
                                                             <option value="Accounts and Accountancy">Accounts and Accountancy</option>
                                                             <option value="Mass media">Mass media</option>
                                                             <option value="Music schools">Music schools</option>
                                                             <option value="Vocational/technical">Vocational/technical</option>
                                                                <option value="others">others</option>
                                                          
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
                                                            <option value="ADDIS ABABA">ADDIS ABABA</option>
                                                            <option value="OROMIA">OROMIA</option>
                                                            <option value="AMHARA">AMHARA</option>
                                                            <option value="TIGRAY">TIGRAY</option>
                                                            <option value="SNNP">SNNP</option>
                                                            <option value="SOMALI">SOMALI</option>
                                                            <option value="AFAR">AFAR</option>
                                                            <option value="BENISHANGUL-GUMUZ">BENISHANGUL-GUMUZ</option>
                                                            <option value="DIRE DAWA">DIRE DAWA</option>
                                                            <option value="GAMBELLA">GAMBELLA</option>
                                                            <option value="HORARI">HORARI</option>
                                                        </select>
                                                    </div>


                                                          <div class=" form-group input-field col s12">
                                                        <select class=" form-control browser-default" name="choice8">
                                                            <option value="" >School type</option>
                                                            <option value="public">Day only</option>
                                                            <option value="Day and night">Day and night</option>
                                                            <option value="Boarding only">Boarding only</option>
                                                            <option value="Boarding and day">Boarding and day</option>
                                                            <option value="Boarding and day/night">Boarding and day/night</option>

                                                         
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
                                                   <!--  <div id="map"class="col m12">     
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8067573.325322677!2d36.00181604982493!3d9.132349675141633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1635d0cedd6cfd2b%3A0x7bf6a67f5348c55a!2sEthiopia!5e0!3m2!1sen!2sin!4v1470819730373"  height="200" frameborder="0" style="border:0" allowfullscreen></iframe>

                                                    </div> -->
                                                    <div id="map" style="height:200px;width:100%;" ></div>
                                                    <!-- <div id="map"class="col m12">     
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8067573.325322677!2d36.00181604982493!3d9.132349675141633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1635d0cedd6cfd2b%3A0x7bf6a67f5348c55a!2sEthiopia!5e0!3m2!1sen!2sin!4v1470819730373"  height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                        
                                                    </div> -->
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
                         <link href="<?php echo base_url().'/css/bootstrap-tokenfield.css' ?>" type="text/css" rel="stylesheet" media="screen">
<link href="<?php echo base_url().'/css/bootstrap-tokenfield.min.css' ?>" type="text/css" rel="stylesheet" media="screen">
<link href="<?php echo base_url().'/css/tokenfield-typeahead.css' ?>" type="text/css" rel="stylesheet" media="screen">
<link href="<?php echo base_url().'/css/bootstrap-tokenfield.css' ?>" type="text/css" rel="stylesheet" media="screen">


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

    