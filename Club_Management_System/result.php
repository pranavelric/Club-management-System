<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href='css/styles.css'>

</head>
<body id="resultbody">
<?php require "navbar.php";

$db =  @mysqli_connect("localhost","root","",'club_management_system');

 $querycococse = "SELECT recroll,COUNT(votecnt),recname,recimg FROM `vote` WHERE clubid =1 and coco = 1  GROUP BY recroll order by COUNT(votecnt=1) desc ";
 $querycocoece = "SELECT recroll,COUNT(votecnt),recname,recimg FROM `vote` WHERE clubid =2 and coco = 1  GROUP BY recroll order by COUNT(votecnt=1) desc";
 $querycocorace = "SELECT recroll,COUNT(votecnt),recname,recimg FROM `vote` WHERE clubid =3 and coco = 1  GROUP BY recroll order by COUNT(votecnt=1) desc";
 $querycococad = "SELECT recroll,COUNT(votecnt),recname,recimg FROM `vote` WHERE clubid =4 and coco = 1  GROUP BY recroll order by COUNT(votecnt=1) desc";


$resultcococse = mysqli_query($db, $querycococse);
$resultcocoece = mysqli_query($db, $querycocoece);
$resultcocorace = mysqli_query($db, $querycocorace);
$resultcococad = mysqli_query($db, $querycococad);

$anscococse =array();
$anscocoece =array();
$anscocorace =array();
$anscococad =array();

while ($ans_cococse = mysqli_fetch_assoc($resultcococse)) {
$anscococse[] = $ans_cococse;
}

while ($ans_cocoece = mysqli_fetch_assoc($resultcocoece)) {
    $anscocoece[] = $ans_cocoece;
}

while ($ans_cocorace = mysqli_fetch_assoc($resultcocorace)) {
    $anscocorace[] = $ans_cocorace;
}

while ($ans_cococad = mysqli_fetch_assoc($resultcococad)) {
    $anscococad[] = $ans_cococad;
}




 $querycocse = "SELECT recroll,COUNT(votecnt),recname,recimg FROM `vote` WHERE clubid =1 and co = 1  GROUP BY recroll order by COUNT(votecnt=1) desc";
 $querycoece = "SELECT recroll,COUNT(votecnt),recname,recimg FROM `vote` WHERE clubid =2 and co = 1  GROUP BY recroll order by COUNT(votecnt=1) desc";
 $querycorace = "SELECT recroll,COUNT(votecnt),recname,recimg FROM `vote` WHERE clubid =3 and co = 1  GROUP BY recroll order by COUNT(votecnt=1) desc";
 $querycocad = "SELECT recroll,COUNT(votecnt),recname,recimg FROM `vote` WHERE clubid =4 and co = 1  GROUP BY recroll order by COUNT(votecnt=1) desc";





$resultcocse = mysqli_query($db, $querycocse);
$resultcoece = mysqli_query($db, $querycoece);
$resultcorace = mysqli_query($db, $querycorace);
$resultcocad = mysqli_query($db, $querycocad);



$anscocse =array();
$anscoece =array();
$anscorace =array();
$anscocad =array();

while ($ans_cocse = mysqli_fetch_assoc($resultcocse)) {
    $anscocse[] = $ans_cocse;
}

while ($ans_coece = mysqli_fetch_assoc($resultcoece)) {
    $anscoece[] = $ans_coece;
}

while ($ans_corace = mysqli_fetch_assoc($resultcorace)) {
    $anscorace[] = $ans_corace;
}

while ($ans_cocad = mysqli_fetch_assoc($resultcocad)) {
    $anscocad[] = $ans_cocad;
}




$querysenatecse = "SELECT recroll ,COUNT(votcount),recname,recimg FROM `senatevote` WHERE branch = 'CSE' GROUP BY recroll ORDER BY COUNT(votcount=1) desc";
$querysenateece = "SELECT recroll ,COUNT(votcount),recname,recimg FROM `senatevote` WHERE branch = 'ECE' GROUP BY recroll ORDER BY COUNT(votcount=1) desc";
$querysenateme = "SELECT recroll ,COUNT(votcount),recname,recimg FROM `senatevote` WHERE branch = 'ME' GROUP BY recroll ORDER BY COUNT(votcount=1 ) desc";



