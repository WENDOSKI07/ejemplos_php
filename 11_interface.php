<?php
// Definición de una interfaz
interface Animal {
    public function hacerSonido();
}

// Implementación de la interfaz en una clase
class Perro implements Animal {
    public function hacerSonido() {
        return "Guau!";
    }
}

class Gato implements Animal {
    public function hacerSonido() {
        return "Miau!";
    }
}
?>
