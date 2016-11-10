<?php  $this->load->view('header'); ?>
<html>

<body>
        <div class="service-wrap ">
            <div class="row">
                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
                <div class="col s12 m8 grid-example z-depth-1">
                     <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Question FORM</h4>
                                            <div class="row">
                                                  <form id="askque" action="#" method="post" class="row">
                                                     <div class="form-group col s12">
                                        <select class="form-control " name="quetype">
                                            <option value="">Question type</option>
                                            <option value="16-19">Academic question</option>
                                            <option value="20-25">Study question</option>
                                          
                                        </select>
                                        <label>Question type</label>
                                    </div>
                                                 <div class="form-group col s12">
                                                   <select class="form-control " name="subject">
                                            <option value="">Subject/course category</option>
                                            <option value="16-19">Academic question</option>
                                            <option value="20-25">Study question</option>
                                          
                                        </select>
                                        <label>subject/course category</label>
                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="user_name" name="question" type="text" class="validate">
                                                        <label for="question">My Question</label>
                                                    </div>

                                                    <div class="input-field col s4">
                                                        <div class="input-field col s12">
                                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action"> Ask</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
               

                <div class="col s12 m2 grid-example">
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner_Vertical.jpg' ?>">
                        </a>
                    </div>
                    <div class="service_col z-depth-1  darken-1">
                        <a href="#">
                            <img src="<?php echo base_url() . 'images/slider/Banner-Vertical.jpg' ?>">
                        </a>
                    </div>
                </div>
            </div>
			 </div>
			  </div>
			<?php $this->load->view('footer'); ?>
			<script type="text/javascript" src="../js/askQues.js"></script>
       
		 