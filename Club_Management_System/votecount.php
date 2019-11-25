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
$recimg= $_POST['recimg'];
$recnam = $_POST['recnam'];
//echo $receiverRollno;
//echo $clubid;
//echo $coco." ".$co." ".$senate;
//echo $vt;

$db =  @mysqli_connect("localhost","root","",'club_management_system');
$count=0;
$query = "SELECT Rollno FROM students WHERE Email ='$voteremail' ";
$result = mysqli_query($db, $query)or die("not done.");
$ans4 = mysqli_fetch_assoc($result);
$voteRollno = $ans4['Rollno'];
//echo "<br>".$voteRollno." ".$receiverRollno." ".$clubid." ".$count." ".$co." ".$coco." ".$senate."".$recimg." ".$recnam;
$count++;
$query1 ="INSERT INTO vote (`voterroll` ,`recroll`, `clubid`, `votecnt` , `co`, `coco`,`senate`,`recname`,`recimg`) VALUES('$voteRollno','$receiverRollno','$clubid','$count','$co','$coco','$senate','$recnam','$recimg')";
//$res =  mysqli_query($db, $query1);
//die();
if(mysqli_query($db, $query1) ){
    echo "<a href='votego.php'><h1 style='color: Green'> You voted : Click here to go back</h1></a>";
}
else
{
    echo "<a href='votego.php'><h1 style='color: red'> You Already voted for this club: Click here to go back</h1></a>";
}

?>