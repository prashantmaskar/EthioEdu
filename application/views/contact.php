<?php  $this->load->view('header'); ?>
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
              
                  
 <div class="col s12 m8 z-depth-1 white ">
  <h1 class="add_title">Contact Us</h1>
  <div class="instrction_box">
                            Do you know that most related questions about your school have already been answered? Also, you will likely get a response 10 times faster if you ask the entire school community of members. It's easy to ask a question;
                        </div>
  <div class="content_sec contact-us">
     <form id="contactform" action="<?php echo site_url('index.php/contact') ?>" method="post" class="col m12 contact-us_form">
	 <div class="form-group input-field col s12">
       <input id="full_name" name="full_name" type="text" class="validate">
        <label for="full_name">Full Name</label>
      </div>
	  <div class= "form-group input-field col s12">
         <input type="text"  id="phone_number" name="phone_number" class="form-control">
       <label for="phone_number">Phone Number</label>
       </div>

	  <div class="form-group input-field col s12">
         <input id="email" name="email" type="text" class="validate">
          <label for="email_adress">Email Address</label>
       </div>
	           

	  
	   <div class="form-group input-field col s12">
        <textarea id="description" name="description" class="materialize-textarea"></textarea>
         <label for="description">Description</label>
        </div>
		 <div class="captch">
              <img class="responsive-img" src="<?php echo base_url() . 'images/Captcha.png' ?>">
         </div>
       <div class=" form-group input-field col s12">
            <input id="captch" type="text" name="captcha" class="validate">
            <label for="captch">Add Above Code</label>
        </div>
		
		 <div class="col s5 offset-s5">
               <button class="btn waves-effect waves-light" type="submit" name="action">Submit
              <i class="material-icons right"></i>
               </button>
         </div>
	 </form>
  </div>
 </div>

    <div class="col s12 m2 ">
       <div class="service_col z-depth-1 darken-1">
         <a href="#">
            <img src="<?php echo base_url() . '/images/slider/Banner-Vertical.jpg' ?>">
         </a>
        </div>
      <div class="service_col z-depth-1 darken-1">
         <a href="#">
            <img src="<?php echo base_url() . '/images/slider/Banner-Vertical.jpg' ?>">
          </a>
      </div>
    </div>
            </div>
        </div>
       <?php $this->load->view('footer'); ?>
<script type="text/javascript" src="<?php echo base_url() .'js/contact-validation.js' ?>"></script>


