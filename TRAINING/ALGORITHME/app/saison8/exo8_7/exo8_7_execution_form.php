
<h2>EXECUTION EN PHP</h2>
<form action="exo8_7_execution_view.php" method="POST">
    <div class="form-group">
        <h5>Choisissez votre case :</h5>
        <div class="row" >
            <label for="choice" class="col-1">Colonne</label>
            <input type="number" class="form-control col-1" id="x" name="x" min="1" max="8">
            <label for="choice" class="col-1">Ligne</label>
            <input type="number" class="form-control col-1" id="y" name="y" min="1" max="8">
            <div class="col-1"></div>
        </div>
        <br>
        <div class="row" >
                <table class="table table-borderless" style="box-shadow: 0px 5px 3px gray;">
                    <thead>
                        <tr class="text-center">
                            <th class="table-active" class="table-active" scope="col"></th>
                            <th class="table-active" class="table-active" scope="col">A</th>
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
                            <td style="background-color: #994d00"></td>
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
    <br>
    <button type="submit" class="btn btn-primary col-2" id="submit">Valider</button>
    </div>
</form>