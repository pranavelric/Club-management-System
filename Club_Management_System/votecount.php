<?php
session_start();
$voteremail =strval($_SESSION['email']);
//echo $_SESSION['email'];
$vt= $_POST['vote'];//clubid
$coco = $_POST['coco'];
$co = $_POST['co'];
$senate = $_POST['senate'];
$receiverRollno = $_POST['receiverroll'];
$clubid =$_POST['clubid'];
//echo $receiverRollno;
//echo $clubid;
//echo $coco." ".$co." ".$senate;
//echo $vt;

$db =  @mysqli_connect("localhost","root","",'club_management_system');
$count=0;
$query = "SELECT Rollno FROM students WHERE Email ='$voteremail' ";
$result = mysqli_query($db, $query);
$ans4 = mysqli_fetch_assoc($result);
$voteRollno = $ans4['Rollno'];

$count++;
$query ="INSERT INTO vote (`voterroll` ,`recroll`, `clubid`, `votecnt` , `co`, `coco`,`senate`) VALUES('$voteRollno','$receiverRollno','$clubid','$count','$co','$coco','$senate')";
if(mysqli_query($db, $query) ){
    echo "<a href='votego.php'><h1 style='color: Green'> You voted : Click here to go back</h1></a>";
}
else
{
    echo "<a href='votego.php'><h1 style='color: red'> You Already voted for this club: Click here to go back</h1></a>";
}

?>