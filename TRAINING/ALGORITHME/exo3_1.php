<?php
$choice = readline("Ecrivez un nombre : ");

if($choice < 0){
    echo "Votre nombre est négatif";
}elseif($choice > 0){
    echo "Votre nombre est positif";
}elseif($choice == 0){
    echo "Pas compris :(";
}