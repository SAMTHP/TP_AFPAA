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
}

print_r($array_notes);

