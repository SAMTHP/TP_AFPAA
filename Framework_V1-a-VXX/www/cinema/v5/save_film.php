<?php
	function getAllResultats($numero_de_connexion, $GLOBALS_INI)	{
		$spathSQL= $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "insert_film.sql";
		$resultat= treatDatas($numero_de_connexion, $spathSQL, array(
																	"titre_film" => $_POST["titre_film"], 
																	"date_film" => $_POST["date_film"], 
																	"duree_film" => $_POST["duree_film"]
																	));
		return $resultat;
	}

?>
