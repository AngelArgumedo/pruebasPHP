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
        Este programa calcula el factorial de un numero.
        <br>
        Escriba un numero
        <br>
        <input type="number" name="numeron" id="">
        <br>
    </form>
</body>
</html>

<?php
if ($_POST) {
    $numeroN = $_POST['numeron'];
    do {
        print('el numero que escribio es: '.$numeroN);
        
        $numeroN --;
    } while ($numeroN <= 1);
};

?>