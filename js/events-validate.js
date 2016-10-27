$(document).ready(function() {

    $('#postevent').bootstrapValidator({
        
        fields: {
            event_name: {
                validators: {
                    notEmpty: {
                        message: 'Please enter event name!!!..'
                    }
                }
            },
             event_title: {
                validators: {
                    notEmpty: {
                        message: 'Please enter event title!!!..'
                    }
                }
            },
               subject: {
                validators: {
                    notEmpty: {
                        message: 'Please enter subject!!!..'
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

                   attach: {
                validators: {
                    notEmpty: {
                        message: 'Please attach file!!!..'
                    }
                }
            },
             postedby: {
                validators: {
                    notEmpty: {
                        message: 'Please enter subject!!!..'
                    }
                }
            },
 
        }
    });
});