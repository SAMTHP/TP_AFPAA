<?php

// OUVERTURE DU FICHIER EN LECTURE
$example = fopen('exemple.txt', 'r');

while(!feof($example)){
    // LECTURE
    $ligne = fgets($example);
    // CHANGEMENT DE CARACTERE
    $new_ligne= str_replace("/", " ", $ligne);
    // AFFICHAGE DU RESULTAT
    echo $new_ligne;
}
// FERMETURE DU FICHIER
fclose($example);
