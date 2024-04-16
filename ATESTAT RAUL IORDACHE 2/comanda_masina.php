<?php
include("include/header.php");
include("include/menu.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-white">Comandă Mașină</h2>
            <p class="text-white">Completează detaliile mașinii pe care dorești să o comanzi:</p>
            <form action="procesare_comanda_masina.php" method="post">
                <div class="form-group">
                    <label for="tip_vehicul" class="text-white">Tip vehicul:</label>
                    <select class="form-control" id="tip_vehicul" name="tip_vehicul" required>
                        <option value="">Alege tipul vehiculului</option>
                        <option value="Sedan">Sedan</option>
                        <option value="SUV">SUV</option>
                      
                    </select>
                </div>
                <div class="form-group">
                    <label for="tip_cutie" class="text-white">Tip cutie:</label>
                    <select class="form-control" id="tip_cutie" name="tip_cutie" required>
                        <option value="">Alege tipul cutiei</option>
                        <option value="Manual">Manuală</option>
                        <option value="Automata">Automată</option>
                     
                    </select>
                </div>
                <div class="form-group">
                    <label for="tip_transmisie" class="text-white">Tip transmisie:</label>
                    <select class="form-control" id="tip_transmisie" name="tip_transmisie" required>
                        <option value="">Alege tipul transmisiei</option>
                        <option value="Manuala">Manuală</option>
                        <option value="Automata">Automată</option>
                    
                    </select>
                </div>
                <div class="form-group">
                    <label for="tip_combustibil" class="text-white">Tip combustibil:</label>
                    <select class="form-control" id="tip_combustibil" name="tip_combustibil" required>
                        <option value="">Alege tipul combustibilului</option>
                        <option value="Benzina">Benzină</option>
                        <option value="Motorina">Motorină</option>
                      
                    </select>
                </div>
                <div class="form-group">
                    <label for="producator" class="text-white">Producător:</label>
                    <input type="text" class="form-control" id="producator" name="producator" required>
                </div>
                <div class="form-group">
                    <label for="model" class="text-white">Model:</label>
                    <input type="text" class="form-control" id="model" name="model" required>
                </div>
                <div class="form-group">
                    <label for="an_fabricatie_de_la" class="text-white">An fabricație (de la):</label>
                    <input type="number" class="form-control" id="an_fabricatie_de_la" name="an_fabricatie_de_la" required>
                </div>
                <div class="form-group">
                    <label for="an_fabricatie_pana_la" class="text-white">An fabricație (pana la):</label>
                    <input type="number" class="form-control" id="an_fabricatie_pana_la" name="an_fabricatie_pana_la" required>
                </div>
                <div class="form-group">
                    <label for="buget_euro" class="text-white">Buget (Euro):</label>
                    <input type="number" class="form-control" id="buget_euro" name="buget_euro" required>
                </div>
                <div class="form-group">
                    <label for="nr_kilometri" class="text-white">Nr. Kilometri:</label>
                    <input type="number" class="form-control" id="nr_kilometri" name="nr_kilometri" required>
                </div>
                <div class="form-group">
                    <label for="judet" class="text-white">Județ:</label>
                    <input type="text" class="form-control" id="judet" name="judet" required>
                </div>
                <div class="form-group">
                    <label for="localitate" class="text-white">Localitate:</label>
                    <input type="text" class="form-control" id="localitate" name="localitate" required>
                </div>
                <div class="form-group">
                    <label for="nume" class="text-white">Nume:</label>
                    <input type="text" class="form-control" id="nume" name="nume" required>
                </div>
                <div class="form-group">
                    <label for="email" class="text-white">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telefon" class="text-white">Telefon:</label>
                    <input type="tel" class="form-control" id="telefon" name="telefon" required>
                </div>
                <div class="form-group">
                    <label for="detalii_suplimentare" class="text-white">Detalii suplimentare:</label>
                    <textarea class="form-control" id="detalii_suplimentare" name="detalii_suplimentare" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Trimite</button>
            </form>
        </div>
        <div class="col-md-6">
            <img src="https://st4.depositphotos.com/3936669/25152/v/1600/depositphotos_251524660-stock-illustration-auto-deal-logo-for-car.jpg" alt="Banner Comandă Mașină" class="img-fluid">
            <p class="text-white">Nu gasesti masina cautata? Nici o problema!
Iti putem aduce masina dorita, pe comanda. Cu garantie si verificare tehnica. Tot ce trebuie sa faci este sa completezi formularul de comanda si noi te vom contacta in cel mai scurt timp pentru stabilirea detaliilor.</p>
        </div>
    </div>
</div>

<?php
include("include/footer.php");
?>
