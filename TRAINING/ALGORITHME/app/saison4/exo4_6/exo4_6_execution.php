<?php

$candidat_1 = $_POST['score-1'];

$candidat_2 = $_POST['score-2'];

$candidat_3 = $_POST['score-3'];

$candidat_4 =  $_POST['score-4'];

if($candidat_1 >= 50){
    echo "Le premier candidat a obtenu $candidat_1 % des voix et est donc élu dès le premier tour !";
} elseif($candidat_1 < 12.5 ){
    echo "Le premier candidat est battu car il a obtenu moins de 12.5 voix (Voix collectées : $candidat_1)";
} elseif ($candidat_1 > $candidat_4 && $candidat_1 > $candidat_3 && $candidat_1 > $candidat_4 ){
    echo "Le premier candidat est retenu pour le second tour et se trouve être le favoris";
} else{
    echo "Le premier candidat est retenu pour le second tour et se trouve être dans une position défavorable";
}