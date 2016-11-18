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
                <div class="col s12 m7 grid-example">
                    <div class="vacancy_details col m12 z-depth-1">
                        <div class="col m12 s12">
                        <?php $vac_id = $_GET['id'];
                        $query = $this->db->query("select * from tbl_vacancy where vacancy_id = '" .$vac_id. "'");
                        
                                foreach ($query->result_array() as $row){ 
                                    
                        ?>
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Vacancy Details</h1>
                            </div>
                        </div>
                        <div class="col s12 m12 ">
                            <div class="vacancy_detail_wrap">
                                <div class="col m12 s12">
                                    <div class="vacancy_heading">
                                        <h1><?php echo $row['vacancy_name']; ?></h1>
                                    </div>
                                </div>
                                <div class="vcount_wrap col m12">
                                    <div class="col m4 s4">
                                        <div class="vacancy_count">
                                            <span class="icon_wrap">
                                                <i class="fa fa-users fa-2x"></i>
                                            </span>
                                            <h3>Vacancies</h3>
                                            <span class="count"><?php echo $row['vacancy_count']; ?></span>
                                        </div>
                                    </div>
                                    <div class="col m4 s4">
                                        <div class="vacancy_count">
                                            <span class="icon_wrap">
                                                <i class="fa fa-calendar fa-2x"></i>
                                            </span>
                                            <h3>Last Date</h3>
                                            <span class="count"><?php echo $row['vacancy_to_date']; ?></span>
                                        </div>
                                    </div>
                                    <div class="col m4 s4">
                                        <div class="vacancy_count no-border">
                                            <span class="icon_wrap">
                                                <i class="fa fa-cog fa-2x"></i>
                                            </span>

                                            <h3>Status</h3>
                                            <?php 

                                            $date = date('d F, Y');
                                            $enddate = $row['vacancy_to_date'];

                                            if(strtotime($date) > strtotime($enddate)){ ?>

                                            <span class="count">Closed</span>
                                       <?php     }
                                            else{ ?>
                                             <span class="count">Open</span>
                                          <?php  } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col m12">
                                    <div class="vacn_details">
                                        <h2>Vacancy Details</h2>
                                        <p></p>
                                        <?php echo $row['vacancy_desc']; ?> 
                                        
                                    </div>
                                </div>
                                 <?php } ?>
                                <div class="col m12">
                                    <div class="school_social">
                                        <ul>
                                            <li><a href="#" class="waves-effect waves-light btn facebook darken-3"><i class="fa fa-facebook-square"></i> Facebook</a></li> 

                                            <li><a href="#" class="waves-effect waves-light btn linkedin darken-3"><i class="fa fa-linkedin"></i> Linkedin</a></li> 

                                            <li><a href="#" class="waves-effect waves-light btn twitter darken-3"><i class="fa fa-twitter"></i> Twitter</a></li> 

                                            <li><a href="#" class="waves-effect waves-light btn googleplus darken-3"><i class="fa fa-google-plus"></i> Google</a></li> 

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col s12 m3 z-depth-1">
                    <div class="latest_news_wrap ">
                        <h1 class="red_label_title">Latest News</h1>
                        <ul class="latest_news_list">
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>

                        </ul>
                    </div>

                    <div class="Most_news_wrap ">
                        <h1 class="red_label_title">Most Read</h1>
                        <ul class="Most_news_list">
                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li> <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>

                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Most_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                            <li class="Latest_news_content">
                                <a href="#">IBBU Online Admission Screening ... </a>
                                (8)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
      <?php $this->load->view('footer'); ?>