<?php
    //Utilizacion de metodo Get
    /*
    El metodo get es envio de datos a traves de una URL
    */
    if($_GET){
        $nombre = $_GET['nombre'];

        print('Hola '. $nombre);
    };

?>