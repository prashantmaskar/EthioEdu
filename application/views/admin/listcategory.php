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
                                    <h5 class="breadcrumbs-title">List Category</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>">Dashboard</a>
                                        </li>
                                       
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                     
                            <div class="divider"></div>
                            <div id="table-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <table class="bordered display" id="table_id">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">Category Id</th>
                                                    <th data-field="name">Category Name</th>
                                                    <th data-field="price">Category Type</th>
                                                    <th data-field="price">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $query = $this->db->query("select * from tbl_category");
                                           foreach ($query->result_array() as $row){ ?>
                                           <?php $cat_id = $row['category_id']; ?>
                                                <tr>
                                                    <td><?php echo $row['category_id']; ?></td>
                                                    <td><?php echo $row['category_name']; ?></td>
                                                    <td><?php echo $row['category_type']; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url() . 'index.php/admin/Edit_category?id='.$cat_id ?>" class="btn-floating blue tooltip" ><i class="small mdi-action-subject"></i><span class="tooltiptext">Edit</span></a>
                                                        <a  href="javascript:void(0);" onclick="deleted(<?php echo $cat_id;?>);" class="btn-floating red delete-btn tooltip" ><i class="small mdi-action-highlight-remove"></i><span class="tooltiptext">Delete</span></a></td>
                                                        
                                                </tr>
                                                <?php } ?>
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
       <script>

            function deleted(id)
            {
                var delete_cat_id = id;
            if (confirm('Sure to Delete ?'))
                    {
                        $.ajax({
                            context: this,
                            type: 'POST',
                            url: "approve_delete",
                            data: {delete_cat_id},
                            success: function(data) {
                                console.log(data);
                                location.reload();


                            }
                        });
                    }
                }
          

       </script>