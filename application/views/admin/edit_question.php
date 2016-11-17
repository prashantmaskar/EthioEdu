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
                                    <h5 class="breadcrumbs-title">Add Question</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">Add Question</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                    <?php if(isset($_GET['id'])){$ques_id = $_GET['id'];}
                        $query = $this->db->query("select * from tbl_questions where question_id = '" .$ques_id. "'");
                        
                                foreach ($query->result_array() as $row){ 
                        ?>
                        <div class="section">
                            <p class="caption">Fill all required fields.</p>
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Question FORM</h4>
                                            <div class="row">
   
                                                <form id="Queans" class="col m12" action="<?php echo site_url('index.php/admin/edit_question')?>" method="post">
                                                     <div class="form-group input-field col s5">
                                                        <select class="form-control browser-default" name="quetype">
                                                    <?php  $options = $row['question_type']; ?>
                                                            <option value="">Question type</option>
                                                             <option value="Academic question" <?php if($options=="Academic question") echo 'selected="selected"'; ?>>Academic question</option>
                                                            <option value="Study question" <?php if($options=="Study question") echo 'selected="selected"'; ?>>Study question</option>
                                                        
                                                        </select>
                                                    </div>
                                                    <div class="form-group input-field col s5">
                                                        <select class="form-control browser-default" name="subcat">
                                                        <?php  $options = $row['question_category']; ?>
                                                            <option value="">Subject/course catagory</option>
                                                             <option value="Academic question" <?php if($options=="Academic question") echo 'selected="selected"'; ?>>Academic question</option>
                                                            <option value="Study question" <?php if($options=="Study question") echo 'selected="selected"'; ?>>Study question</option>
                                                        
                                                        </select>
                                                    <div class="form-group input-field col s12">
                                                        <input id="user_name" name="question" type="text" value="<?php  echo $row['question_desc'];?>" class="validate">
                                                        <label for="question">My Question</label>
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

