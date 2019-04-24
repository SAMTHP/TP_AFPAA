$("#submit").click(function () {
    var choice = parseInt($('#choice').val());

    var i = 1;
    var show = "";
    $('#sentence').text("Les dix prochains nombres sont : ");
    while(i<=10){
        choice += 1;
        show += choice + " ";
        i++;
    }

    $('#result').text(show);
    
})