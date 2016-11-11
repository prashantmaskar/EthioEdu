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
                <div class="col s12 m8 grid-example z-depth-1">
                    <div class="project_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Projects <span class="Project-button"><a href="<?php echo base_url().'index.php/project_topics'?>"class="waves-effect waves-light btn">Post Project</a></span></h1>
                            </div>
                        </div>
                        <div class="col m12 s12">
                            <div class="project_sort_form col m12">
                                <div class="col s2">
                                    <p class="black-text">Sort Projects:</p>
                                </div>
                                <div class="input-field col s4">
                                        <input id="startdate" type="date" class=" datepicker validate" name="newsd1" >
                                        <label for="Caption">Project From</label>
                                    </div>
                                <div class="input-field col s4">
                                        <input id="enddate" type="date" class=" datepicker validate" name="newsd2">
                                        <label for="Caption">Project To</label>
                                    </div>
                                <div class="input-field col s2">
                                         <button class="btn waves-effect waves-light" type="submit" name="action">search
                                            <i class="material-icons ">search</i>
                                        </button>
                                    </div>
                            </div>
                        </div>
                        <div class="col s12 m12 ">
                            <div class="project_list_wrap">
                                <ul class="project_list">
                                    <li class="project_content">
                                        <a href="<?php echo base_url().'index.php/project_details'?>" class="project_link">
                                            <span class="Project_title">Administration Project Topics</span><span> [9]</span>
                                        </a>
                                       
                                    </li>
                                    <li class="project_content">
                                        <a href="<?php echo base_url().'index.php/project_details'?>"  class="project_link">
                                            <span class="Project_title">Agricultural Project Topics</span><span> [9]</span>
                                        </a>
                                        
                                    </li>
                                    <li class="project_content">
                                        <a href="<?php echo base_url().'index.php/project_details'?>"  class="project_link">
                                            <span class="Project_title">Art & Humanities Project Topics</span><span> [9]</span>
                                        </a>
                                       
                                    </li>
                                    <li class="project_content">
                                        <a href="<?php echo base_url().'index.php/project_details'?>"  class="project_link">
                                            <span class="Project_title">Education Project Topics</span><span> [9]</span>
                                        </a>
                                      
                                    </li>
                                    <li class="project_content">
                                        <a href="<?php echo base_url().'index.php/project_details'?>"  class="project_link">
                                            <span class="Project_title">Engineering,Environment $ Technology Project Topics</span><span> [9]</span>
                                        </a>
                                      
                                    </li>
                                    <li class="project_content">
                                        <a href="<?php echo base_url().'index.php/project_details'?>"  class="project_link">
                                            <span class="Project_title">Low Project Topics</span><span> [9]</span>
                                        </a>
                                       
                                    </li>
                                    <li class="project_content">
                                        <a href="<?php echo base_url().'index.php/project_details'?>"  class="project_link">
                                            <span class="Project_title">Medical,Pharmaceutical & Health Science Project Topics</span><span> [9]</span>
                                        </a>
                                      
                                    </li>
                                    <li class="project_content">
                                        <a href="<?php echo base_url().'index.php/project_details'?>"  class="project_link">
                                            <span class="Project_title">Sciences Project Topics</span><span> [9]</span>
                                        </a>
                                      
                                    </li>
                                         <li class="project_content">
                                        <a href="<?php echo base_url().'index.php/project_details'?>"  class="project_link">
                                            <span class="Project_title">Social & Management Sciences Project Topics</span><span> [9]</span>
                                        </a>
                                       
                                    </li>
                                </ul>

                                <ul class="pagination">
                                    <li><a href="#!"><i class="fa fa-chevron-left"></i></a></li>
                                    <li class="active"><a href="#!">1</a></li>
                                    <li class="waves-effect"><a href="#!">2</a></li>
                                    <li class="waves-effect"><a href="#!">3</a></li>
                                    <li class="waves-effect"><a href="#!">4</a></li>
                                    <li class="waves-effect"><a href="#!">5</a></li>
                                    <li class="waves-effect"><a href="#!"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/picker.js"></script>

<script type="text/javascript" src="../js/dateValidation.js"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>