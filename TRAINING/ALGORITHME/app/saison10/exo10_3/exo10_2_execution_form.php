<h2>EXECUTION EN PHP</h2>
<form action="exo10_2_execution_view.php" method="POST">
    <div class="form-group">
        <h5>Cliquer sur le lien ci-dessous pour télécharger le texte</h5>
        <div class="row">
            <a href="exemple.txt" class="btn btn-success btn-lg active" role="button" download="Exemple.txt" aria-pressed="true">Download</a>
            <input type="hidden" class="form-control col-2" id="start" name="start" value="ok" >
            &nbsp
            <button type="submit" class="btn btn-primary col-3" id="submit">Executer l'algo</button>
        </div>
    </div>
</form>