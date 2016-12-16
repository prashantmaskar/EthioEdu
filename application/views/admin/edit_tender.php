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
                                    <h5 class="breadcrumbs-title">Edit Tender</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>">Dashboard</a>
                                        </li>
                                       
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php if(isset($_GET['id'])){$vac_id = $_GET['id'];}
                       // $query = $this->db->query("select * from tbl_vacancy where  vacancy_id = '" .$vac_id. "'");
                        
                                foreach ($tender_details as $row){ 
                        ?>


                    <div class="container">
                        <div class="section">
                       
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Vacancy/Tender FORM</h4>
                                            <div class="row">
                                                <form  id="postvacancyform" method="post" action="<?php echo site_url('index.php/admin/Edit_tender')?>" class="col m12">
                                                    <div class="input-field col s12">
                                                        <input id="Caption" type="text" class="validate" name="title" value="<?php  echo $row['vacancy_name'];?>" >
                                                        <label for="Caption">Post Caption</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input id="Sch_name" type="text" class="validate"  name="sname" value="<?php  echo $row['vacancy_school_name']; ?>">
                                                        <label for="Sch_name">School/Collage Name</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input id="no_vacancy" type="text" class="validate" name="vcount" value="<?php  echo $row['vacancy_count'];?>">
                                                        <label for="no_vacancy">No.of Vacancy</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input id="date" type="date" class="datepicker" name="sdate" value="<?php  echo $row['vacancy_from_date'];?>">
                                                        <label for="date">Start Date of Bidding</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input id="date" type="date" class="datepicker" name="edate"  value="<?php  echo $row['vacancy_to_date'];?>">
                                                        <label for="date">Last Date of Bidding</label>
                                                    </div>

                                                   <div class="form-group input-field col s6">
                                                        <input id="date" name="date" type="date" value="<?php echo $row['vacancy_date'];?>" class="datepicker">
                                                        <label for="date">Date of Posting</label>
                                                    </div>
                                                     <div class="form-group input-field col s6">
                                                        <input id="time" name="time" type="text" value="<?php echo $row['vacancy_time'];?>">
                                                        <label for="date">Time</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <textarea id="Description" class="materialize-textarea" name="vdesc" ><?php  echo $row['vacancy_desc'];?></textarea>
                                                        <label for="Description">Description</label>
                                                    </div>
                                                  <input value="<?php echo $row['vacancy_id']; ?>" name="vacancy_id" type="hidden">
                                                  <input type="hidden" name="approve_status" value="<?php  echo $row['vacancy_approve']; ?>">
                                                    <div class="col s5 offset-s5">
                                                      

                                                        <button class="btn waves-effect waves-light" type="submit" name="action">Update
                                                            <i class="mdi-content-send right"></i>
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
              