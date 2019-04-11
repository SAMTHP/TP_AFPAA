<?php

$candidat_1 = readline("Score du premier candidat : \n");
$reste_voix_1 = 100 - $candidat_1;
if($candidat_1 >= 50){
    echo "Le premier candidat a obtenu $candidat_1 % des voix et est donc élu dès le premier tour !";
    die;
}elseif($candidat_1 < 12.5 ){
    echo "Le premier candidat est battu car il a obtenu moins de 12.5 voix (Voix collectées : $candidat_1)";
    die;
}
$candidat_2 = readline("Score du second candidat compris entre 0 et $reste_voix_1 : \n");
$reste_voix_2 = $reste_voix_1 - $candidat_2;
$candidat_3 = readline("Score du troisième candidat compris entre 0 et $reste_voix_2: \n");
$reste_voix_3 = $reste_voix_2 - $candidat_3;
if($reste_voix_3 == "0"){
    echo "IL ne reste plus de voix, le quatrième candidat est éliminé !";
    $candidat_4 = 0;
    die;
}
$candidat_4 = readline("Score du quatrième candidat compris entre 0 et $reste_voix_3 : \n");

if($candidat_1 > $candidat_4 && $candidat_1 > $candidat_3 && $candidat_1 > $candidat_4 ){
    echo "Le premier candidat est retenu pour le second tour et se trouve être le favoris";
}else{
    echo "Le premier candidat est retenu pour le second tour et se trouve être dans une position défavorable";
}