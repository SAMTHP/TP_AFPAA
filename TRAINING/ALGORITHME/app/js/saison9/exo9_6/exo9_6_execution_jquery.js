$("#submit").click(function () {
    // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA STOCKER LA PHRASE DE DEPART
    var sentence = $('#sentence').val();

    // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LES VALEURS CRYPTE
    var crypto = "";

    // BOUCLE QUI VA TRANSOFRMER TOUS LES CARACTERES AVEC LEURS VALEURS ASII
    for(var i=0;i<sentence.length;i++){
        // DECLRATION ET INITIALISATION DE LA VARIABLE QUI VA CONVERTIR CHAQUE CARACTERE EN ASCII
        var asc = sentence.charCodeAt(i);
        // TEST SI LES CARACTERES NE SONT PAS DES ESPACES
        if(sentence.charCodeAt(i) != 32){
            // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA MODIFIER TOUTES LES VALEURS ASCII
            var decalage = asc + 1;
        } else {
            // AUCUNES MODIFICATION SI L'ELEMENT ANALYSE EST UN ESPACE
            var decalage = asc;
        }
        // AFFECTATION DE LA VARIABLE CRYPTO PAR UNE CONCATENATION QUI S'INCREMENTE DE LA VALEUR ASCII MODIFIE A CHAQUE TOUR
        crypto += String.fromCharCode(decalage);
    }

        // AFFICHAGE DE LA PHRASE D'ORIGINE
        $('#sentence-first').html("<strong>Phrase d'origine : </strong>"+sentence+"</span>");
        // AFFICHAGE DE LA PHRASE MODIFIE
        $('#crypto').html("<strong>Phrase modifiée : </strong>"+crypto+"</span>");
})