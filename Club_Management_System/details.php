<?php
?>


<!DOCTYPE html>
<html>
<head>
    <title>Club Details</title>


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
<body id="detailsbody">
<?php require "navbar.php";

$db =  @mysqli_connect("localhost","root","",'club_management_system');
$type  = $_POST['id'];
$query = "SELECT * FROM clubs WHERE id='$type'";
$results = mysqli_query($db, $query);
$ans = mysqli_fetch_assoc($results);
$query2 = "SELECT * FROM members WHERE clubid ='$type'";
$result = mysqli_query($db,$query2);
$solutions = array();
while($row = mysqli_fetch_assoc($result)) {
    $solutions[] = $row['Rollno'];
}
//print_r($solutions);
$stud = array();
foreach ($solutions as $roll){
    $query3 = "SELECT * FROM students WHERE Rollno ='$roll'";
    $result = mysqli_query($db,$query3);
    $ans3 = mysqli_fetch_assoc($result);
    $stud[] =$ans3;
}
//print_r($stud);


?>
<div class="container-fluid" id="detailcon" >

    <img src="img/<?php echo $type ?>.jpeg"  alt="profile" id="profile"   >
    <br>
    <hr>
    <h1><b id="detail">Name : </b><?php echo $ans['name'] ?></h1>
    <h1><b id="detail">Coordinator : </b><?php echo $ans['co'] ?></h1>
    <h1><b id="detail">Co-coordinator : </b><?php echo $ans['coco'] ?></h1>
    <hr>
    <br>
    <h1><b id="detail">Members :- </b></h1>
    <hr>

    <table style="width:100%" border="1" id="table" >
        <tr>
            <th>S.no</th>
            <th>Image</th>
            <th>Roll no</th>
            <th>Name</th>
            <th>Year</th>
            <th>Branch</th>
            <th>Email</th>
            <th>Mobile no</th>

        </tr>
        <?php
$count = 0;
        foreach ($stud as $student) {
$count++;
            ?>
            <tr>
                <td><?php echo $count?></td>
                <td><img src="<?php echo $student['imagesrc'] ?>"  alt="profile" width="50px" height="50px"  ></td>
                <td><?php echo $student['Rollno']?></td>
                <td><?php echo $student['Name']?></td>
                <td><?php echo $student['Year']?></td>
                <td><?php echo $student['branch']?></td>
                <td><?php echo $student['Email']?></td>
                <td><?php echo $student['phone']?></td>

            </tr>
            <?php
        }
        ?>
    </table>

</div>




</body>
</html>



