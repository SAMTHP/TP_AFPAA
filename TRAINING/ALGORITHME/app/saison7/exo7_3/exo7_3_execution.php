<?php

$array = [];

for($i=0;$i<10;$i++){
	array_push($array, $_POST['index-'.$i]);
}

$index = count($array)-1;
foreach($array as $value){
    $array[$index] = $value;
    $index--;
}


