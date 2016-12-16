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
                                    <h5 class="breadcrumbs-title">Edit tips</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>">Dashboard</a>
                                        </li>
                                        
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                    <?php if(isset($_GET['id'])){$tips_id = $_GET['id'];}
                       // $query = $this->db->query("select * from tbl_posts where  post_type='tips' and post_id = '" .$tips_id. "'");
                        
                                foreach ($tips_details as $row){ 
                                    $tipsattachment = $row['post_attachment'];
                        ?>
                        <div class="section">
                
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">BASIC FORM</h4>
                                            <div class="row">
                                                <form id="edittips" class=" form-control col m12" action="<?php echo site_url('index.php/admin/edit_tips')?>" method="post" enctype="multipart/form-data">
                                                    <div class="form-group input-field col s12">
                                                        <input id="Caption" name="caption" type="text" value="<?php  echo $row['post_title'];?>" class="validate">
                                                        <label for="Caption">Tips Title</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <textarea id="Description" name="Description"class="materialize-textarea"> <?php echo $row['post_desc'];?></textarea>
                                                        <label for="Description">Description</label>
                                                    </div>
                                                     <?php if($row['post_attachment']!=""){?>
                                    <div class="form-group file-field input-field col s12">
                                                        <div style="position: relative;display: inline-block;">

                                     <img class="edit-attach" src="http://localhost/ETHIO/uploads/<?php echo $row['post_attachment'];?>"> -->
                                    

                                     <a  href="javascript:void(0);" onclick="deleted(<?php echo $tips_id;?>,<?php echo "'$tipsattachment'"; ?>);" style="background: red;
                                                                              padding: 5px;
                                                                               border-radius: 10px;
                                                                                color: #fff;
                                                                              position: absolute;
                                                                               top: 0px;
                                                                    right: 0px;"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                  </div>
                                                                       <?php }?>
                                                    <div class="form-group file-field input-field col s12">
                                                        <div class="btn">
                                                            <span>Attach Images</span>
                                                            <input type="file"  name="avatar" multiple>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" name="imagename" type="text" placeholder="Upload one or more Photo" value="<?php echo $row['post_attachment'];?>">
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="form-group input-field col s6">
                                                        <input id="date" name="date" type="date" value="<?php echo $row['post_date'];?>" class="datepicker">
                                                        <label for="date">Date of Tips Posting</label>
                                                    </div>
                                                     <div class="form-group input-field col s6">
                                                        <input id="time" name="time" type="text" value="<?php echo $row['post_time'];?>">
                                                        <label for="date">Time</label>
                                                    </div>
                                                    
                                                    
                                                    <input value="<?php echo $row['post_type']; ?>" name="post_type" type="hidden">
                                                    <input value="<?php echo $row['post_id']; ?>" name="post_id" type="hidden">
                                                    
                                                     
                                                    <div class="col s5 offset-s5">
                                                        <button class="btn waves-effect waves-light" type="submit" name="action">Update
                                                            <i class="material-icons right"></i>
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
                          <script type="text/javascript" src="<?php echo base_url() . 'js/jquery-2.1.1.min.js' ?>"></script> 
                        <?php  $this->load->view('admin/footer'); ?>



<script>
$(document).ready(function() {
    

    $('#edittips').bootstrapValidator({

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
            
         /* avatar:{
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
           }*/
     
        }
    });
});

</script>

      <script>

            function deleted(id,tipstimg)
            {
                var deletetipsimg_id = id;
                var image = tipstimg;
                //alert(image);
            if (confirm('Sure to Delete ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {deletetipsimg_id, image},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }</script>