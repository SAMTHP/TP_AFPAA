<?php
	class save_film {

	function getAllResultats($numero_de_connexion, $oBdd, $GLOBALS_INI, $VARS_HTML)	{
		$spathSQL= $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "insert_film.sql";
		$resultat= $oBdd->treatDatas($numero_de_connexion, $spathSQL, array(
																	"titre_film" => $VARS_HTML["titre_film"], 
																	"date_film" => $VARS_HTML["date_film"], 
																	"duree_film" => $VARS_HTML["duree_film"]
																	));
		return $resultat;
	}
}
?>
