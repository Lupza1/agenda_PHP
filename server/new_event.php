<?php

    include ('config.php');

    $sql = "INSERT INTO evento(titulo, fecha_inicio, hora_inicio, fecha_finalización, hora_final, dia_completo, id_usuario)
    VALUES ('Cumple 22', '2020-07-19', '00:00', NULL, NULL, 'TRUE', '1')";

    if ($connection->query($sql) === TRUE) {
    echo "Se creó un nuevo registro";
    } else {
    echo "Error: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();

?>
