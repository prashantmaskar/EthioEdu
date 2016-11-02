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
                                        <input id="date" type="date" name="sdate" class="datepicker">
                                        <label for="date">Date of Bidding</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="date" name="edate" type="date" class="datepicker">
                                        <label for="date">Last Date of Bidding</label>
                                    </div>

                                    <div class="form-group input-field col s12">
                                        <select class="form-control browser-default" name="vstatus">
                                            <option value="">Status</option>
                                            <option value="Close">Close</option>
                                            <option value="Open">Open</option>

                                        </select>
                                        
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <textarea name="vdesc" id="Description" class="materialize-textarea"></textarea>
                                        <label for="Description">Description</label>
                                    </div>
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
                        <h2 class="news_post_title">Previous Vacancies News</h2>
                        <ul class="news_list">
                            <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>" class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1">   
                                    </span></span>
                            </li>
                            <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>" class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1">   
                                    </span></span>
                            </li>
                            <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>" class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1">   
                                    </span></span>
                            </li>
                            <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>" class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1">   
                                    </span></span>
                            </li>
                            <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>" class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1">   
                                    </span></span>
                            </li>
                               <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>" class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1">   
                                    </span></span>
                            </li>
                               <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>" class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1">   
                                    </span></span>
                            </li>
                               <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>" class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1">   
                                    </span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('footer'); ?>






<link rel="stylesheet" type="text/css" href="../css/bootstrapValidator.css">
<script type="text/javascript" src="../js/bootstrapValidator.js"></script>
<script type="text/javascript" src="../js/post_vacuncy-validate.js"></script>
