
function markNotificationAsRead(notificationCount) {
   
    if(notificationCount !=='0'){

        $.get( "markAsRead", function(  ) {
            $("#badge-notification").html("0");
        });

        
    }

}


setInterval(function(){

    $.get( "tosca", function( data ) {
            $("#badge-notification").html(data);
        });

}, 10000);