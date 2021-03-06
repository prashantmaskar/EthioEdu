<?php  $this->load->view('admin/header'); ?>
        <!--start main-->
        <div id="main">
            <div class="wrapper">
         <?php  $this->load->view('admin/sidebar'); ?>
                <section id="content">
                    <div id="breadcrumbs-wrapper">
                        <!-- Search for small screen -->
                        <div class="header-search-wrapper grey hide-on-large-only hide-on-small-only">
                            <i class="mdi-action-search active"></i>
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <h5 class="breadcrumbs-title">Add Events</h5>
                                    <ol class="breadcrumbs">
                                        <li><a href="<?php echo base_url() . 'index.php/admin/dashboard' ?>">Dashboard</a>
                                        </li>
                                        
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
    if ($this->session->flashdata('message')) {
    ?>
    <div class="message flash">
      <div class="message-data">
        <p class="success-msg"><?php echo $this->session->flashdata('message'); ?></p>
        <button class="btn success-close">Close</button>
        </div>   
        </div>
    <?php
    }
?>
                    <div class="container">
                        <div class="section">
                           
                            <div class="divider"></div>
                            <div id="form-wrap">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <div class="card-panel">
                                            <h4 class="header2">Event FORM</h4>
                                            <div class="row">
                                                <form id="addevent" action"<?php echo site_url('index.php/admin/Event')?>" method="post" enctype="multipart/form-data" method="post" class="col m12">
                                                   
                                                    <div class="form-group input-field col s12">
                                                        <input id="event_tital" name="event_tital" type="text" class="validate">
                                                        <label for="event_tital">Event Title</label>
                                                    </div>
                                                     <div class="form-group input-field col s12">
                                    <input id="event_venue" name="event_venue" type="text" class="validate">
                                    <label for="Caption">Event Happening in</label>
                                </div>

                                                     <div class="form-group file-field input-field col s12">
                                                        <div class="btn">
                                                            <span>Attach Photo</span>
                                                            <input type="file"  name="avatar" multiple>
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Upload Photo">
                                                        </div>
                                                    </div>
													<div class="form-group input-field col s12">
                                                        <textarea id="Description" name="Description" class="materialize-textarea"></textarea>
                                                        <label for="Description">Description</label>
                                                    </div>
                                                    
                                                     <div class=" form-group input-field col s12">
                                                        <input id="post_by" type="text" name="post_event_date" class="datepicker " >
                                                        <label for="post_by">post event date</label>
                                                    </div>
                                                    <div class=" form-group input-field col s12">
                                                        <input id="text" type="time" name="post_event_time" class="validate">
                                                        <label for="post_event_time" position: static;>post event time</label>
                                                    </div>


                                                    <div class=" form-group input-field col s12">
                                                        <input id="post_by" type="text" name="eventby" class="validate">
                                                        <label for="eventby">Event Posted By</label>
                                                    </div>
                                                       
                                                      



                                                    <input type="hidden" name="post_type" value="event">
                                                     <input type="hidden" name="approve_status" value="0">
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
                       <?php  $this->load->view('admin/footer'); ?>

<script type="text/javascript" src="
https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css.map"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.standalone.css"></script>
<script type="text/javascript" src="<?php echo base_url().'/js/admin/admin-event.js' ?>"></script>
<script>
$('.datepicker').pickadate({
selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year
        min: new Date(),
        onSet: function () {
        $('.datepicker').siblings('small.help-block').attr('style',"display:none;")
        $('.datepicker').removeClass('invalid');
        this.close();
    }
});
</script>