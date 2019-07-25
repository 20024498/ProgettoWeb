<?php

$hostName = "localhost";
$userName = "pweb1819gilia"
$password = "GmDMs7hFnPFN"
$database = "my_pweb1819gilia"

$db_connection = new PDO("mysql:host=$hostName;dbname=$database",$userName,$password);

if($db_connection){
    echo "connessione stabilità";
    }

else{
    echo "connessione fallita";
    }

?>