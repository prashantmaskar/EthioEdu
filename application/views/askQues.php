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
                                            <option value="">Subject/Course category</option>
                                            <option value="Accounting">Accounting</option>
                                            <option value="Agri_Science">Agricultural Science</option>
                                            <option value="Architecture">Architecture</option>
                                            <option value="Art">Art </option>
                                             <option value="Bio_Science">Biological Science</option>
                                            <option value="Biology">Biology</option>
                                            <option value="Chemistry">Chemistry</option>
                                            <option value="Commerce">Commerce</option>
                                            <option value="Computer">Computer</option>
                                            <option value="CRK_CRS">CRK/CRS</option>
                                            <option value="Current_Affairs">Current Affairs</option>
                                            <option value="Economics">Economics</option>
                                             <option value="Education">Education</option>
                                            <option value="Engineering">Engineering</option>
                                            <option value="English_Language">English Language</option>
                                            <option value="Geography">Geography</option>
                                          <option value="Government">Government</option>
                                            <option value="IRK_IRS">IRK/IRS</option>
                                            <option value="Language">Language</option>
                                            <option value="Law">Law</option>
                                             <option value="Literature_in_English">Literature in English</option>
                                            <option value="Management">Management</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="Medical_Science">Medical Science</option>
                                            <option value="Physical_Science ">Physical Science </option>
                                            <option value="Social_Science">Social Science</option>
                                          
                                          
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
       
		 