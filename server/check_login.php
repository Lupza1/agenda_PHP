<?php

  include ('./abrir.php');

  session_start();

  if (isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
      echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {
            $_SESSION['user_id'] = $result['ID'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
      }
    }
  }

?>
