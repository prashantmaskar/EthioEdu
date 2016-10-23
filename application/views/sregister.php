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

        <div class="regist-wrap ">
            <div class="row">
                <div class="col s12 m9">
                    <div class="regist_form z-depth-1">
                        <div class="row">
                            <div class="col m12 s12"><h2 class="form_heading">Register as a Member</h2></div>
                            <div class="col m12 s12">
                                <div class="instrction_box">
                                    <p><strong>Brief Instruction</strong></p>
                                    <p>1.Registration is open to Aspirants,students & Graduates.</p>
                                    <p>2.Aspirants should select the institution they intend to get into.</p>
                                    <p>3.Graduates should select the institute they graduated from.</p>
                                </div>
                                <form class="row">
                                    <h4 class="red-text">Community Information</h4>

                                    <div class="col s12">
                                        <select>
                                            <option value="" disabled selected>Select your school type</option>
                                            <option value="1">Anything</option>
                                            <option value="2">Friendship</option>
                                            <option value="3">Dating</option>
                                        </select>
                                        <label>Institutes</label>
                                    </div>
                                    <div class="col s12">
                                        <select>
                                            <option value="" disabled selected>Select School</option>
                                            <option value="1">Anything</option>
                                            <option value="2">Friendship</option>
                                            <option value="3">Dating</option>
                                        </select>
                                        <label>School</label>
                                    </div>
                                    <div class="col s12">
                                        <select>
                                            <option value="" disabled selected>Select Level </option>
                                            <option value="1">Anything</option>
                                            <option value="2">Friendship</option>
                                            <option value="3">Dating</option>
                                        </select>
                                        <label>Level</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="Caption" type="text" class="validate">
                                        <label for="Caption">Department</label>
                                    </div>
                                    <h4 class="red-text">Login Information</h4>
                                    <div class="input-field col s12">
                                        <input id="Caption" type="text" class="validate">
                                        <label for="Caption">Username</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="Caption" type="text" class="validate">
                                        <label for="Caption">password</label>
                                    </div>
                                     <div class="input-field col s12">
                                        <input id="Caption" type="text" class="validate">
                                        <label for="Caption"> verify password</label>
                                    </div>
                                      <div class=" col s2">
                                          <p class="right-align">Connect2Me</p>
                                    </div>  <div class=" col s8">
                                        <input type="checkbox" id="Chic" />
                                        <label for="Chic">Enable Connect2me! Allow my profile to be viewed so people can connect2me</label>
                                    </div>
                                    <div class="col m12 margin-t-15 center-align">
                                        <button class="btn waves-effect waves-light red" type="submit" name="action">Register:continue

                                        </button>
                                    </div>
                                </form>
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



