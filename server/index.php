<?php
  
  include ('config.php');

  if(isset($_POST['action']) or isset($_GET['view']))//Mostrar todos los eventos
  {
    if (isset($_GET['view'])) {
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
    elseif ($_POST['action'=="add"]) //Añadir eventos
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
    elseif($_POST['action'] == 'update') //Actualizar evento
    {
      mysqli_query($connection, "UPDATE `evento` SET
      `inicio` = '".mysqli_real_escape_string($connection, date('Y-m-d H:i:s', strtotime($_POST["inicio"])))."',
      `fin` = '".mysqli_real_escape_string($connection, date('Y-m-d H:i:s', strtotime($_POST["fin"])))."',
      WHERE id = '".mysqli_real_escape_string($connection, $_POST["id"])."'");
      exit;
    }
    elseif ($_POST['action'] == 'delete') //Eliminar evento
    {
      mysqli_query($connection, "DELETE FROM `evento` WHERE id = '".mysqli_real_escape_string($connection, $_POST["id"])."'");
      if (mysqli_affected_rows($connection > 0)) {
        echo '1'
      }
      exit;
    }
  }

?>
