<?php
$array_notes = [
	"PHP" => "",
	"JS" => "",
	"JQUERY" => "",
	"HTML" => "",
	"CSS" => "",
	"SQL" => "",
	"UML" => "",
	"REACT" => "",
	"NODE" => ""
];
echo "Entrez vos notes \n";

foreach($array_notes as $key => $value){
	$note = readline("$key : \n");
	$array_notes[$key] = $note;
	$sum += $array_notes[$key];
}

$moyenne = $sum / count($array_notes);

echo "\n";
echo "Votre moyenne est de $moyenne/20 \n";


