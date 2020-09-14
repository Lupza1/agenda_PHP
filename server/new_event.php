<?php
    include ('config.php');

    if ($_POST['action'=="add"]) //Añadir eventos
    {
      mysqli_query($connection, "INSERT INTO `evento`(
        `titulo`,
        `inicio`,
        `final`
        )
        VALUES(
          '".mysqli_real_escape_string($connection,$_POST["titulo"])."',
          '".mysqli_real_escape_string($connection,date('Y-m-d H:i:s', strtotime($_POST["inicio"])))"',
          '".mysqli_real_escape_string($connection,date('Y-m-d H:i:s', strtotime($_POST["fin"])))"',
        )");
      header('Content-Type: application/json');
      echo '{"id":"'.mysqli_insert_id($connection).'"}';
      exit;
    }


?>