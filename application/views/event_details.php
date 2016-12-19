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
                        */
                                foreach ($eventid as $row){ 
                                    
                        ?>
                            <div class="event_heading ">
                                <span>Posted: <?php echo $row['post_date']; ?> into <?php echo $row['post_category'];?> by <?php echo $row['post_author']; ?> | 155 Comments </span>
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
                                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url(uri_string()); ?>&title=<?php echo $row['post_title']; ?>&summary=<?php echo $edesc; ?>" class="waves-effect waves-light btn linkedin darken-3"><i class="fa fa-linkedin"></i> Linkedin</a></li> 

                                            <li><a href="https://twitter.com/intent/tweet?text=<?php echo $row['post_title']?>?url=<?php echo current_url(); ?>" data-show-count="false" class="waves-effect waves-light btn twitter darken-3 "><i class="fa fa-twitter"></i> Twitter</a></li> 
                                           <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

                                            <li><a href="#" class="waves-effect waves-light btn googleplus darken-3"><i class="fa fa-google-plus"></i> Google</a></li> 

                                        </ul>
                                    </div>
                        </div>
                        <div class="event_details_content">
                            <p class="black-text"></p>
                            <?php echo $row['post_desc']; ?>
                        </div>

                        <div class="comment_box row">
                            <div class="col m12">
                                <h3>Leave a Reply</h3>
                                <form id="comment" action="#" method="post" >
                                <div class=" form-group input-field col m5">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" name="name" class="validate">
                                    <label for="icon_prefix">Name</label>
                                </div>
                                <div class=" form-group input-field col m12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea id="icon_prefix2" name="reply" class="materialize-textarea"></textarea>
                                    <label for="icon_prefix2">Comment</label>
                                </div>
                                <button class="btn waves-effect waves-light col m2 offset-m1 margin-b-10" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
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