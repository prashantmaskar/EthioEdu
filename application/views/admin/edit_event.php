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
                                    <h5 class="breadcrumbs-title">Edit Events</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">Edit Events</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                    <?php if(isset($_GET['id'])){$event_id = $_GET['id'];}
                        $query = $this->db->query("select * from tbl_posts where post_type='event'  and post_id = '" .$event_id. "'");
                        
                                foreach ($query->result_array() as $row){ 
                        ?>
                        <div class="section">
                            <p class="caption" style="color:black"; >Fill all required fields.</p>
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Event FORM</h4>
                                            <div class="row">
                                                <form id="addevent" action"<?php echo site_url('index.php/admin/Event')?>" method="post" enctype="multipart/form-data" method="post" class="col m12">
                                                   
                                                    <div class="form-group input-field col s12">
                                                        <input id="event_tital" name="event_tital" value="<?php  echo $row['post_title'];?>" type="text" class="validate">
                                                        <label for="event_tital">Event Title</label>
                                                    </div>
                                                    
                                                    <div class="form-group input-field col s12">
                                                        <input id="event_venue" name="event_venue" type="text" value="<?php  echo $row['post_venue'];?>" class="validate">
                                                        <label for="Caption">Event Happening in</label>
                                                    </div>

                                                     <div class="form-group file-field input-field col s12">
                                                        <div class="btn">
                                                            <span>Attach Photo</span>
                                                            <input type="file"  name="avatar" multiple>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Upload one or more Photo" value="<?php //echo $row['post_attachment'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group input-field col s6">
                                                        <input id="date" name="date" type="date" value="<?php echo $row['post_date'];?>" class="datepicker">
                                                        <label for="date">Date of posting</label>
                                                    </div>
                                                     <div class="form-group input-field col s6">
                                                        <input id="time" name="time" type="text" value="<?php echo $row['post_time'];?>">
                                                        <label for="date">Time</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <textarea id="Description" name="Description" class="materialize-textarea"><?php echo $row['post_desc'];?></textarea>
                                                        <label for="Description">Description</label>
                                                    </div>

                                                    <!-- <div class="form-group input-field col s12">
                                                            <input id="date" type="date" name="date" class="datepicker">
                                                            
                                                    </div>-->
                                                    <div class=" form-group input-field col s12">
                                                        <input id="post_by" value="<?php echo $row['post_author'];?>" type="text" name="eventby" class="validate">
                                                        <label for="post_by">Event Posted By</label>
                                                    </div>
                                                    <input value="<?php echo $row['post_type']; ?>" name="post_type" type="hidden">
                                                    <input value="<?php echo $row['post_id']; ?>" name="post_id" type="hidden">
                                                    <input type="hidden" name="approve_status" value="<?php echo $row['post_approve']; ?>">
                                                    <div class="col s5 offset-s5">
                                                        <button class="btn waves-effect waves-light" type="submit" name="action">Update
                                                            <i class="mdi-action-done right"></i>
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
                       <script type="text/javascript" src="<?php echo base_url().'/js/admin/admin-event.js' ?>"></script>
