<?php
include("include/header.php");
include("include/menu.php");
?>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-6">
          <img src="https://st4.depositphotos.com/3936669/25152/v/1600/depositphotos_251524660-stock-illustration-auto-deal-logo-for-car.jpg" class="img-fluid" alt="Banner">
          <div class="mt-3 text-white">
            <h4>Detalii dealer:</h4>
            <p>Nume dealer: AUTODEAL</p>
            <p>Adresă: Strada Comertului nr 5, Domnești, Ilfov</p>
            <p>Telefon: 0726 704 039</p>
            <p>Email: autodeal2024@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card bg-dark text-white">
            <div class="card-body">
              <h2 class="card-title text-center mb-4">Contactează-ne</h2>
              <form action="contact_form.php" method="POST">
                <div class="mb-3">
                  <label for="name" class="form-label">Nume:</label>
                  <input type="text" class="form-control bg-dark text-white" id="name" name="name" placeholder="Numele tău">
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email:</label>
                  <input type="email" class="form-control bg-dark text-white" id="email" name="email" placeholder="Adresa ta de email">
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Mesaj:</label>
                  <textarea class="form-control bg-dark text-white" id="message" name="message" rows="5" placeholder="Mesajul tău"></textarea>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Trimite</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include("include/footer.php");
?>
