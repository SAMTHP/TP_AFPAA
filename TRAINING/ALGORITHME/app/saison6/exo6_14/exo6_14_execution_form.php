<h2>EXECUTION EN PHP</h2>
<h4>Moyenne de la classe : </h4>
<p>La moyenne de la classe est de 14/20.</p>
<h4>Saisissez vos notes : </h4>
<form action="exo6_14_execution_view.php" method="POST">
    <div class="form-group">
        <div class="row">
            <div style="display: flex; justify-content: center;">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">Matière</th>
                        <th scope="col">Note</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">PHP</th>
                        <td><input type="number" class="form-control" id="php" name="php" min="0" max="20"></td>
                    </tr>
                    <tr>
                        <th scope="row">JS</th>
                        <td><input type="number" class="form-control" id="js" name="js" min="0" max="20"></td>
                    </tr>
                    <tr>
                        <th scope="row">JQUERY</th>
                        <td><input type="number" class="form-control" id="jquery" name="jquery" min="0" max="20"></td>
                    </tr>
                    <tr>
                        <th scope="row">HTML</th>
                        <td><input type="number" class="form-control" id="html" name="html" min="0" max="20"></td>
                    </tr>
                    <tr>
                        <th scope="row">CSS</th>
                        <td><input type="number" class="form-control" id="css" name="css" min="0" max="20"></td>
                    </tr>
                    <tr>
                        <th scope="row">SQL</th>
                        <td><input type="number" class="form-control" id="sql" name="sql" min="0" max="20"></td>
                    </tr>
                    <tr>
                        <th scope="row">UML</th>
                        <td><input type="number" class="form-control" id="uml" name="uml" min="0" max="20"></td>
                    </tr>
                    <tr>
                        <th scope="row">REACT</th>
                        <td><input type="number" class="form-control" id="react" name="react" min="0" max="20"></td>
                    </tr>
                    <tr>
                        <th scope="row">NODE</th>
                        <td><input type="number" class="form-control" id="node" name="node" min="0" max="20"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <br>
        <button type="submit" class="btn btn-primary col-2" id="submit">Valider</button>
    </div>
</form>