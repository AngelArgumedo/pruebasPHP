<?php
$frutas = array("mango", "fresa", "cereza");
// Podemos asignar el indice manualmente aunque ya viene por defecto
$frutas[22]= "mango";
$frutas[10]= "fresa";
$frutas[33]= "cereza";

//y aceder a cada posicion por su indice 
echo"la fruta del dia es: ".$frutas[22];
?>