<?php

//$variable = array("Clave"=>"valor")
$edad = array("Jorge"=>"42", "Juana"=>"20", "Lola"=>"32");

//tmbn se puede hacer manualmente asi:
$edad['Jorge'] = '42';
$edad['Juana'] = '20';
$edad['Lola'] = '32';

echo "Lola tiene ".$edad['Lola'].' years old.';

?>