$(function() {
    console.log( "ready!" );

    $.ajax({
        url: "ip.php",
    }).done(function(data) {
        alert(data);
    });
});