<?php

define('BR',"<br>");

$array_nums = [];

for($i=0;$i<$_POST['total'];$i++){
	array_push($array_nums, intval($_POST['number-'.$i])+1);
}

var_dump($array_nums);

