$(document).ready(function() {

    $('#addevent').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            event_name: {
                validators: {
                    notEmpty: {
                        message: 'Please write event_name!!!..'
                    }
                }
            },
              event_tital: {
                validators: {
                    notEmpty: {
                        message: ' please write event title!!!..'
                    }
                }
            },
 
                Description:{
                validators:{
                    notEmpty:{
                        message:  ' Description required!!!'
                    },
                    stringLength:{
                        message:'post Description must be less than 100 characters',
                        max:function(value,validator,$field){
                            return 100 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
 
              
                  uploadimg: {
                validators: {
                    notEmpty: {
                        message: ' please attach imagee!!!..'
                    }
                }
            },
 
               
                  upload: {
                validators: {
                    notEmpty: {
                        message: ' you must upload file!!!..'
                    }
                }
            },
                 
                  eventby: {
                validators: {
                    notEmpty: {
                        message: ' must write!!!..'
                    }
                }
            },
 




        }
    });
});