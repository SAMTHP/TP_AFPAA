<?php

/***  INITIALISATION DU BOARD ***/

// DECLARATION ET INITIALISATION DU TABLEAU DU DAMIER
$damier = [
    "1" => [
        "1" => 0,
        "2" => 0,
        "3" => 0,
        "4" => 0,
        "5" => 0,
        "6" => 0,
        "7" => 0,
        "8" =>0
    ],
    "2" => [
        "1" => 0,
        "2" => 0,
        "3" => 0,
        "4" => 0,
        "5" => 0,
        "6" => 0,
        "7" => 0,
        "8" =>0
    ],
    "3" => [
        "1" => 0,
        "2" => 0,
        "3" => 0,
        "4" => 0,
        "5" => 0,
        "6" => 0,
        "7" => 0,
        "8" =>0
    ],
    "4" => [
        "1" => 0,
        "2" => 0,
        "3" => 0,
        "4" => 0,
        "5" => 0,
        "6" => 0,
        "7" => 0,
        "8" =>0
    ],
    "5" => [
        "1" => 0,
        "2" => 0,
        "3" => 0,
        "4" => 0,
        "5" => 0,
        "6" => 0,
        "7" => 0,
        "8" =>0
    ],
    "6" => [
        "1" => 0,
        "2" => 0,
        "3" => 0,
        "4" => 0,
        "5" => 0,
        "6" => 0,
        "7" => 0,
        "8" =>0
    ],
    "7" => [
        "1" => 0,
        "2" => 0,
        "3" => 0,
        "4" => 0,
        "5" => 0,
        "6" => 0,
        "7" => 0,
        "8" => 0
    ],
    "8" => [
        "1" => 0,
        "2" => 0,
        "3" => 0,
        "4" => 0,
        "5" => 0,
        "6" => 0,
        "7" => 0,
        "8" => 0 
    ]
];

/***  DEMMARAGE DU JEU ***/

// DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LES ABSCISSES
$x = $xInit= $_POST['x'];

// DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LES ORDONNES
$y = $xIniY= $_POST['y'];

// AFFECTATION DU TABLEAU EN FONCTION DU CHOIX UTILISATEUR
$damier[$x][$y] = "🔘" ;

/***  GESTION DES ERREURS  ***/

// DECLARATION ET INITIALISATION DU DRAPEAU A FAUX
$flag = true;

/***  COMMANDES DU DAMIER ***/

// ETAPE 0 : TEST SI LE BOUTON LEFT-TOP A ETE ACTIVE
if(isset($_POST['left-top'])){
	// TEST SI LA CASE EST VALIDE
	if(isset($damier[$x-1][$y-1])){
		// ETAPE 2 : MODIFICATIONS DES ABSCISSES ET DES ORDONNES
		$x -= 1;
		$y -= 1;

		// ETAPE 4 : PASSAGE DE L'ERREUR A FAUX
		$flag = false;
	}
}elseif(isset($_POST['right-top'])){ // ETAPE 0 : TEST SI LE BOUTON LEFT-TOP A ETE ACTIVE
	// TEST SI LA CASE EST VALIDE
	if(isset($damier[$x+1][$y-1])){
		// ETAPE 2 : MODIFICATIONS DES ABSCISSES ET DES ORDONNES
		$x += 1;
		$y -= 1;

		// ETAPE 4 : PASSAGE DE L'ERREUR A FAUX
		$flag = false;
	}
}elseif(isset($_POST['left-bottom'])){ // ETAPE 0 : TEST SI LE BOUTON LEFT-TOP A ETE ACTIVE
	// TEST SI LA CASE EST VALIDE
	if(isset($damier[$x-1][$y+1])){
		// ETAPE 2 : MODIFICATIONS DES ABSCISSES ET DES ORDONNES
		$x -= 1;
		$y += 1;

		// ETAPE 4 : PASSAGE DE L'ERREUR A FAUX
		$flag = false;
	}
}elseif(isset($_POST['right-bottom'])){ // ETAPE 0 : TEST SI LE BOUTON LEFT-TOP A ETE ACTIVE
	// TEST SI LA CASE EST VALIDE
	if(isset($damier[$x+1][$y+1])){
	
		// ETAPE 2 : MODIFICATIONS DES ABSCISSES ET DES ORDONNES
		$x += 1;
		$y += 1;

		// ETAPE 4 : PASSAGE DE L'ERREUR A FAUX
		$flag = false;
	}
}

/***  GESTION DES ERREURS  ***/

// INITIALISATION DE LA VARIABLE QUI VA AFFICHER L'ERREUR
$msg ="";

// TEST SI LE DRAPEAU DE L'ERREUR ACTIF
if($flag){
	// AFFICHAGE ET AFFECTATION DE LA VARIABLE POUR LE MESSAGE D'ERREUR
	$msg = "Vous ne pouvez pas sortir du damier ! 🤣🤣🤣";
}  else  {
		// ETAPE 1 : RESET DE LA CASE PRECEDENTE
		$damier[$xInit][$yInit] = "" ;
                
        // ETAPE 3 : DEPLACEMENT SUR LA CASE VOULUE
        $damier[$x][$y] = "🔘" ;


}