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

    $id = $_GET['id'];

    $sql = "DELETE FROM shoppingCart WHERE Id=$id";
    mysqli_query($conn,$sql);
    header("location:cart.php");

?>