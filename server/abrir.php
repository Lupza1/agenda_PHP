<?php

    $host="localhost";
    $user='root';
    $pass='';
    $data='php_agenda';

    $tab1=`usuarios`;
    $tab2=`eventos`;

    $conn = new mysqli($host,$user,$pass,$data);
    if($conn->connect_errno){
        echo "Error: ".$conn->connect_errno;
        exit();
    }

?>