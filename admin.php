<?php
session_start();

    if(isset($_SESSION['PASS']))
    {
        if($_SESSION['PASS'] == 69)
        {
        require_once 'table-loader.php';
        }
        else
        {
        session_destroy();
        header('Location: index.php');
        die();
        }
    }else{
        session_destroy();
        header('Location: index.php');
        die();
    }   

?>


<html xmlns="http://www.w3.org/1999/html">

<head>
    <title> Admin-Panel </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Mode - Table </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
            <?php echo($menuBar);?>
      </div>
  </div>
</nav>

    <div class="container text-white text-center">
        <div class="row">
            <div class="col-12">
                <h2 class="my-2">ADMIN - PANEL</h2>
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
    </tr>
    </thead>
    <tbody>
        <?php echo($htmldata) ?>
    </tbody>
</table>
</body>

</html>
