
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
                    <h5 class="card-title">RESULTAT</h5>
                    <p class="card-text">
                        <?php require_once "exo5_10_execution.php" ?>
                    </p>
                    <br>
                    <?php if($flag): ?>
                        <form action="exo5_10_execution_view.php?<?= 'price=OK&apple='.$total_apple.'&milk='.$total_milk.'&iphone='.$total_iphone.'&pc='.$total_pc; ?>" method="POST">
                            <div class="form-group">
                                <div class="row">
                                    <p>&nbsp&nbsp&nbsp</p>
                                    <label for="choice" >Choisissez le montant pour régler la facture : </label>
                                    <div>
                                        <p>&nbsp</p>
                                    </div>
                                    <input type="number" class="form-control col-3" id="choice" name="choice" min="<?= $total_order ?>" >
                                    <p>&nbsp&nbsp&nbsp</p>
                                    <button type="submit" class="btn btn-primary " id="submit">Valider</button>
                                </div>
                            </div>
                        </form>
                    <?php endif ?>
                    <div style="display: flex; justify-content: center;">
                        <a href="../index_global_saison5.php" class="btn btn-warning " >RETOUR</a>
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