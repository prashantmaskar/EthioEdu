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

                        <li><a class="dropdown-button home-btn" >LATEST NEWS</a></li>
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
                <div class="col s12 m10 grid-example z-depth-1">
                    <div class="school_category">
                        <div class="col m12 s12">
                            <div class="course_info">
                                <h1 class="page-heading">Schools in Ethiopia </h1>

                                <p>Find private and public schools in Ethiopia. Get all the information on nursery, primary, secondary, senior, preparatory, international schools as well as kindergartens in Ethiopia.</p>
                            </div>
                        </div>
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">School Categories </h1>
                            </div>
                        </div>
                        <div class="col m12">
                            <div class="school_category_box">
                                <ul class="s_category_list">
                                    <li class="catrgory_list_item"><a href="#">Kindergartens and Nursery</a></li>
                                    <li class="catrgory_list_item"><a href="#">Private Primary</a></li>
                                    <li class="catrgory_list_item"><a href="#">Public Primary Schools</a></li>
                                    <li class="catrgory_list_item"><a href="#">Private Secondary</a></li>
                                    <li class="catrgory_list_item"><a href="#">Public Secondary</a></li>
                                    <li class="catrgory_list_item"><a href="#">International</a></li>
                                    <li class="catrgory_list_item"><a href="#">Preparatory</a></li>
                                    <li class="catrgory_list_item"><a href="#">Senior</a></li>
                                    <li class="catrgory_list_item"><a href="#">University</a></li>
                                    <li class="catrgory_list_item"><a href="#">Institutes</a></li>

                                    <li class="catrgory_list_item"><b>Collages:</b></li>
                                    <li class="catrgory_list_item"><a href="#">Commerce & Business</a></li>
                                    <li class="catrgory_list_item"><a href="#">Computer Training & IT</a></li>
                                    <li class="catrgory_list_item"><a href="#">Distance Education</a></li>
                                    <li class="catrgory_list_item"><a href="#">Engineering</a></li>
                                    <li class="catrgory_list_item"><a href="#">Medical Schools</a></li>
                                    <li class="catrgory_list_item"><a href="#">University Collages</a></li>
                                    <li class="catrgory_list_item"><a href="#">Theology & Bible</a></li>
                                    <li class="catrgory_list_item"><a href="#">Theology & Bible</a></li>
                                    <li class="catrgory_list_item"><a href="#">Agriculture</a></li>
                                    <li class="catrgory_list_item"><a href="#">Vocational/Technical</a></li>

                                    <li class="catrgory_list_item"><b>Others:</b></li>
                                    <li class="catrgory_list_item"><a href="#">Aviation</a></li>
                                    <li class="catrgory_list_item"><a href="#">Art & Design</a></li>
                                    <li class="catrgory_list_item"><a href="#">Health & Beauty</a></li>
                                    <li class="catrgory_list_item"><a href="#">Counselling & Enterpreunership</a></li>
                                    <li class="catrgory_list_item"><a href="#">Driving Schools</a></li>
                                    <li class="catrgory_list_item"><a href="#">Language, computer & IT  Training Courses</a></li>
                                    <li class="catrgory_list_item"><a href="#">Tutorial Center</a></li>
                                    <li class="catrgory_list_item"><a href="#">Hotel tourism</a></li>
                                    <li class="catrgory_list_item"><a href="#">Mass Media</a></li>
                                    <li class="catrgory_list_item"><a href="#">Accounts</a></li>

                                </ul>
                                <p><span class="News-button"><a class="waves-effect waves-light btn" href="<?php echo base_url() . 'index.php/addschool' ?>">Add School</a></span></p>
                            </div>
                        </div>
                    </div>

                    <div class="serch_schools col m12 " style="border-bottom: 1px solid #4c4e4e;">
                        <div class="row">

                            <form class="col s12">
                                <div class="row border-b">
                                    <div class="page-heading-wrap col s12 m2">
                                        <h6 class="page-heading">Schools Name:</h6>
                                    </div>
                                    <div class="input-field col s12 m3">
                                        <input id="schools_name" type="text" class="validate">
                                        <label for="schools_name">Schools Name</label>
                                    </div>
                                    <div class="input-field col s12 m2">
                                        <p>
                                            <input type="checkbox" id="privates" />
                                            <label for="privates">Private School</label>
                                        </p>
                                    </div>
                                    <div class="input-field col s12 m2">
                                        <p>
                                            <input type="checkbox" id="publics" />
                                            <label for="publics">Public School</label>
                                        </p>
                                    </div>

                                    <div class="input-field col s2">
                                        <a class="waves-effect waves-light btn margin-t-15">Search</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="school_search_result">
                        <div class="row">
                            <div class="col m12">
                                <div class="school_short_info ">
                                    <div class="row">
                                        <div class="col m3">
                                            <div class="row">
                                                <div class="col m6 offset-m2">
                                                    <div class="s_logo">
                                                        <img src="<?php echo base_url() . 'images/schools.png' ?>">
                                                    </div>

                                                </div>

                                                <div class="col m12">
                                                    <div class="s_detail">

                                                        <h1>Lukenya High School</h1>
                                                        <p>  <i class="red-text fa fa-envelope"></i> Lukenya@mail.com</p>
                                                        <p><i class=" red-text fa fa-phone"></i>  +254 (0)20-2064566</p>
                                                        <p>Wynberg Boys’ Junior School is a school with a long history, having been established in 1841. As such it is the second oldest boys’ school...</p>
                                                        <a href="http://localhost/ETHIO/index.php/schooldetails">View More >></a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col m3">
                                            <div class="row">
                                                <div class="col m6 offset-m2">
                                                    <div class="s_logo">
                                                        <img src="<?php echo base_url() . 'images/schools.png' ?>">
                                                    </div>

                                                </div>

                                                <div class="col m12">
                                                    <div class="s_detail">

                                                        <h1>Lukenya High School</h1>
                                                        <p>  <i class="red-text fa fa-envelope"></i> Lukenya@mail.com</p>
                                                        <p><i class=" red-text fa fa-phone"></i>  +254 (0)20-2064566</p>
                                                        <p>Wynberg Boys’ Junior School is a school with a long history, having been established in 1841. As such it is the second oldest boys’ school...</p>
                                                        <a href="http://localhost/ETHIO/index.php/schooldetails">View More >></a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div><div class="col m3">
                                            <div class="row">
                                                <div class="col m6 offset-m2">
                                                    <div class="s_logo">
                                                        <img src="<?php echo base_url() . 'images/schools.png' ?>">
                                                    </div>

                                                </div>

                                                <div class="col m12">
                                                    <div class="s_detail">

                                                        <h1>Lukenya High School</h1>
                                                        <p>  <i class="red-text fa fa-envelope"></i> Lukenya@mail.com</p>
                                                        <p><i class=" red-text fa fa-phone"></i>  +254 (0)20-2064566</p>
                                                        <p>Wynberg Boys’ Junior School is a school with a long history, having been established in 1841. As such it is the second oldest boys’ school...</p>
                                                        <a href="http://localhost/ETHIO/index.php/schooldetails">View More >></a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col m3">
                                            <div class="row">
                                                <div class="col m6 offset-m2">
                                                    <div class="s_logo">
                                                        <img src="<?php echo base_url() . 'images/schools.png' ?>">
                                                    </div>

                                                </div>

                                                <div class="col m12">
                                                    <div class="s_detail">

                                                        <h1>Lukenya High School</h1>
                                                        <p>  <i class="red-text fa fa-envelope"></i> Lukenya@mail.com</p>
                                                        <p><i class=" red-text fa fa-phone"></i>  +254 (0)20-2064566</p>
                                                        <p>Wynberg Boys’ Junior School is a school with a long history, having been established in 1841. As such it is the second oldest boys’ school...</p>
                                                        <a href="http://localhost/ETHIO/index.php/schooldetails">View More >></a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col m3">
                                            <div class="row">
                                                <div class="col m6 offset-m2">
                                                    <div class="s_logo">
                                                        <img src="<?php echo base_url() . 'images/schools.png' ?>">
                                                    </div>

                                                </div>

                                                <div class="col m12">
                                                    <div class="s_detail">

                                                        <h1>Lukenya High School</h1>
                                                        <p>  <i class="red-text fa fa-envelope"></i> Lukenya@mail.com</p>
                                                        <p><i class=" red-text fa fa-phone"></i>  +254 (0)20-2064566</p>
                                                        <p>Wynberg Boys’ Junior School is a school with a long history, having been established in 1841. As such it is the second oldest boys’ school...</p>
                                                        <a href="http://localhost/ETHIO/index.php/schooldetails">View More >></a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col m3">
                                            <div class="row">
                                                <div class="col m6 offset-m2">
                                                    <div class="s_logo">
                                                        <img src="<?php echo base_url() . 'images/schools.png' ?>">
                                                    </div>

                                                </div>

                                                <div class="col m12">
                                                    <div class="s_detail">

                                                        <h1>Lukenya High School</h1>
                                                        <p>  <i class="red-text fa fa-envelope"></i> Lukenya@mail.com</p>
                                                        <p><i class=" red-text fa fa-phone"></i>  +254 (0)20-2064566</p>
                                                        <p>Wynberg Boys’ Junior School is a school with a long history, having been established in 1841. As such it is the second oldest boys’ school...</p>
                                                        <a href="http://localhost/ETHIO/index.php/schooldetails">View More >></a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col m3">
                                            <div class="row">
                                                <div class="col m6 offset-m2">
                                                    <div class="s_logo">
                                                        <img src="<?php echo base_url() . 'images/schools.png' ?>">
                                                    </div>

                                                </div>

                                                <div class="col m12">
                                                    <div class="s_detail">

                                                        <h1>Lukenya High School</h1>
                                                        <p>  <i class="red-text fa fa-envelope"></i> Lukenya@mail.com</p>
                                                        <p><i class=" red-text fa fa-phone"></i>  +254 (0)20-2064566</p>
                                                        <p>Wynberg Boys’ Junior School is a school with a long history, having been established in 1841. As such it is the second oldest boys’ school...</p>
                                                        <a href="http://localhost/ETHIO/index.php/schooldetails">View More >></a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col m3">
                                            <div class="row">
                                                <div class="col m6 offset-m2">
                                                    <div class="s_logo">
                                                        <img src="<?php echo base_url() . 'images/schools.png' ?>">
                                                    </div>

                                                </div>

                                                <div class="col m12">
                                                    <div class="s_detail">

                                                        <h1>Lukenya High School</h1>
                                                        <p>  <i class="red-text fa fa-envelope"></i> Lukenya@mail.com</p>
                                                        <p><i class=" red-text fa fa-phone"></i>  +254 (0)20-2064566</p>
                                                        <p>Wynberg Boys’ Junior School is a school with a long history, having been established in 1841. As such it is the second oldest boys’ school...</p>
                                                        <a href="http://localhost/ETHIO/index.php/schooldetails">View More >></a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <!--                                        <div class="col m12">
                                                                        <div class="school_short_info ">
                                                                            <div class="row">
                                                                                <div class="col m2">
                                                                                    <div class="s_logo">
                                                                                        <img src="<?php echo base_url() . 'images/schools.png' ?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col m9"
                                                                                     <div class="s_detail">
                            
                                                                                        <h1>Lukenya High School</h1>
                                                                                        <p>  <i class="red-text fa fa-envelope"></i> Lukenya@mail.com</p>
                                                                                        <p><i class=" red-text fa fa-phone"></i>  +254 (0)20-2064566</p>
                                                                                        <p>Wynberg Boys’ Junior School is a school with a long history, having been established in 1841. As such it is the second oldest boys’ school...</p>
                                                                                        <a href="#">View More >></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>-->
                            <ul class="pagination">
                                <li><a href="#!"><i class="fa fa-chevron-left"></i></a></li>
                                <li class="active"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
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



