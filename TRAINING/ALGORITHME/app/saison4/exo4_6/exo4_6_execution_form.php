<h2>EXECUTION EN PHP</h2>
<form action="exo4_6_execution_view.php" method="POST">
    <div class="form-group">
        <div class="row">
            <label for="score-1" class="col-2">Score du premier candidat :</label>
            <input type="number" class="form-control col-1" id="score-1" name="score-1" min="1" max="100">
            <label for="score-2" class="col-2">Score du second candidat :</label>
            <input type="number" class="form-control col-1" id="score-2" name="score-2" min="1" max="100">
            <label for="score-3" class="col-2">Score du troisième candidat :</label>
            <input type="number" class="form-control col-1" id="score-3" name="score-3" min="1" max="100">
            <label for="score-4" class="col-2">Score du quatrième candidat :</label>
            <input type="number" class="form-control col-1" id="score-4" name="score-4" min="1" max="100">
        </div>
        <br>
        <button type="submit" class="btn btn-primary col-2" id="submit">Valider</button>
    </div>
</form>