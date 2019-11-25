<!DOCTYPE html>
<html>
<head>
    <title>Club_Management</title>



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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    -->

    <link rel="stylesheet" href="css/styles.css"type="text/css">


    <style>


        .container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default radio button */
        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Create a custom radio button */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: gray;
            border-radius: 50%;
        }

        /* On mouse-over, add a grey background color */
        .container:hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .container input:checked ~ .checkmark {
            background-color: #2196F3;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .container input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .container .checkmark:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }
    </style>

</head>

<body id ="admreg" >
<?php require "navbar.php"?>
<div class="jumbotron" style="border: 2px solid red;margin-left: 25%;margin-top: 3%;margin-bottom: 10%;border-radius: 10% ;background: rgba(162, 76, 191, 0.9); color: gold; width: 50%;">
<form class="" action="adminreg_inp.php" method="post" enctype="multipart/form-data">
<center>
    <p class="h4 mb-4">Register</p>
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


    <div class="form-group" >
        <label>Year</label>
        <select class="form-control"  name = "year"  id="sel2" >
            <option >1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </div>

    	<div class="form-group">
					<span class="label-input100">Clubs</span>




<div>

    <label class="container">Bit-Byte programming club
        <input type="radio" checked="checked" name="club" value="1">
        <span class="checkmark"></span>
    </label>
    <label class="container">Electronics Club
        <input type="radio"name="club" value="2">
        <span class="checkmark"></span>
    </label>
    <label class="container">Racing Club
        <input type="radio" name="club" value="3">
        <span class="checkmark"></span>
    </label>
    <label class="container">CAD club
        <input type="radio"name="club" value="4">
        <span class="checkmark"></span>
    </label>

    </div>


    <div class="form-group" >
        <label>You want to register for</label>
        <select class="form-control"  name = "reg"  id="reg" >
            <option >Coordinator</option>
            <option>Co-Coordinator</option>
            <option>Senate</option>
        </select>
    </div>


<center>
    <button class="btn btn-info  btn-block my-2" id="adminbtn" name = "submit" type="submit" style="width: 30%; background-color: gold;border: 3px solid darkblue;color: purple">Submit</button>
</center>


</form>
</div>
</body>
</html>

