<?php

  include ('./abrir.php');

  $sql = ("SELECT email, pass FROM `usuarios` ORDER BY id ASC");

  $a = $conn->query($sql);

  if ($a->num_rows > 0) {
    // output data of each row
    while($row = $a->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Email: ". $row["email"]. " - Contraseña: " . $row["pass"] . "<br>";
    }
} else {
    echo "0 results";
}

  $conn->close();

?>
