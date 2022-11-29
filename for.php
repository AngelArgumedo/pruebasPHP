<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Ingrese un numero positivo
        <br>
        <input type="number" name="numero" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php

if ($_POST) {
    $numero = $_POST['numero'];
    if ($numero < 0) {
        echo '<script language="javascript">alert("Porfavor digite un numero positivo");</script>';
        //sleep(10);
        //header("location:for.php");
    }else {
        //ciclo for
        for ($i=$numero; $i < 100; $i=$i*2) {
            echo'El numero es: '.$i;
            echo '<br>';
        };
        /*Crear un algoritmo que muestre los primeros 10 números de la sucesión de Fibonacci. 
        La sucesión comienza con los números 0 y 1 y, a partir de éstos, cada elemento es la suma de los dos números anteriores 
        en la secuencia: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55 */
        for ($i=$numero; $i <=10 ; $i=($i-1) + ($i-2)) { 
            print('La sucesion es: '.$numero.'<br/>');
        };
    };
};

?>