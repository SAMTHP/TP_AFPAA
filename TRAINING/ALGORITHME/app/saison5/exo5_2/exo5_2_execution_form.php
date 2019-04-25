<?php 
$random = rand(1,100);?>
<h2>EXECUTION EN PHP</h2>
<form action="exo5_2_execution_view.php?rand=<?php echo $random ?>" method="POST">
    <div class="form-group">
        <div class="row">
            <label for="choice" class="col-3">Choisissez un nombre : </label>
            <input type="number" class="form-control col-1" id="choice" name="choice" >
            <input type="hidden" value="<?php echo $random ?>" name="random">
        </div>
        <button type="submit" class="btn btn-primary col-2" id="submit">Valider</button>
    </div>
</form>