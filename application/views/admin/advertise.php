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
                                    <h5 class="breadcrumbs-title">Add Advertise</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="index.html">Dashboard</a>
                                        </li>
                                        <li><a href="#">Add Advertise</a>
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
                                            <h4 class="header2">Advertise FORM</h4>
                                            <div class="row">
                                               <form id="advertise" class="col m12">
                                    <div class=" form-group input-field col s12">
                                        <input id="Caption" name="name" type="text" class="validate">
                                        <label for="Caption">Client Name</label>
                                    </div>
                                <div class="form-group input-field col s12">
                                        <input id="Caption" name="email" type="email" class="validate">
                                        <label for="Caption">Email</label>
                                    </div>
                                      <div class="form-group input-field col s12">
                                        <input id="Caption" name="contact" type="text" class="validate">
                                        <label for="Caption">Contact</label>
                                    </div>
                                    <div class="form-group input-field col s12">
                                        <select class="form-control browser-default" name="catagory" >
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
                                        <!--<label>Category</label>-->
                                    </div>
									<div class="form-group input-field col s12">
                                        <select class="form-control browser-default" name="addposition" >
                                           <option  value="" disabled="" selected="">Add Position</option>
                                                            <option value="1">Top</option>
                                                            <option value="2">Left</option>
                                                            <option value="2">Right</option>
                                        </select>
                                      <!--  <label>Add Position</label>-->
                                    </div>
									<div class="form-group input-field col s12">
                                        <select class="form-control browser-default " name="paymentmethod" >
                                           <option  value="" disabled="" selected="">Payment Method</option>
                                                            <option value="1">M-Birr</option>
                                                            <option value="2">Hello-Cash</option>
                                        </select>
                                       <!-- <label>Payment Method</label>-->
                                    </div>
									<div class="form-group input-field col s12">
                                                        <input id="subject" type="text" class="validate" name="subject">
                                                        <label for="subject">Subject</label>
                                                    </div>
													

                                                    <div class="form-group file-field input-field col s12">
                                                        <div class="btn">
                                                            <span>Attach Add</span>
                                                            <input type="file" name="fileformat" multiple>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Upload Add baner">
                                                        </div>
                                                    </div>
													<div class="form-group input-field col s12">
                                                        <textarea id="message" class="materialize-textarea" name="message"></textarea>
                                                        <label for="message">Message</label>
                                                    </div> 
													<!-- <div class="captch">
                                                     <img class="responsive-img" src="<?php echo base_url() . 'images/Captcha.png' ?>">
                                                       </div>
													<div class=" form-group input-field col s12">
                                                 <input id="captch" type="text" name="captcha" class="validate">
                                                  <label for="captch">Add Above Code</label>
                                                    </div>-->

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
                            </div>
                            <div id="qustion-table">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Advertise Info Table</h4>
                                            <div id="table-wrap">
                                                <div class="row">
                                                    <div class="col s12 m12 l12">
                                                        <table class="bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th data-field="id">Client Name</th>
                                                                    <th data-field="name">Email Id</th>
                                                                    <th data-field="price">Add Position</th>
                                                                    <th data-field="price">Payment Method</th>
                                                                    <th data-field="price">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>fikreman</td>
                                                                    <td>fikreman@mail.com</td>
                                                                    <td>TOP BAR</td>
                                                                    <td>M-Birr</td>
                                                                    <td>
                                                                        <a href="app-email.html" class="btn-floating blue" ><i class="small mdi-action-subject"></i></a>
                                                                        <a href="app-email.html" class="btn-floating green" ><i class="small mdi-action-done"></i></a>
                                                                        <a href="app-email.html" class="btn-floating red" ><i class="small mdi-action-highlight-remove"></i></a></td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <script type="text/javascript" src="../../js/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="../../js/materialize.js"></script>
		<script type="text/javascript" src="../../js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="../../css/bootstrapValidator.css">
<script type="text/javascript" src="../../js/bootstrapValidator.js"></script>
<script type="text/javascript" src="../../js/admin/admin-advertise.js"></script>
    </body>

</html>
<!-- <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css"> -->
