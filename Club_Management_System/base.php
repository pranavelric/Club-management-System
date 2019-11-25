<?php
//session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Club_Management</title>

    <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    -->


    <!--internal bootstrap -->
    <link rel="stylesheet" href="boots/css/bootstrap.css" >
    <link rel="stylesheet" href="boots/css/bootstrap.min.css" >
    <link rel="stylesheet" href="boots/css/bootstrap-grid.css" >
    <link rel="stylesheet" href="boots/css/bootstrap-grid.min.css" >
    <link rel="stylesheet" href="boots/css/bootstrap-reboot.css" >
    <link rel="stylesheet" href="boots/css/bootstrap-reboot.min.css" >
    <link rel="stylesheet" href="boots/css/bootstrap-grid.css.map" >
    <link rel="stylesheet" href="boots/css/bootstrap-grid.min.css.map" >
    <link rel="stylesheet" href="boots/css/bootstrap-reboot.css.map" >
    <link rel="stylesheet" href="boots/css/bootstrap-reboot.min.css.map" >
    <link rel="stylesheet" href="boots/css/bootstrap.css.map" >
    <link rel="stylesheet" href="boots/css/bootstrap.min.css.map" >

    <script src="boots/js/bootstrap.bundle.js"></script>
    <script src="boots/js/bootstrap.bundle.js.map"></script>
    <script src="boots/js/bootstrap.bundle.min.js"></script>
    <script src="boots/js/bootstrap.bundle.min.js.map"></script>
    <script src="boots/js/bootstrap.js"></script>
    <script src="boots/js/bootstrap.js.map"></script>
    <script src="boots/js/bootstrap.min.js"></script>
    <script src="boots/js/bootstrap.min.js.map"></script>
    <link href="boots/font/css/all.css" rel="stylesheet">
    <script defer src="boots/font/js/all.js"></script>
    <script defer src="boots/jquery.js"></script>
    <script defer src="boots/jquery3.4.1.js"></script>
    <script defer src="boots/popper.js"></script>
    <script defer src="boots/boot.min.js"></script>

    <!-- internal css ended-->

   <link rel="stylesheet" href="css/styles.css"type="text/css">






    <style>

    .card{
        border-radius: 10%;

    }
    .card-img-top{
        border-radius: 10%;
        width:100%;
    }
</style>
</head>
<body id="basebody">
<?php require "navbar.php"?>

<div class="container-fluid ">
    <div class="container-fluid row" style="margin-top: 3%;margin-left: 4%">

        <div class="card" style="width:300px;margin: 2%;">
            <img height="100%"  class="card-img-top" src="img/1.jpeg" alt="Card image" style="width:100%;">
            <br>
            <div class="card-body">
                <h5 class="card-title text-center">Bit-Byte Programming club</h5>
                <p class="card-text"></p>
                <form action="details.php" method="post">
                    <button class="btn btn-success" name="id" value="1" type="submit">Details</button>
                </form>
            </div>

        </div>

        <div class="card" style="width:300px;margin: 2%;">
            <img class="card-img-top" src="img/2.jpeg" height="100%"  alt="Card image" style="width:100%;">
            <br>
            <div class="card-body">
                <h5 class="card-title text-center">Electronics club</h5>
                <p class="card-text"></p>
                <form action="details.php" method="post">
                    <button class="btn btn-success" name="id" value="2" type="submit">Details</button>
                </form>
            </div>

        </div>
        <div class="card" style="width:300px;margin: 2%;">
            <img class="card-img-top"  src="img/3.jpeg" alt="Card image" height="100%" style="width:100%;">
            <br>
            <div class="card-body">
                <h5 class="card-title text-center">Racing club</h5>
                <p class="card-text"></p>
                <form action="details.php" method="post">
                    <button class="btn btn-success" name="id"value="3" type="submit">Details</button>
                </form>
            </div>

        </div>

        <div class="card" style="width:300px;margin: 2%;">
            <img class="card-img-top" src="img/4.jpeg" alt="Card image" height="100%"  style="width:100%;">
            <br>
            <div class="card-body">
                <h5 class="card-title text-center">CAD club</h5>
                <p class="card-text"></p>
                <form action="details.php" method="post">
                    <button class="btn btn-success" name="id" value="4" type="submit">Details</button>
                </form>
            </div>

        </div>






    </div>

</div>
<?php require "footer.php" ?>


</body>
</html>









<?php
?>

