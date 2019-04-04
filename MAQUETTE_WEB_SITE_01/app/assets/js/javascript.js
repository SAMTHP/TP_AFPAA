
$(document).ready(function(){
    //$('#page').css('height', window.innerHeight);
    //$('#page').css('height', window.innerHeight-150);
    $('body').css('height', window.innerHeight);
    $('body').css('height', window.innerHeight-150);
    $.get("view/presentation.html", function(html){
        console.log(html);
        $("section").html(html);
    });

});
