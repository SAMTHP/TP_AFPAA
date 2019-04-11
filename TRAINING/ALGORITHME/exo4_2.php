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

function generateFuture($hour,$min){
    $new_min = $min + 1;
    $array_future = [];

    if($new_min >= 60){
        $rest = $new_min - 60;
        $new_hour = $hour += 1;
        if($new_hour > 24){
            $new_hour = 0;
        }
        array_push($array_future, $new_hour, $rest);
    } else {
        array_push($array_future, $hour, $new_min);
    }
    return $array_future;
}

function showNewHour($array){
    echo "\n";

    echo "Dans une minute il sera : ";
    echo $array[0]."H".$array[1];
}

$hour = setHour();
$min = setMinutes();
$array_future = generateFuture($hour,$min);
showNewHour($array_future);