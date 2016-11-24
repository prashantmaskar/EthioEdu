

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
            /*interest: {
                required: true,
               
            }*/
        
        },
        //For custom messages
        messages: {
            quetype:{
                required: "Select age",
               
            },
             subject:{
                required: "select  institutions",
               
            },
             question:{
                required: "select level",
               
            }
           /* interest:{
                required: "select interest",
               
            }*/
        },
        //For custom messages
       errorClass:"invalid form-error",
        errorElement : 'div',
        errorPlacement: function(error, element) {
          error.appendTo( element.parent() );
          }
        
     });
});
     


$(document).ready(function(){
    //alert('in');
    $.validator.setDefaults({
        ignore: []
    });

 $("#userform").validate({
        rules: {
            
            username:{
            
                required: true
               
            }
           
        },
        
        messages:{
            username:{
                required:"enter username",
            }
        },



       errorClass:"invalid form-error",
        errorElement : 'div',
        errorPlacement: function(error, element) {
          error.appendTo( element.parent() );
          }
        
     });
});
     

