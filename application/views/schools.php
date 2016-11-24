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
                <div class="col s12 m10 grid-example z-depth-1">
                    <div class="school_category">
                        <div class="col m12 s12">
                            <div class="course_info">
                                <h1 class="page-heading">Schools in Ethiopia </h1>

                                <p>Find private and public schools in Ethiopia. Get all the information on nursery, primary, secondary, senior, preparatory, international schools as well as kindergartens in Ethiopia.</p>
                            </div>
                        </div>
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">School Categories </h1>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_category_box">
                                <ul class="s_category_list">
                                    <li class="catrgory_list_item"><a href="#">Kindergartens and Nursery</a></li>
                                    <li class="catrgory_list_item"><a href="#">Private Primary</a></li>
                                    <li class="catrgory_list_item"><a href="#">Public Primary Schools</a></li>
                                    <li class="catrgory_list_item"><a href="#">Private Secondary</a></li>
                                    <li class="catrgory_list_item"><a href="#">Public Secondary</a></li>
                                    <li class="catrgory_list_item"><a href="#">International</a></li>
                                    <li class="catrgory_list_item"><a href="#">Preparatory</a></li>
                                    <li class="catrgory_list_item"><a href="#">Senior</a></li>
                                    <li class="catrgory_list_item"><a href="#">University</a></li>
                                    <li class="catrgory_list_item"><a href="#">Institutes</a></li>

                                    <li class="catrgory_list_item"><b>Collages:</b></li>
                                    <li class="catrgory_list_item"><a href="#">Commerce & Business</a></li>
                                    <li class="catrgory_list_item"><a href="#">Computer Training & IT</a></li>
                                    <li class="catrgory_list_item"><a href="#">Distance Education</a></li>
                                    <li class="catrgory_list_item"><a href="#">Engineering</a></li>
                                    <li class="catrgory_list_item"><a href="#">Medical Schools</a></li>
                                    <li class="catrgory_list_item"><a href="#">University Collages</a></li>
                                    <li class="catrgory_list_item"><a href="#">Theology & Bible</a></li>
                                    <li class="catrgory_list_item"><a href="#">Theology & Bible</a></li>
                                    <li class="catrgory_list_item"><a href="#">Agriculture</a></li>
                                    <li class="catrgory_list_item"><a href="#">Vocational/Technical</a></li>

                                    <li class="catrgory_list_item"><b>Others:</b></li>
                                    <li class="catrgory_list_item"><a href="#">Aviation</a></li>
                                    <li class="catrgory_list_item"><a href="#">Art & Design</a></li>
                                    <li class="catrgory_list_item"><a href="#">Health & Beauty</a></li>
                                    <li class="catrgory_list_item"><a href="#">Counselling & Enterpreunership</a></li>
                                    <li class="catrgory_list_item"><a href="#">Driving Schools</a></li>
                                    <li class="catrgory_list_item"><a href="#">Language, computer & IT  Training Courses</a></li>
                                    <li class="catrgory_list_item"><a href="#">Tutorial Center</a></li>
                                    <li class="catrgory_list_item"><a href="#">Hotel tourism</a></li>
                                    <li class="catrgory_list_item"><a href="#">Mass Media</a></li>
                                    <li class="catrgory_list_item"><a href="#">Accounts</a></li>

                                </ul>
                                <p><span class="News-button"><a class="waves-effect waves-light btn" href="<?php echo base_url() . 'index.php/addschool' ?>">Add School</a></span></p>
                            </div>
                        </div>
                    </div>

                    <div class="serch_schools col m12 " style="border-bottom: 1px solid #4c4e4e;">
                        <div class="row">
<datalist id="schoolnames">
    <?php  foreach ($schools as $row){ ?>
    <option value="<?php echo $row['school_name'];?>"><?php echo $row['school_name'];?></option>
     <?php }   ?>

