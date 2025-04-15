<?php
try {
    $dbh = new PDO(
        'mysql:host=localhost;dbname=travel_agency;charset=utf8',
        'root',
        '', // No password by default
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
