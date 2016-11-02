  $(document).ready(function() {

    $('#contactform').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            full_name: {
                validators:{
                    notEmpty:{
                        message:'full name required'
                    },
                    regexp:{
                              regexp: /^[a-z\s]+$/i,
                                message: 'The full name can consist of alphabetical characters and spaces only'
                    }
                }
            },
              email:{
                validators:{
                    notEmpty:{
                         message:'Email address is required!!!'
                    },
                    emailAddress:{
                        message:'The input is not a valid email adddress!!'
                    }
                }
            },
 

           community : {
                validators: {
                    notEmpty: {
                        message: ' please select community!!!..'
                    }
                }
            },

            msg_cate:{
            	validators:{
            		notEmpty:{
            			message:'please select community'
            		}
            	}
            },

                  subject: {
                validators: {
                    notEmpty: {
                        message: ' please enter subject!!!..'
                    }
                }
            },
             message:{
                validators:{
                    notEmpty:{
                        message:  ' please write some messsage !!!'
                    },
                    stringLength:{
                        message:'post descreeption must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
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