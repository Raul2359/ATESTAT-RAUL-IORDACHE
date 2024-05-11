<?php

$servername = "localhost"; 
$username = "root"; 
$password = "mysql"; 
$database = "atestatraul2"; 


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['marca']) && !empty($_POST['model']) && !empty($_POST['an_fabricatie']) && !empty($_POST['kilometraj']) && !empty($_POST['pret']) && !empty($_POST['descriere'])) {
   
} else {
    
    header("Location: vinde_masina.php?eroare=1");
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!empty($_POST['marca']) && !empty($_POST['model']) && !empty($_POST['an_fabricatie']) && !empty($_POST['kilometraj']) && !empty($_POST['pret']) && !empty($_POST['descriere'])) {
       
        $marca = $_POST['marca'];
        $model = $_POST['model'];
        $an_fabricatie = $_POST['an_fabricatie'];
        $kilometraj = $_POST['kilometraj'];
        $pret = $_POST['pret'];
        $descriere = $_POST['descriere'];

        
        $sql = "INSERT INTO vanzari_masini (marca, model, an_fabricatie, kilometraj, pret, descriere) 
                VALUES ('$marca', '$model', '$an_fabricatie', '$kilometraj', '$pret', '$descriere')";

        if ($conn->query($sql) === TRUE) {
          
            header("Location: vinde_masina.php");
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
