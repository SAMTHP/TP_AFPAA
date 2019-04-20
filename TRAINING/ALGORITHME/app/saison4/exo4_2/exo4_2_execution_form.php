<h2>EXECUTION EN PHP</h2>
<form action="exo4_2_execution_view.php" method="POST">
    <div class="form-group row">
        <label for="hour" class="col-3">Entrez l'heure (format 24H) : </label>
        <input type="number" class="form-control col-1" id="hour" name="hour" min="0" max="24">
        <div class="col-1"></div>
        <label for="minutes" class="col-3">Entrez les minutes (min 0, max 100): </label>
        <input type="number" class="form-control col-1" id="minutes" name="minutes" min="0" max="100">
        <div class="col-1"></div>
        <button type="submit" class="btn btn-primary col-2" id="submit">Valider</button>
    </div>
</form>