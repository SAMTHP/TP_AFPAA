$("#submit").click(function () {
    var choice = parseInt($('#choice').val());

    var show = "";
    $('#sentence').text("Les dix prochains nombres sont : ");
    for(var i = 1;i<=10;i++){
        choice += 1;
        show += choice + " ";
    }

    $('#result').text(show);
    
})