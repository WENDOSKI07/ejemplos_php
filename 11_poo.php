<?php
// Definición de la clase Persona
class Persona {
    // Atributos de la clase
    private $nombre;
    private $edad;

    // Constructor de la clase
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método para mostrar información de la persona
    public function mostrarInfo() {
        return "Nombre: $this->nombre, Edad: $this->edad años.";
    }

    // Métodos getter y setter para nombre
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Métodos getter y setter para edad
    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }
}

// Definición de la clase Estudiante que hereda de Persona
class Estudiante extends Persona {
    private $carrera;

    public function __construct($nombre, $edad, $carrera) {
        // Llamada al constructor de la clase padre
        parent::__construct($nombre, $edad);
        $this->carrera = $carrera;
    }

    // Método para mostrar información del estudiante
    public function mostrarInfoEstudiante() {
        return parent::mostrarInfo() . " Carrera: $this->carrera.";
    }
}

// Uso de la clase Persona
$persona1 = new Persona("Oscar", 23);
echo $persona1->mostrarInfo() . "<br>";

// Uso de la clase Estudiante
$estudiante1 = new Estudiante("Juan", 21, "Tecnología en Sistemas");
echo $estudiante1->mostrarInfoEstudiante() . "<br>";

// Uso de interfaces
include '11_interface.php'; // Incluir la interfaz y su implementación

$miPerro = new Perro();
$miGato = new Gato();

echo "El sonido de mi perro es: " . $miPerro->hacerSonido() . "<br>";
echo "El sonido de mi gato es: " . $miGato->hacerSonido() . "<br>";

// Mostrar información de la persona usando métodos getter
echo "Nombre desde getter: " . $persona1->getNombre() . "<br>";
echo "Edad desde getter: " . $persona1->getEdad() . "<br>";

// Cambiar el nombre y la edad de la persona usando métodos setter
$persona1->setNombre("Carlos");
$persona1->setEdad(30);
echo "Información actualizada: " . $persona1->mostrarInfo() . "<br>";
?>

