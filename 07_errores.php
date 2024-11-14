<?php
// Capturar errores con try/catch
try {
    if (!file_exists("archivo.txt")) {
        throw new Exception("El archivo no existe.");
    }
} catch (Exception $e) {
    echo "Error capturado: " . $e->getMessage() . "<br>";
}
?>

