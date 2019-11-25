<?php

//echo $_SESSION['email'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>


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
    <link rel="stylesheet" type="text/css" href='css/styles.css'>

</head>
<body id="profilebody">
<?php require "navbar.php";
$email = $_SESSION['email'];
$db =  @mysqli_connect("localhost","root","",'club_management_system');
$query = "SELECT imagesrc FROM students WHERE Email='$email'";
$results = mysqli_query($db, $query);
$ans = mysqli_fetch_assoc($results);
$src = $ans['imagesrc'];
$query2 = "SELECT * FROM students WHERE Email ='$email'";
$result = mysqli_query($db,$query2);
$ans2 =mysqli_fetch_assoc($result);
//$query3 = "SELECT name FROM clubs JOIN members m ON clubs.id = m.clubid WHERE Rollno='$ans2['Rollno']'";
$query3 = "SELECT name FROM clubs JOIN members m on clubs.id = m.clubid WHERE Rollno ='$ans2[Rollno]'";
$result3 = mysqli_query($db ,$query3);

$ans3 = mysqli_fetch_all($result3);

?>
<div class="container-fluid" id="procont" >

    <img src="<?php echo $src ?>"  alt="profile" id="profile"   >
    <br>
    <hr>

    <h1><b id="bprofile">Name :</b><?php echo $ans2['Name']?> </h1>
    <h1><b id="bprofile">Roll No :</b><?php echo $ans2['Rollno']?> </h1>
    <h1><b id="bprofile">Year :</b><?php echo $ans2['Year']?> </h1>
    <h1><b id="bprofile">Bracnh :</b><?php echo $ans2['branch']?> </h1>
    <h1><b id="bprofile">Contact no :</b><?php echo $ans2['phone']?> </h1>
    <h1><b id="bprofile">Member of  :</b><?php
                foreach ($ans3 as $club) {
                    foreach ($club as $c) {

                        echo "<li style='margin-left: 20%'>" . $c . "</li><br>";
                    }
        }?> </h1>

</div>




</body>
</html>





