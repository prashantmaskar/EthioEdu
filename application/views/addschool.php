<style>
.ui-helper-hidden-accessible { display:none; }
</style>
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
                        <h1 class="add_title">Add/Edit Schools</h1>
                        <div class="instrction_box">
                            EthioEdu is the leading educational directory in Ethiopia and we offer two options for listing your institution.
                            <ul><li><strong>Free/Basic Listing</strong> - Due to workload, free listings take a longer time (Upto a month and not guaranteed) to appear online and are placed below paid/premium listings. Only basic information is published.</li>
                                <li><strong>Paid/Premium listings</strong> - Premium listings appear online within 24 hours of payment. They are usually placed among the top in the colleges listings page. We publish detailed institution's information for premium listing. The cost is  1,000 Birr per year only.</li>
                            </ul>
                        </div>                   

                         <div class="container">
                        <div class="section">
                            <p class="caption">Fill all required fields.</p>
                            <div class="divider"></div>
                            <div id="form-wrap">

                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">BASIC FORM</h4>
                                            <div class="row">
                                                 <form id="homeaddschoolform" action="<?php echo site_url('index.php/addschool')?>" method="post" enctype="multipart/form-data">
                                                    <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="choice">

                                                            <option value="">Registration type</option>
                                                             <option value="Normal Registration">Normal Registration</option>
                                                            <option value="Premium Registration">Premium Registration</option>
                                                        
                                                        </select>
                                                       </div>
                                                       <?php if ($this->session->userdata('logged_in'))
                                                        {
                                                            // $sessid= $this->session->userdata('suserid');
                                                            // $query = $this->db->query("select * from  tbl_users where    user_id = '" .$sessid. "'");
                        
                                foreach ($user_details as $row){ 
                                                            ?>
      
                                                    <div class= "form-group input-field col s12">
                                                        <input type="text"  id="user_name" name="user_name" value="<?php echo $row['username'];?>" class="form-control" readonly>
                                                        <label for="user_name">user_name</label>
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
                                                        <input id="schoolemail" type="text" name="email" value="<?php echo $row['user_email'];?>" class="form-control" readonly>
                                                        <label for="schoolemail">Email Id</label>
                                                    </div>
                                                   <?php    } } else{
                                                    ?>
                                                    <div class= "form-group input-field col s12">
                                                        <input type="text"  id="user_name" name="user_name"  class="form-control" >
                                                        <label for="user_name">user_name</label>
                                                        <span id="user_namemsg"></span>
                                                    </div>
                                                   <div class= "form-group input-field col s12">
                                                        <input type="text"  id="firstname" name="firstname"  class="form-control" >
                                                        <label for="firstname">First Name</label>
                                                    </div>
                                                     <div class= "form-group input-field col s12">
                                                        <input type="text"  id="lastname" name="lastname"  class="form-control" >
                                                        <label for="lastname">Last Name</label>
                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <input id="schoolemail" type="text" name="email"  class="form-control" >
                                                        <label for="schoolemail">Email Id</label>
                                                        <span id="emailmsg"></span>
                                                    </div>
                                                    <?php }?>
                                                    <div class=" form-group input-field col s12">
                                                        <input id="School_name" name="schoolname" type="text" class="validate">
                                                        <label for="School_name">School Name</label>
                                                    </div>



                                                          <div class="form-group file-field input-field col s12">
                                                    <div class="btn">
                                                        <span>Attach logo</span>
                                                        <input name="fileformat" type="file" multiple>
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text" placeholder="attach image only">
                                                    </div>
                                                </div>

                                                    <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="cat">

                                                            <option value="">School category</option>
                                                            <!--<?php //print_r($categories); ?>-->
                                                             <?php foreach($categories as $row){?>  

                                                             <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                       </div>

                                                            <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="choice2">

                                                            <option value="">University</option>
                                                             <option value="Agriculture ">Agriculture </option>
                                                            <option value="Account">Account</option>
                                                         
                                                        </select>
                                                       </div>
                                                               
                                                      <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="choice3">

                                                            <option value="">Institutes</option>
                                                             <option value="KINDERGARTENS and NURSERY ">Commerce and business </option>
                                                            <option value="Computer training and IT">Computer training and IT</option>
                                                         <option value="Distance education">Distance education</option>
                                                          <option value="Engineering">Engineering</option>
                                                            <option value="Medical schools">Medical schools</option>
                                                              <option value="University-Colleges">University-Colleges</option>
                                                                <option value="Theology and bible">Theology and bible</option>
                                                                 <option value="Agriculture">Agriculture</option>
                                                        </select>
                                                       </div>                                                 
                                                               

                                                            <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="choice4">

                                                            <option value="">Other catagogory</option>
                                                             <option value="Aviation">Aviation</option>
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
                                                    <div class="form-group input-field col s12">
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
                                                            <option value="addisababa">ADDIS ABABA</option>
                                                            <option value="oromia">OROMIA</option>
                                                            <option value="amhara">AMHARA</option>
															 <option value="tigray">TIGRAY</option>
															  <option value="snnp">SNNP</option>
															   <option value="somali">SOMALI</option>
															    <option value="afar">AFAR</option>
																 <option value="ben">BENISHANGUL - GUMUZ</option>
																  <option value="diredawa">DIRE DAWA</option> 
																  <option value="gambella">GAMBELLA</option>
																   <option value="horari">HORARI</option>
                                                        </select>
                                                    </div>


                                                          <div class=" form-group input-field col s12">
                                                        <select class=" form-control browser-default" name="choice8">
                                                            <option value="" >School type</option>
                                                            <option value="public">public</option>
                                                            <option value="private">private</option>
                                                         
                                                        </select>
                                                         
                                                    </div>
                                                    <div class="row">
                                                    <div class="col s12">
                                                    <div class="tokenfield">
                                                       <div class="form-group input-field col s12">
                                                         
                                                        <input type="text" class=" autocomplete" name="Program_tokenfield" id="Program_tokenfield" value="primary,Nursary "/ placeholder="Program offered">
                                                        <!--label for="facilities">Facilities</label-->
                                                       </div>
                                                   </div>
                                                  </div>
                                                     </div>

                                                    <div class="row">
                                                    <div class="col s12">
                                                    <div class="tokenfield">
                                                       <div class="form-group input-field col s12">
                                                         
                                                        <input type="text" class=" autocomplete" name="tokenfield" id="tokenfield" value="Computer Study Lab,Football Pitch "/ placeholder="Add facilities">
                                                        <!--label for="facilities">Facilities</label-->
                                                       </div>
                                                   </div>
                                                  </div>
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
                                                        <textarea id="Description" class="materialize-textarea" name="tell_us"></textarea>
                                                        <label for="Description">Tell Us About yourself</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="address" type="text" class="validate" name="address">
                                                        <label for="address">Address</label>
                                                    </div>
                                                    <div id="map" style="height:200px;width:100%;" ></div>
                                                    <!-- <div id="map"class="col m12">     
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8067573.325322677!2d36.00181604982493!3d9.132349675141633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1635d0cedd6cfd2b%3A0x7bf6a67f5348c55a!2sEthiopia!5e0!3m2!1sen!2sin!4v1470819730373"  height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                        
                                                    </div> -->
                                                    <div class="form-group input-field col s12">
                                                        <input id="web" type="text" name="website" class="validate">
                                                        <label for="password">Web Url</label>
                                                    </div>
                    
                                                    <?php if (!$this->session->userdata('logged_in'))
                                                        { ?>
                                                     <div class=" form-group input-field col s12">
                                                   <input id="password" name="password" type="password"  class="validate" minlength="6">
                                                <label for="password">password</label>
                                                      </div>
                                                       <div class="form-group input-field col s12">
                                                      <input id="cpassword" name="cpassword" type="password" class="validate">
                                                    <label for="cpassword">Confirm password</label>
                                                      </div>
                                                      <?php } ?>
                                                      <div class="captch">
                                                        <img class="responsive-img"  src="<?php echo $captcha['image_src'];?>" alt="CAPTCHA security code" />
                    
                                                <!--      <img class="responsive-img" src="<?php //echo base_url() . 'images/Captcha.png' ?>">
                                                 -->       </div>
                                                  <div class=" form-group input-field col s12">
                                                 <input id="captch" type="text" name="captcha" class="validate">
                                                  <label for="captch">Add Above Code</label>
                                                    </div>
                                                     <?php if (!$this->session->userdata('logged_in')){ ?>
                                                       <div class="form-group input-field col s12">
                                                      <input type="checkbox" name="agree" value="" class="filled-in" id="filled-in-box"  />
                                                     <label for="filled-in-box">I accept terms & conditions</label>
                                                      </div>
                                                       <?php }?>
                                                    <input type="hidden" name="approve_status" value="0">
                                                    <div class="input-field col s4">
                                                        <div class="input-field col s12">
                                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action"><i class="mdi-action-perm-identity"></i> Submit</button>
                                                              &nbsp;&nbsp;
                                                <?php if (!$this->session->userdata('logged_in')){ ?>
                                                        <span>Already A User? <a href="<?php echo base_url() . 'index.php/login' ?>">Login</a> </span> <?php }?>
                                   <!--  <p class="t20margin"><a href="#">Forgot Password?</a> </p> -->
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

<!--<script type="text/javascript" src="<?php //echo base_url() .'js/addschool.js' ?>"></script>-->
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


<script>
$(document).ready(function() {
  //alert('in');
     $("#phone_number").val("+251 ");
    


    $("input[type=checkbox][name=agree]").click(function()
    {
        var ischeck=$(this).prop("checked");
        if(ischeck)
            $(this).val("agree");
        else
            $(this).val("");
    });

    $('#homeaddschoolform').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            choice: {
                validators: {
                    notEmpty: {
                        message: ' please select registration type!!!..'
                    }
                }
            },
            user_name: {
                validators: {
                    notEmpty: {
                        message: ' please enter username!!!..'
                    },
                    regexp: {
                                             regexp: /^[\w]+$/,
                                                message: 'You can introduce just alphabetical characters, underscore, number but no spaces'
                                            }
                                           /* remote: {
                                                type: 'POST',
                                                url: '<?php echo base_url();?>index.php/addschool/isvalud_school_username',
                                                message: 'The username is not available'
                                            }
                                          */
                }
            },
            firstname:{
                 validators:{
                    notEmpty:{
                        message:'please enter firstname!!!..'
                    },
                    regexp:{
                              regexp: /^[a-z\s]+$/i,
                                message: 'The full name can consist of alphabetical characters and spaces only'
                    }
                }
            },
             lastname:{
                 validators:{
                    notEmpty:{
                        message:'please enter lastname!!!..'
                    },
                    regexp:{
                              regexp: /^[a-z\s]+$/i,
                                message: 'The full name can consist of alphabetical characters and spaces only'
                    }
                }
            },

            fileformat:{
           
                 file:{
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    }
                 
           },
        
            email:{
                validators:{
                    notEmpty:{
                         message:'Email address is required!!!'
                    },
                    emailAddress:{
                        message:'The input is Not a valid email adddress!!'
                    },
                     /* remote: {
                                                type: 'POST',
                                                url: '<?php echo base_url();?>index.php/addschool/isvalid_school_email',
                                                message: 'The email_id is not available'
                                            }*/
                                          
                }
            },
            schoolname:{
                    validators:{
                        notEmpty:{
                            message:'please enter school name!!'
                        }
                    }
            },
            cat: {
                validators: {
                    notEmpty: {
                        message: ' please select  school catagory!!!..'
                           
                    }
                }
            },
             choice2: {
                validators: {
                    notEmpty: {
                        message: ' please select  school university!!!..'
                           
                    }
                }
            },
             choice3: {
                validators: {
                    notEmpty: {
                        message: ' please select  institute!!!..'
                           
                    }
                }
            },
             choice4: {
                validators: {
                    notEmpty: {
                        message: ' please select  other catagory!!!..'
                           
                    }
                }
            },
             phone_number: {
                validators: {
                    notEmpty: {
                        message: 'contact required!!!..'
                    },
                    /*digits:{
                         message:'contact number is invalid'

                    },
                    stringLength: {
                        min:14,
                        max: 14,
                        message: 'contact number must contain correct digits'
                    }*/
                     regexp:{
                     regexp:/^\+251?([- ]{1})?([0-9]{9})$/,
                           message:'invalid Phone number,!! Number should have 9 digit after country code!!'
                      ,   }
                }
            },
             choice5: {
                validators: {
                    notEmpty: {
                        message: ' please select  country!!!..'
                           
                    }
                }
            },
             choice6:{
                validators:{
                    notEmpty:{
                        message:  ' please enter city!!!'
                    }
                }
             },
              choice7:{
                validators:{
                    notEmpty:{
                        message:  ' please choose region!!!'
                    }
                }
             },
               choice8:{
                validators:{
                    notEmpty:{
                        message:  ' please choose school type!!!'
                    }
                }
             },
             student_population:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter student population!!!'
                    },
                     digits:{
                         message:'population should be in digits'

                    }
                }
             },
             t_staff:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter number of teaching staff!!!'
                    },
                     digits:{
                         message:'invalid number of teaching staff'

                            }
                }
             },
             non_teach:{
                validators:{
                    notEmpty:{
                        message:  ' please enter number of non_teaching staff!!!'
                    },
                     digits:{
                         message:'invalid of non_teaching staff'

                            }
                }
             },
             past_award:{
                validators:{
                    notEmpty:{
                        message:  ' please enter name of past award !!!'
                    }
                }
             },
             year:{
                validators:{
                    notEmpty:{
                        message:  ' please enter acadamic year !!!'
                    },
                   digits:{
                         message:'invalid year'

                    },
                    /*stringLength: {
                        min:4,
                        max:4,
                        message: 'invalid year ,please enter correct year'
                    },*/
                    between:{
                           min:2016,
                        max: 2050,
                        message: 'year must be in range ,please enter present year or next'
                    }
                }
             },
             fee:{
                validators:{
                    notEmpty:{
                        message:  ' please enter acadamic fee !!!'
                    },
                     digits:{
                         message:'invalid acadamic fee'

                            }
                }
             },
                Admissios_pro:{
                validators:{
                    notEmpty:{
                        message:  ' please enter Admission Procedures !!!'
                    },
                   /* stringLength:{
                        message:'post Procedures content must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }*/
                }
             },
             Description:{
                validators:{
                    notEmpty:{
                        message:  ' please enter academic requierement descreption !!!'
                    },
                    stringLength:{
                        message:'descreption must be less than 300 characters',
                        max:function(value,validator,$field){
                            return 300 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
             scolership:{
                validators:{
                    notEmpty:{
                        message:  ' please enter scholarship!!!'
                    }
                }
             },
           address:{
                validators:{
                    notEmpty:{
                        message:  ' please enter address!!!'
                    },
                    stringLength:{
                        message:'adddress must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
                   website:{
                validators:{
                    uri:{
                        message:  ' website address is not valid!!!'
                    },
                    notEmpty:{
                         message:'enter website address'
                    }
                }
             },
              tell_us:{
                validators:{
                    notEmpty:{
                        message:  ' please tell us about yourself  !!!'
                    },
                    stringLength:{
                        message:'information must be less than 200 characters',
                        max:function(value,validator,$field){
                            return 200 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
          
      password: {
                validators: {
                    notEmpty: {
                        message: 'The password cannot be empty'
                    },
                    identical: {
                        field: 'cpassword',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            cpassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password cannot be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
           captcha:{
               validators:{
                notEmpty:{
                    message:'enter the above captcha code'
                }
               }
           },
           agree: {
                validators: {
                    notEmpty: {
                        message: 'You must agree with the terms and conditions'
                    }
                }
            }
        }
    });
});

//var jq = $.noConflict();
$(document).ready(function() {

 $('#tokenfield').tokenfield({
  autocomplete:{
    source: ['Computer Study Lab',' Football Pitch ','Science Labs','Swimming Pool','Library','Basket ball court','Football pitch','design and technology lab','tennis court'],
    delay: 100
  },
  showAutocompleteOnFocus: true
});
}); 



    $(document).ready(function() {

 $('#Program_tokenfield').tokenfield({
  autocomplete:{
    source: ['primary','Nursary','Secondary'],
    delay: 100
  },
  showAutocompleteOnFocus: true
});
}); 
    
</script>