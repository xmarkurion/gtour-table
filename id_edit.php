<?php
session_start();

    if(isset($_SESSION['PASS']))
    {
        if($_SESSION['PASS'] == 69)
        {
            require_once 'login.php';
        //require_once '/config.php';
        //require_once 'table-loader.php';
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

    if(isset($_POST['tableID']))
    {
        $tableID = $_POST['tableID'];

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }   
    
        $sql = "SELECT * FROM `site` WHERE `id` = ".$_POST['tableID']."";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $edit_cs = $row["cs"];
            $edit_video = $row["video"];
            $edit_scan = $row["scan"];
            $edit_gps = $row["gps"];
            $edit_360 = $row["360"];
            $edit_date = $row["date"];
        }
        } else {
            echo "0 results";
    }
        $conn->close();
    }

?>


<html xmlns="http://www.w3.org/1999/html">

<head>
    <title> GTOUR-Table </title>
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
  <a class="navbar-brand" href="#">Edit - Mode</a>
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
            <h1> Active edit ID: <?php echo($_POST['tableID']); ?>
            </div>

            <!-- ----FORM EDIT START----- -->

            <div class="col-12">
            <form action="edit_msql.php" method="post">

            <div class="form-group d-none">
             <label class="my-2"for="exampleInputEmail1">ID</label>
            <input type="text" value="<?php echo($_POST['tableID']); ?>" class="form-control" name="postID" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID">
            </div>

            <div class="form-group">
             <label class="my-2"for="exampleInputEmail1">Site Name</label>
            <input type="text" value="<?php echo($edit_cs); ?>" class="form-control" name="siteName" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID">
            </div>

            <div class="form-group">
             <label class="my-2"for="exampleInputEmail1">Video Link</label>
            <input type="text" value="<?php echo($edit_video); ?>" class="form-control" name="videoLink" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID">
            </div>

            <div class="form-group">
             <label class="my-2"for="exampleInputEmail1">Site link</label>
            <input type="text" value="<?php echo($edit_scan); ?>" class="form-control" name="siteLink" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID">
            </div>

            <div class="form-group">
             <label class="my-2"for="exampleInputEmail1">GPS</label>
            <input type="text" value="<?php echo($edit_gps); ?>" class="form-control" name="gpsLink" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID">
            </div>

            <div class="form-group">
             <label class="my-2"for="exampleInputEmail1">360</label>
            <input type="text" value="<?php echo($edit_360); ?>" class="form-control" name="360Link" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID">
            </div>

            <div class="form-group">
             <label class="my-2"for="exampleInputEmail1">Capture Date</label>
            <input type="text" value="<?php echo($edit_date); ?>" class="form-control" name="dateLink" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID">
            </div>


            <button type="submit" class="btn btn-primary">Apply changes</button>
            </form>
            </div> 
            <!-- ----FORM EDIT END----- --> 

            <!-- ------------------ -->
            <div class="col-12">
            <form action="delete_msql.php" method="post">
            
            <div class="form-group d-none">
             <label class="my-2"for="exampleInputEmail1">ID</label>
            <input type="text" value="<?php echo($_POST['tableID']); ?>" class="form-control" name="postID" id="exampleInputEmail1" placeholder="ID">
            </div>

            <button type="submit" style="margin-top: 200px; font-size: 5px;" class="btn btn-outline-danger">Delete Record</button>
            </form>
            </div>  
            <!---- DELETE FROM `site` WHERE `site`.`id` = 6 -------  -->
        </div>
    </div>

    
    

</header>

</body>

</html>
