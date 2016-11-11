$(document).ready(function(){
    //alert('in');
    $.validator.setDefaults({
        ignore: []
    });

 $("#schooldetails").validate({
        rules: {
            
            username:{
            
                required: true
               
            },
            subject:{
                required: true

            },
            comment:{
                required: true,
                minlength:5
            }
           
        },
        
        messages:{
            username:{
                required:"enter username",
            },
            subject:{
                required:"enter Subject"
            },
            comment:{
                required:"please give some comment"
            }
        },



       errorClass:"invalid form-error",
        errorElement : 'div',
        errorPlacement: function(error, element) {
          error.appendTo( element.parent() );
          }
        
     });
});