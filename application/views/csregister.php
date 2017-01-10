<?php  $this->load->view('header'); ?>
<?php
               $schooltype= $this->input->post('schooltype');
               $school= $this->input->post('school');
               $level = $this->input->post('level');
               $department = $this->input->post('department');
               $username = $this->input->post('username');
               $password = $this->input->post('password');

?>
 



        <div class="regist-wrap ">
            <div class="row">
                <div class="col s12 m9">
                    <div class="regist_form z-depth-1">
                        <div class="row">
                            <div class="col m12 s12"><h2 class="form_heading">Register as a Member: Final Step</h2></div>
                            <div class="col m12 s12">



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


                                <form id="csregister" action="<?php echo site_url('index.php/csregister')?>" method="post" class="row" enctype="multipart/form-data">
                                    <h4 class="red-text">personal Information</h4>
                                    <div class="form-group input-field col s12">
                                        <input id="first_name" name="first_name" type="text" class="validate">
                                        <label for="Caption"> first Name</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="last_name" name="last_name" type="text" class="validate">
                                        <label for="Caption"> Last Name</label>
                                    </div>
                                     <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="gender">

                                                            <option value="">Gender</option>
                                                             <option value="Male">Male</option>
                                                            <option value="female">female</option>
                                                        
                                                        </select>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="mobile" name="phone_number" type="text" class="validate">
                                        <label for="Caption">Mobile Number</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="useremailid" name="email" type="text" class="validate">
                                        <label for="useremailid">Email Id</label>
                                        <span id="emailmsg"></span>
                                    </div>
                                   <div class="form-group file-field input-field col s12">
                                        <div class="btn">
                                            <span>Attach Photo</span>
                                            <input name="attach" type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload one or more Photo">
                                        </div>
                                    </div>

                                    <h4 class="red-text">Connect2Me Information</h4>

                                    <div class="form-group ">
                                        <input type="date" id="datepicker" class="validate" name="Bdate" placeholder="birthdate">

                                        <label for="date">Date of birth</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="status">

                                                            <option value="">Currently</option>
                                                             <option value="single">single</option>
                                                            <option value="dating">dating</option>
                                                            <option value="engaged">engaged</option>
                                                           <option value="married">married</option>
                                                             <option value="undecided">undecided</option>
                                                        
                                                        </select>
                                    </div>
                                     <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="interestedIn">

                                                            <option value="">Interested In</option>
                                                             <option value="clubbing this weekend">clubbing this weekend</option>
                                                            <option value="Hanging out this weekend">Hanging out this weekend</option>
                                                            <option value="being chat pals">being chat pals</option>
                                                            <option value="being study pals">being study pals</option>
                                                            <option value="flirting">flirting</option>
                                                            <option value="friendship">friendship</option>
                                                            <option value="dating">dating</option>
                                                            <option value="marriage">marriage</option>
                                                            
                                                            

                                                        
                                                        </select>
                                    </div>

                                    <div class="form-group input-field col s12">
                                        <textarea id="aboutme" name="aboutme" class="materialize-textarea"></textarea>
                                        <label for="aboutme">About Me</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <textarea id="myinterest" name="myinterest" class="materialize-textarea"></textarea>
                                        <label for="myinterest">My Interests</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <textarea id="myhobby" name="myhobby" class="materialize-textarea"></textarea>
                                        <label for="myhobby">My Hobby</label>
                                    </div>
                                    <div class="col m12 margin-t-15 center-align">
                                        <button class="btn waves-effect waves-light red" type="submit" name="laction">Register
                                        </button>
                                    </div>
                                    <input type="hidden" name="schooltype" value="<?php echo $schooltype; ?>">
                                    <input type="hidden" name="school" value="<?php echo $school; ?>">
                                    <input type="hidden" name="level" value="<?php echo $level; ?>">
                                    <input type="hidden" name="department" value="<?php echo $department; ?>">
                                    <input type="hidden" name="username" value="<?php echo $username; ?>">
                                    <input type="hidden" name="password" value="<?php echo $password; ?>">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3 margin-t-15">
                    <div class="online_std z-depth-1">
                       <ul class="online_std_list">
                       <?php 
