 $(document).ready(function() {

    $('#reportnews').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            caption: {
                validators: {
                    notEmpty: {
                        message: ' please enter caption!!!..'
                    }
                }
            },
             Description:{
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
             catagory: {
                validators: {
                    notEmpty: {
                        message: ' please select catagory !!!..'
                           
                    }
                }
            },


            upload: {
                validators: {
                    notEmpty: {
                        message: ' you must upload a photo!!!..'
                    }
                }
            },


        

            auther: {
                validators: {
                    notEmpty: {
                        message: ' please enter auther name!!!..'
                    }
                }
            },
             
            date: {
                validators: {
                    notEmpty: {
                        message: ' date can not be Empty!!!..'
                    }
                }
            },
                source_link: {
                validators: {
                    notEmpty: {
                        message: ' enter source link!!!..'
                    }
                }
            },
                p_caption: {
                validators: {
                    notEmpty: {
                        message: ' enter photo caption!!!..'
                    }
                }
            },


               
             




             }
    });
});