<?php

$tab = array('world','hello','good');
echo "TABLEAU INITIAL \n";
$element = readline("Entrez la valeur à supprimer");
for($i=0;$i<count($tab);$i++){
    if($tab[$i] == $element){
        unset($tab[$i]);
    }
}

print_r($tab);
