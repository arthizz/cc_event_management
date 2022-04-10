$(document).ready(function(){
    "use strict";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#admin-add-department-form').on('submit', function(e){

        e.preventDefault();

        let action = $(this).data('action');
        let form_data = new FormData(this);

        $.ajax({

            type: 'POST',
            url: action,
            data: form_data,
            dataType: 'html',
            processData: false,
            contentType: false,
            success: function(response){

                $('#department-list-tbl').empty().html(response);

            },
            error: function(err){
                console.log(err);
                $.each(err.responseJSON.message, function(key, value){
                    console.log(value);
                    $(`#admin-add-department-form #${key}_error`).html(value).show();

                });

            }

        })

    });

});