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
    <title>Document</title>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="product.css">
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
        <div class="search-bar">
            <form action="test.php" method=POST>
                <input type="text" name="valueToSearch" placeholder="Search anything here...">
                <button name="search">Search</button>
            </form>
        </div>

        <div class="category-bar">
            <ul>
                <li>
                    <a href="">Category</a>
                    <img src="pictures/Logo/drop.png" alt="" height="15px">

                    <ul>
                        <li><a href="#Eggs">Eggs</a></li>
                        <li><a href="#Fruits">Fruits</a></li>
                        <li><a href="#meats">Meats</a></li>
                        <li><a href="#vegetables">Vegetables</a></li>
                    </ul>
                </li>
            </ul>

            <form action="topSales.php">
                <button>Top Sales</button>
            </form>
        </div>

        <!--Eggs-->
        <div id="Eggs">
            <h1>Eggs</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/eggs/e1.jpeg" alt="" width="105px" height="105px">
                    <p> Egg Grade C 30s</p>
             <div class="link"> <a href="comparePrice.php?name=Egg Grade C 30s&pictures=pictures/fresh produce/eggs/e1.jpeg">Buy Now</a></div>
                </div>
            </div>
        </div>

        <!--Fruits-->
        <div id="Fruits">
            <h1>Fruits</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/Fruits/f1.jpeg" alt="" width="105px" height="105px">
                    <p> Avocado per piece</p>
             <div class="link"> <a href="comparePrice.php?name=Avocado per piece&pictures=pictures/fresh produce/Fruits/f1.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/Fruits/f2.jpeg" alt="" width="105px" height="105px">
                    <p>Berangan Banana per KG</p>
             <div class="link"> <a href="comparePrice.php?name=Berangan Banana per KG&pictures=pictures/fresh produce/Fruits/f2.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/Fruits/f3.jpeg" alt="" width="105px" height="105px">
                    <p> Cavendish Banana per KG</p>
             <div class="link"> <a href="comparePrice.php?name=Cavendish Banana per KG&pictures=pictures/fresh produce/Fruits/f3.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/Fruits/f5.jpeg" alt="" width="105px" height="105px">
                    <p>Gong Pear per KG</p>
             <div class="link"> <a href="comparePrice.php?name=Gong Pear per KG&pictures=pictures/fresh produce/Fruits/f5.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/Fruits/f6.jpeg" alt="" width="105px" height="105px">
                    <p>Red Watermelon per KG</p>
             <div class="link"> <a href="comparePrice.php?name=Red Watermelon per KG&pictures=pictures/fresh produce/Fruits/f6.jpeg">Buy Now</a></div>
                </div>
            </div>
        </div>

        <!--Meats-->
        <div id="meats">
            <h1>Meats</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/meats/me1.jpeg" alt="" width="105px" height="105px">
                    <p>Bawal Emas (Golden Pomfret) per piece</p>
             <div class="link"> <a href="comparePrice.php?name=Bawal Emas (Golden Pomfret) per piece&pictures=pictures/fresh produce/meats/me1.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/meats/me2.jpeg" alt="" width="105px" height="105px">
                    <p>Cencaru per KG</p>
             <div class="link"> <a href="comparePrice.php?name=Cencaru per KG&pictures=pictures/fresh produce/meats/me2.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/meats/me3.jpeg" alt="" width="105px" height="105px">
                    <p>Chicken Drumstick per KG</p>
             <div class="link"> <a href="comparePrice.php?name=Chicken Drumstick per KG&pictures=pictures/fresh produce/meats/me3.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/meats/me4.jpeg" alt="" width="105px" height="105px">
                    <p>Chicken Rib per KG</p>
             <div class="link"> <a href="comparePrice.php?name=Chicken Rib per KG&pictures=pictures/fresh produce/meats/me4.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/meats/me5.jpeg" alt="" width="105px" height="105px">
                    <p>Chicken Whole Leg per KG</p>
             <div class="link"> <a href="comparePrice.php?name=Chicken Whole Leg per KG&pictures=pictures/fresh produce/meats/me5.jpeg">Buy Now</a></div>
                </div>
            </div>
        </div>

        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/meats/me6.jpeg" alt="" width="105px" height="105px">
                    <p>Pari-Pari (Stingray) Cut per KG</p>
             <div class="link"> <a href="comparePrice.php?name=Pari-Pari (Stingray) Cut per KG&pictures=pictures/fresh produce/meats/me6.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/meats/me7.jpeg" alt="" width="105px" height="105px">
                    <p>White Squid per KG (L size)</p>
             <div class="link"> <a href="comparePrice.php?name=White Squid per KG (L size)&pictures=pictures/fresh produce/meats/me7.jpeg">Buy Now</a></div>
                </div>
            </div>
        </div>


        <!--vegetables-->
        <div id="vegetables">
            <h1>Vegetables</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/vegetables/v1.jpeg" alt="" width="105px" height="105px">
                    <p>Beijing Cabbage per KG</p>
             <div class="link"> <a href="comparePrice.php?name=Beijing Cabbage per KG&pictures=pictures/fresh produce/vegetables/v1.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/vegetables/v2.jpeg" alt="" width="105px" height="105px">
                    <p>	Broccoli per piece</p>
             <div class="link"> <a href="comparePrice.php?name=Broccoli per piece&pictures=pictures/fresh produce/vegetables/v2.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/vegetables/v3.jpeg" alt="" width="105px" height="105px">
                    <p>Carrot per KG</p>
             <div class="link"> <a href="comparePrice.php?name=Carrot per KG&pictures=pictures/fresh produce/vegetables/v3.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/vegetables/v4.jpeg" alt="" width="105px" height="105px">
                    <p>Cauliflower per KG</p>
             <div class="link"> <a href="comparePrice.php?name=Cauliflower per KG&pictures=pictures/fresh produce/vegetables/v4.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/fresh produce/vegetables/v5.jpeg" alt="" width="105px" height="105px">
                    <p>Cauliflower per piece</p>
             <div class="link"> <a href="comparePrice.php?name=Cauliflower per piece&pictures=pictures/fresh produce/vegetables/v5.jpeg">Buy Now</a></div>
                </div>
            </div>
        </div>

    </div>
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>