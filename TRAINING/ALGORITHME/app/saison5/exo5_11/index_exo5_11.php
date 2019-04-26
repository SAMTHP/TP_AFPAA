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
      <script type="text/javascript" src="../../js/saison5/exo5_11/season5_exo_11.js"></script>
      
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
            <a class="dropdown-item" href="../exo5_1/index_exo5_1.php">5.1</a>
            <a class="dropdown-item" href="../exo5_2/index_exo5_2.php">5.2</a>
            <a class="dropdown-item" href="../exo5_3/index_exo5_3.php">5.3</a>
            <a class="dropdown-item" href="../exo5_4/index_exo5_4.php">5.4</a>
            <a class="dropdown-item" href="../exo5_5/index_exo5_5.php">5.5</a>
            <a class="dropdown-item" href="../exo5_6/index_exo5_6.php">5.6</a>
            <a class="dropdown-item" href="../exo5_7/index_exo5_7.php">5.7</a>
            <a class="dropdown-item" href="../exo5_8/index_exo5_8.php">5.8</a>
            <a class="dropdown-item" href="../exo5_9/index_exo5_9.php">5.9</a>
            <a class="dropdown-item" href="../exo5_10/index_exo5_10.php">5.10</a>
            <a class="dropdown-item" href="#">5.11</a>
          </div>
        </div>
      </div>
      
      <br>

      <!-- ENONCE -->
      <div class="jumbotron " style="display: flex; justify-content: center;">
        <div class="card" id="card" style="width: 25rem;">
          <img src="../../img/code.jpeg" class="card-img-top" alt="wallpaper" style="height: 200px">
          <div class="card-body" >
              <h5 class="card-title">Exercice 5.11</h5>
              <p class="card-text">Écrire un algorithme qui permette de connaître ses chances de gagner au tiercé, quarté, quinté et autres impôts volontaires.<br>
                  On demande à l’utilisateur le nombre de chevaux partants, et le nombre de chevaux joués. Les deux messages affichés devront être :<br>
                  Dans l’ordre : une chance sur X de gagner <br>
                  Dans le désordre : une chance sur Y de gagner <br>
                  X et Y nous sont donnés par la formule suivante, si n est le nombre de chevaux partants et p le nombre de chevaux joués (on rappelle que le signe ! signifie "factorielle", comme dans l'exercice 5.7 ci-dessus) :<br>
                  X = n ! / (n - p) !<br>
                  Y = n ! / (p ! * (n – p) !)<br>
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