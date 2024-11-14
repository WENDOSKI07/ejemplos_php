<?php
require_once 'config/db.php';
require_once 'controllers/UserController.php';

// Crear una instancia del controlador de usuario
$userController = new UserController($pdo);
?>

<!DOCTYPE html>
<html lang="es">

<?php require_once 'layouts/head.php'; ?>

<head>
    <!-- Enlazar al archivo CSS que acabamos de crear -->
    <link rel="stylesheet" href="css/styles_main.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php //require_once 'layouts/preloader.php'; ?>
        <?php require_once 'layouts/navbar.php'; ?>
        <?php require_once 'layouts/sidebar.php'; ?>

        <div class="content-wrapper">
            <div class="content-header">
                <h1>Bienvenido a la Página Principal</h1>
            </div>

            <div class="content">
                <p>Este es el contenido principal de la página, donde podrás ver más información o realizar acciones.</p>
                <!-- Aquí puedes agregar más contenido dinámico si es necesario -->
            </div>
        </div>

        <?php require_once 'layouts/footer.php'; ?>

    </div>
</body>

</html>
