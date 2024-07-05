<?php

// Ejercicio 5: Escribe una función llamada obtenerDiaSemana que tome un número entero del 1 al 7 como parámetro y devuelva el día de la semana correspondiente, donde 1 es "Lunes", 2 es "Martes", etc.

// Complejidad: BAJA (1 punto)

obtenerDiaSemana(1, 4);
function obtenerDiaSemana($numero){
    $mes = array(
        "1" => "Lunes",
        "2" => "Martes",
        "3" => "Miercoles",
        "4" => "Jueves",
    );

echo $mes[$numero]; 

}
//Tests
