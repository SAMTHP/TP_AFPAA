<?php

	require "configuration.php";
	$GLOBALS_INI= getGlobalsINI();

	$version= "v3";
	require "database.php";

	$numero_de_connexion= connectBDD($GLOBALS_INI["DB_HOST"], $GLOBALS_INI["DB_NAME"], $GLOBALS_INI["DB_LOGIN"], $GLOBALS_INI["DB_PSW"]);

	$sSql= file_get_contents($GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "insert_film.sql");
	$sSql= str_replace("@titre_film", $_POST["titre_film"], $sSql);
	$sSql= str_replace("@date_film", $_POST["date_film"], $sSql);
	$sSql= str_replace("@duree_film", $_POST["duree_film"], $sSql);
	
	// Execute la requete
	$results_db= $numero_de_connexion->query($sSql);

	disconnectBDD($numero_de_connexion);
	
	require $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_FILES"] . $version . "/save_film.html";

?>




