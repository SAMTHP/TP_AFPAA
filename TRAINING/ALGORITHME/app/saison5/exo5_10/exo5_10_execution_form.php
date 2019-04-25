<h2>EXECUTION EN PHP</h2>
<h3>Veuillez saisir la quantité voulue pour chaque produit :</h3>
<form action="exo5_10_execution_view.php?show=OK" method="POST">
    <div class="form-group">
        <div class="row">
            <div style="display: flex; justify-content: center;">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">PRODUIT</th>
                        <th scope="col">PRIX</th>
                        <th scope="col">QUANTITES</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Pomme</th>
                        <td>2 €</td>
                        <td><input type="number" class="form-control" id="quantity-apple" name="quantity-apple" min="1" max="100"></td>
                    </tr>
                    <tr>
                        <th scope="row">Lait</th>
                        <td>1 €</td>
                        <td><input type="number" class="form-control" id="quantity-milk" name="quantity-milk" min="1" max="100"></td>
                    </tr>
                    <tr>
                        <th scope="row">iPhone</th>
                        <td>689 €</td>
                        <td><input type="number" class="form-control" id="quantity-iphone" name="quantity-iphone" min="1" max="100"></td>
                    </tr>
                    <tr>
                        <th scope="row">PC Lenovo i7</th>
                        <td>869 €</td>
                        <td><input type="number" class="form-control" id="quantity-pc" name="quantity-pc" min="1" max="100"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <br>
        <button type="submit" class="btn btn-primary col-2" id="submit">Valider</button>
    </div>
</form>