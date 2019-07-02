<?php
class supprime_acteur {
	function getAllResultats($numero_de_connexion, $oBdd, $GLOBALS_INI, $VARS_HTML)	{
		$spathSQL= $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "delete_acteur.sql";
		$resultat= $oBdd->treatDatas($numero_de_connexion, $spathSQL, array(
																	"id_acteur" => $VARS_HTML["id_acteur"]
																	));
		return $resultat;
	}
}
?>
