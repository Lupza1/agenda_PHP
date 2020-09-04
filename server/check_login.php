<?php

  SESSION_start();

  include ('../server/abrir.php');

  if (!empty($_POST['user']) && !empty($_POST['password'])){
    $records = $conn->prepare('SELECT id, email, pass FROM $tab1 WHERE email=:email');
    $records->bindParams(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header('Locationn: /login.php');
    }else {
      $message = 'Lo sentimos, el email o la contraseña son incorrectos';
    }
  }

?>