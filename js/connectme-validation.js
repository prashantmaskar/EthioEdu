

$(document).ready(function(){
    //alert('in');
    $.validator.setDefaults({
        ignore: []
    });

 $("#connectme").validate({
        rules: {
            
            choiceage:{
            
                required: true
               
            },
             institutions:{
                required:true
            },
            level:{
                required:true
            },
            interest:{
                required:true
            }
           
        },
        message:{
            choiceage:{
                required:"enter choiceage"
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
        message:{
            choiceage:{
                required:"enter user name"
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
     

