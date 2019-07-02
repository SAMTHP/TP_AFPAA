<?php
class edit_acteur {
	function getAllResultats($oBdd, $GLOBALS_INI, $VARS_HTML)	{
		$spathSQL= $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "select_acteur_single.sql";
		$resultat= $oBdd->getSelectDatas($spathSQL, array( "id_acteur" => $VARS_HTML["id_acteur"] ));
		return $resultat;
	}
}
?>
