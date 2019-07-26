<?php

include "Database.php";

$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$mail = $_POST["email"];


$db = $db_connection;

$db->query("INSERT INTO Credenziali (Nome,Cognome,Email) VALUES ($nome,$cognome,$mail)");

















?>