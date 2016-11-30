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
                    <div class="tips_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Tips </h1>
                            </div>
                        </div>
                        
                            <?php
                                foreach ($tips as $row){ ?>
                                <div class="gits_content row">
                                    <div class="gist_ainfo">
                                        
                                        <div class="col s11">
                                            
                                            <div class="gist_title">
                                                <h1><a href="#"><?php echo $row['post_title'];?></a></h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="git_img col m12">
                                          <?php $tips_attachment = $row['post_attachment']; ?>
                                        <img class="materialboxed" src="<?php echo base_url() . 'uploads/'.$tips_attachment ?>" style="width:304px;height:228px;">
                                    </div>
                                    <div class="col m12 git_desc">
                                        <p class="black-text"><?php echo $row['post_desc']; ?></p>
                                    </div>
                                   
                                </div>
                               <?php } ?>
                        <div class="col s12 m12 ">
                        <!-- <div>
                            <ul class="pagination">
                                <li><a href="#!"><i class="fa fa-chevron-left"></i></a></li>
                                <li class="active"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                  </div> -->
                            
                        </div>

                    </div>
                </div>
                 <!-- <div>
                            <ul class="pagination">
                                <li><a href="#!"><i class="fa fa-chevron-left"></i></a></li>
                                <li class="active"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                  </div> -->

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