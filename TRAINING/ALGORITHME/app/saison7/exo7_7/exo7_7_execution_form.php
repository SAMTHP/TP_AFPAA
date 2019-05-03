<h2>EXECUTION EN PHP</h2>
<form action="exo7_7_execution_view.php" method="POST">
    <div class="form-group">
        <div class="row">
            <label for="choice" class="col-3">Combien de nombre voulez-vous saisir pour le tableau 1 ? </label>
            <input type="number" class="form-control col-1" id="tab-1" name="tab-1" min="1" max="20">
        </div>
        <div class="row">
            <label for="choice" class="col-3">Combien de nombre voulez-vous saisir pour le tableau 2 ? </label>
            <input type="number" class="form-control col-1" id="tab-2" name="tab-2" min="1" max="20">
        </div>
        <br>
        <button type="submit" class="btn btn-primary col-2" id="submit">Valider</button>
    </div>
</form>