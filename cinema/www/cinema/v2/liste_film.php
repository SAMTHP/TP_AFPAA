<?php

	require "configuration.php";
	$GLOBALS_INI= getGlobalsINI();
	
	$version= "v2";

	$numero_de_connexion = new PDO('mysql:host='.$GLOBALS_INI["DB_HOST"].';dbname='.$GLOBALS_INI["DB_NAME"].';charset=utf8', $GLOBALS_INI["DB_LOGIN"], $GLOBALS_INI["DB_PSW"]);

	$sSql= file_get_contents($GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "select_film.sql");
	
	// Execute la requete
	$results_db= $numero_de_connexion->prepare($sSql);
	$results_db->execute();

	$resultat= [];
	while ($ligne = $results_db->fetch()) {
		$new_ligne= [];
		$new_ligne["id_film"]= $ligne["id_film"];
		$new_ligne["titre_film"]= $ligne["titre_film"];
		$new_ligne["date_film"]= $ligne["date_film"];
		$new_ligne["duree_film"]= $ligne["duree_film"];
		// J'ajoute mon tableau associatif $new_ligne dans mon tableau $resultat
		// de sorte à avoir :
		// $resultat[0] <- reçoit ma 1ère ligne de résultats de la bdd
		// $resultat[1] <- reçoit ma 2nde ligne de résultats de la bdd
		// etc. ...
		$resultat[]= $new_ligne;
	}

	$numero_connexion= null;

	require $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_FILES"] . $version . "/liste_film.html";

?>




