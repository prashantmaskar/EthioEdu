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
                                        <li><a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>">Dashboard</a>
                                        </li>
                                        
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="container">
                        <div class="section">
                           
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Question FORM</h4>
                                            <div class="row">
   
                                                <form id="Queans" class="col m12" action="<?php echo site_url('index.php/admin/Quesanswer')?>" method="post">
                                                     <div class="form-group input-field col s5">
                                                        <select class="form-control browser-default" name="quetype">

                                                            <option value="">Question type</option>
                                                             <option value="Academic question">Academic question</option>
                                                            <option value="Study question">Study question</option>
                                                        
                                                        </select>
                                                    </div>
                                                    <div>
                                                    <div class="form-group input-field col s5">
                                                        <select class="form-control browser-default" name="subcat">

                                                            <option value="">Subject/course catagory</option>
                                                              <option value="">Question category</option>
                                            <?php foreach($categories as $row){?>
                                                            <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
                                                            <?php } ?>
                                                        
                                                        </select>
                                                    </div>

                                                    <div class="form-group input-field col s12">
                                                        <input id="user_name" name="question" type="text" class="validate">
                                                        <label for="question">My Question</label>
                                                    </div>
                                                     <input type="hidden" name="approve_status" value="0">

                                                    <div class="input-field col s4">
                                                        <div class="input-field col s12">
                                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action"><i class="mdi-action-perm-identity"></i> Add</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="qustion-table">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Question Info Table</h4>
                                            <div id="table-wrap">
                                                <div class="row">
                                                    <div class="col s12 m12 l12">
                                                        <table class="bordered display" id="table_id">
                                                            <thead>
                                                                <tr>
                                                                    <th data-field="id">Question Type</th>
                                                                    <th data-field="name">Subject/Course Category</th>
                                                                    <th data-field="price">Question</th>
                                                                    <th data-field="price">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                        foreach ($question as $row){ 
                                                                $question_id = $row['question_id'];
                                                            ?>
                                                                <tr>
                                                                <td><?php echo $row['question_type']; ?></td>
                                                            <td><?php echo $row['question_category']; ?></td>
                                                            
                                                            <td><?php echo $row['question_desc']; ?></td>
                                                                    <td>
                                                            <a href="<?php echo base_url() . 'index.php/admin/edit_question?id='.$question_id?>" class="btn-floating blue tooltip" ><i class="small mdi-action-subject"></i><span class="tooltiptext">Edit</span></a>
                                                                                 <?php if($row['question_approve'] == '1'){?>
                                                        <a href="javascript:void(0);"  onclick="custatus(<?php echo $question_id;?>);" class="btn-floating green tooltip" ><i class="small mdi-action-visibility"></i><span class="tooltiptext">Unapprove</span></a>
                                                        <?php }else{?>
                                                        <a href="javascript:void(0);" onclick="cstatus(<?php echo $question_id;?>);" class="btn-floating red tooltip" ><i class="small mdi-action-visibility-off"></i><span class="tooltiptext">Approve</span></a>
                                                        <?php }?>
                                                        <a  href="javascript:void(0);" onclick="deleted(<?php echo $question_id;?>);" class="btn-floating red delete-btn tooltip" ><i class="small mdi-action-highlight-remove"></i><span class="tooltiptext">Delete</span></a></td>
                                                                </tr>
                                                                    <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <?php  $this->load->view('admin/footer'); ?>
<script type="text/javascript" src="../../js/admin/admin-question-ans.js"></script>

 
       <script>

            function deleted(id)
            {
                var Qdelete_id = id;
            if (confirm('Sure to Delete ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {Qdelete_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }



                function cstatus(id){
                var Qstatus_id = id;
            if (confirm('Sure to Approve ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {Qstatus_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }

                function custatus(id){
                var Qustatus_id = id;
            if (confirm('Sure to Unapprove ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {Qustatus_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }
          

       </script>