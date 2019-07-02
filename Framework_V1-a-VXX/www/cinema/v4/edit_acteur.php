<?php

	require "configuration.php";
	$GLOBALS_INI= getGlobalsINI();

	$version= "v4";
	require "database_v4.php";

	$numero_de_connexion= connectBDD($GLOBALS_INI["DB_HOST"], $GLOBALS_INI["DB_NAME"], $GLOBALS_INI["DB_LOGIN"], $GLOBALS_INI["DB_PSW"]);

	$spathSQL= $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "select_acteur_single.sql";
	$resultat= getSelectDatas($numero_de_connexion, $spathSQL, array( "id_acteur" => $_GET["id_acteur"] ));

	disconnectBDD($numero_de_connexion);
	
	require $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_FILES"] . $version . "/edit_acteur.html";

?>




