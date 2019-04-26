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
      <script type="text/javascript" src="../../js/saison6/exo6_8/season6_exo_8.js"></script>
      
    </head>
  <body>
      <!-- NAVBAR -->
      <?php require "../../commun/nav_season_2.html" ?>
      <hr>

      <!-- Choix des exos-->
      <div style="display: flex; justify-content: center;">
        <div class="dropdown" >
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EXERCICES</button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="../exo6_3/index_exo6_3.php">6.3</a>
              <a class="dropdown-item" href="../exo6_7/index_exo6_7.php">6.7</a>
              <a class="dropdown-item" href="#">6.8</a>
              <a class="dropdown-item" href="../exo6_8/index_exo6_8.php">6.9</a>
              <a class="dropdown-item" href="../exo6_9/index_exo6_9.php">6.10</a>
              <a class="dropdown-item" href="../exo6_10/index_exo6_10.php">6.11</a>
              <a class="dropdown-item" href="../exo6_11/index_exo6_11.php">6.12</a>
              <a class="dropdown-item" href="../exo6_13/index_exo6_12.php">6.13</a>
              <a class="dropdown-item" href="../exo6_14/index_exo6_14.php">6.14</a>
              <a class="dropdown-item" href="../exo6_15/index_exo6_15.php">6.15</a>
          </div>
        </div>
      </div>
      
      <br>

      <!-- ENONCE -->
      <div class="jumbotron " style="display: flex; justify-content: center;">
        <div class="card" id="card" style="width: 25rem;">
          <img src="../../img/code.jpeg" class="card-img-top" alt="wallpaper" style="height: 200px">
          <div class="card-body" >
              <h5 class="card-title">Exercice 6.8</h5>
              <p class="card-text">Ecrivez un algorithme permettant à l’utilisateur de saisir un nombre quelconque de valeurs, qui devront être stockées dans un tableau.<br>
               L’utilisateur doit donc commencer par entrer le nombre de valeurs qu’il compte saisir.<br>
               Il effectuera ensuite cette saisie. Enfin, une fois la saisie terminée, le programme affichera le nombre de valeurs négatives et le nombre de valeurs positives.  
              </p>
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