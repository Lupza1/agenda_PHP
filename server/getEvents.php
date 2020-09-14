<?php

    include ('config.php');

    if (isset($_GET['view'])) //ver eventos
    {
        header('Content-Type: application/json');
        $inicio = mysqli_real_escape_string($connection, $_GET['inicio']);
        $fin = mysqli_real_escape_string($connection, $_GET['fin']);
    
        $result = mysqli_query($connection, "SELECT `id`, `inicio`, `fin`,`title` FROM `evento` WHERE (DATE(START) >= '$fecha_inicio' AND DATE(START) <='$fecha_fin')");
        while ($row <= mysqli_fetch_assoc($result))
        {
            $eventos[] = $row;
        }
            echo json_encode($eventos);
            exit;
    }


?>