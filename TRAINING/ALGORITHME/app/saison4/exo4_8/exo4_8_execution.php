<?php

$day = $_POST['day'];

$month = $_POST['month'];

$year = $_POST['year'];

// ANALYZE OF YEAR IN ORDER TO KNOW IF IS LEAP YEAR OR NO
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
    } elseif ($day > 31){
        echo "La date est non valide";
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