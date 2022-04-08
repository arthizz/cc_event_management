$(document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#new-event-form').on('submit', function(e){

        e.preventDefault();
        let action = $(this).data('action');
        let form_data = new FormData(this);

        $.ajax({

            type: 'POST',
            url: action,
            data: form_data,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function(response){

                console.log(response)

            },
            error: function(err){


            }
            

        })

    })

});