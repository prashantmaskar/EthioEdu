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
                                    <h5 class="breadcrumbs-title">Add Events</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">Add Events</a>
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
                                            <h4 class="header2">Event FORM</h4>
                                            <div class="row">
                                                <form id="addevent" action="#" method="post" class="col m12">
                                                   
                                                    <div class="form-group input-field col s12">
                                                        <input id="event_tital" name="event_tital" type="text" class="validate">
                                                        <label for="event_tital">Event Title</label>
                                                    </div>
                                                    

                                                     <div class="form-group file-field input-field col s12">
                                                        <div class="btn">
                                                            <span>Attach Photo</span>
                                                            <input type="file"  name="avatar" multiple>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Upload one or more Photo">
                                                        </div>
                                                    </div>
													<div class="form-group input-field col s12">
                                                        <textarea id="Description" name="Description" class="materialize-textarea"></textarea>
                                                        <label for="Description">Description</label>
                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <input id="post_by" type="text" name="eventby" class="validate">
                                                        <label for="post_by">Event Posted By</label>
                                                    </div>

                                                    <div class="col s5 offset-s5">
                                                        <button class="btn waves-effect waves-light" type="submit" name="action">Publish
                                                            <i class="mdi-action-done right"></i>
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
 


<!-- 
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css"> -->
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="../../css/bootstrapValidator.css">
<script type="text/javascript" src="../../js/bootstrapValidator.js"></script>

<script type="text/javascript" src="../../js/admin/admin-event.js"></script>