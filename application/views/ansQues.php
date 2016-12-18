<?php  $this->load->view('header'); ?>

  <style type='text/css'> 
  /*a, a:visited { 
  outline: none; color: #7d5f1e; 
  } */
  .clear { 
  clear: both;
  } 
  #wrapper { 
  width: 480px; margin: 0 auto 0 4px; padding: 15px 0px; 
  } 
  .comment_box 
  { padding: 5px;  margin-top: 15px; list-style: none; background: white;
  } 
  .aut { font-weight: bold; 
  } 
  .timestamp { font-size: 85%; 
    /*float: right; */
  } 
 .reply{float: left;}
  #comment_body { display: block; width: 100%; height: 150px;
  } 

 /*a {
  color: #03658c;
  text-decoration: none;
 }
*/
ul {
  list-style-type: none;
}

body {
  font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
  background: #dee1e3;
}
}
</style> 


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
          
    <div class="col s12 m8  grid-example z-depth-1">
<div class="col s12 m12 l12">
        <div class="container"> 
        <div class="starter-template"> 
       <!-- <h1><?php $news//->question_desc ?></h1>  --> 
      <!--  <?php //foreach($news as $row){?> -->
      <div class="course_info">
        <p class="lead black-text"><h1 class = "page-heading">Question:<?php echo $ques->question_desc ?></h1></p> </div>
        <!-- <p><img src="<?php //echo base_url(); ?>global/uploads/<?= $news//->ne_img ?>"/>
        </p>  -->
        <p> 
        </p> <?php  $sname= $this->session->userdata('susername');?>
        </div> 
        <div class="col m12 s12 card-panel"> <?php echo $comments ?> 
        <div class="comment_info"><h3 class="page-heading"> Leave a Reply </h3></div>  
         <p class="notice error"><?php $this->session->flashdata('error_msg'); ?></p><br/> 
         <form id="comment_form" action="<?= base_url() ?>ansQues/add_comment/<?= $ques->question_id ?>" method="post" >
          <div class="form-group"> 
          <label for="comment_name">Name:</label> 
          <input class="form-control" type="text"  name="comment_name" id='name' value="<?php echo $sname ?>" readonly />
          </div>
           <div class="form-group"> 
           <label for="comment"><!-- <i class='material-icons prefix'>mode_edit</i> -->Comment :</label> 
           <textarea class="form-control" name="comment_body" value="<?php set_value("comment_body"); ?>" id='comment'></textarea>
            </div> 
            <input type='hidden' name='parent_id' value="0" id='parent_id' />
            <input type='hidden' name='response_type' value="answer" id='response_type' />
            
            <input type='hidden' name='response_like' value="0" id='response_like' />
        <input type='hidden' name='question_id' id='parent_id' value="<?= $ques->question_id ?>"/> 

             <div id='submit_button' class="margin-b-10"> 
             <input class="btn btn-success" type="submit" name="submit" value="add comment"/> 
             </div> 
             </form> 
             </div> 
             </div><!-- /.container --> 
             </div>
    </div>
     <div class="col s12 m2 grid-example z-depth-1">
     <?php
     $que_id = $this->uri->segment('3') 
     ?>
      <div class="old_news_list">
        <h2 class="news_post_title">Related Questions</h2>
     <ul class="latest_news_list"><?php 
    $query = $this->db->query("select * from tbl_questions where question_id='".$que_id."'");
    $result = $query->result_array();
    $qcat =  $result[0]["question_category"];
     $query1 = $this->db->query("select * from tbl_questions where question_category='".$qcat."'");
     foreach ($query1->result_array() as $row){ ?>
     <li class="Latest_news_content"><?php echo $row['question_category']; ?>:
   <a href="<?php echo base_url() . 'index.php/QuesAns?id='.$que_id ?>" class="news_link">  
   <span class="News_title"><?php echo $row['question_desc']; ?></span>(7)
   </a> 
     <a href="<?= base_url() ?>ansQues/show_one/<?= $que_id   ?>" >
    <p class="green-text">Ans this</p></a></li>

     

     <?php } ?>
     </ul>

              <!--  <div class="service_col z-depth-1  darken-1">
                  <a href="#">
                  <img src="<?php //echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                  </a>
               </div>
               <div class="service_col z-depth-1  darken-1">
                  <a href="#">
                  <img src="<?php //echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                  </a>
              </div> -->
</div>
        </div> 
  </div><!-- ok -->
</div><!-- ok -->
     
      <?php $this->load->view('footer'); ?>
      <script> 
$(function () {
  $("a.reply").click(function () 
  { var id = $(this).attr("id"); 
  $("#parent_id").attr("value", id); 
  $("#name").focus();
  }); 
  }); </script>

<script>



         function like(id1, id2, id3){                      
                         var ques_id= id1
                         var u_id = id2;
                         var res_id = id3; 
                        //alert(ques_id);
                        //alert(u_id);
                         //alert(res_id);
                     if (confirm('Sure to Unlike ?'))
                             {
                                 $.ajax({
                                     context: this,
                                     type: 'POST',
                                     url: "http://localhost/ETHIO/like",
                                     data: {ques_id, u_id, res_id},
                                     success: function(meg) {
                                         console.log(meg);
                                       //location.reload();
         
                                     },
                                     error:function(error){
                                      alert(error);
                                     }
                                 });
                             }
                         }
                        
         
         
                        function unlike(id1 , id2, id3){
                          var uques_id= id1
                         var uu_id = id2;
                         var ures_id = id3; 
                       /*alert(id1);
                         alert(id2);
                         alert(id3);*/
         
                     if (confirm('Sure to Like ?'))
                             {
                                 $.ajax({
                                     context: this,
                                     type: 'POST',
                                     url: "http://localhost/ETHIO/like",
                                     data: {uques_id, uu_id, ures_id},
                                      success: function(meg) {
                                         console.log(meg);
                                       //location.reload();
                               },
                               error:function(error){
                                      alert(error);
                                     }
                             });
                          }
                     }

  </script>