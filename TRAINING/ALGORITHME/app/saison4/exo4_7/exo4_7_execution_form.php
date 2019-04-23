<h2>EXECUTION EN PHP</h2>
<form action="exo4_7_execution_view.php" method="POST">
    <div class="form-group">
        <div class="row">
            <label for="age" class="col-2">Quel est votre age ?</label>
            <input type="number" class="form-control col-1" id="age" name="age" min="18" max="100">
            <label for="permis" class="col-2">Année d'obtention du permis :</label>
            <input type="number" class="form-control col-1" id="permis" name="permis" min="1950" max="2019">
            <label for="accident" class="col-2">Avez-vous déjà eu un accident ?</label>
            <select class="custom-select col-3" name="accident">
                <option selected>Selection</option>
                <option value="o">Oui</option>
                <option value="n">Non</option>
            </select>
            <label for="nbr-accident" class="col-2">Si oui, combien ?</label>
            <input type="number" class="form-control col-1" id="nbr-accident" name="nbr-accident" min="1" max="5">
        </div>
        <br>
        <button type="submit" class="btn btn-primary col-2" id="submit">Valider</button>
    </div>
</form>