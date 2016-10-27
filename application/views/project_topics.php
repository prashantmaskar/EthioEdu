<?php  $this->load->view('header'); ?>
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
                <div class="col s12 m8 grid-example z-depth-1">
                    <div class="news_details">
                        <div class="col m12 s12">
                            <div class="page-heading-wrap">
                                <h1 class="page-heading">Post Project</h1>
                            </div>
                        </div>
                        <div class="col s12 m12 ">
                            <div class="news_add">
                               <form id="project_topic" action="#" method="post" class="col m12">
                                     <div class="form-group input-field col s12">
                                                        <input id="Project_name" name="Project_name" type="text" class="validate">
                                                        <label for="Project_name">Project Name</label>
                                                    </div>
                                     <div class="form-group input-field col s12">
                                                        <input id="course_name" name="course_name" type="text" class="validate">
                                                        <label for="course_name">Course Name</label>
                                                    </div>
                                    <div class="form-group input-field col s12">
                                       <select class="form-control browser-default" name="catagory">
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
                                 </div>
                                   
                                    <div class="form-group input-field col s12">
                                                        <select class="form-control browser-default" name="fileformat">
                                                            <option  value="File Format">File Format</option>
                                                            <option value="Word">Word</option>
                                                            <option value="Pdf">Pdf</option>
                                                            <option value="Rtf">Rtf</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group file-field input-field col s12">
                                                        <div class="btn" name="upload1">
                                                            <span>Attach File</span>
                                                            <input type="file" multiple>
                                                        </div>
                                    <div class="col s5 offset-s5 margin-b-10">
                                        <button class="btn waves-effect waves-light" type="submit" name="action">Add
                                           
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
</div>
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
            
        </div>
        <?php $this->load->view('footer'); ?>


        <script type="text/javascript" src="../js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="../css/bootstrapValidator.css">
<script type="text/javascript" src="../js/bootstrapValidator.js"></script>
<script type="text/javascript" src="../js/admin/admin-project-topic.js"></script>


<script>
   $(document).ready(function() {

    $('#project_topic').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            Project_name: {
                validators: {
                    notEmpty: {
                        message: ' please enter the name of project!!!..'
                    }
                }
            },
              course_name: {
                validators: {
                    notEmpty: {
                        message: ' please enter cource name !!!..'
                    }
                }
            },
 

                  catagory: {
                validators: {
                    notEmpty: {
                        message: ' please select catagory!!!..'
                    }
                }
            },
 
              
                  fileformat: {
                validators: {
                    notEmpty: {
                        message: ' please select file format!!!..'
                    }
                }
            },
 
               
                  upload1: {
                validators: {
                    notEmpty: {
                        message: ' you must upload file!!!..'
                    }
                }
            },
 




        }
    });
});



</script>