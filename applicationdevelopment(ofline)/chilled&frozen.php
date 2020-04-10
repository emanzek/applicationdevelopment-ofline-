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
                        <li><a href="#beverage">Beverage</a></li>
                        <li><a href="#icecream">Ice Cream</a></li>
                        <li><a href="#butter">Butter/Margerine</a></li>
                        <li><a href="#frozen">Frozen Food</a></li>
                    </ul>
                </li>
            </ul>

            <form action="">
                <button>Top Sales</button>
            </form>
        </div>

        <!--Beverages (Ready To Drink)-->
        <div id="beverage">
            <h1>Beverage</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <a href="comparePrice.php"> <img src="pictures/chilledNfrozen/Beverages (Ready To Drink)/b1.jpeg "
                            alt="" width="105px" height="105px"></a>
                    <p> Vitagen Cultured Milk Less Sugar 5x125ml Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Vitagen Cultured Milk Less Sugar 5x125ml Assort&pictures=pictures/chilledNfrozen/Beverages (Ready To Drink)/b1.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/chilledNfrozen/Beverages (Ready To Drink)/b2.jpeg " alt="" width="105px"
                        height="105px">
                    <p>Fernleaf CalciYum Cultured Milk 5x110ml Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Fernleaf CalciYum Cultured Milk 5x110ml Assort&pictures=pictures/chilledNfrozen/Beverages (Ready To Drink)/b2.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/chilledNfrozen/Beverages (Ready To Drink)/b4.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Yakult Ace Cultured Milk 5x80ml Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Yakult Ace Cultured Milk 5x80ml Assort&pictures=pictures/chilledNfrozen/Beverages (Ready To Drink)/b4.jpeg">Buy Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/chilledNfrozen/Beverages (Ready To Drink)/b5.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Fruit Tree Fresh Juice 1.89L Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Fruit Tree Fresh Juice 1.89L Assort&pictures=pictures/chilledNfrozen/Beverages (Ready To Drink)/b5.jpeg">Buy Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/chilledNfrozen/Beverages (Ready To Drink)/b6.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Fruit Tree Fresh Juice 1L Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Fruit Tree Fresh Juice 1L Assort&pictures=pictures/chilledNfrozen/Beverages (Ready To Drink)/b6.jpeg">Buy Now</a></div>
                </div>
            </div>
        </div>



        <!--ice cream-->
        <div id="icecream">
            <h1>Ice Cream</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/chilledNfrozen/ice cream/i1.jpeg" alt="" width="105px" height="105px">
                    <p>Haagen Dazs Ice Cream 473-500ml Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Haagen Dazs Ice Cream 473-500ml Assort&pictures=pictures/chilledNfrozen/ice cream/i1.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/chilledNfrozen/ice cream/i2.jpeg" alt="" width="105px" height="105px">
                    <p> King's Ice Cream 1.2L Assort</p>
             <div class="link"> <a href="comparePrice.php?name=King's Ice Cream 1.2L Assort&pictures=pictures/chilledNfrozen/ice cream/i2.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/chilledNfrozen/ice cream/i3.jpeg" alt="" width="105px" height="105px">
                    <p> King's Potong Ice Cream 6x60-70ml Assort</p>
             <div class="link"> <a href="comparePrice.php?name=King's Potong Ice Cream 6x60-70ml Assort&pictures=pictures/chilledNfrozen/ice cream/i3.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/chilledNfrozen/ice cream/i4.jpeg" alt="" width="105px" height="105px">
                    <p>King's Sundaelicious Ice Cream 800ml Assort</p>
             <div class="link"> <a href="comparePrice.php?name=King's Sundaelicious Ice Cream 800ml Assort&pictures=pictures/chilledNfrozen/ice cream/i4.jpeg">Buy Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/chilledNfrozen/ice cream/i5.jpeg" alt="" width="105px" height="105px">
                    <p>La Cremeria Ice Cream 750ml Assort</p>
             <div class="link"> <a href="comparePrice.php?name=La Cremeria Ice Cream 750ml Assort&pictures=pictures/chilledNfrozen/ice cream/i5.jpeg">Buy Now</a></div>
                </div>
            </div>
        </div>
    </div>

    <!--butter-->
    <div id="butter">
        <h1>Butter/Margerine</h1>
    </div>
    <div class="sub-category-container">
        <div class="sm-container">
            <div>
                <img src="pictures/chilledNfrozen/butter/c1.jpeg" alt="" width="105px" height="105px">
                <p>Planta Margarine 2.5KG</p>
             <div class="link"> <a href="comparePrice.php?name=Planta Margarine 2.5KG&pictures=pictures/chilledNfrozen/butter/c1.jpeg">Buy Now</a></div>
            </div>
        </div>

        <div class="sm-container">
            <div>
                <img src="pictures/chilledNfrozen/butter/c2.jpeg" alt="" width="105px" height="105px">
                <p> Anchor Butter 227g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Anchor Butter 227g Assort&pictures=pictures/chilledNfrozen/butter/c2.jpeg">Buy Now</a></div>
            </div>
        </div>

        <div class="sm-container">
            <div>
                <img src="pictures/chilledNfrozen/butter/c3.jpeg" alt="" width="105px" height="105px">
                <p> Buttercup Luxury Spread 250g</p>
             <div class="link"> <a href="comparePrice.php?name=Buttercup Luxury Spread 250g&pictures=pictures/chilledNfrozen/butter/c3.jpeg">Buy Now</a></div>
            </div>
        </div>

        <div class="sm-container">
            <div>
                <img src="pictures/chilledNfrozen/butter/c4.jpeg" alt="" width="105px" height="105px">
                <p>Buttercup Luxury Spread Tub 1KG</p>
             <div class="link"> <a href="comparePrice.php?name=Buttercup Luxury Spread Tub 1KG&pictures=pictures/chilledNfrozen/butter/c4.jpeg">Buy Now</a></div>
            </div>
        </div>
    </div>


    <div id="frozen">
        <h1>Frozen Food</h1>
    </div>

    <div class="sub-category-container">
        <div class="sm-container">
            <div>
                <img src="pictures/chilledNfrozen/frozen/f1.jpeg" alt="" width="105px" height="105px">
                <p>Kawan Roti Paratha Plain 80g 5s</p>
             <div class="link"> <a href="comparePrice.php?name=Kawan Roti Paratha Plain 80g 5s&pictures=pictures/chilledNfrozen/frozen/f1.jpeg">Buy Now</a></div>
            </div>
        </div>

        <div class="sm-container">
            <div>
                <img src="pictures/chilledNfrozen/frozen/f2.jpeg" alt="" width="105px" height="105px">
                <p>Ramly Chicken/Beef Burger 420g</p>
             <div class="link"> <a href="comparePrice.php?name=Ramly Chicken/Beef Burger 420g&pictures=pictures/chilledNfrozen/frozen/f2.jpeg">Buy Now</a></div>
            </div>
        </div>

        <div class="sm-container">
            <div>
                <img src="pictures/chilledNfrozen/frozen/f3.jpeg" alt="" width="105px" height="105px">
                <p>Kami Filament Stick 500g</p>
             <div class="link"> <a href="comparePrice.php?name=Kami Filament Stick 500g&pictures=pictures/chilledNfrozen/frozen/f3.jpeg">Buy Now</a></div>
            </div>
        </div>

        <div class="sm-container">
            <div>
                <img src="pictures/chilledNfrozen/frozen/f4.jpeg" alt="" width="105px" height="105px">
                <p>LP Filament Stick 250g</p>
             <div class="link"> <a href="comparePrice.php?name=LP Filament Stick 250g&pictures=pictures/chilledNfrozen/frozen/f4.jpeg">Buy Now</a></div>
            </div>
        </div>

        <div class="sm-container">
            <div>
                <img src="pictures/chilledNfrozen/frozen/f5.jpeg" alt="" width="105px" height="105px">
                <p>Ayamas Premium Chicken Frankfurter 300g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Ayamas Premium Chicken Frankfurter 300g Assort&pictures=pictures/chilledNfrozen/frozen/f5.jpeg">Buy Now</a></div>
            </div>
        </div>

        <div class="sm-container">
            <div>
                <img src="pictures/chilledNfrozen/frozen/f6.jpeg" alt="" width="105px" height="105px">
                <p>Ayamas Chicken Frankfurter 340g</p>
             <div class="link"> <a href="comparePrice.php?name=Ayamas Chicken Frankfurter 340g&pictures=pictures/chilledNfrozen/frozen/f6.jpeg">Buy Now</a></div>
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