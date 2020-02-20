<?php


require_once 'login.php';

if(isset($_POST['postID']))
{
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   

     //$sql = "UPDATE `site` SET `cs` = 'Tullamore', `video` = 'aaaaaa', `scan` = 'ht2e9', `date` = CURRENT_DATE() WHERE `site`.`id` = 1"; 
    $sql = "UPDATE `site` SET `cs` = '".$_POST['siteName']."', `video` = '".$_POST['videoLink']."', `scan` = '".$_POST['siteLink']."', `gps` = '".$_POST['gpsLink']."', `360` = '".$_POST['360Link']."', `date` = '".$_POST['dateLink']."' WHERE `site`.`id` = ".$_POST['postID']."";
    $result = $conn->query($sql);
    $conn->close();

    header('Location: admin.php');
}

    

?>

