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
                                    <h5 class="breadcrumbs-title">Edit Course</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">Edit Course</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                    <?php if(isset($_GET['id'])){$course1_id = $_GET['id'];}
                        $query = $this->db->query("select * from tbl_course where course_id = '" .$course1_id. "'");
                        
                                foreach ($query->result_array() as $row){ 
                        ?>
                        <div class="section">
                            <p class="caption" style="color:black"; >Fill all required fields.</p>
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">BASIC FORM</h4>
                                            <div class="row">
                                                <form id="addcourseform" action="<?php echo site_url('index.php/admin/edit_course')?>" method="post" class="col m12">
                                                    <div class="form-group input-field col s12">
                                                        <input id="Course_name" name="Course_name" type="text" value="<?php  echo $row['course_name'];?>" class="validate">
                                                        <label for="Course_name">Course Name</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="Major_sub" name="Major_sub" type="text" value="<?php  echo $row['course_subject'];?>"class="validate">
                                                        <label for="Major_sub">Major Subject</label>
                                                    </div>
                                                    <!--<div class=" form-group input-field col s12">
                                                        <input id="course_cat" name="course_cat" type="text" class="validate">
                                                        <label for="course_cat">Course Category</label>
                                                    </div>-->
                                                    
                                                               <div class=" form-group input-field col s12">
                                                               <?php  $options = $row['course_category']; ?>
                                                        <select class=" form-control browser-default" name="course_cat">
                                                            <option value="">Course Category</option>
                                                            <option value="advancediploma" <?php if($options=="advancediploma") echo 'selected="selected"'; ?>>Advance Diploma</option>
                                                            <option value="bridging" <?php if($options=="bridging") echo 'selected="selected"'; ?>>Bridging</option>
                                                            <option value="certificate" <?php if($options=="certificate") echo 'selected="selected"'; ?>>Certificate</option>
                                                            <option value="degree" <?php if($options=="degree") echo 'selected="selected"'; ?>>Degree</option>
                                                            <option value="diploma" <?php if($options=="diploma") echo 'selected="selected"'; ?>>Diploma</option>
                                                            <option value="graduatediploma" <?php if($options=="graduatediploma") echo 'selected="selected"'; ?>>Graduate Diploma</option>
                                                            <option value="higherdiploma" <?php if($options=="higherdiploma") echo 'selected="selected"'; ?>>Higher Diploma</option>
                                                            <option value="masters" <?php if($options=="masters") echo 'selected="selected"'; ?>>Masters</option>
                                                            <option value="postgraduatediploma" <?php if($options=="postgraduatediploma") echo 'selected="selected"'; ?>>Post Graduate Diploma</option>
                                                            <option value="preuniversity" <?php if($options=="preuniversity") echo 'selected="selected"'; ?>>Pre University</option>
                                                        </select>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="col s2">
                                                        <label class="s_duration">Study Duration</label>
                                                    </div>
                                                    <div class="form-group input-field col s5">

                                                        <select class="form-control browser-default" name="duration">

                                                            <option value="">select duration</option>
                                                             <option value="year">year</option>
                                                            <option value="Month">Month</option>
                                                            <option value="Day" selected>Day</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group input-field col s5">
                                                        <input id="course_duration" name="c_duration" type="text" value="<?php  echo $row['course_duration'];?>" class="validate">
                                                        <label for="course_duration">Course Duration</label>
                                                    </div>


                                                    <div class=" form-group input-field col s12">
                                                      <?php  $options = $row['course_school']; ?>
                                                        <select class=" form-control browser-default" name="addschool">
                                                            <option value="">Add School</option>
                                                            <option value="Ethiopia" <?php if($options=="Ethiopia") echo 'selected="selected"'; ?>>Ethiopia</option>
                                                            <option value="Kenya" <?php if($options=="Kenya") echo 'selected="selected"'; ?>>Kenya</option>
                                                            <option value="Africa" <?php if($options=="Africa") echo 'selected="selected"'; ?>>Africa</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                     <?php  $options = $row['course_university']; ?>
                                                        <select class=" form-control browser-default" name="adduniversity">
                                                            <option value="" >Add University</option>
                                                            <option value="Ethiopia" <?php if($options=="Ethiopia") echo 'selected="selected"'; ?>>Ethiopia</option>
                                                            <option value="Kenya" <?php if($options=="Kenya") echo 'selected="selected"'; ?>>Kenya</option>
                                                            <option value="Africa" <?php if($options=="Africa") echo 'selected="selected"'; ?>>Africa</option>
                                                        </select>
                                                    </div>

                                                    <div class=" form-group input-field col s12">
                                                        <textarea id="Details" class="materialize-textarea" name="details"><?php echo $row['course_desc'];?></textarea>
                                                        <label for="Details">Details</label>
                                                    </div>

                                                     <div class="form-group input-field col s6">
                                                        <input id="date" name="date" type="date" value="<?php echo $row['course_date'];?>" class="datepicker">
                                                        <label for="date">Date</label>
                                                    </div>
                                                    <div class="form-group input-field col s6">
                                                        <input id="time" name="time" type="text" value="<?php echo $row['course_time'];?>" ">
                                                        <label for="date">Time</label>
                                                    </div>
                                                    <input value="<?php echo $row['course_id']; ?>" name="course_id" type="hidden">
                                                      <input type="hidden" name="approve_status" value="<?php echo $row['course_approve']; ?>">
                                                    <div class="col s12">
                                                        <button class="btn waves-effect waves-light" type="submit" name="action">Update
                                                            <i class="mdi-content-send right"></i>
                                                        </button>

                                                    </div>
                                                </form>
                                            </div> 
                                        </div>
                                    </div>
                                     <?php } ?>
                                </div>
                                </section>
                            </div>
                        </div>
                        <?php  $this->load->view('admin/footer'); ?>
<script type="text/javascript" src="<?php echo base_url().'/js/admin/admin-course-validate.js' ?>"></script>