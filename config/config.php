<?php

$host = "127.0.0.1";
$user = "root";
$pass = "Px2kTavo2022";
$dbname = "Impartech";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    //echo "Conexão feita com sucesso !";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    throw new PDOException($e);
}
