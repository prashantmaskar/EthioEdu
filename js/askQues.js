
$(document).ready(function(){
    //alert('in');
    $.validator.setDefaults({
        ignore: []
    });

 $("#askque").validate({
        rules: {
            quetype: {
                required: true,
               
            },
            subject: {
                required: true,
                
            },
            question: {
                required: true,
               
            }
            
        },
        //For custom messages
        messages: {
            quetype:{
                required: "Select question type",
               
            },
             subject:{
                required: "Select  Subject",
               
            },
            
            question:{
                required: "Ask a question",
               
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
     
