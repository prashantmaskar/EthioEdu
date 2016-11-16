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
                                    <h5 class="breadcrumbs-title">Add Project Topic</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">Add Project Topic</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                                            <?php if(isset($_GET['id'])){$topic_id = $_GET['id'];}
                        $query = $this->db->query("select * from  tbl_projects where project_id = '" .$topic_id. "'");
                        
                                foreach ($query->result_array() as $row){ 
                        ?>
                    <div class="container">
                        <div class="section">
                            <p class="caption">Fill all required fields.</p>
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Edit Project Topic FORM</h4>
                                            <div class="row">
                                                <form id="project_topic" action="<?php echo site_url('index.php/admin/Edit_Project-Topic')?>" method="post" class="col m12" enctype="multipart/form-data">
                                                    <div class="form-group input-field col s12">
                                                        <input id="Project_name" name="Project_name" type="text" class="validate"  value="<?php  echo $row['project_title'];?>">
                                                        <label for="Project_name">Project Name</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="course_name" name="course_name" type="text" class="validate" value="<?php  echo $row['project_course'];?>">
                                                        <label for="course_name">Course Name</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                          <?php  $options = $row['project_year']; ?>
                                                        <select class="form-control browser-default" name="Year">
                                                            <option  value="">Year</option>
                                                                 <option value="2016" <?php if($options=="Admission") echo 'selected="selected"'; ?>>2016</option>
                                                            <option value="2017" <?php if($options=="Admission") echo 'selected="selected"'; ?>>2017</option>
                                                        </select>

                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                         <?php  $options = $row['project_format']; ?>
                                                        <select class="form-control browser-default" name="format_type">
                                                            <option  value="">Format type</option>
                                                             <option value="pdf" <?php if($options=="Admission") echo 'selected="selected"'; ?>>pdf</option>
                                                            <option value="word" <?php if($options=="Admission") echo 'selected="selected"'; ?>>word</option>
                                                            <option value="rtf" <?php if($options=="Admission") echo 'selected="selected"'; ?>>rtf</option>
                                                            
                                                        </select>

                                                    </div>
                                                     <div class="form-group file-field input-field col s12">
                                        <div class="btn">
                                            <span>Attach file</span>
                                            <input name="fileformat" type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="attach file in pdf or word or rtf file format">
                                        </div>
                                    </div>
                                      <input value="<?php echo $row['project_id']; ?>" name="project_id" type="hidden">

                                                    <div class="input-field col s4">
                                                        <div class="input-field col s12">
                                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action"><i class="mdi-action-perm-identity"></i>Update</button>
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
                </section>
            </div>
        </div>
        <?php  $this->load->view('admin/footer'); ?>
        <script type="text/javascript" src="<?php echo base_url().'/js/admin/admin-project-topic.js' ?>"></script>
