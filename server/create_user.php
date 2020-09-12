<?php

    include ('config.php');
    session_start();

    if (isset($_POST['register'])) {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $query = $connection->prepare("SELECT * FROM usuarios WHERE USERNAME=:email");
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() > 0) {
            echo '<p class="error">El email ya esta registrado</p>';
        }

        if ($query->rowCount() == 0) {
            $query = $connection->prepare("INSERT INTO usuarios(id ,USERNAME, nombre_completo, PASSWORD, fecha_nacimiento) VALUES (NULL ,:email,:nombre,:password_hash,:nacimiento)");
            $query->bindParam("email", $email, PDO::PARAM_STR);
            $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query->bindParam("nacimiento", strtotime(date("Y-m-d")), PDO::PARAM_STR);
            $result = $query->execute();

            if ($result) {
                echo '<p class="success">Te has registrado exitosamente</p>';
            } else {
                echo '<p class="error">Algo salio mal</p>';
            }
        }
    }

?>
