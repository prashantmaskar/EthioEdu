<?php  $this->load->view('header'); ?>
        <div class="sdetails-wrap">
            <div class="row">
                <div class="col s12 m9 margin-t-15">
                    <div class="sdetail_container z-depth-1 ">
                        <div class="row">
                            <div class="col m12 s12 ">
                                <div class="pm-head">
                                    <div class="row">
                                        <div class="col m5 s12">
                                            <h2 class="pm-title">Private Message (PM)</h2>
                                        </div>
                                        <div class="col m7 s12">
                                            <div class="mail-btns">
                                                <a href="#" class="btn waves-effect waves-light red">
                                                    Inbox <span class="badge-custom">(0)</span>
                                                </a>
                                                <a href="#" class="btn waves-effect waves-light red">
                                                    Compose
                                                </a>
                                                <a href="#" class="btn waves-effect waves-light red">
                                                    Address Book
                                                </a>
                                                <a href="#" class="btn waves-effect waves-light red">
                                                    sent
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col m12 s12">
                                            <h5 class="red-text">compose new Message</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="pm-form">
                                    <div class="row">
                                        <form>
                                            <div class="input-field col s6">
                                                <input id="userid" type="text" class="validate">
                                                <label for="userid">Ethioedu UserName</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="subject" type="text" class="validate">
                                                <label for="subject">Subject</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <textarea id="message" class="materialize-textarea"></textarea>
                                                <label for="message">Message</label>
                                            </div>
                                            <div class="col s5 ">
                                                <button class="btn waves-effect waves-light red" type="submit" name="action">Send Private Message (PM)
                                                    <i class="material-icons right">send</i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
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
                                        <img src="<?php echo base_url().'images/user.jpg'?>">   
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
                                      <img src="<?php echo base_url().'images/user.jpg'?>">   
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
                                       <img src="<?php echo base_url().'images/user.jpg'?>">  
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
                                        <img src="<?php echo base_url().'images/user.jpg'?>">  
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