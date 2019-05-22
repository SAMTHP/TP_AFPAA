
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
      <?php require "game.php" ?>
      
            <div class="form-group">
                <div class="head container" style="width:40%;box-shadow: 0px 2px 6px 4px gray; ">
                    <div>
                        <h3 class="text-center">DAMIER</h3>
                    </div>
                    <p class="card-text">
                        <div class="row" style="display:flex;justify-content:center;">
                            <table class="table table-dark col-4 text-center">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="3">Score</th>
                                    </tr>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">WIN</th>
                                        <th scope="col">LOOSE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><?= $player_1['name']; ?></th>
                                        <td><?= $player_1['score']['win']; ?></td>
                                        <td><?= $player_1['score']['loose'];  ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><?= $player_2['name']; ?></th>
                                        <td><?= $player_2['score']['win'];  ?></td>
                                        <td><?= $player_2['score']['loose'];  ?></td>
                                    </tr>
                                    <?php if($player_go): ?>
                                        <tr>
                                            <th scope="row" colspan="2">A vous de jouer : </th>
                                            <th scope="row"><?= $player_go; ?></th>
                                        </tr>
                                    <?php endif ?>
                                </tbody>
                            </table>
                        </div>
                        <?php if(!isset($_POST['position'])): ?>
                            <div class="row" style="display:flex;justify-content:center;">
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <form action="dame_view.php" method="POST">
                                    <table class="table table-dark col-4 text-center">
                                        <thead>
                                            <tr>
                                                <th scope="row">Colonne</th>
                                                <th scope="row">Ligne___</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="number" class="form-control" id="x" name="x" min="1" max="10"></td>
                                                <td><input type="number" class="form-control" id="y" name="y" min="1" max="10"></td>
                                                <input type="hidden" name="name_player_1" value="<?= $_POST['name_player_1'] ?>">
                                                <input type="hidden" name="name_player_2" value="<?= $_POST['name_player_2'] ?>">
                                                
                                                <input type="hidden" name="position" value="check">
                                            </tr>
                                        </tbody>
                                    </table>
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    <button type="submit" class="btn btn-primary" id="submit">Valider</button>
                                </form>
                            </div>
                            <br>
                        <?php endif ?>

                        <?php if(isset($_POST['position']) && $_POST['position'] == "check"): ?>
                            <form action="dame_view.php" method="POST">
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
                                    <input type="hidden" name="name_player_1" value="<?= $_POST['name_player_1'] ?>">
                                    <input type="hidden" name="name_player_2" value="<?= $_POST['name_player_2'] ?>">
                                    <input type="hidden" id="x" name="x" value="<?= $x ?>">
                                    <input type="hidden" id="y" name="y" value="<?= $y ?>">
                                    
                                    <br>
                                    <div class="text-center">
                                        <?php if(isset($flag) && $flag == true){echo $msg;} ?>
                                    </div>
                                </div>
                            </form>
                        <?php endif ?>
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
                                <th class="table-active" scope="col">9</th>
                                <th class="table-active" scope="col">10</th>
                                <th class="table-active" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th class="table-active" scope="row">1</th>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["1"]["1"] == "⚪" || $_SESSION['tab_board']["1"]["1"] == "⚫"){echo $_SESSION['tab_board']["1"]["1"];}else{echo " ";} ?></td>
                                <td><?php if($_SESSION['tab_board']["2"]["1"] == "⚪" || $_SESSION['tab_board']["2"]["1"] == "⚫"){echo $_SESSION['tab_board']["2"]["1"];} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["3"]["1"] == "⚪" || $_SESSION['tab_board']["3"]["1"] == "⚫"){echo $_SESSION['tab_board']["3"]["1"];} ?></td>
                                <td><?php if($_SESSION['tab_board']["4"]["1"] == "⚪" || $_SESSION['tab_board']["4"]["1"] == "⚫"){echo $_SESSION['tab_board']["4"]["1"];} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["5"]["1"] == "⚪" || $_SESSION['tab_board']["5"]["1"] == "⚫"){echo $_SESSION['tab_board']["5"]["1"];} ?></td>
                                <td><?php if($_SESSION['tab_board']["6"]["1"] == "⚪" || $_SESSION['tab_board']["6"]["1"] == "⚫"){echo $_SESSION['tab_board']["6"]["1"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["7"]["1"] == "⚪" || $_SESSION['tab_board']["7"]["1"] == "⚫"){echo $_SESSION['tab_board']["7"]["1"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["8"]["1"] == "⚪" || $_SESSION['tab_board']["8"]["1"] == "⚫"){echo $_SESSION['tab_board']["8"]["1"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["9"]["1"] == "⚪" || $_SESSION['tab_board']["9"]["1"] == "⚫"){echo $_SESSION['tab_board']["9"]["1"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["10"]["1"] == "⚪" || $_SESSION['tab_board']["10"]["1"] == "⚫"){echo $_SESSION['tab_board']["10"]["1"] ;} ?></td>
                                <th class="table-active" scope="row">1</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">2</th>
                                <td><?php if($_SESSION['tab_board']["1"]["2"] == "⚪" || $_SESSION['tab_board']["1"]["2"] == "⚫"){echo $_SESSION['tab_board']["1"]["2"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["2"]["2"] == "⚪" || $_SESSION['tab_board']["2"]["2"] == "⚫"){echo $_SESSION['tab_board']["2"]["2"] ;}?></td>
                                <td><?php if($_SESSION['tab_board']["3"]["2"] == "⚪" || $_SESSION['tab_board']["3"]["2"] == "⚫"){echo $_SESSION['tab_board']["3"]["2"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["4"]["2"] == "⚪" || $_SESSION['tab_board']["4"]["2"] == "⚫"){echo $_SESSION['tab_board']["4"]["2"] ;}?></td>
                                <td><?php if($_SESSION['tab_board']["5"]["2"] == "⚪" || $_SESSION['tab_board']["5"]["2"] == "⚫"){echo $_SESSION['tab_board']["5"]["2"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["6"]["2"] == "⚪" || $_SESSION['tab_board']["6"]["2"] == "⚫"){echo $_SESSION['tab_board']["6"]["2"] ;}?></td>
                                <td><?php if($_SESSION['tab_board']["7"]["2"] == "⚪" || $_SESSION['tab_board']["7"]["2"] == "⚫"){echo $_SESSION['tab_board']["7"]["2"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["8"]["2"] == "⚪" || $_SESSION['tab_board']["8"]["2"] == "⚫"){echo $_SESSION['tab_board']["8"]["2"] ;}?></td>
                                <td><?php if($_SESSION['tab_board']["9"]["2"] == "⚪" || $_SESSION['tab_board']["9"]["2"] == "⚫"){echo $_SESSION['tab_board']["9"]["2"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["10"]["2"] != 0){echo $_SESSION['tab_board']["10"]["2"] ;}?></td>
                                <th class="table-active" scope="row">2</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">3</th>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["1"]["3"] == "⚪" || $_SESSION['tab_board']["1"]["3"] == "⚫"){echo $_SESSION['tab_board']["1"]["3"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["2"]["3"] == "⚪" || $_SESSION['tab_board']["2"]["3"] == "⚫"){echo $_SESSION['tab_board']["2"]["3"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["3"]["3"] == "⚪" || $_SESSION['tab_board']["3"]["3"] == "⚫"){echo $_SESSION['tab_board']["3"]["3"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["4"]["3"] == "⚪" || $_SESSION['tab_board']["4"]["3"] == "⚫"){echo $_SESSION['tab_board']["4"]["3"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["5"]["3"] == "⚪" || $_SESSION['tab_board']["5"]["3"] == "⚫"){echo $_SESSION['tab_board']["5"]["3"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["6"]["3"] == "⚪" || $_SESSION['tab_board']["6"]["3"] == "⚫"){echo $_SESSION['tab_board']["6"]["3"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["7"]["3"] == "⚪" || $_SESSION['tab_board']["7"]["3"] == "⚫"){echo $_SESSION['tab_board']["7"]["3"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["8"]["3"] == "⚪" || $_SESSION['tab_board']["8"]["3"] == "⚫"){echo $_SESSION['tab_board']["8"]["3"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["9"]["3"] == "⚪" || $_SESSION['tab_board']["9"]["3"] == "⚫"){echo $_SESSION['tab_board']["9"]["3"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["10"]["3"] == "⚪" || $_SESSION['tab_board']["10"]["3"] == "⚫"){echo $_SESSION['tab_board']["10"]["3"] ;} ?></td>
                                <th class="table-active" scope="row">3</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">4</th>
                                <td><?php if($_SESSION['tab_board']["1"]["4"] == "⚪" || $_SESSION['tab_board']["1"]["4"] == "⚫"){echo $_SESSION['tab_board']["1"]["4"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["2"]["4"]  == "⚪" || $_SESSION['tab_board']["2"]["4"] == "⚫"){echo $_SESSION['tab_board']["2"]["4"] ;}?></td>
                                <td><?php if($_SESSION['tab_board']["3"]["4"]  == "⚪" || $_SESSION['tab_board']["3"]["4"] == "⚫"){echo $_SESSION['tab_board']["3"]["4"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["4"]["4"]  == "⚪" || $_SESSION['tab_board']["4"]["4"] == "⚫"){echo $_SESSION['tab_board']["4"]["4"] ;}?></td>
                                <td><?php if($_SESSION['tab_board']["5"]["4"]  == "⚪" || $_SESSION['tab_board']["5"]["4"] == "⚫"){echo $_SESSION['tab_board']["5"]["4"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["6"]["4"]  == "⚪" || $_SESSION['tab_board']["6"]["4"] == "⚫"){echo $_SESSION['tab_board']["6"]["4"] ;}?></td>
                                <td><?php if($_SESSION['tab_board']["7"]["4"]  == "⚪" || $_SESSION['tab_board']["7"]["4"] == "⚫"){echo $_SESSION['tab_board']["7"]["4"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["8"]["4"]  == "⚪" || $_SESSION['tab_board']["8"]["4"] == "⚫"){echo $_SESSION['tab_board']["8"]["4"] ;}?></td>
                                <td><?php if($_SESSION['tab_board']["9"]["4"]  == "⚪" || $_SESSION['tab_board']["9"]["4"] == "⚫"){echo $_SESSION['tab_board']["9"]["4"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["10"]["4"]  == "⚪" || $_SESSION['tab_board']["10"]["4"] == "⚫"){echo $_SESSION['tab_board']["10"]["4"] ;}?></td>
                                <th class="table-active" scope="row">4</th>
                            </tr >
                            <tr class="text-center">
                                <th class="table-active" scope="row">5</th>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["1"]["5"]  == "⚪" || $_SESSION['tab_board']["1"]["5"] == "⚫"){echo $_SESSION['tab_board']["1"]["5"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["2"]["5"] == "⚪" || $_SESSION['tab_board']["2"]["5"] == "⚫"){echo $_SESSION['tab_board']["2"]["5"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["3"]["5"] == "⚪" || $_SESSION['tab_board']["3"]["5"] == "⚫"){echo $_SESSION['tab_board']["3"]["5"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["4"]["5"] == "⚪" || $_SESSION['tab_board']["4"]["5"] == "⚫"){echo $_SESSION['tab_board']["4"]["5"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["5"]["5"] == "⚪" || $_SESSION['tab_board']["5"]["5"] == "⚫"){echo $_SESSION['tab_board']["5"]["5"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["6"]["5"] == "⚪" || $_SESSION['tab_board']["6"]["5"] == "⚫"){echo $_SESSION['tab_board']["6"]["5"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["7"]["5"] == "⚪" || $_SESSION['tab_board']["7"]["5"] == "⚫"){echo $_SESSION['tab_board']["7"]["5"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["8"]["5"] == "⚪" || $_SESSION['tab_board']["8"]["5"] == "⚫"){echo $_SESSION['tab_board']["8"]["5"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["9"]["5"] == "⚪" || $_SESSION['tab_board']["9"]["5"] == "⚫"){echo $_SESSION['tab_board']["9"]["5"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["10"]["5"] == "⚪" || $_SESSION['tab_board']["10"]["5"] == "⚫"){echo $_SESSION['tab_board']["10"]["5"] ;} ?></td>
                                <th class="table-active" scope="row">5</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">6</th>
                                <td><?php if($_SESSION['tab_board']["1"]["6"] == "⚪" || $_SESSION['tab_board']["1"]["6"] == "⚫"){echo $_SESSION['tab_board']["1"]["6"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["2"]["6"] == "⚪" || $_SESSION['tab_board']["2"]["6"] == "⚫"){echo $_SESSION['tab_board']["2"]["6"] ;}?></td>
                                <td><?php if($_SESSION['tab_board']["3"]["6"] == "⚪" || $_SESSION['tab_board']["3"]["6"] == "⚫"){echo $_SESSION['tab_board']["3"]["6"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["4"]["6"] == "⚪" || $_SESSION['tab_board']["4"]["6"] == "⚫"){echo $_SESSION['tab_board']["4"]["6"] ;}?></td>
                                <td><?php if($_SESSION['tab_board']["5"]["6"] == "⚪" || $_SESSION['tab_board']["5"]["6"] == "⚫"){echo $_SESSION['tab_board']["5"]["6"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["6"]["6"] == "⚪" || $_SESSION['tab_board']["6"]["6"] == "⚫"){echo $_SESSION['tab_board']["6"]["6"]; }?></td>
                                <td><?php if($_SESSION['tab_board']["7"]["6"] == "⚪" || $_SESSION['tab_board']["7"]["6"] == "⚫"){echo $_SESSION['tab_board']["7"]["6"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["8"]["6"] == "⚪" || $_SESSION['tab_board']["8"]["6"] == "⚫"){echo $_SESSION['tab_board']["8"]["6"] ;}?></td>
                                <td><?php if($_SESSION['tab_board']["9"]["6"] == "⚪" || $_SESSION['tab_board']["9"]["6"] == "⚫"){echo $_SESSION['tab_board']["9"]["6"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["10"]["6"] == "⚪" || $_SESSION['tab_board']["10"]["6"] == "⚫"){echo $_SESSION['tab_board']["10"]["6"] ;}?></td>
                                <th class="table-active" scope="row">6</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">7</th>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["1"]["7"] == "⚪" || $_SESSION['tab_board']["1"]["7"] == "⚫"){echo $_SESSION['tab_board']["1"]["7"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["2"]["7"] == "⚪" || $_SESSION['tab_board']["2"]["7"] == "⚫"){echo $_SESSION['tab_board']["2"]["7"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["3"]["7"] == "⚪" || $_SESSION['tab_board']["3"]["7"] == "⚫"){echo $_SESSION['tab_board']["3"]["7"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["4"]["7"] == "⚪" || $_SESSION['tab_board']["4"]["7"] == "⚫"){echo $_SESSION['tab_board']["4"]["7"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["5"]["7"] == "⚪" || $_SESSION['tab_board']["5"]["7"] == "⚫"){echo $_SESSION['tab_board']["5"]["7"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["6"]["7"] == "⚪" || $_SESSION['tab_board']["6"]["7"] == "⚫"){echo $_SESSION['tab_board']["6"]["7"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["7"]["7"] == "⚪" || $_SESSION['tab_board']["7"]["7"] == "⚫"){echo $_SESSION['tab_board']["7"]["7"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["8"]["7"] == "⚪" || $_SESSION['tab_board']["8"]["7"] == "⚫"){echo $_SESSION['tab_board']["8"]["7"];  } ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["9"]["7"] == "⚪" || $_SESSION['tab_board']["9"]["7"] == "⚫"){echo $_SESSION['tab_board']["9"]["7"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["10"]["7"] == "⚪" || $_SESSION['tab_board']["10"]["7"] == "⚫"){echo $_SESSION['tab_board']["10"]["7"];  } ?></td>
                                <th class="table-active" scope="row">7</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">8</th>
                                <td><?php if($_SESSION['tab_board']["1"]["8"] == "⚪" || $_SESSION['tab_board']["1"]["8"] == "⚫"){echo $_SESSION['tab_board']["1"]["8"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["2"]["8"] == "⚪" || $_SESSION['tab_board']["2"]["8"] == "⚫"){echo $_SESSION['tab_board']["2"]["8"] ;}?></td>
                                <td><?php if($_SESSION['tab_board']["3"]["8"] == "⚪" || $_SESSION['tab_board']["3"]["8"] == "⚫"){echo $_SESSION['tab_board']["3"]["8"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["4"]["8"] == "⚪" || $_SESSION['tab_board']["4"]["8"] == "⚫"){echo $_SESSION['tab_board']["4"]["8"] ;}?></td>
                                <td><?php if($_SESSION['tab_board']["5"]["8"] == "⚪" || $_SESSION['tab_board']["5"]["8"] == "⚫"){echo $_SESSION['tab_board']["5"]["8"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["6"]["8"] == "⚪" || $_SESSION['tab_board']["6"]["8"] == "⚫"){echo $_SESSION['tab_board']["6"]["8"] ;}?></td>
                                <td><?php if($_SESSION['tab_board']["7"]["8"] == "⚪" || $_SESSION['tab_board']["7"]["8"] == "⚫"){echo $_SESSION['tab_board']["7"]["8"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["8"]["8"] == "⚪" || $_SESSION['tab_board']["8"]["8"] == "⚫"){echo $_SESSION['tab_board']["8"]["8"] ;}?></td>
                                <td><?php if($_SESSION['tab_board']["9"]["8"] == "⚪" || $_SESSION['tab_board']["9"]["8"] == "⚫"){echo $_SESSION['tab_board']["9"]["8"] ;}?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["10"]["8"] == "⚪" || $_SESSION['tab_board']["10"]["8"] == "⚫"){echo $_SESSION['tab_board']["10"]["8"] ;}?></td>
                                <th class="table-active" scope="row">8</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">9</th>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["1"]["9"] == "⚪" || $_SESSION['tab_board']["1"]["9"] == "⚫"){echo $_SESSION['tab_board']["1"]["9"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["2"]["9"] == "⚪" || $_SESSION['tab_board']["2"]["9"] == "⚫"){echo $_SESSION['tab_board']["2"]["9"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["3"]["9"] == "⚪" || $_SESSION['tab_board']["3"]["9"] == "⚫"){echo $_SESSION['tab_board']["3"]["9"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["4"]["9"] == "⚪" || $_SESSION['tab_board']["4"]["9"] == "⚫"){echo $_SESSION['tab_board']["4"]["9"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["5"]["9"] == "⚪" || $_SESSION['tab_board']["5"]["9"] == "⚫"){echo $_SESSION['tab_board']["5"]["9"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["6"]["9"] == "⚪" || $_SESSION['tab_board']["6"]["9"] == "⚫"){echo $_SESSION['tab_board']["6"]["9"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["7"]["9"] == "⚪" || $_SESSION['tab_board']["7"]["9"] == "⚫"){echo $_SESSION['tab_board']["7"]["9"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["8"]["9"] == "⚪" || $_SESSION['tab_board']["8"]["9"] == "⚫"){echo $_SESSION['tab_board']["8"]["9"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["9"]["9"] == "⚪" || $_SESSION['tab_board']["9"]["9"] == "⚫"){echo $_SESSION['tab_board']["9"]["9"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["10"]["9"] == "⚪" || $_SESSION['tab_board']["10"]["9"] == "⚫"){echo $_SESSION['tab_board']["10"]["9"] ;} ?></td>
                                <th class="table-active" scope="row">9</th>
                            </tr>
                            <tr class="text-center">
                                <th class="table-active" scope="row">10</th>
                                <td><?php if($_SESSION['tab_board']["1"]["10"] == "⚪" || $_SESSION['tab_board']["1"]["10"] == "⚫"){echo $_SESSION['tab_board']["1"]["10"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["2"]["10"] == "⚪" || $_SESSION['tab_board']["2"]["10"] == "⚫"){echo $_SESSION['tab_board']["2"]["10"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["3"]["10"] == "⚪" || $_SESSION['tab_board']["3"]["10"] == "⚫"){echo $_SESSION['tab_board']["3"]["10"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["4"]["10"] == "⚪" || $_SESSION['tab_board']["4"]["10"] == "⚫"){echo $_SESSION['tab_board']["4"]["10"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["5"]["10"] == "⚪" || $_SESSION['tab_board']["5"]["10"] == "⚫"){echo $_SESSION['tab_board']["5"]["10"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["6"]["10"] == "⚪" || $_SESSION['tab_board']["6"]["10"] == "⚫"){echo $_SESSION['tab_board']["6"]["10"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["7"]["10"] == "⚪" || $_SESSION['tab_board']["7"]["10"] == "⚫"){echo $_SESSION['tab_board']["7"]["10"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["8"]["10"] == "⚪" || $_SESSION['tab_board']["8"]["10"] == "⚫"){echo $_SESSION['tab_board']["8"]["10"] ;} ?></td>
                                <td><?php if($_SESSION['tab_board']["9"]["10"] == "⚪" || $_SESSION['tab_board']["9"]["10"] == "⚫"){echo $_SESSION['tab_board']["9"]["10"] ;} ?></td>
                                <td style="background-color: #994d00"><?php if($_SESSION['tab_board']["10"]["10"] == "⚪" || $_SESSION['tab_board']["10"]["10"] == "⚫"){echo $_SESSION['tab_board']["10"]["10"] ;} ?></td>
                                <th class="table-active" scope="row">10</th>
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
                                <th class="table-active" scope="col">9</th>
                                <th class="table-active" scope="col">10</th>
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