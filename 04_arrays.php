<?php
// Array indexado
$numeros = [10, 20, 30];
echo "Primer número: " . $numeros[0] . "<br>";

// Array asociativo
$edades = [
    "Oscar" => 25,
    "Ana" => 22,
    "Luis" => 30
];
echo "La edad de Oscar es: " . $edades["Oscar"] . "<br>";

// Array multidimensional
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
echo "Elemento en la posición [1][1]: " . $matriz[1][1] . "<br>";

// Concatenación
$saludo = "Hola";
$nombre = "Oscar";
echo $saludo . ", " . $nombre . "!<br>";

// Operadores
$valor = 5;
$valor += 10;  // Suma 10
echo "Valor incrementado: $valor<br>";
?>

