/*$(document).ready(function() {
  //alert('in');


    $('#comment_form').bootstrapValidator({

 alert('in');
       
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        /*fields: {
            comment_name: {
                validators:{
                    notEmpty:{
                        message:'Name required'
                    }
                    
                }
            },
            comment_body:{
                validators:{
                    notEmpty:{
                        message:  ' please enter comment !!!'
                    }
                    
                }
             }
         }
         }); 
});*/
$(document).ready(function () {
    alert('in');

$('#comment_form').validate({
    rules: {
        comment_name: {
           // minlength: 2,
            required: true
        },
        comment_body: {
            required: true,
            //email: true
        }
    },
    highlight: function (element) {
        $(element).closest('.control-group').removeClass('success').addClass('error');
    },
    success: function (element) {
        element.text('').addClass('valid')
            .closest('.control-group').removeClass('error').addClass('success');
    }
});
});