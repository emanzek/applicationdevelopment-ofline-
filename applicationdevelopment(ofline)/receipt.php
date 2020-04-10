<?php 
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("location:Login.php");
    }
    $conn=mysqli_connect("localhost", "root", "root");
        mysqli_select_db($conn, "RazafMart");
    if( !$conn) {
        die("Error! Cannot connect to server: ". mysql_error());
    }

    $username=$_SESSION['user'];

    $sql = "SELECT * FROM deliveryInformation WHERE Username='$username' ORDER BY Id DESC LIMIT 1";
    $query=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="homepage.css">

    <style>
        body
        {
            height:110vh;
        }

        .container {
            background: white;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 600px;
            height: auto;
            border-radius: 3px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.46);
            padding: 30px;
            display;
            flex;
            justify-content: center;
            align-items: center;
            margin-top:80px;
        }

        h1 {
            font-family: 'Hind Vadodara', sans-serif;
            margin-top: 10px;
            margin-bottom: 40px;
            text-align: center;
        }

        p {
            font-size: 20px;
            margin-top: 20px;
            color: grey;
        }

        table {
            width: auto;
        }

        table tr td {
            padding-right: 40px;
            padding-left: 40px;
            width: 500px;
        }

        span {
            color: #0060ca;
            font-size: 25px;
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
                    <div><a id="active">Home</a></div>
                    <div><a>About Us</a></div>
                    <div><a href="savingPlan.php">Saving Planner</a></div>
                    <div><a href="itemCategory.php">Products</a></div>
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
                    <div><a href="cart.php"><img src="pictures/logo/bag.png" alt=""></a></div>
                </div>
            </nav>
        </section>
    </div>
    <div class="container">
        <h1>Order Summary</h1>
        <?php 
        while($rows=mysqli_fetch_array($query))
        {
            $delDate=$rows[deliveryDate];
            $newDate = date("d-m-Y", strtotime($delDate));
    
        ?>
        <div class="table">

            <table>
                <tr>
                    <td>
                        <p>Full Name</p>
                    </td>
                    <td>
                        <p><span><?php echo $rows[FullName];  ?></span></p>
                    </td>
                    <hr>
                </tr>
                <tr>
                    <td>
                        <p>Delivery Address</p>
                    </td>
                    <td>
                        <p><span><?php echo $rows[Address]; echo $rows[Address2] ?></span></p>
                    </td>
                    <hr>
                </tr>

                <tr>
                    <td>
                        <p>Delivery Time</p>
                    </td>
                    <td>
                        <p><span><?php echo $rows[deliveryTime] ?></span></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Delivery Date</p>
                    </td>
                    <td>
                        <p><span><?php echo $newDate;  ?></span></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Subtotal</p>
                    </td>
                    <td>
                        <p><span>RM<?php echo $rows[Total] ?></span></p>
                    </td>
                </tr>

                <tr>
                    <td colspan=2>
                        <p style="margin-bottom:20px;margin-top:40px;">Your item is expected to arrive in 40 minutes</p>
                    </td>
                </tr>
            </table>
            <hr>
            <hr>
            <?php 
            }   
            ?>
        </div>

    </div>
</body>

</html>