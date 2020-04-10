<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("location:Login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="homepage.css">
    <title>Document</title>
    <style>

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

        <section>
            <div class="text-container" id="text-container">
                <h1>Online Market</h1>
                <p>Online marketing is the practice of leveraging web-based channels to spread a message.The objective
                    of marketing is to reach potential customers through the channels where they spend their time
                    reading, searching, shopping, and socializing online.</p>
                <a href="itemCategory.php"> <button>Buy Now</button></a>
            </div>
        </section>
    </div>


</body>

</html>