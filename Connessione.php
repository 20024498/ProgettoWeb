<?php


$servername = "localhost";
$username = "pweb1819gilia";
$password = "GmDMs7hFnPFN";
$dbname = "my_pweb1819gilia";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

else{
    
    echo "connessione stabilita"
}

?>