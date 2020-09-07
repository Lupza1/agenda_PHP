<?php

  include ('./abrir.php');

  if($a = $conn->query("SELECT email, pass FROM `usuarios` ORDER BY `id` ASC")){

    printf("La seleccion devolvio %d filas. \n", $a->num_rows);?><p></p><?php

    echo json_encode($a);

  };
  
  $conn->close();

?>
