<?php  $this->load->view('header'); ?>
        <div class="service-wrap ">
            <div class="row">

                <div class="col s12 m9 grid-example">
                    <div class="news_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Report News</h1>
                            </div>
                        </div>
                        <div class="col s12 m12 ">
                            <div class="news_add">
                                <form class="col m12">
                                    <div class="input-field col s12">
                                        <input id="Caption" type="text" class="validate">
                                        <label for="Caption">News Caption</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <textarea id="Description" class="materialize-textarea"></textarea>
                                        <label for="Description">Description</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <select >
                                            <option value="" disabled selected>Category</option>
                                            <option value="1">Admission</option>
                                            <option value="2">Departmental</option>
                                            <option value="3">Entertainments</option>
                                            <option value="4">Events</option>
                                            <option value="5">General</option>
                                            <option value="6">Part Time</option>
                                            <option value="7">Full Time</option>
                                             <option value="8">Sport</option>
                                             <option value="9">Pre Degree</option>
                                             <option value="10">Post Degree</option>
                                             <option value="8">Scholarship</option>
                                             <option value="8">Other</option>
                                        </select>
                                        <label>Category</label>
                                    </div>
                                    <div class="file-field input-field col s12">
                                        <div class="btn">
                                            <span>Attach Photo</span>
                                            <input type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload one or more Photo">
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="author" type="text" class="validate">
                                        <label for="author">News written By</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="date" type="date" class="datepicker">
                                        <label for="date">Date of Posting</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="source_link" type="text" class="validate">
                                        <label for="source_link">Source</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="p_caption" type="text" class="validate">
                                        <label for="p_caption">Photo Caption</label>
                                    </div>
                                    <div class="col s5 offset-s5">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Publish
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
                        <h2 class="news_post_title">Previously Posted News</h2>
                        <ul class="news_list">
                            <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>" class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1"> for <a href="http://myschool.com.ng/ibbu/">ibbu</a> | Comments [7]  
                                    </span></span>
                            </li>
                            <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>"  class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1"> for <a href="http://myschool.com.ng/ibbu/">ibbu</a> | Comments [7]  
                                    </span></span>
                            </li>
                            <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>"  class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1"> for <a href="http://myschool.com.ng/ibbu/">ibbu</a> | Comments [7]  
                                    </span></span>
                            </li>
                            <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>"  class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1"> for <a href="http://myschool.com.ng/ibbu/">ibbu</a> | Comments [7]  
                                    </span></span>
                            </li>
                            <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>"  class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1"> for <a href="http://myschool.com.ng/ibbu/">ibbu</a> | Comments [7]  
                                    </span></span>
                            </li>
                            <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>"  class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1"> for <a href="http://myschool.com.ng/ibbu/">ibbu</a> | Comments [7]  
                                    </span></span>
                            </li>
                            <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>"  class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1"> for <a href="http://myschool.com.ng/ibbu/">ibbu</a> | Comments [7]  
                                    </span></span>
                            </li>
                            <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>"  class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1"> for <a href="http://myschool.com.ng/ibbu/">ibbu</a> | Comments [7]  
                                    </span></span>
                            </li>
                            <li class="news_content">
                                <a href="<?php echo base_url() . 'index.php/news_detail' ?>"  class="news_link">
                                    <span class="News_title">IBBU Online Admission Screening Exercise 2016: Eligibility, Screening And Registration Details</span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="http://myschool.com.ng/members/show.php?profile=457324">serenityAliyu</a></strong> [22-Jun-2016 [11:32:43]]<span class="infoText1"> for <a href="http://myschool.com.ng/ibbu/">ibbu</a> | Comments [7]  
                                    </span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       <?php $this->load->view('footer'); ?>