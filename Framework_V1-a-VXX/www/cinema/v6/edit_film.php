<?php
	function getAllResultats($numero_de_connexion, $GLOBALS_INI, $VARS_HTML)	{
		$spathSQL= $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "select_film_single.sql";
		$resultat= getSelectDatas($numero_de_connexion, $spathSQL, array( "id_film" => $VARS_HTML["id_film"] ));
		return $resultat;
	}

?>
