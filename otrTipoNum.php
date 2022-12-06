<?php
/*
Existen tipos y funciones numericas diseñados para trabajar fuera de los
limites del lenguaje, con cifras q podrian considerarse singulares 
este es el caso del concepto del infinito
*/
$x = 25;
var_dump(is_finite($x));
//var_dump funcion que muestra el tipo y el dato de una variable

$y  = 1.e958;
var_dump(is_finite($y));

$var1 = acos(8);
var_dump(is_nan($var1));

//PHP tiene la capacidad de discernir al escribir un numero como string
$nombre = "Pepito";
$edad = 25;
$numero = '24335344234';
var_dump(is_numeric($nombre));//false
var_dump(is_numeric($edad));//true
var_dump(is_numeric($numero));//true

//Para Castear un dato a otro tipo de dato
$num = 22.25;
$int_cast = (int) $num;
echo ($int_cast);//22

?>