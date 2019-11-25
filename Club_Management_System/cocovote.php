<?php
$db =  @mysqli_connect("localhost","root","",'club_management_system');
$count=0;
$query = "SELECT * FROM coco ";
$results = mysqli_query($db, $query);

$ar=array();
//print_r($ans);
while($ans = mysqli_fetch_assoc($results))
$ar[]=$ans;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vote</title>


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
<?php require "navbar.php";
?>
<body id="cocobody" >

<div class="container-fluid ">
    <div class="container-fluid row" style="margin-top: 3%;margin-left: 4%">
<?php
foreach ($ar as $a) {

    ?>


    <div class="card  " id="cardvote" style="width:300px;margin: 2%;">
       <div class="embed-responsive embed-responsive-1by1">
        <img class="card-img-top embed-responsive-item" src="<?php echo $a['imagesrc']?>" alt="Card image" height="100%" style="width:100%">
       </div>
           <br>
        <div class="card-body  embed-responsive embed-responsive-21by1 "  id="votecard">
            <h4 class="card-title "><b>Name :</b><?php echo $a['Name']?></h4>
            <h4 class="card-title "><b>Roll No :</b><?php echo $a['Rollno']?></h4>
            <h4 class="card-title "><b>Branch :</b><?php echo $a['Branch']?></h4>
            <h4 class="card-title "><b>Club :</b><?php

                $query3 = "SELECT name FROM clubs WHERE id ='$a[club]'";
                $result = mysqli_query($db,$query3);
                $ans3 = mysqli_fetch_assoc($result);
                  echo $ans3['name']?></h4>

            <p class="card-text"></p>
<?php
$email = strval($_SESSION['email']);

$query = "SELECT Rollno FROM students WHERE Email ='$email' ";
$result = mysqli_query($db, $query);
$ans4 = mysqli_fetch_assoc($result);
$query4 = "SELECT clubid FROM members WHERE Rollno ='$ans4[Rollno]' ";
$result4 = mysqli_query($db,$query4);

$arr=array();
//print_r($ans);
while($ans44= mysqli_fetch_assoc($result4))
    $arr[]=$ans44;

foreach ($arr as $aa)
{
if($aa['clubid']==$a['club']) {
    ?>
    <form action="votecount.php" method="post">
        <input type="hidden" name="coco" value="1"/>
        <input type="hidden" name="co" value="0"/>
        <input type="hidden" name="senate" value="0"/>
        <input type="hidden" name="receiverroll" value="<?php echo $a['Rollno']?>"/>
        <input type="hidden" name="clubid" value="<?php echo $a['club']?>"/>
        <input type="hidden" name="recimg" value="<?php echo $a['imagesrc']?>">
        <input type="hidden" name="recnam" value ="<?php echo $a['Name']?>">
        <button class="btn btn-success" name="vote" value="<?php print_r($a) ?>" type="submit">Vote</button>
    </form>
    <?php
    break;
}
else{
    ?>
    <form action="#" method="post" >
        <button class="btn btn-success" disabled name="vote" value="<?php echo $a['club'] ?>" type="submit">Vote</button>
    </form>
    <br>
    <div class="alert alert-warning">
        <strong>Warning!</strong> You can only vote if you are member of this club</a>.
    </div>

    <?php
    break;
}
}


?>
        </div>

    </div>
    <?php
}
?>






    </div>

</div>

</body>
</html>