$resultsenatecse = mysqli_query($db, $querysenatecse);
$resultsenateece = mysqli_query($db, $querysenateece);
$resultsenateme = mysqli_query($db, $querysenateme);



$anssenatecse =array();
$anssenateece=array();
$anssenateme =array();


while ($ans_senatecse = mysqli_fetch_assoc($resultsenatecse)) {
    $anssenatecse[] = $ans_senatecse;
}

while ($ans_senateece = mysqli_fetch_assoc($resultsenateece)) {
    $anssenateece[] = $ans_senateece;
}

while ($ans_senateme= mysqli_fetch_assoc($resultsenateme)) {
    $anssenateme[] = $ans_senateme;
}


?>


<header style="background-color: firebrick; border: 1px orange solid; width: 100%;">
    <center>
        <h1 style="margin-top: 0;font-size: 2em;font-family:cursive">RESULTS</h1>
    </center>
</header>

<div class="container-fluid" id="procont" >
   <div class="container">
    <h1 id="resulthe">For Co-Cordinator</h1>
    <h3>Bit-Byte Programming Club</h3>

    <table  border="1" id="tableresult">
    <tr>

        <th>
            Rank
        </th>

        <th>
            Image
        </th>

        <th>
            Name
        </th>
        <th>
            Branch
        </th>
        <th>
            Roll Number
        </th>
        <th>
            Vote count
        </th>
    </tr>
        <?php
        $count = 0;
        foreach ($anscococse as $cococse) {
$count++;


            ?>
            <tr>
                <td>
                    <b> <?php echo $count;?></b>
                </td>
                <td><img src="<?php echo $cococse['recimg'] ?>"  alt="profile" width="70px" height="70px"  ></td>
                <td>
                    <b> <?php echo strtoupper($cococse['recname']);?></b>
                </td>
                <td>
                    <b>CSE</b>
                </td>
                <td>
                    <b> <?php echo $cococse['recroll'];?></b>
                </td>
                <td>
                    <b> <?php echo $cococse['COUNT(votecnt)'];?></b>
                </td>

            </tr>
            <?php
        }
        ?>

</table>

    <hr>
    <br>



    <h3>Electronics Club</h3>

    <table  border="1" id="tableresult">
        <tr>

            <th>
                Rank
            </th>

            <th>
                Image
            </th>

            <th>
                Name
            </th>
            <th>
                Branch
            </th>
            <th>
                Roll Number
            </th>
            <th>
                Vote count
            </th>
        </tr>
        <?php
        $count = 0;
        foreach ($anscocoece as $cocoece) {
            $count++;


            ?>
            <tr>
                <td>
                    <b> <?php echo $count;?></b>
                </td>
                <td><img src="<?php echo $cocoece['recimg'] ?>"  alt="profile"  width="70px" height="70px" ></td>
                <td>
                    <b> <?php echo strtoupper($cocoece['recname']);?></b>
                </td>
                <td>
                    <b>CSE</b>
                </td>
                <td>
                    <b> <?php echo $cocoece['recroll'];?></b>
                </td>
                <td>
                    <b> <?php echo $cocoece['COUNT(votecnt)'];?></b>
                </td>

            </tr>
            <?php
        }
        ?>

    </table>


    <hr>
    <br>



    <h3>Racing Club</h3>

    <table  border="1" id="tableresult">
        <tr>

            <th>
                Rank
            </th>

            <th>
                Image
            </th>

            <th>
                Name
            </th>
            <th>
                Branch
            </th>
            <th>
                Roll Number
            </th>
            <th>
                Vote count
            </th>
        </tr>
        <?php
        $count = 0;
        foreach ($anscocorace as $cocorace) {
            $count++;


            ?>
            <tr>
                <td>
                    <b> <?php echo $count;?></b>
                </td>
                <td><img src="<?php echo $cocorace['recimg'] ?>"  alt="profile"  width="70px" height="70px" ></td>
                <td>
                    <b> <?php echo strtoupper($cocorace['recname']);?></b>
                </td>
                <td>
                    <b>CSE</b>
                </td>
                <td>
                    <b> <?php echo $cocorace['recroll'];?></b>
                </td>
                <td>
                    <b> <?php echo $cocorace['COUNT(votecnt)'];?></b>
                </td>

            </tr>
            <?php
        }
        ?>

    </table>


    <hr>
    <br>



    <h3>CAD Club</h3>

    <table  border="1" id="tableresult">
        <tr>

            <th>
                Rank
            </th>

            <th>
                Image
            </th>

            <th>
                Name
            </th>
            <th>
                Branch
            </th>
            <th>
                Roll Number
            </th>
            <th>
                Vote count
            </th>
        </tr>
        <?php
        $count = 0;
        foreach ($anscococad as $cococad) {
            $count++;


            ?>
            <tr>
                <td>
                    <b> <?php echo $count;?></b>
                </td>
                <td><img src="<?php echo $cococad['recimg'] ?>"  alt="profile"  width="70px" height="70px" ></td>
                <td>
                    <b> <?php echo strtoupper($cococad['recname']);?></b>
                </td>
                <td>
                    <b>CSE</b>
                </td>
                <td>
                    <b> <?php echo $cococad['recroll'];?></b>
                </td>
                <td>
                    <b> <?php echo $cococad['COUNT(votecnt)'];?></b>
                </td>

            </tr>
            <?php
        }
        ?>

    </table>
    <hr>
    <br>
    <br>

   </div>

