$("#submit").click(function () {
    // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LE NOMBRE
    var num = parseInt($('#num').val());

    // TEST SI LE NOMBRE EST IMPAIR
    if(num % 2 == 0){
        // AFFICHAGE DU RESULTAT
        $('#result').html("Ce nombre est pair");
    }else{
        // AFFICHAGE DU RESULTAT
        $('#result').html("Ce nombre est impair");
    }
})