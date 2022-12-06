<?php

PHP_INT_MAX; //para saber el valor maximo de un entero soportado
PHP_INT_MIN; //Para saber el valor minimo de un entero soportado
PHP_INT_SIZE;//Para saber el rango de un integer en bites

$x = 5;
echo (is_long($x));
echo (is_integer($x));
echo (is_int($x));
//=> respuesta 1 "que es true"
?>