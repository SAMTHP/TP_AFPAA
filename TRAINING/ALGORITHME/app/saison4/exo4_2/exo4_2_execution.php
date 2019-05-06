<?php

$hour = $_POST['hour'];
$min = $_POST['minutes'];

function generateFuture($hour,$min){
    $new_min = $min + 1;
    $array_future = [];

    if($new_min >= 60){
        $rest = $new_min - 60;
        $new_hour = $hour += 1;
        if($new_hour == 24){
            $new_hour = 0;
        } elseif($new_hour > 24){
            $new_hour = 1;
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
    if($array[1] < 10){
        if($array[0] < 10) {
            echo "0".$array[0] . "H" . "0" . $array[1];
        } else {
            echo $array[0] . "H" . "0" . $array[1];
        }
    } else {
        echo $array[0]."H".$array[1];
    }
}

$array_future = generateFuture($hour,$min);
showNewHour($array_future);

