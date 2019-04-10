<?php

$choice = readline("Ecris un nombre :\n");

//$num_carre = $choice**2;
$num_carre = pow($choice, 2);
echo $choice." au carré donne : ";
echo $num_carre;