<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title><?php echo $m_title ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="../../css/adminmaterialize.css" type="text/css" rel="stylesheet" media="screen">
        <link href="../../css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen">
        <link href="../../css/admin.css" type="text/css" rel="stylesheet" media="screen">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <header id="header" class="page-topbar ">
            <div class="navbar-fixed">
                <nav class="navbar-color">
                    <div class="nav-wrapper">
                        <ul class="left">
                            <li>
                                <h1 class="logo-wrapper">
                                    <a href="#" class="brand-logo darken-1" >
                                        EthioEdu
                                    </a>    
                                </h1>
                                <span class="logo-text">Ethioedu</span>
                            </li>
                        </ul>
                        <ul class="right hid-mid-screen">
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                                    <i class="mdi-action-settings-overscan"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                                    <i class="mdi-social-notifications"><small class="notification-badge">5</small></i>

                                </a>
                            </li>
                            <li>
                                <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
                                    <i class="mdi-communication-chat"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </nav>
            </div>

        </header>
        <!--header End-->

        <!--start main-->
        <div id="main">
            <div class="wrapper">
                <?php  $this->load->view('admin/sidebar'); ?>
                <section id="content">
                    <div id="breadcrumbs-wrapper">
                        <!-- Search for small screen -->
                        <div class="header-search-wrapper grey hide-on-large-only">
                            <i class="mdi-action-search active"></i>
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <h5 class="breadcrumbs-title">Add Course</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">Add Course</a>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="section">
                            <p class="caption">Fill all required fields.</p>
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">BASIC FORM</h4>
                                            <div class="row">
                                                <form id="addcourseform" action="<?php echo site_url('index.php/admin/Addcourse')?>" method="post" class="col m12">
                                                    <div class="form-group input-field col s12">
                                                        <input id="Course_name" name="Course_name" type="text" class="validate">
                                                        <label for="Course_name">Course Name</label>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <input id="Major_sub" name="Major_sub" type="text" class="validate">
                                                        <label for="Major_sub">Major Subject</label>
                                                    </div>
                                                    <!--<div class=" form-group input-field col s12">
                                                        <input id="course_cat" name="course_cat" type="text" class="validate">
                                                        <label for="course_cat">Course Category</label>
                                                    </div>-->
													
													           <div class=" form-group input-field col s12">
                                                        <select class=" form-control browser-default" name="course_cat">
                                                            <option value="">Course Category</option>
                                                            <option value="advancediploma">Advance Diploma</option>
                                                            <option value="bridging">Bridging</option>
                                                            <option value="certificate">Certificate</option>
															<option value="degree">Degree</option>
															<option value="diploma">Diploma</option>
															<option value="graduatediploma">Graduate Diploma</option>
															<option value="higherdiploma">Higher Diploma</option>
															<option value="masters">Masters</option>
															<option value="postgraduatediploma">Post Graduate Diploma</option>
															<option value="preuniversity">Pre University</option>
                                                        </select>
                                                    </div>
													
													
													
                                                    <div class="col s2">
                                                        <label class="s_duration">Study Duration</label>
                                                    </div>
                                                    <div class="form-group input-field col s5">
                                                        <select class="form-control browser-default" name="duration">

                                                            <option value="">select duration</option>
                                                             <option value="year">year</option>
                                                            <option value="Month">Month</option>
                                                            <option value="Day">Day</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group input-field col s5">
                                                        <input id="course_duration" name="c_duration" type="text" class="validate">
                                                        <label for="course_duration">Course Duration</label>
                                                    </div>


                                                    <div class=" form-group input-field col s12">
                                                        <select class=" form-control browser-default" name="addschool">
                                                            <option value="">Add School</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Africa">Africa</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group input-field col s12">
                                                        <select class=" form-control browser-default" name="adduniversity">
                                                            <option value="">Add University</option>
                                                            <option value="1">Ethiopia</option>
                                                            <option value="2">Kenya</option>
                                                            <option value="3">Africa</option>
                                                        </select>
                                                    </div>

                                                    <div class=" form-group input-field col s12">
                                                        <textarea id="Details" class="materialize-textarea" name="details"></textarea>
                                                        <label for="Details">Details</label>
                                                    </div>

                                                    <div class="col s12">
                                                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                                            <i class="mdi-content-send right"></i>
                                                        </button>

                                                    </div>
                                                </form>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                </section>
                            </div>
                        </div>
                        <script type="text/javascript" src="../../js/jquery-2.1.1.js"></script>
                        <script type="text/javascript" src="../../js/materialize.js"></script>
                        </body>

                        </html>

<!-- <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css"> -->
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/bootstrapValidator.css">
<script type="text/javascript" src="../../js/bootstrapValidator.js"></script>
<script type="text/javascript" src="../../js/admin/admin-course-validate.js"></script>