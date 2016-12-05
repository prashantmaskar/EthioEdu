<?php  $this->load->view('header'); ?>
<html>

<body>
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

 <?php  $sessname = $this->session->userdata('susername');      ?>

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
                <div class="col s12 m8 grid-example z-depth-1">
                     <div class="col s12 m12 l12">
                                        <div class="card-panel"><div class="ans">


 <?php if(isset($_GET['id']))
 {
  $ques_id = $_GET['id'];
 }

$query = $this->db->query("select * from tbl_questions where  question_id = '" .$ques_id. "'");
                        
                                foreach ($query->result_array() as $row){ 
 ?>  
                                           <h2 class="page-heading">Question:<?php echo $row['question_desc']; ?></h2>
                                            <h4 class="header2">Your Answer</h4>
                                            <div class="row">
                                                <form id="ansQues" action="<?php echo site_url('index.php/ansQues')?>" method="post" class="row">
                                           
                                      <div class="form-group input-field col s12">
                                    <input id="Caption" name="caption" type="text" class="validate " value="<?php echo $sessname;?>" readonly>
                                     <label for="Caption">Name</label>
                                </div>
                                                     <div class="form-group input-field col s12">
                                 <textarea id="Description" name="Description" class="materialize-textarea" ></textarea>
                                 <label for="Description">Answer</label>
                               </div>
                               <input value="answer" name="response_type" type="hidden">
                               <input value="<?php echo $row['question_id']; ?>" name="question_id" type="hidden">
                                                      
                                  <input type="hidden" name="response_like" value="0">

                                          <div class="input-field col s4">
                                            <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action"> Post Your Answer</button>
                                          </div>
                                                    </div>
                                                </form>
                                            </div> 
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>


<div class="col s12 m12 l12">
<h4 class="header2">Most Recent Answer</h4>
<?php if(isset($_GET['id'])){$ques_id = $_GET['id'];}
 $query = $this->db->query("select * from tbl_userresponse where response_type = 'answer' and question_id = '" .$ques_id. "' ");
  foreach($query->result_array() as $row){ 
$response_like = $row['response_like'];
$u_id = $row['user_id'];
$res_id =$row['response_id'];
$ques_id = $row['question_id'];
    ?>
        <li class="project_content">
               Name:<a href="#" class="vacancy_link">
             <span class="project_title"><?php echo $row['response_title'];?></span><br>
                </a>
             <span class="project_sinfo">Answer:<a href="#"><?php echo $row['response_desc'];?></a></span> <br>
              <?php if($row['response_like'] == '1') {?>
                                 <a href="javascript:void(0);" onclick="like(<?php echo $ques_id;?>, <?php echo $u_id;?>, <?php echo $res_id;?>);" >Unlike</a>
                        <?php }else{?>
                                     <a href="javascript:void(0);" onclick="unlike(<?php echo $ques_id;?>, <?php echo $u_id;?>, <?php echo $res_id;?>);">Like</a>
                 <?php } ?> <!-- </span>  -->
                          <?php 
                                $query = $this->db->query("SELECT COUNT(response_like) as row_count FROM tbl_userresponse WHERE user_id = '".$u_id."' AND response_like= 1 AND question_id = '" .$ques_id. "';");
                                $count= $query->result()[0]->row_count; {?>
                 <span> <a>Likes(<?php echo $count?>)</a></span> <?php }?>
               <span> 
                <div><a onclick="showDiv()" >Reply</a> 
                <div id="welcomeDiv"  style="display:none;"  >
                <form id="reply" action="<?php echo site_url('index.php/ansQues')?>" method="post" class="row"> 
                 <div >
                 <label for="Description"></label>
                <textarea id="Description" name="Description" class="materialize-textarea" ></textarea>
                <label for="Description"></label>
                    </div>
                  <div >
                <div >
               <button class="btn cyan waves-effect waves-light" type="submit" name="action"> Post </button>
                   </div>
               </div>
               </form>

                </div> 
                </div>
          </span>
            </li>
  <?php } ?>
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
            </div>
			 </div>
			  <<!-- /div> -->
			<?php $this->load->view('footer'); ?>
      <script>
        
function showDiv() {
   document.getElementById('welcomeDiv').style.display = "inline-block";
}

        function like(id1, id2, id3){
                /*var like_id = id1;*/
                var ques_id= id1
                var u_id = id2;
                var res_id = id3; 
                alert(id1);
                alert(id2);
                alert(id3);
            if (confirm('Sure to like ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "like",
                            data: {id1, id2, id3},
                            success: function(data) {
                                console.log(data);
                                location.reload();

                            }
                        });
                    }
                }


          /*     function unlike(id1 , id2, id3){
                var unlike_id = id;
                 var ques_id= id1
                var u_id = id2;
                var res_id = id3;
              alert(id1);
                alert(id2);
                alert(id3);

            if (confirm('Sure to Unlike ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "admin/approve_delete",
                            data: {id1, id2, id3},
                            success: function(data) {
                                console.log(data);

          location.reload();


                            }
                        });
                    }
                } */
      </script>
			