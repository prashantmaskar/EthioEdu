<?php  $this->load->view('header'); ?>

  <style type='text/css'> 
  a, a:visited { 
  outline: none; color: #7d5f1e; 
  } 
  .clear { 
  clear: both;
  } 
  #wrapper { 
  width: 480px; margin: 0 auto 0 4px; padding: 15px 0px; 
  } 
  .comment_box 
  { padding: 5px;  margin-top: 15px; list-style: none; 
  } 
  .aut { font-weight: bold; 
  } 
  .timestamp { font-size: 85%; 
    /*float: right; */
  } 
  #comment_body { display: block; width: 100%; height: 150px;
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
        <p class="lead black-text"><?php echo $ques->question_desc ?></p> 
        <!-- <p><img src="<?php //echo base_url(); ?>global/uploads/<?= $news//->ne_img ?>"/>
        </p>  -->
        <p> 
        </p> <?php //}?>
        </div> 
        <div class="contact-form"> <?php echo $comments ?> 
        <h3 class="comment-reply-title"> Leave a Reply </h3>
         <p class="notice error"><?php $this->session->flashdata('error_msg'); ?></p><br/> 
         <form id="comment_form" action="<?= base_url() ?>ansQues/add_comment/<?= $ques->question_id ?>" method="post" >
                        

          <div class="form-group"> 
          <label for="comment_name">Name:</label> 
          <input class="form-control" type="text"  name="comment_name" id='name' value="<?php set_value("comment_name");?>" />
          </div>
           <div class="form-group"> 
           <label for="comment"><i class='material-icons prefix'>mode_edit</i>Comment :</label> 
           <textarea class="form-control" name="comment_body" value="<?php set_value("comment_body"); ?>" id='comment'></textarea>
            </div> 
            <input type='hidden' name='parent_id' value="0" id='parent_id' />
            <input type='hidden' name='response_type' value="answer" id='response_type' />
            
            <input type='hidden' name='response_like' value="0" id='response_like' />
             <input type='hidden' name='question_id' id='parent_id' value="<?= $ques->question_id ?>"/> 

             <div id='submit_button'> 
             <input class="btn btn-success" type="submit" name="submit" value="add comment"/> 
             </div> 
             </form> 
             </div> 
             </div><!-- /.container --> 
             </div>
    </div>
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
  </div><!-- ok -->
</div><!-- ok -->
     
      <?php $this->load->view('footer'); ?>
      <script type='text/javascript'> 
$(function () {
  $("a.reply").click(function () 
  { var id = $(this).attr("id"); 
  $("#parent_id").attr("value", id); 
  $("#name").focus();
  }); 
  }); 
  </script>