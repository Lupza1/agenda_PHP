<?php
    include ('config.php');

    if ($_POST['action'=="add"]) //Añadir eventos
    {
      mysqli_query($connection, "INSERT INTO `evento`(
        `titulo`,
        `inicio`,
        `fin`,
        `horai`,
        `horaf`,
        `dia_completo`
        )
        VALUES(
          '".mysqli_real_escape_string($connection,$_POST["titulo"])."',
          '".mysqli_real_escape_string($connection,date('Y-m-d', strtotime($_POST["inicio"])))."',
          '".mysqli_real_escape_string($connection,date('Y-m-d', strtotime($_POST["fin"])))."',
          '".mysqli_real_escape_string($connection,date(strtotime($_POST["horai"])))."',
          '".mysqli_real_escape_string($connection,date(strtotime($_POST["horaf"])))."',
          '".mysqli_real_escape_string($connection,$_POST["dia_completo"])."'
        )");
      header('Content-Type: application/json');
      echo '{"id":"'.mysqli_insert_id($connection).'"}';
      exit;
    }


?>