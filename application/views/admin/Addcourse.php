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
                                                <form class="col m12">
                                                    <div class="input-field col s12">
                                                        <input id="Course_name" type="text" class="validate">
                                                        <label for="Course_name">Course Name</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input id="Major_sub" type="text" class="validate">
                                                        <label for="Major_sub">Major Subject</label>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <input id="course_cat" type="text" class="validate">
                                                        <label for="course_cat">Course Category</label>
                                                    </div>
                                                    <div class="col s2">
                                                        <label class="s_duration">Study Duration</label>
                                                    </div>
                                                    <div class="input-field col s5">
                                                        <select class="browser-default">

                                                            <option value="1">Year</option>
                                                            <option value="2">Month</option>
                                                            <option value="3">Day</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-field col s5">
                                                        <input id="course_duration" type="text" class="validate">
                                                        <label for="course_duration">Course Duration</label>
                                                    </div>


                                                    <div class="input-field col s12">
                                                        <select class="browser-default">
                                                            <option value="" disabled selected>Add School</option>
                                                            <option value="1">Ethiopia</option>
                                                            <option value="2">Kenya</option>
                                                            <option value="3">Africa</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-field col s12">
                                                        <select class="browser-default">
                                                            <option value="" disabled selected>Add University</option>
                                                            <option value="1">Ethiopia</option>
                                                            <option value="2">Kenya</option>
                                                            <option value="3">Africa</option>
                                                        </select>
                                                    </div>

                                                    <div class="input-field col s12">
                                                        <textarea id="Details" class="materialize-textarea"></textarea>
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
