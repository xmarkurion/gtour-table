<?php
session_start();


    if(isset($_SESSION['PASS']))
    {
        //require_once 'config.php';
        require_once 'table-loader.php';
    }

    else
    {
        session_destroy();
        header('Location: index.php');
        die();
    }

?>


<html xmlns="http://www.w3.org/1999/html">

<head>
    <title> GTOUR-Table </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<style>
    body {
        background-color: #3a3a3a;
    }

    .name{
        font-size: 22px; 
    }
</style>

<body>
<header>
    <div class="container text-white">
        <div class="row">
            <div class="col-8">
                <h2 class="my-2">Glenveagh Site's: </h2>
            </div>
            <div class="col-4 my-2 text-center"><h2 class="timeDisplay">5:40AM 10/20/2019</h2></div>
          </div>
    </div>
</header>

<table id="table_id" class="table text-center display">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Construction Site</th>
        <th scope="col">Video Link</th>
        <th scope="col">Site Scan</th>
        <th scope="col">VR</th>
        <th scope="col">Status</th>
        <th scope="col">Capture Date</th>
    </tr>
    </thead>
    <tbody>
        <?php echo($htmldata) ?>
    </tbody>
</table>

<script src="timeDisplay.js"></script>
</body>

</html>
