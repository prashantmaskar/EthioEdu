$(document).ready(function() {

    $("input[type=checkbox][name=agree]").click(function()
    {
        var ischeck=$(this).prop("checked");
        if(ischeck)
            $(this).val("agree");
        else
            $(this).val("");
    });

    $('#homeaddschoolform').bootstrapValidator({
        /*feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },*/
        fields: {
            choice: {
                validators: {
                    notEmpty: {
                        message: ' please select registration type!!!..'
                    }
                }
            },
            user_name: {
                validators: {
                    notEmpty: {
                        message: ' please enter username!!!..'
                    }
                }
            },
            fullname:{
                 validators:{
                    notEmpty:{
                        message:'please enter fullname!!!..'
                    },
                    regexp:{
                              regexp: /^[a-z\s]+$/i,
                                message: 'The full name can consist of alphabetical characters and spaces only'
                    }
                }
            },

            fileformat:{
            validators:{
                notEmpty:{
                    message:'please select an image'
                },
                 file:{
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2097152,   // 2048 * 1024
                        message: 'The selected file is not valid'
                    }
                 }
           },
        
            email:{
                validators:{
                    notEmpty:{
                         message:'Email address is required!!!'
                    },
                    emailAddress:{
                        message:'The input is Not a valid email adddress!!'
                    }
                }
            },
            schoolname:{
                    validators:{
                        notEmpty:{
                            message:'please enter school name!!'
                        }
                    }
            },
            cat: {
                validators: {
                    notEmpty: {
                        message: ' please select  school catagory!!!..'
                           
                    }
                }
            },
             choice2: {
                validators: {
                    notEmpty: {
                        message: ' please select  school university!!!..'
                           
                    }
                }
            },
             choice3: {
                validators: {
                    notEmpty: {
                        message: ' please select  institute!!!..'
                           
                    }
                }
            },
             choice4: {
                validators: {
                    notEmpty: {
                        message: ' please select  other catagory!!!..'
                           
                    }
                }
            },
             phone_number: {
                validators: {
                    notEmpty: {
                        message: 'contact required!!!..'
                    },digits:{
                         message:'contact number is invalid'

                    },
                    stringLength: {
                        min:10,
                        max: 10,
                        message: 'contact number must contains 10 digits'
                    }
                }
            },
             choice5: {
                validators: {
                    notEmpty: {
                        message: ' please select  country!!!..'
                           
                    }
                }
            },
             choice6:{
                validators:{
                    notEmpty:{
                        message:  ' please enter city!!!'
                    }
                }
             },
              choice7:{
                validators:{
                    notEmpty:{
                        message:  ' please choose region!!!'
                    }
                }
             },
               choice8:{
                validators:{
                    notEmpty:{
                        message:  ' please choose school type!!!'
                    }
                }
             },
             student_population:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter student population!!!'
                    },
                     digits:{
                         message:'population should be in digits'

                    }
                }
             },
             t_staff:{
                validators:{
                    notEmpty:{
                        message:  ' please Enter number of teaching staff!!!'
                    },
                     digits:{
                         message:'invalid number of teaching staff'

                            }
                }
             },
             non_teach:{
                validators:{
                    notEmpty:{
                        message:  ' please enter number of non_teaching staff!!!'
                    },
                     digits:{
                         message:'invalid of non_teaching staff'

                            }
                }
             },
             past_award:{
                validators:{
                    notEmpty:{
                        message:  ' please enter name of past award !!!'
                    }
                }
             },
             year:{
                validators:{
                    notEmpty:{
                        message:  ' please enter acadamic year !!!'
                    },
                    digits:{
                        message:'select year format'
                    }
                }
             },
             fee:{
                validators:{
                    notEmpty:{
                        message:  ' please enter acadamic fee !!!'
                    },
                     digits:{
                         message:'invalid acadamic fee'

                            }
                }
             },
                Admissios_pro:{
                validators:{
                    notEmpty:{
                        message:  ' please enter Admission Procedures !!!'
                    },
                   /* stringLength:{
                        message:'post Procedures content must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }*/
                }
             },
             Description:{
                validators:{
                    notEmpty:{
                        message:  ' please enter academic requierement descreption !!!'
                    },
                    stringLength:{
                        message:'descreption must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
             scolership:{
                validators:{
                    notEmpty:{
                        message:  ' please enter scholarship!!!'
                    }
                }
             },
           address:{
                validators:{
                    notEmpty:{
                        message:  ' please enter address!!!'
                    },
                    stringLength:{
                        message:'adddress must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
                   website:{
                validators:{
                    uri:{
                        message:  ' website address is not valid!!!'
                    },
                    notEmpty:{
                         message:'enter website address'
                    }
                }
             },
              tell_us:{
                validators:{
                    notEmpty:{
                        message:  ' please tell us about yourself  !!!'
                    },
                    stringLength:{
                        message:'information must be less than 120 characters',
                        max:function(value,validator,$field){
                            return 120 - (value.match(/\r/g) || []).length;
                        }
                    }
                }
             },
          
      password: {
                validators: {
                    notEmpty: {
                        message: 'The password cannot be empty'
                    },
                    identical: {
                        field: 'cpassword',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            cpassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password cannot be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
           captcha:{
               validators:{
                notEmpty:{
                    message:'enter the above captcha code'
                }
               }
           },
           agree: {
                validators: {
                    notEmpty: {
                        message: 'You must agree with the terms and conditions'
                    }
                }
            }
        }
    });
});