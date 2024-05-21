<?php 

function getToateMasinileStoc($limit=4){
    global $conn;
    $sql = "SELECT * FROM masini LIMIT $limit";
    $result = mysqli_query($conn, $sql);
    $masini = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $masini;
}
function getToateMasinileAnunt($limit=4){
    global $conn;
    $sql = "SELECT * FROM vanzari_masini LIMIT $limit";
    $result = mysqli_query($conn, $sql);
    $masini = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $masini;
}