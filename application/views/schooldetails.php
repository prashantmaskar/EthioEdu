<?php  $this->load->view('header'); ?>
        <div class="service-wrap ">
            <div class="row">
                <div class="col s12 m9 grid-example ">
                    <div class="row school_detail_wrap z-depth-1">
                    <?php  //$sch_id = $_GET['id'];
                   $sch_id = $this->uri->segment('3');
                       // $query = $this->db->query("select * from tbl_school_meta where school_id = '" .$sch_id. "'");
                        
                                foreach ($sch_details as $row){ 

                                      

                                    
                        ?>
                        <div class="school_banner col m12">
                        <?php $img=$row['school_logo'] ?>
                            <img src="<?php echo base_url().'uploads/'.$img ?>" class="responsive-img" />

                        </div>
                        <div class="school_name-wrap col m12">
                            <div class="red col m12">
                                <h2 class="school_name col s8"><i class="material-icons dp48">verified_user</i><?php echo $row['school_name']?></h2>
                                <span class=" school-type col s4"><span><strong>Category:</strong></span> <?php echo $row['school_category']?></span>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_social">
                                <ul>
                                  <!--  <li><a href="#" class="waves-effect waves-light btn facebook darken-3"><i class="fa fa-facebook-square"></i> Facebook</a></li> 
                                    <li><a href="#" class="waves-effect waves-light btn light-blue darken-2"><i class="fa fa-envelope"></i> Mail</a></li> 

                                    <li><a href="#" class="waves-effect waves-light btn linkedin darken-3"><i class="fa fa-linkedin"></i> Linkedin</a></li> 

                                    <li><a href="#" class="waves-effect waves-light btn twitter darken-3"><i class="fa fa-twitter"></i> Twitter</a></li> 

                                    <li><a href="#" class="waves-effect waves-light btn googleplus darken-3"><i class="fa fa-google-plus"></i> Google</a></li>  -->
                                    <li><a id = "share_button" href="#" class="waves-effect waves-light btn facebook darken-3"><i class="fa fa-facebook-square"></i> Facebook</a></li> 

                                            <?php 

                                            $s_desc = substr($row['school_desc'],0,100);
                                             $edesc = $s_desc.'...';
                                            ?>
                                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url();?>?id=<?php echo $this->uri->segment('3'); ?>&title=<?php echo $row['school_name']; ?>&summary=<?php echo $edesc; ?>" class="waves-effect waves-light btn linkedin darken-3"><i class="fa fa-linkedin"></i> Linkedin</a></li> 

                                            <li><a href="https://twitter.com/intent/tweet?text=<?php echo $row['school_name']?>?url=<?php echo base_url();?>?id=<?php echo $this->uri->segment('3'); ?>" data-show-count="false" class="waves-effect waves-light btn twitter darken-3 "><i class="fa fa-twitter"></i> Twitter</a></li> 
                                           <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script> 

                                            <li><a href="https://plus.google.com/share?url=<?php echo base_url();?>?id=<?php echo $this->uri->segment('3'); ?>" class="waves-effect waves-light btn googleplus darken-3" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i> Google</a></li> 

                                </ul>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_desc">
                                <h2 class="sch_det_title">Description/Background</h2>
                                <p class="sch_desc"><?php echo $row['school_desc']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Country</h2>
                                <p class="sch_country"><?php echo $row['school_country']?></p>

                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">City</h2>
                                <p class="sch_country"><?php echo $row['school_city']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Region</h2>
                                <p class="sch_country"><?php echo $row['school_region']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Type</h2>
                                <p class="sch_country"><?php echo $row['school_type']?></p>
                                <!--<ul>
                                    <li><i class="fa fa-check"></i> Day Only</li>
                                    <li><i class="fa fa-check"></i> Day & Night</li>
                                    <li><i class="fa fa-check"></i> Boarding Only</li>
                                    <li><i class="fa fa-check"></i> Boarding & Day</li>
                                </ul>-->
                            </div>
                        </div>

                        <!-- <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Owner-Ship</h2>
                                <p class="sch_country">Public</p>
                            </div>
                        </div> -->
<!--                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">History</h2>
                                <p>The School was opened on 3rd&nbsp;February, 1949 with the arrival of 50 students and its formal opening ceremony was attended by many dignitaries, including</p>
                                <p>The Asantehene, Otumfuo Osei-Agyemang Prempeh II, Major C. O. Butler, Church Leaders, Chiefs and members of the Kumasi Traditional Council.</p>
                                <p>The Asantehene maintained a keen interest in the school and was a frequent attendant at the School’s Speech and Prize-Giving Days.</p>
                                <p>The College has been under the watch of 10 Headmasters since it was founded some 62 years ago.&nbsp; The first Headmaster, Rev. S. N. Pearson in his four year term set the trail blazing by making discipline and academic work his principal occupation.&nbsp; He also started to replace the old buildings of the former 52nd&nbsp;military Hospital. His successors continued to build on the solid foundation laid.</p>
                                <p>Special mention is made of Dr. T. A. Osae, first African headmaster who brought the work of his predecessors to fruition and built on it.</p>
                                <p>&nbsp;Today the success story of Prempeh College has made it a school of choice for boys across the country.&nbsp; The vision and dreams of the Monarch and the others have become a reality and today alumni of the school are serving in many positions of responsibility in and outside the country.&nbsp; They have distinguished themselves as academics, doctors, lawyers, teachers, engineers, architects, traditional rulers and as officers in the security services.&nbsp; In the political arena, the immediate past President of the Republic of Ghana, Mr. J. A. Kufour is an Amanfoכ.</p>
                                <p>The school looks into the future with hope and will continue to make the sky the limit.</p>
                            </div>
                        </div>-->
                       <!--  <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Programs Offered</h2>
                                <p class="sch_country">Secondary Education</p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Branches</h2>
                                <ul>
                                    <li><i class="fa fa-graduation-cap "></i> Science</li>
                                    <li><i class="fa fa-graduation-cap "></i> Art</li>
                                    <li><i class="fa fa-graduation-cap "></i> Architecture</li>
                                </ul>
                            </div>
                        </div> -->
                       <!--  <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Schools Facility</h2>
                                <ul>
                                    <li><i class="fa fa-chevron-circle-right"></i>  Basket Ball Court</li>
                                    <li><i class="fa fa-chevron-circle-right "></i> Computer Study Lab</li>
                                    <li><i class="fa fa-chevron-circle-right "></i> Football Pitch </li>
                                    <li><i class="fa fa-chevron-circle-right "></i> Science Labs </li>
                                    <li><i class="fa fa-chevron-circle-right "></i> Swimming Pool </li>
                                    <li><i class="fa fa-chevron-circle-right "></i> Design & Technology Lab </li>
                                    <li><i class="fa fa-chevron-circle-right "></i> Tennis Court </li>
                                    <li><i class="fa fa-chevron-circle-right "></i> Library </li>
                                    <li><i class="fa fa-chevron-circle-right "></i> Other </li>
                                </ul>
                            </div>
                        </div> -->

                      <?php              
                       $str=$row['Program_tokenfield'];
                                       $str=str_replace("," , "<br>",$str);
                    ?>
                       
                         <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Programs offered</h2>  
                                <p><?php echo $str ?></p><br/>
                            </div>
                        </div>


                    <?php              
                       $str=$row['school_facility'];
                                       $str=str_replace("," , "<br>",$str);
                    ?>
                       
                         <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">School facility</h2>  
                                <p><?php echo $str ?></p><br/>
                            </div>
                        </div>

                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Student Population</h2>
                                <p><?php echo $row['school_population']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Teaching Staff</h2>
                                <p><?php echo $row['teaching_staff']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Non-Teaching Staff</h2>
                                <p><?php echo $row['non_teaching_staff']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Admission Fees</h2>
                                <p><?php echo $row['school_acadamic_fee']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Admission Requirement</h2>
                                <p><?php echo $row['acadamic_requirment']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Admission Procedure</h2>
                                <p><?php echo $row['admission_procedure']?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Academic Year</h2>
                                <p>August 2016</p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Past Awards</h2>
                                <p><?php echo $row['school_awards']; ?></p>
                            </div>
                        </div>                     
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Scholarships</h2>
                                <p><?php echo $row['school_scholarship']; ?></p>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Address</h2>
                                <div id="address"><p><?php echo $row['school_address']; ?></p></div>
                                <div id="map" style="height:200px;width:100%;" ></div>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Website</h2>
                                <a href="#" target="_blank"><?php echo $row['school_url']?></a>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Contact</h2>
                                <p><i class="fa fa-phone"></i> Ph.No. <?php echo $row['school_number']?></p>
                            </div>
                        </div>
                    <?php    if ($this->session->userdata('logged_in'))
                        {  ?>
                        <div class="col m12">
                            <div class="school_country">
                                <h2 class="sch_det_title">Enquiry</h2>
                                <p>Want More Details about School? &nbsp;<a href="<?php echo base_url() ?>index.php/enquiry?id=<?php echo $sch_id; ?>&name=<?php echo $row['school_name']?>" class="waves-effect waves-light btn red darken-3">Make Enquiry</a></p>
                            </div>
                        </div>
  <div class="coment_box row">

                        <?php } ?>
                       <!--  <div class="coment_box row">

                            <div class="col m12">
                                <h2>Add New Comment</h2>
                            </div>
                            <div class="coment_form">
                                <form id="schooldetails" action="#" method="post">
                                    <div class="input-field col s6">
                                        <input id="Name" type="text" name="username" class="validate">
                                        <label for="Name">Your Name</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input id="Subject" name="subject" type="text" class="validate">
                                        <label for="Subject">Subject</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <textarea id="Comment" name="comment" class="materialize-textarea"></textarea>
                                        <label for="Comment">Comment</label>
                                    </div>
                                    <div class="col m12">
                                        <button class="waves-effect waves-light btn red darken-1">Save</button>
                                    </div>
                                </form>
                            </div>


                        </div>  -->

<?php } ?>

                    </div>
                    <div class="coment_box row">
                            <div class="col m12">
                                <h2>Add New Comment</h2>
                            </div>
                            <div>
                            <div class="course_info">
        <!-- <p class="lead black-text"><h1 class = "page-heading">Question:<?php //echo $ques->question_desc ?></h1></p> --> </div>
        <?php  $sname= $this->session->userdata('susername');?></div>
        <div class="col m12 s12 card-panel"> <?php echo $comments ?> </div>
         <div class="comment_info"><h3 class="page-heading"> Leave a Reply </h3></div> 
         <p class="notice error"><?php $this->session->flashdata('error_msg'); ?></p><br/>  
                            <div class="coment_form">
                                <?php  if ( !$this->session->userdata('logged_in')){?>
 <div class="col m12">
    <p class="black-text">Oops! You comment box is not visible to you because you're not logged in  <a href="<?php echo base_url() ?>index.php/login">Login here</a></p>
   
</div>
     <?php 
    } else{?>
                                <form id="comment_form" method="post" action="<?= base_url() ?>schooldetails/add_sch_comment/<?= $ques->school_id ?> " >
                                    <div class="input-field col s12">
                                        <label for="comment_name">Name:</label> 
          <input class="form-control" type="text"  name="comment_name" id='name' value="<?php echo $sname ?>" readonly />
                                    </div>
                                 
                                     <div class="form-group"> 
           <label for="comment"><!-- <i class='material-icons prefix'>mode_edit</i> -->Comment :</label> 
           <textarea class="form-control" name="comment_body" value="<?php set_value("comment_body"); ?>" id='comment'></textarea>
            </div>
                        <input type='hidden' name='sparent_id' value="0" id='parent_id' />
                    <input type='hidden' name='sresponse_type' value="answer" id='response_type' />
                    <input type='hidden' name='sresponse_like' value="0" id='response_like' />
    <input type='hidden' name='school_id' id='parent_id' value="<?= $ques->school_id ?>" />     

                 <div id='submit_button' class="margin-b-10"> 
             <input class="btn btn-success" type="submit" name="submit" value="add comment"/> 
             </div> 
                                </form>
                                <?php }?>
                            </div>


                        </div>
                </div>
            <!-- </div> -->
                


                <div class="col s12 m3 ">
                  <div class="latest_news_wrap ">
                        <h1 class="red_label_title">Latest News</h1>
                        <ul class="latest_news_list">
                            <?php
                                foreach ($news as $row){ 
                                    $news_id = $row['post_id'];?>
                            <li class="Latest_news_content">
                                <a href="<?php echo base_url()?>news_detail/show_one/<?= $news_id   ?>" class="news_link">
                                    <span class="News_title"><?php echo $row['post_title']; ?></span>
                                </a>
                                <span id="newsdetailinfo" class="hmForumDateFormat">by <strong><a href="<?php echo base_url(); ?>index.php/userdashboard?uid=<?php echo $row['user_id']; ?>"><?php echo $row['post_author']; ?></a></strong> On <?php echo $row['post_date']; ?> At <?php echo $row['post_date']; ?><span class="infoText1"> for <?php echo $row['post_category'];?> | Comments [7]  
                                    </span></span>
                            </li>
                            <?php } ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- </div> -->
