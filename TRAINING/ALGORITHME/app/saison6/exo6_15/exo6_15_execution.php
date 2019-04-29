<?php

$tx = 1.0275;
$choice_year = $_POST['year'];
$money = $_POST['begin-money'];

$array_saving = [
    "1" => 0,"2" => 0,"3" => 0,"4" => 0,"5" => 0,
    "6" => 0,"7" => 0,"8" => 0,"9" => 0,"10" => 0,
    "11" => 0,"12" => 0,"13" => 0,"14" => 0,"15" => 0,
    "16" => 0,"17" => 0,"18" => 0,"19" => 0,"20" => 0
];

function generateSaving($tx,$money,$array_saving){
    $new_money = $money;

    for($i=0;$i<20;$i++){
        $new_money *= $tx;
        $array_saving[$i+1] = $new_money;
    }

    return $array_saving;
}

function showSaving($array_saving,$choice_year){
    $show = 0;
    foreach($array_saving as $year => $money){
        if($choice_year == $year){
            $show = $money;
        }
    }

    echo "Lors de la fin de la $choice_year ° année, vous aurez accumulé $show € ";
}

$array = generateSaving($tx,$money,$array_saving);

showSaving($array,$choice_year);
