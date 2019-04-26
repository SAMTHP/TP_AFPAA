<?php
$array_notes = [
    "PHP" => intval($_POST['php']),
    "JS" => intval($_POST['js']),
    "JQUERY" => intval($_POST['jquery']),
    "HTML" => intval($_POST['html']),
    "CSS" => intval($_POST['css']),
    "SQL" => intval($_POST['sql']),
    "UML" => intval($_POST['uml']),
    "REACT" => intval($_POST['react']),
    "NODE" => intval($_POST['node'])
];

$sum = 0;

foreach($array_notes as $key => $value){
	$sum += $array_notes[$key];
}

$moyenne = $sum / count($array_notes);
$moyenne = round($moyenne, 2, PHP_ROUND_HALF_UP);

echo "Votre moyenne est de $moyenne/20";
