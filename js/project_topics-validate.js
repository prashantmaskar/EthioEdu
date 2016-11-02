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

