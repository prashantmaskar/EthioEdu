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
                                    <h5 class="breadcrumbs-title">List Course</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">List Course</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <p class="caption">List Of All Registered Schools.</p>
                            <div class="divider"></div>
                            <div id="table-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <table class="bordered">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Course Name</th>
                                                    <th data-field="name">Course Category</th>
                                                    <th data-field="price">Duration</th>
                                                    <th data-field="price">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                foreach ($course as $row){ 
                                    $course_id = $row['course_id'];
                               $duration = $row['course_duration'];
                                    if($duration>=365){
                                        $year=(int)($duration/365);
                                        $days=$duration%365;
                                        $month=(int)($days/30);
                                        $days=(int)($days%30);
                                          }elseif($duration<365 && $duration>30){
                                           $month=(int)($duration/30);
                                           $days=(int)($duration%30);
                                          }else{
                                            $days = $duration;
                                          }
                                    
                                    ?>
                                                <tr>
                                                    <td><?php echo $row['course_name']; ?></td>
                                                    <td><?php echo $row['course_category']; ?></td>
                                                    <td><?php if(isset($year)){
                                       echo $year." Year "; } if(isset($month) && $month!==0){echo $month." Month ";}
                                    if(isset($days) && $days!==0){echo $days." Day ";}
                                       ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() . 'index.php/admin/edit_course?id='.$course_id?>" class="btn-floating blue" ><i class="small mdi-action-subject"></i></a>
                                                        <a href="app-email.html" class="btn-floating green" ><i class="small mdi-action-done"></i></a>
                                                        <a href="app-email.html" class="btn-floating red" ><i class="small mdi-action-highlight-remove"></i></a></td>
                                                </tr>
                                                 <?php } ?>
                                             <!--   <tr>
                                                    <td>Mater Science</td>
                                                    <td>Science</td>
                                                    <td>5 Month</td>
                                                    <td>
                                                        <a href="app-email.html" class="btn-floating blue" ><i class="small mdi-action-subject"></i></a>
                                                        <a href="app-email.html" class="btn-floating green" ><i class="small mdi-action-done"></i></a>
                                                        <a href="app-email.html" class="btn-floating red" ><i class="small mdi-action-highlight-remove"></i></a></td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php  $this->load->view('admin/footer'); ?>