<?php

$sentence = "On va voir si ça marche";

// DECLARATION ET INITIALISAITON DE LA VARIABLE QUI VA RECUPERER LA PHRASE
$sentence = trim($_POST['sentence']);

// CREATION D'UNE FONCTION QUI RENVOIE LE NOMBRE DE MOTS DANS UNE PHRASE
function countWords($sentence){
    // DECLARATION DU TABLEAU VA QUI VA RECUPERER LE NOMBRE DE MOTS
    $array_word = [];
    // AFFECTATION DU TABLEAU
    $array_word = explode(" ", $sentence);
    // CALCUL DU NOMBRE DE MOTS
    $count_words = count($array_word);
    // AFFICHAGE DU RESULTAT
    echo "Votre phrase contient $count_words mot(s).";
}

// APPEL DE LA FONCTION
countWords($sentence);
