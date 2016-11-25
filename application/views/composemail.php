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
                        <div id="inbox-action" class="col m3 s5">
                            <div class="card-panel">
                                <ul class="collection">
                                    <li class="collection-item">
                                        <a href="<?php echo base_url() . 'index.php/composemail' ?>" class="btn red text-white">Compose</a>
                                    </li>
                                    <li class="collection-item">
                                        <a href="#">Inbox</a>
                                        <span class="new badge blue">4</span>
                                    </li>
                                    <li class="collection-item">
                                        <a href="#">Sent</a>
                                        <span class="white-text badge green">4</span>
                                    </li>
                                    <li class="collection-item">
                                        <a href="#">Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="compose-mail" class="col m9 s10 card-panel">
                            <form>
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
                                    <button type="submit" class="btn blue waves-light">Send Message</button>
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