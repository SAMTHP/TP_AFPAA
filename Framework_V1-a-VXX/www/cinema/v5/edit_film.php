<?php
	function getAllResultats($numero_de_connexion, $GLOBALS_INI)	{
		$spathSQL= $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "select_film_single.sql";
		$resultat= getSelectDatas($numero_de_connexion, $spathSQL, array( "id_film" => $_GET["id_film"] ));
		return $resultat;
	}

?>
