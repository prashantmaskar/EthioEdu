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
                                        <input type="date" name="birth_date" placeholder="birthdate">
                                        <label for="date">Date of birth</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="status">

                                                            <option value="">Currently single</option>
                                                             <option value="Male">Male</option>
                                                            <option value="female">female</option>
                                                        
                                                        </select>
                                    </div>
                                     <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="interestedIn">

                                                            <option value="">Interested In</option>
                                                             <option value="Male">Male</option>
                                                            <option value="female">female</option>
                                                        
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
<script type="text/javascript" src="<?php echo base_url() .'js/csregister.js' ?>"></script>
 <script>
$("#useremailid").blur(function(){
                    if($(this).val() ){
                    var emailid = $("input[name=email]").val();
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "validate_ajax",
                            data: {emailid},
                            success: function(data) {
                                console.log(data);
                                    $('#emailmsg').html(data);
                            }
                            });
                        }else{
                            $("#emailmsg").html('');
                        }
                        });
</script>