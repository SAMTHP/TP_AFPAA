<?php
$a = "a";
$b = "b";

echo $a;
echo "\n";
echo $b;
echo "\n";

$Vtemp = $a;
$a = $b;
$b = $Vtemp;

echo $a;
echo "\n";
echo $b;
