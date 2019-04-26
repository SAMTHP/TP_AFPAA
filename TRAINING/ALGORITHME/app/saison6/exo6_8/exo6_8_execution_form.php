<h2>EXECUTION EN PHP</h2>
<h4>Saisissez vos notes : </h4>
<form action="exo6_8_execution_view.php" method="POST">
    <div class="form-group">
        <div class="row">
            <label for="choice" class="col-3">Combien de nombre voulez-vous saisr ? </label>
            <input type="number" class="form-control col-1" id="choice" name="choice" min="1" max="100">
        </div>
        <br>
        <button type="submit" class="btn btn-primary col-2" id="submit">Valider</button>
    </div>
</form>
