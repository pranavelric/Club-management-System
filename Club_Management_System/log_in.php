<?php
// LOGIN USER
session_start();
$errors = array();
if(isset($_POST['log'])){

    $db =  @mysqli_connect("localhost","root","",'club_management_system');
    $email = mysqli_real_escape_string($db, $_POST['Email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    foreach ($errors as $e) {
        echo "<Strong><b style='color: red;margin: 2%;font-size: 450%'>" . $e . " </b></Strong><br>";
    }
    if (count($errors) == 0) {

        $password = md5($password);
        $query = "SELECT * FROM students WHERE Email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);



        if (mysqli_num_rows($results) == 1) {


            $_SESSION['email'] = strval( $email);

            $_SESSION['success'] = "You are now logged in";
            header('location: base.php');
        }else {
            array_push($errors, "Wrong email/password combination");
            foreach ($errors as $e)
                echo "<Strong><b><a href='Login.php' style='color: red;margin: 2%;font-size: 450%'>".$e."</a></b></Strong><br>";
        }
    }
}else{
    header('location: Login.php');
}


?>

