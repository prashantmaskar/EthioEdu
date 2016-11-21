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
                                    <h5 class="breadcrumbs-title">Edit Project Topic</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">Edit Project Topic</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>


                                            <?php if(isset($_GET['id'])){$topic_id = $_GET['id'];}
                        $query = $this->db->query("select * from  tbl_projects where    project_id = '" .$topic_id. "'");
                        
                                foreach ($query->result_array() as $row){ 
                        ?>

                    <div class="container">
                        <div class="section">
                            <p class="caption" style="color:black"; >Fill all required fields.</p>
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Edit Project Topic FORM</h4>
                                            <div class="row">
                                                <form id="project_topic" action="<?php echo site_url('index.php/admin/Edit_Project_Topic')?>" method="post" class="col m12" enctype="multipart/form-data">
                                                    <div class="form-group input-field col s12">
                                                        <input id="Project_name" name="Project_name" type="text" class="validate" value="<?php  echo $row['project_title'];?>">
                                                        <label for="Project_name">Project Name</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">

                                                        <input id="course_name" name="course_name" type="text" class="validate"  value="<?php  echo $row['project_course'];?>">
                                                        <label for="course_name">Course Name</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="Year">
                                                         <?php  $options = $row['project_year']; ?>
                                                            <option  value="">Year</option>
                                                            <option value="2016" <?php if($options=="2016") echo 'selected="selected"'; ?>>2016</option>
                                                           <option value="2017" <?php if($options=="2017") echo 'selected="selected"'; ?>>2017</option>

                                                        </select>

                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="format_type">
                                                             <?php  $options = $row['project_format']; ?>
                                                            <option value="pdf" <?php if($options=="pdf") echo 'selected="selected"'; ?>>pdf</option>
                                                            <option value="word" <?php if($options=="word") echo 'selected="selected"'; ?>>word</option>
                                                            <option value="rtf" <?php if($options=="rtf") echo 'selected="selected"'; ?>>rtf</option>
                                                           
                                                        </select>

                                                    </div>
                                                    <div class="form-group input-field col s6">
                                                        <input id="date" name="date" type="date" value="<?php echo $row['project_date'];?>" class="datepicker">
                                                        <label for="date">Date</label>
                                                    </div>
                                                     <div class="form-group input-field col s6">
                                                        <input id="time" name="time" type="text" value="<?php echo $row['project_time'];?>">
                                                        <label for="date">Time</label>
                                                    </div>
                                                     <div class="form-group file-field input-field col s12">
                                        <div class="btn">
                                            <span>Attach file</span>
                                            <input name="fileformat" type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="attach file in pdf or word or rtf file format" value="<?php //echo $row['project_upload'];?>">
                                        </div>
                                    </div>
                                    <input value="<?php echo $row['project_id']; ?>" name="project_id" type="hidden">
                                    <input type="hidden" name="approve_status" value="<?php echo $row['project_approve']; ?>">

                                                    <div class="input-field col s4">
                                                        <div class="input-field col s12">
                                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action"><i class="mdi-action-perm-identity"></i> update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                           </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php  $this->load->view('admin/footer'); ?>
        <script type="text/javascript" src="<?php echo base_url().'/js/admin/admin-project-topic.js' ?>"></script>
