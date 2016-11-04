$(document).ready(function(){
    //alert('in');
    $.validator.setDefaults({
        ignore: []
    });

 $("#sortnews").validate({
        rules: {
            d1: {
                required: true,
               
            },
            d2: {
                required: true,
                
            }
           
        
        },
        //For custom messages
        messages: {
            d1:{
                required: "select from date",
               
            },
             d2:{
                required: "select to date",
               
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
     
