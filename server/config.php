<?php
    $user = 'root';
    $password = '';
    $host = 'localhost';
    $database = 'php_agenda';

    $connection = mysqli_connect($host, $user, $password, $database);

    if (!$connection) {
        die("Conexion fallida: ".
        mysqli_connect_error());
    }
    else {
        echo "Conexion exitosa";
        header('Location: ../client/main.html');
    }
?>