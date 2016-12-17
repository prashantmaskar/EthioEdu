$(document).ready(function() {

    $('#enquiryform').bootstrapValidator({
        
        fields: {
            
            school: {
                validators: {
                    notEmpty: {
                        message: ' please enter school name!!!..'
                    }
					
                }
            },
            fullname:{
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
			address:{
                validators:{
                    notEmpty:{
                        message:  ' address required!!!'
                    }
                    /*stringLength:{
                        message:'post adddress must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }*/
                }
             },
            
             /*phone_number: {
                validators: {
                    digits:{
                         message:'contact number is invalid'

                    },
                    stringLength: {
                        min:10,
                        max: 10,
                        message: 'contact number must contains 10 digits'
                    }
                }
            },*/
             subject:{
                    validators:{
                        notEmpty:{
                            message:'please enter subject!!'
                        }
                    }
            },
             enquirybox:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter academic requierement descreeption !!!'
                    },
                    stringLength:{
                        message:'post descreeption must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
            
           
			 
                   
              
          
      
        }
    });
});