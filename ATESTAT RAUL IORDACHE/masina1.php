<?php
// Includeți fișierele necesare pentru header și footer
include("include/header.php");
include("include/menu.php");

// Conectare la baza de date
$servername = "localhost";
$username = "root";
$password = "mysql";
$database = "atestatraul";

$conn = new mysqli($servername, $username, $password, $database);

// Verificare conexiune
if ($conn->connect_error) {
    die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
}

// Verificați dacă s-a transmis un ID de mașină prin metoda GET
if(isset($_GET['id_masina'])) {
    // Escapăm ID-ul pentru a preveni SQL injection
    $id_masina = $conn->real_escape_string($_GET['id_masina']);

    // Interogăm baza de date pentru detalii despre anunțul asociat mașinii cu ID-ul dat
    $sql_anunt = "SELECT * FROM anunturi WHERE ID_Masina = '$id_masina'";
    $result_anunt = $conn->query($sql_anunt);

    // Interogăm baza de date pentru pozele asociate mașinii cu ID-ul dat
    $sql_poze = "SELECT * FROM poze_masini WHERE ID_Masina = '$id_masina'";
    $result_poze = $conn->query($sql_poze);

    // Verificăm dacă s-au găsit rezultate pentru anunț
    if ($result_anunt && $result_anunt->num_rows > 0) {
        // Afișăm detaliile despre anunț
        $row_anunt = $result_anunt->fetch_assoc();
?>
        <div>
            <h2><?php echo $row_anunt['Detalii']; ?></h2>
            <!-- Afișăm pozele asociate anunțului -->
            <?php
            if ($result_poze && $result_poze->num_rows > 0) {
                while ($row_poza = $result_poze->fetch_assoc()) {
                    echo '<img src="' . $row_poza['Cale_Imagine'] . '" alt="Imagine mașină">';
                }
            } else {
                echo "Nu s-au găsit poze pentru această mașină.";
            }
            ?>
            <p>Nume vânzător: <?php echo $row_anunt['Nume_Vanzator']; ?></p>
            <p>Telefon vânzător: <?php echo $row_anunt['Telefon_Vanzator']; ?></p>
            <p>Email vânzător: <?php echo $row_anunt['Email_Vanzator']; ?></p>
            <!-- Adăugați aici alte detalii pe care doriți să le afișați -->
        </div>
<?php
    } else {
        echo "Nu s-au găsit detalii despre anunț pentru această mașină.";
    }
} else {
    echo "ID-ul mașinii lipsește.";
}

// Închideți conexiunea la baza de date
$conn->close();

// Includeți footer-ul paginii
include("include/footer.php");
?>