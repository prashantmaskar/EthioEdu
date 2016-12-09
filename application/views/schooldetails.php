<?php  $this->load->view('header'); ?>
        <div class="service-wrap ">
            <div class="row">
                <div class="col s12 m9 grid-example ">
                    <div class="row school_detail_wrap z-depth-1">
                    <?php $sch_id = $_GET['id'];
                        $query = $this->db->query("select * from tbl_school_meta where school_id = '" .$sch_id. "'");
                        
                                foreach ($query->result_array() as $row){ 
                                    
                        ?>
                        <div class="school_banner col m12">
                        <?php $img=$row['school_logo'] ?>
                            <img src="<?php echo base_url().'uploads/'.$img ?>" class="responsive-img" />

                        </div>
                        <div class="school_name-wrap col m12">
                            <div class="red col m12">
                                <h2 class="school_name col s8"><i class="material-icons dp48">verified_user</i><?php echo $row['school_name']?></h2>
                                <span class=" school-type col s4"><span><strong>Category:</strong></span> <?php echo $row['school_category']?></span>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_social">
                                <ul>
                                    <li><a href="#" class="waves-effect waves-light btn facebook darken-3"><i class="fa fa-facebook-square"></i> Facebook</a></li> 
                                    <li><a href="#" class="waves-effect waves-light btn light-blue darken-2"><i class="fa fa-envelope"></i> Mail</a></li> 

                                    <li><a href="#" class="waves-effect waves-light btn linkedin darken-3"><i class="fa fa-linkedin"></i> Linkedin</a></li> 

                                    <li><a href="#" class="waves-effect waves-light btn twitter darken-3"><i class="fa fa-twitter"></i> Twitter</a></li> 

                                    <li><a href="#" class="waves-effect waves-light btn googleplus darken-3"><i class="fa fa-google-plus"></i> Google</a></li> 

                                </ul>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_desc">
                                <h2 class="sch_det_title">Description/Background</h2>
                                <p class="sch_desc"><?php echo $row['school_desc']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Country</h2>
                                <p class="sch_country"><?php echo $row['school_country']?></p>

                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">City</h2>
                                <p class="sch_country"><?php echo $row['school_city']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Region</h2>
                                <p class="sch_country"><?php echo $row['school_region']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Type</h2>
                                <p class="sch_country"><?php echo $row['school_type']?></p>
                                <!--<ul>
                                    <li><i class="fa fa-check"></i> Day Only</li>
                                    <li><i class="fa fa-check"></i> Day & Night</li>
                                    <li><i class="fa fa-check"></i> Boarding Only</li>
                                    <li><i class="fa fa-check"></i> Boarding & Day</li>
                                </ul>-->
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Owner-Ship</h2>
                                <p class="sch_country">Public</p>
                            </div>
                        </div>
<!--                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">History</h2>
                                <p>The School was opened on 3rd&nbsp;February, 1949 with the arrival of 50 students and its formal opening ceremony was attended by many dignitaries, including</p>
                                <p>The Asantehene, Otumfuo Osei-Agyemang Prempeh II, Major C. O. Butler, Church Leaders, Chiefs and members of the Kumasi Traditional Council.</p>
                                <p>The Asantehene maintained a keen interest in the school and was a frequent attendant at the School’s Speech and Prize-Giving Days.</p>
                                <p>The College has been under the watch of 10 Headmasters since it was founded some 62 years ago.&nbsp; The first Headmaster, Rev. S. N. Pearson in his four year term set the trail blazing by making discipline and academic work his principal occupation.&nbsp; He also started to replace the old buildings of the former 52nd&nbsp;military Hospital. His successors continued to build on the solid foundation laid.</p>
                                <p>Special mention is made of Dr. T. A. Osae, first African headmaster who brought the work of his predecessors to fruition and built on it.</p>
                                <p>&nbsp;Today the success story of Prempeh College has made it a school of choice for boys across the country.&nbsp; The vision and dreams of the Monarch and the others have become a reality and today alumni of the school are serving in many positions of responsibility in and outside the country.&nbsp; They have distinguished themselves as academics, doctors, lawyers, teachers, engineers, architects, traditional rulers and as officers in the security services.&nbsp; In the political arena, the immediate past President of the Republic of Ghana, Mr. J. A. Kufour is an Amanfoכ.</p>
                                <p>The school looks into the future with hope and will continue to make the sky the limit.</p>
                            </div>
                        </div>-->
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Programs Offered</h2>
                                <p class="sch_country">Secondary Education</p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Branches</h2>
                                <ul>
                                    <li><i class="fa fa-graduation-cap "></i> Science</li>
                                    <li><i class="fa fa-graduation-cap "></i> Art</li>
                                    <li><i class="fa fa-graduation-cap "></i> Architecture</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Schools Facility</h2>
                                <ul>
                                    <li><i class="fa fa-chevron-circle-right"></i>  Basket Ball Court</li>
                                    <li><i class="fa fa-chevron-circle-right "></i> Computer Study Lab</li>
                                    <li><i class="fa fa-chevron-circle-right "></i> Football Pitch </li>
                                    <li><i class="fa fa-chevron-circle-right "></i> Science Labs </li>
                                    <li><i class="fa fa-chevron-circle-right "></i> Swimming Pool </li>
                                    <li><i class="fa fa-chevron-circle-right "></i> Design & Technology Lab </li>
                                    <li><i class="fa fa-chevron-circle-right "></i> Tennis Court </li>
                                    <li><i class="fa fa-chevron-circle-right "></i> Library </li>
                                    <li><i class="fa fa-chevron-circle-right "></i> Other </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Student Population</h2>
                                <p><?php echo $row['school_population']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Teaching Staff</h2>
                                <p><?php echo $row['teaching_staff']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Non-Teaching Staff</h2>
                                <p><?php echo $row['non_teaching_staff']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Admission Fees</h2>
                                <p><?php echo $row['school_acadamic_fee']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Admission Requirement</h2>
                                <p><?php echo $row['acadamic_requirment']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Admission Procedure</h2>
                                <p><?php echo $row['admission_procedure']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Academic Year</h2>
                                <p>August 2016</p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Past Awards</h2>
                                <p><?php echo $row['school_awards']; ?></p>
                            </div>
                        </div>                     
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Scholarships</h2>
                                <p><?php echo $row['school_scholarship']; ?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Address</h2>
                                <div id="address"><p><?php echo $row['school_address']; ?></p></div>
                                <div id="map" style="height:200px;width:100%;" ></div>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Website</h2>
                                <a href="#" target="_blank"><?php echo $row['school_url']?></a>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Contact</h2>
                                <p><i class="fa fa-phone"></i> Ph.No. <?php echo $row['school_number']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Inquiry</h2>
                                <p>Want More Details about School? &nbsp;<a href="<?php echo base_url() ?>index.php/enquiry?id=<?php echo $sch_id; ?>&name=<?php echo $row['school_name']?>" class="waves-effect waves-light btn red darken-3">Make Enquiry</a></p>
                            </div>
                        </div>
                        <div class="coment_box row">
                            <div class="col m12">
                                <h2>Add New Comment</h2>
                            </div>
                            <div class="coment_form">
                                <form id="schooldetails" action="#" method="post">
                                    <div class="input-field col s6">
                                        <input id="Name" type="text" name="username" class="validate">
                                        <label for="Name">Your Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="Subject" name="subject" type="text" class="validate">
                                        <label for="Subject">Subject</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <textarea id="Comment" name="comment" class="materialize-textarea"></textarea>
                                        <label for="Comment">Comment</label>
                                    </div>
                                    <div class="col m12">
                                        <button class="waves-effect waves-light btn red darken-1">Save</button>
                                    </div>
                                </form>
                            </div>


                        </div>

<?php } ?>

                    </div>
                </div>
                <div class="col s12 m3 ">
                  <div class="latest_news_wrap ">
                        <h1 class="red_label_title">Latest News</h1>
                        <ul class="latest_news_list">
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                             <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                             <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                             <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                             <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                             <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript" src="<?php echo base_url().'js/schooldetails.js'?>"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>
<script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: -34.397, lng: 150.644}
        });
        var geocoder = new google.maps.Geocoder();

       // document.getElementById('address').addEventListener("focusout", function() {
            var address = "<?php echo $row['school_address'] ?>";
           // alert(address);
            if(address.length>2){
                geocodeAddress(geocoder, map);
            }
          
      //  });
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = "<?php echo $row['school_address'] ?>";
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