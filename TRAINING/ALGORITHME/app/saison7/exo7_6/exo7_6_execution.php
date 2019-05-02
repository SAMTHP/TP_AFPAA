<?php
define('BR',"<br>");

$tab = [];

for($i=1;$i<=6;$i++){
    array_push($tab,$_POST['num-'.$i]);
}
$min = $tab[0];
$max = $tab[0];

for($i=0;$i<count($tab)-1;$i++){
    if($tab[$i] < $min){
        $min = $tab[$i];
    } elseif($tab[$i] > $max){
        $max = $tab[$i];
    }
}

$gap = $max - $min;

echo "Valeur max : $max ".BR."Valeur min : $min ".BR."Ecart le plus grand : $gap";
