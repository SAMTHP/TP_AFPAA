<h2>EXECUTION EN PHP</h2>
<form action="exo4_3_execution_view.php" method="POST">
    <div class="form-group">
        <div class="row">
            <label for="hour" class="col-3">Entrez l'heure (format 24H) : </label>
            <input type="number" class="form-control col-1" id="hour" name="hour" min="0" max="24">
            <label for="minutes" class="col-3">Entrez les minutes (min 0, max 100): </label>
            <input type="number" class="form-control col-1" id="minutes" name="minutes" min="0" max="100">
            <label for="secondes" class="col-3">Entrez les secondes (min 0, max 100): </label>
            <input type="number" class="form-control col-1" id="secondes" name="secondes" min="0" max="100">
        </div>
        <button type="submit" class="btn btn-primary col-2" id="submit">Valider</button>
    </div>
</form>