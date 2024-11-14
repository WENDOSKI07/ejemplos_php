<?php
// Uso de echo para imprimir cadenas de texto
echo "Hola, esto es un mensaje impreso con echo.<br>";

// Uso de print, similar a echo, pero devuelve 1 (se puede usar en expresiones)
print "Hola, esto es un mensaje impreso con print.<br>";

// Diferencia: echo puede imprimir múltiples argumentos, print no.
echo "Mensaje 1 ", "Mensaje 2 ", "Mensaje 3<br>";
// print "Mensaje 1", "Mensaje 2"; // Esto generará un error

// var_dump para mostrar información detallada de una variable
$numero = 100;
$texto = "Esto es una cadena de texto";
$mi_array = array(1, 2, 3, "cuatro");

var_dump($numero);  // Tipo y valor: int(100)
echo "<br>";
var_dump($texto);   // Tipo y valor: string(26) "Esto es una cadena de texto"
echo "<br>";
var_dump($mi_array);  // Detalles de cada elemento del array
echo "<br>";

// print_r para mostrar arrays u objetos de manera legible para humanos
print_r($mi_array);  // Similar a var_dump, pero más legible
?>

