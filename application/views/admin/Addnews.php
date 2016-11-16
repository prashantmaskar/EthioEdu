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
                                    <h5 class="breadcrumbs-title">Add News</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">Add News</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
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
                                                        <input id="Caption" name="caption" type="text" class="validate ">
                                                        <label for="Caption">News Title</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <textarea id="Description" name="Description" class="materialize-textarea"></textarea>
                                                        <label for="Description">Description</label>
                                                    </div>
                                                    <div class="form-group input-field col s12 has-success">
                                                        <select class="form-control browser-default" name="catagory">
                                                            <option value="" disabled selected>Category</option>
                                                            <option value="Admission">Admission</option>
                                                        <option value="Departmental">Departmental</option>
                                                 <option value="Entertainments">Entertainments</option>
                                                            <option value="Events">Events</option>
                                                            <option value="General">General</option>
                                                            <option value="Part Time">Part Time</option>
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
                                                            <input type="file"  name="avatar" multiple>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Upload one or more Photo">
                                                        </div>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="author" type="text" name="author" class="validate">
                                                        <label for="author">News written By</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="date" name="date" type="text" class="datepicker validate">
                                                        <label for="date"></label>
                                                    </div>
                                             <div class="form-group input-field col s12">
                                                        <input id="source_link" name="source_link" type="url" class="validate">
                                                        <label for="source_link">Source</label>
                                                    </div>
                                                    <input value="news" name="post_type" type="hidden">
                                                    <!--<div class="form-group input-field col s12">
                                                        <input id="p_caption" name="p_caption" type="text" class="validate">
                                                        <label for="p_caption">Photo Caption</label>
                                                    </div>-->
                                                    <div class="col s5 offset-s5">
                                                        <button class="btn waves-effect waves-light" type="submit" name="action">Publish
                                                            <i class="material-icons right"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                </section>
                            </div>
                        </div>
                        <?php  $this->load->view('admin/footer'); ?>
                        <script type="text/javascript" src="<?php echo base_url().'/js/admin/admin-Addnews.js' ?>"></script>
                       <script> $('.datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
});</script>
