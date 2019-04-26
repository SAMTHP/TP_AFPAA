<?php
define('BR',"<br>");

$n = $_POST['n'];
$p = $_POST['p'];

$nf = 1;
for($i=1; $i <=$n; $i++){
    $nf *= $i;
}

$pf = 1;
for($i=1; $i <=$p; $i++){
    $pf *= $i;
}

$n_less_pf = 1;
for($i=1; $i <=($n-$p); $i++){
    $n_less_pf *= $i;
}

$x = $nf / $n_less_pf;
$y = $nf / ($pf * $n_less_pf);

echo "Dans l'ordre :  une chance sur $x de gagner".BR;
echo "Dans le désordre : une chance sur $y de gagner".BR;
