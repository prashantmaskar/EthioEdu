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
     <form id="contactform" action="#" method="post" class="col m12 contact-us_form">
	 <div class="form-group input-field col s12">
       <input id="full_name" name="full_name" type="text" class="validate">
        <label for="full_name">Full Name</label>
      </div>
	  <div class="form-group input-field col s12">
         <input id="email" name="email" type="text" class="validate">
          <label for="email_adress">Email Address</label>
       </div>
	            <div class="form-group input-field col s12">
               <select class="form-control" name="community">
                 <option value="" >School Community:</option>
                 <option value="Abdul-gusau Polytechnic, Nigeria">Abdul-gusau Polytechnic, Nigeria</option>
                 <option value="Abia State College Of Education, Nigeria">Abia State College Of Education, Nigeria</option>
                 <option value="Abia State College of Health Sciences and Management Technology, Nigeria">Abia State College of Health Sciences and Management Technology, Nigeria</option>
                 <option value="Abia State polytechnic , Nigeria">Abia State polytechnic , Nigeria</option>
                 <option value="Abia State University, Nigeria">Abia State University, Nigeria</option>
                 <option value="Abraham Adesanya Polytechnic, Nigeria">Abraham Adesanya Polytechnic, Nigeria</option>
                 <option value="Abubakar Tafawa Balewa University, Nigeria">Abubakar Tafawa Balewa University, Nigeria</option>
                 <option value="Abubakar Tatari Ali Polytechnic, Nigeria">Abubakar Tatari Ali Polytechnic, Nigeria</option>
                 <option value="Achievers University, Nigeria">Achievers University, Nigeria</option>
                 <option value="Adamawa State polytechnic, Nigeria">Adamawa State polytechnic, Nigeria</option>
                 <option value="Adamawa State University, Nigeria">Adamawa State University, Nigeria</option>
                 <option value="Adamu Augie College Of Education, Nigeria">Adamu Augie College Of Education, Nigeria</option>
                 <option value="Adekunle Ajasin University, Nigeria">Adekunle Ajasin University, Nigeria</option>
                 <option value="Adeleke University, Nigeria">Adeleke University, Nigeria</option>
                 <option value="Adeniran Ogunsanya College of Education, Nigeria">Adeniran Ogunsanya College of Education, Nigeria</option>
               
              </select>
                <label>School Community</label>
       </div>

	   <div class="form-group input-field col s12">
               <select class="form-control" name="msg_cate"  id="msg_cate">
<option value="">School Community:</option>
<option value="Advert Placement">Advert Placement</option>
<option value="Complain">Complain</option>
<option value="Suggestion">Suggestion</option>
<option value="Observation">Observation</option>
<option value="Commendation">Commendation</option>
</select>
	  </div>
	   <div class="form-group input-field col s12">
       <input id="subject" name="subject" type="text" class="validate">
        <label for="subject">Subject</label>
      </div>
	   <div class="form-group input-field col s12">
        <textarea id="message" name="message" class="materialize-textarea"></textarea>
         <label for="message">Message</label>
        </div>
		
		 <div class="col s5 offset-s5">
               <button class="btn waves-effect waves-light" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
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







     <!-- <link rel="stylesheet" type="text/css" href="../css/materialize.min.css">  -->
<!-- <script type="text/javascript" src="../js/bootstrap.min.js"></script> -->

<link rel="stylesheet" type="text/css" href="../css/bootstrapValidator.css">
<script type="text/javascript" src="../js/bootstrapValidator.js"></script>


<script>

       $(document).ready(function() {

    $('#contactform').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            full_name: {
                validators: {
                    notEmpty: {
                        message: ' please enter the full name!!!..'
                    }
                }
            },
              email:{
                validators:{
                    notEmpty:{
                         message:'Email address is required!!!'
                    },
                    emailAddress:{
                        message:'The input is not a valid email adddress!!'
                    }
                }
            },
 

           community : {
                validators: {
                    notEmpty: {
                        message: ' please select community!!!..'
                    }
                }
            },

            msg_cate:{
            	validators:{
            		notEmpty:{
            			message:'please select community'
            		}
            	}
            },

                  subject: {
                validators: {
                    notEmpty: {
                        message: ' please enter subject!!!..'
                    }
                }
            },
             message:{
                validators:{
                    notEmpty:{
                        message:  ' please write some messsage !!!'
                    },
                    stringLength:{
                        message:'post descreeption must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
 
              
                  fileformat: {
                validators: {
                    notEmpty: {
                        message: ' please select file format!!!..'
                    }
                }
            },
 
               
                  upload1: {
                validators: {
                    notEmpty: {
                        message: ' you must upload file!!!..'
                    }
                }
            },
 




        }
    });
});

</script>