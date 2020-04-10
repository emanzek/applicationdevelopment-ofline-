<?php 

    session_start();
    if(!isset($_SESSION['user']))
    {
        header("location:Login.php");
    }

    $username = $_SESSION['user'];

    $conn=mysqli_connect("localhost", "root", "root");
    mysqli_select_db($conn, "RazafMart");

    if( !$conn) {
        die("Error! Cannot connect to server: ". mysql_error());
    }

    $jan=$_GET['jan'];
    $feb=$_GET['feb'];
    $mac=$_GET['mac'];
    $apr=$_GET['apr'];
    $may=$_GET['may'];
    $jun=$_GET['jun'];
    $jul=$_GET['jul'];
    $aug=$_GET['aug'];
    $sep=$_GET['sep'];
    $oct=$_GET['oct'];
    $nov=$_GET['nov'];
    $dec=$_GET['dec'];

    $total = $jan+$feb+$mac+$apr+$may+$jun+$jul+$aug+$sep+$oct+$nov+$dec;

    $note1=$_GET['note1'];
    $note2=$_GET['note2'];
    $note3=$_GET['note3'];
    $note4=$_GET['note4'];
    $note5=$_GET['note5'];
    $note6=$_GET['note6'];
    $note7=$_GET['note7'];
    $note8=$_GET['note8'];
    $note9=$_GET['note9'];
    $note10=$_GET['note10'];
    $note11=$_GET['note11'];
    $note12=$_GET['note12'];



    $sql="INSERT INTO `SavingPlan`( `Username`, `January`, `Februray`, `Mac`, `April`, `May`, `Jun`, `July`, `August`, `September`, `October`, `November`, `December`,`totalPerYear`,
    note1, note2, note3, note4, note5, note6, note7, note8, note9, note10, note11, note12) VALUES('$username',$jan,$feb,$mac,$apr,$may,$jun,$jul,$aug,$sep,$oct,$nov,$dec,$total,
    '$note1','$note2','$note3','$note4','$note5','$note6','$note7','$note8','$note9','$note10','$note11','$note12')
    ON DUPLICATE KEY UPDATE  January=$jan,Februray=$feb, Mac=$mac, April=$apr, May=$may, Jun=$jun, July=$jul, August=$aug, September=$sep, October=$oct, November=$nov, December=$dec, totalPerYear=$total, 
    note1='$note1',note2='$note2',note3='$note3',note4='$note5',note6='$note7',note8='$note8',note9='$note9',note10='$note10',note11='$note12'";


    if ((mysqli_query($conn, $sql))) {
        header("location:savingPlan.php?Success");
    }

    else {
        echo "Error updating record: ". mysqli_error($conn);
    }

?>