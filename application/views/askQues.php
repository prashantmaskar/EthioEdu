
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
                                                     <div class="form-group col s12">
                                        <select class="form-control " name="quetype">
                                            <option value="">Question type</option>
                                            <option value="Acadamic Question">Academic question</option>
                                            <option value="Study Question">Study question</option>
                                          
                                        </select>
                                        <label>Question type</label>
                                    </div>
                                                 <div class="form-group col s12">
                                                   <select class="form-control " name="subject">
                                            <option value="">Question category</option>
                                            <?php foreach($categories as $row){?>
                                                            <option value="<?php echo $row['category_name']; ?>"><?php echo $row['category_name']; ?></option>
                                                            <?php } ?>
                                        </select>
                                        <label>Question category</label>
                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="user_name" name="question" type="text" class="validate">
                                                        <label for="question">My Question</label>
                                                    </div>
                                                    <input type="hidden" name="approve_status" value="0">

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
			<script type="text/javascript" src="<?php echo base_url() .'js/askQues.js' ?>"></script>
     <script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.js"></script>
		 