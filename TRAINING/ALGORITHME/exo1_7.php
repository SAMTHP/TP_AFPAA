<?php
$a = "a";
$b = "b";
$c = "c";

echo $a & $b;
echo "\n";
echo $a . $b;
echo "\n";

$save_a = $a;
$a = $c;
$c = $b;
$b = $save_a;

echo $a;
echo "\n";
echo $b; 
echo "\n";
echo $c;


