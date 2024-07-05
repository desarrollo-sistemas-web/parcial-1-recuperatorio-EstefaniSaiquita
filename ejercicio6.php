<?php

// Ejercicio 6: Generar un número al azar entre 1 y 100 y mostrarlo. Mostrar todos los números comprendidos entre 1 y el aleatorio, de mayor a menor y viceversa.
// Complejidad: MEDIA (2 puntos)

$num = rand(1,10);

for ($i=1; $i <= $num; $i++) { 
    echo $i."<br>";
}

echo "<br>";

for ($i=$num; $i >= 1; $i--) { 
    echo $i."<br>";
}

