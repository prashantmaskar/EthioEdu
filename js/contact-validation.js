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
 
phone_number:{
	validators:{
		notEmpty:{
                        message:'phone number is required!!!'
                    },
		digit:{
			message:'invalid Phone number!!'
		},
		 stringLength: {
                        min:10,
                        max: 10,
                        message: 'contact number must contains 10 digits'
                    }
	}
},
           

           

                
             description:{
                validators:{
                    notEmpty:{
                        message:  ' please write some messsage !!!'
                    },
                    stringLength:{
                        message:'description must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
			 captcha:{
				 validators:
				 {
					 notEmpty:
					 {
						 message:'please add above code!!!'
					 }
				 }
			 },
 
              
                 
               
                 




        }
    });
});