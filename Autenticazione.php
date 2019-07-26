<?php

$hostName = "localhost";
$userName = "pweb1819gilia";
$password = "GmDMs7hFnPFN";
$database = "my_pweb1819gilia";

$db_connection = new mysqli($hostname, $username, $password, $database);

if ($db_connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
   echo "connessione stabilità";
}


$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$mail = $_POST["mail"];


$sql = "INSERT INTO Credenziali (Nome, Cognome, Email)
VALUES ('$nome', '$cognome', '$mail')";

if (mysqli_query($db_connection, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db_connection);
}

mysqli_close($db_connection);




?>