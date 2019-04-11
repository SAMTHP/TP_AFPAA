/*
// boucle principale : le point de départ se décale à chaque tour 
Pour i ← 0 à 10 
	// on considère provisoirement que t(i) est le plus petit élément 
	posmini ← i 

	// on examine tous les éléments suivants 
	Pour j ← i + 1 à 11 
		Si t(j) < t(posmini) Alors 
			posmini ← j 
		Finsi 
	j suivant 

	// A cet endroit, on sait maintenant où est le plus petit élément. 
	// Il ne reste plus qu'à effectuer la permutation. 
	temp ← t(posmini)
	t(posmini) ← t(i) 
	t(i) ← temp 

	// On a placé correctement l'élément numéro i, on passe à présent au suivant. 
i suivant

*/

var i, j, posmini, temp;
var aTableau= [45, 122, 12, 3, 21, 78, 64, 53, 89, 28, 84, 46];
for (i= 0; i<= (aTableau.length-2); i++)	{
	posmini= i;
	for (j= (i+1); j<= (aTableau.length-1); j++)	{
		if (aTableau[j] < aTableau[posmini])	{
			posmini= j;
		}
	}
	temp= aTableau[posmini];
	aTableau[posmini]= aTableau[i];
	aTableau[i]= temp ;
}