//print_r($related_users);
                       foreach ($related_res as $row){ ?>
                            <li>
                            <?php $pimg = $row['user_avatar']; ?>
                                <div class="row">
                                    <div class="col m3 s12 std_thumb">
                                        <img class="circle responsive-img valign profile-image" src="<?php echo base_url();?>uploads/<?php echo $pimg; ?>"> 
                                    </div>
                                    <div class="col m9 std_details">
                                        <p class="std_name"><a href="<?php echo base_url(); ?>index.php/userdashboard?uid=<?php echo $row['user_id']; ?>"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></a></p>
                                        <p class="std_university"><?php echo $row['user_gender']; ?></p>
                                        <p class="std_name"><?php echo $row['user_school']; ?></p>
                                    </div>
                                </div> 
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
       <?php $this->load->view('footer'); ?>

 <script>
/*$("#useremailid").blur(function(){
                    if($(this).val() ){
                    var emailid = $("input[name=email]").val();
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "validate_ajax",
                            data: {emailid},
                            success: function(data) {
                                console.log(data);
                                    if($.trim(data) == '1'){
                                        $('#emailmsg').html("<span style='color:#D8000C'>Email ID Already Registered</span>");
                                       $("#csregister").submit(function(e){
                                            e.preventDefault();
                                        });
                                }else{
                                    $('#emailmsg').html("<span style='color:#4CAF50'>Email ID is Available</span>");
                                        $("#csregister").submit(function(e){
                                            e.currentTarget.submit();
                                        });
                                }   
                            }
                            });
                        }else{
                            $("#emailmsg").html('');
                        }
                        });*/


           $(document).ready(function() {
     $("#phone_number").val("+251 ");
    $('#csregister').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            first_name: {
                validators:{
                    notEmpty:{
                        message:'first name required'
                    },
                    regexp:{
                              regexp: /^[a-z\s]+$/i,
                                message: 'The  name can consist of alphabetical characters and spaces only'
                    }
                }
            },
              last_name: {
                validators: {
                    notEmpty: {
                        message: ' please enter last name!!!..'
                    }
                }
            },
              gender: {
                validators: {
                    notEmpty: {
                        message: ' please select gender!!!..'
                    }
                }
            },
 
                  phone_number: {
                validators: {
                    notEmpty: {
                        message: 'contact required!!!..'
                    },
                   /* digits:{
                         message:'contact number is invalid'

                    },
                    stringLength: {
                        min:10,
                        max: 10,
                        message: 'contact number must contains 10 digits'
                    }

                }
            },*/
            regexp:{
                     regexp:/^\+251?([- ]{1})?([0-9]{9})$/,
                           message:'invalid Phone number,!! Number should have 9 digit after country code!!'
                      ,   }
                }
            },
               email:{
                validators:{
                    notEmpty:{
                         message:'Email address is required!!!'
                    },
                    emailAddress:{
                        message:'The input is not a valid email adddress!!'
                    },
                     remote: {
                                                type: 'POST',
                                                url: '<?php echo base_url();?>index.php/csregister/isvaludemail',
                                                message: 'The email is not available'
                                            }
                }
            },
              
                  attachphoto: {
                validators: {
                    file:{
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 4194304,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    }
                 
                }
            },
 
               
                  Bdate: {
                validators: {
                    notEmpty:{ 
                        message:'please enter birthdate!!'

                    }
                  
                }
            },
                  
                  status: {
                validators: {
                    notEmpty:{ 
                        message:'please select choice!!'

                    }
                  
                }
            },
               
                
                  
                  interestedIn: {
                validators: {
                    notEmpty:{ 
                        message:'please select choice!!'

                    }
                  
                }
            },
                  aboutme:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter information about you !!!'
                    },
                    stringLength:{
                        message:'post descreeption must be less than 100 characters',
                        max:function(value,validator,$field){
                            return 100 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
              myinterest:{
                validators:{
                    notEmpty:{
                        message:  ' please write your interest !!!'
                    },
                    stringLength:{
                        message:'post descreeption   must be less than 100 characters',
                        max:function(value,validator,$field){
                            return 100 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },

               myhobby:{
                validators:{
                    notEmpty:{
                        message:  ' please write your hobby !!!'
                    },
                    stringLength:{
                        message:'post descreeption   must be less than 100 characters',
                        max:function(value,validator,$field){
                            return 100 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },


        }
    });


$('#datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
        selectYears: 60, // Creates a dropdown of 15 years to control year
        max: new Date(),
        onSet: function () {
        $('.datepicker').siblings('small.help-block').attr('style',"display:none;")
        $('.datepicker').removeClass('invalid');
        this.close();
    }
});



});



</script>