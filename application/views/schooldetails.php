<?php  $this->load->view('header'); ?>
<div class="service-wrap ">
  <div class="row">
    <div class="col s12 m9 grid-example ">
      <div class="row school_detail_wrap z-depth-1">
        <?php  //$sch_id = $_GET['id'];
$sch_id = $this->uri->segment('3');
foreach ($sch_details as $row){ 
?>
        <div class="school_banner col m12">
          <?php $img=$row['school_logo'] ?>
          <center><img class="school-dtls-img responsive-img" src="<?php echo base_url().'uploads/'.$img ?>"  /></center>
        </div>
        <div class="school_name-wrap col m12">
          <div class="red col m12">
            <h2 class="school_name col s8">
              <i class="material-icons dp48">verified_user
              </i>
              <?php echo $row['school_name']?>
            </h2>
            <span class=" school-type col s4">
              <span>
                <strong>Category:
                </strong>
              </span> 
              <?php echo $row['school_category']?>
            </span>
          </div>
        </div>
        <div class="col m12">
          <div class="school_social">
            <ul>
              <li>
                <a id = "share_button" href="#" class="waves-effect waves-light btn facebook darken-3">
                  <i class="fa fa-facebook-square">
                  </i> Facebook
                </a>
              </li> 
              <?php 
$s_desc = substr($row['school_desc'],0,100);
$edesc = $s_desc.'...';
?>
              <li>
                <a href="javascript:myPopup('https://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url();?>?id=<?php echo $this->uri->segment('3'); ?>&title=<?php echo $row['school_name']; ?>&summary=<?php echo $edesc; ?>')" class="waves-effect waves-light btn linkedin darken-3">
                  <i class="fa fa-linkedin">
                  </i> Linkedin
                </a>
              </li> 
              <li>
                <a href="https://twitter.com/intent/tweet?text=<?php echo $row['school_name']?>?url=<?php echo base_url();?>?id=<?php echo $this->uri->segment('3'); ?>" data-show-count="false" class="waves-effect waves-light btn twitter darken-3 ">
                  <i class="fa fa-twitter">
                  </i> Twitter
                </a>
              </li> 
              <script async src="//platform.twitter.com/widgets.js" charset="utf-8">
              </script> 
              <li>
                <a href="https://plus.google.com/share?url=<?php echo base_url();?>?id=<?php echo $this->uri->segment('3'); ?>" class="waves-effect waves-light btn googleplus darken-3" onclick="javascript:window.open(this.href,
'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                  <i class="fa fa-google-plus">
                  </i> Google
                </a>
              </li> 
            </ul>
          </div>
        </div>
        <div class="col m12">
          <div class="school_desc">
            <h2 class="sch_det_title">Description

            <h2 class="sch_det_title">Description/Background : <span class="sch_det_retrived_data" ><?php echo $row['school_desc']?></span>

            </h2>
            <!-- <p class="sch_desc">
              <?php// echo $row['school_desc']?>
            </p> -->
          </div>
        </div>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Country:<span class="sch_det_retrived_data"> <?php echo $row['school_country']?></span>
            </h2>
           <!--  <p class="sch_country">
              <?php //echo $row['school_country']?>
            </p> -->
          </div>
        </div>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">City: <span class="sch_det_retrived_data"><?php echo $row['school_city']?></span>
            </h2>
            <!-- <p class="sch_country">
              <?php //echo $row['school_city']?>
            </p> -->
          </div>
        </div>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Region: <span class="sch_det_retrived_data"><?php echo $row['school_region']?></span>
            </h2>
           <!--  <p class="sch_country">
              <?php //echo $row['school_region']?>
            </p> -->
          </div>
        </div>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Type: <span class="sch_det_retrived_data"><?php echo $row['school_type']?></span>
            </h2>
            <!-- <p class="sch_country">
              <?php //echo $row['school_type']?>
            </p> -->
          </div>
        </div>
        <?php              
$str=$row['Program_tokenfield'];
$str=str_replace("," , "<br>",$str);
?>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Programs offered:<span class="sch_det_retrived_data"><?php echo $str ?></span>
            </h2>  
            <!-- <p>
              <?php //echo $str ?>
            </p> -->
            <br/>
          </div>
        </div>
        <?php              
$str=$row['school_facility'];
$str=str_replace("," , "<br>",$str);
?>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">School facility:<span class="sch_det_retrived_data"><?php echo $str ?></span>
            </h2>  
            <!-- <p>
              <?php// echo $str ?>
            </p> -->
            <br/>
          </div>
        </div>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Student Population: <span class="sch_det_retrived_data"><?php echo $row['school_population']?></span>
            </h2>
           <!--  <p>
              <?php //echo $row['school_population']?>
            </p> -->
          </div>
        </div>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Teaching Staff:<span class="sch_det_retrived_data"><?php echo $row['teaching_staff']?></span>
            </h2>
            <!-- <p>
              <?php //echo $row['teaching_staff']?>
            </p> -->
          </div>
        </div>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Non-Teaching Staff:<span class="sch_det_retrived_data"> <?php echo $row['non_teaching_staff']?></span>
            </h2>
            <!-- <p>
              <?php //echo $row['non_teaching_staff']?>
            </p> -->
          </div>
        </div>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Admission Fees:<span class="sch_det_retrived_data"><?php echo $row['school_acadamic_fee']?></span>
            </h2>
            <!-- <p>
              <?php //echo $row['school_acadamic_fee']?>
            </p> -->
          </div>
        </div>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Admission Requirement:<span class="sch_det_retrived_data"><?php echo $row['acadamic_requirment']?></span>
            </h2>
           <!--  <p>
              <?php //echo $row['acadamic_requirment']?>
            </p> -->
          </div>
        </div>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Admission Procedure:<span class="sch_det_retrived_data"><?php echo $row['admission_procedure']?></span>
            </h2>
           <!--  <p>
              <?php //echo $row['admission_procedure']?>
            </p> -->
          </div>
        </div>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Academic Year :<span class="sch_det_retrived_data"> <?php echo $row['school_acadamic_year']; ?></span>
            </h2>
           <!--  <p>August 2016
            </p> -->
          </div>
        </div>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Past Awards: <span class="sch_det_retrived_data"><?php echo $row['school_awards']; ?></span>
            </h2>
           <!--  <p>
              <?php //echo $row['school_awards']; ?>
            </p> -->
          </div>
        </div>                     
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Scholarships: <span class="sch_det_retrived_data"><?php echo $row['school_scholarship']; ?></span>
            </h2>
           <!--  <p>
              <?php //echo $row['school_scholarship']; ?>
            </p> -->
          </div>
        </div>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Address : <?php echo $row['school_address']; ?>
            </h2>
            <div id="address">
              <!-- <p>
                <?php// echo $row['school_address']; ?>
              </p> -->
            </div>
           <div id="map" style="height:200px;width:100%;" ></div>
            </div>
          </div>
        
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Website :<span class="sch_det_retrived_data"><?php echo $row['school_url']?></span>
            </h2>
            <!-- <a href="#" target="_blank">
               <?php //echo $row['school_url']?>
            </a> -->
          </div>
        </div>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Contact :<span class="sch_det_retrived_data"><i class="fa fa-phone">
              </i> Ph.No. 
              <?php echo $row['school_number']?></span>
            </h2>
            <!-- <p>
              <i class="fa fa-phone">
              </i> Ph.No. 
              <?php //echo $row['school_number']?>
            </p> -->
          </div>
        </div>
        <?php    if ($this->session->userdata('logged_in'))
{  ?>
        <div class="col m12">
          <div class="school_country">
            <h2 class="sch_det_title">Enquiry
            </h2>
            <p class="black-text">Want More Details about School? &nbsp;
              <a href="<?php echo base_url() ?>index.php/enquiry?id=<?php echo $sch_id; ?>&name=<?php echo $row['school_name']?>" class="waves-effect waves-light btn red darken-3">Make Enquiry
              </a>
            </p>
          </div>
        </div>
          <?php }} ?>
        <div class="coment_box row">
          <div class="col m12">  
            <h2>Add New Comment
            </h2>
          </div>
          <div class="course_info">
          </div>
          <?php  $sname= $this->session->userdata('susername');?>
        </div>
        <div class="col m12 s12 card-panel"> 
          <?php echo $comments ?> 
        </div>
        <div class="comment_info">
          <h3 class="page-heading"> Leave a Reply 
          </h3>
        </div> 
        <p class="notice error">
          <?php $this->session->flashdata('error_msg'); ?>
        </p>
        <br/>  
        <div class="coment_form">
          <?php  if ( !$this->session->userdata('logged_in')){?>
          <div class="col m12">
            <p class="black-text gist-heading">Oops! comment box is not visible to you because you're not logged in  
              <a href="<?php echo base_url() ?>index.php/login">Login here
              </a>
            </p>
          </div>
          <?php 
} else{?>
          <form id="comment_form" method="post" action="<?= base_url() ?>schooldetails/add_sch_comment/<?= $ques->school_id ?> " >
            <div class=" form-group input-field col s12">
              <label for="comment_name">Name:
              </label> 
              <input class="form-control" type="text"  name="comment_name" id='name' value="<?php echo $sname ?>" readonly />
            </div>
            <div class="form-group"> 
              <label for="comment">
                <!-- <i class='material-icons prefix'>mode_edit</i> -->Comment :
              </label> 
              <textarea class name="comment_body" value="<?php set_value("comment_body"); ?>" id='comment'>
              </textarea>
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
  <div class="col s12 m3 ">
    <div class="latest_news_wrap ">
      <h1 class="red_label_title">Latest News
      </h1>
      <ul class="latest_news_list">
        <?php
foreach ($news as $row){ 
$news_id = $row['post_id'];
 $parent = $row['pparent_id'];
$query2 = $this->db->query("select count(*) as row_count from tbl_postresponse where post_id = '".$news_id."' and pparent_id = '0'");
?>
        <li class="Latest_news_content">
          <a href="<?php echo base_url()?>news_detail/show_one/<?= $news_id   ?>" class="news_link">
            <span class="News_title">
              <?php echo $row['post_title']; ?>
            </span>
          </a>
          <span id="newsdetailinfo" class="hmForumDateFormat">by 
            <strong>
              <a href="<?php echo base_url(); ?>index.php/userdashboard?uid=<?php echo $row['user_id']; ?>">
                <?php echo $row['post_author']; ?>
              </a>
            </strong> On 
            <?php echo $row['post_date']; ?> At 
            <?php echo $row['post_date']; ?>
            <span class="infoText1"> for 
              <?php echo $row['post_category'];?> | Comments [<?php echo $query2->result()[0]->row_count; ?>]  
            </span>
          </span>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
  </div> 
</div>



<!-- </div> -->
<?php $this->load->view('footer'); ?>
<script type="text/javascript" src="<?php echo base_url() .'js/newsdetails.js' ?>">
</script>
<script type="text/javascript" src="<?php echo base_url().'js/schooldetails.js'?>">
</script>
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js">
</script>
<script type='text/javascript'> 
  $(function () {
    $("a.reply").click(function () 
                       {
      var id = $(this).attr("id");
      $("#parent_id").attr("value", id);
      $("#name").focus();
    }
                      );
  }
   );
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
        data: {
          'ques_id': ques_id,'u_id':u_id,'res_id':res_id,'like_stat':like_stat,'parent_id':par_id}
        ,
        success: function(data) {
          console.log(data);
          location.reload();
        }
        ,
        error:function(error){
          alert("error" +error);
        }
      }
            );
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
        data: {
          'ques_id': ques_id,'u_id':u_id,'res_id':res_id,'like_stat':like_stat,'parent_id':par_id}
        ,
        success: function(msg) {
          console.log(msg);
          location.reload();
        }
        ,
        error:function(error){
          alert("fgfdg" +error);
        }
      }
            );
    }
  }
