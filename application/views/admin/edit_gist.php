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
                                    <h5 class="breadcrumbs-title">Add Gist</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">Add Gist</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                     <?php if(isset($_GET['id'])){$gist_id = $_GET['id'];}
                        $query = $this->db->query("select * from tbl_posts where post_type='gist'  and post_id = '" .$gist_id. "'");
                        
                                foreach ($query->result_array() as $row){ 
                        ?>
                        <div class="section">
                            <p class="caption">Fill all required fields.</p>
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">GIST FORM</h4>
                                            <div class="row">
                                                <form id="addgist" class=" form-control col m12" action="<?php echo site_url('index.php/admin/edit_gist')?>" method="post" enctype="multipart/form-data">
                                                    <div class="form-group input-field col s12">
                                                        <input id="Caption" name="caption" type="text" value=" <?php echo $row['post_title'];?>" class="validate">
                                                        <label for="Caption">Gist Title</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <textarea id="Description" name="Description" class="materialize-textarea"><?php echo $row['post_desc'];?></textarea>
                                                        <label for="Description">Description</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                     <?php  $options = $row['post_category']; ?>
                                        <select class="form-control browser-default" name="catagory">
                                            <option value="">Catagory</option>
                                           
                                            <option value="Admission" <?php if($options=="Admission") echo 'selected="selected"'; ?>>Admission</option>
                                            <option value="Departmental" <?php if($options=="Departmental") echo 'selected="selected"'; ?>>Departmental</option>
                                            <option value="Entertainments"<?php if($options=="Entertainments") echo 'selected="selected"'; ?>>Entertainments</option>
                                            <option value="Events"<?php if($options=="Events") echo 'selected="selected"'; ?>>Events</option>
                                            <option value="General"<?php if($options=="General") echo 'selected="selected"'; ?>>General</option>
                                            <option value=">Part Time"<?php if($options=="Part Time") echo 'selected="selected"'; ?>>Part Time</option>
                                            <option value="Full Time"<?php if($options=="Full Time") echo 'selected="selected"'; ?>>Full Time</option>
                                             <option value="Sport"<?php if($options=="Sport") echo 'selected="selected"'; ?>>Sport</option>
                                             <option value="Pre Degree"<?php if($options=="Pre Degree") echo 'selected="selected"'; ?>>Pre Degree</option>
                                             <option value="Post Degree"<?php if($options=="Post Degree") echo 'selected="selected"'; ?>>Post Degree</option>
                                             <option value="Scholarship"<?php if($options=="Scholarship") echo 'selected="selected"'; ?>>Scholarship</option>
                                             <option value="Other"<?php if($options=="Other") echo 'selected="selected"'; ?>>Other</option>
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
                                                        <input id="author" type="text" name="author" value="<?php echo $row['post_author'];?>" class="validate">
                                                        <label for="author">Gist written By</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="date" name="date" type="date" value="<?php echo $row['post_date'];?>" class="datepicker">
                                                        <label for="date"></label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="source_link" name="source_link" type="text" value="<?php echo $row['post_source'];?>" class="validate">
                                                        <label for="source_link">Source</label>
                                                    </div>
                                                    <!--  <input type="hidden" name="post_type" value="gist">-->
                                                      <input value="<?php echo $row['post_type']; ?>" name="post_type" type="hidden">
                                                    <input value="<?php echo $row['post_id']; ?>" name="post_id" type="hidden">
                                                    <!--<div class="form-group input-field col s12">
                                                        <input id="p_caption" name="p_caption" type="text" class="validate">
                                                        <label for="p_caption">Photo Caption</label>
                                                    </div>-->
                                                    <input type="hidden" name="approve_status" value="<?php echo $row['post_approve']; ?>">
                                                    <div class="col s5 offset-s5">
                                                        <button class="btn waves-effect waves-light" type="submit" name="action">Publish
                                                            <i class="material-icons right"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div> 
                                        </div>
                                    </div>
                                     <?php } ?>
                                </div>
                                </section>
                            </div>
                        </div>
                        <?php  $this->load->view('admin/footer'); ?>
                        <script type="text/javascript" src="<?php echo base_url().'/js/admin/admin-Addgist.js' ?>"></script>