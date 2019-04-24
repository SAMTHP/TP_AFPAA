$("#submit").click(function () {
    var choice = parseInt($('#choice').val());

    $('#sentence').text("Table de "+choice);
    for(var i=1; i <=10; i++){
        var result = choice * i;
        $("#result-"+i).text(choice+" x "+i+" = "+result);
    }
    
})