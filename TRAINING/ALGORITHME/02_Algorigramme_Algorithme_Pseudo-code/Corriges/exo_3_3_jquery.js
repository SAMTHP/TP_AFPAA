//Ecrire un algorithme qui demande trois noms à l’utilisateur et l’informe ensuite s’ils sont rangés ou non dans l’ordre alphabétique.
			
//ALGORITHME Exo_3_31
function Exo_3_3_jquery() 
{
	//DEBUT
	//variable Nom1,Nom2, Nom3 en alphanumerique
	var Nom1, Nom2, Nom3;
	
	// VIA le formulaire <form> et son nom "nomForm" :
	Nom1= document.nomForm.Nom1.value;
	// VIA son ID en Javascript "natif"
	Nom1= document.getElementById("Nom1").value;
	// VIA son ID en JQuery
	Nom1= $("#Nom1").val();
	
	/* CODE HTML CORRESPONDANT
	<form name="nomForm">
		<input type="text" name="Nom1" id="Nom1" value="">
		<input type="text" name="Nom2" id="Nom2" value="">
		<input type="text" name="Nom3" id="Nom3" value="">
	</form>
	*/
	Nom1= Nom1.toLowerCase();

	Nom2= $("#Nom2").val();
	Nom2= Nom2.toLowerCase();

	Nom3= $("#Nom3").val();
	Nom3= Nom3.toLowerCase();
	
	if (Nom1 < Nom2 && Nom2 < Nom3) {
		$("#Result_Nmbr").html("<font color='cyan'> l'ordre est alphabétique</font>");
	}
	else{
		$("#Result_Nmbr").html("<font color='cyan'>l'ordre n'est pas alphabétique</font>");
	}

}
