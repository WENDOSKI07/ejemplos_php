<?php
$edad = 20;

// If, else
if ($edad >= 18) {
    echo "Eres mayor de edad.<br>";
} else {
    echo "Eres menor de edad.<br>";
}

// Switch
$dia = "lunes";
switch ($dia) {
    case "lunes":
        echo "Es lunes.<br>";
        break;
    case "martes":
        echo "Es martes.<br>";
        break;
    default:
        echo "Es otro día.<br>";
}

// Operador ternario
$mensaje = ($edad >= 18) ? "Mayor de edad" : "Menor de edad";
echo $mensaje . "<br>";

// Coalescencia nula (PHP 7+)
$nombre = $_GET['nombre'] ?? 'Invitado';  // Si $_GET['nombre'] no existe, usa 'Invitado'
echo "Hola, $nombre<br>";
?>

