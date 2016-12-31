
$(document).ready(function () {
    //alert('in');

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