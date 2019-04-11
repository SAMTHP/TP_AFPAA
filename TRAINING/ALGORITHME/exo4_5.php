<?php
$age = readline("Donnes moi ton âge : \n");
$sexe = readline("Quel est votre sexe ? (h/f) \n");

if($sexe == "h" && $age >= 20){
    echo "Vous êtes imposable !";
} elseif($sexe == "f" && $age >= 18 && $age <= 35){
    echo "Vous êtes imposable !";
} else {
    echo "Vous n'êtes pas imposable !";
}