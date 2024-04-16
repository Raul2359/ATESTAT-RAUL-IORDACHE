<?php

include("include/header.php");
include("include/menu.php");


$servername = "localhost";
$username = "root";
$password = "mysql";
$database = "atestatraul";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
}


if(isset($_GET['id_masina'])) {

    $id_masina = $conn->real_escape_string($_GET['id_masina']);

 
    $sql_anunt = "SELECT * FROM anunturi WHERE ID_Masina = '$id_masina'";
    $result_anunt = $conn->query($sql_anunt);

    
    $sql_poze = "SELECT * FROM poze_masini WHERE ID_Masina = '$id_masina'";
    $result_poze = $conn->query($sql_poze);

    
    if ($result_anunt && $result_anunt->num_rows > 0) {
        
        $row_anunt = $result_anunt->fetch_assoc();
?>
        <div>
            <h2><?php echo $row_anunt['Detalii']; ?></h2>
           
            <?php
            if ($result_poze && $result_poze->num_rows > 0) {
                ?>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php
                        
                        $num_images = $result_poze->num_rows;
                        for ($i = 0; $i < $num_images; $i++) {
                            $active_class = ($i == 0) ? 'active' : ''; 
                            echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $i . '" class="' . $active_class . '"></li>';
                        }
                        ?>
                    </ol>
                    <div class="carousel-inner">
                        <?php
                        
                        $counter = 0;
                        while ($row_poza = $result_poze->fetch_assoc()) {
                            $active_class = ($counter == 0) ? 'active' : ''; 
                            echo '<div class="carousel-item ' . $active_class . '">';
                            echo '<img class="d-block w-100" src="' . $row_poza['Cale_Imagine'] . '" alt="Imagine mașină">';
                            echo '</div>';
                            $counter++;
                        }
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            <?php
            } else {
                echo "Nu s-au găsit poze pentru această mașină.";
            }
            ?>
            <p>Nume vânzător: <?php echo $row_anunt['Nume_Vanzator']; ?></p>
            <p>Telefon vânzător: <?php echo $row_anunt['Telefon_Vanzator']; ?></p>
            <p>Email vânzător: <?php echo $row_anunt['Email_Vanzator']; ?></p>
           
        </div>
<?php
    } else {
        echo "Nu s-au găsit detalii despre anunț pentru această mașină.";
    }
} else {
    echo "ID-ul mașinii lipsește.";
}


$conn->close();


include("include/footer.php");
?>