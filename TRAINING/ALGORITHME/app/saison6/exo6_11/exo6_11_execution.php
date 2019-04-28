<?php
$array_1 = [];
$array_2 = [];

for($i=1;$i<=4;$i++){
    array_push($array_1, $_POST['tab1_'.$i]);
    if(isset($_POST['tab2_'.$i])){
        array_push($array_2, $_POST['tab2_'.$i]);
    }
}

$toon = 0;
foreach($array_2 as $num){
    foreach($array_1 as $value){
        $toon += $num * $value;
    }
}

echo $toon;