<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gtourx";

$htmldata = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `site`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
    $htmldata .= "
<tr class=\"text-white\">
    <th scope=\"row\"> ". $row["id"] ." </th>
    <td class=\"name\">". $row["cs"] ." </td>
    <td><a href=\"". $row["video"] ." \">VIDEO</a></td>
    <td><a href=\"". $row["scan"] ." \">SCAN</a></td>
    </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>