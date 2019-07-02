<?php

	require "configuration.php";
	$GLOBALS_INI= getGlobalsINI();
	
	$version= "v4";

	require $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_FILES"] . $version . "/add_film.html";

?>
