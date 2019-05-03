
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
                        <div>
                            <div class="row">
                                <div class="col-4"></div>
                                <button type="submit" class="btn btn-primary col-2" id="left-top" name="left-top">↖</button>
                                <button type="submit" class="btn btn-primary col-2" id="right-top" name="right-top">↗</button>
                                <div class="col-4"></div>
                            </div>
                            <div class="row">
                                <div class="col-4"></div>
                                <button type="submit" class="btn btn-primary col-2" id="left-bottom" name="left-bottom">↙</button>
                                <button type="submit" class="btn btn-primary col-2" id="right-bottom" name="right-bottom">↘</button>
                                <div class="col-4"></div>
                            </div>
                        </div>
                        <input type="hidden" id="x" value="<?= $_POST['x']; ?>">
                        <input type="hidden" id="y" value="<?= $_POST['y']; ?>">
                    </p>
                    <br>
                    <div style="display: flex; justify-content: center;">
                        <a href="../index_global_saison7.php" class="btn btn-warning " >RETOUR</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
            <div class="form-group">
            <h5>DAMMIER</h5>
            <br>
            <?php require "exo8_7_execution.php" ?>
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
                                <td style="background-color: #994d00"><?php if($a[0] != 0){echo $a[0]; } ?></td>
                                <td><?php if($b[0] != 0){echo $b[0];} ?></td>
                                <td style="background-color: #994d00"><?php if($c[0] != 0){echo $c[0] ;} ?></td>
                                <td><?php if($d[0] != 0){echo $d[0];} ?></td>
                                <td style="background-color: #994d00"><?php if($e[0] != 0){echo $e[0];} ?></td>
                                <td><?php if($f[0] != 0){echo $f[0] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($g[0] != 0){echo $g[0] ;} ?></td>
                                <td><?php if($h[0] != 0){echo $h[0] ;} ?></td>
                                <th class="table-active" scope="row">1</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">2</th>
                                <td><?php if($a[1] != 0){echo $a[1] ;}?></td>
                                <td style="background-color: #994d00"><?php if($b[1] != 0){echo $b[1] ;}?></td>
                                <td><?php if($c[1] != 0){echo $c[1] ;}?></td>
                                <td style="background-color: #994d00"><?php if($d[1] != 0){echo $d[1] ;}?></td>
                                <td><?php if($e[1] != 0){echo $e[1] ;}?></td>
                                <td style="background-color: #994d00"><?php if($f[1] != 0){echo $f[1] ;}?></td>
                                <td><?php if($g[1] != 0){echo $g[1] ;}?></td>
                                <td style="background-color: #994d00"><?php if($h[1] != 0){echo $h[1] ;}?></td>
                                <th class="table-active" scope="row">2</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">3</th>
                                <td style="background-color: #994d00"><?php if($a[2] != 0){echo $a[2] ;} ?></td>
                                <td><?php if($b[2] != 0){echo $b[2] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($c[2] != 0){echo $c[2] ;} ?></td>
                                <td><?php if($d[2] != 0){echo $d[2] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($e[2] != 0){echo $e[2] ;} ?></td>
                                <td><?php if($f[2] != 0){echo $f[2] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($g[2] != 0){echo $g[2] ;} ?></td>
                                <td><?php if($h[2] != 0){echo $h[2] ;} ?></td>
                                <th class="table-active" scope="row">3</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">4</th>
                                <td><?php if($a[3] != 0){echo $a[3] ;}?></td>
                                <td style="background-color: #994d00"><?php if($b[3] != 0){echo $b[3] ;}?></td>
                                <td><?php if($c[3] != 0){echo $c[3] ;}?></td>
                                <td style="background-color: #994d00"><?php if($d[3] != 0){echo $d[3] ;}?></td>
                                <td><?php if($e[3] != 0){echo $e[3] ;}?></td>
                                <td style="background-color: #994d00"><?php if($f[3] != 0){echo $f[3] ;}?></td>
                                <td><?php if($g[3] != 0){echo $g[3] ;}?></td>
                                <td style="background-color: #994d00"><?php if($h[3] != 0){echo $h[3] ;}?></td>
                                <th class="table-active" scope="row">4</th>
                            </tr >
                            <tr class="text-center">
                                <th class="table-active" scope="row">5</th>
                                <td style="background-color: #994d00"><?php if($a[4] != 0){echo $a[4] ;} ?></td>
                                <td><?php if($b[4] != 0){echo $b[4] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($c[4] != 0){echo $c[4] ;} ?></td>
                                <td><?php if($d[4] != 0){echo $d[4] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($e[4] != 0){echo $e[4] ;} ?></td>
                                <td><?php if($f[4] != 0){echo $f[4] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($g[4] != 0){echo $g[4] ;} ?></td>
                                <td><?php if($h[4] != 0){echo $h[4] ;} ?></td>
                                <th class="table-active" scope="row">5</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">6</th>
                                <td><?php if($a[5] != 0){echo $a[5] ;}?></td>
                                <td style="background-color: #994d00"><?php if($b[5] != 0){echo $b[5] ;}?></td>
                                <td><?php if($c[5] != 0){echo $c[5] ;}?></td>
                                <td style="background-color: #994d00"><?php if($d[5] != 0){echo $d[5] ;}?></td>
                                <td><?php if($e[5] != 0){echo $e[5] ;}?></td>
                                <td style="background-color: #994d00"><?php if($f[5] != 0){echo $f[5]; }?></td>
                                <td><?php if($g[5] != 0){echo $g[5] ;}?></td>
                                <td style="background-color: #994d00"><?php if($h[5] != 0){echo $h[5] ;}?></td>
                                <th class="table-active" scope="row">6</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">7</th>
                                <td style="background-color: #994d00"><?php if($a[6] != 0){echo $a[6] ;} ?></td>
                                <td><?php if($b[6] != 0){echo $b[6] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($c[6] != 0){echo $c[6] ;} ?></td>
                                <td><?php if($d[6] != 0){echo $d[6] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($e[6] != 0){echo $e[6] ;} ?></td>
                                <td><?php if($f[6] != 0){echo $f[6] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($g[6] != 0){echo $g[6] ;} ?></td>
                                <td><?php if($h[6] != 0){echo $h[6];  } ?></td>
                                <th class="table-active" scope="row">7</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">8</th>
                                <td><?php if($a[7] != 0){echo $a[7] ;}?></td>
                                <td style="background-color: #994d00"><?php if($b[7] != 0){echo $b[7] ;}?></td>
                                <td><?php if($c[7] != 0){echo $c[7] ;}?></td>
                                <td style="background-color: #994d00"><?php if($d[7] != 0){echo $d[7] ;}?></td>
                                <td><?php if($e[7] != 0){echo $e[7] ;}?></td>
                                <td style="background-color: #994d00"><?php if($f[7] != 0){echo $f[7] ;}?></td>
                                <td><?php if($g[7] != 0){echo $g[7] ;}?></td>
                                <td style="background-color: #994d00"><?php if($h[7] != 0){echo $h[7] ;}?></td>
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
            <?php echo "DRAPEAU : $flag <br>";?>
            <?= print_r($damier)?>

      <!-- Footer -->
      <?php require_once "../../commun/footer_season_2.html"?>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>