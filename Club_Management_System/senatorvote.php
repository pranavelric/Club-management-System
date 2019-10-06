<?php
$db =  @mysqli_connect("localhost","root","",'club_management_system');
$count=0;
$query = "SELECT * FROM senate ";
$results = mysqli_query($db, $query);

$ar=array();

while($ans = mysqli_fetch_assoc($results))
    $ar[]=$ans;
//print_r($ar);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Vote</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href='css/styles.css'>

</head>
<?php require "navbar.php";
?>
<body id="cobody"  >

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
                    <h4 class="card-title "><b>Name :</b><?php echo $a['name']?></h4>
                    <h4 class="card-title "><b>Roll No :</b><?php echo $a['Rollno']?></h4>
                    <h4 class="card-title "><b>Branch :</b><?php echo $a['branch']?></h4>
                    <h4 class="card-title "><b>Year :</b><?php
                        echo $a['year']?></h4>
                    <p class="card-text"></p>
                    <?php
                    $email = strval($_SESSION['email']);
                    $query = "SELECT branch FROM students WHERE Email ='$email' ";
                    $result = mysqli_query($db, $query);
                    $ans4 = mysqli_fetch_assoc($result);
                     $arr=array();

                   // print_r($ans4);

                    foreach ($ans4 as $aa)
                    {
                        if($aa==$a['branch']) {
                            ?>
                            <form action="votecountsenat.php" method="post">
                               <input type="hidden" name="senate" value="0"/>
                                <input type="hidden" name="receiverroll" value="<?php echo $a['Rollno']?>"/>
                                <button class="btn btn-success" name="vote" value="<?php echo $a['branch']?>" type="submit">Vote</button>
                            </form>
                            <?php
                            break;
                        }
                        else{
                            ?>
                            <form action="#" method="post" >
                                <button class="btn btn-success" disabled name="vote" value="<?php echo $a['branch'] ?>" type="submit">Vote</button>
                            </form>
                            <br>
                            <div class="alert alert-danger">
                                <strong>Warning!</strong> You can only vote for people of your branch club</a>.
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


