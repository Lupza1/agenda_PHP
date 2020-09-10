<?php

    define('USER', 'root');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'php_agenda');

    $tab1=`usuarios`;
    $tab2=`eventos`;

    $conn = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    if($conn->connect_errno){
        echo "Error: ".$conn->connect_errno;
        exit();
    }

?>