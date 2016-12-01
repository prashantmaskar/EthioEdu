<?php  $this->load->view('header'); ?>
<html>
<body>
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
                    <div class="news_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Vacancies/Tender <span class="News-button"><a href="<?php echo base_url().'index.php/post_vacancy' ?>" class="waves-effect waves-light btn">Post Vacancy</a></span></h1>
                            </div>
                        </div>
						<form id="sorttender" method="post" action="<?php echo base_url() . 'index.php/vactender/search' ?>">
                        <div class="col m12 s12">
                            <div class="news_sort_form col m12">
                                <div class="col s3">
                                    <p class="black-text">Sort Tenders:</p>
                                </div>
                                <div class="form-control input-field col s3">
                                    <input id="startdate" type="date" class="datepicker validate" name="vacd1">
                                    <label for="Caption"> From</label>
                                </div>
                                <div class="form-control  input-field col s3">
                                    <input id="enddate" type="date" class=" datepicker validate" name="vacd2">
                                    <label for="Caption"> To</label>
                                </div>
                                <div class="input-field col s2">
                                    <button class="btn waves-effect waves-light" type="submit" name="searchaction">search
                                        <i class="material-icons">search</i>
                                    </button>
                                </div>
                            </div>
                        </div>
						</form>
                        <div class="col s12 m12 ">
                            <div class="vacancy_list_wrap">
                                <ul class="vacancy_list">
                                  <?php
                                  if(isset($_POST['searchaction'])){

                                    $date1 = $_POST['vacd1'];
                                 $totimedate = strtotime($date1);
                                 $sdate = date("Y-m-d", $totimedate);
                                 
                                    $date2 = $_POST['vacd2'];
                                 $totimedate = strtotime($date2);
                                 $edate = date("Y-m-d", $totimedate);

                                    $query = $this->db->query("select * from tbl_vacancy where vacancy_date between '".$sdate."' and '".$edate."' and vacancy_approve = 1");

                                    }else{

                                        $query = $this->db->query("select * from tbl_vacancy where vacancy_approve = 1");

                                    }
                                foreach ($vacancy as $row){ ?>

                                    <li class="vacancy_content">
                                     <?php $vac_id = $row->vacancy_id;
                                        ?>
                                        <a href="<?php echo base_url() . 'index.php/vacancy-details?id='.$vac_id ?>" class="vacancy_link">
                                            <span class="vacancy_title"><?php echo $row->vacancy_name; ?></span>
                                        </a>
                                        <span class="tender_sinfo"><strong><span class="t_date">Last Date: <?php 
                                        echo $row->vacancy_to_date; ?></span>&nbsp;</strong><?php
                                         $desc= $row->vacancy_desc;
                                         $limitdesc = substr($desc,0,80);
                                        $etc = '...';
                                        echo $limitdesc."".$etc;
                                        ?></span>
                                    </li>
                                    <?php } ?>
                                   </ul>

                             <!--   <ul class="pagination">
                                    <li><a href="#!"><i class="fa fa-chevron-left"></i></a></li>
                                    <li class="active"><a href="#!">1</a></li>
                                    <li class="waves-effect"><a href="#!">2</a></li>
                                    <li class="waves-effect"><a href="#!">3</a></li>
                                    <li class="waves-effect"><a href="#!">4</a></li>
                                    <li class="waves-effect"><a href="#!">5</a></li>
                                    <li class="waves-effect"><a href="#!"><i class="fa fa-chevron-right"></i></a></li>
                                </ul> -->
                                <?php echo $pagination; ?>
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
