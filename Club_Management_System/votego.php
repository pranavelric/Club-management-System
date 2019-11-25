
<?php


    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Vote</title>

        <!--internal bootstrap -->
        <link rel="stylesheet" href="boots/css/bootstrap.css" >
        <link rel="stylesheet" href="boots/css/bootstrap.min.css" >

        <link href="boots/font/css/all.css" rel="stylesheet">
        <script defer src="boots/font/js/all.js"></script>
        <script defer src="boots/jquery.js"></script>
        <script defer src="boots/jquery3.4.1.js"></script>
        <script defer src="boots/popper.js"></script>
        <script defer src="boots/boot.min.js"></script>

        <!-- internal css ended-->




<!--
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
              integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
              crossorigin="anonymous">
-->
        <link rel="stylesheet" type="text/css" href='css/styles.css'>

    </head>
    <?php require "navbar.php";
     if (isset($_SESSION['email'])) {


     ?>
    <body id="votego" background="img/vote.png" ;>
    <div class="container-fluid " id="vote go">

        <div>
            <img src="img/vote/coco.jpg" alt="profile" id="votegopic1">
            <a id="votebtn" class="btn btn-success" href="cocovote.php">Vote Co-coordinator</a>
        </div>
        <br>
        <div>
            <img src="img/vote/co.jpg" alt="profile" id="votegopic1">
            <a id="votebtn" class="btn btn-success" href="covote.php">Vote Coordinator</a>
        </div>
        <br>
        <div>
            <img src="img/vote/senators.jpg" alt="profile" id="votegopic1">
            <a id="votebtn" class="btn btn-success" href="senatorvote.php">Vote Senator</a>
        </div>
        <br>


    </div>

    </body>
    </html>


    <?php
}
else {
    header('location: Login.php');
}
    ?>

