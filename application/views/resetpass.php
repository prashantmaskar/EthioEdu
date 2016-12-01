<!DOCTYPE html>
<html lang="en">       

    <head>
        <meta charset="utf-8">
        <title><?php echo $title ?></title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/font-awesome.min.css' ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/owl.carousel.css' ?>" />
         <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/materialize.min.css' ?> " />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/style.css' ?>" />

    </head>
    <body class="red-gradient-bg">
        <div id="login-page" class="row">
            <div class="col s3 offset-s4 z-depth-2 card-panel">
            <?php echo $this->session->flashdata('msg'); ?>
                <form id="resetpasswordform" class="login-form" action="<?php echo site_url('index.php/login/resetpassaction')?>" method="post">
                    <div class="row">
                        <div class="input-field col s12 center">
                            <h4>EthioEdu <?php echo $title;?></h4>
                        </div>
                    </div>
                    <div class="row no-margin">
                        <div class="input-field col s12">
                            <input name="email" id="email" type="text" value="<?php echo $email; ?>" readonly>
                            <input name="key" id="key" type="hidden" value="<?php echo $key; ?>" >
                            <label for="email" class="center-align">Email Id</label>
                        </div>
                    </div>
                    <div class="row no-margin">
                        <div class="form-group  input-field col s12">,
                            <input name="password" id="password" type="password">
                            <label for="password" class="center-align">New Password</label>
                        </div>
                    </div>
                    <div class="row no-margin">
                        <div class="form-group input-field col s12">,
                            <input name="cpassword" id="cpassword" type="password" >
                            <label for="cpassword" class="center-align">Confirm Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                         <!--   <a href="index.html" class="btn waves-effect waves-light col s12">Login</a> -->
                            <button class="btn waves-effect waves-light col s12" type="submit" name="action"><i class="mdi-action-perm-identity"></i> Reset Password</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6 m6 l6">
                            <p class="margin medium-small"><a href="../sregister">Register Now!</a></p>
                        </div>
                        <div class="input-field col s6 m6 l6">
                            <p class="margin right-align medium-small"><a href="../login">Back to login</a></p>
                        </div>          
                    </div>
                </form>
            </div>
        </div>
      



        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery-2.1.1.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/materialize.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/owl.carousel.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/script.js' ?>"></script>

        <!--<script type="text/javascript" src="<?php //echo base_url() . 'js/jquery-2.1.1.min.js' ?>"></script>
        <script type="text/javascript" src="<?php //echo base_url() . 'js/materialize.min.js' ?>"></script>
        <script type="text/javascript" src="<?php //echo base_url() . 'js/owl.carousel.min.js' ?>"></script>
        <script type="text/javascript" src="<?php //echo base_url() . 'js/jquery.validate.min.js' ?>"></script>
        <script type="text/javascript" src="<?php //echo base_url() . 'js/picker.js' ?>"></script>
        <script type="text/javascript" src="<?php //echo base_url() . 'js/script.js' ?>"></script> -->
        <script type="text/javascript" src="<?php echo base_url() . 'js/bootstrapValidator.js' ?>"></script>



    </body>
</html>


<script>

$(document).ready(function() {

    $('#resetpasswordform').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            
      password: {
                validators: {
                    notEmpty: {
                        message: 'The password cannot be empty'
                    },
                    identical: {
                        field: 'cpassword',
                        //message: 'The password and its confirm are not the same'
                    }
                }
            },
            cpassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password cannot be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            }
           
           
        }
    });
});
</script>
