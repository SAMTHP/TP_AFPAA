
<h2>EXECUTION EN PHP</h2>
<form action="dame_view.php" method="POST">
    <div class="form-group">
        <h5>Démarrage du jeu :</h5>
        <div class="row" >
            <label for="choice" class="col-2">Nom joueur 1 : </label>
            <input type="text" class="form-control col-3" id="name_player_1" name="name_player_1">
            <label for="choice" class="col-2">Nom joueur 2 : </label>
            <input type="text" class="form-control col-3" id="name_player_2" name="name_player_2">
            <div class="col-1"></div>
        </div>
        <br>
        <div class="row" >
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
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <th class="table-active" scope="row">1</th>
                        </tr>
                        <tr class="text-center">
                            <th class="table-active" scope="row">2</th>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <th class="table-active" scope="row">2</th>
                        </tr>
                        <tr class="text-center">
                            <th class="table-active" scope="row">3</th>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <th class="table-active" scope="row">3</th>
                        </tr>
                        <tr class="text-center">
                            <th class="table-active" scope="row">4</th>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚪</td>
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
                            <td></td>
                            <td style="background-color: #994d00"></td>
                            <th class="table-active" scope="row">6</th>
                        </tr>
                        <tr class="text-center">
                            <th class="table-active" scope="row">7</th>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <th class="table-active" scope="row">7</th>
                        </tr>
                        <tr class="text-center">
                            <th class="table-active" scope="row">8</th>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <th class="table-active" scope="row">8</th>
                        </tr>
                        <tr class="text-center">
                            <th class="table-active" scope="row">9</th>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <th class="table-active" scope="row">9</th>
                        </tr>
                        <tr class="text-center">
                            <th class="table-active" scope="row">10</th>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
                            <td>⚫</td>
                            <td style="background-color: #994d00"></td>
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
    <br>
    <button type="submit" class="btn btn-primary col-2" id="submit">Démmarrer le jeu</button>
    </div>
</form>