<div class="container">

    <h1 id="resulthe">For Cordinator</h1>
    <h3>Bit-Byte Programming Club</h3>

    <table  border="1" id="tableresult">
        <tr>

            <th>
                Rank
            </th>

            <th>
                Image
            </th>

            <th>
                Name
            </th>
            <th>
                Branch
            </th>
            <th>
                Roll Number
            </th>
            <th>
                Vote count
            </th>
        </tr>
        <?php
        $count = 0;
        foreach ($anscocse as $cococse) {
            $count++;


            ?>
            <tr>
                <td>
                    <b> <?php echo $count;?></b>
                </td>
                <td><img src="<?php echo $cococse['recimg'] ?>"  alt="profile"  width="70px" height="70px" ></td>
                <td>
                    <b> <?php echo strtoupper($cococse['recname']);?></b>
                </td>
                <td>
                    <b>CSE</b>
                </td>
                <td>
                    <b> <?php echo $cococse['recroll'];?></b>
                </td>
                <td>
                    <b> <?php echo $cococse['COUNT(votecnt)'];?></b>
                </td>

            </tr>
            <?php
        }
        ?>

    </table>

    <hr>
    <br>



    <h3>Electronics Club</h3>

    <table  border="1" id="tableresult">
        <tr>

            <th>
                Rank
            </th>

            <th>
                Image
            </th>

            <th>
                Name
            </th>
            <th>
                Branch
            </th>
            <th>
                Roll Number
            </th>
            <th>
                Vote count
            </th>
        </tr>
        <?php
        $count = 0;
        foreach ($anscoece as $cocoece) {
            $count++;


            ?>
            <tr>
                <td>
                    <b> <?php echo $count;?></b>
                </td>
                <td><img src="<?php echo $cocoece['recimg'] ?>"  alt="profile"  width="70px" height="70px" ></td>
                <td>
                    <b> <?php echo strtoupper($cocoece['recname']);?></b>
                </td>
                <td>
                    <b>CSE</b>
                </td>
                <td>
                    <b> <?php echo $cocoece['recroll'];?></b>
                </td>
                <td>
                    <b> <?php echo $cocoece['COUNT(votecnt)'];?></b>
                </td>

            </tr>
            <?php
        }
        ?>

    </table>


    <hr>
    <br>



    <h3>Racing Club</h3>

    <table  border="1" id="tableresult">
        <tr>

            <th>
                Rank
            </th>

            <th>
                Image
            </th>

            <th>
                Name
            </th>
            <th>
                Branch
            </th>
            <th>
                Roll Number
            </th>
            <th>
                Vote count
            </th>
        </tr>
        <?php
        $count = 0;
        foreach ($anscorace as $cocorace) {
            $count++;


            ?>
            <tr>
                <td>
                    <b> <?php echo $count;?></b>
                </td>
                <td><img src="<?php echo $cocorace['recimg'] ?>"  alt="profile"  width="70px" height="70px"  ></td>
                <td>
                    <b> <?php echo strtoupper($cocorace['recname']);?></b>
                </td>
                <td>
                    <b>CSE</b>
                </td>
                <td>
                    <b> <?php echo $cocorace['recroll'];?></b>
                </td>
                <td>
                    <b> <?php echo $cocorace['COUNT(votecnt)'];?></b>
                </td>

            </tr>
            <?php
        }
        ?>

    </table>


    <hr>
    <br>



    <h3>CAD Club</h3>

    <table  border="1" id="tableresult">
        <tr>

            <th>
                Rank
            </th>

            <th>
                Image
            </th>

            <th>
                Name
            </th>
            <th>
                Branch
            </th>
            <th>
                Roll Number
            </th>
            <th>
                Vote count
            </th>
        </tr>
        <?php
        $count = 0;
        foreach ($anscocad as $cococad) {
            $count++;


            ?>
            <tr>
                <td>
                    <b> <?php echo $count;?></b>
                </td>
                <td><img src="<?php echo $cococad['recimg'] ?>"  alt="profile"  width="70px" height="70px"  ></td>
                <td>
                    <b> <?php echo strtoupper($cococad['recname']);?></b>
                </td>
                <td>
                    <b>CSE</b>
                </td>
                <td>
                    <b> <?php echo $cococad['recroll'];?></b>
                </td>
                <td>
                    <b> <?php echo $cococad['COUNT(votecnt)'];?></b>
                </td>

            </tr>
            <?php
        }
        ?>

    </table>
    <hr>
    <br>
    <br>


