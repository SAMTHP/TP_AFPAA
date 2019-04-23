<h2>EXECUTION EN PHP</h2>
<form action="exo4_8_execution_view.php" method="POST">
    <div class="form-group">
        <div class="row">
            <label for="day" class="col-2">Entrez le jour :</label>
            <input type="number" class="form-control col-1" id="day" name="day" min="1" max="31">
            <label for="month" class="col-2">Entrez le mois :</label>
            <input type="number" class="form-control col-1" id="month" name="month" min="0" max="12">
            <label for="year" class="col-2">Entrez l'année :</label>
            <input type="number" class="form-control col-1" id="year" name="year" min="0" max="3000">
        </div>
        <br>
        <button type="submit" class="btn btn-primary col-2" id="submit">Valider</button>
    </div>
</form>