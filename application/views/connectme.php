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
                        <li><a  href="<?php echo base_url() . 'index.php/home' ?>">HOME</a></li>

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
                        <li><a href="<?php echo base_url() . 'index.php/schools' ?>">SCHOOLS</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/course' ?>">COURSES</a></li>
                         <li><a href="<?php echo base_url() . 'index.php/vactender' ?>">VACANCY/TENDER</a></li>
                        <li><a href="<?php echo base_url() . 'index.php/connectme' ?>">CONNECT TO ME</a></li>
                        <li><a href="#">SERVICE</a></li>
                    </ul>
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>

        <div class="connect-wrap ">
            <div class="row">
                <div class="col s12 m9">
                    <div class="connectme_form z-depth-1">
                        <div class="row">
                            <div class="col m12 s12"><h2 class="form_heading">Find Friends/Student</h2></div>
                            <div class="col m6 s12">
                                <form class="row">
                                    <div class=" col s4">
                                        <label for="Caption">I am Looking For:</label>
                                    </div>
                                    <div class=" col s4">
                                        <input type="checkbox" id="Guy" />
                                        <label for="Guy">Guy</label>
                                    </div>
                                    <div class=" col s4">
                                        <input type="checkbox" id="Chic" />
                                        <label for="Chic">Chic</label>
                                    </div>
                                    <div class="col s12">
                                        <select >
                                            <option value="" disabled selected>Any Age</option>
                                            <option value="1">16-19</option>
                                            <option value="2">20-25</option>
                                            <option value="3">26-29</option>
                                            <option value="4">30+</option>

                                        </select>
                                        <label>Between The Age</label>
                                    </div>
                                    <div class="col s12">
                                        <select >
                                            <option value="" disabled selected>Institutions</option>
                                            <option value="1">Ethiopian</option>
                                            <option value="2">Ethiopian</option>
                                            <option value="3">Ethiopian</option>
                                            <option value="4">Ethiopian</option>
                                        </select>
                                        <label>Institutions</label>
                                    </div>
                                    <div class="col s12">
                                        <select >
                                            <option value="" disabled selected>At Level Of</option>
                                            <option value="1">Anything</option>
                                            <option value="2">Student</option>
                                            <option value="3">Graduate</option>
                                        </select>
                                        <label>At Level Of</label>
                                    </div>
                                    <div class="col s12">
                                        <select >
                                            <option value="" disabled selected>Special Interest In</option>
                                            <option value="1">Anything</option>
                                            <option value="2">Friendship</option>
                                            <option value="3">Dating</option>
                                        </select>
                                        <label>Special Interest In</label>
                                    </div>
                                    <div class="col m12">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Find

                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="vr-line col m1">
                                <img src="<?php echo base_url() . 'images/or-vertical.png' ?>">
                            </div>
                            <div class="col m5 s12">

                                <h3>Find User Name</h3>
                                <div class="col m12 s12">
                                    <form>
                                        <div class="input-field col s12">
                                            <input id="Username" type="text" class="validate">
                                            <label for="Username">Enter Ethioedu user name</label>
                                        </div>
                                        <div class="col m12">
                                            <button class="btn waves-effect waves-light" type="submit" name="action">Connect2Me
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col m12">
                                    <div class="lr_link-wrap">
                                        <p><a href="<?php echo base_url() . 'index.php/sregister' ?>">Register To ETHIOEDU</a></p>
                                        <p><a href="#">Forgot password ?</a></p>
                                        <p class="text-black">All Ready User ?  <a href="#"> Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3 margin-t-15">
                    <div class="online_std z-depth-1">
                        <ul class="online_std_list">
                            <li>
                                <div class="row">
                                    <div class="col m3 s12 std_thumb">
                                        <img src="http://localhost/ETHIO/images/user.jpg">  
                                    </div>
                                    <div class="col m9 std_details">
                                        <p class="std_name"><a href="#">Sudhir Lahave</a></p>
                                        <p class="std_university">(Male)</p>
                                        <p class="std_name">Unilorin Student</p>
                                    </div>
                                </div> 
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col m3 s12 std_thumb">
                                        <img src="http://localhost/ETHIO/images/user.jpg">  
                                    </div>
                                    <div class="col m9 std_details">
                                        <p class="std_name"><a href="#">Sudhir Lahave</a></p>
                                        <p class="std_university">(Male)</p>
                                        <p class="std_name">Unilorin Student</p>
                                    </div>
                                </div> 
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col m3 s12 std_thumb">
                                        <img src="http://localhost/ETHIO/images/user.jpg">  
                                    </div>
                                    <div class="col m9 std_details">
                                        <p class="std_name"><a href="#">Sudhir Lahave</a></p>
                                        <p class="std_university">(Male)</p>
                                        <p class="std_name">Unilorin Student</p>
                                    </div>
                                </div> 
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col m3 s12 std_thumb">
                                        <img src="http://localhost/ETHIO/images/user.jpg">  
                                    </div>
                                    <div class="col m9 std_details">
                                        <p class="std_name"><a href="#">Sudhir Lahave</a></p>
                                        <p class="std_university">(Male)</p>
                                        <p class="std_name">Unilorin Student</p>
                                    </div>
                                </div> 
                            </li>
                        </ul>
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



