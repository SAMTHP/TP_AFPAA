<h2>EXECUTION EN PHP</h2>
<span><strong>Phrase : </strong>Tu peux supprimer une de mes lettres, mais seulement pour cette fois</span>
<h5>Formulaire :</h5>
<form action="exo9_5_execution_view.php" method="POST">
    <div class="form-group">
        <div class="row">
            <label for="choice" class="col-3">Entrez le rang de la lettre à supprimer (Début=0) : </label>
            <input type="number" class="form-control col-4" id="number" name="number" >
        </div>
        <button type="submit" class="btn btn-primary col-2" id="submit">Valider</button>
    </div>
</form>