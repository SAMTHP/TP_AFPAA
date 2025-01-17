document.getElementById('result').style.display = "none";

document.getElementById("submit").onclick = function () {
    // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LA CLE DE VIGENERE
    var key = (document.getElementById('key').value).toLowerCase();

    // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LA PHRASE A ENCODER
    var sentence = (document.getElementById('sentence').value).toLowerCase();

    // CREATION DE LA FONCTION QUI VA ENCRYPTER LA PHRASE
    function crytoVigenere(key,sentence){
        // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA SAUVEGARDER LA PHRASE CRYPTE
        var crypto = "";
        
        // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RENSEIGNER L'INDEX DE LA CLE
        var index_key = 0;

        // BOUCLE SUR TOUTE LA LONGUEUR DE LA PHRASE
        for(var i=0;i<sentence.length;i++){
            // TEST SI L'INDEX DE LA CLE EST EGAL A LA LONGUEUR DE LA CLE
            if(index_key == key.length){
                // SI LE TEST EST VALIDE, ON REINITIALISE L'INDEX DE LA CLE
                var index_key = 0;
            }
            // TESI SI LE CODE ASCII EST DIFFERENTE DE 32 (ESPACE)
            if(sentence.charCodeAt(i) != 32){
                // DECLARATION ET INITIALISATION DE LA VARIABLE QUI RENSEIGNE LE CODE ASCII DE LA LETTRE DE LA PHRASE
                var ascii_sentence = sentence.charCodeAt(i);
                // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA STOCKER LE CODE ASCII DE LA LETTRE A (EN MINUSCULE)
                var a = "a";
                var ascii_a = a.charCodeAt(0);
                // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RENSEIGNER LE RANG DE LA LETTRE DE LA PHRASE
                var pos = ascii_sentence - ascii_a;
                // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RENSEIGNER LE CODE ASCII DE LA LETTRE DE LA CLE
                var ascii_key = key.charCodeAt(index_key);
                // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA GENERER LE CODE ASCII DE LA NOUVELLE LETTRE CRYPTEE
                var decalage = pos + ascii_key;
                // INCREMENTATION DE L'INDEX DE LA CLE
                index_key++;
            }else{
                // AFFECTATION DE LA VARIABLE DECALAGE A 32 SI L'ELEMENT EST UN ESPACE
                decalage = 32; 
            }
            // TEST SI LE CODE ASCII EST SUPERIEUR A 22
            if(decalage > 122){
                // SI LE TEST EST VALIDE ON RECUPERE LA DIFFERENCE POUR REPARTIR DU DEBUT DE L'ALPHABET
                decalage = (decalage - 122) + ascii_a-1;
            }
            // CONCATENATION PAR INCREMENTATION DE LA VARIABLE CRYPTO
            crypto += String.fromCharCode(decalage);
            
        }

        // AFFICHAGE DU RESULTAT
        document.getElementById('crypto').innerText = crypto;

        document.getElementById('result').style.display = "block";
    }

    // APPEL DE LA FONCTION
    crytoVigenere(key,sentence);
    
}