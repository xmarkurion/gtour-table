<?php


require_once 'login.php';

if(isset($_POST['passForm']) && $_POST['passForm'] == $resetStatusKey )
{
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE `site` SET `status` = '0' WHERE `site`.`status` = 1";
    $result = $conn->query($sql);
    $conn->close();

    header('Location: admin.php');
}else{
    header('Location: status_reset_seciurity.php');
}



?>

