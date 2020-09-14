<?php
 
include('config.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM usuarios WHERE username=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo '<p class="error">No coinciden tu email y tu contraseña. Porfavor intenta de nuevo</p>';
    } else {
        if (password_verify($password, $result['password'])){
            $_SESSION['user_id'] = $result['ID'];
            header('Location: /main.html');
        } else {
            echo '<p class="error">No coinciden tu email y tu contraseña. Porfavor intenta de nuevo</p>
                 <a href="../client/index.html" class="button">Volver a intentar</a>';
        }
    }
}
 
?>
