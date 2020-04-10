<?php
  session_start();
  if(!isset($_SESSION['user']))
  {
      header("location:Login.php");
  }
    $conn=mysqli_connect("localhost", "root", "root");
    mysqli_select_db($conn, "RazafMart");
    if( !$conn) {
    die("Error! Cannot connect to server: ". mysql_error());
    }

    if(isset($_POST['search']))
    {
        $valueToSearch = $_POST['valueToSearch'];
        $query = "SELECT DISTINCT ItemName,pictures FROM Item WHERE CONCAT(ItemName) LIKE '%".$valueToSearch."%'";
        $result = filterTable($query);

    }

    function filterTable($query)
    {
        $conn=mysqli_connect("localhost", "root", "root");
        mysqli_select_db($conn, "RazafMart");
        $result = mysqli_query($conn, $query);
        return $result;
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
        body {
            height: auto;
            background-repeat: no-repeat;
            background:whitesmoke;
         }

        .item-container {
            width: 650px;
            height: 150px;
            background: white;
            border-radius: 3px;
            box-shadow: 0 8px 8px -8px black;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            left: 50%;
            transform: translate(-50%);
            margin-top: 40px;
        }

        .item-container img {
            width: 200px;
            height: 140px;
        }

        form {
            display: flex;
            align-items: center;
        }

        .image
        {
            height:100px;
            width:250px;
            display:flex;
            justify-content:center;
            align-items:center;
            border-right:2px solid lightgrey;
        }

        .itemname
        {
            display:flex;
            justify-content:center;
            align-items:center;
            width:200px;
            height:100px;
            padding-right:10px;
            padding-left:10px;
            margin-left:10px;
            border-right:2px solid lightgrey;
        }

        .link
        {
            width:150px;
            text-align:center;
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
                    <div><a id="active">Home</a></div>
                    <div><a>About Us</a></div>
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
                    <div><a href="cart.php"><img src="pictures/logo/bag.png" alt=""></a></div>
                </div>
            </nav>
        </section>
    </div>
    <div class="container">
        <form action="test.php" method=POST>
            <input type="text" name="valueToSearch" placeholder="Search anything here...">
            <button name="search">Search</button>
        </form>

        <?php 
            while($row=mysqli_fetch_array($result))
            {
                $ItemName=$row[ItemName];
                $pictures=$row[pictures];
                $url="comparePrice.php?name=$ItemName&pictures=$pictures";            
        ?>
        <div class="item-container">
            <div class="image"><img src="<?php echo $pictures ?>" alt=""></div>
            <div class="itemname"><p><?php echo $row[ItemName] ?></p></div>
            <div class="link"><a href="<?php echo $url ?>">Buy Now</a></div>
        </div>

        <?php  
            }
        ?>
    </div>
</body>

</html>