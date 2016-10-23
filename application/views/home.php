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


                        <li><a href="#">CONTACT/HOTLINE</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/About_us' ?>">ABOUT US</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/contact' ?>">CONTACT US</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/csregister' ?>">REGISTER </a></li>
                        <li><a href="<?php echo base_url() . 'index.php/login' ?>">LOGIN</a></li>

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
                    <ul class="right hide-on-med-and-down">
                        <li><a class="active" href="<?php echo base_url() . 'index.php/home' ?>">HOME</a></li>

                        <li><a class="dropdown-button home-btn" href="#!" data-hover="true" data-activates="dropdown1">LATEST NEWS </a></li>
                        <li><a href="<?php echo base_url() . 'index.php/schools' ?>">SCHOOLS</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/course' ?>">COURSES</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/vactender' ?>">VACANCY/TENDER</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/connectme' ?>">CONNECT TO ME</a></li>
                        <li><a href="#">SERVICE</a></li>

                    </ul>

                    <ul id="nav-mobile" class="side-nav mobile-nav">
                        <li><a class="active" href="#">HOME</a></li>

                        <li><a class="dropdown-button home-btn" href="#!" >LATEST NEWS</a></li>
                        <li><a href="#">SCHOOLS</a></li>
                        <li><a href="#">COURSES</a></li>
                        <li><a href="#">VACANCY/TENDER</a></li>
                        <li><a href="#">CONNECT TO ME</a></li>
                        <li><a href="#">SERVICE</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>

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

                    <div class="slider">
                        <ul class="slides">
                            <li>
                                <img src="<?php echo base_url() . 'images/slider/bg-6.jpg' ?>"> <!-- random image -->
                                <div class="caption center-align">
                                    <h3>WEL-Come To ETHIEDUO</h3>
                                    <h5 class="light grey-text text-lighten-3">We provide the best Eduction Option.</h5>
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url() . 'images/slider/eduban2.jpg' ?>"> <!-- random image -->
                                <div class="caption left-align">
                                    <h3>Largest INFO OF COLLAGE</h3>
                                    <h5 class="light grey-text text-lighten-3">Get info of all collage in Ethiopia.</h5>
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo base_url() . 'images/slider/eduban3.jpg' ?>"> <!-- random image -->
                                <div class="caption right-align">
                                    <h3>Get Best Deal All Time</h3>
                                    <h5 class="light grey-text text-lighten-3">Each Time We Are Best.</h5>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="content_sec">
                        <div class="row">
                            <div class="col sm12 m4 z-pad z-depth-1">
                                <div class="news_container ">
                                    <h5>
                                        Latest News
                                    </h5>
                                    <ul>
                                        <li><a href="http://localhost/ETHIO/index.php/news_detail">AKSU Notice On Extension of Students' Registration</a></li>
                                        <li><a href="http://localhost/ETHIO/index.php/news_detail">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                        <li><a href="http://localhost/ETHIO/index.php/news_detail">AKSU Notice On Extension of Students' Registration</a></li>
                                        <li><a href="http://localhost/ETHIO/index.php/news_detail">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                        <li><a href="http://localhost/ETHIO/index.php/news_detail">AKSU Notice On Extension of Students' Registration</a></li>
                                        <li><a href="http://localhost/ETHIO/index.php/news_detail">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                        <li><a href="http://localhost/ETHIO/index.php/news_detail">AKSU Notice On Extension of Students' Registration</a></li>
                                        <li><a href="http://localhost/ETHIO/index.php/news_detail">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                        <li><a href="http://localhost/ETHIO/index.php/news_detail">AKSU Notice On Extension of Students' Registration</a></li>
                                        <li><a href="http://localhost/ETHIO/index.php/news_detail">AKSU Notice On Extension of Students' Registration</a></li>
                                        <li class=" center-align"><a class=" center-align waves-effect waves-light btn red darken-2">READ MORE</a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col sm12 m4 z-pad z-depth-1"><h5>
                                    Search For School
                                </h5>
                                <ul>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li class=" center-align"><a class=" center-align waves-effect waves-light btn red darken-2">READ MORE</a>
                                    </li>


                                </ul></div>
                            <div class="col sm12 m4  z-depth-1"><h5>
                                    Universities
                                </h5>
                                <ul>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li class=" center-align"><a class=" center-align waves-effect waves-light btn red darken-2">READ MORE</a>
                                    </li>

                                </ul></div>

                        </div>

                    </div>
                    <div class="content_sec">
                        <div class="row">
                            <div class="col sm12 m4 z-pad z-depth-1">
                                <div class="event_container ">
                                    <h5>
                                        Coming Events
                                    </h5>
                                    <ul>
                                        <li><div class="row"> <div class="col l4 blue date"><div class="calender_bar"><span class="day">10</span><br><span class="monthyear">may 2016</span></div></div> <div class="col l8 "><a href="#">AKSU Notice On Extension </a><div class="happen_loc"><span>Happning at:<a href="#">ETHOPIA</a></span></div><div class="event_by"><span>Event By:Ethioedu.com</span></div> </div></li>
                                        <li><div class="row"> <div class="col l4 blue date"><div class="calender_bar"><span class="day">10</span><br><span class="monthyear">may 2016</span></div></div> <div class="col l8 "><a href="#">AKSU Notice On Extension </a><div class="happen_loc"><span>Happning at:<a href="#">ETHOPIA</a></span></div><div class="event_by"><span>Event By:Ethioedu.com</span></div> </div></li>
                                        <li><div class="row"> <div class="col l4 blue date"><div class="calender_bar"><span class="day">10</span><br><span class="monthyear">may 2016</span></div></div> <div class="col l8 "><a href="#">AKSU Notice On Extension </a><div class="happen_loc"><span>Happning at:<a href="#">ETHOPIA</a></span></div><div class="event_by"><span>Event By:Ethioedu.com</span></div> </div></li>
                                        <li><div class="row"> <div class="col l4 blue date"><div class="calender_bar"><span class="day">10</span><br><span class="monthyear">may 2016</span></div></div> <div class="col l8 "><a href="#">AKSU Notice On Extension </a><div class="happen_loc"><span>Happning at:<a href="#">ETHOPIA</a></span></div><div class="event_by"><span>Event By:Ethioedu.com</span></div> </div></li>
                                        <li><div class="row"> <div class="col l4 blue date"><div class="calender_bar"><span class="day">10</span><br><span class="monthyear">may 2016</span></div></div> <div class="col l8 "><a href="#">AKSU Notice On Extension </a><div class="happen_loc"><span>Happning at:<a href="#">ETHOPIA</a></span></div><div class="event_by"><span>Event By:Ethioedu.com</span></div> </div></li>


                                        <li class=" center-align"><a class=" center-align waves-effect waves-light btn red darken-2">READ MORE</a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <div class="col sm12 m4 z-pad z-depth-1"><h5>
                                    List Of Vacancy/Tender
                                </h5>
                                <ul>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li class=" center-align"><a class=" center-align waves-effect waves-light btn red darken-2">READ MORE</a>
                                    </li>


                                </ul></div>
                            <div class="col sm12 m4  z-depth-1"><h5>
                                    List Of Services
                                </h5>
                                <ul>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">Myschool Service For 2016 JAMB Change Of Course/Institution Closes On Thursday!</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li><a href="#">AKSU Notice On Extension of Students' Registration</a></li>
                                    <li class=" center-align"><a class=" center-align waves-effect waves-light btn red darken-2">READ MORE</a>
                                    </li>

                                </ul></div>

                        </div>

                    </div>
                    <div class="featured_schools col s12 m12">

                        <h5>Featured Schools</h5>
                        <div class="featured_slider">
                            <div class="item"><img src="http://localhost/ETHIO/images/slider_upper/featured_sc1.jpg"></div>
                            <div class="item"><img src="http://localhost/ETHIO/images/slider_upper/featured_sc2.jpg"></div>
                            <div class="item"><img src="http://localhost/ETHIO/images/slider_upper/featured_sc3.png"></div>
                            <div class="item"><img src="http://localhost/ETHIO/images/slider_upper/featured_sc2.jpg"></div>

                        </div>
                    </div>
                </div>
                <div class="col s12 m2 ">
                    <div class="service_col z-depth-1 darken-1">
                        <a href="#">
                            <img src="http://localhost/ETHIO/images/slider/Banner-Vertical.jpg">
                        </a>
                    </div>
                    <div class="service_col z-depth-1 darken-1">
                        <a href="#">
                            <img src="http://localhost/ETHIO/images/slider/Banner_Vertical.jpg">
                        </a>


                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer grey darken-3">
            <div class="row">
                <div class="col l2 s12">
                    &nbsp;


                </div>
                <div class="col l2 s12">
                    <h5 class="red-text">Navigation</h5>
                    <ul>
                        <li><a class="white-text" href="#">HOME</a></li>
                        <li><a class="white-text" href="#">LATEST NEWS</a></li>
                        <li><a class="white-text" href="#">SCHOOLS</a></li>
                        <li><a class="white-text" href="#">COURSES</a></li>
                        <li><a class="white-text"  href="#">VACANCY/TENDER</a></li>
                        <li><a class="white-text" href="#">CONNECT TO ME</a></li>
                        <li><a class="white-text" href="#">SERVICE</a></li>
                        <li><a class="white-text" href="#">HOW TO PAY USING <span class="red-text"> M-BIRR</span> / <span class="red-text"> Hello-Cash</span></a></li>
                    </ul>

                </div>
                <div class="col l3 s12">
                    <h5 class="red-text">Get In Touch</h5>
                    <ul class="white-text">
                        <li>2144 - 007 - 1566</li>
                        <li>No 48, Season street,</li>
                        <li>Livingstone,</li>
                        <li>ETHIOPIA, Africa</li>
                        <li>Email : <a href="mailto:info@example.com">info@ethioedu.com</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="red-text">About Us</h5>
                    <p class="grey-text text-lighten-4">
                        The ETHIOEDU.COM started with the aim of easing the process of searching for educational information in ETHIOPIA.
                    </p>


                    <h5 class="red-text">Follow Us</h5>
                    <div class="footer-social-bookmark">
                        <ul class="white-text social-media">
                            <li><a class="white-text"  target="_blank" href="#" class="facebook"><i class="fa fa-facebook "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="twitter"><i class="fa fa-twitter "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="google-plus"><i class="fa fa-google-plus "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="dribbble"><i class="fa fa-linkedin "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="dribbble"><i class="fa fa-pinterest "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="dribbble"><i class="fa fa-dribbble "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="youtube"><i class="fa fa-youtube "></i></a></li>
                            <li><a class="white-text" target="_blank" href="#" class="instagram"><i class="fa fa-instagram "></i></a></li>

                        </ul>
                    </div>


                </div>
            </div>

            <div class="footer-copyright red darken-1">
                <div class="container center-align">
                    Copyright © 2016 ethioedu.com | <a href="http://ethioedu.com/contact-us/">Contact Us</a>.
                    All Names, Acronyms and Trademarks displayed on this website are those of their respective owners.
                    Read our <a href="http://ethioedu.com/school/docs/privacy-policy/">privacy policy</a> and <a href="http://ethioedu.com/school/docs/terms-of-use/">terms of use. </a>

                </div>
            </div>
        </footer>

        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery-2.1.1.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/materialize.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/owl.carousel.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/script.js' ?>"></script>

    </body>
</html>



