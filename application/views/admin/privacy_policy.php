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
                                    <h5 class="breadcrumbs-title">Add Privacy Policy</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>">Dashboard</a>
                                        </li>
                                        <li><a href="<?php echo base_url() . 'index.php/admin/privacy_policy' ?>">Add Privacy Policy </a>
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
                            <p class="caption black-text">Fill all required fields. </p>
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Privacy Policy FORM</h4>
                                            <div class="row">
                    <form id="privacy_policy" class=" form-control col m12" action="<?php echo site_url('index.php/admin/privacy_policy')?>" method="post" enctype="multipart/form-data">
                            <?php 
                             $query = $this->db->query("select count(*) as row_count from tbl_posts where post_type ='privacy'");
                             $count= $query->result()[0]->row_count;
                            if($count>='1') { 
                                 $query = $this->db->query("select * from tbl_posts where  post_type='privacy' ");
                        
                            foreach ($query->result_array() as $row){ 
                             ?>
                                 <div class="form-group input-field col s12">
                                  <input id="Caption" name="caption" type="text" class="validate " value="<?php  echo $row['post_title'];?>">
                                  <label for="Caption">Title</label>
                                 </div>
                                <div class="form-group input-field col s12">
                                    <textarea id="Description" name="Description" class="materialize-textarea" ><?php echo $row['post_desc'];?></textarea>
                                    <label for="Description">Description</label>
                                </div> <?php } } else {?>
                                <div class="form-group input-field col s12">
                                    <input id="Caption" name="caption" type="text" class="validate " >
                                     <label for="Caption">Title</label>
                                </div>
                               <div class="form-group input-field col s12">
                                 <textarea id="Description" name="Description" class="materialize-textarea" ></textarea>
                                 <label for="Description">Description</label>
                               </div><?php }?>
                                                  
                               <!--  <div class="form-group file-field input-field col s12">
                                <div class="btn">
                                    <span>Attach Image</span>
                                       <input type="file"  name="avatar" multiple>
                                 </div>
                                 <div class="file-path-wrapper">
                                     <input class="file-path validate" type="text" placeholder="Upload one or more Photo">
                                </div>
                               </div> -->
                                                  
                               <input value="privacy" name="post_type" type="hidden">
                                                   
                             <?php 
                                $query = $this->db->query("select count(*) as row_count from tbl_posts where post_type ='privacy'");
                                $count= $query->result()[0]->row_count;
                /*echo $count;*/if($count>='1') {?>
                                <div class="col s5 offset-s5">
                                <button class="btn waves-effect waves-light" type="submit" name="editaction" >Edit
                                   <i class="material-icons right"></i>
                                </button>
                                </div>
                                <?php }  else {?>
                            <div class="col s5 offset-s5">
                                 <button class="btn waves-effect waves-light" type="submit" name="addaction">Add
                                 <i class="material-icons right"></i>
                                 </button>
                             </div>
                        <?php  }?>  
                                                  
        </form>
    </div> 
                                        </div>
                                    </div>
                                </div>
                                </section>
                            </div>
                        </div>
                        <?php  $this->load->view('admin/footer'); ?>
                       