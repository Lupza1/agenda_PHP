<?php
  
  include ('./abrir.php');

  $sql = ("SELECT * FROM evento ORDER BY id ASC");

  $a = $conn->query($sql);

  if ($a->num_rows > 0) {
    // output data of each row
    while($row = $a->fetch_assoc()) {
      echo "<br> id: ". $row["id"]. " - Titulo: ". $row["titulo"]. " - Fecha de Inicio: " . 
      $row["fecha_inicio"] . " - Hora de Inicio: " .$row["hora_inicio"] . 
      " - Fecha de finalización: " . $row["fecha_finalizacion"] . " - Hora de finalización: " . $row["hora_final"] . 
      " - Día Completo: " . $row["dia_completo"] . " - Id del usuario: ". $row["id_usuario"] ."<br>";
    }
} else {
    echo "0 results";
}

  $conn->close();

?>
