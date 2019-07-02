<?php

	require "configuration.php";
	$GLOBALS_INI= getGlobalsINI();

	$version= "v3";
	require "database.php";

	$numero_de_connexion= connectBDD($GLOBALS_INI["DB_HOST"], $GLOBALS_INI["DB_NAME"], $GLOBALS_INI["DB_LOGIN"], $GLOBALS_INI["DB_PSW"]);

	$sSql= file_get_contents($GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "delete_film.sql");
	$sSql= str_replace("@id_film", $_POST["id_film"], $sSql);
	
	// Execute la requete
	$results_db= $numero_de_connexion->query($sSql);

	disconnectBDD($numero_de_connexion);
	
	require $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_FILES"] . $version . "/supprime_film.html";

?>




