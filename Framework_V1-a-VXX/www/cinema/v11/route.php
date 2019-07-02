<?php

	$version= "v11";
	require "configuration.php";
	$GLOBALS_INI= Configuration::getGlobalsINI();

	// SESSION
	session_start();
	
	// Class dynamic
	if ((isset($_GET["page"])) && ($_GET["page"] != ""))	{
		$monPHP= $_GET["page"];
	}  else  {
		if ((isset($_POST["page"])) && ($_POST["page"] != ""))	{
			$monPHP= $_POST["page"];
		}  else  {
			$monPHP= "liste_film";
		}
	}

	// list of classes authorized when you are NOT connected
	$liste_class = array("accueil", "login", "inscription");
	if ($_SESSION["id_utilisateur"] == "")	{
		if (!(in_array($monPHP, $liste_class))) {
			$monPHP= "liste_film";
		}
	}
	
	// Test if classes exist
	if (!(file_exists("Class/" . $monPHP . ".php"))) {
		$monPHP= "liste_film";
	}

	$myClass= ucfirst($monPHP);

	require $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_CLASS"] .  $version . "/" . $monPHP . ".php";
	$oMain= new $myClass();

	$page_to_load= "route.html";
	if ((isset($oMain->VARS_HTML["bJSON"])) && ($oMain->VARS_HTML["bJSON"] == 1))	{
		$page_to_load= $monPHP . ".html";
	}
	require $GLOBALS_INI["PATH_HOME"] . $GLOBALS_INI["PATH_FILES"] . $version . "/" . $page_to_load;

	unset($oMain);
?>




