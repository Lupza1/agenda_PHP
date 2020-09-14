<?php

    include ('config.php');

    if($_POST['action'] == 'update') //Actualizar evento
    {
      mysqli_query($connection, "UPDATE `evento` SET
      `inicio` = '".mysqli_real_escape_string($connection, date('Y-m-d H:i:s', strtotime($_POST["inicio"])))."',
      `fin` = '".mysqli_real_escape_string($connection, date('Y-m-d H:i:s', strtotime($_POST["fin"])))."',
      WHERE id = '".mysqli_real_escape_string($connection, $_POST["id"])."'");
      exit;
    }

?>