<?php
include("include/header.php");
include("include/menu.php");
// Conectare la baza de date - modifică aici pentru a se potrivi cu configurarea ta
$servername = "localhost";
$username = "root";
$password = "mysql";
$database = "atestatraul2";

$conn = new mysqli($servername, $username, $password, $database);

// Verifică conexiunea
if ($conn->connect_error) {
    die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
}

// Verifică dacă formularul de înregistrare a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Preia datele din formular
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Creeze un query pentru inserarea datelor în tabelul utilizatori
    $sql = "INSERT INTO utilizatori (username, email, password) VALUES ('$username', '$email', '$password')";

    // Execută query-ul
    if ($conn->query($sql) === TRUE) {
        echo "Înregistrarea a fost efectuată cu succes!";
    } else {
        echo "Eroare la înregistrare: " . $conn->error;
    }
}
?>
<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <form action="" method="GET" class="bg-black text-white p-4 shadow-sm rounded" style="color: black; background-color: #000; border-color: #555;">
        <h2 class="mb-4 text-center">Logare</h2>
        <div class="form-group">
          <label for="username">Nume de utilizator:</label>
          <input type="text" class="form-control bg-black text-black" id="username" name="username" placeholder="Marcel075">
        </div>
        <div class="form-group">
          <label for="password">Parola:</label>
          <input type="password" class="form-control bg-black text-black" id="password" name="password" placeholder="Introduceți parola">
        </div>
        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block">Intră în cont</button>
            <div class="form-text text-center mt-2">Nu aveți cont? <a href="inregistrare.php">Înregistrați-vă aici</a></div>
          </div>
          <div class="col">
            
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include("include/footer.php"); ?>
