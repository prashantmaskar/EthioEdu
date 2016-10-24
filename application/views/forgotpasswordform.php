
<!DOCTYPE html>
<html lang="en">      
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/materialize.min.css' ?> " />

    <head>
        <meta charset="utf-8">
        <title><?php echo $m_title ?></title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/font-awesome.min.css' ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/owl.carousel.css' ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/style.css' ?>" />

    </head>

<body>
	 <body class="red-gradient-bg">
        <div id="reset" class="row">
            <div class="col s3 offset-s4 z-depth-2 card-panel">
                <form class="forgotpasswordform">
                    <div class="row">
                        <div class="input-field col s12 center">
                            <h4>click on send mail button for reset password</h4>
                        </div>
                    </div>
                    <div class="row no-margin">
                        <div class="input-field col s12">
                            <input id="email" type="text">
                            <label for="email" class="center-align">email</label>
                        </div>
                    </div>
                    
                   
                    <div class="row">
                        <div class="input-field col s12">
                            <a href="index.html" class="btn waves-effect waves-light col s12">sendmail</a>
                        </div>
                    </div>
                    <div class="row">

                        <div class="input-field col s6 m6 l6">
                           <div class="center-block">
                            <p class="margin medium-small"><a href="<?php echo base_url() . 'index.php/csregister' ?>">	Register Now!</a></p>
                        </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>

        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery-2.1.1.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/materialize.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/owl.carousel.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/script.js' ?>"></script>

    </body>
</html>



