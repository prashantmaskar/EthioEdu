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
                                                <form id="askque" class="col m12" action="#" method="post">
                                                     <div class="form-group input-field col s5">
                                                        <select class="form-control browser-default" name="quetype">

                                                            <option value="">Question type</option>
                                                             <option value="Academic question">Academic question</option>
                                                            <option value="Study question">Study question</option>
                                                        
                                                        </select>
                                                    </div>
                                                    <div class="form-group input-field col s5">
                                                        <select class="form-control browser-default" name="subcat">

                                                            <option value="">Subject/course catagory</option>
                                                             <option value="Academic question">Academic question</option>
                                                            <option value="Study question">Study question</option>
                                                        
                                                        </select>
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
			<?php $this->load->view('footer'); ?>
            <script type="text/javascript" src="../js/materialize.js"></script>
			 <script type="text/javascript" src="../js/bootstrap.min.js"></script> 
			<link rel="stylesheet" type="text/css" href="../css/bootstrapValidator.css">
			<script type="text/javascript" src="../js/bootstrapValidator.js"></script>
			<script type="text/javascript" src="../js/askQues.js"></script>
        
			</body>
			</html>
       
		 