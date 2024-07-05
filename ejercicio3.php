<?php

// Ejercicio 3: Escribe una función llamada obtenerFactorial que tome un número entero no negativo como parámetro y calcule su factorial. El factorial de un número se obtiene multiplicando todos los números enteros positivos desde 1 hasta el número dado.
// Complejidad: MEDIA (2 puntos)

obtenerFactorial(5);
function obtenerFactorial($numero){ 
    for ($i=0; $i <= $numero ; $i++) { 
        echo $numero*$i . "";
    }
}

//Tests
