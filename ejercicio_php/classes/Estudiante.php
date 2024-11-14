<?php
class Estudiante extends Persona {
    private $carrera;

    public function __construct($nombre, $edad, $carrera) {
        parent::__construct($nombre, $edad);
        $this->carrera = $carrera;
    }

    public function mostrarInfoEstudiante() {
        return parent::mostrarInfo() . " Carrera: $this->carrera.";
    }
}
?>
