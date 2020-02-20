<?php
session_start();

    if(isset($_SESSION['PASS']))
    {
        if($_SESSION['PASS'] == 69)
        {
        require_once 'login.php';
        $_SESSION['SEND'] = 69;
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
    <title> ADD </title>
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
  <a class="navbar-brand" href="#">Mode - Add</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <?php echo($menuBar);?>
      </div>
  </div>
</nav>

    <div class="container text-white">
        <div class="row text-center">
            <div class="col-12">
            <form action="add_msql.php" method="post">

<div class="form-group">
 <label class="my-2"for="exampleInputEmail1">ID will be assigned - PRIMARY KEY</label>
<input type="text" value="Auto assigned" class="form-control" name="postID" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID" readonly>
</div>

<div class="form-group">
 <label class="my-2"for="exampleInputEmail1">Site Name</label>
<input type="text" value="" class="form-control" name="siteName" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter here site name">
</div>

<div class="form-group">
 <label class="my-2"for="exampleInputEmail1">Video Link</label>
<input type="text" value="" class="form-control" name="videoLink" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter here video link">
</div>

<div class="form-group">
 <label class="my-2"for="exampleInputEmail1">Scan Link</label>
<input type="text" value="" class="form-control" name="siteLink" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter here scan link">
</div>


<button type="submit" class="btn btn-primary">Apply changes</button>
</form>
            </div> 
        </div>
    </div>

</header>
</body>

</html>
