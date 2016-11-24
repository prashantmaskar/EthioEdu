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
                <div class="col s12 m8 grid-example z-depth-1">
                    <div class="project_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Projects <span class="Project-button"><a href="<?php echo base_url().'index.php/project_topics'?>"class="waves-effect waves-light btn">Post Project</a></span></h1>
                            </div>
                        </div>
                       
                        <div class="col s12 m12 ">
                            <div class="school_category_box">
                            <ul class="s_category_list">
                                    <li class="catrgory_list_item"><a href="#">Administration Project Topics(2)</a></li>
                                    <li class="catrgory_list_item"><a href="#">Agricultural Project Topics(3)</a></li>
                                    <li class="catrgory_list_item"><a href="#">Art & Humanities Project Topics(23)</a></li>
                                    <li class="catrgory_list_item"><a href="#">Education Project Topics(12)</a></li>
                                    <li class="catrgory_list_item"><a href="#">Engineering,Environment $ Technology Project Topics(1)</a></li>
                                    <li class="catrgory_list_item"><a href="#">Low Project Topics(4)</a></li>
                                    <li class="catrgory_list_item"><a href="#">Medical,Pharmaceutical & Health Science Project Topics(4)</a></li>
                                    <li class="catrgory_list_item"><a href="#">Sciences Project Topics(5)</a></li>
                                    <li class="catrgory_list_item"><a href="#">Social & Management Sciences Project Topics(66)</a></li>
                                    

                                </ul>
                                <!-- <ul class="project_list">
                                    <li class="project_content">
                                        <a href="<?php //echo base_url().'index.php/project_details'?>" class="project_link">
                                            <span class="Project_title">Administration Project Topics</span><span> [9]</span>
                                        </a>
                                       
                                    </li>
                                    <li class="project_content">
                                        <a href="<?php //echo base_url().'index.php/project_details'?>"  class="project_link">
                                            <span class="Project_title">Agricultural Project Topics</span><span> [9]</span>
                                        </a>
                                        
                                    </li>
                                    <li class="project_content">
                                        <a href="<?php //echo base_url().'index.php/project_details'?>"  class="project_link">
                                            <span class="Project_title">Art & Humanities Project Topics</span><span> [9]</span>
                                        </a>
                                       
                                    </li>
                                    <li class="project_content">
                                        <a href="<?php //echo base_url().'index.php/project_details'?>"  class="project_link">
                                            <span class="Project_title">Education Project Topics</span><span> [9]</span>
                                        </a>
                                      
                                    </li>
                                    <li class="project_content">
                                        <a href="<?php //echo base_url().'index.php/project_details'?>"  class="project_link">
                                            <span class="Project_title">Engineering,Environment $ Technology Project Topics</span><span> [9]</span>
                                        </a>
                                      
                                    </li>
                                    <li class="project_content">
                                        <a href="<?php //echo base_url().'index.php/project_details'?>"  class="project_link">
                                            <span class="Project_title">Low Project Topics</span><span> [9]</span>
                                        </a>
                                       
                                    </li>
                                    <li class="project_content">
                                        <a href="<?php //echo base_url().'index.php/project_details'?>"  class="project_link">
                                            <span class="Project_title">Medical,Pharmaceutical & Health Science Project Topics</span><span> [9]</span>
                                        </a>
                                      
                                    </li>
                                    <li class="project_content">
                                        <a href="<?php //echo base_url().'index.php/project_details'?>"  class="project_link">
                                            <span class="Project_title">Sciences Project Topics</span><span> [9]</span>
                                        </a>
                                      
                                    </li>
                                         <li class="project_content">
                                        <a href="<?php //echo base_url().'index.php/project_details'?>"  class="project_link">
                                            <span class="Project_title">Social & Management Sciences Project Topics</span><span> [9]</span>
                                        </a>
                                       
                                    </li>
                                </ul>
 -->
                                <!-- <ul class="pagination">
                                    <li><a href="#!"><i class="fa fa-chevron-left"></i></a></li>
                                    <li class="active"><a href="#!">1</a></li>
                                    <li class="waves-effect"><a href="#!">2</a></li>
                                    <li class="waves-effect"><a href="#!">3</a></li>
                                    <li class="waves-effect"><a href="#!">4</a></li>
                                    <li class="waves-effect"><a href="#!">5</a></li>
                                    <li class="waves-effect"><a href="#!"><i class="fa fa-chevron-right"></i></a></li>
                                </ul> -->
                            </div>
                        </div>
                        <datalist id="projectnames">
    <?php  foreach ($project_topics as $row){ ?>
    <option value="<?php echo $row['project_title'];?>"><?php echo $row['project_title'];?></option>
     <?php }   ?>

