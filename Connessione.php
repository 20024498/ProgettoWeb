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

?>