\<?php
require_once 'config/db.php';
require_once 'controllers/UserController.php';

$userController = new UserController($pdo);

// Maneja las solicitudes según la acción
$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Asegúrate de pasar los tres parámetros al controlador
    $userController->store($username, $email, $password);

    // Redirige a la página principal después de almacenar los datos
    header("Location: index2.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Enlace al archivo de estilos -->
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Formulario de Registro</h1>
            <form method="POST" action="index.php">
                <div class="form-group">
                    <label for="username">Nombre de usuario</label>
                    <input type="text" name="username" id="username" placeholder="Ingrese su nombre de usuario" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" name="email" id="email" placeholder="Ingrese su correo electrónico" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" required>
                </div>
                <button type="submit" class="submit-btn">Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>
