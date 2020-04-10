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
                        <li><a href="#asiandrink">Asian Drinks</a></li>
                        <li><a href="#carbonateddrink">Carbonated Drinks</a></li>
                        <li><a href="#milk">Milk</a></li>
                        <li><a href="#water">Water</a></li>
                    </ul>
                </li>
            </ul>

            <form action="topSales.php">
                <button>Top Sales</button>
            </form>
        </div>

        <!--Asian Drink-->
        <div id="asiandrink">
            <h1>Asian Drinks</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/asian drink/d1.jpeg" alt="" width="105px"
                        height="105px">
                    <p> HomeSoy Soya Milk 6x250ml Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=HomeSoy Soya Milk 6x250ml Assort&pictures=pictures/beverage(ready to drink)/asian drink/d1.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/asian drink/d2.jpeg" alt="" width="105px"
                        height="105px">
                    <p> Drinho Asian Drink 1L Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Drinho Asian Drink 1L Assort&pictures=pictures/beverage(ready to drink)/asian drink/d2.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/asian drink/d3.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Drinho Asian Drink 24x250ml Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Drinho Asian Drink 24x250ml Assort&pictures=pictures/beverage(ready to drink)/asian drink/d3.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/asian drink/d4.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Drinho Asian Drink 6x250ml Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Drinho Asian Drink 6x250ml Assort&pictures=pictures/beverage(ready to drink)/asian drink/d4.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/asian drink/d5.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Heaven and Earth Tea Drink 1.5L Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Heaven and Earth Tea Drink 1.5L Assort&pictures=pictures/beverage(ready to drink)/asian drink/d5.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
        </div>

        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/asian drink/d6.jpeg" alt="" width="105px"
                        height="105px">
                    <p>HomeSoy Soya Milk 1L Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=HomeSoy Soya Milk 1L Assort&pictures=pictures/beverage(ready to drink)/asian drink/d6.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/asian drink/d7.jpeg" alt="" width="105px"
                        height="105px">
                    <p> Jia Duo Bao Drink 6x310ml</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Jia Duo Bao Drink 6x310ml&pictures=pictures/beverage(ready to drink)/asian drink/d7.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/asian drink/d8.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Justea Tea Drink 6x250ml Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Justea Tea Drink 6x250ml Assort&pictures=pictures/beverage(ready to drink)/asian drink/d8.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/asian drink/d9.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Lipton Tea Drink 1.5L Assorts</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Lipton Tea Drink 1.5L Assorts&pictures=pictures/beverage(ready to drink)/asian drink/d9.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/asian drink/d10.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Marigold Asian Drink 1L Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Marigold Asian Drink 1L Assort&pictures=pictures/beverage(ready to drink)/asian drink/d10.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
        </div>

        <!--Carbonated Drinks-->
        <div id="carbonateddrink">
            <h1>Carbonated Drink</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/carbonated drinks/cd1.jpeg" alt="" width="105px"
                        height="105px">
                    <p>ANW Sarsaparilla 4x330ml Can</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=ANW Sarsaparilla 4x330ml Can&pictures=pictures/beverage(ready to drink)/carbonated drinks/cd1.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/carbonated drinks/cd2.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Coca-Cola 4x320ml Can Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Coca-Cola 4x320ml Can Assort&pictures=pictures/beverage(ready to drink)/carbonated drinks/cd2.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/carbonated drinks/cd3.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Sprite 4x330ml Can Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Sprite 4x330ml Can Assort&pictures=pictures/beverage(ready to drink)/carbonated drinks/cd3.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/carbonated drinks/cd4.jpeg" alt="" width="105px"
                        height="105px">
                    <p>100Plus Active Replenish 1L</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=100Plus Active Replenish 1L&pictures=pictures/beverage(ready to drink)/carbonated drinks/cd4.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/carbonated drinks/cd5.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Fanta 12x320ml Can Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Fanta 12x320ml Can Assort&pictures=pictures/beverage(ready to drink)/carbonated drinks/cd5.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
        </div>

        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/carbonated drinks/cd6.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Coca-Cola 12x320ml Can Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Coca-Cola 12x320ml Can Assort&pictures=pictures/beverage(ready to drink)/carbonated drinks/cd6.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/carbonated drinks/cd7.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Coca-Cola 24x330ml Can Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Coca-Cola 24x330ml Can Assort&pictures=pictures/beverage(ready to drink)/carbonated drinks/cd7.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
        </div>

        <!--milk-->
        <div id="milk">
            <h1>Milk</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/milk/m1.jpeg" alt="" width="105px" height="105px">
                    <p>Dutch Lady Milky UHT Marvel/Frozen 4x125ml Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Dutch Lady Milky UHT Marvel/Frozen 4x125ml Assort&pictures=pictures/beverage(ready to drink)/milk/m1.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/milk/m2.jpeg" alt="" width="105px" height="105px">
                    <p>Marigold UHT Milk 1L Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Marigold UHT Milk 1L Assort&pictures=pictures/beverage(ready to drink)/milk/m2.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/milk/m3.jpeg" alt="" width="105px" height="105px">
                    <p>Milo UHT Milk 1L</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Milo UHT Milk 1L&pictures=pictures/beverage(ready to drink)/milk/m3.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/milk/m4.jpeg" alt="" width="105px" height="105px">
                    <p> Anlene UHT Milk 1L Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name= Anlene UHT Milk 1L Assort&pictures=pictures/beverage(ready to drink)/milk/m4.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/milk/m5.jpeg" alt="" width="105px" height="105px">
                    <p>Dutch Lady UHT Milk 1L Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Dutch Lady UHT Milk 1L Assort&pictures=pictures/beverage(ready to drink)/milk/m5.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
        </div>

        <!--water-->
        <div id="water">
            <h1>Water</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/water/w1.jpeg" alt="" width="105px" height="105px">
                    <p>Spritzer Mineral Water 1.5L</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Spritzer Mineral Water 1.5L&pictures=pictures/beverage(ready to drink)/water/w1.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/water/w2.jpeg" alt="" width="105px" height="105px">
                    <p> Spritzer Mineral Water 6L</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Spritzer Mineral Water 6L&pictures=pictures/beverage(ready to drink)/water/w2.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/beverage(ready to drink)/water/w3.jpeg" alt="" width="105px" height="105px">
                    <p> Spritzer Mineral Water 9.5L</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Spritzer Mineral Water 9.5L&pictures=pictures/beverage(ready to drink)/water/w3.jpeg">Buy
                            Now</a></div>
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