<?php
// DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LA PHRASE
$sentence = "Tu peux supprimer une de mes lettres, mais seulement pour cette fois";

// DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER L'INDEX
$index = $_POST['number'];

// TEST SI LE RANG DEMANDE CORRESPOND A UNE LETTRE EXISTENTE
if($sentence[$index]){
    // SUPPRESION DE L'ELEMENT SELECTIONNE
    $sentence = str_replace($sentence[$index],'',$sentence);
    // AFFICHAGE DE LA PHRASE MODIFIE
    echo $sentence;
} else {
    // DECLARATION ET INITIALISATION DU MESSAGE D'ERREUR
    $message = "La valeur que vous avez demandé n'existe pas";
    // AFFICHAGE DU MESSAGE D'ERREUR
    echo $message;
}