<?php  $this->load->view('header'); ?>
        <div class="service-wrap ">
            <div class="row">
                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
                <div class="col s12 m8 grid-example">
                    <div class="event_details z-depth-1">
                        <div class="col m12 s12 ">
                        <?php /* $event_id = $_GET['id'];
                        $query = $this->db->query("select * from tbl_posts where post_type='event'  and post_id = '" .$event_id. "'");
                        */$id = $this->uri->segment('3');

                                foreach ($eventid as $row){
                                 $query2 = $this->db->query("select count(*) as row_count from tbl_postresponse where post_id = '".$row['post_id']."'"); 
                                    
                        ?>

                       <!-- <meta property="og:title" content="<?php //echo $row['post_title']; ?>"/>
                        <meta property="og:image" content="<img scr="<?php //echo base_url(); ?>uploads/<?php //echo $row['post_attachment']; ?>"/>
                        <meta property="og:description" content="<?php //echo $row['post_title']; ?>"/> -->
                            <div class="event_heading ">
                                <span>Posted: <?php echo $row['post_date']; ?> into <?php echo $row['post_category'];?> by <?php echo $row['post_author']; ?> | <?php echo $query2->result()[0]->row_count; ?> Comments </span>
                                <h1><?php echo $row['post_title']; ?></h1>
                            </div>
                        </div>

                        <div class="event_img">
                        <?php 
                        $news_attachment = $row['post_attachment'];  ?>
                            <img src="<?php echo base_url() .'uploads/'.$news_attachment ?>"> 
                        </div>
                        <div class="col s12">
                          <!--  <a class="post-share facebook" href="http://www.facebook.com/plugins/like.php?href=http://medialoot.com/blog/&width&layout=standard&action=like&show_faces=true&share=true&height=80&appId=#################" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=100,width=200');
                                    return false;">Facebook<span>150</span></a>
                            <a class="post-share twitter" href="https://twitter.com/share?url=http://medialoot.com/blog/&text=Text for Twitter Here&via=medialoot" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                                    return false;">Twitter<span>250</span></a>
                            <a class="post-share gplus" href="https://plus.google.com/share?url=http://medialoot.com/blog/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                                    return false;">Google Plus<span>120</span></a>  -->
                                    <div class="school_social">
                                        <ul>
                                            <li><a id = "share_button" href="#" class="waves-effect waves-light btn facebook darken-3"><i class="fa fa-facebook-square"></i> Facebook</a></li> 
                                            <?php 

                                            $event_desc = substr($row['post_desc'],0,100);
                                             $edesc = $event_desc.'...';
                                            ?>
                                            <li><a target="_blank" href="javascript:myPopup('https://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url();?>?id=<?php echo $this->uri->segment('3'); ?>&title=<?php echo $row['post_title']; ?>&summary=<?php echo $edesc; ?>')" class="waves-effect waves-light btn linkedin darken-3"><i class="fa fa-linkedin"></i> Linkedin</a></li> 

                                            <li><a href="https://twitter.com/intent/tweet?text=<?php echo $row['post_title']?>?url=<?php echo base_url();?>?id=<?php echo $this->uri->segment('3'); ?>" data-show-count="false" class="waves-effect waves-light btn twitter darken-3 "><i class="fa fa-twitter"></i> Twitter</a></li> 
                                           <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

                                            <li><a href="https://plus.google.com/share?url=<?php echo base_url();?>?id=<?php echo $this->uri->segment('3'); ?>" class="waves-effect waves-light btn googleplus darken-3" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i> Google</a></li> 

                                        </ul>
                                    </div>
                        </div>
                        <div class="event_details_content">
                            <p class="black-text"></p>
                            <?php echo $row['post_desc']; ?>
                        </div>

                     <div class="comment_box row">
                            <div class="col m12">
                                <h1 class="head_font">Add New Comment</h1>
                            </div>
                             <div>
                            <div class="course_info">
        <!-- <p class="lead black-text"><h1 class = "page-heading">Question:<?php //echo $ques->question_desc ?></h1></p> --> </div>
        <?php  $sname= $this->session->userdata('susername');?></div>
        <div class="col m12 s12 card-panel"> <?php echo $comments ?> </div>
         <div class="comment_info"><h3 class="page-heading"> Leave a Reply </h3></div> 
         <p class="notice error"><?php $this->session->flashdata('error_msg'); ?></p><br/> 
           <div class="coment_form">
                                <form id="comment_form" method="post" action="<?= base_url() ?>event_details/add_event_comment/<?= $ques->post_id ?> " >
                                    <div class="input-field col s12">
                                        <label for="comment_name">Name:</label> 
          <input class="form-control" type="text"  name="comment_name" id='name' value="<?php echo $sname ?>" readonly />
                                    </div>
                                 
                                     <div class="form-group"> 
           <label for="comment"><!-- <i class='material-icons prefix'>mode_edit</i> -->Comment :</label> 
           <textarea class="form-control" name="comment_body" value="<?php set_value("comment_body"); ?>" id='comment'></textarea>
            </div>
                        <input type='hidden' name='pparent_id' value="0" id='parent_id' />
                    <input type='hidden' name='presponse_type' value="answer" id='response_type' />
                    <input type='hidden' name='presponse_like' value="0" id='response_like' />
                      <input type='hidden' name='presponse_type' value="event" id='response_like' />
    <input type='hidden' name='post_id' id='parent_id' value="<?= $ques->post_id ?>" />     

                 <div id='submit_button' class="margin-b-10"> 
             <input class="btn btn-success" type="submit" name="submit" value="add comment"/> 
             </div> 
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
<?php } ?>
                 <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>
       
        <?php $this->load->view('footer'); ?>
        <script type="text/javascript" src="<?php echo base_url() .'js/newsdetails.js' ?>"></script>
        <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>
