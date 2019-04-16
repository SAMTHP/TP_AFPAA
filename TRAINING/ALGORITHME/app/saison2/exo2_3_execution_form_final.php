<?php require "exo2_3_execution.php" ?>
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
      <script type="text/javascript" src="../js/season2_exo_2.js"></script>
    </head>
  <body>
      <!-- NAVBAR -->
      <?php require "../commun/nav.html" ?>
      <hr>

      <!-- Affichage des résultats -->

        <div class="jumbotron " style="display: flex; justify-content: center;">
            <div class="card" id="card" style="width: 70rem;">
                <img src="../img/code.jpeg" class="card-img-top" alt="wallpaper" style="height: 200px">
                <div class="card-body" >
                    <h5 class="card-title">TICKET DE CAISSE</h5>
                    <p class="card-text">
                        <div id="show_result">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">PRODUIT</th>
                                        <th scope="col">QUANTITE</th>
                                        <th scope="col">PRIX HT</th>
                                        <th scope="col">PRIX TTC</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Pomme</th>
                                        <td><?= $quantity_apple ?></td>
                                        <td><?= $total_apple_HT ?> €</td>
                                        <td><?= $total_apple_TTC ?> €</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Lait</th>
                                        <td><?= $quantity_milk ?></td>
                                        <td><?= $total_milk_HT ?> €</td>
                                        <td><?= $total_milk_TTC ?> €</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">iPhone</th>
                                        <td><?= $quantity_iphone ?></td>
                                        <td><?= $total_iphone_HT ?> €</td>
                                        <td><?= $total_iphone_TTC ?> €</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">PC Lenovo i7</th>
                                        <td><?= $quantity_pc ?></td>
                                        <td><?= $total_pc_HT ?> €</td>
                                        <td><?=  $total_pc_TTC?> €</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="2" style="text-align:center">TOTAL</th>
                                        <td><?= $total_HT ?> €</td>
                                        <td><?=  $total_TTC?> €</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </p>
                    <div style="display: flex; justify-content: center;">
                        <a href="index_global_saison2.php" class="btn btn-warning " >RETOUR</a>
                    </div>
                    <br>
                </div>
            </div>
        </div>


      <!-- Footer -->
      <?php require_once "../commun/footer.html"?>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>