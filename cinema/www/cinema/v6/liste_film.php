<?php
	function getAllResultats($numero_de_connexion, $GLOBALS_INI, $VARS_HTML)	{
		$spathSQL= $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "select_film.sql";
		$resultat= getSelectDatas($numero_de_connexion, $spathSQL, array());
		return $resultat;
	}

?>
