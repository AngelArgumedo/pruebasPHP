<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <form action="" method="post">
        cual es el Pais mas grande del mundo: 
        <br>
        <input name="btnValor" type="submit" value="1 -Rusia">
        <input name="btnValor" type="submit" value="2 -España">
        <input name="btnValor" type="submit" value="3 -Francia">
        <input name="btnValor" type="submit" value="4 -Londres">
        <br>
    </form>
    <?php
        if ($_POST) {
            $boton = $_POST['btnValor'];

            switch ($boton) {
                case '1 -Rusia':
                    echo'Correcto';
                    break;
                case '2 -España':
                    echo'Inconrrecto';
                    break;
                case '3 -Francia':
                    echo'Incorrecto';
                    break;
                case '4 -Londres':
                    echo'Incorrecto';
                    break;
                    
                default:
                    echo'recargue la pagina';
                    break;
            };
        };
    ?>
</body>

</html>