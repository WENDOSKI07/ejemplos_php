<?php
// Ciclo for
echo "<strong>Ciclo for</strong><br>";
for ($i = 0; $i < 5; $i++) {
    echo "El valor de i es: $i<br>";
}

// Ciclo foreach (para recorrer arrays)
echo "<br><strong>Ciclo foreach</strong><br>";
$frutas = ["Manzana", "Naranja", "Plátano"];
foreach ($frutas as $fruta) {
    echo "Fruta: $fruta<br>";
}

// Ciclo foreach con clave y valor
echo "<br><strong>Ciclo foreach con clave => valor</strong><br>";
$edades = ["Juan" => 25, "Ana" => 28, "Carlos" => 30];
foreach ($edades as $nombre => $edad) {
    echo "$nombre tiene $edad años<br>";
}

// Ciclo while
echo "<br><strong>Ciclo while</strong><br>";
$j = 0;
while ($j < 3) {
    echo "El valor de j es: $j<br>";
    $j++;
}

// Ciclo do..while
echo "<br><strong>Ciclo do..while</strong><br>";
$k = 0;
do {
    echo "El valor de k es: $k<br>";
    $k++;
} while ($k < 3);

// Uso de break
echo "<br><strong>Uso de break</strong><br>";
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        echo "Se alcanza el valor 5, se interrumpe el ciclo con break<br>";
        break;
    }
    echo "Valor de i: $i<br>";
}

// Uso de continue
echo "<br><strong>Uso de continue</strong><br>";
for ($i = 0; $i < 5; $i++) {
    if ($i == 2) {
        echo "Se omite el valor 2 con continue<br>";
        continue; // Saltar a la siguiente iteración
    }
    echo "Valor de i: $i<br>";
}

// Ciclo anidado
echo "<br><strong>Ciclo for anidado</strong><br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo "i = $i, j = $j<br>";
    }
}

?>

