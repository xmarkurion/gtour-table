<?php
session_start();
require_once 'login.php';
$password_entered_by_user = "";


    if(isset($_POST['pos_password']))
    {
        $password_entered_by_user = $_POST['pos_password'];
        if($password_entered_by_user == $key)
        {
            $_SESSION['PASS'] = 1;
            header('Location: table.php');
        } else if ($password_entered_by_user == $adminKey) {
            $_SESSION['PASS'] = 69;
            header('Location: admin.php');
        }
        else
        {
            session_destroy();
            header('Location: index.php');
            die();
        }

    }

?>


<!DOCTYPE HTML>
<head>
    <title> GTOUR </title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<style>
    body {
        background-color: #302f35;
    }
</style>

<body>
    <div class="container text-center">
        <div style="margin-top:50px; font-family: 'Allerta';">
        <div class="col"><img width="400" class="mb-5" src="glenlogo.png"></div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <a class="my-4" style="color: white; font-size: 35px;"> Enter Password: </a>
                        <form action="index.php" method="post">
                            <input name="pos_password" placeholder="Password" id="pos_password" type="password" class="m-auto form-control" aria-label="example input" aria-describedby="inputGroup-sizing-default">
                            <br><input class="btn btn-outline-success" type="submit" value="Enter" name="submit">
                        </form>
                </div>
                <div class="col-md-4"></div>
            </div>  
        </div>
    </div>


    <footer class="disable page-footer font-small text-white pt-4">
        <div class="footer-copyright text-center py-3">© 2020 Web creator:
            <a href=""> Markurion</a>
        </div>
    </footer>

    <script src="timeDisplay.js"></script>
</body>

</html>
