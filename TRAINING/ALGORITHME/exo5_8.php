<?php

$array_num = [];
for($i=1;$i<=20;$i++){
    $num = readline("Choisisser le $i nombre : \n");
    array_push($array_num, $num);
}

$max = 0;

for($i=0;$i<count($array_num);$i++){
    if($i > 0 && ($array_num[$i] > $array_num[$i-1]) ){
        if($max > $array_num[$i]){
            $max = $max;
        } else {
            $max = $array_num[$i];
        }
    }elseif($i > 0 && $array_num[$i-1] > $array_num[$i]){
        if($max > $array_num[$i-1]){
            $max = $max;
        } else {
            $max = $array_num[$i-1];
        }
    }
}

echo "\n";
echo "La valeur la plus haute que vous avez renseigné est ".$max."\n";
//echo "La valeur la plus haute que vous avez renseigné est ".max($array_num)."\n";

foreach($array_num as $key => $value){
    if($value == $max){
        $pos = $key + 1;
        echo "Ce nombre a été saisi à la ". $pos ."° position\n";
    }
}