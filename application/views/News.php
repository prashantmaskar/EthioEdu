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
                    <div class="news_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">News <span class="News-button"><a class="waves-effect waves-light btn"href="<?php echo site_url('index.php/reportnews')?>">Report News</a></span></h1>
                            </div>
                        </div>
						<form id="sortnews" method="post" action="<?php echo base_url() . 'index.php/news' ?>">
                        <div class="col m12 s12">
                            <div class="news_sort_form col m12">
                                <div class="col s2">
                                    <p class="black-text">Sort News:</p>
                                </div>
                                <div class="input-field col s4">
                                           <input id="startdate" type="date" class=" datepicker validate" name="newsd1" >
                                        <label for="Caption">News From</label>
                                    </div>
                                <div class="input-field col s4">
                                        <input id="enddate" type="date" class=" datepicker validate" name="newsd2">
                                        <label for="Caption">News To</label>
                                    </div>
                                <div class="input-field col s2">
                                         <button class="btn waves-effect waves-light" type="submit" name="action">search
                                            <i class="material-icons ">search</i>
                                        </button>
                                    </div>
                            </div>
                        </div>
						</form>
                        <div class="col s12 m12 ">
                            <div class="news_list_wrap">
                                <ul class="news_list">
                                <?php
                                if(isset($_POST['action'])){

                                   echo  $sdate = $_POST['newsd1'];
                                   echo $edate = $_POST['newsd2'];

                                    $query = $this->db->query("select * from tbl_posts where post_date between '".$sdate."' and '".$edate."' and  post_type = 'news' and post_approve = 1");

                                    }else{

                                        $query = $this->db->query("select * from tbl_posts where post_type = 'news' and post_approve = 1");

                                    }
                                foreach ($news as $row){ ?>
                                    <li class="news_content">
                                        <?php $news_id = $row['post_id'];
                                        ?>
                                        <a href="<?php echo base_url().'index.php/news_detail?id='.$news_id ?>" class="news_link"><span class="News_title"><?php echo $row['post_title']; ?> </span>
                                        </a>
                                        <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="#"><?php echo $row['post_author']; ?></a></strong> <?php echo $row['post_date']; ?><span class="infoText1"> for <a href="#"><?php echo $row['post_category'];?></a> | Comments [7]  
                                            </span></span>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/picker.js"></script>
<script type="text/javascript" src="../js/dateValidation.js"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>