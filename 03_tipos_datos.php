<?php
// Tipos de datos en PHP
$booleano = true;
$entero = 123;
$flotante = 12.34;
$cadena = "Hola, Mundo";
$nulo = null;

// Mostrar el tipo y valor de las variables
echo "Booleano: "; var_dump($booleano);
echo "<br>Entero: "; var_dump($entero);
echo "<br>Flotante: "; var_dump($flotante);
echo "<br>Cadena: "; var_dump($cadena);
echo "<br>Nulo: "; var_dump($nulo);

// Conversión de datos
$numero_como_texto = "150";
$numero = (int)$numero_como_texto;  // Convertir string a int
echo "<br>Conversión de string a entero: $numero";

// Creación de objetos
class Persona {
    public $nombre;
    public $edad;
}

$oscar = new Persona();
$oscar->nombre = "Oscar Ricaurte";
$oscar->edad = 25;

echo "<br>Objeto Persona: "; print_r($oscar);

// Conversiones automáticas de PHP (implícitas)
$resultado = $cadena + $entero;  // PHP convierte $cadena en número
echo "<br>Resultado de cadena + entero: "; var_dump($resultado);
?>

