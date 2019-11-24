<?php
session_start();
$errors=array();

if(isset($_POST['submit'])){

    $db =  @mysqli_connect("localhost","root","",'club_management_system');

    $name =strval($_POST['name']);
    $branch = strval($_POST['branch']);
    $rollno = $_POST['rollno'];

    $year =number_format($_POST['year']);

    $club = $_POST['club'];
    $reg = $_POST['reg'];
    $vote = 0;


    if (empty($name)) { array_push($errors, "Username is required"); }

    if (empty($rollno)) { array_push($errors, "roll number is required"); }


    $user_check_query = "SELECT * FROM students WHERE Rollno='$rollno' LIMIT 1 ";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    $folder  =$user['imagesrc'];
    if ($user) {
        if ($user['Rollno'] === $rollno) {

            echo  $rollno."<br> ".$name."<br> ".$year."<br> ".$branch."<br> ".$club."<br>";


            echo  $rollno."<br> ".$name."<br> ".$year."<br> ".$branch."<br> ".$club."<br>".$reg;

            if($reg=="Coordinator")
            {
                $query ="INSERT INTO co (`Roll Number`, `Name`, `branch`, `imagesrc` , `club`, `vote`) VALUES('$rollno', '$name','$branch','$folder','$club','$vote')";
                mysqli_query($db, $query) OR die("not done coordinator");
            }
            if($reg=="Co-Coordinator")
            {
                $query ="INSERT INTO coco (`Rollno`, `Name`, `Branch`, `imagesrc` , `club`, `vote`) VALUES('$rollno', '$name','$branch','$folder','$club','$vote')";
                mysqli_query($db, $query) OR die("not done CO-coordinator");
            }
            if($reg=="Senate")
            {
                $query ="INSERT INTO senate (`Rollno`, `name`, `branch`,`year`,`imagesrc` , `vote`) VALUES('$rollno', '$name','$year','$folder','$club','$vote')";
                mysqli_query($db, $query) OR die("not done senate" );
            }


            header('location: base.php');



        }


    }
    else
        {
            array_push($errors, "User not exist");
        }

    foreach ($errors as $e)
        echo "<Strong><b style='color: red;margin: 2%;font-size: 450%'><a href='base.php'>".$e."</a></b></Strong><br>";



    if (count($errors) == 0) {



    }


}


?>