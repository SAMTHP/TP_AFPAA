<?php

	echo "<b>Les variables d'environnements les plus intéressantes : </b><br>";
	echo "HTTP_HOST = " . $_SERVER["HTTP_HOST"] . "<br>";
	echo "DOCUMENT_ROOT = " . $_SERVER["DOCUMENT_ROOT"] . "<br>";
	echo "HTTP_USER_AGENT = " . $_SERVER["HTTP_USER_AGENT"] . "<br>";

	echo "<hr>";

	echo "<b>Toutes les autres : </b><br>";
	foreach ($_SERVER as $key => $value)	{
		echo $key . " = " . $value . "<br>";
	}
	
	echo "<hr>";
	echo "<b>Toutes les infos du PHP : </b><br>";
	phpinfo();

?>

