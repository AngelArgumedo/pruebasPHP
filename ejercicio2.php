

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Calcular area y perimetro de un cuadrado
    <br>
    <form action="ejercicio2.php" method="post">
        Digite un lado del cuadrado:
        <input type="number" name="Lado" id="">
        <br>
        <input type="submit" value="enviar">
    </form>
<?php

    if($_POST){
    $lado = $_POST['Lado']; // el metodo post nos va a permitir recepcionar informacion
        if(is_numeric($lado)){
            $area = pow($lado, 2);
            $perimetro = $lado + $lado + $lado + $lado;
            print('El Area es: '.$area);
            echo"<br>";
            print('El perimetro es: '.$perimetro);
        }else{
            echo '<script language="javascript">alert("Porfavor digite un numero");</script>';
        };
    };
?>
</body>
</html>

