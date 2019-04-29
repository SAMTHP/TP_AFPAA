<?php

$moyenne_classe = 14;

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

foreach($array_notes as $key => $value){
    $diff = $value - $moyenne_classe;
    if($value > $moyenne_classe){
        echo "Votre note en <strong>$key</strong> est de <strong>$value</strong>, et est donc supérieur à la moyenne de la classe avec ".$diff." points en plus !<br><hr>";
    }
}



