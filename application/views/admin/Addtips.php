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
                                    <h5 class="breadcrumbs-title">Add Tips</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>">Dashboard</a>
                                        </li>
                                        <li><a href="<?php echo base_url() . 'index.php/admin/Addtips' ?>">Add Tips</a>
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
                                            <h4 class="header2">Tips FORM</h4>
                                            <div class="row">
                                                <form id="addtips" class=" form-control col m12" action="<?php echo site_url('index.php/admin/Addtips')?>" method="post" enctype="multipart/form-data">
                                                    <div class="form-group input-field col s12">
                                                        <input id="Caption" name="caption" type="text" class="validate ">
                                                        <label for="Caption">Tips Title</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <textarea id="Description" name="Description" class="materialize-textarea"></textarea>
                                                        <label for="Description">Description</label>
                                                    </div>
                                                  
                                                    <div class="form-group file-field input-field col s12">
                                                        <div class="btn">
                                                            <span>Attach Images</span>
                                                            <input type="file"  name="avatar" multiple>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Upload  Photo">
                                                        </div>
                                                    </div>
                                                  
                                                    <input value="tips" name="post_type" type="hidden">
                                                   

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

      <script type="text/javascript" src="<?php echo base_url() . 'js/jquery-2.1.1.min.js' ?>"></script>
     <!--  <script type="text/javascript" src="<?php //echo base_url() . 'js/materialize.min.js' ?>"></script>
        <script type="text/javascript" src="<?php //echo base_url() . 'js/owl.carousel.min.js' ?>"></script>
        <script type="text/javascript" src="<?php //echo base_url() . 'js/jquery.validate.min.js' ?>"></script>
        <script type="text/javascript" src="<?php //echo base_url() . 'js/picker.js' ?>"></script>
        <script type="text/javascript" src="<?php //echo base_url() . 'js/script.js' ?>"></script>
        <script type="text/javascript" src="<?php //echo base_url() . 'js/bootstrapValidator.js' ?>"></script> -->


                        <?php  $this->load->view('admin/footer'); ?>
                       
                       <script> $('.datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
});</script>


<script>
$(document).ready(function() {
    

    $('#addtips').bootstrapValidator({

        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            
            
            caption:{
                 validators:{
                    notEmpty:{
                        message:'Please enter caption!!!'
                    },
                    /*regexp:{
                              regexp: /^[a-z\s]+$/i,
                                message: 'The Name can consist of alphabetical characters and spaces only'
                    }*/
                }
            },
        
         
            Description: {
                validators: {
                    notEmpty: {
                        message: ' description reqired!!!..'
                           
                    }
                }
            },
            
          avatar:{
            validators:{
                notEmpty:{
                    message:'please select an image'
                },
                 file:{
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    }
                 }
           }
     
        }
    });
});

</script>