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
                                    <h5 class="breadcrumbs-title">Edit Question</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">Edit Question</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                    <?php if(isset($_GET['id'])){$ques_id = $_GET['id'];}
                       // $query = $this->db->query("select * from tbl_questions where question_id = '" .$ques_id. "'");
                        
                                foreach ($question_details as $row){ 
                        ?>
                        <div class="section">
                            <p class="caption" style="color:black"; >Fill all required fields.</p>
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Question FORM</h4>
                                            <div class="row">
   
                                                <form id="Queans" class="col m12" action="<?php echo site_url('index.php/admin/edit_question')?>" method="post">
                                                     <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="quetype">
                                                    <?php  $options = $row['question_type']; ?>
                                                            <option value="">Question type</option>
                                                             <option value="Academic question" <?php if($options=="Academic question") echo 'selected="selected"'; ?>>Academic question</option>
                                                            <option value="Study question" <?php if($options=="Study question") echo 'selected="selected"'; ?>>Study question</option>
                                                        
                                                        </select>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="subcat">
                                                        <?php  $options = $row['question_category']; ?>
                                                            <option value="">Subject/course catagory</option>
                                                            <option value="Accounting" <?php if($options=="Accounting") echo 'selected="selected"'; ?>>Accounting</option>
                                                        <option value="Agri_Science" <?php if($options=="Agri_Science") echo 'selected="selected"'; ?>>Agricultural Science</option>
                                                        <option value="Architecture" <?php if($options=="Architecture") echo 'selected="selected"'; ?>>Architecture</option>
                                                        <option value="Art" <?php if($options=="Art") echo 'selected="selected"'; ?>>Art</option>
                                                        <option value="Bio_Science" <?php if($options=="Bio_Science") echo 'selected="selected"'; ?>>Biological Science</option>
                                                        <option value="Biology" <?php if($options=="Biology") echo 'selected="selected"'; ?>>Biology</option>
                                                        <option value="Chemistry" <?php if($options=="Chemistry") echo 'selected="selected"'; ?>>Chemistry</option>
                                                        <option value="Commerce" <?php if($options=="Commerce") echo 'selected="selected"'; ?>>Commerce</option>
                                                        <option value="Computer" <?php if($options=="Computer") echo 'selected="selected"'; ?>>Computer</option>
                                                        <option value="CRK_CRS" <?php if($options=="CRK_CRS") echo 'selected="selected"'; ?>>CRK/CRS</option>
                                                        <option value="Current_Affairs" <?php if($options=="Current_Affairs") echo 'selected="selected"'; ?>>Current Affairs</option>
                                                        <option value="Economics" <?php if($options=="Economics") echo 'selected="selected"'; ?>>Economics</option>
                                                        <option value="Education" <?php if($options=="Education") echo 'selected="selected"'; ?>>Education</option>
                                                        <option value="Engineering" <?php if($options=="Engineering") echo 'selected="selected"'; ?>>Engineering</option>
                                                        <option value="English_Language" <?php if($options=="English_Language") echo 'selected="selected"'; ?>>English Language</option>
                                                        <option value="Geography" <?php if($options=="Geography") echo 'selected="selected"'; ?>>Geography</option>
                                                        <option value="Government" <?php if($options=="Government") echo 'selected="selected"'; ?>>Government</option>
                                                        <option value="IRK_IRS" <?php if($options=="IRK_IRS") echo 'selected="selected"'; ?>>IRK/IRS</option>
                                                        <option value="Language" <?php if($options=="Language") echo 'selected="selected"'; ?>>Language</option>
                                                        <option value="Law" <?php if($options=="Law") echo 'selected="selected"'; ?>>Law</option>
                                                        <option value="Literature_in_English" <?php if($options=="Literature_in_English") echo 'selected="selected"'; ?>>Literature in English</option>
                                                        <option value="Management" <?php if($options=="Management") echo 'selected="selected"'; ?>>Management</option>
                                                        <option value="Mathematics" <?php if($options=="Mathematics") echo 'selected="selected"'; ?>>Mathematics</option>
                                                        <option value="Medical_Science" <?php if($options=="Medical_Science") echo 'selected="selected"'; ?>>Medical Science</option>
                                                         <option value="Physical_Science" <?php if($options=="Physical_Science") echo 'selected="selected"'; ?>>Physical Science</option>
                                                          <option value="Social_Science" <?php if($options=="Social_Science") echo 'selected="selected"'; ?>>Social Science</option>

                                                            
                                                        
                                                        </select>
                                                     </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="user_name" name="question" type="text" value="<?php  echo $row['question_desc'];?>" class="validate">
                                                        <label for="question">My Question</label>
                                                    </div>
                                                    <div class="form-group input-field col s6">
                                                        <input id="date" name="date" type="date" value="<?php echo $row['question_date'];?>" class="datepicker">
                                                        <label for="date">Date of posting</label>
                                                    </div>
                                                     <div class="form-group input-field col s6">
                                                        <input id="time" name="time" type="text" value="<?php echo $row['question_time'];?>">
                                                        <label for="date">Time</label>
                                                    </div>
                                                  <input value="<?php echo $row['question_id']; ?>" name="question_id" type="hidden">
                                                    <input type="hidden" name="approve_status" value="<?php echo $row['question_approve']; ?>">
                                                    <div class="input-field col s4">
                                                        <div class="input-field col s12">
                                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action"><i class="mdi-action-perm-identity"></i>Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                          <?php } ?>
                    </div>
                </section>
            </div>
        </div>
        <?php  $this->load->view('admin/footer'); ?>
<script type="text/javascript" src="../../js/admin/admin-question-ans.js"></script>

