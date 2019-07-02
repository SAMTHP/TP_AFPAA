<?php

	$version= "v6";

	require "configuration.php";
	$GLOBALS_INI= getGlobalsINI();
	
	require "database.php";
	
	require "securite.php";
	$VARS_HTML= getFormsAndSessionsVariables();

	$numero_de_connexion= connectBDD($GLOBALS_INI["DB_HOST"], $GLOBALS_INI["DB_NAME"], $GLOBALS_INI["DB_LOGIN"], $GLOBALS_INI["DB_PSW"]);
	
	$monPHP= $VARS_HTML["page"];
	require $monPHP . ".php";
	$resultat= getAllResultats($numero_de_connexion, $GLOBALS_INI, $VARS_HTML);
	
	disconnectBDD($numero_de_connexion);
	
	require $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_FILES"] . $version . "/route.html";

?>




