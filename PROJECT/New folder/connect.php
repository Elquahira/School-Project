<?php
$host = '127.0.0.1'; // Server name
$db = 'hotel_management_system'; // Replace with your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password (empty if no password)

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