</script>
<?php foreach ($sch_details as $row){ ?>
<script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: -34.397, lng: 150.644}
        });
        var geocoder = new google.maps.Geocoder();

        //document.getElementById('address').addEventListener("focusout", function() {
            var address = "<?php echo $row['school_address'] ?>";
            if(address.length>2){
                geocodeAddress(geocoder, map);
            }
          
        //});
      }

      function geocodeAddress(geocoder, resultsMap) {
          var address = "<?php echo $row['school_address'] ?>";
        //var address = document.getElementById('address').value;
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
    <?php } ?>
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
        }
      );
    }
                            );
  }
                   );
</script>
<?php } ?>
<script type="text/javascript">
     function myPopup(url) {
window.open( url, "myWindow", "status = 1, height = 500, width = 360, resizable = 0" );
}
    
</script>

<script>
$(document).ready(function() {

    $('#comment_form').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            comment_name: {
                validators:{
                    notEmpty:{
                        message:'name required'
                    }
                   /* regexp:{
                              regexp: /^[a-z\s]+$/i,
                                message: 'The  name can consist of alphabetical characters and spaces only'
                    }*/
                }
            },
              comment_body: {
                validators: {
                    notEmpty: {
                        message: ' please enter comment!!!..'
                    }
                }
            },
              

        }
    });
});

                     </script>
