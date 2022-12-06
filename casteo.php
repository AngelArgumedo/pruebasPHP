<?php
/*
los posbles valores para php son:
boolean || Bool : para boleanos
Integer || Int : para enteros
Floar || floar : para coma flotante
String : para cadenas de caracteres
Array : para colecciones, areglos o vectores
Object : para objetos 
Null : para ausencia total de datos
*/

//De float a Int
$var = 5.34;
settype($var, 'int');
var_dump ($var);//int 5

//de Int a float
$var2 = 4;
settype($var2, 'float');
var_dump($var2);// 4.0



?>