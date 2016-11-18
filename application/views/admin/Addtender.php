<?php  $this->load->view('admin/header'); ?>
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
                                    <h5 class="breadcrumbs-title">Add Tender</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">Add Tender</a>
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
                            <p class="caption">Fill all required fields.</p>
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Vacancy/Tender FORM</h4>
                                            <div class="row">
                                                <form  id="postvacancyform" method="post" action="<?php echo site_url('index.php/admin/Addtender')?>" class="col m12">
                                                    <div class="input-field col s12">
                                                        <input id="Caption" type="text" class="validate" name="title">
                                                        <label for="Caption">Post Caption</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input id="Sch_name" type="text" class="validate"  name="sname">
                                                        <label for="Sch_name">School/Collage Name</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input id="no_vacancy" type="text" class="validate" name="vcount">
                                                        <label for="no_vacancy">No.of Vacancy</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input id="date" type="date" class="datepicker" name="sdate">
                                                        <label for="date">Date of Bidding</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input id="date" type="date" class="datepicker" name="edate">
                                                        <label for="date">Last Date of Bidding</label>
                                                    </div>

                                                   
                                                    <div class="input-field col s12">
                                                        <textarea id="Description" class="materialize-textarea" name="vdesc"></textarea>
                                                        <label for="Description">Description</label>
                                                    </div>
                                                    <input type="hidden" name="approve_status" value="0">
                                                    <div class="col s5 offset-s5">
                                                        <button class="btn waves-effect waves-light" type="submit" name="action">Post
                                                            <i class="mdi-content-send right"></i>
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
                        <script type="text/javascript" src="<?php echo base_url().'/js/admin/admin-Addtender.js' ?>"></script>