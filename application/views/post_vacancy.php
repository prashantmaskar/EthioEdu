<?php  $this->load->view('header'); ?>
        <div class="service-wrap ">
            <div class="row">

                <div class="col s12 m9 grid-example">
                    <div class="vacancy_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Post Vacancies</h1>
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

                        <div class="col s12 m12 ">
                            <div class="Vacancy_post">
                                <form id="postvacuncy" method="post" class="col m12" action="<?php echo site_url('index.php/post_vacancy')?>">
                                    <div class="form-group input-field col s12">
                                        <input id="Caption" name="title" type="text" class="validate">
                                        <label for="Caption">Post Caption</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="Sch_name" name="sname" type="text" class="validate">
                                        <label for="Sch_name">School/Collage Name</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="no_vacancy" name="vcount" type="text" class="validate">
                                        <label for="no_vacancy">No.of Vacancy</label>
                                    </div>

                                    <div class="form-group input-field col s12">
                                           <input id="startdate" type="date" class=" datepicker validate" name="sdate" >
                                        <label for="Caption">Date of Bidding</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="enddate" type="date" class=" datepicker validate" name="edate">
                                        <label for="Caption">Last Date of Bidding</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <textarea name="vdesc" id="Description" class="materialize-textarea"></textarea>
                                        <label for="Description">Description</label>
                                    </div>
                                    <input type="hidden" name="approve_status" value="0">
                                    <div class="col s5 offset-s5">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Post
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col s12 m3 z-depth-1">
                    <div class="old_news_list">
                        <h2 class="news_post_title">Previous Vacancies</h2>
                        <ul class="latest_news_list">
                        <?php foreach($previous_vacancy as $row){ ?>
                            <li class="Latest_news_content">
                                <a href="<?php echo base_url(); ?>index.php/vacancy-details?id=<?php echo $row['vacancy_id']; ?>" class="news_link">
                                    <span class="News_title"><?php echo $row['vacancy_name']; ?></span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324"><?php echo $row['username'];?></a></strong> On <?php echo $row['vacancy_date'];?> At <?php echo $row['vacancy_time']; ?><span class="infoText1">   
                                    </span></span>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('footer'); ?>
<script type="text/javascript" src="<?php echo base_url() .'js/post_vacuncy-validate.js' ?>"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>