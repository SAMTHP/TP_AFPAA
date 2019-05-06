<?php

// DECLARATION ET INITIALISAITON DE LA VARIABLE QUI VA RECUPERER LE MOT
$word = trim($_POST['word']);

// CREATION D'UNE FONCTION QUI RENVOIE LE NOMBRE DE LETTRES D'UN MOT
function showLength($str){
    // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LE NOMBRE DE LETTRES
    $str_length = strlen($str);
    // AFFICHAGE DU RESULTAT
    echo "Votre mot contient $str_length lettres.";
}

// APPEL DE LA FONCTION
showLength($word);