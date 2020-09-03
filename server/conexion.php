<?php

    try{
        $conexion = new PDO('mysql:host=localhost;dbname=php_agenda','root','');
        echo "Conexion exitosa a la base de datos";
    }catch(PDOException $e){
        print "Error: " .$e->getMessage()."</br>";
        die();
    }

?>