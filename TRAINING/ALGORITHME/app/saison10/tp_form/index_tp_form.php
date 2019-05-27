<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>ALGORITHME</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
      <link href="../../css/algo.css" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
      <script type="text/javascript" src="../../js/jquery_3_3_1.js" ></script>
      <script type="text/javascript" src="../../js/saison10/tp_form/season10_tp_form.js"></script>
      <style>
        #logo{
          background-image: url("concession.png");
          background-repeat: no-repeat;
          background-position: center;
          background-size: 600px 400px;
          width: auto;
          height: 400px;
        }
      </style>
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
            <a class="dropdown-item" href="../tp_form/index_tp_form.php">TP FORM</a>
          </div>
        </div>
      </div>
      
      <h1 style="color:lightblue" class="text-center">TP FORMULAIRE EN JS</h1>

      <!-- ENONCE -->
      <div class="jumbotron " id="logo" >
          
      </div>
      <div  style="display: flex; justify-content: center;">
          <a href="#" class="btn btn-info" id="btn-js">CONCESSION</a>
      </div>

      <!-- Execution du code -->
      <section>
        <div class="container" id="execution"></div>
      </section>

      <br>
      <!-- Footer -->
      <?php require_once "../../commun/footer_season_2.html"?>

      
      

      <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>