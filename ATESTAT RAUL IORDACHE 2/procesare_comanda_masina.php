<?php

$servername = "localhost"; 
$username = "root"; 
$password = "mysql"; 
$database = "atestatraul"; 


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['marca']) && !empty($_POST['model']) && !empty($_POST['an_fabricatie']) && !empty($_POST['kilometraj']) && !empty($_POST['pret']) && !empty($_POST['descriere'])) {
    
} else {
   
    header("Location: vindeti_masina.php?eroare=1");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

   
    $tip_vehicul = $tip_cutie = $tip_transmisie = $tip_combustibil = $producator = $model = $an_fabricatie_de_la = $an_fabricatie_pana_la = $buget_euro = $nr_kilometri = $judet = $localitate = $nume = $email = $telefon = $detalii_suplimentare = "";

   
    if (!empty($_POST['tip_vehicul']) && !empty($_POST['tip_cutie']) && !empty($_POST['tip_transmisie']) && !empty($_POST['tip_combustibil']) && !empty($_POST['producator']) && !empty($_POST['model']) && !empty($_POST['an_fabricatie_de_la']) && !empty($_POST['an_fabricatie_pana_la']) && !empty($_POST['buget_euro']) && !empty($_POST['nr_kilometri']) && !empty($_POST['judet']) && !empty($_POST['localitate']) && !empty($_POST['nume']) && !empty($_POST['email']) && !empty($_POST['telefon']) && !empty($_POST['detalii_suplimentare'])) {
        
     
        $tip_vehicul = test_input($_POST['tip_vehicul']);
        $tip_cutie = test_input($_POST['tip_cutie']);
        $tip_transmisie = test_input($_POST['tip_transmisie']);
        $tip_combustibil = test_input($_POST['tip_combustibil']);
        $producator = test_input($_POST['producator']);
        $model = test_input($_POST['model']);
        $an_fabricatie_de_la = test_input($_POST['an_fabricatie_de_la']);
        $an_fabricatie_pana_la = test_input($_POST['an_fabricatie_pana_la']);
        $buget_euro = test_input($_POST['buget_euro']);
        $nr_kilometri = test_input($_POST['nr_kilometri']);
        $judet = test_input($_POST['judet']);
        $localitate = test_input($_POST['localitate']);
        $nume = test_input($_POST['nume']);
        $email = test_input($_POST['email']);
        $telefon = test_input($_POST['telefon']);
        $detalii_suplimentare = test_input($_POST['detalii_suplimentare']);

       
        $sql = "INSERT INTO comenzi_masini (id, tip_vehicul, tip_cutie, tip_transmisie, tip_combustibil, producator, model, an_fabricatie_de_la, an_fabricatie_pana_la, buget_euro, nr_kilometri, judet, localitate, nume, email, telefon, detalii_suplimentare) VALUES ('$tip_vehicul', '$tip_cutie', '$tip_transmisie', '$tip_combustibil', '$producator', '$model', '$an_fabricatie_de_la', '$an_fabricatie_pana_la', '$buget_euro', '$nr_kilometri', '$judet', '$localitate', '$nume', '$email', '$telefon', '$detalii_suplimentare')";

        if ($conn->query($sql) === TRUE) {
            
            header("Location: succes_comanda_masina.php");
            exit;
        } else {
            
            header("Location: eroare.php");
            exit;
        }
    } else {
       
        header("Location: comanda_masina.php?eroare=1");
        exit;
    }
} else {
    
    header("Location: eroare.php");
    exit;
}
?>
