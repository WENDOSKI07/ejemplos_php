<?php
// Uso de $_GET para obtener datos a través de la URL
if (isset($_GET['nombre'])) {
    echo "Hola, " . htmlspecialchars($_GET['nombre']) . "! Este es un ejemplo de GET.<br>";
}
?>

<form action="10_superglobales.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <br>
    <label for="email">Correo electrónico:</label>
    <input type="email" id="email" name="email">
    <br>
    <input type="submit" value="Enviar">
</form>
