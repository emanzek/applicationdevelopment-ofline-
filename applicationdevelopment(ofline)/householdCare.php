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
                        <li><a href="#airfresh">Air Freshener</a></li>
                        <li><a href="#householdcleaner">Household Cleaner</a></li>
                        <li><a href="#insecticides">Insecticides</a></li>
                    </ul>
                </li>
            </ul>

            <form action="topSales.php">
                <button>Top Sales</button>
            </form>
        </div>

        <!--Air Freshener-->
        <div id="airfresh">
            <h1>Air Freshener</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/household care/air freshener/a1.jpeg " alt="" width="105px" height="105px">
                    <p> Air Wick Freshmatic Refill 3x250ml Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Air Wick Freshmatic Refill 3x250ml Assort&pictures=pictures/household care/air freshener/a1.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/household care/air freshener/a2.jpeg " alt="" width="105px" height="105px">
                    <p>Air Wick Freshmatic Starter + 1x250ml Refill Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Air Wick Freshmatic Starter + 1x250ml Refill Assort&pictures=pictures/household care/air freshener/a2.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/household care/air freshener/a3.jpeg " alt="" width="105px" height="105px">
                    <p>Ambi Pur Gel Fresh 180g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Ambi Pur Gel Fresh 180g Assort&pictures=pictures/household care/air freshener/a3.jpeg">Buy Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/household care/air freshener/a4.jpeg" alt="" width="105px" height="105px">
                    <p> Glade Scented Gel 180g Assort</p>
             <div class="link"> <a href="comparePrice.php?name= Glade Scented Gel 180g Assort&pictures=pictures/household care/air freshener/a4.jpeg">Buy Now</a></div>
                </div>
            </div>

        </div>



        <!--Household Cleaner-->
        <div id="householdcleaner">
            <h1>Household Cleaner</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/household care/household cleaner/c1.jpeg" alt="" width="105px" height="105px">
                    <p>Glo Regular Liq Dishwash 1.35L Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Glo Regular Liq Dishwash 1.35L Assort&pictures=pictures/household care/household cleaner/c1.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/household care/household cleaner/c2.jpeg" alt="" width="105px" height="105px">
                    <p>Goodmaid Liq Dishwash 900ml Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Goodmaid Liq Dishwash 900ml Assort&pictures=pictures/household care/household cleaner/c2.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/household care/household cleaner/c3.jpeg" alt="" width="105px" height="105px">
                    <p>Zip Liq Dishwash 900ml Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Zip Liq Dishwash 900ml Assort&pictures=pictures/household care/household cleaner/c3.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/household care/household cleaner/c4.jpeg" alt="" width="105px" height="105px">
                    <p>Axion Dishwash Paste 350g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Axion Dishwash Paste 350g Assort&pictures=pictures/household care/household cleaner/c4.jpeg">Buy Now</a></div>
                </div>
            </div>
            <div class="sm-container">
                <div>
                    <img src="pictures/household care/household cleaner/c5.jpeg" alt="" width="105px" height="105px">
                    <p>Axion Dishwash Paste 750g Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Axion Dishwash Paste 750g Assort&pictures=pictures/household care/household cleaner/c5.jpeg">Buy Now</a></div>
                </div>
            </div>
        </div>

        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/household care/household cleaner/c6.jpeg" alt="" width="105px" height="105px">
                    <p>Mr Muscle Floor Cleaner 3L Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Mr Muscle Floor Cleaner 3L Assort&pictures=pictures/household care/household cleaner/c6.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/household care/household cleaner/c7.jpeg" alt="" width="105px" height="105px">
                    <p>Mr Muscle Toilet Bowl Cleaner 500ml Assort</p>
             <div class="link"> <a href="comparePrice.php?name=Mr Muscle Toilet Bowl Cleaner 500ml Assort&pictures=pictures/household care/household cleaner/c7.jpeg">Buy Now</a></div>
                </div>
            </div>
        </div>

        <!--insecticides-->
        <div id="insecticides">
            <h1>Insecticides</h1>
        </div>
        <div class="sub-category-container">
            <div class="sm-container">
                <div>
                    <img src="pictures/household care/insecticides/i1.jpeg" alt="" width="105px" height="105px">
                    <p>Ridsect Insecticide Spray 2x800ml</p>
             <div class="link"> <a href="comparePrice.php?name=Ridsect Insecticide Spray 2x800ml&pictures=pictures/household care/insecticides/i1.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/household care/insecticides/i2.jpeg" alt="" width="105px" height="105px">
                    <p>Fumakilla H2O Water Based Insecticide Spray 2x585ml</p>
             <div class="link"> <a href="comparePrice.php?name=Fumakilla H2O Water Based Insecticide Spray 2x585ml&pictures=pictures/household care/insecticides/i2.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/household care/insecticides/i3.jpeg" alt="" width="105px" height="105px">
                    <p>Fumakilla Insecticide Spray 2x600ml</p>
             <div class="link"> <a href="comparePrice.php?name=Fumakilla Insecticide Spray 2x600ml&pictures=pictures/household care/insecticides/i3.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/household care/insecticides/i4.jpeg" alt="" width="105px" height="105px">
                    <p> Fumakilla Vape Aerosol 2x600ml</p>
             <div class="link"> <a href="comparePrice.php?name=Fumakilla Vape Aerosol 2x600ml&pictures=pictures/household care/insecticides/i3.jpeg">Buy Now</a></div>
                </div>
            </div>

            <div class="sm-container">
                <div>
                    <img src="pictures/household care/insecticides/i5.jpeg" alt="" width="105px" height="105px">
                    <p>Ridsect Insecticide Spray 600ml</p>
             <div class="link"> <a href="comparePrice.php?name=Ridsect Insecticide Spray 600ml&pictures=pictures/household care/insecticides/i5.jpeg">Buy Now</a></div>
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