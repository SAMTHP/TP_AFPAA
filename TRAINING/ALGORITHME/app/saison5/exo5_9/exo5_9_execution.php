<?php
define('BR',"<br>");
session_start();

if( isset($_SESSION['array_num']) && !empty($_SESSION['array_num'])){
    $_SESSION['array_num'] = $_SESSION['array_num'];
} else {
    $_SESSION['array_num'] = [];
}

$flag = true;

if(isset($_POST['choice'])){
    $choice = $_POST['choice'];
    if($choice != 0){
        array_push($_SESSION['array_num'], $choice);
    } else {
        $flag = false;

        $max = 0;

        for($i=0;$i<count($_SESSION['array_num']);$i++){
            if($i > 0 && ($_SESSION['array_num'][$i] > $_SESSION['array_num'][$i-1]) ){
                if($max > $_SESSION['array_num'][$i]){
                    $max = $max;
                } else {
                    $max = $_SESSION['array_num'][$i];
                }
            }elseif($i > 0 && $_SESSION['array_num'][$i-1] > $_SESSION['array_num'][$i]){
                if($max > $_SESSION['array_num'][$i-1]){
                    $max = $max;
                } else {
                    $max = $_SESSION['array_num'][$i-1];
                }
            }
        }

        echo "La valeur la plus haute que vous avez renseigné est ".$max.".".BR;

        foreach($_SESSION['array_num'] as $key => $value){
            if($value == $max){
                $pos = $key + 1;
                echo "Ce nombre a été saisi à la ". $pos ."° position.";
            }
        }
        $_SESSION['array_num'] = [];
    }
}

