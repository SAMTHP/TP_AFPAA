<?php
/*
ENONCE
Ecrivez un algorithme qui trie un tableau dans l’ordre décroissant 
en utilisant le tri à bulles.

ALGORITHME Exo_7_2
	VARIABLES Yapermute en BOOLEEN
	VARIABLES i, temp en NUMERIQUE
	TABLEAU aTableau[7] en NUMERIQUE
DEBUT
	aTableau= [7, 84, 1, 69, 21, 18, 9, 98]
	Yapermute = Vrai
	TantQue Yapermute
		Yapermute = Faux
		Pour i = 0 à 6
			Si aTableau[i] > aTableau[i+1] alors
				temp = aTableau[i]
				aTableau[i] = aTableau[i+1]
				aTableau[i+1] = temp
				Yapermute = Vrai
			Finsi
		i suivant
	FinTantQue
FIN
*/

// ALGORITHME Exo_7_2
// DEBUT
	$aTableau= [];
	$aTableau= [7, 84, 1, 69, 21, 18, 9, 98];
	$Yapermute = true;
	// TantQue Yapermute
	while($Yapermute)	{
		$Yapermute = false;
		// Pour i = 0 à 6
		for ($i=0; $i<7; $i++)	{
			// Si aTableau[i] > aTableau[i+1] alors
			if ($aTableau[$i] > $aTableau[$i+1])	{
				$temp = $aTableau[$i];
				$aTableau[$i] = $aTableau[$i+1];
				$aTableau[$i+1] = $temp;
				$Yapermute = true;
			// Finsi
			}
		// i suivant
		}
	// FinTantQue
	// FIN
	}
	
	echo "Mon tableau trié : ";
	for ($i=0; $i<=7; $i++)	{
		echo $aTableau[$i] . " ";
	}

?>
