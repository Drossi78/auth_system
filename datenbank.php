<?php
$host = "localhost";
$dbname = "auth_system";
$username = "root";  // Ändere dies, falls du einen anderen MySQL-Benutzer verwendest
$password = "";      // Falls du ein Passwort für MySQL hast, trage es hier ein

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Datenbankverbindungsfehler: " . $e->getMessage());
}
?>
