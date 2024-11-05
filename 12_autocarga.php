<?php
// Autoloader: función que carga clases automáticamente
function autoload($className) {
    $file = 'classes/' . $className . '.php';
    if (file_exists($file)) {
        include $file;
    }
}

// Registro del autoloader
spl_autoload_register('autoload');

// Uso de la clase Persona
$persona1 = new Persona("Oscar", 23);
echo $persona1->mostrarInfo() . "<br>";

// Uso de la clase Estudiante
$estudiante1 = new Estudiante("Juan", 21, "Tecnología en Sistemas");
echo $estudiante1->mostrarInfoEstudiante() . "<br>";
?>

