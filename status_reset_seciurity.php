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
    <title> Reset Status </title>
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
        <a class="navbar-brand" href="#">Mode - Reset Status</a>
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
                <form action="status_reset_action.php" method="post">
                    <div class="form-group">
                        <label class="my-4"for="exampleInputEmail1"><h2>Enter password to reset status to 0</h2></label>
                        <input type="text" class="form-control" name="passForm" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pass to reset">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>




</header>
</body>

</html>
