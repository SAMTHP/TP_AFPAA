<?php

	$version= "v0";

	$numero_de_connexion = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', 'root');

	$sSql= "select id_film, titre_film, date_film, duree_film from film order by titre_film";
	
	// Execute la requete
	$results_db= $numero_de_connexion->prepare($sSql);
	$results_db->execute();

	$resultat= [];
	while ($ligne = $results_db->fetch()) {
		$new_ligne= [];
		$new_ligne["id_film"]= $ligne["id_film"];
		$new_ligne["titre_film"]= $ligne["titre_film"];
		$new_ligne["date_film"]= $ligne["date_film"];
		$new_ligne["duree_film"]= $ligne["duree_film"];
		// J'ajoute mon tableau associatif $new_ligne dans mon tableau $resultat
		// de sorte à avoir :
		// $resultat[0] <- reçoit ma 1ère ligne de résultats de la bdd
		// $resultat[1] <- reçoit ma 2nde ligne de résultats de la bdd
		// etc. ...
		$resultat[]= $new_ligne;
	}
	
	$numero_de_connexion= null;

?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>Liste de mes films</title>
		<meta charset="utf-8">
		<meta name="description" content="165c. uniques">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<!-- main css and js -->
		<style type="text/css">
		table {
			text-align: center;
		}
		td {
			margin: 15px;
			padding: 10px;
		}
		h1 {
			text-align: center;
		}
		</style>
	</head>

<body>

	<div id="page">
		<!-- Entête de la zone considérée -->
		<header></header>

		<!-- Nav. principale de la page -->
		<nav>
			<p><a href="liste_film.php">Liste des films (édition / suppression)</a></p>
			<p><a href="add_film.php">Ajouter un film</a></p>
			<p><a href="liste_acteur.php">Liste des acteurs (édition / suppression)</a></p>
			<p><a href="add_acteur.php">Ajouter un acteur</a></p>
		</nav>

		<!-- Les à-cotés de la page -->
		<aside></aside>

		<!-- Contenu textuel de la page -->
		<section>
			<h1>Liste des films</h1>
			<hr>
			<table border="1" align="center">
				<tr>
					<td>ID FILM</td>
					<td>TITRE</td>
					<td>DATE</td>
					<td>DUREE</td>
					<td>EDITION</td>
					<td>SUPPRESSION</td>
				</tr>
			<?php
				foreach ($resultat as $ligne)	{
					echo "<tr>\n";
					echo "<td>" . $ligne["id_film"] . "</td>\n";
					echo "<td>" . $ligne["titre_film"] . "</td>\n";
					echo "<td>" . $ligne["date_film"] . "</td>\n";
					echo "<td>" . $ligne["duree_film"] . "</td>\n";
					echo "<td><a href=\"edit_film.php?id_film=" . $ligne["id_film"] . "\">EDIT</a></td>\n";
					echo "<td><a href=\"supprime_film.php?id_film=" . $ligne["id_film"] . "\">X</a></td>\n";
					echo "</tr>\n";
				}
			?>
			</table>
		</section>

		<!-- Pied-de-page de la page -->
		<footer></footer>
	</div>

</body>
</html>


