<?php
	function getAllResultats($numero_de_connexion, $GLOBALS_INI, $VARS_HTML)	{
		$spathSQL= $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "update_film.sql";
		$resultat= treatDatas($numero_de_connexion, $spathSQL, array(
																	"id_film" => $VARS_HTML["id_film"], 
																	"titre_film" => $VARS_HTML["titre_film"], 
																	"date_film" => $VARS_HTML["date_film"], 
																	"duree_film" => $VARS_HTML["duree_film"]
																	));
		return $resultat;
	}

?>
