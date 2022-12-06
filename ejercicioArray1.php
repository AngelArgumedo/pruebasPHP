<?php
print('Eliminar un elemento de un array <br>');
$array = array("red", "blue", "green");
//El siguiente método borra el elemento “green”
unset($array[2]);
print_r($array);

echo ('<br>' . '<br>');

print('de array a texto <br>');
$txt = array("pepe", "pablo", "juanjo", "chucho");
//El siguiente metodo convierte el array a texto
var_dump(implode(" , ", $txt));

echo ('<br>' . '<br>');

print('convertir de un texto a un array');
$textos = ('texto1, texto2, texto3, texto4');
$arrayx = explode(" , ", $textos);
echo('<br>');
var_dump($arrayx);
?>