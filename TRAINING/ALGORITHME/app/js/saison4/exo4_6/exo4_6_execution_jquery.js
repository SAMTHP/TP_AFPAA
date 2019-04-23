$("#submit").click(function () {
    var candidat_1 = $('#score-1').val();

    var candidat_2 = $('#score-2').val();

    var candidat_3 = $('#score-3').val();

    var candidat_4 =  $('#score-4').val();
    
    if(candidat_1 >= 50){
        $('#result').text("Le premier candidat a obtenu "+candidat_1+" % des voix et est donc élu dès le premier tour !");
    } else if(candidat_1 < 12.5 ){
        $('#result').text("Le premier candidat est battu car il a obtenu moins de 12.5 voix (Voix collectées : "+candidat_1+")");
    } else if (candidat_1 > candidat_4 && candidat_1 > candidat_3 && candidat_1 > candidat_4 ){
        $('#result').text("Le premier candidat est retenu pour le second tour et se trouve être le favoris");
    } else{
        $('#result').text("Le premier candidat est retenu pour le second tour et se trouve être dans une position défavorable");
    }
})