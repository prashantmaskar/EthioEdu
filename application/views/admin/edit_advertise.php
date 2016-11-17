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
                                    <h5 class="breadcrumbs-title">Edit Advertise</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">Editu Advertise</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                                            <?php if(isset($_GET['id'])){$add_id = $_GET['id'];}
                        $query = $this->db->query("select * from tbl_advertise where advertise_id = '" .$add_id. "'");
                        
                                foreach ($query->result_array() as $row){ 
                        ?>

                    <div class="container">
                        <div class="section">
                            <p class="caption">Fill all required fields.</p>
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Advertise FORM</h4>
                                            <div class="row">
                                               <form id="advertise" class="col m12" method="post" action="<?php echo site_url('index.php/admin/Edit_advertise')?>" enctype="multipart/form-data">
                                    <div class=" form-group input-field col s12">
                                        <input id="Caption" name="name" type="text" class="validate" value="<?php  echo $row['advertise_name'];?>">
                                        <label for="Caption">Client Name</label>
                                    </div>
                                <div class="form-group input-field col s12">
                                        <input id="Caption" name="email" type="email" class="validate" value="<?php  echo $row['advertise_email'];?>">
                                        <label for="Caption">Email</label>
                                    </div>
                                      <div class="form-group input-field col s12">
                                        <input id="Caption" name="contact" type="text" class="validate" value="<?php  echo $row['advertise_number'];?>">
                                        <label for="Caption">Contact</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                          <?php  $options = $row['advertise_category']; ?>
                                        <select class="form-control browser-default" name="catagory">
                                                            <option value="">Category</option>
                                                            <option value="Admission" <?php if($options=="Admission") echo 'selected="selected"'; ?>>Admission</option>
                                                            <option value="Departmental" <?php if($options=="Departmental") echo 'selected="selected"'; ?>>Departmental</option>
                                                            <option value="Entertainments" <?php if($options=="Entertainments") echo 'selected="selected"'; ?>>Entertainments</option>
                                                            <option value="Events" <?php if($options=="Events") echo 'selected="selected"'; ?>>Events</option>
                                                            <option value="General" <?php if($options=="General") echo 'selected="selected"'; ?>>General</option>
                                                            <option value="Part Time" <?php if($options=="Part Time") echo 'selected="selected"'; ?>>Part Time</option>
                                                            <option value="Full Time" <?php if($options=="Full Time") echo 'selected="selected"'; ?>>Full Time</option>
                                                            <option value="Sport" <?php if($options=="Sport") echo 'selected="selected"'; ?>>Sport</option>
                                                            <option value="Pre Degree" <?php if($options=="Pre Degree") echo 'selected="selected"'; ?>>Pre Degree</option>
                                                            <option value="Post Degree" <?php if($options=="Post Degree") echo 'selected="selected"'; ?>>Post Degree</option>
                                                            <option value="Scholarship" <?php if($options=="Scholarship") echo 'selected="selected"'; ?>>Scholarship</option>
                                                            <option value="Scholarship" <?php if($options=="Other") echo 'selected="selected"'; ?>>Other</option>
                                                        </select>
                                                    </div>
									<div class="form-group input-field col s12">
                                         <?php  $options = $row['advertise_position']; ?>
                                        <select class="form-control browser-default" name="addposition" >
                                           <option  value="" disabled="" selected="">Add Position</option>
                                                           <option value="Top" <?php if($options=="Admission") echo 'selected="selected"'; ?>>Top</option>
                                                            <option value="left" <?php if($options=="Admission") echo 'selected="selected"'; ?>>left</option>
                                                            <option value="Right" <?php if($options=="Admission") echo 'selected="selected"'; ?>>Right</option>
                                        </select>
                                      <!--  <label>Add Position</label>-->
                                    </div>
									<div class="form-group input-field col s12">
                                        <select class="form-control browser-default " name="paymentmethod" >
                                           <option  value="" disabled="" selected="">Payment Method</option>
                                                            <option value="1">M-Birr</option>
                                                            <option value="2">Hello-Cash</option>
                                        </select>
                                       <!-- <label>Payment Method</label>-->
                                    </div>
									<div class="form-group input-field col s12">
                                                        <input id="subject" type="text" class="validate" name="subject" value="<?php  echo $row['advertise_subject'];?>">
                                                        <label for="subject">Subject</label>
                                                    </div>
													

                                                    <div class="form-group file-field input-field col s12">
                                                        <div class="btn">
                                                            <span>Attach Add</span>
                                                            <input type="file" name="fileformat" multiple>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Upload Add baner">
                                                        </div>
                                                    </div>
													<div class="form-group input-field col s12">
                                                        <textarea id="message" class="materialize-textarea" name="message"><?php echo $row['advertise_desc'];?></textarea>
                                                        <label for="message">Message</label>
                                                    </div> 
                                                       <input value="<?php echo $row['advertise_id']; ?>" name="advertise_id" type="hidden">
													<!-- <div class="captch">
                                                     <img class="responsive-img" src="<?php echo base_url() . 'images/Captcha.png' ?>">
                                                       </div>
													<div class=" form-group input-field col s12">
                                                 <input id="captch" type="text" name="captcha" class="validate">
                                                  <label for="captch">Add Above Code</label>
                                                    </div>-->
                                       
                                    <div class="col s5 offset-s5 margin-b-10">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">update
                                            <i class="material-icons right">update</i>
                                        </button>
                                    </div>
                                    <?php } ?>
                                </form>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
       <?php  $this->load->view('admin/footer'); ?>
       <script type="text/javascript" src="<?php echo base_url().'/js/admin/admin-advertise.js' ?>"></script>