<?php
// Uso de include (incluye el archivo, pero si no lo encuentra, muestra un warning y continúa)
echo "<strong>Incluir cabecera con include:</strong><br>";
include 'cabecera.php';

// Uso de require (incluye el archivo, pero si no lo encuentra, muestra un error fatal y detiene la ejecución)
echo "<strong>Incluir funciones con require:</strong><br>";
require 'funciones.php';
echo saludar("Oscar Ricaurte");

// Uso de include_once (se asegura de que el archivo solo se incluya una vez, aunque se llame varias veces)
echo "<strong>Incluir cabecera con include_once:</strong><br>";
include_once 'cabecera.php';  // No se incluirá de nuevo porque ya se incluyó antes

// Uso de require_once (al igual que include_once, se asegura de que el archivo solo se incluya una vez)
echo "<strong>Incluir pie de página con require_once:</strong><br>";
require_once 'pie.php';  // Incluir el pie de página solo una vez

// Si require_once se llama nuevamente, no volverá a incluir el archivo
require_once 'pie.php';  // No se mostrará dos veces
?>

