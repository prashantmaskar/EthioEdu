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
                <aside id="leftside-nav">
                    <ul id="slide-out" class="side-nav fixed leftside-navigation">
                        <li class="user-details cyan darken-2">
                            <div class="row">
                                <div class="col col s4 m4 l4">
                                    <img src="../../images/avatar.jpg" class="circle responsive-img valign profile-image">
                                </div>
                                <div class="col col s8 m8 l8">
                                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">
                                        Fikreman
                                        <i class="mdi-navigation-arrow-drop-down right"></i>
                                    </a>
                                    <ul id="profile-dropdown" class="dropdown-content">
                                        <li>
                                            <a href="#">
                                                <i class="mdi-action-face-unlock"></i>
                                                Profile
                                            </a>
                                        </li>
                                    </ul>
                                    <p class="user-roal">Administrator</p>
                                </div>
                            </div>
                        </li> 
                        <li class="bold active">
                            <a href="#" class="waves-effect waves-cyan">
                                <i class="mdi-action-dashboard"></i> 
                                Dashboard
                            </a>
                        </li>
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        School Manage
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Addschool' ?>">Add School</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Listschool' ?>">List School</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="bold">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        Course Manage
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Addcourse' ?>">Add Course</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/listcourse' ?>">List Course</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="bold">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        News Manage
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Addnews' ?>">Add News</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/listnews' ?>">List News</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="mdi-action-wallet-travel"></i>
                                        Service Manage
                                    </a>
                                    <div class="collapsible-body" >
                                        <ul>
                                            <li><a href="#">Past Exam</a>
                                            </li>
                                            <li><a href="#">Tips</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/quesanswer' ?>">Questions & Answers</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Project_Topic' ?>">Project Topics</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/Events' ?>">Add Events</a>
                                            </li>
                                            <li><a href="<?php echo base_url() . 'index.php/admin/ListEvent' ?>"> List Events</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>                   
                </aside>
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
                                    <h5 class="breadcrumbs-title">Add School</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">Add School</a>
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
                                                <form class="col m12">
                                                    <div class="input-field col s12">
                                                        <select class="browser-default">
                                                            <option  value="" disabled="" selected="">Registration Type</option>
                                                            <option value="1">Normal Registration</option>
                                                            <option value="2">Premium Registration (1,000 Birr per year)</option>

                                                        </select>

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
                                                        <select class="browser-default">
                                                            <option  value="" disabled="" selected="">school Category</option>
                                                            <option value="1">Account</option>
                                                            <option value="2">Agriculture</option>
                                                            <option value="3">Account</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <select class="browser-default">
                                                            <option value="" disabled selected>University</option>
                                                            <option value="1">Account</option>
                                                            <option value="2">Agriculture</option>
                                                            <option value="3">Account</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <select class="browser-default">
                                                            <option value="" disabled selected>Institute</option>
                                                            <option value="1">Account</option>
                                                            <option value="2">Agriculture</option>
                                                            <option value="3">Account</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <select class="browser-default">
                                                            <option value="" disabled selected>Other Category</option>
                                                            <option value="1">Account</option>
                                                            <option value="2">Agriculture</option>
                                                            <option value="3">Account</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input id="contact1" type="text" class="validate">
                                                        <label for="contact">Phone Number </label>
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <select class="browser-default">
                                                            <option value="" disabled selected>Choose Country</option>
                                                            <option value="1">Ethiopia</option>
                                                            <option value="2">Kenya</option>
                                                            <option value="3">Africa</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <select class="browser-default">
                                                            <option value="" disabled selected>Choose City</option>
                                                            <option value="1">Ethiopia</option>
                                                            <option value="2">Kenya</option>
                                                            <option value="3">Africa</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <select class="browser-default">
                                                            <option value="" disabled selected>Choose Region</option>
                                                            <option value="1">Ethiopia</option>
                                                            <option value="2">Kenya</option>
                                                            <option value="3">Africa</option>
                                                        </select>
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <input id="school_type" type="text" class="validate">
                                                        <label for="password">School Type</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <select class="browser-default">
                                                            <option value="1">Public</option>
                                                            <option value="2">Private</option>
                                                        </select>
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
                                                        <textarea id="Description" class="materialize-textarea"></textarea>
                                                        <label for="Description">Tell Us About yourself</label>
                                                    </div>
                                                    <div class="input-field col s4">
                                                        <div class="input-field col s12">
                                                            <button class="btn cyan waves-effect waves-light" type="submit" name="action"><i class="mdi-action-perm-identity"></i> Register</button>
                                                        </div>
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
