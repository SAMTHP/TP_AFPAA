<?php
$array = ["a","b","c"];

$index = count($array)-1;
foreach($array as $value){
    $array[$index] = $value;
    $index--;
}

echo "INVERSEMENT DES VALEURS:\n";
print_r($array);
echo "\n";