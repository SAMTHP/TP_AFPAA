document.getElementById("submit").onclick = function () {
    // DECLARATION ET INITIALISAITON DE LA VARIABLE QUI VA RECUPERER LE MOT
    var sentence = (document.getElementById('sentence').value).trim();

    // CREATION D'UNE FONCTION QUI RENVOIE LE NOMBRE DE LETTRES D'UN MOT
    function countWords(sentence){
        // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LE NOMBRE DE LETTRES
        var array_word = sentence.split(' ');
        // CALCUL DU NOMBRE DE MOTS
        var count_words = array_word.length;
        // AFFICHAGE DU RESULTAT
        document.getElementById('result').innerText = "Votre mot contient "+count_words+" lettres.";
    }

    // APPEL DE LA FONCTION
    countWords(sentence);
}