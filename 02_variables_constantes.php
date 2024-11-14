<?php
// Declaración de variables
$nombre = "Oscar Ricaurte";  // Variable de tipo string
$edad = 25;  // Variable de tipo entero
$activo = true;  // Variable booleana

echo "Nombre: $nombre, Edad: $edad, Activo: $activo<br>";

// Declaración de constantes (no cambian su valor durante la ejecución)
define("PI", 3.1416);
echo "El valor de PI es: " . PI . "<br>";

function sumar(int $a, int $b): int {
    return $a + $b;
}

echo "Suma con fuerte tipado: " . sumar(10, 20) . "<br>";

// Si intentamos pasar un string, el estricto tipado lanzará un error.
// echo sumar("10", 20);  // Esto fallará

// Débil tipado: PHP convierte automáticamente los tipos cuando es posible
function sumarDebil($a, $b) {
    return $a + $b;
}

echo "Suma con débil tipado: " . sumarDebil("10", 20) . "<br>";
?>
