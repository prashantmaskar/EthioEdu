<?php $this->load->view('header'); ?>
<div class="sdetails-wrap">
    <div class="row">
        <div class="col s12 m9 margin-t-15">
            <div class="sdetail_container  ">
                <div class="row">
                    <div class="col m12 s12 ">
                  <?php   if ($this->session->flashdata('message')) {
    ?>
    <div class="message flash">
      <div class="message-data">
        <p class="success-msg"><?php echo $this->session->flashdata('message'); ?></p>
        <button class="btn success-close">Close</button>
        </div>   
        </div>
    <?php
    }

?>  <?php                $sessid= $this->session->userdata('suserid');
                    $query = $this->db->query("select * from tbl_message where user_id = '" .$sessid. "'");
                        
                     $query1= $this->db->query("select count(*) as row_count from tbl_message where user_id = '" .$sessid. "'");
                                $sentitem = $query1->result()[0]->row_count;

                                $query2= $this->db->query("select count(*) as row_count from tbl_message where pm_send_to = '" .$sessid. "'");
                                $inboxitem = $query2->result()[0]->row_count;
                        ?>
                        <div class="col s12 m12 card-panel">
                            <h2 class="inbox-title">Private Messages (PM)</h2>
                        </div>
                        <div id="inbox-action" class="col m3 s5">
                            <div class="card-panel">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <a href="<?php echo base_url() . 'index.php/composemail' ?>" class="btn red text-white">Compose</a>
                                    </li>
                                    <li class="collection-item">
                                        <a href="<?php echo base_url().'index.php/pminbox'?>">Inbox</a>
                                        <span class="new badge blue"><?php echo $inboxitem; ?></span>
                                    </li>
                                    <li class="collection-item">
                                        <a href="<?php echo base_url().'pmsent'?>">Sent</a>
                                        <span class="white-text badge green"><?php echo $sentitem; ?></span>
                                    </li>
                                  <!--  <li class="collection-item">
                                        <a href="#">Delete</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div id="compose-mail" class="col m9 s10 card-panel">
                            <form action="<?php echo site_url('index.php/composemail')?>" method="post" enctype="multipart/form-data">
                                <div class="form-group input-field col s6">
                                    <input id="username" type="text" class="validate" name="username">
                                    <label for="username">EthioEdu UserName</label>
                                </div>
                                <div class="form-group input-field col s12">
                                    <input id="subject" type="text" class="validate" name="subject">
                                    <label for="subject">Subject</label>
                                </div>
                                <div class="form-group input-field col s12">
                                    <textarea id="message" class="materialize-textarea" name="Message"></textarea>
                                    <label for="message">Message</label>
                                </div>
                                <div class="col s6 offset-s4 margin-b-10">
                                    <button type="submit" name="action" class="btn blue waves-light">Send Message</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m3 margin-t-15">
            <div class="online_std z-depth-1">
                <ul class="online_std_list">
                    <?php 
//print_r($related_users);
                       foreach ($related_res as $row){ ?>
                            <li>
                            <?php $pimg = $row['user_avatar']; ?>
                                <div class="row">
                                    <div class="col m3 s12 std_thumb">
                                        <img class="circle responsive-img valign profile-image" src="<?php echo base_url();?>uploads/<?php echo $pimg; ?>">
                                    </div>
                                    <div class="col m9 std_details">
                                        <p class="std_name"><a href="#"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></a></p>
                                        <p class="std_university"><?php echo $row['user_gender']; ?></p>
                                        <p class="std_name"><?php echo $row['user_school']; ?></p>
                                    </div>
                                </div> 
                            </li>
                            <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>