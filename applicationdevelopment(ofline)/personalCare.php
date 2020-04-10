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
                        <li><a href="#bodywash">Body Wash</a></li>
                        <li><a href="#dedorant">Dedorant</a></li>
                        <li><a href="#facialcare">Facial Care</a></li>
                        <li><a href="#oralcare">Oral Care</a></li>
                    </ul>
                </li>
            </ul>

            <form action="topSales.php">
                <button>Top Sales</button>
            </form>
        </div>

        <!--bodywash-->
        <div id="bodywash">
            <h1>Body Wash</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/Personal Care/bodywash/b1.jpeg " alt="" width="105px" height="105px">
                    <p>Dettol Bar Soap 4x105g Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Dettol Bar Soap 4x105g Assort&pictures=pictures/Personal Care/bodywash/b1.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Personal Care/bodywash/b2.jpeg " alt="" width="105px" height="105px">
                    <p> Lifebuoy Bar Soap 3x115g Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Lifebuoy Bar Soap 3x115g Assort&pictures=pictures/Personal Care/bodywash/b2.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/Personal Care/bodywash/b3.jpeg " alt="" width="105px" height="105px">
                    <p> Lux Bar Soap 3x85g Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Lux Bar Soap 3x85g Assort&pictures=pictures/Personal Care/bodywash/b3.jpeg">Buy
                            Now</a></div>
                </div>
            </div>


        </div>

        <div class="sub-category-container">

            <div class="sm-container">
                <div>
                    <img src="pictures/Personal Care/bodywash/b4.jpeg" alt="" width="105px" height="105px">
                    <p>May Bar Soap 3x85g Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=May Bar Soap 3x85g Assort&pictures=pictures/Personal Care/bodywash/b4.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/Personal Care/bodywash/b5.jpeg" alt="" width="105px" height="105px">
                    <p>Dettol Hand Wash 250ml Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Dettol Hand Wash 250ml Assort&pictures=pictures/Personal Care/bodywash/b5.jpeg">Buy
                            Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/Personal Care/bodywash/b6.jpeg" alt="" width="105px" height="105px">
                    <p>Aiken Shower Cream 900ml Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Aiken Shower Cream 900ml Assort&pictures=pictures/Personal Care/bodywash/b6.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

        </div>



        <!--Dedorant-->
        <div id="dedorant">
            <h1>Dedorant</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/Personal Care/dedorant/d1.jpeg" alt="" width="105px" height="105px">
                    <p>Nivea Men Deodorant Roll On 50ml Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Nivea Men Deodorant Roll On 50ml Assort&pictures=pictures/Personal Care/dedorant/d1.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Personal Care/dedorant/d2.jpeg" alt="" width="105px" height="105px">
                    <p> Nivea Women Deodorant Roll On 50ml Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Nivea Women Deodorant Roll On 50ml Assort&pictures=pictures/Personal Care/dedorant/d2.jpeg">Buy
                            Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/Personal Care/dedorant/d3.jpeg" alt="" width="105px" height="105px">
                    <p> Dove Deodorant Roll On 40ml Assort</p>
                    <div class="link"> <a
                            href="comparePrice.php?name=Dove Deodorant Roll On 40ml Assort&pictures=pictures/Personal Care/dedorant/d3.jpeg">Buy
                            Now</a></div>
                </div>
            </div>


        </div>
    </div>

    <div class="sub-category-container">
        <div class="sm-container">
            <div>
                <img src="pictures/Personal Care/dedorant/d4.jpeg" alt="" width="105px" height="105px">
                <p>Rexona Men Roll On 50ml Assort</p>
                <div class="link"> <a
                        href="comparePrice.php?name=Rexona Men Roll On 50ml Assort&pictures=pictures/Personal Care/dedorant/d4.jpeg">Buy
                        Now</a></div>
            </div>
        </div>
        <div class="sm-container">
            <div>
                <img src="pictures/Personal Care/dedorant/d5.jpeg" alt="" width="105px" height="105px">
                <p>Rexona Men Roll On 50ml Assort</p>
                <div class="link"> <a
                        href="comparePrice.php?name=Rexona Men Roll On 50ml Assort&pictures=pictures/Personal Care/dedorant/d5.jpeg">Buy
                        Now</a></div>
            </div>
        </div>
        <div class="sm-container">
            <div>
                <img src="pictures/Personal Care/dedorant/d6.jpeg" alt="" width="105px" height="105px">
                <p>Nivea Women Deodorant Spray 150ml Assort</p>
                <div class="link"> <a
                        href="comparePrice.php?name=Nivea Women Deodorant Spray 150ml Assort&pictures=pictures/Personal Care/dedorant/d6.jpeg">Buy
                        Now</a></div>
            </div>
        </div>
    </div>

    <!--facial care-->
    <div id="facialcare">
        <h1>Facial Care</h1>
    </div>
    <div class="sub-category-container">
        <div class="sm-container">
            <div>
                <img src="pictures/Personal Care/facial care/c1.jpeg" alt="" width="105px" height="105px">
                <p>Men's Biore Double Scrub Facial Foam 100g Assort</p>
                <div class="link"> <a
                        href="comparePrice.php?name=Men's Biore Double Scrub Facial Foam 100g Assort&pictures=pictures/Personal Care/facial care/c1.jpeg">Buy
                        Now</a></div>
            </div>
        </div>

        <div class="sm-container">
            <div>
                <img src="pictures/Personal Care/facial care/c2.jpeg" alt="" width="105px" height="105px">
                <p> Eversoft Facial Cleanser 170g Assort</p>
                <div class="link"> <a
                        href="comparePrice.php?name=Eversoft Facial Cleanser 170g Assort&pictures=pictures/Personal Care/facial care/c2.jpeg">Buy
                        Now</a></div>
            </div>
        </div>

        <div class="sm-container">
            <div>
                <img src="pictures/Personal Care/facial care/c3.jpeg" alt="" width="105px" height="105px">
                <p>Gatsby Cooling Face Wash 100g Assort</p>
                <div class="link"> <a
                        href="comparePrice.php?name=Gatsby Cooling Face Wash 100g Assort&pictures=pictures/Personal Care/facial care/c3.jpeg">Buy
                        Now</a></div>
            </div>
        </div>

        <div class="sm-container">
            <div>
                <img src="pictures/Personal Care/facial care/c4.jpeg" alt="" width="105px" height="105px">
                <p>Neutrogena Deep Clean Foam 100g</p>
                <div class="link"> <a
                        href="comparePrice.php?name=Neutrogena Deep Clean Foam 100g&pictures=pictures/Personal Care/facial care/c4.jpeg">Buy
                        Now</a></div>
            </div>
        </div>
    </div>


    <!--oral care-->
    <div id="oralcare">
        <h1>Oral Care</h1>
    </div>

    <div class="sub-category-container">
        <div class="sm-container">
            <div>
                <img src="pictures/Personal Care/oral care/f1.jpeg" alt="" width="105px" height="105px">
                <p>Colgate Triple Action Toothpaste 2x200g</p>
                <div class="link"> <a
                        href="comparePrice.php?name=Colgate Triple Action Toothpaste 2x200g&pictures=pictures/Personal Care/oral care/f1.jpeg">Buy
                        Now</a></div>
            </div>
        </div>

        <div class="sm-container">
            <div>
                <img src="pictures/Personal Care/oral care/f2.jpeg" alt="" width="105px" height="105px">
                <p>Darlie All Shiny White Toothpaste 140g Assort</p>
                <div class="link"> <a
                        href="comparePrice.php?name=Darlie All Shiny White Toothpaste 140g Assort&pictures=pictures/Personal Care/oral care/f2.jpeg">Buy
                        Now</a></div>
            </div>
        </div>

        <div class="sm-container">
            <div>
                <img src="pictures/Personal Care/oral care/f3.jpeg" alt="" width="105px" height="105px">
                <p>Sensodyne Toothpaste Base Range 100g Assort</p>
                <div class="link"> <a
                        href="comparePrice.php?name=Sensodyne Toothpaste Base Range 100g Assort&pictures=pictures/Personal Care/oral care/f3.jpeg">Buy
                        Now</a></div>
            </div>
        </div>
    </div>
    </div>

    <div class="sub-category-container">
        <div class="sm-container">
            <div>
                <img src="pictures/Personal Care/oral care/f4.jpeg" alt="" width="105px" height="105px">
                <p>Colgate Advanced White Toothpaste 160g</p>
                <div class="link"> <a
                        href="comparePrice.php?name=Colgate Advanced White Toothpaste 160g&pictures=pictures/Personal Care/oral care/f4.jpeg">Buy
                        Now</a></div>
            </div>
        </div>

        <div class="sm-container">
            <div>
                <img src="pictures/Personal Care/oral care/f5.jpeg" alt="" width="105px" height="105px">
                <p>Colgate Naturals Toothpaste 120g Assort</p>
                <div class="link"> <a
                        href="comparePrice.php?name=Colgate Naturals Toothpaste 120g Assort&pictures=pictures/Personal Care/oral care/f5.jpeg">Buy
                        Now</a></div>
            </div>
        </div>

        <div class="sm-container">
            <div>
                <img src="pictures/Personal Care/oral care/f6.jpeg" alt="" width="105px" height="105px">
                <p>Colgate Plax Mouthrinse 250ml Assort</p>
                <div class="link"> <a
                        href="comparePrice.php?name=Colgate Plax Mouthrinse 250ml Assort&pictures=pictures/Personal Care/oral care/f6.jpeg">Buy
                        Now</a></div>
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