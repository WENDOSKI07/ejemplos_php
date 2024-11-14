<?php
// Función con parámetros por valor
function saludar($nombre) {
    return "Hola, $nombre!";
}

echo saludar("Oscar") . "<br>";

// Parámetros por referencia (modifica el valor original)
function incrementar(&$valor) {
    $valor++;
}

$numero = 5;
incrementar($numero);
echo "Número incrementado: $numero<br>";

// Parámetros con valores por defecto
function saludarPorDefecto($nombre = "Visitante") {
    return "Hola, $nombre!";
}

echo saludarPorDefecto() . "<br>";  // Usa el valor por defecto

// Parámetros con fuerte tipado
declare(strict_types=1);
function sumar(int $a, int $b): int {
    return $a + $b;
}

echo "Suma: " . sumar(5, 10) . "<br>";

// Argumentos variables
function sumarVarios(...$numeros) {
    return array_sum($numeros);
}

echo "Suma de varios: " . sumarVarios(1, 2, 3, 4) . "<br>";
?>

