<?php
session_start();
$voteremail =strval($_SESSION['email']);
//echo $_SESSION['email'];
$branch= $_POST['vote'];
$senate = $_POST['senate'];
$receiverRollno = $_POST['receiverroll'];
/*
echo $receiverRollno;
echo $senate;*/
//echo $branch;


$db =  @mysqli_connect("localhost","root","",'club_management_system');
$count=0;
$query = "SELECT Rollno FROM students WHERE Email ='$voteremail' ";
$result = mysqli_query($db, $query);
$ans4 = mysqli_fetch_assoc($result);
$voteRollno = $ans4['Rollno'];

$count++;
$query ="INSERT INTO senatevote (`voterroll` ,`recroll`,`votcount`,`branch`) VALUES('$voteRollno','$receiverRollno','$count','$branch')";
if(mysqli_query($db, $query) ){
    echo "<a href='votego.php'><h1 style='color: Green'> You voted : Click here to go back</h1></a>";
}
else
{
    echo "<a href='votego.php'><h1 style='color: red'> You Already voted : Click here to go back</h1></a>";
}

?>