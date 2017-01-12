<?php  $this->load->view('header'); ?>
        <div class="service-wrap ">
            <div class="row">
                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1 hide-on-small-only">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1 hide-on-small-only">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
                <div class="col s12 m8 grid-example z-depth-1">
                    <div class="news_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">EditSchool </h1>
                            </div>
                         </div>



						  <div class="container">
                        <div class="section">
                            <!-- <p class="caption black-text">List Of All Registered Schools.</p> -->
                            <div class="divider"></div>
                             <div id="table-wrap">
                                  <div class="row">
                                      <div class="col s12 m12 l12">
                                        <table class="bordered">
                                             <thead>
                                                <tr>
                                                    <th data-field="id">School Name</th>
                                                   
                                                    <th data-field="price">Action</th>
                                                </tr>
                                                  <?php
                                                 $sessid= $this->session->userdata('suserid');
                                                $query = $this->db->query("SELECT * FROM `tbl_school_meta` WHERE user_id = '". $sessid."' "); 
                                                //return $query->result_array();
                                                
                                           foreach ($query->result_array() as $row){
                                             $school_id = $row['school_id'];
                                            ?>
                                                <tr>
                                                    
                                                    <td><?php echo $row['school_name']; ?></td>
                                               <td>
                                               <a href="<?php echo base_url() . 'index.php/edituserschool?id='.$school_id?>" class="btn-floating blue" ><i class="small mdi-action-visibility">E</i></a>
                                                </td>
                                                 </tr>
                                                     <?php } ?>
                                            </thead>
                                                    <tbody>
                                              
                                              
                                         
                                            </tbody>







                                           
                                        </table> 
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>

















            

                    </div>
                </div>

                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1 hide-on-small-only">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1 hide-on-small-only">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>
<?php $this->load->view('footer'); ?>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/picker.js"></script>
<script type="text/javascript" src="../js/dateValidation.js"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script> -->