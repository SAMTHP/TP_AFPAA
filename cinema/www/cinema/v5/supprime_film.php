<?php
	function getAllResultats($numero_de_connexion, $GLOBALS_INI)	{
		$spathSQL= $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "delete_film.sql";
		$resultat= treatDatas($numero_de_connexion, $spathSQL, array(
																	"id_film" => $_GET["id_film"]
																	));
		return $resultat;
	}

?>
