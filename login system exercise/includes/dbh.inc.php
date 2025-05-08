<?php

$host = 'localhost';
$dbname = 'myfirstdatabase';
$dbsuername = 'root';
$dbpassword = '';

try {
    $pdo = new PDO("mysql:host=$host; dbname=$dbname", $dbsuername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
