<?php
//session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Club_Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css"type="text/css">
</head>
<body id="basebody">
<?php require "navbar.php"?>

<div class="container-fluid ">
    <div class="container-fluid row" style="margin-top: 3%;margin-left: 4%">

        <div class="card" style="width:300px;margin: 2%;">
            <img height="100%"  class="card-img-top" src="img/1.png" alt="Card image" style="width:100%;">
            <br>
            <div class="card-body">
                <h4 class="card-title text-center">Bit-Byte Programming club</h4>
                <p class="card-text"></p>
                <form action="details.php" method="post">
                    <button class="btn btn-success" name="id" value="1" type="submit">Details</button>
                </form>
            </div>

        </div>

        <div class="card" style="width:300px;margin: 2%;">
            <img class="card-img-top" src="img/2.png" height="100%"  alt="Card image" style="width:100%;">
            <br>
            <div class="card-body">
                <h4 class="card-title text-center">Electronics club</h4>
                <p class="card-text"></p>
                <form action="details.php" method="post">
                    <button class="btn btn-success" name="id" value="2" type="submit">Details</button>
                </form>
            </div>

        </div>
        <div class="card" style="width:300px;margin: 2%;">
            <img class="card-img-top"  src="img/3.png" alt="Card image" height="100%" style="width:100%;">
            <br>
            <div class="card-body">
                <h4 class="card-title text-center">Racing club</h4>
                <p class="card-text"></p>
                <form action="details.php" method="post">
                    <button class="btn btn-success" name="id"value="3" type="submit">Details</button>
                </form>
            </div>

        </div>

        <div class="card" style="width:300px;margin: 2%;">
            <img class="card-img-top" src="img/4.png" alt="Card image" height="100%"  style="width:100%;">
            <br>
            <div class="card-body">
                <h4 class="card-title text-center">CAD club</h4>
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

