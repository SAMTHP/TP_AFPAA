<?php

	require "configuration.php";
	$GLOBALS_INI= getGlobalsINI();
	
	$version= "v5";
	require "database.php";

	$numero_de_connexion= connectBDD($GLOBALS_INI["DB_HOST"], $GLOBALS_INI["DB_NAME"], $GLOBALS_INI["DB_LOGIN"], $GLOBALS_INI["DB_PSW"]);
	
	$monPHP= "";
	if((isset($_POST["page"])) && ($_POST["page"] != ""))	{
		$monPHP= $_POST["page"];
	}  else  {
		$monPHP= $_GET["page"];
	}
	require $monPHP . ".php";
	$resultat= getAllResultats($numero_de_connexion, $GLOBALS_INI);
	
	disconnectBDD($numero_de_connexion);
	
	require $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_FILES"] . $version . "/route.html";

?>




