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
                <div class="col s12 m8 grid-example z-depth-1">
                     <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Question FORM</h4>
                                            <div class="row">
                                                  <form id="askque" action="<?php echo site_url('index.php/askQues')?>" method="post" class="row">
                                                  <!-- <input id="post_id" name="post_id" type="hidden" class="validate " value="<?php // echo $row['post_id'];?>"> -->
                                                  <div class="form-group input-field col s12">
                                    <input id="Caption" name="caption" type="text" class="validate " >
                                     <label for="Caption">Title</label>
                                </div>
                                                     <div class="form-group input-field col s12">
                                 <textarea id="Description" name="Description" class="materialize-textarea" ></textarea>
                                 <label for="Description">Answer</label>
                               </div>
                               <input value="answer" name="post_type" type="hidden">
                                                      <
                                                    <!-- <input type="hidden" name="approve_status" value="0"> -->

                                                    <div class="input-field col s4">
                                                        <div class="input-field col s12">
                                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action"> Post Your Answer</button>
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
			<script type="text/javascript" src="<?php echo base_url() .'js/askQues.js' ?>"></script>
       <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>
		 