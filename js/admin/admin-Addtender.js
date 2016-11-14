$(document).ready(function() {
  

    $('#postvacancyform').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            title: {
                validators: {
                    notEmpty: {
                        message: ' please enter caption!!!..'
                    }
                }
            },

            sname: {
                validators: {
                    notEmpty: {
                        message: ' you must enter name!!!..'
                    }
                }
            },


            vcount: {
                validators: {
                    notEmpty: {
                        message: ' please enter no of vacuncy !!!..'
                    }
                   
                }
            },
             
            sdate: {
                validators: {
                    notEmpty: {
                        message: ' date can not be Empty!!!..'
                    }
                }
            },
                edate: {
                validators: {
                    notEmpty: {
                        message: ' date can not be Empty!!!..'
                    }
                }
            },
               
               
         vdesc:{
                validators:{
                    notEmpty:{
                        message:  ' Description required!!!'
                    },
                    stringLength:{
                        message:'post Description must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
             




             }
    });
});