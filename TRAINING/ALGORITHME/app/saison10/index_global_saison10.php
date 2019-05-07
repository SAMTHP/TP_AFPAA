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

      <div style="display: flex; justify-content: center;">
          <h1 style="color:lightblue">SAISON 10</h1>
      </div>
      <!-- Choix des exos-->
      <div style="display: flex; justify-content: center;">
        <div class="dropdown" >
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EXERCICES</button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="exo10_2/index_exo10_2.php">10.2</a>
            <a class="dropdown-item" href="exo10_3/index_exo10_3.php">10.3</a>
            <a class="dropdown-item" href="exo10_4/index_exo10_4.php">10.4</a>
            <a class="dropdown-item" href="exo10_5/index_exo10_5.php">10.5</a>
            <a class="dropdown-item" href="exo10_6/index_exo10_6.php">10.6</a>
            <a class="dropdown-item" href="exo10_7/index_exo10_7.php">10.7</a>
            <a class="dropdown-item" href="exo10_8/index_exo10_8.php">10.8</a>
            <a class="dropdown-item" href="exo10_9/index_exo10_9.php">10.9</a>
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