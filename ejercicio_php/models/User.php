<?php
require_once 'config/db.php';

class User {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // La función espera tres parámetros: username, email y password
    public function create($username, $email, $password) {
        try {
            $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', password_hash($password, PASSWORD_DEFAULT)); // Cifrado de la contraseña
            $stmt->execute();
        } catch (PDOException $e) {
            echo "Error al guardar el usuario: " . $e->getMessage();
        }
    }
}
?>
