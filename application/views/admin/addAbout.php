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
                                    <h5 class="breadcrumbs-title">Add About Us</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>">Dashboard</a>
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
                                            <h4 class="header2">About Us FORM</h4>
                                            <div class="row">
                    <form id="addabout" class=" form-control col m12" action="<?php echo site_url('index.php/admin/AddAbout')?>" method="post" enctype="multipart/form-data">
                            <?php 
                          //   $query = $this->db->query("select count(*) as row_count from tbl_posts where post_type ='aboutus'");
                             $count= $about_count;
                            if($count>='1') { 
                              //   $query = $this->db->query("select * from tbl_posts where  post_type='aboutus' ");
                        
                            foreach ($add_about as $row){ 
                              
                             ?>
                             <input id="post_id" name="post_id" type="hidden" class="validate " value="<?php  echo $row['post_id'];?>">
                                 <div class="form-group input-field col s12">
                                  <input id="Caption" name="caption" type="text" class="validate " value="<?php  echo $row['post_title'];?>">
                                  <label for="Caption">Title</label>
                                 </div>
                                <div class="form-group input-field col s12">
                                    <textarea id="Description" name="Description" class="materialize-textarea" ><?php echo $row['post_desc'];?></textarea>
                                    <label for="Description">Description</label>
                                </div> 
                                <?php 
                               $about_attachment =  $row['post_attachment'];
                                $pid = $row['post_id'];
                                if($row['post_attachment']!=""){?>
                                                     <div class="form-group file-field input-field col s12">
                                                        <div style="position: relative;display: inline-block;">
                                                            <img class="edit-attach" src="http://localhost/ETHIO/uploads/<?php  echo $row['post_attachment'];?>">
                                                            <a  href="javascript:void(0);" onclick="deleted(<?php echo $pid;?>,<?php echo "'$about_attachment'"; ?>);" style="background: red;
                                                                              padding: 5px;
                                                                               border-radius: 10px;
                                                                                color: #fff;
                                                                              position: absolute;
                                                                               top: 0px;
                                                                    right: 0px;"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                  </div></div>
                                                                  <div class="form-group file-field input-field col s12">
                                <div class="btn">
                                    <span>Attach Image</span>
                                       <input type="file"  name="avatar" multiple>
                                 </div>
                                 <div class="file-path-wrapper">
                                     <input class="file-path validate" name="imagename" type="text" placeholder="Upload Photo" value="<?php echo $row['post_attachment'];?>">
                                </div>
                               </div>
                                                                       <?php }else{ ?>

                                                                        <div class="form-group file-field input-field col s12">
                                <div class="btn">
                                    <span>Attach Image</span>
                                       <input type="file"  name="avatar" multiple>
                                 </div>
                                 <div class="file-path-wrapper">
                                     <input class="file-path validate" name="imagename" type="text" placeholder="Upload Photo" value="<?php echo $row['post_attachment'];?>">
                                </div>
                               </div>

                                                                   <?php     }?>
                                <input value="aboutus" name="post_type" type="hidden">

                                <div class="col s5 offset-s5">
                                <button class="btn waves-effect waves-light" type="submit" name="editaction" >Edit
                                   <i class="material-icons right"></i>
                                </button>
                                </div>

                                <?php } } else {?> 
                                <div class="form-group input-field col s12">
                                    <input id="Caption" name="caption" type="text" class="validate " >
                                     <label for="Caption">Title</label>
                                </div>
                               <div class="form-group input-field col s12">
                                 <textarea id="Description" name="Description" class="materialize-textarea" ></textarea>
                                 <label for="Description">Description</label>
                               </div>
                                    

                                   

                                                  
                                <div class="form-group file-field input-field col s12">
                                <div class="btn">
                                    <span>Attach Image</span>
                                       <input type="file"  name="avatar" multiple>
                                 </div>
                                 <div class="file-path-wrapper">
                                     <input class="file-path validate" type="text" placeholder="Upload Photo" value="<?php //echo $row['post_attachment'];?>">
                                </div>
                                <input value="aboutus" name="post_type" type="hidden">
                                <div class="col s5 offset-s5">
                                 <button class="btn waves-effect waves-light" type="submit" name="addaction">Add
                                 <i class="material-icons right"></i>
                                 </button>
                             </div>
                               </div><?php }?>
                <!--  <iframe width="420" height="315"
                  src="https://www.youtube.com/embed/1FJwzZMAGMM">
                        </iframe>         -->                               
                               <input value="aboutus" name="post_type" type="hidden">
                                                   
                             <?php 
                              //  $query = $this->db->query("select count(*) as row_count from tbl_posts where post_type ='aboutus'");
                               // $count= $query->result()[0]->row_count;
                /*echo $count;*/if($count>='1') {?>
                             <!--   <div class="col s5 offset-s5">
                                <button class="btn waves-effect waves-light" type="submit" name="editaction" >Edit
                                   <i class="material-icons right"></i>
                                </button>
                                </div> -->
                                <?php }  else {?>
                         <!--   <div class="col s5 offset-s5">
                                 <button class="btn waves-effect waves-light" type="submit" name="addaction">Add
                                 <i class="material-icons right"></i>
                                 </button>
                             </div> -->
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

                       



                        <script>

            function deleted(id,aboutattachment)
            {
                var deleteaboutattachment_id = id;
                var image = aboutattachment;
                //alert(image);
            if (confirm('Sure to Delete ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {deleteaboutattachment_id, image},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }</script>


                <script>
                $(document).ready(function() {

    $('#addabout').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            caption: {
                validators: {
                    notEmpty: {
                        message: 'Please write event_name!!!..'
                    }
                }
            },
            
 
                Description:{
                validators:{
                    notEmpty:{
                        message:  ' Description required!!!'
                    },
                   stringLength:{
                        message:'post Description must be less than 300 characters',
                        max:function(value,validator,$field){
                            return 300 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
 
             avatar:{
            validators:{
                /*notEmpty:{
                    message:'please select an image'
                },*/
                 file:{
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    }
                 }
           },   
                 




        }
    });
});
</script>