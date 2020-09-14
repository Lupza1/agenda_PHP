<?php

    include

    if ($_POST['action'] == 'delete') //Eliminar evento
    {
        mysqli_query($connection, "DELETE FROM `evento` WHERE id = '".mysqli_real_escape_string($connection, $_POST["id"])."'");
        if (mysqli_affected_rows($connection > 0)) {
            echo '1'
        }
        exit;
    }

?>