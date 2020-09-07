<?php

    include ('./abrir.php');

    if($b = $conn->query("INSERT INTO $tab1 VALUES (NULL, 'jose@gmail.com', 'Jose Perez', MD5('asd'), '1996-05-25')")){
        printf("Se creo que");
    };

 ?>
