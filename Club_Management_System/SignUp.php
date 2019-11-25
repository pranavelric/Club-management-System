<!DOCTYPE html>
<html>
<head>
    <title>Club_Management</title>

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
<!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="css/styles.css"type="text/css">


</head>
<body  id ="signup"style="">

<?php require "navbar.php"?>
<div class="jumbotron" style="border: 2px solid red;margin-left: 25%;margin-top: 3%;margin-bottom: 10%;border-radius: 10% ;background: rgba(162, 76, 191, 0.9); color: gold; width: 50%;">
<form class="" action="sign_up.php" method="post" enctype="multipart/form-data">
<center>
    <p class="h4 mb-4" style="text-decoration: underline">Register</p>
</center>

    <label>Name</label>
    <input type="text" id="name" name = "name" class="form-control mb-4" placeholder="Name" required>


    <div class="form-group">
        <label>Branch</label>
        <select class="form-control" id="sel1" name = "branch" >
            <option>CSE</option>
            <option>ME</option>
            <option>ECE</option>
        </select>
    </div>
    <label>Roll Number</label>
    <input type="number" id="rollno" name = "rollno" class="form-control mb-4" placeholder="Roll Number" required>


    <div class="form-group">
        <label>Year</label>
        <select class="form-control"  name = "year"  id="sel2">
            <option >1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </div>

    <div class="form-group">
        <label>Member of :</label>
        <br>
    <div class="form-check form-check-inline">
        <input name = "clubs[]"  class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1">
        <label class="form-check-label" for="inlineCheckbox1">Bit-Byte Programming club</label>
    </div>
    <div class="form-check form-check-inline">
        <input name = "clubs[]" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2">
        <label class="form-check-label" for="inlineCheckbox2">Electronics Club</label>
    </div>
    <div class="form-check form-check-inline">
        <input name = "clubs[]" class="form-check-input" type="checkbox" id="inlineCheckbox3" value="3" >
        <label class="form-check-label" for="inlineCheckbox3">Racing Club</label>
    </div>
    <div class="form-check form-check-inline">
        <input name = "clubs[]" class="form-check-input" type="checkbox" id="inlineCheckbox4" value="4" >
        <label class="form-check-label" for="inlineCheckbox3">CAD club</label>
    </div>
</div>
    <label>Phone number</label>
    <input name = "tel" type="number" id="phone" class="form-control mb-4" placeholder="Contact number" required>

    <label>Upload User_Image</label>
    <input name = "upload" type="file" id="usrimg" class="form-control mb-4" >


    <!-- Email -->
    <label>Email</label><input name = "email" type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail"required>

    <!-- Password -->
    <label>Password</label>
    <input type="password" name = "password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" required>



    <!-- Sign in button -->
    <center>
    <button class="btn btn-info btn-block my-4" name = "submit" type="submit" style="width: 30%; background-color: gold;border: 3px solid darkblue;color: purple">Sign Up</button>
    </center>


</form>
</div>
</body>
</html>

