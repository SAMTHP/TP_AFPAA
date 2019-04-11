// Ecrire un programme qui lit le prix HT d’un article, 
// le nombre d’articles et le taux de TVA, 
// et qui fournit le prix total TTC correspondant. 
// Faire en sorte que des libellés apparaissent clairement.

// ALGORITHME Exo_2_3
function Exo_2_3()	{
	// DEBUT
	// 	VARIABLE iPrixHT, iNombreArticle, iTVA, iPrixTTCUnitaire, iPrixTTCTotal en Numerique
	var  iPrixHT, iNombreArticle, iTVA, iPrixTTCUnitaire, iPrixTTCTotal;
	// 	ECRIRE "Saisissez un prix HT : "
	// 	LIRE iPrixHT
	iPrixHT=+ prompt("Saisissez un prix HT : ");

	// 	ECRIRE "Saisissez le nombre d'articles : "
	// 	LIRE iNombreArticle
	iNombreArticle=+ prompt("Saisissez le nombre d'articles : ");

	// 	ECRIRE "Saisissez le montant de TVA en % (Ex. : 5 pour 5%) : "
	// 	LIRE iTVA
	iTVA=+ prompt("Saisissez le montant de TVA en % (Ex. : 5 pour 5%) : ");
		
	// 	iPrixTTCUnitaire= (iPrixHT + (iPrixHT * (iTVA / 100)))
	iPrixTTCUnitaire= iPrixHT + (iPrixHT * (iTVA / 100));
	// 	iPrixTTCTotal= iPrixTTCUnitaire * iNombreArticle
	iPrixTTCTotal= iPrixTTCUnitaire * iNombreArticle;
		
	// 	ECRIRE "Le prix total TTC est de " + iPrixTTCTotal + " Euros."
	alert("Le prix total TTC est de " + iPrixTTCTotal + " Euros.");
	// FIN
}

