// const { data } = require("jquery");

$(document).ready(function(e){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let $loading = $('.ajax-loader');
    $(document)
    .ajaxStart(function () {
        $loading.removeClass('d-none');
    })
    .ajaxStop(function () {
        $loading.addClass('d-none');
    });

    $('#login-submit').on('click', function(e){

        $('#login-user').serialize();

        $.ajax({

            type: 'POST',
            url: $('#login-user').attr('action'),
            dataType: 'json',
            data: $('#login-user').serialize(),
            success: function(response){
                
                window.location.replace(response.redirection_url);

            },
            error: function (err) {
                console.log(err);
                // $('#email_error').removeClass('d-none').text(err.responseJSON.errors.email);

            }

        });

    });


    $('#user_register').on('submit', function(e){
        e.preventDefault();
        
        var form_data = new FormData(this);

        $.ajax({

            type: 'POST',
            url: $(this).data('action'),
            data: form_data,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response){

                if(response.success){

                    window.location.replace(response.redirect_url);

                }

            },
            error: function(err){

                $.each(err.responseJSON.errors, function(key, value){
                    console.log(key);
                    $(`#user_register #${key}_error`).html(value).show();

                });

            }
                
        })
        

    });

    $('#logout-user').on('click', function(e){

        e.preventDefault();

        $('#logout-form').submit();

    });
    
    $('#resend-email-verification').on('click', function(e){

        $.ajax({

            type: 'GET',
            url: '/email/resend',
            dataType: 'json',
            success: function(response){

                if(response.success){

                    Swal.fire({
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500
                      })

                }else{

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.message,
                      })

                }

            }

        })

    });

    $('#upload-btn').on('click', function(e){

        $('#profile-upload').click();

    });

    $('#register-upload-btn').on('click', function(e){

        $('#register-upload').click();

    });

    $('#profile-upload').on('change', function(e){

        const file = $('#profile-upload')[0].files[0];
        form_data = new FormData();
        form_data.append('image', file);

        $.ajax({

            type: 'POST',
            url: '/student/ajax/update-picture',
            data: form_data,
            processData: false,
            contentType: false,
            success: function(response){

                $('#student-profile').attr('src', URL.createObjectURL(file));

                Swal.fire({
                    icon: 'success',
                    title: 'Upload Success',
                    showConfirmButton: false,
                    timer: 1500
                  })

            },
            error: function(err){

                console.log(err);

            }

        });
       
    });

    $('#register-upload').on('change', function(e){

        const file = $('#register-upload')[0].files[0];

        if(file){

            $('#register-profile').attr('src', URL.createObjectURL(file));
            
        }
       
    });

});