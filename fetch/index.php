<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <title>Tablas de multiplicar</title>
</head>
<body>
    <h1>Este programa te permite saber las tablas de multiplicar de cualquier numero positivo</h1>
    <p>Porfavor</p>
    <form action="index.php" method="post">
        Digite el numero del cual quiere saber su tabla:
        <input type="number" name="numeroT" id="" class="input1">
        <input type="submit" value="Enviar" class="input2">
    </form>
    <div class="php">
    <?php
    if ($_POST) {
        $numeroT = $_POST['numeroT'];
        if ($numeroT<0) {
            echo '<script language="javascript">alert("Porfavor digite un numero positivo");</script>';
        }else {
            print "Esta es la tabla del " . $numeroT .'<br>';
            $listado = array();
            $i = 0;
            $j = 0;
            //arreglo dinamico
            while ($i <= 10) {
                array_push($listado, $numeroT * $i);
                $i++;
            };
            while ($j <count($listado)) {
                print $numeroT. ' x '.$j. ' = ' .$listado[$j] . '<br>';
                $j++;
            };
        };
    };
    ?>
    </div>
</body>
</html>