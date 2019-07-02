<?php

	require "configuration.php";
	$GLOBALS_INI= getGlobalsINI();
	
	$version= "v4";
	require "database_v4.php";

	$numero_de_connexion= connectBDD($GLOBALS_INI["DB_HOST"], $GLOBALS_INI["DB_NAME"], $GLOBALS_INI["DB_LOGIN"], $GLOBALS_INI["DB_PSW"]);
	
	$spathSQL= $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "select_film.sql";
	$resultat= getSelectDatas($numero_de_connexion, $spathSQL, array());
	
	disconnectBDD($numero_de_connexion);
	
	require $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_FILES"] . $version . "/liste_film.html";

?>




