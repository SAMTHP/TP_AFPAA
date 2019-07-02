<?php

	require "../configuration.php";
	$GLOBALS_INI= getGlobalsINI();

	$version= "v1";

	$numero_de_connexion = new PDO('mysql:host='.$GLOBALS_INI["DB_HOST"].';dbname='.$GLOBALS_INI["DB_NAME"].';charset=utf8', $GLOBALS_INI["DB_LOGIN"], $GLOBALS_INI["DB_PSW"]);

	$sSql= "insert into film (titre_film, date_film, duree_film) values (\"" . $_POST["titre_film"] . "\", \"" . $_POST["date_film"] . "\", " . $_POST["duree_film"] . ")";
	error_log("sSql = " . $sSql);
	// Execute la requete
	$results_db= $numero_de_connexion->query($sSql);

	$numero_connexion= null;

	require $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_FILES"] . $version . "/save_film.html";

?>




