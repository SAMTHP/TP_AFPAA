
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
      <?php require "exo8_7_execution.php" ?>
            <div class="form-group">
                <div class="head container" style="width:40%;box-shadow: 0px 2px 6px 4px gray">
                    <div>
                        <h3 class="text-center">DAMIER</h3>
                    </div>
                    <p class="card-text">
                        <form action="exo8_7_execution_view.php" method="POST">
                            <div class="row">
                                <div class="col-4"></div>
                                <button type="submit" class="btn btn-secondary btn-lg col-2" id="left-top" name="left-top"><img src="https://img.icons8.com/metro/32/000000/up-left-arrow.png"></button>
                                <span>&nbsp</span>
                                <button type="submit" class="btn btn-secondary btn-lg col-2" id="right-top" name="right-top"><img src="https://img.icons8.com/metro/32/000000/up-right-arrow.png"></button>
                                <div class="col-4"></div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-4"></div>
                                <button type="submit" class="btn btn-secondary btn-lg col-2" id="left-bottom" name="left-bottom"><img src="https://img.icons8.com/metro/32/000000/down-left-arrow.png"></button>
                                <span>&nbsp</span>
                                <button type="submit" class="btn btn-secondary btn-lg col-2" id="right-bottom" name="right-bottom"><img src="https://img.icons8.com/metro/32/000000/down-right-arrow.png"></button>
                                <div class="col-4"></div></div>
                                <input type="hidden" id="x" name="x" value="<?= $x; ?>">
                                <input type="hidden" id="y" name="y" value="<?= $y; ?>">
                                <br>
                                <div class="text-center">
                                    <?php if($flag){echo $msg;} ?>
                                </div>
                            </div>
                        </form>
                    </p>
                </div>
            </div>
            
            
            <br>
            
            <div class="container" >
                    <table class="table table-borderless" style="box-shadow: 0px 5px 3px gray;">
                        <thead>
                            <tr class="text-center">
                                <th class="table-active" class="table-active" scope="col"></th>
                                <th class="table-active" scope="col">1</th>
                                <th class="table-active" scope="col">2</th>
                                <th class="table-active" scope="col">3</th>
                                <th class="table-active" scope="col">4</th>
                                <th class="table-active" scope="col">5</th>
                                <th class="table-active" scope="col">6</th>
                                <th class="table-active" scope="col">7</th>
                                <th class="table-active" scope="col">8</th>
                                <th class="table-active" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th class="table-active" scope="row">1</th>
                                <td style="background-color: #994d00"><?php if($damier["1"]["1"] === "🔘"){echo $damier["1"]["1"] ; } ?></td>
                                <td><?php if($damier["2"]["1"] === "🔘"){echo $damier["2"]["1"];} ?></td>
                                <td style="background-color: #994d00"><?php if($damier["3"]["1"] === "🔘"){echo $damier["3"]["1"] ;} ?></td>
                                <td><?php if($damier["4"]["1"] === "🔘"){echo $damier["4"]["1"];} ?></td>
                                <td style="background-color: #994d00"><?php if($damier["5"]["1"] === "🔘"){echo $damier["5"]["1"];} ?></td>
                                <td><?php if($damier["6"]["1"] === "🔘"){echo $damier["6"]["1"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($damier["7"]["1"] === "🔘"){echo $damier["7"]["1"] ;} ?></td>
                                <td><?php if($damier["8"]["1"] === "🔘"){echo $damier["8"]["1"] ;} ?></td>
                                <th class="table-active" scope="row">1</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">2</th>
                                <td><?php if($damier["1"]["2"] === "🔘"){echo $damier["1"]["2"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($damier["2"]["2"] === "🔘"){echo $damier["2"]["2"] ;}?></td>
                                <td><?php if($damier["3"]["2"] === "🔘"){echo $damier["3"]["2"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($damier["4"]["2"] === "🔘"){echo $damier["4"]["2"] ;}?></td>
                                <td><?php if($damier["5"]["2"] === "🔘"){echo $damier["5"]["2"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($damier["6"]["2"] === "🔘"){echo $damier["6"]["2"] ;}?></td>
                                <td><?php if($damier["7"]["2"] === "🔘"){echo $damier["7"]["2"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($damier["8"]["2"] === "🔘"){echo $damier["8"]["2"] ;}?></td>
                                <th class="table-active" scope="row">2</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">3</th>
                                <td style="background-color: #994d00"><?php if($damier["1"]["3"] === "🔘"){echo $damier["1"]["3"] ;} ?></td>
                                <td><?php if($damier["2"]["3"] === "🔘"){echo $damier["2"]["3"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($damier["3"]["3"] === "🔘"){echo $damier["3"]["3"] ;} ?></td>
                                <td><?php if($damier["4"]["3"] === "🔘"){echo $damier["4"]["3"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($damier["5"]["3"] === "🔘"){echo $damier["5"]["3"] ;} ?></td>
                                <td><?php if($damier["6"]["3"] === "🔘"){echo $damier["6"]["3"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($damier["7"]["3"] === "🔘"){echo $damier["7"]["3"] ;} ?></td>
                                <td><?php if($damier["8"]["3"] === "🔘"){echo $damier["8"]["3"] ;} ?></td>
                                <th class="table-active" scope="row">3</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">4</th>
                                <td><?php if($damier["1"]["4"] === "🔘"){echo $damier["1"]["4"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($damier["2"]["4"] === "🔘"){echo $damier["2"]["4"] ;}?></td>
                                <td><?php if($damier["3"]["4"] === "🔘"){echo $damier["3"]["4"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($damier["4"]["4"] === "🔘"){echo $damier["4"]["4"] ;}?></td>
                                <td><?php if($damier["5"]["4"] === "🔘"){echo $damier["5"]["4"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($damier["6"]["4"] === "🔘"){echo $damier["6"]["4"] ;}?></td>
                                <td><?php if($damier["7"]["4"] === "🔘"){echo $damier["7"]["4"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($damier["8"]["4"] === "🔘"){echo $damier["8"]["4"] ;}?></td>
                                <th class="table-active" scope="row">4</th>
                            </tr >
                            <tr class="text-center">
                                <th class="table-active" scope="row">5</th>
                                <td style="background-color: #994d00"><?php if($damier["1"]["5"] === "🔘"){echo $damier["1"]["5"] ;} ?></td>
                                <td><?php if($damier["2"]["5"] === "🔘"){echo $damier["2"]["5"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($damier["3"]["5"] === "🔘"){echo $damier["3"]["5"] ;} ?></td>
                                <td><?php if($damier["4"]["5"] === "🔘"){echo $damier["4"]["5"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($damier["5"]["5"] === "🔘"){echo $damier["5"]["5"] ;} ?></td>
                                <td><?php if($damier["6"]["5"] === "🔘"){echo $damier["6"]["5"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($damier["7"]["5"] === "🔘"){echo $damier["7"]["5"] ;} ?></td>
                                <td><?php if($damier["8"]["5"] === "🔘"){echo $damier["8"]["5"] ;} ?></td>
                                <th class="table-active" scope="row">5</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">6</th>
                                <td><?php if($damier["1"]["6"] === "🔘"){echo $damier["1"]["6"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($damier["2"]["6"] === "🔘"){echo $damier["2"]["6"] ;}?></td>
                                <td><?php if($damier["3"]["6"] === "🔘"){echo $damier["3"]["6"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($damier["4"]["6"] === "🔘"){echo $damier["4"]["6"] ;}?></td>
                                <td><?php if($damier["5"]["6"] === "🔘"){echo $damier["5"]["6"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($damier["6"]["6"] === "🔘"){echo $damier["6"]["6"]; }?></td>
                                <td><?php if($damier["7"]["6"] === "🔘"){echo $damier["7"]["6"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($damier["8"]["6"] === "🔘"){echo $damier["8"]["6"] ;}?></td>
                                <th class="table-active" scope="row">6</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">7</th>
                                <td style="background-color: #994d00"><?php if($damier["1"]["7"] === "🔘"){echo $damier["1"]["7"] ;} ?></td>
                                <td><?php if($damier["2"]["7"] === "🔘"){echo $damier["2"]["7"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($damier["3"]["7"] === "🔘"){echo $damier["3"]["7"] ;} ?></td>
                                <td><?php if($damier["4"]["7"] === "🔘"){echo $damier["4"]["7"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($damier["5"]["7"] === "🔘"){echo $damier["5"]["7"] ;} ?></td>
                                <td><?php if($damier["6"]["7"] === "🔘"){echo $damier["6"]["7"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($damier["7"]["7"] === "🔘"){echo $damier["7"]["7"] ;} ?></td>
                                <td><?php if($damier["8"]["7"] === "🔘"){echo $damier["8"]["7"];  } ?></td>
                                <th class="table-active" scope="row">7</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">8</th>
                                <td><?php if($damier["1"]["8"] === "🔘"){echo $damier["1"]["8"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($damier["2"]["8"] === "🔘"){echo $damier["2"]["8"] ;}?></td>
                                <td><?php if($damier["3"]["8"] === "🔘"){echo $damier["3"]["8"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($damier["4"]["8"] === "🔘"){echo $damier["4"]["8"] ;}?></td>
                                <td><?php if($damier["5"]["8"] === "🔘"){echo $damier["5"]["8"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($damier["6"]["8"] === "🔘"){echo $damier["6"]["8"] ;}?></td>
                                <td><?php if($damier["7"]["8"] === "🔘"){echo $damier["7"]["8"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($damier["8"]["8"] === "🔘"){echo $damier["8"]["8"] ;}?></td>
                                <th class="table-active" scope="row">8</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="col"></th>
                                <th class="table-active" scope="col">1</th>
                                <th class="table-active" scope="col">2</th>
                                <th class="table-active" scope="col">3</th>
                                <th class="table-active" scope="col">4</th>
                                <th class="table-active" scope="col">5</th>
                                <th class="table-active" scope="col">6</th>
                                <th class="table-active" scope="col">7</th>
                                <th class="table-active" scope="col">8</th>
                                <th class="table-active" scope="col"></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div style="display: flex; justify-content: center;">
                <a href="../index_global_saison7.php" class="btn btn-warning " >RETOUR</a>
            </div>
            <br>

      <!-- Footer -->
      <?php require_once "../../commun/footer_season_2.html"?>
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>