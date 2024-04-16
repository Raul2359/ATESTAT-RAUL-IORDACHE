<?php
include("include/header.php");
include("include/menu.php");
?>


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-white">Vinde-ți Mașina</h2>
            <p class="text-white">Completează detaliile mașinii pe care dorești să o vinzi:</p>
            <form action="procesare_vanzare.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="marca" class="text-white">Marca mașinii:</label>
                    <input type="text" class="form-control" id="marca" name="marca" required>
                </div>
                <div class="form-group">
                    <label for="model" class="text-white">Modelul mașinii:</label>
                    <input type="text" class="form-control" id="model" name="model" required>
                </div>
                <div class="form-group">
                    <label for="an_fabricatie" class="text-white">Anul fabricației:</label>
                    <input type="number" class="form-control" id="an_fabricatie" name="an_fabricatie" required>
                </div>
                <div class="form-group">
                    <label for="kilometraj" class="text-white">Kilometraj (km):</label>
                    <input type="number" class="form-control" id="kilometraj" name="kilometraj" required>
                </div>
                <div class="form-group">
                    <label for="pret" class="text-white">Preț (EUR):</label>
                    <input type="number" class="form-control" id="pret" name="pret" required>
                </div>
                <div class="form-group">
                    <label for="descriere" class="text-white">Descriere:</label>
                    <textarea class="form-control" id="descriere" name="descriere" required></textarea>
                </div>
                <div class="form-group">
                    <label for="imagini" class="text-white">Încarcă imagini cu mașina:</label>
                    <input type="file" class="form-control" id="imagini" name="imagini[]" multiple accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Trimite</button>
            </form>
        </div>
        <div class="col-md-6">
            <img src="https://st4.depositphotos.com/3936669/25152/v/1600/depositphotos_251524660-stock-illustration-auto-deal-logo-for-car.jpg" alt="Banner" class="img-fluid">
            <p class="text-white">Ai o masina si vrei s-o vinzi, dar nu vrei bataia de cap cauzata de tot procesul de publicare a anuntului, raspuns la telefoane si intalniri cu potentiali clientis au curiosi? Noi te putem ajuta! Completeaza formularul si noi putem vinde masina pentru tine!</p>
        </div>
    </div>
</div>

<?php
include("include/footer.php");
?>
