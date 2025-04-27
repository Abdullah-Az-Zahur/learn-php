<?php
try {
    $pdo = new PDO('sqlite:contact.db');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("CREATE TABLE IF NOT EXISTS contacts (
        id INTEGER PRIMARY KEY,
        name TEXT NOT NULL,
        email TEXT NOT NULL,
        phone NUMBER,
        image TEXT
    );");
    return $pdo;
} catch (PDOException $e) {
    return null;
}
