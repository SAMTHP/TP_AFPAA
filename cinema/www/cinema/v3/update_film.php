<?php

	require "configuration.php";
	$GLOBALS_INI= getGlobalsINI();

	$version= "v3";
	require "database.php";

	$numero_de_connexion= connectBDD($GLOBALS_INI["DB_HOST"], $GLOBALS_INI["DB_NAME"], $GLOBALS_INI["DB_LOGIN"], $GLOBALS_INI["DB_PSW"]);

	$sSql= file_get_contents($GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "update_film.sql");
	/*
	$sSql= update film set titre_film="@titre_film", date_film="@date_film", 
					duree_film=@duree_film where id_film=@id_film
	*/

	$sSql= str_replace("@id_film", $_POST["id_film"], $sSql);
	/*
	$sSql= update film set titre_film="@titre_film", date_film="@date_film", 
					duree_film=@duree_film where id_film=39
	*/

	$sSql= str_replace("@titre_film", $_POST["titre_film"], $sSql);
	/*
	$sSql= update film set titre_film="Anthony et les minimois", date_film="@date_film", 
					duree_film=@duree_film where id_film=39
	*/

	$sSql= str_replace("@date_film", $_POST["date_film"], $sSql);
	/*
	$sSql= update film set titre_film="Anthony et les minimois", date_film="2028-11-05", 
					duree_film=@duree_film where id_film=39
	*/

	$sSql= str_replace("@duree_film", $_POST["duree_film"], $sSql);
	/*
	$sSql= update film set titre_film="Anthony et les minimois", date_film="2028-11-05", 
					duree_film=59 where id_film=39
	*/

	// Execute la requete
	$results_db= $numero_de_connexion->query($sSql);

	disconnectBDD($numero_de_connexion);
	
	require $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_FILES"] . $version . "/update_film.html";

?>




