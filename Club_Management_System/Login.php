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
<body style="background-image: url('https://i.pinimg.com/originals/9c/80/0f/9c800fe8c727bfc4bc9de03da16cc51b.jpg');background-repeat: no-repeat;background-size: cover;height: 100vh;">
<?php require "navbar.php"?>
<div class="jumbotron " style="border: 2px solid red;margin: 10%;border-radius: 10%;  background: rgba(162, 76, 191, 0.7); color: gold;font-size: 1.9em">
    <form class="" action="log_in.php" method="post">
        <center>
            <p class="h4 mb-4" style="font-size: 1.2em; text-decoration: underline;">Login</p>
        </center>


        <!-- Email -->
        <label>Email</label><input name="Email" type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail"required>

        <!-- Password -->
        <label>Password</label>
        <input type="password" name="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password" required>



        <!-- Sign in button -->
        <center>
        <button class="btn btn-info btn-block my-4" name = "log" type="submit" style="width: 30%; background-color: gold;border: 3px solid darkblue;color: purple">Login</button>
</center>


    </form>
</div>
</body>
</html>

