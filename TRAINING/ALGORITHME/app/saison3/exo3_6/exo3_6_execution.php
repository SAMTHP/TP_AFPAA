<?php
$age = $_POST['choice'];

if($age >= 6 && $age <= 7){
    echo "Vous êtes poussin";
}elseif($age >= 8 && $age <= 9){
    echo "Vous êtes pupille";
}elseif($age >= 10 && $age <= 11){
    echo "Vous êtes minime";
}elseif($age >= 12){
    echo "Vous êtes cadet";
}else{
    echo "Vous êtes un babyyyyyy !!!";
}