
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
                required: "Select que type",
               
            },
             subject:{
                required: "select  Subject",
               
            },
            
            question:{
                required: "you must ask yor question",
               
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
     
