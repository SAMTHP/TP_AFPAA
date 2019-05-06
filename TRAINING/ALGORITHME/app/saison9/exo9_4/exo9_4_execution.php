<?php

// DECLARATION ET INITIALISAITON DE LA VARIABLE QUI VA RECUPERER LA PHRASE
$sentence = trim($_POST['sentence']);

// DECLARATION ET INITIALISATION DU TABLEAU QUI VA CONTENIR LES VOYELLES
$vowel = ["a","e","i","o","u","y"];

// CREATION D'UNE FONCTION QUI RENVOIE LE NOMBRE DE MOTS DANS UNE PHRASE
function countVowel($vowel,$sentence){
    // DECLARATION ET INITIALISATION DU COMPTEUR A ZERO
    $count = 0;
    // PREMIERE BOUCLE SUR LES VOYELLES
    for($e=0;$e<count($vowel);$e++){
        // SECONDES BOUCLES SUR CHAQUE LETTRE
        for($i = 0;$i<strlen($sentence);$i++){
            // TEST SI LA LETTRE ANALYSE EST EGALE A L'UNE DES VOYELLES
            if($sentence[$i] == $vowel[$e]){
                // INCREMENTATION DU COMPTEUR
                $count++;
            }
        }
    }

    // AFFICHAGE DU RESULTAT
    echo "Votre phrase contient $count voyelles.";
    
}

// APPEL DE LA FONCTION
countVowel($vowel,$sentence);
