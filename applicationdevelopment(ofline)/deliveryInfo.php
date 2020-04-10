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

    $username=$_SESSION['user'];

    $sql = "SELECT * FROM Customer WHERE Username='$username'";
    $query=mysqli_query($conn,$sql);


    $total = $_GET['total'];
    $fee = 3.00;
    $totalAll= number_format((floatval($total) + $fee),2); 

    $sql2 = "UPDATE shoppingCart SET Subtotal=$total, totalPrice=$totalAll WHERE Username='$username'";
    mysqli_query($conn,$sql2);

    $sql3 = "SELECT * FROM shoppingCart WHERE Username='$username'";
    $query2=mysqli_query($conn,$sql3);

    $data = mysqli_fetch_array($query2);
    $subtotal=$data[7];
    $totalAll=$data[8];
    
    $fnameErr = $addErr =$addErr2 = $phoneErr = $delDateErr = $delTimeErr = " ";
   
    $fname = $_GET['fname'];
    $phone = $_GET['phone'];
    $add=$_GET['add'];
    $add2=$_GET['add2'];
    $delTime = $_GET['delTime'];
    $delDate = $_GET['delDate'];
    $note = $_GET['note'];
    

    if(isset($_GET['proceed']))
    {
  
        if (empty($_GET["add"]) || (empty($_GET["add2"])) )
        {
            $addErr = "Address cannot be empty";
        } 

        if(empty($_GET["delTime"]))
        {
            $delTimeErr="Delivery time cannot be empty";
        }

        if(empty($_GET["delDate"]))
        {
            $delDateErr="Delivery date cannot be empty";
        }
        
        else
        {
            $sql4 = "INSERT INTO deliveryInformation(Username,FullName,PhoneNumber,Address,Address2,deliveryTime,deliveryDate,note,Total) 
            VALUES('$username','$fname','$phone','$add','$add2','$delTime','$delDate','$note','$totalAll') ";
        
            if(mysqli_query($conn,$sql4))
            {
                header("location:receipt.php?");
            }
        
            else
            {
                echo mysqli_error($conn);
            }
        } 
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
    <link rel="stylesheet" href="deliveryInfo.css">
    <style>
    </style>
</head>

<body>

    <section class="section2">
        <form action="deliveryInfo.php" method="GET">

            <div id="signup-con">
                <div>
                    <h1>Delivery Information</h1>
                </div>
                <?php 
                    while($rows=mysqli_fetch_array($query))
                    {
                ?>
                <div>
                    <div>
                        <p>Full Name</p>
                    </div>
                    <input id="fname" name="fname" value=<?php echo $rows[Firstname];echo '&nbsp;'.$rows[Lastname] ?>
                        type="text" placeholder="Enter your full name here">
                    <p id="error"><?php echo $fnameErr; ?></p>
                </div>

                <div>
                    <div>
                        <p>Phone Number</p>
                    </div>
                    <input id="phone" name="phone" type="text" value="<?php echo $rows[PhoneNumber];?>"
                        placeholder="Enter your phone number here" onfocusout="validatePhone()">
                    <p id="error"><?php echo $phoneErr; ?></p>
                </div>
                <?php 
                    }
                ?>
                <div>
                    <div>
                        <p>Full Address</p>
                    </div>
                    <input id="add" name="add" type="address" value="" placeholder="Street number, building"
                        onfocusout="validatePwd()">
                    <input id="add2" name="add2" type="address" value="" placeholder="Postocde, City, Country "
                        onfocusout="validatePwd()">
                    <p id="error"><?php echo $addErr;echo $addErr2 ?></p>
                </div>

                <div>
                    <p>Delivery Time</p>
                    <input name='delTime' type="time">
                    <p id="error"><?php echo $delTimeErr; ?></p>
                </div>

                <div>
                    <p>Delivery Date</p>
                    <input name='delDate' id="date" value="" max="2019-12-31" type="date">
                    <p id="error"><?php echo $delDateErr; ?></p>
                </div>

                <div class="note">
                    <p>Note</p>
                    <textarea name="note" id="" placeholder="eg: Be faster"></textarea>
                </div>
                <div class="subtotal-container">
                    <div class="subtotal">
                        <table>
                            <tr>
                                <td>
                                    <p>Subtotal</p>
                                </td>
                                <td>
                                    <p style="color: #0060ca">RM <span><?php echo $subtotal;?></span></p>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Delivery Fee</p>
                                </td>
                                <td>
                                    <p style="color: #0060ca">RM <span>3.00</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Total(Incl GST)</p>
                                </td>
                                <td>
                                    <p style="color: #0060ca">RM <span><?php echo $totalAll ?></span></p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div style="margin-top: 20px;">
                    <p>Select Payment Method</p>
                </div>
                <div class="payment-method">
                    <table>
                        <tr>
                            <td><input type="radio" name="cod" checked></td>
                            <td>
                                <p>Cash On Delivery</p>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="button">
                    <div><button name="proceed">Proceed</button></div>
                </div>
            </div>

        </form>
    </section>

    <script>
        let today = new Date(),
            day = today.getDate(),
            month = today.getMonth() + 1, //January is 0
            year = today.getFullYear();
        if (day < 10) {
            day = '0' + day
        }
        if (month < 10) {
            month = '0' + month
        }
        today = year + '-' + month + '-' + day;

        document.getElementById("date").setAttribute("min", today);
    </script>
</body>

</html>