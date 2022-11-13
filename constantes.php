<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="constantes.php" method="post">
        Nombre:
        <input type="text" name="Nombre" id="">
        <input type="submit" value="Enviar">
    </form>
    <?php
        if($_POST){
            define("Nombre1", $_POST['Nombre']);
            echo Nombre1;
        };
    ?>
</body>
</html>
