

 <?php $this->load->view('header');?>
<div class="sdetails-wrap">
    <div class="row">
        <div class="col s12 m9 margin-t-15">
            <div class="udetail_container  ">
                <div class="row">
                    <div class="col m12 s12 card-panel edituser ">
                    <h1 class="page-title">Update Your School</h1>
                        <div class="basic-info">
                                <p><strong>Brif Instruction</strong></p>
                                <p>
                                1. Aspirants should select the institution they intend to get into.<br>
                                2. Graduates should select the institution they graduated from.<br>
                                3. First select your institution then wait for the page to reload the list of schools. Once the page reloads, you can now 
                                </p>
                        </div>
                        <?php if(isset($_GET['id'])){$sch_id = $_GET['id'];}
                      /*  $query = $this->db->query("select tbl_users.username, tbl_users.first_name, tbl_users.last_name, tbl_users.user_email, tbl_school_meta.school_id,tbl_school_meta.registration_type,tbl_school_meta.school_name,tbl_school_meta.school_logo,tbl_school_meta.school_category,tbl_school_meta.school_university,tbl_school_meta.school_institute,tbl_school_meta.other_category,tbl_school_meta.school_number,tbl_school_meta.school_country,tbl_school_meta.school_city,tbl_school_meta.school_region,tbl_school_meta.school_type,tbl_school_meta.school_population,tbl_school_meta.teaching_staff,tbl_school_meta.non_teaching_staff,tbl_school_meta.school_awards,tbl_school_meta.school_acadamic_year,tbl_school_meta.school_acadamic_fee,tbl_school_meta.admission_procedure,tbl_school_meta.acadamic_requirment,tbl_school_meta.school_scholarship,tbl_school_meta.school_address,tbl_school_meta.school_url,tbl_school_meta.school_desc,tbl_school_meta.school_date,tbl_school_meta.school_time,tbl_school_meta.school_approve from tbl_users INNER JOIN tbl_school_meta On tbl_users.user_id = tbl_school_meta.user_id where school_id = '" .$sch_id. "'

"); */                /*      print_r($school_details);*/
                        
                                foreach ($school_details as $row){ 
                                     $logoattachment =  $row['school_logo'];
                                    /* echo $row['school_facility'];*/
                        ?>
            <form id="addschoolform" action="<?php echo site_url('index.php/edituserschool')?>" method="post" enctype="multipart/form-data">
                                                    <div class="form-group input-field col s12">
                                                       <select class="form-control browser-default" name="choice">
                                                        <?php  $options = $row['registration_type']; ?>
                                                             <option value="">Registration type</option>
                                                            <option value="Normal Registration" <?php if($options=="Normal Registration") echo 'selected="selected"'; ?>>Normal Registration</option>
                                                            <option value="Premium Registration" <?php if($options=="Premium Registration") echo 'selected="selected"'; ?>>Premium Registration (1,000 Birr per year)</option>

                                                        </select>

                                                    </div>
                                                    
                                                   <div class= "form-group input-field col s12">
                                                        <input type="text"  id="user_name" name="user_name" class="form-control" value="<?php  echo $row['username'];?>" readonly>
                                                        <label for="user_name">User Name</label>
                                                    </div>
                                                  <div class= "form-group input-field col s12">
                                                        <input type="text"  id="firstname" name="firstname"  value="<?php echo $row['first_name'];?>"class="form-control" readonly>
                                                        <label for="firstname">First Name</label>
                                                    </div>
                                                     <div class= "form-group input-field col s12">
                                                        <input type="text"  id="lastname" name="lastname" value="<?php echo $row['last_name'];?>"  class="form-control" readonly>
                                                        <label for="lastname">Last Name</label>
                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <input id="email" type="text" name="email" class="form-control" value="<?php  echo $row['user_email'];?>" readonly>
                                                        <label for="email">Email Id</label>
                                                    </div>
                                                    

                                                    <div class=" form-group input-field col s12">
                                                        <input id="School_name" name="schoolname" type="text" value="<?php  echo $row['school_name'];?>"  class="validate">
                                                        <label for="School_name">School Name</label>
                                                    </div>
                                                    <?php if($row['school_logo']!=""){?>
                                                         <div class="form-group file-field input-field col s12">
                                                        <div style="position: relative;display: inline-block;">
                                                            <img class="edit-attach" src="http://localhost/ETHIO/uploads/<?php  echo $row['school_logo'];?>" height="42px" style="width:auto !important;" width="auto">
                                                            <a  href="javascript:void(0);" onclick="deleted(<?php echo $sch_id;?>,<?php echo "'$logoattachment'"; ?>);" style="background: red;
                                     padding: 5px;
                                  border-radius: 10px;
                                   color: #fff;
                                   position: absolute;
                                    top: 0px;
                                right: 0px;"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                        </div></div>
                                                    <?php }?>
                                                         
                                                       <!--  <?php //echo $row['school_logo']; ?>" -->
                                                   <div class="form-group file-field input-field col s12">
                                        <div class="btn">
                                            <span>Attach logo</span>
                                            <input name="fileformat" type="file"  multiple >
                                       </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" name="imagename" type="text" placeholder="attach image only" value="<?php echo $row['school_logo']; ?>">
                                        </div>
                                    </div>

                                                    <div class=" form-group input-field col s12">
                                                    <?php  $options = $row['school_category']; ?>
                                                      <select class="form-control browser-default" name="choice1">
                                                             <option value="">School catagory</option>
                                                              <option value="Account" <?php if($options=="Account") echo 'selected="selected"'; ?>>Account</option>
                                                            <option value="Agriculture" <?php if($options=="Agriculture") echo 'selected="selected"'; ?>>Agriculture</option>
                                                             <option value="Account" <?php if($options=="Account") echo 'selected="selected"'; ?>>Account</option>
                                                                
                                                        </select>

                                                    </div>

                                                           <div class=" form-group input-field col s12">
                                                             <?php  $options = $row['school_university']; ?>
                                                      <select class="form-control browser-default" name="choice2">
                                                             <option value="">University</option>
                                                             <option value="Account" <?php if($options=="Account") echo 'selected="selected"'; ?>>Account</option>
                                                            <option value="Agriculture" <?php if($options=="Agriculture") echo 'selected="selected"'; ?>>Agriculture</option>
                                                             <option value="Account" <?php if($options=="Account") echo 'selected="selected"'; ?>>Account</option>

                                                        </select>

                                                    </div>

                                                               <div class=" form-group input-field col s12">
                                                      <select class="form-control browser-default" name="choice3">
                                                       <?php  $options = $row['school_institute']; ?>

                                                             <option value="">Institute/College</option>
                                                              <option value="Account" <?php if($options=="Account") echo 'selected="selected"'; ?>>Account</option>
                                                            <option value="Agriculture" <?php if($options=="Agriculture") echo 'selected="selected"'; ?>>Agriculture</option>
                                                             <option value="Account" <?php if($options=="Agriculture") echo 'selected="selected"'; ?>>Account</option>

                                                        </select>

                                                    </div>

                                                              
                                                               <div class="form-group input-field col s12">
                                                             <select class="form-control browser-default" name="choice4">
                                                             <?php  $options = $row['other_category']; ?>

                                                            <option value="">Other catagory</option>
                                                              <option value="Account" <?php if($options=="Account") echo 'selected="selected"'; ?>>Account</option>
                                                            <option value="Agriculture" <?php if($options=="Agriculture") echo 'selected="selected"'; ?>>Agriculture</option>
                                                             <option value="Account" <?php if($options=="Agriculture") echo 'selected="selected"'; ?>>Account</option>


                                                          
                                                        </select></div>
                                                <div class="row">
                                                    <div class="col s12">
                                                       <div class="tokenfield">
                                                         <div class="form-group input-field col s12">
                                                         
                                                         <input type="text" class="autocomplete" name="tokenfield" id="tokenfield" value="<?php echo $row['school_facility'];?>" placeholder="facilities">
                                                    
                                                         </div>
                                                      </div>
                                                   </div>
                                             </div>

                                                    
                                                   <div class= "form-group input-field col s12">
                                                        <input type="text"  id="phone_number" name="phone_number"  class="form-control" value="<?php echo $row['school_number'];?>">
                                                        <label for="phone_number">phone_number</label>
                                                    </div>

                                                   
                                                               <div class="form-group input-field col s12">
                                                             <select class="form-control browser-default " name="choice5">
                                                       <?php  $options = $row['school_country']; ?>
                                                            <option value="">Choose Country</option>
                                                            <option value="Ethiopia" <?php if($options=="Ethiopia") echo 'selected="selected"'; ?>>Ethiopia</option>
                                                            <option value="Kenya" <?php if($options=="Kenya") echo 'selected="selected"'; ?>>Kenya</option>
                                                            <option value="Africa" <?php if($options=="Africa") echo 'selected="selected"'; ?>>Africa</option>
                                                        </select>

                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <select class="form-control browser-default" name="choice6">
                                                        <?php  $options = $row['school_city']; ?>
                                                             <option value="">Choose City</option>
                                                            <option value="Ethiopia" <?php if($options=="Ethiopia") echo 'selected="selected"'; ?>>Ethiopia</option>
                                                            <option value="Kenya" <?php if($options=="Kenya") echo 'selected="selected"'; ?>>Kenya</option>
                                                            <option value="Africa" <?php if($options=="Africa") echo 'selected="selected"'; ?>>Africa</option>
                                                        </select>
                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <select class=" form-control browser-default" name="choice7">
                                                         <?php  $options = $row['school_region']; ?>
                                                            <option value="">Choose Region</option>
                                                            <option value="Ethiopia" <?php if($options=="Ethiopia") echo 'selected="selected"'; ?>>Ethiopia</option>
                                                            <option value="Kenya" <?php if($options=="Kenya") echo 'selected="selected"'; ?>>Kenya</option>
                                                            <option value="Africa" <?php if($options=="Africa") echo 'selected="selected"'; ?>>Africa</option>
                                                        </select>
                                                    </div>


                                                          <div class=" form-group input-field col s12">
                                                        <select class=" form-control browser-default" name="choice8">
                                                         <?php  $options = $row['school_type']; ?>
                                                            <option value="" >School type</option>
                                                            <option value="public" <?php if($options=="public") echo 'selected="selected"'; ?>>public</option>
                                                            <option value="private" <?php if($options=="private") echo 'selected="selected"'; ?>>private</option>
                                                         
                                                        </select>
                                                    </div>


                                                  
                                                    <div class=" form-group input-field col s12">
                                                        <input id="student_population" name="student_population" type="text" value="<?php  echo $row['school_population'];?>" class="validate">
                                                        <label for="student_population">Student Population</label>
                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <input id="t_staff" type="text" name="t_staff" value="<?php  echo $row['teaching_staff'];?>" class="validate">
                                                        <label for="staff">Teaching Staff</label>
                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <input id="non_teach" type="text" name="non_teach" value="<?php  echo $row['non_teaching_staff'];?>" class="validate">
                                                        <label for="non_teach">Non-Teaching Staff</label>
                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <input id="past_award" type="text" name="past_award" value="<?php  echo $row['school_awards'];?>" class="validate">
                                                        <label for="past_award">Past Awards</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="year" type="text" name="year" value="<?php  echo $row['school_acadamic_year'];?>" class="validate">
                                                        <label for="year">Acadamic Year</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="Fee" type="text" name="fee" value="<?php  echo $row['school_acadamic_fee'];?>" class="validate">
                                                        <label for="Fee">Acadamic Fee</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <textarea id="Admissios_pro" class="materialize-textarea" name="Admissios_pro"><?php echo $row['admission_procedure'];?></textarea>
                                                        <label for="Description">Admission Procedures</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <textarea id="Description" class="materialize-textarea" name="Description"><?php echo $row['acadamic_requirment'];?></textarea>
                                                        <label for="Description">Acadamic Requirement</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="scolership" type="text" value="<?php  echo $row['school_scholarship'];?>" class="validate" name="scolership">
                                                        <label for="password">Scholarships</label>
                                                    </div>
                                                   <div class="col m12">
                                                  <div class="school_country">
                                                 <h2 class="sch_det_title">Address</h2>
                                                   <div id="address"><?php echo $row['school_address']; ?></p>
                                              <div id="map" style="height:200px;width:100%;" ></div>
                                                  </div>
                                              </div></div>
                                                    
                                                    <div class="form-group input-field col s12">
                                                        <input id="web" type="text" name="website" value="<?php  echo $row['school_url'];?>" class="validate">
                                                        <label for="password">Web Url</label>
                                                    </div>

                                                    <div class="form-group input-field col s12">
                                                        <textarea id="Description" class="materialize-textarea" name="tell_us"><?php echo $row['school_desc'];?></textarea>
                                                        <label for="Description">Tell Us About yourself</label>
                                                    </div>
                                                     <div class="form-group input-field col s6">
                                                        <input id="date" name="date" type="date" value="<?php echo $row['school_date'];?>" class="datepicker">
                                                        <label for="date">Date</label>
                                                    </div>
                                                     <div class="form-group input-field col s6">
                                                        <input id="time" name="time" type="text" value="<?php echo $row['school_time'];?>">
                                                        <label for="date">Time</label>
                                                    </div>
                                                    <input value="<?php echo $row['school_id']; ?>" name="school_id" type="hidden">
                                                          <input type="hidden" name="approve_status" value="0">
                                                    <div class="input-field col s4">
                                                        <div class="input-field col s12">
                                                            <button class="btn cyan waves-effect waves-light margin-b-10" type="submit" name="action"><i class="mdi-action-perm-identity"></i> Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>


        <div class="col s12 m3 margin-t-15">
            <div class="online_std z-depth-1">
                <ul class="online_std_list">
                    
                            <li>
                             
                                <div class="row">
                                    <div class="col m3 s12 std_thumb">
                                        <img class="circle responsive-img valign profile-image" src="<?php //echo base_url();?>uploads/<?php //echo $pimg; ?>"> 
                                    </div>
                                    <div class="col m9 std_details">
                                        <p class="std_name"><a href="#"><?php echo $row['first_name']; ?> <?php //echo $row['last_name']; ?></a>Santosh</p>
                                        <p class="std_university">Male</p>
                                        <p class="std_name">Anything</p>
                                    </div>
                                </div> 
                            </li>
                           
                </ul>
            </div>
        </div>
    </div>
    </div>


<?php $this->load->view('footer'); ?>

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

<script type="text/javascript" src="<?php echo base_url() . 'js/edituser.js' ?>"></script>
                        <script>

            function deleted(id,userimg)
            {
                var deleteuserimg_id = id;
                //alert(deleteuserimg_id);
                var image = userimg;
            if (confirm('Sure to Delete ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "message_delete",
                            data: {deleteuserimg_id, image},
                            success: function(data) {
                                console.log(data);
                               location.reload();


                            }
                        });
                    }
                }</script>