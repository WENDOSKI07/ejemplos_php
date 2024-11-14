<?php
$host = 'localhost'; // o la dirección de tu servidor de base de datos
$dbname = 'mydb';
$username = 'root'; // tu usuario de base de datos
$password = ''; // tu contraseña de base de datos

try {
    // Utilizando las variables definidas para mayor flexibilidad
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