</div>



    <div class="container">

        <h1 id="resulthe">For Senators</h1>
        <h3>CSE</h3>

        <table  border="1" id="tableresult">
            <tr>

                <th>
                    Rank
                </th>

                <th>
                    Image
                </th>

                <th>
                    Name
                </th>
                <th>
                    Branch
                </th>
                <th>
                    Roll Number
                </th>
                <th>
                    Vote count
                </th>
            </tr>
            <?php
            $count = 0;
            foreach ($anssenatecse as $scse) {
                $count++;


                ?>
                <tr>
                    <td>
                        <b> <?php echo $count;?></b>
                    </td>
                    <td><img src="<?php echo $scse['recimg'] ?>"  alt="profile"  width="70px" height="70px" ></td>
                    <td>
                        <b> <?php echo strtoupper($scse['recname']);?></b>
                    </td>
                    <td>
                        <b>CSE</b>
                    </td>
                    <td>
                        <b> <?php echo $scse['recroll'];?></b>
                    </td>
                    <td>
                        <b> <?php echo $scse['COUNT(votcount)'];?></b>
                    </td>

                </tr>
                <?php
            }
            ?>

        </table>

        <hr>
        <br>



        <h3>ECE</h3>

        <table  border="1" id="tableresult">
            <tr>

                <th>
                    Rank
                </th>

                <th>
                    Image
                </th>

                <th>
                    Name
                </th>
                <th>
                    Branch
                </th>
                <th>
                    Roll Number
                </th>
                <th>
                    Vote count
                </th>
            </tr>
            <?php
            $count = 0;
            foreach ($anssenateece as $cocoece) {
                $count++;


                ?>
                <tr>
                    <td>
                        <b> <?php echo $count;?></b>
                    </td>
                    <td><img src="<?php echo $cocoece['recimg'] ?>"  alt="profile"  width="70px" height="70px" ></td>
                    <td>
                        <b> <?php echo strtoupper($cocoece['recname']);?></b>
                    </td>
                    <td>
                        <b>CSE</b>
                    </td>
                    <td>
                        <b> <?php echo $cocoece['recroll'];?></b>
                    </td>
                    <td>
                        <b> <?php echo $cocoece['COUNT(votcount)'];?></b>
                    </td>

                </tr>
                <?php
            }
            ?>

        </table>


        <hr>
        <br>



        <h3>ME</h3>

        <table  border="1" id="tableresult">
            <tr>

                <th>
                    Rank
                </th>

                <th>
                    Image
                </th>

                <th>
                    Name
                </th>
                <th>
                    Branch
                </th>
                <th>
                    Roll Number
                </th>
                <th>
                    Vote count
                </th>
            </tr>
            <?php
            $count = 0;
            foreach ($anssenateme as $cocorace) {
                $count++;


                ?>
                <tr>
                    <td>
                        <b> <?php echo $count;?></b>
                    </td>
                    <td><img src="<?php echo $cocorace['recimg'] ?>"  alt="profile"  width="70px" height="70px"  ></td>
                    <td>
                        <b> <?php echo strtoupper($cocorace['recname']);?></b>
                    </td>
                    <td>
                        <b>CSE</b>
                    </td>
                    <td>
                        <b> <?php echo $cocorace['recroll'];?></b>
                    </td>
                    <td>
                        <b> <?php echo $cocorace['COUNT(votcount)'];?></b>
                    </td>

                </tr>
                <?php
            }
            ?>

        </table>


        <hr>
        <br>
        <br>
        <br>


    </div>

