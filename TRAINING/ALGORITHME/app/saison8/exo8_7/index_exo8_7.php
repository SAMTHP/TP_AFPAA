<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>ALGORITHME</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="../../css/algo.css" rel="stylesheet">
      <script type="text/javascript" src="../../js/jquery_3_3_1.js" ></script>
      <script type="text/javascript" src="../../js/saison8/exo8_7/season8_exo_7.js"></script>
    </head>
  <body>
      <!-- NAVBAR -->
      <?php require "../../commun/nav_season_2.html" ?>

      <!-- Choix des exos-->
      <div style="display: flex; justify-content: center;">
        <div class="dropdown" >
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EXERCICES</button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="../exo8_6/index_exo8_6.php">8.6</a>
              <a class="dropdown-item" href="#">8.7</a>
          </div>
        </div>
      </div>
      
      <br>

      <!-- ENONCE -->
      <div class="jumbotron " style="display: flex; justify-content: center;">
        <div class="card" id="card" style="width: 25rem;">
          <img src="../../img/code.jpeg" class="card-img-top" alt="wallpaper" style="height: 200px">
          <div class="card-body" >
              <h5 class="card-title">Exercice 8.7</h5>
              <p class="card-text">Écrire un algorithme de jeu de dames très simplifié.<br>
                L’ordinateur demande à l’utilisateur dans quelle case se trouve son pion (quelle ligne, quelle colonne).<br>
                On met en place un contrôle de saisie afin de vérifier la validité des valeurs entrées.<br>
                Ensuite, on demande à l’utilisateur quel mouvement il veut effectuer : 0 (en haut à gauche), 1 (en haut à droite), 2 (en bas à gauche), 3 (en bas à droite).<br>
                Si le mouvement est impossible (i.e. on sort du damier ), on le signale à l’utilisateur et on s’arrête là . Sinon, on déplace le pion et on affiche le damier résultant, en affichant un « O » pour une case vide et un « X » pour la case où se trouve le pion.
              <div style="display: flex; justify-content: center;">
                  <a href="#" class="btn btn-success " id="btn-pc">PSEUDO CODE</a>
              </div>
              <br>
              <div style="display: flex; justify-content: space-around;">
                <div >
                  <a href="#" class="btn btn-warning" id="btn-js">JS</a>
                </div>
                <div >
                  <a href="#" class="btn btn-info" id="btn-jquery">JQUERY</a>
                </div>
                <div >
                  <a href="#" class="btn btn-primary" id="btn-php">PHP</a>
                </div>
              </div>
          </div>
        </div>
        <div>
          <p>&nbsp</p>
        </div>
        <!-- Affichage algo -->
        <div id="algo"></div>
      </div>

      <!-- Execution du code -->
      <section>
        <div class="container" id="execution"></div>
      </section>

      <br>
      <!-- Footer -->
      <?php require_once "../../commun/footer_season_2.html"?>

      
      

      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>