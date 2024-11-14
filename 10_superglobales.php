<?php
// Manejo de $_POST
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nombre']) && isset($_POST['email'])) {
    echo "<strong>Uso de \$_POST:</strong><br>";
    echo "Nombre: " . htmlspecialchars($_POST['nombre']) . "<br>";
    echo "Correo: " . htmlspecialchars($_POST['email']) . "<br>";
}

// Manejo de $_FILES
if (isset($_FILES['archivo'])) {
    echo "<strong>Uso de \$_FILES:</strong><br>";
    if ($_FILES['archivo']['error'] == UPLOAD_ERR_OK) {
        $nombreArchivo = $_FILES['archivo']['name'];
        $ubicacionTemporal = $_FILES['archivo']['tmp_name'];
        $ubicacionFinal = "uploads/" . $nombreArchivo;
        
        // Mover el archivo a la carpeta final
        if (move_uploaded_file($ubicacionTemporal, $ubicacionFinal)) {
            echo "Archivo subido con éxito: $nombreArchivo<br>";
        } else {
            echo "Error al subir el archivo.<br>";
        }
    } else {
        echo "Error en la subida del archivo.<br>";
    }
}

// Uso de $_GET
echo "<br><strong>Uso de \$_GET:</strong><br>";
if (isset($_GET['nombre'])) {
    echo "Nombre enviado por GET: " . htmlspecialchars($_GET['nombre']) . "<br>";
}

// Uso de $_REQUEST (combina $_GET, $_POST y $_COOKIE)
echo "<br><strong>Uso de \$_REQUEST:</strong><br>";
if (isset($_REQUEST['nombre'])) {
    echo "Nombre desde \$_REQUEST: " . htmlspecialchars($_REQUEST['nombre']) . "<br>";
}

// Iniciar sesión
session_start();

// Manejo de $_SESSION
echo "<br><strong>Uso de \$_SESSION:</strong><br>";
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}
$_SESSION['contador']++;
echo "Visitas en esta sesión: " . $_SESSION['contador'] . "<br>";

// Manejo de $_COOKIE
echo "<br><strong>Uso de \$_COOKIE:</strong><br>";
if (isset($_COOKIE['usuario'])) {
    echo "Usuario almacenado en la cookie: " . htmlspecialchars($_COOKIE['usuario']) . "<br>";
} else {
    // Crear una cookie con duración de 1 hora
    setcookie('usuario', 'Oscar Ricaurte', time() + 3600);
    echo "Cookie 'usuario' creada.<br>";
}
?>

