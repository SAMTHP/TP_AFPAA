<?php
$name_1 = readline("Ecrivez un premier nom : ");
$name_2 = readline("Ecrivez un deuxième nom : ");
$name_3 = readline("Ecrivez un troisième nom : ");

$array_names = [];

array_push($array_names, $name_1, $name_2, $name_3);

$array_sort_names = $array_names;


echo "\n";
echo "\n";

sort($array_sort_names);
//print_r($array_sort_names);
if($array_sort_names[0] == $array_names[0] && $array_sort_names[1] == $array_names[1] && $array_sort_names[2] == $array_names[2]){
    echo "Vos noms sont rangés par ordre alphabétique";
} else {
    echo "Vos noms ne sont pas rangés par ordre alphabétique";
}

