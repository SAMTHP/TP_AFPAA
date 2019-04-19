<?php

$name_1 = $_POST['choice1'];
$name_2 = $_POST['choice2'];
$name_3 = $_POST['choice3'];

$array_names = [];

array_push($array_names, $name_1, $name_2, $name_3);

$array_sort_names = $array_names;

sort($array_sort_names);

if($array_sort_names[0] == $array_names[0] && $array_sort_names[1] == $array_names[1] && $array_sort_names[2] == $array_names[2]){
    echo "Vos noms sont rangés par ordre alphabétique";
} else {
    echo "Vos noms ne sont pas rangés par ordre alphabétique";
}