</datalist>
<datalist id="coursenames">
    <?php  foreach ($project_topics as $row){ ?>
    <option value="<?php echo $row['project_course'];?>"><?php echo $row['project_course'];?></option>
     <?php }   ?>

</datalist>
<form id="sortproject" method="post" action="<?php echo base_url() . 'index.php/Projectlist' ?>">
                         <div class="col m12 s12">
                            <div class="project_sort_form col m12">
                                <div class="col s2">
                                    <p class="black-text">Search Projects:</p>
                                </div>
                                <div class="input-field col s4">
                                        <input list="projectnames" id="startdate" type="text" class=" validate" name="project_name" >
                                        <label for="Caption">Project Name</label>
                                    </div>
                                <div class="input-field col s4">
                                        <input list="coursenames" id="enddate" type="text" class=" validate" name="course_name">
                                        <label for="Caption">Course Name</label>
                                    </div>
                                <div class="input-field col s2">
                                         <button class="btn waves-effect waves-light" type="submit" name="action">search
                                            <i class="material-icons ">search</i>
                                        </button>
                                    </div>
                            </div>
                        </div>
                        </form>
                        <div class="col s12 m12 ">
                            <div class="project_list_wrap">
                               
                                   <ul class="project_list">
                                  <?php
                                  if(isset($_POST['action'])){

                                       if(isset($_POST['project_name'])){
                                         $pname = $_POST['project_name'];
                                       }

                                      if(isset($_POST['course_name'])){
                                         $cname = $_POST['course_name'];
                                       }

                                        if($pname && !$cname)
                                        {
                                            $choice="1";
                                        }
                                        else if(!$pname && $cname)
                                        {
                                            $choice="2";
                                        }
                                        else if($pname && $cname)
                                        {
                                            $choice="3";
                                        }
                                            else
                                        {
                                            $choice="";
                                        }
                                    
                                    if($choice=="1")
                                    {

                                            $querystr=" and project_title = '".$_POST['project_name']."'";
                                      
                                    }
                                    elseif($choice=="2")
                                    {
                                        $querystr=" and project_course = '".$_POST['course_name']."'";
                                    }
                                    elseif($choice=="3"){
                                        $querystr=" and project_course = '".$_POST['course_name']."' and project_title = '".$_POST['project_name']."'";
                                    }else{

                                        $querystr="";

                                    } 


                                    $query = $this->db->query("select * from tbl_projects where project_approve = 1".$querystr);

                                }else{
                                    $query = $this->db->query("select * from tbl_projects where project_approve = 1");
                                }

                                    ?>
                                    <?php foreach($query->result_array() as $row){
                                                       ?>
                                    <li class="project_content">
                                        <a href="#" class="vacancy_link">
                                            <span class="project_title"><?php echo $row['project_title'];?></span><br>
                                        </a>
                                         <span class="project_sinfo">Course:<a href="#"><?php echo $row['project_course'];?></a> Format: <a href="#"><?php echo $row['project_format'];?></a> Type:<a href="#">Project Topic</a> Price:<strong class="green_text">4000</strong></span>
                                    </li>
                                    <?php } ?>
                                   

                                </ul>
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
                        </div>

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
        <?php $this->load->view('footer'); ?>
        