<?php $this->load->view('footer'); ?>
<script type="text/javascript" src="<?php echo base_url() .'js/newsdetails.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'js/schooldetails.js'?>"></script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>
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
                                     url: 'http://localhost/ETHIO/index.php/Likeunlikeschool',
                                     data: {'ques_id': ques_id,'u_id':u_id,'res_id':res_id,'like_stat':like_stat,'parent_id':par_id},
                                    
                                     success: function(data) {
                                      
                                         console.log(data);
                                       //location.reload();
         
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
                                     url: 'http://localhost/ETHIO/index.php/Likeunlikeschool',
                                     data: {'ques_id': ques_id,'u_id':u_id,'res_id':res_id,'like_stat':like_stat,'parent_id':par_id},
                                      success: function(msg) {
                                         console.log(msg);
                                       //location.reload();
                               },
                               error:function(error){
                                      alert("fgfdg" +error);
                                     }
                             });
                          }
                     }

  </script>
<script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: -34.397, lng: 150.644}
        });
        var geocoder = new google.maps.Geocoder();

       // document.getElementById('address').addEventListener("focusout", function() {
            var address = "<?php echo $row['school_address'] ?>";
           // alert(address);
            if(address.length>2){
                geocodeAddress(geocoder, map);
            }
          
      //  });
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = "<?php echo $row['school_address'] ?>";
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCntmJ5TdbgO9HQ-fsPqVYtmxuuYMcQKwE&callback=initMap">
    </script>
    <?php foreach ($sch_details as $row){
    $post_desc = substr($row['school_desc'],0,100);
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
name: '<?php echo $row['school_name']; ?>',
link: ' <?php echo base_url(); ?>index.php/schooldetails?id=<?php echo $row['school_id']; ?>',
picture: 'https://www.giz.de/static/en/images/images_References/toolbox_sponsor/Logo-MoE_rdax_205x194.jpg',
caption: 'Ethio Edu Vacancy',
description: '<?php echo $fdesc; ?>',
message: ''
});
});
});
</script>
<?php } ?>
