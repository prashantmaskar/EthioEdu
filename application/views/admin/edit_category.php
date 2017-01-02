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
                                    <h5 class="breadcrumbs-title">Edit Category</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>">Dashboard</a>
                                        </li>
                                       
                                    </ol>
                                </div>
                            </div>
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
                    <div class="container">
                        <div class="section">
                           
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">BASIC FORM</h4>
                                            <div class="row">
                                            <?php
                                           foreach ($getcategory_details as $row){ ?>
                                           <?php $cat_id = $row['category_id']; ?>
                                                <form id="addcategory" action="<?php echo site_url('index.php/admin/Edit_Category')?>" method="post" class="col m12">
                                                    <div class="form-group input-field col s12">
                                                    <input type="hidden" value="<?php echo $row['category_id']; ?>" name="category_id">
                                                        <input id="Course_name" name="category_name" type="text" value="<?php echo $row['category_name']; ?>" class="validate">
                                                        <label for="Course_name">Category Name</label>
                                                    </div>
													   <div class=" form-group input-field col s12">
                                                        <select class="form-control browser-default" name="category_type">
                                                            <option value="">Category Type</option>
                                                            <option value="<?php echo $row['category_type']; ?>" <?php echo 'selected="selected"'; ?>><?php echo $row['category_type']; ?></option>
                                                        </select>
                                                    </div>
                                                    <div class="col s5 offset-s5 margin-t-10">
                                                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                                            <i class="mdi-content-send right"></i>
                                                        </button>

                                                    </div>
                                                </form>
                                                <?php } ?>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                </section>
                            </div>
                        </div>
                        <?php  $this->load->view('admin/footer'); ?>
                          <script type="text/javascript" src="<?php echo base_url().'/js/admin/category_validate.js' ?>"></script>
