<?php

// DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LA CLE DE VIGENERE
$key = strtolower($_POST['key']);

// DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LA PHRASE A ENCODER
$sentence = strtolower($_POST['sentence']);

// CREATION DE LA FONCTION QUI VA ENCRYPTER LA PHRASE
function crytoVigenere($key,$sentence){
    // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA SAUVEGARDER LA PHRASE CRYPTE
    $crypto = "";
    
    // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RENSEIGNER L'INDEX DE LA CLE
    $index_key = 0;

    // BOUCLE SUR TOUTE LA LONGUEUR DE LA PHRASE
    for($i=0;$i<strlen($sentence);$i++){
        // TEST SI L'INDEX DE LA CLE EST EGAL A LA LONGUEUR DE LA CLE
        if($index_key == strlen($key)){
            // SI LE TEST EST VALIDE, ON REINITIALISE L'INDEX DE LA CLE
            $index_key = 0;
        }
        // TESI SI LE CODE ASCII EST DIFFERENTE DE 32 (ESPACE)
        if(ord($sentence[$i]) != 32){
            // DECLARATION ET INITIALISATION DE LA VARIABLE QUI RENSEIGNE LE CODE ASCII DE LA LETTRE DE LA PHRASE
            $ascii_sentence = ord($sentence[$i]);
            // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA STOCKER LE CODE ASCII DE LA LETTRE A (EN MINUSCULE)
            $ascii_a = ord("a");
            // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RENSEIGNER LE RANG DE LA LETTRE DE LA PHRASE
            $pos = $ascii_sentence - $ascii_a;
            // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RENSEIGNER LE CODE ASCII DE LA LETTRE DE LA CLE
            $ascii_key = ord($key[$index_key]);
            // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA GENERER LE CODE ASCII DE LA NOUVELLE LETTRE CRYPTEE
            $decalage = $pos + $ascii_key;
            // INCREMENTATION DE L'INDEX DE LA CLE
            $index_key++;
        }else{
            // AFFECTATION DE LA VARIABLE DECALAGE A 32 SI L'ELEMENT EST UN ESPACE
            $decalage = 32; 
        }
        // TEST SI LE CODE ASCII EST SUPERIEUR A 22
        if($decalage > 122){
            // SI LE TEST EST VALIDE ON RECUPERE LA DIFFERENCE POUR REPARTIR DU DEBUT DE L'ALPHABET
            $decalage = ($decalage - 122) + ord("a")-1;
        }
        // CONCATENATION PAR INCREMENTATION DE LA VARIABLE CRYPTO
        $crypto .= chr($decalage);
        
    }

    // AFFICHAGE DU RESULTAT
    echo $crypto;
}

// APPEL DE LA FONCTION
crytoVigenere($key,$sentence);