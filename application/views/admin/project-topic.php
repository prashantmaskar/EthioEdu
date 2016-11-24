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
                            <p class="caption black-text">Fill all required fields.</p>
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Project Topic FORM</h4>
                                            <div class="row">
                                                <form id="project_topic" action="<?php echo site_url('index.php/admin/Project_Topic')?>" method="post" class="col m12" enctype="multipart/form-data">
                                                    <div class="form-group input-field col s12">
                                                        <input id="Project_name" name="Project_name" type="text" class="validate">
                                                        <label for="Project_name">Project Name</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="course_name" name="course_name" type="text" class="validate">
                                                        <label for="course_name">Course Name</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="project_category">
                                                            <option  value="">Project Catagory</option>
                                                    <option value="Administration">Administration </option>
                                                    <option value="Agriculture">Agriculture </option>
                                             <option value="Arts_Humanity ">Arts and humanity  </option>
                                                      <option value="Education">Education  </option>
                                        <option value="EET">Engineering, Environment & Technology  </option>
                                                        <option value="Law">Law  </option>
                            <option value="MPH">Medical, pharmaceutical & Health sciences  </option>
                             <option value="Science">Science </option>
                              <option value="SM">Social & management  </option>


                                                        </select>

                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="Year">
                                                            <option  value="">Year</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2017">2017</option>

                                                        </select>

                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="format_type">
                                                            <option  value="">Format type</option>
                                                            <option value="pdf">PDF</option>
                                                            <option value="word">WORD</option>
                                                            <option value="rtf">RTF</option>
                                                        </select>

                                                    </div>
                                                     <div class="form-group file-field input-field col s12">
                                        <div class="btn">
                                            <span>Attach file</span>
                                            <input name="fileformat" type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="attach file in pdf or word or rtf file format" >
                                        </div>
                                    </div> 
                                    <input type="hidden" name="approve_status" value="0">

                                                    <div class="input-field col s4">
                                                        <div class="input-field col s12">
                                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action"><i class="mdi-action-perm-identity"></i> Add</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="qustion-table">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Project Topic Info Table</h4>
                                            <div id="table-wrap">
                                                <div class="row">
                                                    <div class="col s12 m12 l12">
                                                        <table class="bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th data-field="id">Project Name</th>
                                                                    <th data-field="name">Course Name</th>
                                                                    <th data-field="price">Year</th>
                                                                    <th data-field="price">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                        foreach ($project_topics as $row){ 
                                             $topic_id = $row['project_id'];
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $row['project_title']; ?></td>
                                                                    <td><?php echo $row['project_course']; ?></td>
                                                                    <td><?php echo $row['project_year']; ?></td>
                                                   <td>
                                             <a href="<?php echo base_url() . 'index.php/admin/Edit_project_topic?id='.$topic_id ?>" class="btn-floating blue" ><i class="small mdi-action-subject"></i></a>
                                                        <?php if($row['project_approve'] == '1'){?>
                                                        <a href="javascript:void(0);"  onclick="custatus(<?php echo $topic_id;?>);" class="btn-floating green tooltipped" ><i class="small mdi-action-visibility"></i></a>
                                                        <?php }else{?>
                                                        <a href="javascript:void(0);" onclick="cstatus(<?php echo $topic_id;?>);" class="btn-floating red" ><i class="small mdi-action-visibility-off"></i></a>
                                                        <?php }?>
                                                        <a  href="javascript:void(0);" onclick="deleted(<?php echo $topic_id;?>);" class="btn-floating red delete-btn" ><i class="small mdi-action-highlight-remove"></i></a></td>
                                                                </tr>
                                                            <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php  $this->load->view('admin/footer'); ?>
        <script type="text/javascript" src="<?php echo base_url().'/js/admin/admin-project-topic.js' ?>"></script>
<script>

            function deleted(id)
            {
                var deleteproject_id = id;
            if (confirm('Sure to Delete ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {deleteproject_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }



                function cstatus(id){
                var statusproject_id = id;
            if (confirm('Sure to Approve ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {statusproject_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }

                function custatus(id){
                var ustatusproject_id = id;
            if (confirm('Sure to Unapprove ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {ustatusproject_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }
          

       </script>