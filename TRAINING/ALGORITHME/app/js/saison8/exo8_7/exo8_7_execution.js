document.getElementById('command').style.display = "none";

document.getElementById("x-y").onclick = function () {

    /***  INITIALISATION DU BOARD ***/

    // DECLARATION ET INITIALISATION DU TABLEAU DU DAMIER
    var damier = {
        1: {
            1: 0,
            2: 0,
            3: 0,
            4: 0,
            5: 0,
            6: 0,
            7: 0,
            8: 0
        },
        2: {
            1: 0,
            2: 0,
            3: 0,
            4: 0,
            5: 0,
            6: 0,
            7: 0,
            8: 0
        },
        3: {
            1: 0,
            2: 0,
            3: 0,
            4: 0,
            5: 0,
            6: 0,
            7: 0,
            8: 0
        },
        4: {
            1: 0,
            2: 0,
            3: 0,
            4: 0,
            5: 0,
            6: 0,
            7: 0,
            8: 0
        },
        5: {
            1: 0,
            2: 0,
            3: 0,
            4: 0,
            5: 0,
            6: 0,
            7: 0,
            8: 0
        },
        6: {
            1: 0,
            2: 0,
            3: 0,
            4: 0,
            5: 0,
            6: 0,
            7: 0,
            8: 0
        },
        7: {
            1: 0,
            2: 0,
            3: 0,
            4: 0,
            5: 0,
            6: 0,
            7: 0,
            8: 0
        },
        8: {
            1: 0,
            2: 0,
            3: 0,
            4: 0,
            5: 0,
            6: 0,
            7: 0,
            8: 0
        }
    };

    /***  DEMMARAGE DU JEU ***/

    // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LES ABSCISSES
    var x = parseInt(document.getElementById('x').value);

    // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LES ORDONNES
    var y = parseInt(document.getElementById('y').value);

    // AFFECTATION DU TABLEAU EN FONCTION DU CHOIX UTILISATEUR
    damier[x][y] = "🔘" ;
    document.getElementById(x+"-"+y).innerText =  damier[x][y];

    /***  GESTION DES ERREURS  ***/

    // DECLARATION ET INITIALISATION DU DRAPEAU A FAUX
    var flag = false;
    console.log(document.getElementById((x-1)+"-"+(y-1)));
    /***  COMMANDES DU DAMIER ***/

    // ETAPE 0 : TEST SI LE BOUTON LEFT-TOP A ETE ACTIVE
    document.getElementById('left-top').onclick = function(){
        // TEST SI LA CASE EST VALIDE
        if(document.getElementById((x-1)+"-"+(y-1)) != null){
            // ETAPE 1 : RESET DE LA CASE PRECEDENTE
            damier[x][y] = "" ;
            document.getElementById(x+"-"+y).innerText =  damier[x][y];

            // ETAPE 2 : MODIFICATIONS DES ABSCISSES ET DES ORDONNES
            x -= 1;
            y -= 1;
            console.log(x,y);

            // ETAPE 3 : DEPLACEMENT SUR LA CASE VOULUE
            damier[x][y] = "🔘" ;
            document.getElementById(x+"-"+y).innerText =  damier[x][y];

            // ETAPE 4 : PASSAGE DE L'ERREUR A FAUX
            flag = false;
        } else if(document.getElementById((x-1)+"-"+(y-1)) == null) {
            // AFFICHAGE DE L'ERREUR
            flag = true;
        }
    }

    document.getElementById('right-top').onclick = function(){
        // TEST SI LA CASE EST VALIDE
        if(document.getElementById((x+1)+"-"+(y-1))){
            // ETAPE 1 : RESET DE LA CASE PRECEDENTE
            damier[x][y] = "" ;
            document.getElementById(x+"-"+y).innerText =  damier[x][y];

            // ETAPE 2 : MODIFICATIONS DES ABSCISSES ET DES ORDONNES
            x += 1;
            y -= 1;
            console.log(x,y);
            // ETAPE 3 : DEPLACEMENT SUR LA CASE VOULUE
            damier[x][y] = "🔘" ;
            document.getElementById(x+"-"+y).innerText =  damier[x][y];

            // ETAPE 4 : PASSAGE DE L'ERREUR A FAUX
            flag = false;
        } else {
            // AFFICHAGE DE L'ERREUR
            flag = true;
        }
    }

    document.getElementById('left-bottom').onclick = function(){
        // TEST SI LA CASE EST VALIDE
        if(document.getElementById((x-1)+"-"+(y+1))){
            // ETAPE 1 : RESET DE LA CASE PRECEDENTE
            damier[x][y] = "" ;
            document.getElementById(x+"-"+y).innerText =  damier[x][y];

            // ETAPE 2 : MODIFICATIONS DES ABSCISSES ET DES ORDONNES
            x -= 1;
            y += 1;
            console.log(x,y);
            // ETAPE 3 : DEPLACEMENT SUR LA CASE VOULUE
            damier[x][y] = "🔘" ;
            document.getElementById(x+"-"+y).innerText =  damier[x][y];

            // ETAPE 4 : PASSAGE DE L'ERREUR A FAUX
            flag = false;
        } else {
            // AFFICHAGE DE L'ERREUR
            flag = true;
        }
    }

    document.getElementById('right-bottom').onclick = function(){
        // TEST SI LA CASE EST VALIDE
        if(document.getElementById((x+1)+"-"+(y+1))){
            // ETAPE 1 : RESET DE LA CASE PRECEDENTE
            damier[x][y] = "" ;
            document.getElementById(x+"-"+y).innerText =  damier[x][y];

            // ETAPE 2 : MODIFICATIONS DES ABSCISSES ET DES ORDONNES
            x += 1;
            y += 1;
            console.log(x,y);
            // ETAPE 3 : DEPLACEMENT SUR LA CASE VOULUE
            damier[x][y] = "🔘" ;
            document.getElementById(x+"-"+y).innerText =  damier[x][y];

            // ETAPE 4 : PASSAGE DE L'ERREUR A FAUX
            flag = false;
        } else {
            // AFFICHAGE DE L'ERREUR
            flag = true;
        }
    }

    /***  GESTION DES ERREURS  ***/

    // INITIALISATION DE LA VARIABLE QUI VA AFFICHER L'ERREUR
    var msg ="";

    // TEST SI LE DRAPEAU DE L'ERREUR ACTIF
    if(flag){
        // AFFICHAGE ET AFFECTATION DE LA VARIABLE POUR LE MESSAGE D'ERREUR
        msg = "Vous ne pouvez pas sortir du damier ! 🤣🤣🤣";
        document.getElementById('error').innerText = msg;
    }

    document.getElementById('command').style.display = "block";

}