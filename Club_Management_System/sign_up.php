<?php
session_start();
$errors=array();

//$db =  @mysqli_connect("localhost","root","",'club_management_system');

if(isset($_POST['submit'])){

    $db =  @mysqli_connect("localhost","root","",'club_management_system');

    $name =strval($_POST['name']);
    $branch = strval($_POST['branch']);
    $rollno = $_POST['rollno'];
    $year =number_format($_POST['year']);
    $clubs = $_POST['clubs'];
    $phone = $_POST['tel'];
    $email = strval($_POST['email']);
    $password   = $_POST['password'];

    $filename=$_FILES['upload']['name'];
    $tempname=$_FILES['upload']['tmp_name'];

    $folder = "userimg/".$filename;
//echo $folder;
    move_uploaded_file($tempname,$folder);
    if (empty($name)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
    if (empty($rollno)) { array_push($errors, "roll number is required"); }


   $user_check_query = "SELECT * FROM students WHERE Rollno='$rollno' OR email='$email' LIMIT 1 ";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['Rollno'] === $rollno) {
            array_push($errors, "Roll number already exists");
        }

        if ($user['Email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    foreach ($errors as $e)
        echo "<Strong><b style='color: red;margin: 2%;font-size: 450%'>".$e."</b></Strong><br>";



    if (count($errors) == 0) {
        $password = md5($password);

       echo  $rollno."<br> ".$name."<br> ".$year."<br> ".$branch."<br> ".$email."<br> ".$password."<br> ".$phone;
       $query ="INSERT INTO students (`Rollno` ,`Name`, `Year`, `branch`, `Email` , `password`, `phone`,`Imagesrc`) VALUES('$rollno', '$name', '$year','$branch','$email','$password','$phone','$folder')";
         mysqli_query($db, $query) OR die("not done");
         //echo "dffadsa----------";
         foreach ($clubs as $club) {
             $c =(int)$club;
           //  echo $rollno." ".$c."<br>";

             $query2 = "INSERT INTO members(`Rollno`,`clubid`) VALUES('$rollno','$c')";
                   mysqli_query($db, $query2) OR die("not done");
         }
         $_SESSION['email'] = $email;
         $_SESSION['success'] = "You are now logged in";

       header('location: base.php');
    }


}


?>