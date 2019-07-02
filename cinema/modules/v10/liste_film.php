<?php
// List of classes needed for this class
require_once "initialize.php";

class Liste_film extends Initialize	{
	
	public $resultat;

	public function __construct()	{
		// SESSION
		// session_start();
		// Call Parent Constructor
		parent::__construct();

		// init variables resultat
		$this->resultat= [];

		// execute main function
		$this->main();
	}

	public function __destruct()	{
		parent::__destruct();
	}

	private function main()	{
	}
}

?>
