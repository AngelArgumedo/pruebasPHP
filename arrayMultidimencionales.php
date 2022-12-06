<?php
/*
Un array Multidimencional es un array que alberga tantas capas de arrays como dimensiones haya 
en ellos.

Un Arry bidimencional es un array de un array, es decir dos capas
Un array Tridimencional es un array de arrays de arrays, es decir de tres capas  

*/
$frutas = array (
    array("mango",23,10),//esta seria la posicion 0
    array("Sandia",10,30),
    array("naranja",5,2),
    array("fresa",17,15)
);
//      Bidimencional
//                $array[y][x]
echo "tenemos: " .$frutas[0][0]." , vendidas: " .$frutas[0][1] . " , Disponibles: " .$frutas[0][2] ."</br>";
echo "tenemos: " .$frutas[1][0]." , vendidas: " .$frutas[1][1] . " , Disponibles: " .$frutas[1][2] ."</br>";
echo "tenemos: " .$frutas[2][0]." , vendidas: " .$frutas[2][1] . " , Disponibles: " .$frutas[2][2] ."</br>";
echo "tenemos: " .$frutas[3][0]." , vendidas: " .$frutas[3][1] . " , Disponibles: " .$frutas[3][2] ."</br>";

//-------------- probemos crear un array tridimiencional-------------



?>