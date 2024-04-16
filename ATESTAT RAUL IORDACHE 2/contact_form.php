<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["message"])) {
        echo "Te rugăm să completezi toate câmpurile!";
    } else {
        
        echo "<h2>Datele trimise prin formular sunt:</h2>";
        echo "<p><strong>Nume:</strong> " . $_POST["name"] . "</p>";
        echo "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
        echo "<p><strong>Mesaj:</strong> " . $_POST["message"] . "</p>";
        
       
    }
} else {
    
    header("Location: contact.php");
    exit();
}
?>