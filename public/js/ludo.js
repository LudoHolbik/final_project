

$("#tabs input").click(function() {
    if ($(this).hasClass('checked')==false) {
        $("#tabs input").removeClass("checked");
        $(this).addClass('checked');        
    
            
        $.ajax({
            "url" : "example.php",
            "type" : "post",
            "data" : {
                
            "a" : "value"
            }
        })
        .done(function(data) {
            alert( "success" );
        })
        .fail(function(jqXHR, textStatus) {
            alert( "error" );
        })
        .always(function() {
            alert( "complete" );
        });
    

    }

});