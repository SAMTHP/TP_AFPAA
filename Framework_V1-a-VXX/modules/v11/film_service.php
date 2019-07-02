<?php
// List of classes needed for this class
require_once "initialize.php";

class Film_service extends Initialize	{
	
	public $resultat;

	public function __construct()	{
		// SESSION
		// session_start();
		// Call Parent Constructor
		parent::__construct();

		// init variables resultat
		$this->resultat= [];
	}

	public function __destruct()	{
		parent::__destruct();
	}

	function save_film()	{
		// Here I can Access to :
		// $this->GLOBALS_INI
		// $this->oBdd
		// $this->VARS_HTML
		$spathSQL= $this->GLOBALS_INI["PATH_HOME"] . $this->GLOBALS_INI["PATH_SQL"] . "insert_film.sql";
		$this->resultat["save_film"]= $this->oBdd->treatDatas($spathSQL, array(
																	"titre_film" => $this->VARS_HTML["titre_film"], 
																	"date_film" => $this->VARS_HTML["date_film"], 
																	"duree_film" => $this->VARS_HTML["duree_film"]
																	));
		$this->resultat["id_film_created"]= $this->oBdd->getLastInsertId();
	}
	
	function liste_film()	{
		$spathSQL= $this->GLOBALS_INI["PATH_HOME"] . $this->GLOBALS_INI["PATH_SQL"] . "select_film.sql";
		$this->resultat["liste_film"]= $this->oBdd->getSelectDatas($spathSQL, array());
	}
}

?>
