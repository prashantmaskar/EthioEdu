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
 

                  Year: {
                validators: {
                    notEmpty: {
                        message: ' please select Year!!!..'
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