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
                        <li><a href="#">ABOUT US</a></li>
                        <li><a href="#">CONTACT US</a></li>
                        <li><a href="#">REGISTER </a></li>
                        <li><a href="#">LOGIN</a></li>

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
                        <li><a href="#">VACANCY/TENDER</a></li>
                        <li><a href="#">CONNECT TO ME</a></li>
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
                <div class="col s12 m8 grid-example z-depth-1">
                    <div class="news_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Advertising On EthioEdu.com</h1>
                            </div>
                        </div>
                        <div class="col s12 m12 ">
                            <div class="advertise_info">
                                <p>Ethioedu Limited runs www.ethioedu.com, Ethiopia's No1 Students' and Educational Resource Website with the highest traffic and pageviews from youths, students and prospective students across the country. With this status, we command the Ethiopia Educational Sphere. Students and youths across the country use our platform to interact and gain relevant information and resources that impact positively on their educational pursuits, hence the reason why they come over and over again.</p>
                                <h4 class="ad_sbtitle">Let's start with our Site Statistics:</h4>
                                <p>Our website statistics is based on PURE STUDENTS, that are mostly seeking admission or already in the higher institution.</p>
                                <ul>
                                    <li> 8.5 Million page views per month[Currently]</li>
                                    <li> 2.3 Million Sessions Per Month [Average]</li>
                                </ul>
                                <h4 class="ad_sbtitle red-text bo_bor padd_b5">Let's get started... Let's know what you need. Write us using the form below</h4>
                                <form class="col m12">
                                    <div class="input-field col s12">
                                        <input id="Caption" type="text" class="validate">
                                        <label for="Caption">Name</label>
                                    </div>
                                <div class="input-field col s12">
                                        <input id="Caption" type="text" class="validate">
                                        <label for="Caption">Email</label>
                                    </div>
                                      <div class="input-field col s12">
                                        <input id="Caption" type="text" class="validate">
                                        <label for="Caption">Contact</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <select >
                                            <option value="" disabled selected>Category</option>
                                            <option value="1">Admission</option>
                                            <option value="2">Departmental</option>
                                            <option value="3">Entertainments</option>
                                            <option value="4">Events</option>
                                            <option value="5">General</option>
                                            <option value="6">Part Time</option>
                                            <option value="7">Full Time</option>
                                            <option value="8">Sport</option>
                                            <option value="9">Pre Degree</option>
                                            <option value="10">Post Degree</option>
                                            <option value="8">Scholarship</option>
                                            <option value="8">Other</option>
                                        </select>
                                        <label>Category</label>
                                    </div>

                                    <div class="col s5 offset-s5 margin-b-10">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Send
                                            <i class="material-icons right">send</i>
                                        </button>
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



