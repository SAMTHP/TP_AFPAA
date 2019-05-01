<?php

$tab = ["126","159","355","678"];

$element = $_POST['element'];

$flag = false;

for($i=0;$i<count($tab);$i++){
    if($tab[$i] == $element){
        unset($tab[$i]);
        $flag = true;
    }
}

$message = "La valeur que vous avez demandé n'existe pas";
