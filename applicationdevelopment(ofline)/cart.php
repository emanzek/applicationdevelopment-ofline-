<?php 
    session_start();
    if(!isset($_SESSION['user']))
    {
        header("location:Login.php");
    }

    $username = $_SESSION['user'];

    $conn=mysqli_connect("localhost", "root", "root");
        mysqli_select_db($conn, "RazafMart");
    if( !$conn) {
        die("Error! Cannot connect to server: ". mysql_error());
    }

    $sql = "SELECT * FROM shoppingCart WHERE Username='$username'";
    $query=mysqli_query($conn,$sql);

    $total = $_REQUEST['total'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="cart.css">
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
                    <div><a href="cart.php"><img src="pictures/Logo/bag.png" alt=""></a></div>
                </div>
            </nav>
        </section>
    </div>
    <?php 
        while($rows=mysqli_fetch_array($query))
        {
            $id = $rows[Id];
            $price = $rows[Price];
            $url = "delete.php?id=$id";
     ?>
    <div class="row item-container">
        <div class="item-image">
            <img src="<?php echo $rows[itemImage]?>" alt="">
        </div>
        <div class="item-name">
            <div>
                <p><?php echo $rows[ItemName] ?></p>
            </div>
            <div><img src="<?php echo $rows[retailerImage] ?>" alt=""></div>
        </div>

        <div class="col price-container">
            <p class="">RM &nbsp;<span class="price"><?php echo $rows[Price] ?></span></p>
        </div>

        <div class="col">
            <div action="" class="quantity-container" method="POST">
                <span class="minus">-</span>
                <input name="qty" type="number" class="qty" value="1" readonly>
                <span class="plus">+</span>
            </div>
        </div>

        <div class="col total-container">
            <p>RM &nbsp; <span class="sum">0</span></p>
        </div>

        <div class="delete-container">
            <a href=<?php echo $url ?>>Delete</a>
        </div>
    </div>
    <?php } ?>
    <div class="row">
        <form method="GET" action=<?php echo 'deliveryInfo.php?total=$total'?> class="col total-all-item" >
            <p style="font-size:30px;">Subtotal &nbsp;</p>
            <p style=""> RM <input type="text" name="total" value="0.00" id="total" readonly></p>
            <button>Proceed</button>
        </form>
    </div>

    <script>
        function getTotal() {
            var total = 0;
            $('.sum').each(function () {
                total = total + parseFloat(this.innerHTML);
            });
            $('#total').val(total.toFixed(2));
        }
        getTotal();

        $(".qty").each(function () {
            var parent = $(this).parents('.row'),
                price = $('.price', parent),
                sum = $('.sum', parent),
                value = parseInt(this.value) * parseFloat(price.get(0).innerHTML || 0);
            sum.text(value.toFixed(2));
            getTotal();
        });

        $("span.minus").on("click", function () {
            var $qty = $(this).closest('.col').find('.qty'),
                currentVal = parseInt($qty.val());
            if (!isNaN(currentVal) && currentVal > 1) {
                $qty.val(currentVal - 1);
            }
            $('.col .qty').is(function () {
                var parent = $(this).parents('.row'),
                    price = $('.price', parent),
                    sum = $('.sum', parent),
                    value = parseInt(this.value) * parseFloat(price.get(0).innerHTML || 0);
                sum.text(value.toFixed(2));
                getTotal();
                
            });
            
        });

        $("span.plus").on("click", function () {
            var $qty = $(this).closest('.col').find('.qty'),
                currentVal = parseInt($qty.val());
            if (!isNaN(currentVal)) {
                $qty.val(currentVal + 1);
            }
            $('.col .qty').is(function () {
                var parent = $(this).parents('.row'),
                    price = $('.price', parent),
                    sum = $('.sum', parent),
                    value = parseInt(this.value) * parseFloat(price.get(0).innerHTML || 0);
                sum.text(value.toFixed(2));
                getTotal();
                
            });
        });
        
    </script>
</body>
</html>
