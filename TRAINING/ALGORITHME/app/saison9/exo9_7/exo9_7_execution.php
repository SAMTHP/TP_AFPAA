<?php

// DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LE NOMBRE
$num = $_POST['num'];

// TEST SI LE NOMBRE EST IMPAIR
if($num % 2 == 0){
    // AFFICHAGE DU RESULTAT
    echo "Ce nombre est pair";
}else{
    // AFFICHAGE DU RESULTAT
    echo "Ce nombre est impair";
}