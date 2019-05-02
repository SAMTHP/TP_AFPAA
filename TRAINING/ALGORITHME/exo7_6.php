<?php
$tab = [-2,-15,55,12,15,-1,13];
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

echo $max."\n";
echo $min."\n";

echo $gap;
