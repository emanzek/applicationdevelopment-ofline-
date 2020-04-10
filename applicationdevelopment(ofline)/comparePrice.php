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
    $pictures = $_GET['pictures'];

    $sql = "SELECT * FROM Item WHERE ItemName='$ItemName'";
    $query = mysqli_query($conn,$sql);
 
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="comparePrice.css">
    <title>Document</title>

    <style>
        .right img
        {
            margin-left:20px;
        }
    </style>
</head>

<body>
    <div class="home-container">
        <section>
            <nav id="nav-bar">
                <div class="left">
                    <div><img src="pictures/Logo/LOGO2.png" alt="" height="120px"></div>
                </div>

                <div class="right">
                    <div><a href="homepage.php">Home</a></div>
                    <div><a href="aboutUs.php">About Us</a></div>
                    <div><a href="savingPlan.php">Saving Planner</a></div>
                    <div><a href="itemCategory.php" id="active">Products</a></div>
                    <div class="username">
                        <ul>
                            <li>
                                <a href=""><?php echo $_SESSION['user']; ?></a>
                                <ul>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div><a href="cart.php"><img src="pictures/Logo/bag.png" alt=""></a></div>
                </div>
            </nav>
        </section>
    </div>
    <div class="container">
        <div class="sub-container">
            <div class="hero">
                <h1><?php echo $ItemName ?></h1>
                <div class="image-item"><img src="<?php echo $pictures ?>" alt=""></div>
                <div class="compare-price">
                    <?php
                            while($rows=mysqli_fetch_array($query))
                            {
                                $price=$rows[Price];
                                $Retailer = $rows[Retailer];
                                $retailerImage=$rows[retailerImage];
                                $id=$rows[Id];
                                $url = "cartProcess.php?id=$id&name=$ItemName&pictures=$pictures&Retailer=$Retailer&price=$price&retailerImage=$retailerImage";

                        ?>

                    <div class="compare-container">
                        <a href="<?php echo $url ?>">
                            <div><p>RM  <?php echo $price ?></p></div>
                            <div><img src="<?php echo $rows[retailerImage] ?>" alt=""></div>
                        </a>
                    </div>

                    <?php
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>


</body>

</html>