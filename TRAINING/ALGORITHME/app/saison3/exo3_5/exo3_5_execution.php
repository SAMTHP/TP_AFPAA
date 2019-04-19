<?php

$choice_1 = $_POST['choice1'];
$choice_2 = $_POST['choice2'];

if(($choice_1 * $choice_2) < 0){
    echo "Le produit des deux nombres est négatif";
}elseif(($choice_1 * $choice_2) > 0){
    echo "Le produit des deux nombres est positif";
}elseif(($choice_1 * $choice_2) == 0){
    echo "Le produit des deux nombres est nul";
}