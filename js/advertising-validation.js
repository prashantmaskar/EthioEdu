$(document).ready(function(){
    //alert('in');
    $.validator.setDefaults({
        ignore: []
    });

 $("#advertiseform").validate({
        rules: {
            Caption: {
                required: true,
               
            },
            email: {
                required: true,
                
            },
            contact: {
                required: true,
               
            },
            catagory: {
                required: true,
               
            }
        
        },
        //For custom messages
        messages: {
            Caption:{
                required: "Enter Caption",
               
            },
             email:{
                required: "enter mail id",
               
            },
             contact:{
                required: "Enter contact no",
               
            },
            catagory:{
                required: "Select catagory",
               
            }
           
        },
        //For custom messages
       errorClass:"invalid form-error",
        errorElement : 'div',
        errorPlacement: function(error, element) {
          error.appendTo( element.parent() );
          }
        
     });
});