<?php
	function connectBDD($host, $name, $login, $psw)	{
		// Connection to DB : SERVEUR / LOGIN / PASSWORD / NOM_BDD
		$numero_de_connexion = new PDO('mysql:host='.$host.';dbname='.$name.';charset=utf8', $login, $psw);
		return $numero_de_connexion;
	}

	function disconnectBDD($numero_de_connexion)	{
		$numero_de_connexion= null;
	}
?>
