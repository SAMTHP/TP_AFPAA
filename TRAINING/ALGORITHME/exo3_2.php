<?php
$choice_1 = readline("Ecrivez votre premier nombre : \n");
$choice_2 = readline("Ecrivez votre deuxième nombre : \n");

if(($choice_1 * $choice_2) < 0){
    echo "Le produit des deux nombres est négatif";
}elseif(($choice_1 * $choice_2) > 0){
    echo "Le produit des deux nombrese est positif";
}elseif(($choice_1 * $choice_2) == 0){
    echo "Pas compris :(";
}
