$("#submit").click(function () {
    // DECLARATION ET INITIALISAITON DE LA VARIABLE QUI VA RECUPERER LE MOT
    var word = ($('#word').val()).trim();

    // CREATION D'UNE FONCTION QUI RENVOIE LE NOMBRE DE LETTRES D'UN MOT
    function showLength(str){
        // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LE NOMBRE DE LETTRES
        var str_length = str.length;
        // AFFICHAGE DU RESULTAT
        $('#result').text("Votre mot contient "+str_length+" lettres.");
    }

    // APPEL DE LA FONCTION
    showLength(word);
})