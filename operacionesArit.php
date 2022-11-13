<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones aritmeticas</title>
</head>
<body>
    <form action="operacionesArit.php" method="post">
        Escriba un numero:
        <input type="number" name="numero1" id="">
        Escriba otro numero:
        <input type="number" name="numero2" id="">
        <button type="submit">Calcular</button>
        <br>
    </form>
</body>
</html>
<?php
    if($_POST){
        $numeroX= $_POST['numero1'];
        $numeroY= $_POST['numero2'];

        $suma = $numeroX + $numeroY;
        $resta = $numeroX - $numeroY;
        $multiplicacion = $numeroX * $numeroY;
        $division = $numeroX / $numeroY;

        //uso de operador ternario (abreviasion del if)
        $mayor = ($numeroX > $numeroY) ? $numeroX : $numeroY;
        // valor devuelto = si (comparacion es verdadero) entonces ? primer valor : segundo valor

        print('los numeros que escribio son: '.$numeroX .' y '.$numeroY .'<br>');
        print('la suma de los dos numeros es: '.$suma .'<br>');
        print('La resta de los dos numeros es: '.$resta .'<br>');
        print('La multiplicacion de los dos numeros es: '.$multiplicacion .'<br>');
        print('La division de los dos numeros es: '.$division .'<br>');
        print('El mayor entre los dos numeros es: '.$mayor .'<br>');
    };
?>
