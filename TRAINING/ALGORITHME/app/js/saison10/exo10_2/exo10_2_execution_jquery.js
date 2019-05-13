$("#submit").click(function () {
    // Fonction qui va lire le fichier texte
    function lireFichierTexte(fichier){
        // Récupération du texte via l'objet get de jQuery
        $.get(fichier, function(text){
            // Déclaration et initialisation de la variable qui va refactorer le texte
            var textRefactor = "";
            // Parcour des caractères dans une boucle for pour remplacer les "/" par des espaces
            for(var i = 0; i < text.length; i++){
                // Test si le caractère est un "/"
                if(text[i] == "/"){
                    // Concaténation en remplaçant le "/" par un espace
                    textRefactor += " ";
                }else {
                    // Concaténation simple
                    textRefactor += text[i];
                }
            }
            // Affichage du résultat dans la vue
            $("#result").html(textRefactor); 
        })
    }
    // Appel de la fonction
    lireFichierTexte('exemple.txt');
})