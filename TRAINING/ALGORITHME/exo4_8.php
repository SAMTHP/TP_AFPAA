<?php

// Demande de la date
$day = readline("Entrez le jour : \n");
if($day < 1 ){
    echo "Le jour entré n'est pas valide, fin du programme !";
    die;
}elseif($day > 31){
    echo "Le jour entré n'est pas valide, fin du programme !";
    die;
}

$month = readline("Entrez le mois : \n");
if($month < 1 ){
    echo "Le mois entré n'est pas valide, fin du programme !";
    die;
}elseif($month > 12){
    echo "Le mois entré n'est pas valide, fin du programme !";
    die;
}

$year = readline("Entrez l'année : \n");

function analyzeYear($year){
    $flag = false;

    if($year % 4 == 0 && $year % 100 != 0){
        $flag = true;
    } elseif($year % 400 == 0){
        $flag = true;
    } else{
        $flag = false;
    }

    return $flag;
}

function dateValidation($month,$day,$flag){
    if($flag){
        if($month == 2 && $day <= 29){
            echo "La date est valide";
        } elseif($month == 2 && $day > 29){
            echo "La date est non valide";
        } else {
            echo "La date est valide";
        }
    } else {
        if($month == 2 && $day <= 28){
            echo "La date est valide";
        } elseif($month == 2 && $day > 28){
            echo "La date est non valide";
        } else {
            echo "La date est valide";
        }
    }
}

$flag = analyzeYear($year);
dateValidation($month,$day,$flag);