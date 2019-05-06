document.getElementById("submit").onclick = function () {
    // DECLARATION ET INITIALISAITON DE LA VARIABLE QUI VA RECUPERER LE MOT
    var word = (document.getElementById('word').value).trim();

    // CREATION D'UNE FONCTION QUI RENVOIE LE NOMBRE DE LETTRES D'UN MOT
    function showLength(str){
        // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LE NOMBRE DE LETTRES
        var str_length = str.length;
        // AFFICHAGE DU RESULTAT
        document.getElementById('result').innerText = "Votre mot contient "+str_length+" lettres.";
    }

    // APPEL DE LA FONCTION
    showLength(word);
}