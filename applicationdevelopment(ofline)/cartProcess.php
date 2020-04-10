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

    $ItemName = $_GET['name'];  
    $price=$_GET['price'];
    $pictures= $_GET['pictures'];
    $retailerImage=$_GET['retailerImage'];
    $Retailer=$_GET['Retailer'];
    $id=$_GET['id'];

    $sql = "INSERT INTO shoppingCart(Id,Username, ItemName, Price, itemImage,Retailer, retailerImage,Subtotal,totalPrice) VALUES($id,'$username','$ItemName','$price','$pictures','$Retailer','$retailerImage','0','0')
    ON DUPLICATE KEY UPDATE Username='$username', ItemName='$ItemName', Price='$price', retailerImage='$retailerImage',  Retailer='$Retailer',Subtotal='0',totalPrice='0' ";  
    if(mysqli_query($conn,$sql))
    {
        header("location:cart.php");
    } 
    else
    {
        echo "Error updating record: ". mysqli_error($conn);
    }
?>
