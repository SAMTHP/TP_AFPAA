$("#submit").click(function () {
    var choice = parseInt($('#choice').val());
    var result = 0;
    
    for(var i = 1;i<=choice;i++){
        result += i;
    }

    $('#sentence').text("La somme des entiers de "+ choice +" :");
    $('#result').text(result);
    
})