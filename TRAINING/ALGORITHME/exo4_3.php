<?php

function setHour(){
    $hour = readline("Entrez l'heure de 0 à 24 : \n");

    // Gestion des erreurs
    if($hour < 0 || $hour > 24){
        echo "Heure non valide, fin du programme ! \n";
        die;
    }
    return $hour;
}

function setMinutes(){
    $min = readline("Entrez les minutes de 0 à 100 : \n");

    // Gestion des erreurs
    if($min < 0 || $min > 100){
        echo "Minutes non valides, fin du programme ! \n";
        die;
    }
    return $min;
}

function setSecondes(){
    $sec = readline("Entrez les secondes de 0 à 100 : \n");

    // Gestion des erreurs
    if($sec < 0 || $sec > 100){
        echo "Secondes non valides, fin du programme ! \n";
        die;
    }
    return $sec;
}

function generateFuture($hour,$min,$sec){
    $new_sec = $sec + 1;
    $array_future = [];

    if($new_sec >= 60){
        $rest = $new_sec - 60;
        $new_min = $min += 1;
        if($new_min >= 60){
            $new_min = 0;
            $hour += 1;
        }
        array_push($array_future, $hour,$new_min,$rest);
    } else {
        array_push($array_future, $hour, $min, $new_sec);
    }
    return $array_future;
}

function showNewHour($array){
    echo "\n";

    echo "Dans une seconde il sera : ";
    echo $array[0]."H".$array[1].":".$array[2];
}

$hour = setHour();
$min = setMinutes();
$sec = setSecondes();
$array_future = generateFuture($hour,$min,$sec);
showNewHour($array_future);