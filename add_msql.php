<?php

require_once 'login.php';

if(isset($_POST['postID']))
{
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   
    $sql = "INSERT INTO `site` (`id`, `cs`, `video`, `scan`, `date`) VALUES (NULL, '".$_POST['siteName']."', '".$_POST['videoLink']."', '".$_POST['siteLink']."', CURRENT_DATE());";
    $result = $conn->query($sql);
    $conn->close();

    header('Location: admin.php');
}

   
?>
