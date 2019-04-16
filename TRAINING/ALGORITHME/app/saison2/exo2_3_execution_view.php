
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
                    <h5 class="card-title">Liste des produits</h5>
                    <p class="card-text">
                        <div style="display: flex; justify-content: center;">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">PRODUIT</th>
                                    <th scope="col">PRIX HT</th>
                                    <th scope="col">TVA</th>
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">Pomme</th>
                                        <td>1 €</td>
                                        <td>5 %</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">Lait</th>
                                        <td>1,5 €</td>
                                        <td>5.5 %</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">iPhone</th>
                                        <td>689 €</td>
                                        <td>20 %</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">PC Lenovo i7</th>
                                        <td>869 €</td>
                                        <td>20 %</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <form action="exo2_3_execution_form_final.php" method="POST">
                            <div class="form-group ">
                                <div class="row">
                                    <div class="quantity-apple col-6">
                                        <label for="quantity-apple">Choisissez la quantité de pommes (1€/kilo HT) : </label>
                                        <input type="number" class="form-control" id="quantity-apple" name="quantity-apple" min="1" max="100">
                                    </div>
                                
                                    <div class="quantity-milk col-6">
                                        <label for="quantity-milk">Choisissez la quantité de lait (1,5€/litre HT) : </label>
                                        <input type="number" class="form-control" id="quantity-milk" name="quantity-milk" min="1" max="100">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="quantity-iphone col-6">
                                        <label for="quantity-iphone">Choisissez la quantité d'iPhones' (698€/unité HT): </label>
                                        <input type="number" class="form-control" id="quantity-iphone" name="quantity-iphone" min="1" max="100">
                                    </div>

                                    <div class="quantity-pc col-6">
                                        <label for="quantity-pc">Choisissez la quantité de pc (899€/unité HT) : </label>
                                        <input type="number" class="form-control" id="quantity-pc" name="quantity-pc" min="1" max="100">
                                    </div>
                                </div>
                                <br>
                                <div style="display: flex; justify-content: center;">
                                    <button type="submit" class="btn btn-primary col-2" id="submit">Valider</button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <div style="display: flex; justify-content: center;">
                            <a href="index_global_saison2.php" class="btn btn-warning " >RETOUR</a>
                        </div>
                    </p>
                </div>
            </div>
        </div>


      <!-- Footer -->
      <?php require_once "../commun/footer.html"?>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>