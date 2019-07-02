<?php

	$version= "v10";
	require "configuration.php";
	$GLOBALS_INI= Configuration::getGlobalsINI();

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




