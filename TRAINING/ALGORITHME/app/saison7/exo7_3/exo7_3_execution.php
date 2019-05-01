<?php

$array = [];

for($i=0;$i<10;$i++){
	array_push($array, $_POST['index-'.$i]);
}

$last_index = count($array)-1;
$first_index = 0;
$middle = count($array) / 2;
foreach($array as $value){
    if($first_index < $middle){
        $temp =  $array[$last_index];
        $array[$last_index] = $value;
        $array[$first_index] = $temp;
        $last_index--;
        $first_index++;
    }
}