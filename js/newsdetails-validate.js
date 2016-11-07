  $(document).ready(function(){
    //alert('in');
    $.validator.setDefaults({
        ignore: []
    });

 $("#newsdetails").validate({
        rules: {
            
            username:{
            
                required: true
                
               
            },

            comment:{
                required:true,
                  minlength: 15
                   }
           
        },
        
        messages:{
            username:{
                required:"enter username",
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