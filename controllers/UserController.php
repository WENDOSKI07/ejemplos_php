<?php
require_once 'models/User.php';

class UserController {
    private $user;

    public function __construct($pdo) {
        $this->user = new User($pdo);
    }

    // Asegúrate de pasar los tres parámetros: username, email y password
    public function store($username, $email, $password) {
        $this->user->create($username, $email, $password);
    }
}
?>
