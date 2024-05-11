<?php
include("include/header.php");
include("include/menu.php");

// Parametrii de conectare la baza de date
$servername = "localhost";
$username = "root";
$password = "mysql";
$database = "atestatraul2";

// Creează conexiunea
$conn = new mysqli($servername, $username, $password, $database);

// Verifică conexiunea
if ($conn->connect_error) {
    die("Conexiunea la bază de date a eșuat: " . $conn->connect_error);
}

// Variabila pentru mesajul de succes sau de eroare
$feedback = "";

// Verifică dacă formularul a fost trimis prin metoda POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Colectează datele trimise prin formular
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Inserează datele în baza de date folosind o interogare pregătită pentru a preveni injecțiile SQL
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    
    // Execută interogarea
    if ($stmt->execute()) {
        // Mesaj de succes
        $feedback = "Mesajul tău a fost trimis cu succes!";
    } else {
        // Mesaj de eroare
        $feedback = "Eroare la trimiterea mesajului.";
    }

    // Închide declarația
    $stmt->close();
}

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
              
              <!-- Afiseaza feedbackul -->
              <div class="feedback"><?php echo $feedback; ?></div>
              
              <form action="" method="POST">
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
