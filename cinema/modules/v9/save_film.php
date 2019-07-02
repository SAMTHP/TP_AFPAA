<?php
class save_film {

	public $resultat;
	
	function __construct($oBdd, $GLOBALS_INI, $VARS_HTML)	{
		$spathSQL= $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_SQL"] . "insert_film.sql";
		$this->resultat= $oBdd->treatDatas($spathSQL, array(
												"titre_film" => $VARS_HTML["titre_film"], 
												"date_film" => $VARS_HTML["date_film"], 
												"duree_film" => $VARS_HTML["duree_film"]
												));
	}
}
?>
