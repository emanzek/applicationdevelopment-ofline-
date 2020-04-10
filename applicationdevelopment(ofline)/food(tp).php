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
                        <li><a href="#Canned Food">Canned Food</a></li>
                        <li><a href="#cooking oil">Cooking Oil</a></li>
                        <li><a href="#Cooking Needs">Cooking Needs</a></li>
                        <li><a href="#instant noodles">Instant Noodles</a></li>
                    </ul>
                </li>
            </ul>

            <form action="topSales.php">
                <button>Top Sales</button>
            </form>
        </div>

        <!-- Canned Food-->
        <div id="Canned Food">
            <h1 id="Canned Food">Canned Food</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Canned Food/laici.jpeg" alt="" width="105px" height="105px">
                    <p>Alishan Lychee 565g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Alishan Lychee 565g&pictures=pictures/Food(To Prepare) /Canned Food/laici.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Canned Food/laici2.jpeg" alt="" width="105px" height="105px">
                    <p>AAA Lychee 565g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=AAA Lychee 565g&pictures=pictures/Food(To Prepare) /Canned Food/laici2.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Canned Food/longan.jpeg" alt="" width="105px" height="105px">
                    <p>AAA Longan 565g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=AAA Longan 565g&pictures=pictures/Food(To Prepare) /Canned Food/longan.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Canned Food/longan2.jpeg" alt="" width="105px" height="105px">
                    <p>Hosen Longan 565g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Hosen Longan 565g&pictures=pictures/Food(To Prepare) /Canned Food/longan2.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Canned Food/laici3.jpeg" alt="" width="105px" height="105px">
                    <p>Hosen Lychee 565g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Hosen Lychee 565g&pictures=pictures/Food(To Prepare) /Canned Food/laici3.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
        </div>

        <div class="sub-category-container">

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Canned Food/mushroom.jpeg" alt="" width="105px" height="105px">
                    <p>AAA Canned Button Mushroom 425g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=AAA Canned Button Mushroom 425g&pictures=pictures/Food(To Prepare) /Canned Food/mushroom.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Canned Food/mushroom2.jpeg" alt="" width="105px"
                        height="105px">
                    <p>Alishan Canned Button Mushroom 425g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Alishan Canned Button Mushroom 425g&pictures=pictures/Food(To Prepare) /Canned Food/mushroom2.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Canned Food/sardin.jpeg" alt="" width="105px" height="105px">
                    <p>Adabi Canned Sardine 425g Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Adabi Canned Sardine 425g Assort&pictures=pictures/Food(To Prepare) /Canned Food/sardin.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Canned Food/sardin2.jpeg" alt="" width="105px" height="105px">
                    <p>AAA Canned Button Mushroom 425g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=AAA Canned Button Mushroom 425g&pictures=pictures/Food(To Prepare) /Canned Food/sardin2.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
        </div>

        <!--cooking oil-->
        <div id="cooking oil">
            <h1>Cooking Oil</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /cooking oil/oil1.jpeg" alt="" width="105px" height="105px">
                    <p>Cooking Oil</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Cooking Oil&pictures=pictures/Food(To Prepare) /cooking oil/oil1.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /cooking oil/oil2.jpeg" alt="" width="105px" height="105px">
                    <p>Alif Blended Vegetable & Sunflower Oil 3KG</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Alif Blended Vegetable and Sunflower Oil 3KG&pictures=pictures/Food(To Prepare) /cooking oil/oil2.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /cooking oil/oil3.jpeg" alt="" width="105px" height="105px">
                    <p>Daisy Corn Oil 2KG</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Daisy Corn Oil 2KG&pictures=pictures/Food(To Prepare) /cooking oil/oil3.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /cooking oil/oil4.jpeg" alt="" width="105px" height="105px">
                    <p>Daisy Corn Oil 3KG</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Daisy Corn Oil 3KG&pictures=pictures/Food(To Prepare) /cooking oil/oil4.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /cooking oil/oil5.jpeg" alt="" width="105px" height="105px">
                    <p>Knife Cooking Oil 5KG</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Knife Cooking Oil 5KG&pictures=pictures/Food(To Prepare) /cooking oil/oil5.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
        </div>


        <!--Cooking Needss-->
        <div id="Cooking Needs">
            <h1>Cooking Needs</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Cooking Needs/c1.jpeg" alt="" width="105px" height="105px">
                    <p>Ayam Brand Coconut Milk 200ml</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Ayam Brand Coconut Milk 200ml&pictures=pictures/Food(To Prepare) /Cooking Needs/c1.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Cooking Needs/c2.jpeg" alt="" width="105px" height="105px">
                    <p>Harmuni Coconut Cream 1L</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Harmuni Coconut Cream 1L&pictures=pictures/Food(To Prepare) /Cooking Needs/c2.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Cooking Needs/c3.jpeg" alt="" width="105px" height="105px">
                    <p>Harmuni Coconut Cream 200ml</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Harmuni Coconut Cream 200ml&pictures=pictures/Food(To Prepare) /Cooking Needs/c3.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Cooking Needs/c4.jpeg" alt="" width="105px" height="105px">
                    <p> Kara Coconut Cream 200ml</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Kara Coconut Cream 200ml&pictures=pictures/Food(To Prepare) /Cooking Needs/c4.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Cooking Needs/c5.jpeg" alt="" width="105px" height="105px">
                    <p>Maggi Cukup Rasa Seasoning 100g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Maggi Cukup Rasa Seasoning 100g&pictures=pictures/Food(To Prepare) /Cooking Needs/c5.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
        </div>

        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Cooking Needs/c6.jpeg" alt="" width="105px" height="105px">
                    <p> Knorr Pasti Sedap Seasoning 100g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Knorr Pasti Sedap Seasoning 100g&pictures=pictures/Food(To Prepare) /Cooking Needs/c6.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Cooking Needs/c7.jpeg" alt="" width="105px" height="105px">
                    <p>Adabi Curry Powder Meat/Fish 250g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Adabi Curry Powder Meat/Fish 250g&pictures=pictures/Food(To Prepare) /Cooking Needs/c7.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /Cooking Needs/c8.jpeg" alt="" width="105px" height="105px">
                    <p>Knorr Stock Cube 120g Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Knorr Stock Cube 120g Assort&pictures=pictures/Food(To Prepare) /Cooking Needs/c8.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
        </div>
        <!--Instant Noodles-->
        <div id="instant noodles">
            <h1>Instant Noodles</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /instant noodles/m1.jpeg" alt="" width="105px" height="105px">
                    <p>Maggi 2 Minutes Noodle Tomyam/Assam Laksa 5x78-83g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Maggi 2 Minutes Noodle Tomyam/Assam Laksa 5x78-83g&pictures=pictures/Food(To Prepare) /instant noodles/m1.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /instant noodles/m2.jpeg" alt="" width="105px" height="105px">
                    <p>Nong Shim Shin Ramyun Soup Noodle 5x120g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Nong Shim Shin Ramyun Soup Noodle 5x120g&pictures=pictures/Food(To Prepare) /instant noodles/m2.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /instant noodles/m3.jpeg" alt="" width="105px" height="105px">
                    <p>Cintan Instant Soup Noodle Asam Laksa / Veg / Veg Curry / TomYam 5x75-76g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Cintan Instant Soup Noodle Asam Laksa / Veg / Veg Curry / TomYam 5x75-76g&pictures=pictures/Food(To Prepare) /instant noodles/m3.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /instant noodles/m4.jpeg" alt="" width="105px" height="105px">
                    <p>Cintan Instant Soup Noodle Chicken/Curry/Seafood Ori 5x75-76g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Cintan Instant Soup Noodle Chicken/Curry/Seafood Ori 5x75-76g&pictures=pictures/Food(To Prepare) /instant noodles/m4.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Food(To Prepare) /instant noodles/m5.jpeg" alt="" width="105px" height="105px">
                    <p>Maggi 2 Minutes Noodle Curry/Chicken 5x77-79g</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Maggi 2 Minutes Noodle Curry/Chicken 5x77-79g&pictures=pictures/Food(To Prepare) /instant noodles/m5.jpeg">Buy
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