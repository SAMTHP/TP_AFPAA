<?php
// List of classes needed for this class
require_once "film_service.php";

class Save_film	{
	
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
		// Create a new film
		$obj_new_film= new film_service();
		$obj_new_film->save_film();

		$this->resultat= $obj_new_film->resultat;
	}
}

?>
