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

                    <div class="content_sec add-school">
                        <h1 class="add_title">Add/Edit Schools</h1>
                        <div class="instrction_box">
                            EthioEdu is the leading educational directory in Ethiopia and we offer two options for listing your institution.
                            <ul><li><strong>Free/Basic Listing</strong> - Due to workload, free listings take a longer time (Upto a month and not guaranteed) to appear online and are placed below paid/premium listings. Only basic information is published.</li>
                                <li><strong>Paid/Premium listings</strong> - Premium listings appear online within 24 hours of payment. They are usually placed among the top in the colleges listings page. We publish detailed institution's information for premium listing. The cost is  1,000 Birr per year only.</li>
                            </ul>
                        </div>
                        <div class="school_form">
                            <form class="col m12">
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Registration Type</option>
                                        <option value="1">Normal Registration</option>
                                        <option value="2">Premium Registration (1,000 Birr per year)</option>

                                    </select>
                                    <label>Registration Type</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="user_name" type="text" class="validate">
                                    <label for="User_name">User Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="name" type="text" class="validate">
                                    <label for="name">Full Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="email" type="text" class="validate">
                                    <label for="email">Email Id</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="School_name" type="text" class="validate">
                                    <label for="School_name">School Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>school Category</option>
                                        <option value="1">Account</option>
                                        <option value="2">Agriculture</option>
                                        <option value="3">Account</option>
                                    </select>
                                    <label>school Category</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>University</option>
                                        <option value="1">Account</option>
                                        <option value="2">Agriculture</option>
                                        <option value="3">Account</option>
                                    </select>
                                    <label>University</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Institute</option>
                                        <option value="1">Account</option>
                                        <option value="2">Agriculture</option>
                                        <option value="3">Account</option>
                                    </select>
                                    <label>Institute</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Other Category</option>
                                        <option value="1">Account</option>
                                        <option value="2">Agriculture</option>
                                        <option value="3">Account</option>
                                    </select>
                                    <label>Other Category</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="contact1" type="text" class="validate">
                                    <label for="contact">Phone Number </label>
                                </div>

                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Choose Country</option>
                                        <option value="1">Ethiopia</option>
                                        <option value="2">Kenya</option>
                                        <option value="3">Africa</option>
                                    </select>
                                    <label>Choose Country</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Choose City</option>
                                        <option value="1">Ethiopia</option>
                                        <option value="2">Kenya</option>
                                        <option value="3">Africa</option>
                                    </select>
                                    <label>Choose Country</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="" disabled selected>Choose Region</option>
                                        <option value="1">Ethiopia</option>
                                        <option value="2">Kenya</option>
                                        <option value="3">Africa</option>
                                    </select>
                                    <label>Choose Country</label>
                                </div>

                                <div class="input-field col s12">
                                    <input id="school_type" type="text" class="validate">
                                    <label for="password">School Type</label>
                                </div>
                                <div class="input-field col s12">
                                    <select>
                                        <option value="1">Public</option>
                                        <option value="2">Private</option>
                                    </select>
                                    <label>School Ownership Type</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="student_population" type="text" class="validate">
                                    <label for="student_population">Student Population</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="staff" type="text" class="validate">
                                    <label for="staff">Teaching Staff</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="non_teach" type="text" class="validate">
                                    <label for="non_teach">Non-Teaching Staff</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="past_award" type="text" class="validate">
                                    <label for="past_award">Past Awards</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="year" type="text" class="validate">
                                    <label for="year">Acadamic Year</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="Fee" type="text" class="validate">
                                    <label for="Fee">Acadamic Fee</label>
                                </div>
                                <div class="input-field col s12">
                                    <textarea id="Admissios_pro" class="materialize-textarea"></textarea>
                                    <label for="Description">Admission Procedures</label>
                                </div>
                                <div class="input-field col s12">
                                    <textarea id="Description" class="materialize-textarea"></textarea>
                                    <label for="Description">Acadamic Requirement</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="scolership" type="text" class="validate">
                                    <label for="password">Scholarships</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="address" type="text" class="validate">
                                    <label for="password">Address</label>
                                </div>
                                <div id="map"class="col m12">     
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8067573.325322677!2d36.00181604982493!3d9.132349675141633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1635d0cedd6cfd2b%3A0x7bf6a67f5348c55a!2sEthiopia!5e0!3m2!1sen!2sin!4v1470819730373"  height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                                
                                </div>
                                <div class="input-field col s12">
                                    <input id="web" type="text" class="validate">
                                    <label for="password">Web Url</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="password" type="text" class="validate">
                                    <label for="password">password</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="cpassword" type="text" class="validate">
                                    <label for="cpassword">Confirm password</label>
                                </div>

                                <div class="input-field col s12">
                                    <textarea id="Description" class="materialize-textarea"></textarea>
                                    <label for="Description">Tell Us About yourself</label>
                                </div>
                                <div class="captch">
                                    <img class="responsive-img" src="<?php echo base_url() . 'images/Captcha.png' ?>">
                                </div>
                                <div class="input-field col s12">
                                    <input id="captch" type="text" class="validate">
                                    <label for="captch">Add Above Code</label>
                                </div>
                                <div class="input-field col s12">
                                    <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
                                    <label for="filled-in-box">I accept terms & conditions</label>
                                </div>
                                <div class="new_account input-field col s12">
                                    <a class="btn waves-effect waves-light">Register</a>
                                    &nbsp;&nbsp;<span>Already A User? <a href="#">Login</a> </span>
                                    <p class="t20margin"><a href="#">Forgot Password?</a> </p>
                                </div>
                                <!--                                <div class="input-field col s12">
                                                                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                                                        <i class="material-icons right">send</i>
                                                                    </button>
                                                                    <button class="btn waves-effect waves-light red" type="submit" name="action">cancel
                                                                        <i class="material-icons right">cancel</i>
                                                                    </button>
                                                                </div>-->
                            </form>
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

</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery-2.1.1.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/materialize.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/owl.carousel.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/script.js' ?>"></script>

    </body>
</html>



