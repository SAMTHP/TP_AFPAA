<h2>EXECUTION EN PHP</h2>
<form action="exo7_4_execution_view.php" method="POST">
    <div class="form-group">
        <table class="table table-dark col-4">
            <thead>
                <tr>
                    <th scope="col">INDEX</th>
                    <th scope="col">VALEURS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">0</th>
                    <td>126</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>159</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>355</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>678</td>
                </tr>
            </tbody>
        </table>        
        <h4>Formulaire de suppression : </h4>
        <table class="table table-dark col-4">
            <thead>
                <tr>
                    <th scope="col">Choisissez un élement :</th>
                    <th scope="col"><input type="number" class="form-control" id="element" name="element" min="0" max="1000"></th>
                </tr>
            </thead>
            </tbody>
        </table>  
        <button type="submit" class="btn btn-primary col-2" id="submit">Valider</button>
    </div>
</form>
