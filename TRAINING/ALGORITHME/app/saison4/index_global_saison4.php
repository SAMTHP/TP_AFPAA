<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>ALGORITHME</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="../css/algo.css" rel="stylesheet">
      <script type="text/javascript" src="../js/jquery_3_3_1.js" ></script>
      
    </head>
  <body>
      <!-- NAVBAR -->
      <?php require "../commun/nav_season.html" ?>
      <hr>
      <div style="display: flex; justify-content: center;">
          <h1 style="color:lightblue">SAISON 4</h1>
      </div>
      <!-- Choix des exos-->
      <div style="display: flex; justify-content: center;">
        <div class="dropdown" >
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EXERCICES</button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="exo4_2/index_exo4_2.php">4.2</a>
            <a class="dropdown-item" href="exo4_3/index_exo4_3.php">4.3</a>
            <a class="dropdown-item" href="exo4_4/index_exo4_4.php">4.4</a>
            <a class="dropdown-item" href="exo4_5/index_exo4_5.php">4.5</a>
            <a class="dropdown-item" href="exo4_6/index_exo4_6.php">4.6</a>
            <a class="dropdown-item" href="exo4_7/index_exo4_7.php">4.7</a>
          </div>
        </div>
      </div>
      
      <br>
      
      <!-- ENONCE -->
      <div class="jumbotron " style="display: flex; justify-content: center;">
        <img src="../img/wallpaper.png" class="card-img-top" alt="wallpaper" style="height: 200px; width:700px">
      </div>

      <!-- Execution du code -->
      <section>
        <div class="container" id="execution"></div>
      </section>

      <br>
      <!-- Footer -->
      <?php require_once "../commun/footer_season.html"?>

      
      

      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>