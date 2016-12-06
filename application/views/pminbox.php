<?php $this->load->view('header'); ?>
<div class="sdetails-wrap">
    <div class="row">
        <div class="col s12 m9 margin-t-15">
            <div class="sdetail_container  ">
                <div class="row">
                    <div class="col m12 s12 ">
                        <div class="col s12 m12 card-panel">
                            <h2 class="inbox-title">Private Messages (PM)</h2>
                        </div>

<?php                $sessid= $this->session->userdata('suserid');
                    $query = $this->db->query("select * from tbl_message where user_id = '" .$sessid. "'");
                        
                     $query1= $this->db->query("select count(*) as row_count from tbl_message where user_id = '" .$sessid. "'");
                                $sentitem = $query1->result()[0]->row_count;

                                $query2= $this->db->query("select count(*) as row_count from tbl_message where pm_send_to = '" .$sessid. "'");
                                $inboxitem = $query2->result()[0]->row_count;
                        ?>
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
                                        <a href="#">Sent</a>
                                        <span class="white-text badge green"><?php echo $sentitem; ?></span>
                                    </li>
                                    <li class="collection-item">
                                        <a href="#">Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="inbox-list" class="col m9 s10 card-panel">
                            <ul class="collection">
                            <?php foreach ($query->result_array() as $row){  ?>
                                <li class="collection-item avatar ">
                                    <i class="material-icons circle">person_pin</i>
                                    <span class="email-title"><a href=""><?php echo $row['pm_subject'];?></a></span>
                                    <p class="truncate grey-text ultra-small"><?php echo $row['pm_message'];?></p>
                                    <p><span class=" blue-text ultra-small"><?php echo $row['pm_date'];?></span><span class=" blue-text ultra-small"><?php echo" at ". $row['pm_time'];?></span></p>
                                    <a href="#!" class="secondary-content">
                                        
                                        <p>
                                           <input type="checkbox" id="test5" />
                                            <label for="test5" class="red-text">Delete</label>
                                        </p>
                                    </a>
                                </li>
                                <?php } ?>
                                    
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m3 margin-t-15">
            <div class="online_std z-depth-1">
                <ul class="online_std_list">
                    <li>
                        <div class="row">
                            <div class="col m3 s12 std_thumb">
                                <img src="<?php echo base_url() . 'images/user.jpg' ?>">  
                            </div>
                            <div class="col m9 std_details">
                                <p class="std_name"><a href="#">Sudhir Lahave</a></p>
                                <p class="std_university">(Male)</p>
                                <p class="std_name">Unilorin Student</p>
                            </div>
                        </div> 
                    </li>
                    <li>
                        <div class="row">
                            <div class="col m3 s12 std_thumb">
                                <img src="<?php echo base_url() . 'images/user.jpg' ?>">  
                            </div>
                            <div class="col m9 std_details">
                                <p class="std_name"><a href="#">Sudhir Lahave</a></p>
                                <p class="std_university">(Male)</p>
                                <p class="std_name">Unilorin Student</p>
                            </div>
                        </div> 
                    </li>
                    <li>
                        <div class="row">
                            <div class="col m3 s12 std_thumb">
                                <img src="<?php echo base_url() . 'images/user.jpg' ?>">   
                            </div>
                            <div class="col m9 std_details">
                                <p class="std_name"><a href="#">Sudhir Lahave</a></p>
                                <p class="std_university">(Male)</p>
                                <p class="std_name">Unilorin Student</p>
                            </div>
                        </div> 
                    </li>
                    <li>
                        <div class="row">
                            <div class="col m3 s12 std_thumb">
                                <img src="<?php echo base_url() . 'images/user.jpg' ?>">   
                            </div>
                            <div class="col m9 std_details">
                                <p class="std_name"><a href="#">Sudhir Lahave</a></p>
                                <p class="std_university">(Male)</p>
                                <p class="std_name">Unilorin Student</p>
                            </div>
                        </div> 
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>