</datalist>
                            <form class="col s12">
                                <div class="row border-b">
                                    <div class="page-heading-wrap col s12 m2">
                                        <h6 class="page-heading">Schools Name:</h6>
                                    </div>
                                    <div class="input-field col s12 m3">
                                        <input id="schools_name" type="text" class="validate" name="school_name" list="schoolnames"/>
                                        <label for="schools_name">Schools Name</label>
                                    </div>
                                    <div class="input-field col s12 m2">
                                        <p>
                                            <input type="checkbox" id="privates" value="private" name="school_type[]" />
                                            <label for="privates">Private School</label>
                                        </p>
                                    </div>
                                    <div class="input-field col s12 m2">
                                        <p>
                                            <input type="checkbox" value="public" id="publics" name="school_type[]"/>
                                            <label for="publics">Public School</label>
                                        </p>
                                    </div>

                                    <div class="input-field col s2">
                                        <a id="serach_but_id"  class="waves-effect waves-light btn margin-t-15" >Search</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="school_search_result">
                        <div class="row">
                            <div class="col m12">
                                <div class="school_short_info ">
                                    <div class="row schools-row">
                                <?php
               
                                foreach ($schools as $row){ ?>
                                        <div class="col m3">
                                            <div class="row">
                                                <div class="col m6 offset-m2">
                                                    <div class="s_logo">
                                                    <?php $img = $row['school_logo'];  ?>
                                                        <img src="<?php echo base_url().'uploads/'.$img ?>">
                                                        
                                                        
                                                    </div>

                                                </div>
                
                                                <div class="col m12">
                                                    <div class="s_detail">
                                                    <?php $sid = $row['school_id'];?>
                                                        <h1><?php echo $row['school_name'];?></h1>
                                                        <p>  <i class="red-text fa fa-envelope"></i> Lukenya@mail.com</p>
                                                        <p><i class=" red-text fa fa-phone"></i> <?php echo $row['school_number'];?></p>
                                                        <p><?php echo $row['school_desc'];?></p>
                                                        <a href="<?php echo base_url().'index.php/schooldetails?id='.$sid?>">View More >></a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <?php }   ?>
                           
                        </div>
                    </div>
                    <div>
                            <ul class="pagination">
                                <li><a href="#!"><i class="fa fa-chevron-left"></i></a></li>
                                <li class="active"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                  </div>
                    <div class="featured_schools col s12 m12">

                        <h5>Featured Schools</h5>
                        <div class="featured_slider">
                            <div class="item"><img src="<?php echo base_url().'images/slider_upper/featured_sc1.jpg'?>"></div>
                            <div class="item"><img src="<?php echo base_url().'images/slider_upper/featured_sc2.jpg'?>"></div>
                            <div class="item"><img src="<?php echo base_url().'images/slider_upper/featured_sc3.png'?>"></div>
                            <div class="item"><img src="<?php echo base_url().'images/slider_upper/featured_sc2.jpg'?>"></div>

                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>
<?php $this->load->view('footer'); ?>
<script>
$(document).ready(function()
{
    $("#serach_but_id").click(function()
    {
        var isprivatesel=$("#privates").prop("checked");
        var ispublicssel=$("#publics").prop("checked");

        var school_val=$.trim($("#schools_name").val());

        var choice="";
        if(isprivatesel && !ispublicssel)
        {
            choice="1";
        }
        else if(!isprivatesel && ispublicssel)
        {
            choice="2";
        }
        else if(isprivatesel && ispublicssel)
        {
            choice="3";
        }
        else
        {
            choice=$("#schools_name").val();
        }
        if(choice!="")
        {
          $.ajax({
                type:"POST",
                url:"search",
                data:{"choice":choice,"school_nm":school_val},
                datatype:"json",
                success:function(response,testStatus,jqXHR)
                {
                   //alert(response); 
                   $(".schools-row").children().remove();
                   console.log(response);
                        var obj = $.parseJSON(response); 
                          for (var i = 0; i < obj.length; i++)
                            {

                         var rw = '<div class="col m3"><div class="row"><div class="col m6 offset-m2"><div class="s_logo"><img src=<?php echo base_url()?>/uploads/'  + obj[i].school_logo + '></div></div><div class="col m12"><div class="s_detail"><h1>' + obj[i].school_name + '</h1><p><i class="red-text fa fa-envelope"></i> '+ obj[i].school_type +'</p> <p><i class=" red-text fa fa-phone"></i>'+ obj[i].school_number +'</p> <p>'+ obj[i].school_desc +'</p><a href="<?php echo base_url().'index.php/schooldetails'?>">View More >></a></div></div></div></div>';
                        $(".schools-row").append(rw);
                    }
                },
                error:function(response,testStatus,jqXHR)
                {
                    alert(response);
                }
            });
       
      }
    });

});  
</script>
