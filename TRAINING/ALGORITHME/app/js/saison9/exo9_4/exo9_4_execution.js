document.getElementById("submit").onclick = function () {
    // DECLARATION ET INITIALISAITON DE LA VARIABLE QUI VA RECUPERER LA PHRASE
    var sentence = (document.getElementById('sentence').value).trim();

    // DECLARATION ET INITIALISATION DU TABLEAU QUI VA CONTENIR LES VOYELLES
    var vowel = ["a","e","i","o","u","y"];

    // CREATION D'UNE FONCTION QUI RENVOIE LE NOMBRE DE MOTS DANS UNE PHRASE
    function countVowel(vowel,sentence){
        // DECLARATION ET INITIALISATION DU COMPTEUR A ZERO
        var count = 0;
        // PREMIERE BOUCLE SUR LES VOYELLES
        for(var e=0;e<vowel.length;e++){
            // SECONDES BOUCLES SUR CHAQUE LETTRE
            for(var i = 0;i<sentence.length;i++){
                // TEST SI LA LETTRE ANALYSE EST EGALE A L'UNE DES VOYELLES
                if(sentence[i] == vowel[e]){
                    // INCREMENTATION DU COMPTEUR
                    count++;
                }
            }
        }

        // AFFICHAGE DU RESULTAT
        document.getElementById('result').innerText = "Votre phrase contient "+count+" voyelles.";
        
    }

    // APPEL DE LA FONCTION
    countVowel(vowel,sentence);
}