</div>
<?php
/* alloting co and coco*/
$winnercococse = null;
$winnercocoece = null;
$winnercocorace = null;
$winnercococad = null;

$cocovotecse = 0;
$cocovoteece = 0;
$cocovoterace = 0;
$cocovotecad = 0;



$winnercocse = null;
$winnercoece = null;
$winnercorace = null;
$winnercocad = null;


$covotecse = 0;
$covoteece = 0;
$covoterace = 0;
$covotecad = 0;


if(isset($anscococse[0]['recroll']) &&$anscococse[0]['COUNT(votecnt)']) {
    $winnercococse = $anscococse[0]['recroll'];
    $cocovotecse  =$anscococse[0]['COUNT(votecnt)'];
}
if(isset($anscocoece[0]['recroll'])  &&$anscocoece[0]['COUNT(votecnt)']) {
    $winnercocoece = $anscocoece[0]['recroll'];
    $cocovoteece  =$anscocoece[0]['COUNT(votecnt)'];
}
if(isset($anscocorace[0]['recroll'])  &&$anscocorace[0]['COUNT(votecnt)']) {
    $winnercocorace = $anscocorace[0]['recroll'];
    $cocovoterace  =$anscocorace[0]['COUNT(votecnt)'];
}
if(isset($anscococad[0]['recroll'])  &&$anscococad[0]['COUNT(votecnt)']) {
    $winnercococad = $anscococad[0]['recroll'];
    $cocovotecad  =$anscocoece[0]['COUNT(votecnt)'];
}

if(isset($anscocse[0]['recroll'])  &&$anscocse[0]['COUNT(votecnt)']) {
    $winnercocse = $anscocse[0]['recroll'];
    $covotecse  =$anscocse[0]['COUNT(votecnt)'];
}
if(isset($anscoece[0]['recroll'])  &&$anscoece[0]['COUNT(votecnt)']) {
    $winnercoece = $anscoece[0]['recroll'];
    $covoteece  =$anscoece[0]['COUNT(votecnt)'];
}

if(isset($anscorace[0]['recroll']) &&$anscorace[0]['COUNT(votecnt)']) {
    $winnercorace = $anscorace[0]['recroll'];
    $covoterace  =$anscorace[0]['COUNT(votecnt)'];
}
if(isset($anscocad[0]['recroll']) &&$anscocad[0]['COUNT(votecnt)'] ){
    $winnercocad = $anscocad[0]['recroll'];
    $covotecad  =$anscocad[0]['COUNT(votecnt)'];
}


//print_r($cocovoteece);


$querycococse ="UPDATE coco SET vote = $cocovotecse WHERE club =  1 and Rollno = $winnercococse";
mysqli_query($db, $querycococse) ;
echo $winnercocoece;
$querycocoece ="UPDATE coco SET vote = $cocovoteece WHERE club =  2 and  Rollno = $winnercocoece  ";
mysqli_query($db, $querycocoece) ;

$querycocorace ="UPDATE coco SET vote = $cocovoterace WHERE club =  3 and  Rollno = $winnercocorace  ";
mysqli_query($db, $querycocorace) ;

$querycococad ="UPDATE coco SET vote = $cocovotecad WHERE club =  4 and  Rollno = $winnercococad  ";
mysqli_query($db, $querycococad) ;


$querycocse ="UPDATE co SET vote = $covotecse WHERE club =  1 and `Roll Number` = $winnercocse";
mysqli_query($db, $querycocse)  ;

