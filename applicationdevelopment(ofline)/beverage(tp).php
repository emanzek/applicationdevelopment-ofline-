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
                        <li><a href="#cereals&oats">Cereals & Oat</a></li>
                        <li><a href="#chocolateDrink">Malt Drink</a></li>
                        <li><a href="#coffee">Coffee</a></li>
                        <li><a href="#cordials">Cordials</a></li>
                    </ul>
                </li>
            </ul>

            <form action="topSales.php">
                <button>Top Sales</button>
            </form>
        </div>

        <!--cereals&oat-->
        <div id="cereals&oats">
            <h1>Cereals & Oat</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/cerealsNoat/c1.jpeg " alt="" width="105px" height="105px">
                    <p> Super NutreMill 3in1 Cereal Mix 15-18x30g Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Super NutreMill 3in1 Cereal Mix 15-18x30g Assort&pictures=pictures/beverage(to prepare)/cerealsNoat/c1.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/cerealsNoat/c2.jpeg " alt="" width="105px" height="105px">
                    <p>Nestum 3in1 Cereal Drink 10-15x28-30g Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Nestum 3in1 Cereal Drink 10-15x28-30g Assort&pictures=pictures/beverage(to prepare)/cerealsNoat/c2.jpeg">Buy
                            Now</a></div>

                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/cerealsNoat/c3.jpeg " alt="" width="105px" height="105px">
                    <p>Quaker Oat Cereals 1KG Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Quaker Oat Cereals 1KG Assort&pictures=pictures/beverage(to prepare)/cerealsNoat/c3.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/cerealsNoat/c4.jpeg" alt="" width="105px" height="105px">
                    <p>Quaker Oat Cereals Refill 1KG Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Quaker Oat Cereals Refill 1KG Assort&pictures=pictures/beverage(to prepare)/cerealsNoat/c4.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/cerealsNoat/c5.jpeg" alt="" width="105px" height="105px">
                    <p> Captain Oats Oat Cereals 1KG Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Captain Oats Oat Cereals 1KG Assort&pictures=pictures/beverage(to prepare)/cerealsNoat/c5.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
        </div>



        <!--chocolateDrink-->
        <div id="chocolateDrink">
            <h1>Malt Drink</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/chocolateDrink/m1.jpeg" alt="" width="105px" height="105px">
                    <p>Horlicks 3in1 Malt Drink Mix 10x28-32g Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Horlicks 3in1 Malt Drink Mix 10x28-32g Assort&pictures=pictures/beverage(to prepare)/chocolateDrink/m1.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/chocolateDrink/m2.jpeg" alt="" width="105px" height="105px">
                    <p>Milo Mix Drink 3in1 Original 30x33g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Milo Mix Drink 3in1 Original 30x33g&pictures=pictures/beverage(to prepare)/chocolateDrink/m2.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/chocolateDrink/m3.jpeg" alt="" width="105px" height="105px">
                    <p> Milo Mix Drink Original/Kosong 18x30-33g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Milo Mix Drink Original/Kosong 18x30-33g&pictures=pictures/beverage(to prepare)/chocolateDrink/m3.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/chocolateDrink/m4.jpeg" alt="" width="105px" height="105px">
                    <p>Milo Chocolate Drink Refill 1KG</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Milo Chocolate Drink Refill 1KG&pictures=pictures/beverage(to prepare)/chocolateDrink/m4.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/chocolateDrink/m5.jpeg" alt="" width="105px" height="105px">
                    <p>Vico Chocolate Drink Refill 900g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Vico Chocolate Drink Refill 900g&pictures=pictures/beverage(to prepare)/chocolateDrink/m5.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
        </div>

        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/chocolateDrink/m6.jpeg" alt="" width="105px" height="105px">
                    <p>Fernleaf CalciYum Chocolate/Vanilla Drink 900g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Fernleaf CalciYum Chocolate/Vanilla Drink 900g&pictures=pictures/beverage(to prepare)/chocolateDrink/m6.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/chocolateDrink/m7.jpeg" alt="" width="105px" height="105px">
                    <p>Horlicks Malt Drink Refill 1.8KG</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Horlicks Malt Drink Refill 1.8KG&pictures=pictures/beverage(to prepare)/chocolateDrink/m7.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/chocolateDrink/m8.jpeg" alt="" width="105px" height="105px">
                    <p>Horlicks Malt Drink Refill 1KG Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Horlicks Malt Drink Refill 1KG Assort&pictures=pictures/beverage(to prepare)/chocolateDrink/m8.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
        </div>

        <!--coffee-->
        <div id="coffee">
            <h1>Coffee</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/coffee/c1.jpeg" alt="" width="105px" height="105px">
                    <p>Ah Huat White Coffee Mix 15x20-40g Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Ah Huat White Coffee Mix 15x20-40g Assort&pictures=pictures/beverage(to prepare)/coffee/c1.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/coffee/c2.jpeg" alt="" width="105px" height="105px">
                    <p>Alicafe Tongkat Ali And Ginseng Coffee Mix 15-20x30-40g Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Alicafe Tongkat Ali And Ginseng Coffee Mix 15-20x30-40g Assort&pictures=pictures/beverage(to prepare)/coffee/c2.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/coffee/c3.jpeg" alt="" width="105px" height="105px">
                    <p>Old Town White Coffee Mix 15x25-40g Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Old Town White Coffee Mix 15x25-40g Assort&pictures=pictures/beverage(to prepare)/coffee/c3.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/coffee/c4.jpeg" alt="" width="105px" height="105px">
                    <p> Super Essenso Coffee Mix 20x16-25g Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Super Essenso Coffee Mix 20x16-25g Assort&pictures=pictures/beverage(to prepare)/coffee/c4.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/coffee/c5.jpeg" alt="" width="105px" height="105px">
                    <p>Super White Coffee Mix 15x25-40g Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Super White Coffee Mix 15x25-40g Assort&pictures=pictures/beverage(to prepare)/coffee/c5.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
        </div>

        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/coffee/c6.jpeg" alt="" width="105px" height="105px">
                    <p>Aik Cheong Kopi O No Sugar Mix 20x10g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Aik Cheong Kopi O No Sugar Mix 20x10g&pictures=pictures/beverage(to prepare)/coffee/c6.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/coffee/c7.jpeg" alt="" width="105px" height="105px">
                    <p>Nescafe Classic Instant Coffee Refill 100g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Nescafe Classic Instant Coffee Refill 100g&pictures=pictures/beverage(to prepare)/coffee/c7.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
        </div>

        <div id="cordials">
            <h1>Cordials</h1>
        </div>

        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/cordials/c1.jpeg" alt="" width="105px" height="105px">
                    <p>FNN Cordial 2L Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=FNN Cordial 2L Assort&pictures=pictures/beverage(to prepare)/cordials/c1.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/cordials/c2.jpeg" alt="" width="105px" height="105px">
                    <p>Ribena Blackcurrant Cordial 1L Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Ribena Blackcurrant Cordial 1L Assort&pictures=pictures/beverage(to prepare)/cordials/c2.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(to prepare)/cordials/c3.jpeg" alt="" width="105px" height="105px">
                    <p>Ribena Blackcurrant Cordial 2L Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Ribena Blackcurrant Cordial 2L Assort&pictures=pictures/beverage(to prepare)/cordials/c3.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>