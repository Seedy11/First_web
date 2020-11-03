$('#preloader').click(function() {z

    $.ajax({
        url: "/favicon.png/confin.php",
        type: 'POST',
        dataType: 'json',
        data: {
            children: $('#Children').val(),
            contain: $('#contain').val()
        },
        
        success: function(result) {

            console.log(result);

            }
        
        },
        error: function(jqXHR, textStatus, errorThrown) {
            // your error code
        }
    }); 


});