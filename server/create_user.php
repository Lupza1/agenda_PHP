<?php

    include ('./abrir.php');

    $sql = "INSERT INTO usuarios(email, pass, fecha_nacimiento)
    VALUES ('jose@gmail.com', MD5('asd'), '1996-05-25')";

    if ($conn->query($sql) === TRUE) {
    echo "Se creó un nuevo registro";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

 ?>
