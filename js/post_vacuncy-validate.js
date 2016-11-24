$(document).ready(function() {

    $('#postvacuncy').bootstrapValidator({
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
                    },
                    digits:{
                         message:'invalid input'

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
                        message: ' enter last date of Binding !!!..'
                    }
                }
            },
                vstatus: {
                validators: {
                    notEmpty: {
                        message: ' enter Status!..'
                    }
                }
            },


               
         vdesc:{
                validators:{
                    notEmpty:{
                        message:  ' Description required!!!'
                    }
                   /* stringLength:{
                        message:'post Description must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }*/
                }
             },
             




             }
    });
});