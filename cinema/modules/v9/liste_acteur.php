<?php
class liste_acteur {
	function getAllResultats($oBdd, $GLOBALS_INI, $VARS_HTML)	{
		$spathSQL= $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "select_acteur.sql";
		$resultat= $oBdd->getSelectDatas($spathSQL, array());
		return $resultat;
	}
}
?>
