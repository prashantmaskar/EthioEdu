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
                                    <h5 class="breadcrumbs-title">Edit News</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>">Dashboard</a>
                                        </li>
                                       
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">

                        <?php  if(isset($_GET['id'])){$news_id = $_GET['id'];}
                       /* $query = $this->db->query("select * from tbl_posts where post_type='news'  and post_id = '" .$news_id. "'"); */
                        
                                foreach ($news_details as $row){ 
                                    $newsattachment =  $row['post_attachment'];
                        ?>
                        <div class="section">
                           
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">News FORM</h4>
                                            <div class="row">
                                                <form id="addnews" class=" form-control col m12" action="<?php echo site_url('index.php/admin/edit_news')?>" method="post" enctype="multipart/form-data">
                                                    <div class="form-group input-field col s12">
                                                        <input id="Caption" name="caption" type="text" value="<?php  echo $row['post_title'];?>" class="validate">
                                                        <label for="Caption">News Title</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <textarea id="Description" name="Description"class="materialize-textarea"><?php echo $row['post_desc'];?></textarea>
                                                        <label for="Description">Description</label>
                                                    </div>
                                                    <div class="form-group input-field col s12 has-success">
                                                    <?php  $options = $row['post_category']; ?>
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
                                                    <?php if($row['post_attachment']!=""){?>
                                                    <div class="form-group file-field input-field col s12">
                                                         <div style="position: relative;display: inline-block;">
                                                      <img class="edit-attach" src="http://localhost/ETHIO/uploads/<?php  echo $row['post_attachment'];?>" >
                                                       
                                                        
                                                            <a  href="javascript:void(0);" onclick="deleted(<?php echo $news_id;?>,<?php echo "'$newsattachment'"; ?>);"style="background: red;
    padding: 5px;
    border-radius: 10px;
    color: #fff;
    position: absolute;
    top: 0px;
    right: 0px;"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>
                                                    <?php }?>
   
                                                    <div class="form-group file-field input-field col s12">
                                                        <div class="btn">
                                                            <span>Attach Photo</span>
                                                            <input type="file"  name="avatar" multiple>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" name ="imagename" type="text" placeholder="Upload one or more Photo" value="<?php echo $row['post_attachment'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="author" type="text" value="<?php echo $row['post_author'];?>" name="author" class="validate">
                                                        <label for="author">News written By</label>
                                                    </div>
                                                    <div class="form-group input-field col s6">
                                                        <input id="date" name="date" type="date" value="<?php echo $row['post_date'];?>" class="datepicker" disabled>
                                                        <label for="date">Date of Posting</label>
                                                    </div>
                                                     <div class="form-group input-field col s6">
                                                           <input id="time" name="time" type="text" value="<?php echo $row['post_time'];?>">

                                                        <label for="time">Time</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="source_link" name="source_link" value="<?php echo $row['post_source'];?>" type="url" class="validate">
                                                        <label for="source_link">Source</label>
                                                    </div>

                                                    <!-- <div class="form-group input-field col s6">
                                                        <input id="date" name="date" type="date" value="<?php //echo $row['course_date'];?>" class="datepicker">
                                                        <label for="date">Date</label>
                                                    </div>
                                                    <div class="form-group input-field col s6">
                                                        <input id="time" name="time" type="text" value="<?php //echo $row['course_time'];?>" ">
                                                        <label for="date">Time</label>
                                                    </div>-->
                                                    <input value="<?php echo $row['post_type']; ?>" name="post_type" type="hidden">
                                                    <input value="<?php echo $row['post_id']; ?>" name="post_id" type="hidden">
                                                    <!--<div class="form-group input-field col s12">
                                                        <input id="p_caption" name="p_caption" type="text" class="validate">
                                                        <label for="p_caption">Photo Caption</label>
                                                    </div>-->
                                                     <input type="hidden" name="approve_status" value="<?php echo $row['post_approve']; ?>">
                                                    <div class="col s5 offset-s5">
                                                        <button class="btn waves-effect waves-light" type="submit" name="action">Update
                                                            <i class="material-icons right"></i>
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
                        

                         <script>

            function deleted(id,img)
            {
                var deleteimg_id = id;
                var image = img;
                //alert(image);
            if (confirm('Sure to Delete ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {deleteimg_id, image},
                            success: function(data) {
                                console.log(data);
                              location.reload();


                            }
                        });
                    }
                }</script>



            <script>
            $(document).ready(function() {

    $('#addnews').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            caption: {
                validators: {
                    notEmpty: {
                        message: ' please enter news title!!!..'
                    }
                }
            },



         Description:{
                validators:{
                    notEmpty:{
                        message:  ' Description required!!!'
                    }
                    
                    }
                
             },

         catagory:{
                validators:{
                    notEmpty:{
                        message:  'select category required!!!'
                    }
                    
                    }
                
             },


           avatar:{
            validators:{ 
                /*notEmpty:{
                    message:'please attach image'
                },*/
                 file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    }
                   }
                 
           },

            author: {
                validators: {
                    notEmpty: {
                        message: ' Please enter auther name!!!..'
                    }
                }
            },
             
            date: {
                validators: {
                    notEmpty: {
                        message: ' Date can not be Empty!!!..'
                    }
                }
            },
                source_link: {
                validators: {
                    notEmpty: {
                        message: ' Enter source link!!!..'
                    }
                }
            },
                p_caption: {
                validators: {
                    notEmpty: {
                        message: ' Enter photo caption!!!..'
                    }
                }
            }


               
             




             }
    });
});
</script>