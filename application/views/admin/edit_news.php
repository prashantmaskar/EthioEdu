<?php  $this->load->view('admin/header'); ?>
        <!--start main-->
        <div id="main">
            <div class="wrapper">
                <?php  $this->load->view('admin/sidebar'); ?>
                <section id="content">
                    <div id="breadcrumbs-wrapper">
                        <!-- Search for small screen -->
                        <div class="header-search-wrapper grey hide-on-large-only">
                            <i class="mdi-action-search active"></i>
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <h5 class="breadcrumbs-title">Edit News</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">Edit News</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">

                        <?php $news_id = $_GET['id'];
                        $query = $this->db->query("select * from tbl_posts where post_type='news'  and post_id = '" .$news_id. "'");
                        
                                foreach ($query->result_array() as $row){ 
                        ?>
                        <div class="section">
                            <p class="caption">Fill all required fields.</p>
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">News FORM</h4>
                                            <div class="row">
                                                <form id="addnews" class=" form-control col m12" action="<?php echo site_url('index.php/admin/Addnews')?>" method="post" enctype="multipart/form-data">
                                                    <div class="form-group input-field col s12">
                                                        <input id="Caption" name="caption" type="text" value="<?php  echo $row['post_title'];?>" class="validate">
                                                        <label for="Caption">News Title</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <textarea id="Description" name="Description"class="materialize-textarea"><?php echo $row['post_desc'];?></textarea>
                                                        <label for="Description">Description</label>
                                                    </div>
                                                    <div class="form-group input-field col s12 has-success">
                                                        <select value="<?php echo $row['post_category']; ?>" class="form-control browser-default" name="catagory">
                                                            <option value="">Category</option>
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
                                                    </div>
                                                    <div class="form-group file-field input-field col s12">
                                                        <div class="btn">
                                                            <span>Attach Photo</span>
                                                            <input type="file"  name="avatar" multiple>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Upload one or more Photo">
                                                        </div>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="author" type="text" value="<?php echo $row['post_author'];?>" name="author" class="validate">
                                                        <label for="author">News written By</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="date" name="date" type="date" value="<?php echo $row['post_date'];?>" class="datepicker">
                                                        <label for="date"></label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="source_link" name="source_link" value="<?php echo $row['post_source'];?>" type="url" class="validate">
                                                        <label for="source_link">Source</label>
                                                    </div>
                                                    <input value="<?php echo $row['post_type']; ?>" name="post_type" type="hidden">
                                                    <input value="<?php echo $row['post_id']; ?>" name="post_id" type="hidden">
                                                    <!--<div class="form-group input-field col s12">
                                                        <input id="p_caption" name="p_caption" type="text" class="validate">
                                                        <label for="p_caption">Photo Caption</label>
                                                    </div>-->
                                                    <div class="col s5 offset-s5">
                                                        <button class="btn waves-effect waves-light" type="submit" name="action">Update
                                                            <i class="material-icons right"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                </div>
                                </div>
                                <?php } ?>
                                </div>
                                </section>
                            </div>
                        </div>
                        <?php  $this->load->view('admin/footer'); ?>
                        <script type="text/javascript" src="<?php echo base_url().'/js/admin/admin-Addnews.js' ?>"></script>