$('#command').hide();

$("#x-y").click(function () {

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
    var x = parseInt($('#x').val());

    // DECLARATION ET INITIALISATION DE LA VARIABLE QUI VA RECUPERER LES ORDONNES
    var y = parseInt($('#y').val());

    // AFFECTATION DU TABLEAU EN FONCTION DU CHOIX UTILISATEUR
    damier[x][y] = "🔘" ;
    $("#"+x+"-"+y).text(damier[x][y]);

    // DECLARATION ET INITIALISATION DU DRAPEAU A FAUX
    var flag = false;

    /***  COMMANDES DU DAMIER ***/

    // ETAPE 0 : TEST SI LE BOUTON LEFT-TOP A ETE ACTIVE
    $('#left-top').click(function(){
        // TEST SI LA CASE EST VALIDE
        if($("#"+(x-1)+"-"+(y-1)).length != 0){
            // ETAPE 1 : RESET DE LA CASE PRECEDENTE
            damier[x][y] = "" ;
            $("#"+x+"-"+y).text(damier[x][y]);

            // ETAPE 2 : MODIFICATIONS DES ABSCISSES ET DES ORDONNES
            x -= 1;
            y -= 1;

            // ETAPE 3 : DEPLACEMENT SUR LA CASE VOULUE
            damier[x][y] = "🔘" ;
            $("#"+x+"-"+y).text(damier[x][y]);

            // ETAPE 4 : PASSAGE DE L'ERREUR A FAUX
            flag = false;
            $('#error').text("");
        } else {
            // AFFICHAGE DE L'ERREUR
            flag = true;
            // INITIALISATION DE LA VARIABLE QUI VA AFFICHER L'ERREUR
            var msg ="";
            // AFFICHAGE ET AFFECTATION DE LA VARIABLE POUR LE MESSAGE D'ERREUR
            msg = "Vous ne pouvez pas sortir du damier ! 🤣🤣🤣";
            $('#error').text(msg);
        }
    })

    $('#right-top').click(function(){
        // TEST SI LA CASE EST VALIDE
        if($("#"+(x+1)+"-"+(y-1)).length != 0){
            // ETAPE 1 : RESET DE LA CASE PRECEDENTE
            damier[x][y] = "" ;
            $("#"+x+"-"+y).text(damier[x][y]);

            // ETAPE 2 : MODIFICATIONS DES ABSCISSES ET DES ORDONNES
            x += 1;
            y -= 1;

            // ETAPE 3 : DEPLACEMENT SUR LA CASE VOULUE
            damier[x][y] = "🔘" ;
            $("#"+x+"-"+y).text(damier[x][y]);

            // ETAPE 4 : PASSAGE DE L'ERREUR A FAUX
            flag = false;
            $('#error').text("");
        } else {
            // AFFICHAGE DE L'ERREUR
            flag = true;
            // INITIALISATION DE LA VARIABLE QUI VA AFFICHER L'ERREUR
            var msg ="";
            // AFFICHAGE ET AFFECTATION DE LA VARIABLE POUR LE MESSAGE D'ERREUR
            msg = "Vous ne pouvez pas sortir du damier ! 🤣🤣🤣";
            $('#error').text(msg);
        }
    })

    $('#left-bottom').click(function(){
        // TEST SI LA CASE EST VALIDE
        if($("#"+(x-1)+"-"+(y+1)).length != 0){
            // ETAPE 1 : RESET DE LA CASE PRECEDENTE
            damier[x][y] = "" ;
            $("#"+x+"-"+y).text(damier[x][y]);

            // ETAPE 2 : MODIFICATIONS DES ABSCISSES ET DES ORDONNES
            x -= 1;
            y += 1;

            // ETAPE 3 : DEPLACEMENT SUR LA CASE VOULUE
            damier[x][y] = "🔘" ;
            $("#"+x+"-"+y).text(damier[x][y]);

            // ETAPE 4 : PASSAGE DE L'ERREUR A FAUX
            flag = false;
            $('#error').text("");
        } else {
            // AFFICHAGE DE L'ERREUR
            flag = true;
            // INITIALISATION DE LA VARIABLE QUI VA AFFICHER L'ERREUR
            var msg ="";
            // AFFICHAGE ET AFFECTATION DE LA VARIABLE POUR LE MESSAGE D'ERREUR
            msg = "Vous ne pouvez pas sortir du damier ! 🤣🤣🤣";
            $('#error').text(msg);
        }
    })

    $('#right-bottom').click(function(){
        // TEST SI LA CASE EST VALIDE
        if($("#"+(x+1)+"-"+(y+1)).length != 0){
            // ETAPE 1 : RESET DE LA CASE PRECEDENTE
            damier[x][y] = "" ;
            $("#"+x+"-"+y).text(damier[x][y]);

            // ETAPE 2 : MODIFICATIONS DES ABSCISSES ET DES ORDONNES
            x += 1;
            y += 1;

            // ETAPE 3 : DEPLACEMENT SUR LA CASE VOULUE
            damier[x][y] = "🔘" ;
            $("#"+x+"-"+y).text(damier[x][y]);

            // ETAPE 4 : PASSAGE DE L'ERREUR A FAUX
            flag = false;
            $('#error').text("");
        } else {
            // AFFICHAGE DE L'ERREUR
            flag = true;
            // INITIALISATION DE LA VARIABLE QUI VA AFFICHER L'ERREUR
            var msg ="";
            // AFFICHAGE ET AFFECTATION DE LA VARIABLE POUR LE MESSAGE D'ERREUR
            msg = "Vous ne pouvez pas sortir du damier ! 🤣🤣🤣";
            $('#error').text(msg);
        }
    })

    $('#command').show();
    $('#start').hide();

})