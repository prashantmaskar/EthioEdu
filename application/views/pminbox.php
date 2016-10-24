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
                                            <h5 class="red-text">Inbox</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="inbox-list">
                                    <ul class="message-list">
                                        <li>
                                            <div class="row">
                                                <div class="col m1">
                                                    <img src="<?php echo base_url() . 'images/user.jpg' ?>"  alt="userpic" />
                                                </div>
                                                <div class="col m9">
                                                    <p><a href="#">Welcome to EthioEdu</a></p>
                                                    <a class="remsg" href="#">Read full Message</a>
                                                    <p class="datime">19-Sep-2016 10:24:52</p>
                                                    <span><a href="#">EthioEdu</a></span>
                                                </div>
                                                <div class="col m2">
                                                    <input type="checkbox"  class="privates" />
                                                    <label for="privates">select</label>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="actionbtns">
                                    <div class="row">
                                        <div class="col m6">
                                            <ul class="pagination">
                                                <li><a href="#!"><i class="fa fa-chevron-left"></i></a></li>
                                                <li class="active"><a href="#!">1</a></li>
                                                <li class="waves-effect"><a href="#!"><i class="fa fa-chevron-right"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="col m6">
                                            <a href="#" class="btn waves-effect waves-light red">
                                                Read
                                            </a>
                                            <a href="#" class="btn waves-effect waves-light red">
                                                Unread
                                            </a>
                                            <a href="#" class="btn waves-effect waves-light red">
                                                Delete
                                            </a>
                                        </div>
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
                                        <img src="http://localhost/ETHIO/images/user.jpg">  
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
                                        <img src="http://localhost/ETHIO/images/user.jpg">  
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
                                        <img src="http://localhost/ETHIO/images/user.jpg">  
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
                                        <img src="http://localhost/ETHIO/images/user.jpg">  
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