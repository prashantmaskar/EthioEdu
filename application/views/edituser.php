 <?php $this->load->view('header'); ?>
<div class="sdetails-wrap">
    <div class="row">
        <div class="col s12 m9 margin-t-15">
            <div class="udetail_container  ">
                <div class="row">
                    <div class="col m12 s12 card-panel edituser ">
                    <h1 class="page-title">Update Your Profile</h1>
                        <div class="basic-info">
                                <p><strong>Brif Instruction</strong></p>
                                <p>
                                1. Aspirants should select the institution they intend to get into.<br>
                                2. Graduates should select the institution they graduated from.<br>
                                3. First select your institution then wait for the page to reload the list of schools. Once the page reloads, you can now 
                                </p>
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

                        <?php $sessid= $this->session->userdata('suserid');

                        $query = $this->db->query("select tbl_users.username, tbl_users.first_name, tbl_users.last_name, tbl_users.user_email, tbl_users.user_role, tbl_user_meta.school_type, tbl_user_meta.user_school, tbl_user_meta.user_level, tbl_user_meta.user_dept, tbl_user_meta.user_gender, tbl_user_meta.mobile_no, tbl_user_meta.user_avatar, tbl_user_meta.user_birth, tbl_user_meta.marital_status, tbl_user_meta.interested_in, tbl_user_meta.about_user, tbl_user_meta.user_interest, tbl_user_meta.user_hobby from tbl_users INNER JOIN tbl_user_meta On tbl_users.user_id = tbl_user_meta.user_id where tbl_users.user_id = '" .$sessid. "'");


                        //$query = $this->db->query("select tbl_user_meta.user_school, tbl_user_meta.user_level, tbl_user_meta.user_dept, tbl_user_meta.user_gender, tbl_user_meta.mobile_no, tbl_user_meta.user_avatar, tbl_user_meta.marital_status, tbl_user_meta.interested_in, tbl_user_meta.about_user, tbl_user_meta.user_interest, tbl_user_meta.user_hobby from tbl_user_meta where user_id = '" .$sessid. "'");
                        
                                foreach ($query->result_array() as $row){ 
                                      $school_type = $row['school_type'];
                                        $userattachment= $row['user_avatar']; 
                        ?>
                        <form enctype="multipart/form-data" id="edituser" method="post" action="<?php echo site_url('index.php/edituser')?>">
                               <div class="form-group input-field col s12">
                                 <select class="form-control browser-default" name="schooltype">
                                    <option value="">select  school type</option>
                                    <option value="anything" <?php if($school_type=="anything") echo 'selected="selected"'; ?>>anything</option>
                                    <option value="friendship"<?php if($school_type=="friendship") echo 'selected="selected"'; ?>>friendship</option>
                                    <option value="friendships"<?php if($school_type=="friendships") echo 'selected="selected"'; ?>>friendship</option>
                            </select>
                        </div>
                                <div class="form-group input-field col s12">
                                 <?php $school = $row['user_school']; ?>
                                                        <select class="form-control browser-default" name="school">

                                                            <option value="">select your school</option>
                                                             <option value="anything" <?php if($school=="anything") echo 'selected="selected"'; ?>>anything</option>
                                                            <option value="anything" <?php if($school=="anything") echo 'selected="selected"'; ?>>anything</option>
                                                             <option value="friendship" <?php if($school=="friendship") echo 'selected="selected"'; ?>>friendship</option>
                                                        </select>
                                    </div>
                                     <div class="form-group input-field col s12">
                                     <?php $level = $row['user_level']; ?>
                                                        <select class="form-control browser-default" name="level">

                                                            <option value="">select level</option>
                                                             <option value="anything" <?php if($level=="anything") echo 'selected="selected"'; ?>>anything</option>
                                                            <option value="friendship" <?php if($level=="friendship") echo 'selected="selected"'; ?>>friendship</option>
                                                             <option value="friendship" <?php if($level=="friendship") echo 'selected="selected"'; ?>>friendship</option>
                                                        </select>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="department" name="department" type="text" value="<?php echo $row['user_dept']; ?>" class="validate">
                                        <label for="department">Department</label>
                                    </div>
                                        <h5 class="red-text">Login Information</h5>
                                    <div class="form-group input-field col s12">
                                        <input id="Caption" type="text" value="<?php echo $row['username']; ?>" name="username" class="validate">
                                        <label for="Caption">Username</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="Caption" type="password" name="password" class="validate">
                                        <label for="Caption">New Password</label>
                                    </div>
                                     <div class="form-group input-field col s12">
                                        <input id="Caption" name="cpassword" type="password" class="validate">
                                        <label for="Caption"> Confirm New Password</label>
                                    </div>
                                           <h5 class="red-text">personal Information</h5>
                                    <div class="form-group input-field col s12">
                                        <input id="first_name" value="<?php echo $row['first_name']; ?>" name="first_name" type="text" class="validate">
                                        <label for="Caption"> first Name</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="last_name" value="<?php echo $row['last_name']; ?>" name="last_name" type="text" class="validate">
                                        <label for="Caption"> Last Name</label>
                                    </div>
                                     <div class="form-group input-field col s12">
                                     <?php $gender = $row['user_gender']; ?>
                                                        <select class="form-control browser-default" name="gender">

                                                            <option value="">Gender</option>
                                                             <option value="Male" <?php if($gender=="Male") echo 'selected="selected"'; ?>>Male</option>
                                                            <option value="female" <?php if($gender=="female") echo 'selected="selected"'; ?>>female</option>
                                                        
                                                        </select>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="mobile" value="<?php echo $row['mobile_no']; ?>" name="phone_number" type="text" class="validate">
                                        <label for="Caption">Mobile Number</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="email" value="<?php echo $row['user_email']; ?>" name="email" type="text" class="validate">
                                        <label for="Caption">Email Id</label>
                                    </div>
                                    <!-- <div class="col s2 user-icon form-group input-field">
                                         <img src="<?php //echo base_url() . 'images/user.jpg' ?>" class="responsive-img circle">  
                                    </div> -->
                                    <?php if($row['user_avatar']!=""){?>
                                    <div class="form-group file-field input-field col s12">
                                                        <div style="position: relative;display: inline-block;">

                                     <img class="edit-attach" src="http://localhost/ETHIO/uploads/<?php  echo $row['user_avatar'];?>">
                                     <a  href="javascript:void(0);" onclick="deleted(<?php echo $sessid;?>,<?php echo "'$userattachment'"; ?>);" style="background: red;
                                                                              padding: 5px;
                                                                               border-radius: 10px;
                                                                                color: #fff;
                                                                              position: absolute;
                                                                               top: 0px;
                                                                    right: 0px;"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                  </div>
                                                                       <?php }?>
                                   <div class="form-group file-field input-field col s10">
                                        <div class="btn">
                                            <span>Attach Photo</span>
                                            <input name="attach" type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload Photo" value="<?php echo $row['user_avatar'];?>">
                                        </div>
                                    </div>
                                    <div class="file-field input-field col s10">
                                       <h5 class="red-text">Connect2Me Information</h5>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="date" value="<?php echo $row['user_birth']; ?>" type="date" name="date" >
                                        <label for="date">Date of birth</label>
                                    </div>
                                    <div class="form-group input-field col s12">

                                                        <select class="form-control browser-default" name="status">
                                                        <?php $status = $row['marital_status']; ?>
                                                            <option value="">Currently single</option>
                                                             <option value="Male" <?php if($gender=="Male") echo 'selected="selected"'; ?>>Male</option>
                                                            <option value="female" <?php if($gender=="female") echo 'selected="selected"'; ?>>female</option>
                                                        
                                                        </select>
                                    </div>
                                     <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="interestedIn">
                                                        <?php $interest = $row['interested_in']; ?>
                                                            <option value="">Interested In</option>
                                                             <option value="Male" <?php if($interest=="Male") echo 'selected="selected"'; ?>>Male</option>
                                                            <option value="female" <?php if($interest=="female") echo 'selected="selected"'; ?>>female</option>
                                                        
                                                        </select>
                                    </div>

                                    <div class="form-group input-field col s12">
                                        <textarea id="aboutme" name="aboutme" class="materialize-textarea"><?php echo $row['about_user']; ?></textarea>
                                        <label for="aboutme">About Me</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <textarea id="myinterest" name="myinterest" class="materialize-textarea"><?php echo $row['user_interest']; ?></textarea>
                                        <label for="myinterest">My Interests</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <textarea id="myhobby"  name="myhobby" class="materialize-textarea"><?php echo $row['user_hobby']; ?></textarea>
                                        <label for="myhobby">My Hobby</label>
                                    </div>
                                    <input type="hidden" name="role" value="<?php echo $row['user_role']; ?>">
                                    <div class="col m12 margin-t-15 center-align">
                                        <button class="btn waves-effect waves-light red margin-b-10" type="submit" name="uaction">Update
                                        </button>
                                    </div>
                        </form>
                        <?php } ?>
                    </div>
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
                                        <p class="std_name"><a href="#"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></a></p>
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
<script type="text/javascript" src="<?php echo base_url() . 'js/edituser.js' ?>"></script>

                        <script>

            function deleted(id,userimg)
            {
                var deleteuserimg_id = id;
                var image = userimg;
                //alert(image);
                //alert(deleteuserimg_id);
            if (confirm('Sure to Delete ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "admin/approve_delete",
                            data: {deleteuserimg_id, image},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }</script>