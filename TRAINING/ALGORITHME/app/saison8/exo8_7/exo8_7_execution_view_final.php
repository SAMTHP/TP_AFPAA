
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

      <!-- Affichage des résultats -->

        <div class="jumbotron " style="display: flex; justify-content: center;">
            <div class="card" id="card" style="width: 25rem;">
                <img src="../../img/code.jpeg" class="card-img-top" alt="wallpaper" style="height: 200px">
                <div class="card-body" >
                    <h5 class="card-title">RESULTAT</h5>
                    <p class="card-text">
                        <h5>Tableau 3 :</h5>
                        <?php require_once "exo8_7_execution.php" ?>
                    </p>
                    <div style="display: flex; justify-content: center;">
                        <a href="../index_global_saison7.php" class="btn btn-warning " >RETOUR</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <?php if($flag): ?>
            <div class="form-group">
            <h5>DAMMIER</h5>
            <br>
            <div class="row" >
                    <table class="table table-borderless" style="box-shadow: 0px 5px 3px gray;">
                        <thead>
                            <tr class="text-center">
                                <th class="table-active" class="table-active" scope="col"></th>
                                <th class="table-active" scope="col">A</th>
                                <th class="table-active" scope="col">B</th>
                                <th class="table-active" scope="col">C</th>
                                <th class="table-active" scope="col">D</th>
                                <th class="table-active" scope="col">E</th>
                                <th class="table-active" scope="col">F</th>
                                <th class="table-active" scope="col">G</th>
                                <th class="table-active" scope="col">H</th>
                                <th class="table-active" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th class="table-active" scope="row">1</th>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <th class="table-active" scope="row">1</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">2</th>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <th class="table-active" scope="row">2</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">3</th>
                                <td style="background-color: #994d00">🔘</td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <th class="table-active" scope="row">3</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">4</th>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <th class="table-active" scope="row">4</th>
                            </tr >
                            <tr class="text-center">
                                <th class="table-active" scope="row">5</th>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <th class="table-active" scope="row">5</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">6</th>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <th class="table-active" scope="row">6</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">7</th>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <th class="table-active" scope="row">7</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">8</th>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <td></td>
                                <td style="background-color: #994d00"></td>
                                <th class="table-active" scope="row">8</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="col"></th>
                                <th class="table-active" scope="col">A</th>
                                <th class="table-active" scope="col">B</th>
                                <th class="table-active" scope="col">C</th>
                                <th class="table-active" scope="col">D</th>
                                <th class="table-active" scope="col">E</th>
                                <th class="table-active" scope="col">F</th>
                                <th class="table-active" scope="col">G</th>
                                <th class="table-active" scope="col">H</th>
                                <th class="table-active" scope="col"></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php endif ?>


      <!-- Footer -->
      <?php require_once "../../commun/footer_season_2.html"?>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>