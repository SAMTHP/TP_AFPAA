<?php

$hour = $_POST['hour'];
$min = $_POST['minutes'];
$sec = $_POST['secondes'];

function generateFuture($hour,$min,$sec){
    $new_sec = $sec + 1;
    $array_future = [];

    if($new_sec >= 60){
        $rest = $new_sec - 60;
        $new_min = $min += 1;
        if($new_min == 60){
            $new_min = 0;
            $hour += 1;
        } elseif($new_min > 60){
            $new_min = 1;
            $hour += 1;
        }
        array_push($array_future, $hour,$new_min,$rest);
    } else {
        array_push($array_future, $hour, $min, $new_sec);
    }
    return $array_future;
}

function showNewHour($array){
    echo "Dans une seconde il sera : ";
    if($array[2] < 10){
        if($array[1] < 10 && $array[0] < 10) {
            echo "0".$array[0].":"."0".$array[1].":0".$array[2];
        } elseif($array[1] < 10){
            echo $array[0].":"."0".$array[1].":0".$array[2];
        } elseif($array[0] < 10){
            echo "0".$array[0].":".$array[1].":0".$array[2];
        }else {
            echo $array[0].":".$array[1].":0".$array[2];
        }
    } elseif($array[0] < 10){
        echo "0".$array[0].":".$array[1].":".$array[2];
    } elseif($array[1] < 10){
        echo $array[0].":"."0".$array[1].":".$array[2];
    } else {
        echo $array[0].":".$array[1].":".$array[2];
    }
}

$array_future = generateFuture($hour,$min,$sec);
showNewHour($array_future);