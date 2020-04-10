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
        body {
            background: linear-gradient(to left, #0060ca, white);
        }

        input {
            border: none;
            height: 6vh;
        }

        input:focus {
            background: white;
        }

        .product-container {
            width: 100%;
            height: auto;
        }

        .search-bar {
            display: flex;
            justify-content: center;
        }


        .product-container form {
            width: 400px;
        }

        .search-logo {
            position: relative;
            right: 7vh;
            bottom: -20px;
        }

        .sub-product-container {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .sub-product-container .product {
            margin: 20px;
            background: white;
            width: 250px;
            height: 250px;
            box-shadow: 0 6px 6px -6px black;
            border-radius: 3px;
        }

        .sub-product-container .product img {
            border-bottom: 1px solid whitesmoke;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        .product p {
            text-align: center;
            margin-top: 5px;
            margin-bottom: -15px;

        }

        .product a {
            color: #0060ca;
            text-align: center;
            display: flex;
            justify-content: center;
        }

        .product a:hover {
            text-decoration: underline;
        }

        .username ul {
            width: 80px;
            list-style-type: none;
        }

        .username ul li:hover ul li {
            display: block;
        }

        .username ul li ul li {
            display: none;
            margin-top: -30px;
        }

        .username ul li ul li a {
            background: white;
            padding: 8px;
            border-radius: 3px;
            color: black;
            animation: swing-in-left-fwd 0.7s cubic-bezier(0.175, 0.885, 0.320, 1.275) both;
        }

        @keyframes swing-in-left-fwd {
            0% {
                -webkit-transform: rotateY(100deg);
                transform: rotateY(100deg);
                -webkit-transform-origin: left;
                transform-origin: left;
                opacity: 0;
            }

            100% {
                -webkit-transform: rotateY(0);
                transform: rotateY(0);
                -webkit-transform-origin: left;
                transform-origin: left;
                opacity: 1;
            }
        }

        .username ul li ul li a:hover {
            color: #0060ca;
            opacity: 1;
        }

        button
        {
            margin-top:10px;
            width:20vh;
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
                    <div><a href="" id="active">Products</a></div>
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

    <div class="product-container">
        <section>
            <div class="search-bar">
                <form action="test.php" method=POST>
                    <input type="text" name="valueToSearch" placeholder="Search anything here...">
                    <button name="search">Search</button>
                </form>
            </div>

            <div class="sub-product-container">
                <div class="product">
                    <img src="pictures/ProductsImage/beverage.png" alt="" width="250px" height="180px">
                    <p>Beverage (Ready To Drink)</p>
                    <a href="beverages(rtd).php">Shop Now</a>
                </div>

                <div class="product">
                    <img src="pictures/ProductsImage/beverage2.png" alt="" width="250px" height="180px">
                    <p>Beverage (To Prepare)</p>
                    <a href="beverage(tp).php">Shop Now</a>
                </div>

                <div class="product">
                    <img src="pictures/ProductsImage/food1.png" alt="" width="250px" height="180px">
                    <p>Food (Ready To Eat)</p>
                    <a href="food(rte).php">Shop Now</a>
                </div>

                <div class="product">
                    <img src="pictures/ProductsImage/food2.jpg" alt="" width="250px" height="180px">
                    <p>Food (To Prepare)</p>
                    <a href="food(tp).php">Shop Now</a>
                </div>
            </div>


            <div class="sub-product-container">
                <div class="product">
                    <img src="pictures/ProductsImage/frozen.png" alt="" width="250px" height="180px">
                    <p>Chilled & Frozen</p>
                    <a href="chilled&frozen.php">Shop Now</a>
                </div>

                <div class="product">
                    <img src="pictures/ProductsImage/fresh produce.jpg" alt="" width="250px" height="180px">
                    <p>Fresh Produce</p>
                    <a href="FreshProduce.php">Shop Now</a>
                </div>

                <div class="product">
                    <img src="pictures/ProductsImage/personalcare.jpg" alt="" width="250px" height="180px">
                    <p>Personal Care</p>
                    <a href="personalCare.php">Shop Now</a>
                </div>

                <div class="product">
                    <img src="pictures/ProductsImage/household care.png" alt="" width="250px" height="180px">
                    <p>Household Care</p>
                    <a href="householdCare.php">Shop Now</a>
                </div>
            </div>

        </section>
    </div>
</body>

</html>