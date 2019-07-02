<?php
// List of classes needed for this class
require_once "film_service.php";

class Liste_film	{
	
	public $resultat;

	public function __construct()	{
		// SESSION
		// session_start();
		// Call Parent Constructor
		// parent::__construct();

		// init variables resultat
		$this->resultat= [];

		// execute main function
		$this->main();
	}

	public function __destruct()	{
		// parent::__destruct();
	}

	function main()	{
		// List 'em all !!
		$obj_liste_film= new film_service();
		$obj_liste_film->liste_film();
		
		// pour remonter les resultats
		$this->resultat= $obj_liste_film->resultat;
	}
}

?>
