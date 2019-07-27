<?php
 
include 'Connessione.php';

$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$mail = $_POST["mail"];


$sql = "INSERT INTO Credenziali (Nome, Cognome, Email)
VALUES ('$nome', '$cognome', '$mail')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn;



?>