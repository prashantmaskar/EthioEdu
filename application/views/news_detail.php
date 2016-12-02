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
                    <div class="news_details z-depth-1">
                        <div class="col m12 s12 ">
                        <?php $news_id = $_GET['id'];
                        $query = $this->db->query("select * from tbl_posts where post_type='news'  and post_id = '" .$news_id. "'");
                        
                                foreach ($query->result_array() as $row){ 
                                    
                        ?>

                            <div class="news_heading ">
                                <span>Posted: <?php echo $row['post_date']; ?> into <?php echo $row['post_category'];?> by <?php echo $row['post_author']; ?> | 155 Comments </span>
                                <h1 ><?php echo $row['post_title']; ?></h1>
                            </div>
                        </div>

                        <div class="news_img">

                       <?php $news_attachment = $row['post_attachment']; ?>
                            <img src="<?php echo base_url() .'uploads/'.$news_attachment ?>">
                        </div>
                        <div class="col s12">
                            <a class="post-share facebook" href="http://www.facebook.com/plugins/like.php?href=http://medialoot.com/blog/&width&layout=standard&action=like&show_faces=true&share=true&height=80&appId=#################" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=100,width=200');
                                    return false;">Facebook<span>150</span></a>
                            <a class="post-share twitter" href="https://twitter.com/share?url=http://medialoot.com/blog/&text=Text for Twitter Here&via=medialoot" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                                    return false;">Twitter<span>250</span></a>
                            <a class="post-share gplus" href="https://plus.google.com/share?url=http://medialoot.com/blog/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                                    return false;">Google Plus<span>120</span></a>
                        </div>
                        <div class="news_detal_content">
                            <p class="black-text"></p>
                           <?php echo $row['post_desc']; ?>
                        </div>

                        <div class="comment_box row">
                            <div class="col m12">
                                <h3>Leave a Reply</h3>
                                <form id="newsdetails" method="post" action="#">
                                <div class="input-field col m5">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" name="username" type="text" class="validate">
                                    <label for="icon_prefix">Name</label>
                                </div>
                                <div class="input-field col m12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="icon_prefix2" name="comment" class="materialize-textarea"></textarea>
                                    <label for="icon_prefix2">Comment</label>
                                </div>
                                <button class="btn waves-effect waves-light col m2 offset-m1 margin-b-10" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
<?php } ?>
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
<script type="text/javascript" src="<?php echo base_url() .'js/newsdetails-validate.js' ?>"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>







