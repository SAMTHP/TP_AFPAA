document.getElementById("submit").onclick = function () {
    // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LA PHRASE
    var sentence = "Tu peux supprimer une de mes lettres, mais seulement pour cette fois";
    var new_sentence = "";
    // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER L'INDEX
    var index = parseInt(document.getElementById('number').value);

    // TEST SI LE RANG DEMANDE CORRESPOND A UNE LETTRE EXISTENTE
    if(sentence[index]){
        // SUPPRESION DE L'ELEMENT SELECTIONNE
        for(var i=0;i<sentence.length;i++){
            if(i != index){
                new_sentence += sentence[i];
            }
        }
        // REAFFECTATION DE LA VARIABLE SENTENCE
        sentence = new_sentence;
        // AFFICHAGE DE LA PHRASE MODIFIE
        document.getElementById('result').innerText = sentence;
    } else {
        // DECLARATION ET INITIALISATION DU MESSAGE D'ERREUR
        var message = "La valeur que vous avez demandé n'existe pas";
        // AFFICHAGE DU MESSAGE D'ERREUR
        document.getElementById('result').innerText = message;
    }
}