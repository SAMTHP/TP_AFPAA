<?php

function showLength($str){
    $str_length = strlen($str);
    echo "Votre mot contient $str_length lettres.";
}


$word = "Samir";

showLength($word);