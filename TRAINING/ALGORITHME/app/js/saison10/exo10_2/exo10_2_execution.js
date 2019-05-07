document.getElementById("submit").onclick = function () {
    // OUVERTURE DU FICHIER EN LECTURE
    var example = fopen('exemple.txt', 'r');

    // BOUCLE TANT QUE LA FIN DU FICHIER N'A PAS ETE ATTEINT
    while(!feof($example)){
        // LECTURE DE LA LIGNE
        $line = fgets($example);

        // REMPLACEMENT DE CARACTERE
        $new_line= str_replace("/", " ", $line);

        // AFFICHAGE DU RESULTAT
        echo $new_line;
    }
    // FERMETURE DU FICHIER
    fclose($example);

    
}