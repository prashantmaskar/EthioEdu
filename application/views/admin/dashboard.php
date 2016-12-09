<?php  $this->load->view('admin/header'); ?>
        <!--start main-->
        <div id="main">
            <div class="wrapper">
            <?php  $this->load->view('admin/sidebar'); ?>
                <section id="content">
                    <div class="container">
                        <div id="card-stats">
                            <div class="row">
                                <?php
                                $sessid= $this->session->userdata('suserid');
                                $query1 = $this->db->query("select count(*) as row_count from tbl_posts where post_type='event'");
                                $query2 = $this->db->query("select count(*) as row_count from tbl_posts where post_type='event' and post_approve = 1");

                                $query3 = $this->db->query("select count(*) as row_count from tbl_users");

                                $query4 = $this->db->query("select count(*) as row_count from tbl_school_meta");
                                $query5 = $this->db->query("select count(*) as row_count from tbl_school_meta where school_approve = 1");

                                $query6 = $this->db->query("select count(*) as row_count from tbl_advertise");
                                $query7 = $this->db->query("select count(*) as row_count from tbl_advertise where isactive = 1");


                                ?>
                                <div class="col s12 m6 l3">
                                    <div class="card">
                                        <div class="card-content  green white-text">
                                            <p class="card-stats-title"><i class="mdi-social-group-add"></i> Total Users</p>
                                            <h4 class="card-stats-number"><?php echo $query3->result()[0]->row_count; ?></h4>
                                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                            </p>
                                        </div>
                                        <div class="card-action  green darken-2">
                                            <div id="clients-bar" class="center-align"><canvas width="227" height="25" style="display: inline-block; width: 227px; height: 25px; vertical-align: top;"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l3">
                                    <div class="card">
                                        <div class="card-content pink lighten-1 white-text">
                                            <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Total Events</p>
                                            <h4 class="card-stats-number"><?php echo $query1->result()[0]->row_count; ?></h4>
                                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> <?php echo $query2->result()[0]->row_count; ?> <span class="deep-purple-text text-lighten-5">Approved Events</span>
                                            </p>
                                        </div>
                                        <div class="card-action  pink darken-2">
                                            <div id="invoice-line" class="center-align"><canvas width="241" height="25" style="display: inline-block; width: 241px; height: 25px; vertical-align: top;"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l3">
                                    <div class="card">
                                        <div class="card-content blue-grey white-text">
                                            <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Total Advertise</p>
                                            <h4 class="card-stats-number"><?php echo $query6->result()[0]->row_count; ?></h4>
                                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> <?php echo $query7->result()[0]->row_count; ?> <span class="blue-grey-text text-lighten-5">Active Advertise</span>
                                            </p>
                                        </div>
                                        <div class="card-action blue-grey darken-2">
                                            <div id="profit-tristate" class="center-align"><canvas width="227" height="25" style="display: inline-block; width: 227px; height: 25px; vertical-align: top;"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l3">
                                    <div class="card">
                                        <div class="card-content purple white-text">
                                            <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Schools</p>
                                            <h4 class="card-stats-number"><?php echo $query4->result()[0]->row_count; ?></h4>
                                            <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> <?php echo $query5->result()[0]->row_count; ?> <span class="purple-text text-lighten-5">Approved Schools</span>
                                            </p>
                                        </div>
                                        <div class="card-action purple darken-2">
                                            <div id="sales-compositebar" class="center-align"><canvas width="214" height="25" style="display: inline-block; width: 214px; height: 25px; vertical-align: top;"></canvas></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Action Button -->

                    </div>
                </section>
            </div>
        </div>
       <?php  $this->load->view('admin/footer'); ?>