
$('#presentation').click(function(){
    $.get("view/presentation.html", function(html){
        console.log(html);
        $("section").html(html);
    });
});

$('#methodologie').click(function(){
    $.get("view/methodologie.html", function(html){
        console.log(html);
        $("section").html(html);
    });
});

$('#culture').click(function(){
    $.get("view/culture.html", function(html){
        console.log(html);
        $("section").html(html);
    });
});

$('#offre').click(function(){
    $.get("view/offre.html", function(html){
        console.log(html);
        $("section").html(html);
    });
});