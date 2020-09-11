<?php
    session_start();
    
    if(!isset($_SESSION['user_id'])){
        header('Location: ../client/index.html');
        exit;
    }else{
        header('Location: ../client/main.html');
    }
?>