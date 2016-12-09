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
                                    <h5 class="breadcrumbs-title">Add Advertise</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>">Dashboard</a>
                                        </li>
                                        <li><a href="<?php echo base_url() . 'index.php/admin/advertise' ?>">Add Advertise</a>
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
                                            <h4 class="header2">Advertise FORM</h4>
                                            <div class="row">
                                               <form id="advertise" class="col m12" method="post" action="<?php echo site_url('index.php/admin/Advertise')?>" enctype="multipart/form-data">
                                    <div class=" form-group input-field col s12">
                                        <input id="Caption" name="name" type="text" class="validate">
                                        <label for="Caption">Client Name</label>
                                    </div>
                                <div class="form-group input-field col s12">
                                        <input id="Caption" name="email" type="email" class="validate">
                                        <label for="Caption">Email</label>
                                    </div>
                                      <div class="form-group input-field col s12">
                                        <input id="Caption" name="contact" type="text" class="validate">
                                        <label for="Caption">Contact</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <select class="form-control browser-default" name="catagory" >
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
                                        <!--<label>Category</label>-->
                                    </div>
									<div class="form-group input-field col s12">
                                        <select class="form-control browser-default" name="addposition" >
                                           <option  value="" disabled="" selected="">Add Position</option>
                                                            <option value="Top">Top</option>
                                                            <option value="Left">Left</option>
                                                            <option value="Right">Right</option>
                                        </select>
                                      <!--  <label>Add Position</label>-->
                                    </div>
									<div class="form-group input-field col s12">
                                        <select class="form-control browser-default " name="paymentmethod" >
                                           <option  value="" disabled="" selected="">Payment Method</option>
                                                            <option value="M-Birr">M-Birr</option>
                                                            <option value="Hello-Cash">Hello-Cash</option>
                                        </select>
                                       <!-- <label>Payment Method</label>-->
                                    </div>
									<div class="form-group input-field col s12">
                                                        <input id="subject" type="text" class="validate" name="subject">
                                                        <label for="subject">Subject</label>
                                                    </div>
													

                                                    <div class="form-group file-field input-field col s12">
                                                        <div class="btn">
                                                            <span>Attach Ad</span>
                                                            <input type="file" name="fileformat" multiple>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Upload Advertise baner">
                                                        </div>
                                                    </div>
													<div class="form-group input-field col s12">
                                                        <textarea id="message" class="materialize-textarea" name="message"></textarea>
                                                        <label for="message">Message</label>
                                                    </div> 
													<!-- <div class="captch">
                                                     <img class="responsive-img" src="<?php echo base_url() . 'images/Captcha.png' ?>">
                                                       </div>
													<div class=" form-group input-field col s12">
                                                 <input id="captch" type="text" name="captcha" class="validate">
                                                  <label for="captch">Add Above Code</label>
                                                    </div>-->

                                    <div class="col s5 offset-s5 margin-b-10">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Send
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </form>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="qustion-table">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Advertise Info Table</h4>
                                            <div id="table-wrap">
                                                <div class="row">
                                                    <div class="col s12 m12 l12">
                                                        <table class="bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th data-field="id">Client Name</th>
                                                                    <th data-field="name">Email Id</th>
                                                                    <th data-field="price">Add Position</th>
                                                                    <th data-field="price">Payment Method</th>
                                                                    <th data-field="price">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                             <?php
                                                        foreach ($advertise as $row){ 
                                                         $adv_id = $row['advertise_id'];  ?>
                                                                <tr>
                                                            <td><?php echo $row['advertise_name']; ?></td>
                                                            <td><?php echo $row['advertise_email']; ?></td>
                                                        <td><?php echo $row['advertise_position']; ?></td>
                                                                    <td>M-Birr</td>
                                                                    <td>
                                                                        <a href="<?php echo base_url() . 'index.php/admin/Edit_advertise?id='.$adv_id ?>" class="btn-floating blue" ><i class="small mdi-action-subject"></i></a>
                                                                       <!--  <?php //if($row['vacancy_approve'] == '1'){?>
                                                        <a href="javascript:void(0);"  onclick="custatus(<?php echo $vac_id;?>);" class="btn-floating green tooltipped" ><i class="small mdi-action-visibility"></i></a>
                                                        <?php //}else{?>
                                                        <a href="javascript:void(0);" onclick="cstatus(<?php echo $vac_id;?>);" class="btn-floating red" ><i class="small mdi-action-visibility-off"></i></a>
                                                        <?php //}?> -->
                                                        <a  href="javascript:void(0);" onclick="deleted(<?php echo $adv_id;?>);" class="btn-floating red delete-btn" ><i class="small mdi-action-highlight-remove"></i></a></td>
                                                                </tr>
                                                         <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
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



  <script>

            function deleted(id)
            {
                var Adelete_id = id;
            if (confirm('Sure to Delete ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {Adelete_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }
                </script>