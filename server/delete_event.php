<?php

    include ('./config.php');

    mysqli_query($connection, "DELETE FROM `evento` WHERE `titulo` = '".mysqli_real_escape_string($connection,$_POST["titulo"])."' && `inicio` = '".mysqli_real_escape_string($connection,date('Y-m-d', strtotime($_POST["inicio"])))."' && `fin` = '".mysqli_real_escape_string($connection,date('Y-m-d', strtotime($_POST["fin"])))."' && `horai` = '".mysqli_real_escape_string($connection,date(strtotime($_POST["horai"])))."' && `horaf` = '".mysqli_real_escape_string($connection,date(strtotime($_POST["horaf"])))."' && `dia_completo` = '".mysqli_real_escape_string($connection,$_POST["dia_completo"])."'
        
        ");
    header('Content-Type: application/json');
    echo '{"id":"'.mysqli_insert_id($connection).'"}';

?>