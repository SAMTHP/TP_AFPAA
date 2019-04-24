$("#submit").click(function () {
    var choice = parseInt($('#choice').val());
    var result = 1;
    
    for(var i = 1;i<=choice;i++){
        result *= i;
    }

    $('#sentence').text("La factorielle de "+ choice +" est :");
    $('#result').text(result);
    
})