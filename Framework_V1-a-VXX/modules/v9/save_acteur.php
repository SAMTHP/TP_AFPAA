<?php
class save_acteur {
	function getAllResultats($oBdd, $GLOBALS_INI, $VARS_HTML)	{
		$spathSQL= $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "insert_acteur.sql";
		$resultat= $oBdd->treatDatas($spathSQL, array(
																	"nom_acteur" => $VARS_HTML["nom_acteur"], 
																	"prenom_acteur" => $VARS_HTML["prenom_acteur"], 
																	"nationalite_acteur" => $VARS_HTML["nationalite_acteur"], 
																	"age_acteur" => $VARS_HTML["age_acteur"]
																	));
		return $resultat;
	}
}
?>