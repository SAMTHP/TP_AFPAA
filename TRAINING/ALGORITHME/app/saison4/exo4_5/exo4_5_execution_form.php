<h2>EXECUTION EN PHP</h2>
<form action="exo4_5_execution_view.php" method="POST">
    <div class="form-group">
        <div class="row">
            <label for="age" class="col-2">Quel est votre âge ?</label>
            <input type="number" class="form-control col-1" id="age" name="age" min="1">
            <label for="gender" class="col-2">Choisissez votre genre</label>
            <select class="custom-select col-3" name="gender">
                <option selected>Selection</option>
                <option value="h">Homme</option>
                <option value="f">Femme</option>
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary col-2" id="submit">Valider</button>
    </div>
</form>