<?php

$frutas = array('manzanas', 'mangos', 'frezas');
echo count($frutas);//cuenta cuantos elementos hay en un array
echo ('<br>');
//otras funciones utiles son sort y rsort que permiten ordenar los elementos de un array 
//en orden ascencente y descendente respectivamente
$nombres = array('bartolomeo', 'androx', 'coran');
sort($nombres);//ordena de manera ascendente
print_r($nombres);

echo ('<br>');

$numeros = array(1 , 5 , 3);
rsort($numeros);//ordena de manera descendente
print_r($numeros);

?>