<?php
// 1 equivale a true || 0 equivale a false

PHP_FLOAT_MAX;//el mayor numero soportado por php float
PHP_FLOAT_MIN;//el menot numero soportado por php float
-PHP_FLOAT_MAX; //el mayor numero negativo que es capaz php float
PHP_FLOAT_DIG;// el mayor numero de decimales que pueden presentarse sin perder precision
PHP_FLOAT_EPSILON;// el numero mas pequeño representable que no sea cero

$x = 2.0;
echo(is_float($x));
//respuesta => 1 = true 

?>