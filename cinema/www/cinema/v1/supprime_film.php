<?php

	require "configuration.php";
	$GLOBALS_INI= getGlobalsINI();

	$version= "v1";

	$numero_de_connexion = new PDO('mysql:host='.$GLOBALS_INI["DB_HOST"].';dbname='.$GLOBALS_INI["DB_NAME"].';charset=utf8', $GLOBALS_INI["DB_LOGIN"], $GLOBALS_INI["DB_PSW"]);

	$sSql= "delete from film where id_film=" . $_GET["id_film"] . "";
	
	// Execute la requete
	$results_db= $numero_de_connexion->query($sSql);

	$numero_connexion= null;

	require $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_FILES"] . $version . "/supprime_film.html";

?>




