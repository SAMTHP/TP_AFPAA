			// Algorithme Exo_2_2
			function Exo_2_2_js_form_jquery()  {
				// Variables iNombreUtilisateur, iCarre en NUMERIQUE
				var iNombreUtilisateur, iCarre;
				// ECRIRE "Veuillez saisir un nombre :"
				// LIRE iNombreUtilisateur
				iNombreUtilisateur= $("#iNombreUtilisateur").val();
				// iCarre= iNombreUtilisateur * iNombreUtilisateur
				iCarre= iNombreUtilisateur * iNombreUtilisateur;
				// ECRIRE iCarre
				$("#span_carre").html("Votre carré est " + iCarre);
			}

			// Algorithme Exo_2_2
			function Exo_2_2_js_jquery()  {
				// Variables iNombreUtilisateur, iCarre en NUMERIQUE
				var iNombreUtilisateur, iCarre;
				// ECRIRE "Veuillez saisir un nombre :"
				// LIRE iNombreUtilisateur
				iNombreUtilisateur= +prompt("Veuillez saisir un nombre :");
				// iCarre= iNombreUtilisateur * iNombreUtilisateur
				iCarre= iNombreUtilisateur * iNombreUtilisateur;
				// ECRIRE iCarre
				$("#span_carre").html("Votre carré est " + iCarre);
			}

			// Algorithme Exo_2_2
			function Exo_2_2_js_form_innerhtml()  {
				// Variables iNombreUtilisateur, iCarre en NUMERIQUE
				var iNombreUtilisateur, iCarre;
				// ECRIRE "Veuillez saisir un nombre :"
				// LIRE iNombreUtilisateur
				iNombreUtilisateur= document.getElementById("iNombreUtilisateur").value;
				// iCarre= iNombreUtilisateur * iNombreUtilisateur
				iCarre= iNombreUtilisateur * iNombreUtilisateur;
				// ECRIRE iCarre
				document.getElementById("span_carre").innerHTML= "Votre carré est " + iCarre;
			}

			// Algorithme Exo_2_2
			function Exo_2_2_js_innerhtml()  {
				// Variables iNombreUtilisateur, iCarre en NUMERIQUE
				var iNombreUtilisateur, iCarre;
				// ECRIRE "Veuillez saisir un nombre :"
				// LIRE iNombreUtilisateur
				iNombreUtilisateur= +prompt("Veuillez saisir un nombre :");
				// iCarre= iNombreUtilisateur * iNombreUtilisateur
				iCarre= iNombreUtilisateur * iNombreUtilisateur;
				// ECRIRE iCarre
				document.getElementById("span_carre").innerHTML= "Votre carré est " + iCarre;
			}

			// Algorithme Exo_2_2
			function Exo_2_2_js_alert()  {
				// Variables iNombreUtilisateur, iCarre en NUMERIQUE
				var iNombreUtilisateur, iCarre;
				// ECRIRE "Veuillez saisir un nombre :"
				// LIRE iNombreUtilisateur
				iNombreUtilisateur= +prompt("Veuillez saisir un nombre :");
				// iCarre= iNombreUtilisateur * iNombreUtilisateur
				iCarre= iNombreUtilisateur * iNombreUtilisateur;
				// ECRIRE iCarre
				alert("Votre carré est " + iCarre);
			}
			
			//------------------------------------------------------------//
			//        MANIPULER LES FORMS AVEC JS ET JQUERY               //
			//------------------------------------------------------------//
			function exempleCodeJquery()	{
				// RAPPEL : ON MET UN # POUR VISER UN ID
				
				// permet de vider le contenu d'une DIV dont l'ID est div_resultat
				$('#div_resultat').html("");

				// permet de remplir / affecter le contenu d'une DIV dont l'ID est div_resultat
				$('#div_resultat').html("<b>Test d'écriture dans nav</b><br>OK tout le monde ?");

				// POUR VISER UNE BALISE HTML SANS ID ET QUI EST UNIQUE
				// ON NE MET PAS LE #, MAIS UNIQUEMENT LE NOM DE LA BALISE
				// permet de mettre le contenu dans le footer, même sans ID
				$('footer').html("<b>Test d'écriture dans footer</b><br>OK tout le monde ?");

				// permet de cacher le footer, même sans ID
				$('footer').hide();

				// permet de cacher le footer, même sans ID, en version llleeennnttteee
				$('footer').fadeOut(3000); // où 3000 sont en ms, soit 3s

				// permet de montrer le footer, même sans ID
				$('footer').show();

				// permet de montrer le footer, même sans ID, en version llleeennnttteee
				$('footer').fadeIn(3000); // où 3000 sont en ms, soit 3s

				// permet de cacher / montrer le footer, même sans ID ; interchange l'état caché / montré
				$('footer').toggle();
	
				// permet de modifier le css du footer, même sans ID
				$('footer').css('color', 'red');
				$('footer').css('font-size', '18px');
				
				// ET ENFIN, POUR VISER UNE CLASS CSS, C'EST AVEC UN POINT "."
				$('.btn_blue').css('color', 'black');

				$('.btn_blue').css('color', 'white');

				$('.btn_blue').hide();

				$('.btn_blue').fadeIn(5000);
			}
			
			function highLightH2()	{
				$('#h2_production').css('border-bottom', '3px solid #e3007e');
				$('#h2_production').css('width', '163px');
			}
			
			function eraseLightH2()	{
				$('#h2_production').css('border-bottom', 'none');
				$('#h2_production').css('width', 'auto');
			}
			
			function jquery_textarea()	{
				// recupère le contenu du textarea dont l'ID est "txt_pseudo_code", et le place dans une variable "sTexte"
				var sTexte= $("#txt_pseudo_code").val();
				// Affecter le contenu dans la "div_resultat":
				$("#div_resultat").html(sTexte);
				
				// Affecte du contenu dans le textarea dont l'ID est "txt_pseudo_code"
				var sNewContenu= "Coucou, c'est moi !";
				$("#txt_pseudo_code").val(sNewContenu);
			}
			
			function js_textarea()	{
				// recupère le contenu du textarea dont l'ID est "txt_pseudo_code", et le place dans une variable "sTexte"
				var sTexte= document.getElementById("txt_pseudo_code").value;
				// autre façon, idem du dessus
				var sTexte= document.getElementById("txt_pseudo_code").innerHTML;
				// Affecter le contenu dans la "div_resultat":
				document.getElementById("div_resultat").innerHTML= sTexte;
				
				// Affecte du contenu dans le textarea dont l'ID est "txt_pseudo_code"
				var sNewContenu= "Coucou, c'est moi !";
				document.getElementById("txt_pseudo_code").value= sNewContenu;
				// ON NE PEUT PAS AFFECTER DU CONTENU avec le INNERHTML !!
			}
			
			function jquery_select()	{
				// Les menus déroulants select
				// Connaitre l'indice sélectionné
				var iSelected, iCount;
				iCount= 0;
				$("#sNomPays option").each(function(){
					if ($('#sNomPays option[value='+$(this).val()+']').prop("selected") == true)	{
						iSelected= iCount;
					}
					iCount++;
				});				
				// Récupérer la valeur du menu sélectionné
				var sPaysValue;
				$("#sNomPays option").each(function(){
					if ($('#sNomPays option[value='+$(this).val()+']').prop("selected") == true)	{
						sPaysValue= $(this).val();
					}
				});				
				// Récupérer le texte du menu sélectionné
				var sPaysText;
				$("#sNomPays option").each(function(){
					if ($('#sNomPays option[value='+$(this).val()+']').prop("selected") == true)	{
						sPaysText= $(this).text();
					}
				});				
				// Désaffecter le menu déroulant
				/*
				$("#sNomPays option").each(function(){
					$('#sNomPays option[value='+$(this).val()+']').prop("selected", "");
				});
				*/

				// Affiche le texte du pays dans div_resultat
				$("#div_resultat").html("<span style=\"color: red\">C'est " + sPaysText + " qui est sélectionné !</span>");
			}

			function js_select()	{
				// Les menus déroulants select
				// Connaitre l'indice sélectionné
				var iSelected= document.getElementById('sNomPays').selectedIndex;
				// Affecter un indice
				// document.getElementById('sNomPays').selectedIndex= 1;
				// Désaffecter le menu déroulant
				// document.getElementById('sNomPays').selectedIndex= -1;

				// Récupérer la valeur du menu sélectionné
				var sPaysValue= document.getElementById('sNomPays').options[iSelected].value;
				// Récupérer le texte du menu sélectionné
				var sPaysText= document.getElementById('sNomPays').options[iSelected].text;

				// Affiche le texte du pays dans div_resultat
				document.getElementById("div_resultat").innerHTML=  sPaysText;
			}
			
			function jquery_radio()	{
				// Les boutons radios
				// L'indice des boutons radios commence à 0 (0 : Femme, 1 : Homme)
				// On doit boucler sur les radios pour vérifier si il est coché et sa valeur
				$("input[type='radio'][id='sSexe']").each(function(){
					console.log( $(this).prop('checked') + " : " + $(this).val() );
					if ($(this).prop('checked') == true)	{
						console.log( "COCHEE !! " + $(this).prop('checked') + " : " + $(this).val() );
                	}
				});
				
				// décocher une case radio spécifique :
				$("input[type='radio'][id='sSexe'][value=H]").prop('checked', false);

				// Cocher une case radio spécifique :
				$("input[type='radio'][id='sSexe'][value=H]").prop('checked', true);

				// Tout décocher :
				$("input[type='radio'][id='sSexe']").each(function(){
					$(this).prop('checked', false);
				});
			}
			
			function jquery_checkbox()	{
				// Les boutons checkbox
				// L'indice des boutons checkbox commence à 0 (0 : Star Wars, 1 : Cendrillon, 2 : La ligue des justiciers, 3 : Les totally Spies)
				// On doit boucler sur les checkbox pour vérifier si il est coché et sa valeur
				$("input[type='checkbox'][id='sFilms']").each(function(){
					console.log( $(this).prop('checked') + " : " + $(this).val() );
				});

				// Cocher les boutons checkbox
				$("input[type='checkbox'][id='sFilms']").each(function(){
					$(this).prop('checked', true);
				});

				// Décocher les boutons checkbox
				$("input[type='checkbox'][id='sFilms']").each(function(){
					$(this).prop('checked', false);
				});
				
				// Cocher une case checkbox spécifique :
				$("input[type='checkbox'][id='sFilms'][value=Cendrillon]").prop('checked', true);

				// Affiche dans la div_resultat les films cochés :
				var sTexte= "Voici les films retenus : <br>";
				$("input[type='checkbox'][id='sFilms']").each(function(){
					if ($(this).prop('checked') == true)	{
						sTexte+= "- " + $(this).val() + "<br>";
					}
				});
				$('#div_resultat').html(sTexte)
			}
			
			function js_radio()	{
				// Les boutons radios
				// L'indice des boutons radios commence à 0 (0 : Femme, 1 : Homme)
				// Pour savoir si le 1er bouton est coché :
				var bSexeChecked= document.myFormName.sSexe[0].checked;
				// Pour récupérer la valeur du radio :
				var sSexeValue= document.myFormName.sSexe[0].value;
				// Cocher un bouton radio
				document.myFormName.sSexe[0].checked= true;
				// Décocher un bouton radio
				document.myFormName.sSexe[0].checked= false;
			}
			
			function js_checkbox()	{
				// Les boutons checkbox
				// L'indice des boutons checkbox commence à 0 (0 : Star Wars, 1 : Cendrillon, 2 : La ligue des justiciers, 3 : Les totally Spies)
				// Pour savoir si le 1er bouton est coché :
				var bFilmChecked= document.myFormName.sFilms[0].checked;
				// Pour récupérer la valeur du checkbox :
				var sFilmValue= document.myFormName.sFilms[0].value;
				// Cocher un bouton checkbox
				document.myFormName.sFilms[0].checked= true;
				// Décocher un bouton checkbox
				document.myFormName.sFilms[0].checked= false;
			}
