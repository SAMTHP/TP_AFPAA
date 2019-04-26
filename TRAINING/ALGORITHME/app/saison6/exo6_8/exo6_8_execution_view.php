
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
                    <h5 class="card-title">Entrez vos nombres :</h5>
                    <div id="form">
                        <form action="exo6_8_execution_view_final.php" method="POST">
                            <table class="table table-dark">
                                <?php for($i=0;$i<$_POST['choice'];$i++): ?>
                                    <tr>
                                        <th scope="row"><?php echo $i+1 ."° nombre"; ?></th>
                                        <td><input type="number" class="form-control" id="number-<?= $i;?>" name="number-<?= $i;?>"></td>
                                    </tr>
                                <?php endfor?>
                            </table>
                            <input type="hidden" class="form-control" id="total" name="total" value="<?= $_POST['choice'] ?>">
                            <br>
                            <button type="submit" class="btn btn-primary " id="submit">Valider</button>
                        </form>
                    </div>
                    <div style="display: flex; justify-content: center;">
                        <a href="../index_global_saison6.php" class="btn btn-warning " >RETOUR</a>
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