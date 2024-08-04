<?php
$dotenv = Dotenv\Dotenv::createImmutable("../" . __DIR__);
$dotenv->load();

$host = $_ENV["DB_HOST"];
$pass = $_ENV["DB_PASS"];
$username = $_ENV["DB_USER"];
$dbname = $_ENV["DB_NAME"];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
