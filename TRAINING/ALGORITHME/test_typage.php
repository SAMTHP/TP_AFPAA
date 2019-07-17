<?php

function testTypage(Int $value){
    echo "La valeur que vous avez entrée est : $value";
    return $value;
}

$test = testTypage("avoir");

echo gettype($test);

?>