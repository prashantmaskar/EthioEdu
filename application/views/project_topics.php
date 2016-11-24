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
                <div class="col s12 m8 grid-example z-depth-1">
                    <div class="news_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Post Project</h1>
                            </div>
                        </div>
                        <div class="col s12 m12 ">
                            <div class="news_add">
                               <form id="project_topic" action="<?php echo site_url('index.php/project_topics')?>" method="post" class="col m12" enctype="multipart/form-data">
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
													<!-- <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="format_type">
                                                            <option  value="">Format type</option>
                                                            <option value="pdf">PDF</option>
                                                            <option value="word">WORD</option>
                                                            <option value="rtf">RTF</option>
                                                        </select>

                                                    </div>
                                                     -->
                                   <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="format_type">
                                                            <option  value="">fileformat</option>
                                                            <option value="pdf">pdf</option>
                                                            <option value="rtf">rtf</option>
                                                            <option value="doc">doc</option>


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
                                    <input type="hidden" name="approve_status" value="0">
                                    <div class="col s5 offset-s5 margin-b-10">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Add
                                           
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

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
            
        </div>
		</div>
        <?php $this->load->view('footer'); ?>
<script type="text/javascript" src="<?php echo base_url() .'js/project_topics-validate.js' ?>"></script> 



