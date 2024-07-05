<?php

// Ejercicio 13:  Crea una función llamada encontrarPalabraMasLarga que tome una cadena de texto como parámetro y devuelva la palabra más larga que se encuentra en la cadena.

// Complejidad: ALTA (3 puntos)

//Pista: puedes usar la función explode() para separar la cadena en palabras y strlen() contar los caracteres. Busca en la documentación de PHP cómo se usa.


function encontrarPalabraMasLarga($cadena){
    
}

//Tests
assert("palabra" == encontrarPalabraMasLarga("Esta es una palabra"), "La palabra más larga es 'palabra'");
assert("palabra" == encontrarPalabraMasLarga("Esta es una palabra larga"), "La palabra más larga es 'palabra'");
assert("complicada" == encontrarPalabraMasLarga("Esta es una palabra larga y complicada"), "La palabra más larga es 'complicada'");