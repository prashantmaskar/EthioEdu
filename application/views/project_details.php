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
                <div class="col s12 m8 grid-example">
                    <div class="project_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Project in Details </h1>
                            </div>
                        </div>
                        
                        <div class="col s12 m12 ">
                            <div class="project_list_wrap">
                               
                                   <ul class="project_list">
                                  
                                    <?php foreach($project_topics as $row){
                                                       ?>


                                    <li class="project_content">
                                        <a href="#" class="vacancy_link">
                                            <span class="project_title"><?php echo $row['project_title'];?></span><br>
                                        </a>
                                         <span class="project_sinfo">Course:<a href="#"><?php echo $row['project_course'];?></a> Format: <a href="#"><?php echo $row['project_format'];?></a> Type:<a href="#">Project Topic</a> Price:<strong class="green_text">4000</strong></span>
                                    </li>
                                    <?php } ?>
                                  

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