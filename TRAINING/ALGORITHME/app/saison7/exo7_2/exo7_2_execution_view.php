
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

    </head>
  <body>
      <!-- NAVBAR -->
      <?php require "../../commun/nav_season_2.html" ?>
      <hr>

      <!-- Affichage des résultats -->

        <div class="jumbotron " style="display: flex; justify-content: center;">
            <div class="card" id="card" style="width: 25rem;">
                <img src="../../img/code.jpeg" class="card-img-top" alt="wallpaper" style="height: 200px">
                <div class="card-body" >
                    <h5 class="card-title">Résultat :</h5>
                    <?php require_once "exo7_2_execution.php" ?>
                    <div class="row" style="diplay:flex;justify-content:center;">
                        <table class="table table-dark col-2">
                            <thead>
                            <tr>
                                    <th scope="col" colspan="2">TRI PAR INSERTION</th>
                                </tr>
                                <tr>
                                    <th scope="col">INDEX</th>
                                    <th scope="col">VALEURS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=0;$i<10;$i++): ?>
                                    <tr>
                                        <th scope="row"><?= $i?></th>
                                        <td><?= $array[$i] ?></td>
                                    </tr>
                                <?php endfor?>
                            </tbody>
                        </table>
                        <table class="table table-dark col-2">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">TRI A <br>BULLE</th>
                                </tr>
                                <tr>
                                    <th scope="col">INDEX</th>
                                    <th scope="col">VALEURS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for($i=0;$i<10;$i++): ?>
                                    <tr>
                                        <th scope="row"><?= $i?></th>
                                        <td><?= $array2[$i] ?></td>
                                    </tr>
                                <?php endfor?>
                            </tbody>
                        </table>
                    </div>
                        
                    <div style="display: flex; justify-content: center;">
                        <a href="../index_global_saison7.php" class="btn btn-warning " >RETOUR</a>
                    </div>
                </div>
            </div>
        </div>


      <!-- Footer -->
      <?php require_once "../../commun/footer_season_2.html"?>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>