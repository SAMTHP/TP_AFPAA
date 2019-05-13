document.getElementById("submit").onclick = function () {
    // Fonction qui va lire le fichier texte
    function lireFichierTexte(fichier){
        //On lance la requête pour récupérer le fichier
        // Déclaration et initialisation de la variable qui va instancier une nouvelle requette
        var fichierBrut = new XMLHttpRequest();
        // Ouverture du fichier
        fichierBrut.open("GET", fichier, false);
        //On utilise une fonction sur l'événement "onreadystate"
        fichierBrut.onreadystatechange = function (){
            if(fichierBrut.readyState === 4){
                //On contrôle bien quand le statut est égal à 0
                if(fichierBrut.status === 200 || fichierBrut.status == 0){
                    //On peut récupérer puis traiter le texte du fichier
                    // Déclaration et initialisation de la variable qui va traiter le fichier
                    var texteComplet = fichierBrut.responseText;
                    // Déclaration et initialisation de la variable qui va refactorer le texte
                    var textRefactor = "";
                    // Parcour des caractères dans une boucle for pour remplacer les "/" par des espaces
                    for(var i = 0; i < texteComplet.length; i++){
                        // Test si le caractère est un "/"
                        if(texteComplet[i] == "/"){
                            // Concaténation en remplaçant le "/" par un espace
                            textRefactor += " ";
                        }else {
                            // Concaténation simple
                            textRefactor += texteComplet[i];
                        }
                    }
                    // Affichage du résultat dans la vue
                    document.getElementById('result').innerText = textRefactor;
                }
            }
        }
        fichierBrut.send(null);
    }
    
    // Appel de la fonction
    lireFichierTexte('exemple.txt');
}