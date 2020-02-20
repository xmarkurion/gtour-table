<?php

require_once 'login.php';

if(isset($_POST['postID']))
{
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   
    $sql = "DELETE FROM `site` WHERE `site`.`id` = ".$_POST['postID']."";
    $result = $conn->query($sql);
    $conn->close();

    header('Location: admin.php');
}

   
?>