<script>
        $(document).ready(function(){
    //alert('in');
    $.validator.setDefaults({
        ignore: []
    });

 $("#comment").validate({
        rules: {
            
            name:{
            
                required: true
                
               
            },

            reply:{
                required:true,
                  minlength: 15
                   }
           
        },
        
        messages:{
            name:{
                required:"enter username",
            },
            reply:{
                required:"please give some comment"

            }
        },



       errorClass:"invalid form-error",
        errorElement : 'div',
        errorPlacement: function(error, element) {
          error.appendTo( element.parent() );
          }
        
     });
});

        </script>

        <?php foreach ($eventid as $row){
    $post_desc = substr($row['post_desc'],0,100);
                  $fdesc = $post_desc.'...';
     ?>
 ?>
      <script type="text/javascript">
$(document).ready(function(){
$('#share_button').click(function(e){
e.preventDefault();
FB.ui(
{
method: 'feed',
name: '<?php echo $row['post_title']; ?>',
link: ' <?php echo base_url(); ?>index.php/event_details?id=<?php echo $row['post_id']; ?>',
picture: 'https://www.giz.de/static/en/images/images_References/toolbox_sponsor/Logo-MoE_rdax_205x194.jpg',
caption: 'Ethio Edu Vacancy',
description: '<?php echo $fdesc; ?>',
message: ''
});
});
});
</script>
<?php } ?>
<script type="text/javascript">
     function myPopup(url) {
window.open( url, "myWindow", "status = 1, height = 500, width = 360, resizable = 0" );
}
    
</script>

<script type='text/javascript'> 
$(function () {
  $("a.reply").click(function () 
  { var id = $(this).attr("id"); 
  $("#parent_id").attr("value", id); 
  $("#name").focus();
  }); 
  }); 
  </script>
  <script>



         function like(id1, id2, id3,id4,id5){                      
                         var ques_id= id1
                         var u_id = id2;
                         var res_id = id3; 
                         var par_id = id4;
                         var like_stat = id5;

                     if (confirm('Sure to Like ?'))
                             {
                                 $.ajax({
                                     context: this,
                                     type: 'POST',
                                     url: 'http://localhost/ETHIO/index.php/Likeunlikenews',
                                     data: {'ques_id': ques_id,'u_id':u_id,'res_id':res_id,'like_stat':like_stat,'parent_id':par_id},
                                    
                                     success: function(data) {
                                      
                                         console.log(data);
                                       location.reload();
         
                                     },
                                     error:function(error){
                                      alert("error" +error);
                                     }
                                 });
                             }
                         }
                        
         
         
                        function unlike(id1 ,id2,id3,id4,id5){
                          var ques_id= id1
                         var u_id = id2;
                         var res_id = id3;
                         var par_id = id4; 
                         var like_stat = id5;

                     if (confirm('Sure to Unlike ?'))
                             {
                              alert(like_stat);
                                 $.ajax({
                                     context: this,
                                     type: 'POST',
                                     url: 'http://localhost/ETHIO/index.php/Likeunlikenews',
                                     data: {'ques_id': ques_id,'u_id':u_id,'res_id':res_id,'like_stat':like_stat,'parent_id':par_id},
                                      success: function(msg) {
                                         console.log(msg);
                                       location.reload();
                               },
                               error:function(error){
                                      alert("error" +error);
                                     }
                             });
                          }
                     }

  </script>