$querycoece ="UPDATE co SET vote = $covoteece WHERE club =  2 and  `Roll Number`= $winnercoece  ";
mysqli_query($db, $querycoece) ;

$querycorace ="UPDATE co SET vote = $covoterace WHERE club =  3 and  `Roll Number` = $winnercorace  ";
mysqli_query($db, $querycorace) ;

$querycocad ="UPDATE co SET vote = $covotecad WHERE club =  4 and  `Roll Number` = $winnercocad  ";
mysqli_query($db, $querycocad) ;



$cococsename = null;
$cocoecename = null;
$cocoracename = null;
$cococadname = null;


$cocsename = null;
$coecename = null;
$coracename = null;
$cocadname = null;







$querycocsename = "SELECT `Name` FROM co WHERE `Roll Number` ='$winnercocse' ";
$resultcocsename = mysqli_query($db, $querycocsename);
if($resultcocsename) {
    $cocsenamear = mysqli_fetch_assoc($resultcocsename);
    $cocsename = strval($cocsenamear['Name']);
}

$querycoecename = "SELECT `Name` FROM co WHERE `Roll Number` ='$winnercoece' ";
$resultcoecename = mysqli_query($db, $querycoecename);
if($resultcoecename){
$coecenamear = mysqli_fetch_assoc($resultcoecename);
$coecename = $coecenamear['Name'];}

$querycoracename = "SELECT `Name` FROM co WHERE `Roll Number` ='$winnercorace' ";
$resultcoracename = mysqli_query($db, $querycoracename);
if($resultcoracename){
    $coracenamear = mysqli_fetch_assoc($resultcoracename);
    $coracename = $coracenamear['Name'];
}

$querycocadname = "SELECT `Name` FROM co WHERE `Roll Number` ='$winnercocad' ";
$resultcocadname = mysqli_query($db, $querycocadname);
if($resultcocadname){
    $cocadnamear = mysqli_fetch_assoc($resultcocadname);
    $cocadname = $cocadnamear['Name'];}


/*coco name get */




$querycococsename = "SELECT `Name` FROM coco WHERE `Rollno` ='$winnercococse' ";
$resultcococsename = mysqli_query($db, $querycococsename);
if($resultcococsename) {
    $cococsenamear = mysqli_fetch_assoc($resultcococsename);
    $cococsename = strval($cococsenamear['Name']);
}

$querycocoecename = "SELECT `Name` FROM coco WHERE `Rollno` ='$winnercocoece' ";
$resultcocoecename = mysqli_query($db, $querycocoecename);
if($resultcocoecename){
    $cocoecenamear = mysqli_fetch_assoc($resultcocoecename);
    $cocoecename = strval($cocoecenamear['Name']);}

$querycocoracename = "SELECT `Name` FROM co WHERE `Rollno` ='$winnercocorace' ";
$resultcocoracename = mysqli_query($db, $querycocoracename);
if($resultcocoracename){
    $cocoracenamear = mysqli_fetch_assoc($resultcocoracename);
    $cocoracename = strval($cocoracenamear['Name']);

}

$querycococadname = "SELECT `Name` FROM co WHERE `Rollno` ='$winnercococad' ";
$resultcococadname = mysqli_query($db, $querycococadname);
if($resultcococadname){
    $cococadnamear = mysqli_fetch_assoc($resultcococadname);
    $cococadname = strval($cococadnamear['Name']);}


$queryforcse ="UPDATE  `clubs` SET  `co` = '$cocsename', `coco`='$cococsename' WHERE `id`= 1";
mysqli_query($db, $queryforcse) or die("not dine") ;

$queryforece ="UPDATE `clubs` SET  `co` = '$coecename', `coco`='$cocoecename' WHERE  `id`= 2  ";
mysqli_query($db, $queryforece) or die("ece");


$queryforrace ="UPDATE `clubs` SET `co` = '$coracename', `coco`='$cocoracename' WHERE  `id`=3 ";
 mysqli_query($db, $queryforrace) or die("race");

$queryforcad ="UPDATE `clubs` SET `co` = '$cocadname', `coco`='$cococadname' WHERE   `id`=4  ";
mysqli_query($db, $queryforcad) or die("cad");







?>



</body>
</html>





