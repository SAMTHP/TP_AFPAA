<h2>EXECUTION EN PHP</h2>
<form action="exo6_11_execution_view.php" method="POST">
    <div class="form-group">
        <div class="row">
            <div style="display: flex; justify-content: center;">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">TABLEAU 1</th>
                        <th scope="col">TABLEAU 2</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="number" class="form-control" id="tab1_1" name="tab1_1" min="1" ></td>
                        <td><input type="number" class="form-control" id="tab2_1" name="tab2_1" min="1" ></td>
                    </tr>
                    <tr>
                        <td><input type="number" class="form-control" id="tab1_2" name="tab1_2" min="1" ></td>
                        <td><input type="number" class="form-control" id="tab2_2" name="tab2_2" min="1" ></td>
                    </tr>
                    <tr>
                        <td><input type="number" class="form-control" id="tab1_3" name="tab1_3" min="1" ></td>

                    </tr>
                    <tr>
                        <td><input type="number" class="form-control" id="tab1_4" name="tab1_4" min="1" ></td>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <br>
        <button type="submit" class="btn btn-primary col-2" id="submit">Valider</button>
    </div>
</form>