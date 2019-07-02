<?php

	require "configuration.php";
	$GLOBALS_INI= getGlobalsINI();

	$version= "v2";

	$numero_de_connexion = new PDO('mysql:host='.$GLOBALS_INI["DB_HOST"].';dbname='.$GLOBALS_INI["DB_NAME"].';charset=utf8', $GLOBALS_INI["DB_LOGIN"], $GLOBALS_INI["DB_PSW"]);

	$sSql= file_get_contents($GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "delete_film.sql");
	$sSql= str_replace("@id_film", $_POST["id_film"], $sSql);
	
	// Execute la requete
	$results_db= $numero_de_connexion->query($sSql);

	$numero_connexion= null;

	require $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_FILES"] . $version . "/supprime_film.html";

?>
