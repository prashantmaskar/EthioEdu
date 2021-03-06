<?php  $this->load->view('header'); ?>
        <div class="service-wrap ">
            <div class="row">

                <div class="col s12 m9 grid-example">
                    <div class="gist_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Report Gist</h1>
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
                            <div class="gist_add">
                                <form id="reportgist" method="post" action="<?php echo site_url('index.php/reportgist')?>" class="col m12" enctype="multipart/form-data">
                                    <div class=" form-group input-field col s12">
                                        <input id="Caption" name="caption" type="text" class="validate">
                                        <label for="Caption">Gist Title</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <textarea id="Description" name="Description" class="materialize-textarea"></textarea>
                                        <label for="Description">Description</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <select class="form-control browser-default" name="catagory">
                                            <option value="">Catagory</option>
                                           
                                            <option value="Admission">Admission</option>
                                            <option value="Departmental">Departmental</option>
                                            <option value="Entertainments">Entertainments</option>
                                            <option value="Events">Events</option>
                                            <option value="General">General</option>
                                            <option value=">Part Time">Part Time</option>
                                            <option value="Full Time">Full Time</option>
                                             <option value="Sport">Sport</option>
                                             <option value="Pre Degree">Pre Degree</option>
                                             <option value="Post Degree">Post Degree</option>
                                             <option value="Scholarship">Scholarship</option>
                                             <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group file-field input-field col s12">
                                        <div class="btn">
                                            <span>Attach Photo</span>
                                            <input name="fileformat" type="file" multiple>
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="attach image only">
                                        </div>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <input id="author" type="text" name="auther" class="validate">
                                        <label for="author">Gist written By</label>
                                    </div>
                                    <!--<div class="form-group input-field col s12">
                                        <input id="date" type="date" name="date" class="datepicker">
                                        <label for="date">Date of Posting</label>
                                    </div>-->
                                    <div class="form-group input-field col s12">
                                        <input id="source_link" type="url" name="source_link"class="validate">
                                        <label for="source_link">Source</label>
                                    </div>
                                    <input type="hidden" name="post_type" value="gist">
                                     <input type="hidden" name="approve_status" value="0">
                                   
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
                    <div class="old_gist_list">
                        <h2 class="gist_post_title">Previously Posted Gists</h2>
                    <ul class="latest_news_list">
                    <?php
                     foreach ($gist as $row){
                      $gist_id = $row['post_id'];
                                    $parent = $row['pparent_id'];

                                     $query2 = $this->db->query("select count(*) as row_count from tbl_postresponse where post_id = '".$gist_id."' and pparent_id = '0'");
                      ?>
                            <li class="Latest_news_content">
                                <a href="<?php echo base_url() . 'index.php/gist' ?>" class="gist_link">
                                    <span class="gist_title"><?php echo $row['post_title']; ?></span>
                                </a>
                                <span id="gistdetailinfo" class="hmForumDateFormat">by <strong><a href="#"><?php echo $row['post_author']; ?></a></strong><?php echo $row['post_date']; ?><span class="infoText1"> for <a href="#"><?php echo $row['post_author']; ?></a> | Comments [<?php echo $query2->result()[0]->row_count; ?>]  
                                    </span></span>
                            </li>
                    <?php } ?>
                     </ul>
                    </div>
                </div>
            </div>
        </div>
       <?php $this->load->view('footer'); ?>
<script type="text/javascript" src="<?php echo base_url() .'js/reportgist-validate.js' ?>"></script>



       