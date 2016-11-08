<!DOCTYPE html>
<html lang="en">        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/materialize.min.css' ?> " />

    <head>
        <meta charset="utf-8">
        <title><?php echo $m_title ?></title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/font-awesome.min.css' ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/owl.carousel.css' ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/style.css' ?>" />
         
  







    </head>
    <body>
        <div class="header-top grey darken-3 ">

            <div class="row">
                <div class="col s12 ">
                    <ul class="top-nav">
                        <li><a href="#">INFO@ETHIOEDU.COM</a></li>


                        <li><a class="<?php if($this->uri->segment(1)=="Contacts_Hotline"){echo "active";}?>" href="<?php echo base_url() . 'index.php/Contacts_Hotline' ?>">CONTACT/HOTLINE</a></li>
                        <li><a class="<?php if($this->uri->segment(1)=="About_us"){echo "active";}?>" href="<?php echo base_url() . 'index.php/About_us' ?>">ABOUT US</a></li>
                        <li><a class="<?php if($this->uri->segment(1)=="contact"){echo "active";}?>" href="<?php echo base_url() . 'index.php/contact' ?>">CONTACT US</a></li>
                            <?php if (!$this->session->userdata('logged_in'))
                             { ?>
                        <li><a class="<?php if($this->uri->segment(1)=="sregister"){echo "active";}?>" href="<?php echo base_url() . 'index.php/sregister' ?>">REGISTER </a></li>
                        <li><a class="<?php if($this->uri->segment(1)=="login"){echo "active";}?>" href="<?php echo base_url() . 'index.php/login' ?>">LOGIN</a></li>
                            <?php }
                            else{ ?>
                            <li><a href="#"><?php echo "Welcome ".$this->session->userdata('username'); ?></a></li>
                            
                            <?php } ?>
                    </ul>

                </div>
            </div>
        </div>
        <div class="header-top1 grey darken-4 ">

            <div class="row">
                <div class="col s3 ">
                    <img class="logo_bar" src="<?php echo base_url() . 'images/logo.png' ?>">
                </div>
                <div class="col s9 ">
                    <div class="upper_slider">
                        <div class="item"><img src="<?php echo base_url() . 'images/slider_upper/banner_Horizontal.jpg' ?>"></div>
                        <div class="item"><img src="<?php echo base_url() . 'images/slider_upper/benner_Horizontal1.jpg' ?>"></div>
                        <div class="item"><img src="<?php echo base_url() . 'images/slider_upper/banner_Horizontal2.png' ?>"></div>

                    </div>

                </div>

            </div>

        </div>

        <div class="navbar-fix">
            <nav class="grey darken-4" role="navigation">
                <div class="nav-wrapper container">
                    <ul id="dropdown1" class="dropdown-content dropdown-menu">
                        <li><a href="<?php echo base_url() . 'index.php/news' ?>">Latest News</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/reportnews' ?>">Report News</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url() . 'index.php/gist' ?>">Latest Gist & Gossip</a></li>
                    </ul>
					<ul id="dropdown2" class="dropdown-content dropdown-menu">
                        <li><a href="<?php echo base_url() . 'index.php/Projectlist' ?>">Project Topics</a></li>
						<li><a href="<?php echo base_url() . 'index.php/event' ?>">Events</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/tips' ?>">Tips</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/QuesAns' ?>">Questions & Answers</a></li>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                        <li><a  class="<?php if($this->uri->segment(1)=="home"){echo "active";}?>" href="<?php echo base_url() . 'index.php/home' ?>">HOME</a></li>

                        <li><a class="dropdown-button home-btn <?php if($this->uri->segment(1)=="news" || $this->uri->segment(1)=="reportnews" || $this->uri->segment(1)=="gist"){echo "active";}?>" href="#!" data-hover="true" data-activates="dropdown1">LATEST NEWS</a></li>
                        <li><a class="<?php if($this->uri->segment(1)=="schools"){echo "active";}?>" href="<?php echo base_url() . 'index.php/schools' ?>">SCHOOLS</a></li>
                        <li><a class="<?php if($this->uri->segment(1)=="course"){echo "active";}?>" href="<?php echo base_url() . 'index.php/course' ?>">COURSES</a></li>
                        <li><a class="<?php if($this->uri->segment(1)=="vactender"){echo "active";}?>" href="<?php echo base_url() . 'index.php/vactender' ?>">VACANCY/TENDER</a></li>
                        <li><a class="<?php if($this->uri->segment(1)=="connectme"){echo "active";}?>" href="<?php echo base_url() . 'index.php/connectme' ?>">CONNECT TO ME</a></li>
                        <li><a class="dropdown-button home-btn <?php if($this->uri->segment(1)=="Projectlist" || $this->uri->segment(1)=="event" || $this->uri->segment(1)=="tips" || $this->uri->segment(1)=="QuesAns"){echo "active";} ?>" href="" data-hover="true" data-activates="dropdown2">SERVICE</a></li>

                    </ul>

                    <ul id="nav-mobile" class="side-nav mobile-nav">
                        <li><a href="#">HOME</a></li>

                        <li><a class="dropdown-button home-btn" href="#!" >LATEST NEWS</a></li>
                        <li><a href="#">SCHOOLS</a></li>
                        <li><a href="#">COURSES</a></li>
                        <li><a href="#">VACANCY/TENDER</a></li>
                        <li><a href="#">CONNECT TO ME</a></li>
                        <li><a class="dropdown-button home-btn" href="#!">SERVICE</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>


