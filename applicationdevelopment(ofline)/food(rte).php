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
                        <li><a href="#Biscuits">Biscuits</a></li>
                        <li><a href="">Cereals/Oats</a></li>
                        <li><a href="">Chocolate</a></li>
                        <li><a href="">Snacks</a></li>
                    </ul>
                </li>
            </ul>

            <form action="topSales.php">
                <button>Top Sales</button>
            </form>
        </div>

        <!-- Biscuits-->
        <div>
            <h1 id="Biscuits">Biscuits</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Biscuits/v1.jpeg" alt="" width="105px" height="105px">
                    <p>Chipsmore Biscuit Multipack 8x32g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Chipsmore Biscuit Multipack 8x32g Assort&pictures=pictures/Food(Ready To Eat)/Biscuits/v1.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Biscuits/v2.jpeg" alt="" width="105px" height="105px">
                    <p>Hup Seng Ping Pong Cream Crackers 428g</p>
             <div class="link"> <a href="comparePrice.php?name=Hup Seng Ping Pong Cream Crackers 428g&pictures=pictures/Food(Ready To Eat)/Biscuits/v2.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Biscuits/v3.jpeg" alt="" width="105px" height="105px">
                    <p>Jacob's Crackers 700g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Jacob's Crackers 700g Assort&pictures=pictures/Food(Ready To Eat)/Biscuits/v3.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Biscuits/v4.jpeg" alt="" width="105px" height="105px">
                    <p>Julie's Assorted Biscuits 530g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Julie's Assorted Biscuits 530g Assort&pictures=pictures/Food(Ready To Eat)/Biscuits/v4.jpeg">Buy Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Biscuits/v5.jpeg" alt="" width="105px" height="105px">
                    <p>Julie's Sandwich Biscuit 330-360g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Julie's Sandwich Biscuit 330-360g Assort&pictures=pictures/Food(Ready To Eat)/Biscuits/v5.jpeg">Buy Now</a></div>
                </div>
            </div>
        </div>

        <div class="sub-category-container">

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Biscuits/v6.jpeg" alt="" width="105px" height="105px">
                    <p>Julie's Assorted Biscuits 530g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Julie's Assorted Biscuits 530g Assort&pictures=pictures/Food(Ready To Eat)/Biscuits/v6.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Biscuits/v7.jpeg" alt="" width="105px" height="105px">
                    <p>Julie's Crackers 600-700g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Julie's Crackers 600-700g Assort&pictures=pictures/Food(Ready To Eat)/Biscuits/v7.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Biscuits/v8.jpeg" alt="" width="105px" height="105px">
                    <p>Mamee Monster Biskidz Mini Pack 8x21g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Mamee Monster Biskidz Mini Pack 8x21g Assort&pictures=pictures/Food(Ready To Eat)/Biscuits/v8.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Biscuits/v9.jpeg" alt="" width="105px" height="105px">
                    <p>Munchy's Lexus Sandwich Biscuits 190g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Munchy's Lexus Sandwich Biscuits 190g Assort&pictures=pictures/Food(Ready To Eat)/Biscuits/v9.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Biscuits/v10.jpeg" alt="" width="105px" height="105px">
                    <p>Oreo Sandwich Biscuit 137-152g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Oreo Sandwich Biscuit 137-152g Assort&pictures=pictures/Food(Ready To Eat)/Biscuits/v10.jpeg">Buy Now</a></div>
                </div>
            </div>
        </div>

        <!--Chocolate-->
        <div>
            <h1>Chocolate</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Chocolate/cadburry.jpeg" alt="" width="105px" height="105px">
                    <p>Cadbury Dairy Milk Block Chocolate 165g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Cadbury Dairy Milk Block Chocolate 165g Assort&pictures=pictures/Food(Ready To Eat)/Chocolate/cadburry.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Chocolate/cadburry2.jpeg" alt="" width="105px" height="105px">
                    <p>Cadbury Marvellous Creations Block Chocolate 160g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Cadbury Marvellous Creations Block Chocolate 160g Assort&pictures=pictures/Food(Ready To Eat)/Chocolate/cadburry2.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Chocolate/ferrero.jpeg" alt="" width="105px" height="105px">
                    <p>Ferrero Rocher T24</p>
             <div class="link"> <a href="comparePrice.php?name=Ferrero Rocher T24&pictures=pictures/Food(Ready To Eat)/Chocolate/ferrero.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Chocolate/ferero3.jpeg" alt="" width="105px" height="105px">
                    <p> Ferrero Rocher T16</p>
             <div class="link"> <a href="comparePrice.php?name=Ferrero Rocher T16&pictures=pictures/Food(Ready To Eat)/Chocolate/ferrero3.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Chocolate/fererro2.jpeg" alt="" width="105px" height="105px">
                    <p> Ferrero Rocher T30</p>
             <div class="link"> <a href="comparePrice.php?name=Ferrero Rocher T24&pictures=pictures/Food(Ready To Eat)/Chocolate/ferrero.jpeg">Buy Now</a></div>
                </div>
            </div>
        </div>

        <div class="sub-category-container">

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Chocolate/kitkat.jpeg" alt="" width="105px" height="105px">
                    <p>Kit Kat 2 Fingers Wafer Chocolate 204g 12s</p>
             <div class="link"> <a href="comparePrice.php?name=Kit Kat 2 Fingers Wafer Chocolate 204g 12s&pictures=pictures/Food(Ready To Eat)/Chocolate/kitkat.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Chocolate/m&m.jpeg" alt="" width="105px" height="105px">
                    <p>M&M's Fun Size Chocolate Candy 202.5g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=M&M's Fun Size Chocolate Candy 202.5g Assort&pictures=pictures/Food(Ready To Eat)/Chocolate/m&m.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Chocolate/milonugget.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Jacob's Crackers 700g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Jacob's Crackers 700g Assort&pictures=pictures/Food(Ready To Eat)/Chocolate/milonugget.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Chocolate/vochelle.jpeg" alt="" width="105px" height="105px">
                    <p>Milo Nuggets 90g</p>
             <div class="link"> <a href="comparePrice.php?name=Milo Nuggets 90g&pictures=pictures/Food(Ready To Eat)/Chocolate/vochelle.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/Chocolate/vochelle2.jpeg" alt="" width="105px" height="105px">
                    <p>Jacob's Crackers 700g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Jacob's Crackers 700g Assort&pictures=pictures/Food(Ready To Eat)/Chocolate/vochelle2.jpeg">Buy Now</a></div>
                </div>
            </div>
        </div>

        <!--Cereals and oats-->
        <div>
            <h1>Cereals & Oats</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/cereals/koko.jpeg" alt="" width="105px" height="105px">
                    <p>Nestle Koko Krunch/Honey Stars 300g-330g</p>
             <div class="link"> <a href="comparePrice.php?name=Nestle Koko Krunch/Honey Stars 300g-330g&pictures=pictures/Food(Ready To Eat)/cereals/koko.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/cereals/corn.jpeg" alt="" width="105px" height="105px">
                    <p>Kellogg's Corn Flakes Cereal 275g</p>
             <div class="link"> <a href="comparePrice.php?name=Kellogg's Corn Flakes Cereal 275g&pictures=pictures/Food(Ready To Eat)/cereals/corn.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/cereals/corn2.jpeg" alt="" width="105px" height="105px">
                    <p> Kellogg's Corn Flakes Cereal 500g</p>
             <div class="link"> <a href="comparePrice.php?name=Kellogg's Corn Flakes Cereal 500g&pictures=pictures/Food(Ready To Eat)/cereals/corn2.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/cereals/corn3.jpeg" alt="" width="105px" height="105px">
                    <p>Nestle Corn Flakes Cereal 275g</p>
             <div class="link"> <a href="comparePrice.php?name=Nestle Corn Flakes Cereal 275g&pictures=pictures/Food(Ready To Eat)/cereals/corn3.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/cereals/kellog.jpeg" alt="" width="105px" height="105px">
                    <p>Kellogg's Special K Cereal 370-385g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Kellogg's Special K Cereal 370-385g Assort&pictures=pictures/Food(Ready To Eat)/cereals/kellog.jpeg">Buy Now</a></div>
                </div>
            </div>
        </div>

        <!--Cereals and oats-->
        <div>
            <h1>Snacks</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/snacks/lay.jpeg" alt="" width="105px" height="105px">
                    <p>Lay's/Ruffles Potato Chips 184g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Lay's/Ruffles Potato Chips 184g Assort&pictures=pictures/Food(Ready To Eat)/snacks/lay.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/snacks/misterpotato.jpeg" alt="" width="105px" height="105px">
                    <p>Mister Potato Crisps Canister 150g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Mister Potato Crisps Canister 150g Assort&pictures=pictures/Food(Ready To Eat)/snacks/misterpotato.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/snacks/chachos.jpeg" alt="" width="105px" height="105px">
                    <p>Chacho's Corn Chips 80g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Chacho's Corn Chips 80g Assort&pictures=pictures/Food(Ready To Eat)/snacks/chachos.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/snacks/dahfa.jpeg" alt="" width="105px" height="105px">
                    <p>Dahfa Fish Fillet 120g</p>
             <div class="link"> <a href="comparePrice.php?name=Dahfa Fish Fillet 120g&pictures=pictures/Food(Ready To Eat)/snacks/dahfa.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/snacks/jack n jill.jpeg" alt="" width="105px" height="105px">
                    <p>Jack N Jill Roller Coaster Snack Bag 60g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Jack N Jill Roller Coaster Snack Bag 60g Assort&pictures=pictures/Food(Ready To Eat)/snacks/jack n jill.jpeg">Buy Now</a></div>
                </div>
            </div>
        </div>

        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/snacks/jack n jill 2.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Jack N Jill Roller Coaster Snack Canister 100g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Jack N Jill Roller Coaster Snack Canister 100g Assort&pictures=pictures/Food(Ready To Eat)/snacks/jack n jill 2.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/snacks/jacker.jpeg" alt="" width="105px" height="105px">
                    <p>Jacker Potato Crisps Canister 150g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Jacker Potato Crisps Canister 150g Assort&pictures=pictures/Food(Ready To Eat)/snacks/jacker.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/snacks/mamee.jpeg" alt="" width="105px" height="105px">
                    <p>Mamee Monster Noodle Snack 8x25g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Mamee Monster Noodle Snack 8x25g Assort&pictures=pictures/Food(Ready To Eat)/snacks/mamee.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(Ready To Eat)/snacks/misterpotato.jpeg" alt="" width="105px" height="105px">
                    <p>Mister Potato Chips Bag 75g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Mister Potato Chips Bag 75g Assort&pictures=pictures/Food(Ready To Eat)/snacks/misterpotatotato.jpeg">Buy Now</a></div>
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