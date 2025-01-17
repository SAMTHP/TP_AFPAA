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
      <script type="text/javascript" src="../../js/saison10/exo10_2/season10_exo_2.js"></script>
      
    </head>
  <body>
      <!-- NAVBAR -->
      <?php require "../../commun/nav_season_2.html" ?>

      <!-- Choix des exos-->
      <div style="display: flex; justify-content: center;">
        <div class="dropdown" >
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EXERCICES</button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="../exo10_2/index_exo10_2.php">10.2</a>
            <a class="dropdown-item" href="../exo10_3/index_exo10_3.php">10.3</a>
            <a class="dropdown-item" href="../exo10_4/index_exo10_4.php">10.4</a>
            <a class="dropdown-item" href="../exo10_5/index_exo10_5.php">10.5</a>
            <a class="dropdown-item" href="../exo10_6/index_exo10_6.php">10.6</a>
            <a class="dropdown-item" href="../exo10_7/index_exo10_7.php">10.7</a>
            <a class="dropdown-item" href="../exo10_8/index_exo10_8.php">10.8</a>
            <a class="dropdown-item" href="../exo10_9/index_exo10_9.php">10.9</a>
            <a class="dropdown-item" href="../dame/dame.php">🔘</a>
          </div>
        </div>
      </div>
      
      <br>

      <!-- ENONCE -->
      <div class="jumbotron " style="display: flex; justify-content: center;">
        <div class="card" id="card" style="width: 25rem;">
          <img src="../../img/code.jpeg" class="card-img-top" alt="wallpaper" style="height: 200px">
          <div class="card-body" >
              <h5 class="card-title">Exercice 10.2</h5>
              <p class="card-text">Ecrivez l’algorithme qui produit un résultat similaire au précédent, mais le fichier texte "Exemple.txt" est cette fois de type délimité (caractère de délimitation : /).<br>
               On produira à l'écran un affichage où pour des raisons esthétiques, ce caractère sera remplacé avec des espaces.
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