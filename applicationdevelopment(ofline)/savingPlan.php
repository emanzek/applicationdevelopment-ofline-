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

    $username = $_SESSION['user'];

    $sql = "SELECT * FROM SavingPlan WHERE Username='$username' ";
    $query = mysqli_query($conn,$sql) ;       

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="homepage.css">
    <style>
        body {
            background: linear-gradient(147deg, #97cadb, #018abe);
            height: auto;
            background-repeat: no-repeat;
        }

        .plan-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top:-20px;
        }

        table {
            font-family: 'Quattrocento Sans', sans-serif;
            text-align: center;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 5px 6px -6px black;

        }

        table tr td {
            width: 200px;
            height: 50px;
        }

        table tr td:nth-child(3) {
            width: 300px;
            height: 50px;
        }

        table tr:nth-child(1) {
            font-size: 20px;
            background: #0060ca;
            color: white;
        }

        table tr td:nth-child(3) {
            border-right: none;
        }

        table tr td {
            border-bottom: 1px solid lightgrey;
            border-right: 1px solid lightgrey;
        }

        .plan-container input {
            width: 90%;
            height: 4vh;
            padding-left: 10px;
            margin: 10px;
            outline: none;
            border-radius: 3px;
            border: none;
            font-family: 'Quattrocento Sans', sans-serif;
            box-shadow: 0 5px 6px -6px black;
            text-align: center;
            font-size: 14px;
        }

        .plan-container input:focus {
            background: none;
        }

        .year {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .year input {
            width: 80px;
            background: none;
            box-shadow: none;
            color: white;
            font-size: 25px;
            text-align: left;
        }

        h1 {
            text-align: center;
            color: white;
            font-family: 'Quattrocento Sans', sans-serif;
            margin-bottom: 10px;
        }

        .btn button {
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            width: 30vh;
        }

        .btn button:hover::before {
            height: 450%;
        }

        form {
            display: block;
        }

        textarea
        {
            border-radius: 3px;
            padding-left: 10px;
            padding-top: 10px;
            padding-bottom:3px;
            border: 1px solid lightgrey;
            box-shadow: 0 5px 6px -6px black;
            font-family: 'Quattrocento Sans', sans-serif;
            outline-color:#0060ca;
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
                    <div><a href="homepage.php">Home</a></div>
                    <div><a href="aboutUs.php">About Us</a></div>
                    <div><a  id="active" href="savingPlan.php">Saving Planner</a></div>
                    <div><a href="itemCategory.php" >Products</a></div>
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

    <div class="plan-container">

        <form action="savingProcess.php" method="GET">
            <div class="year">
                <h1>Year : <?php echo date("Y") ?></h1>
            </div>
            <table>

                <tr>
                    <td>Month</td>
                    <td>Total Saving (RM)</td>
                    <td>Note</td>
                </tr>

                <?php
                    while ($rows = mysqli_fetch_array($query))
                    {
                ?>
                <tr>
                    <td>January</td>
                    <td><input name="jan" id="1" type="number" value=<?php echo $rows[January]; ?> step="0.01" placeholder="0.00"></td>
                    <td><textarea name="note1" id="" cols="40" rows="2" placeholder="Any notes here..."  ><?php echo $rows[note1];?></textarea></td>
                </tr>
                <tr>
                    <td>February</td>
                    <td><input name="feb" id="2" type="number" value=<?php echo $rows[Februray]; ?> step="0.01" placeholder="0.00"></td>
                    <td><textarea name="note2" id="" cols="40" value=<?php echo $rows[note2]; ?> rows="2" placeholder="Any notes here..."></textarea></td>
                </tr>
                <tr>
                    <td>March</td>
                    <td><input name="mac" id="3" type="number"value=<?php echo $rows[Mac]; ?> step="0.01" placeholder="0.00"></td>
                    <td><textarea name="note3" id="" cols="40" rows="2" placeholder="Any notes here..." value=<?php echo $rows[note3];?>  ></textarea></td>
                </tr>
                <tr>
                    <td>April</td>
                    <td><input name="apr" id="4" type="number" value=<?php echo $rows[April]; ?> step="0.01" placeholder="0.00"></td>
                    <td><textarea name="note4" id="" cols="40" rows="2" placeholder="Any notes here..." value=<?php echo $rows[note4];?>></textarea></td>
                </tr>
                <tr>
                    <td>May</td>
                    <td><input name=may id="5" type="number" value=<?php echo $rows[May]; ?> step="0.01" placeholder="0.00"></td>
                    <td><textarea name="note5" id="" cols="40" rows="2" placeholder="Any notes here..." value=<?php echo $rows[note5];?>></textarea></td>
                </tr>
                <tr>
                    <td>June</td>
                    <td><input name="jun" id="6" type="number" value=<?php echo $rows[Jun]; ?> step="0.01" placeholder="0.00"></td>
                    <td><textarea name="note6" id="" cols="40" rows="2" placeholder="Any notes here..." value=<?php echo $rows[note6];?>></textarea></td>
                </tr>
                <tr>
                    <td>July</td>
                    <td><input name="jul" id="7" type="number" value=<?php echo $rows[July]; ?> step="0.01" placeholder="0.00"></td>
                    <td><textarea name="note7" id="" cols="40" rows="2" placeholder="Any notes here..." value=<?php echo $rows[note7];?>></textarea></td>
                </tr>
                <tr>
                    <td>August</td>
                    <td><input name="aug" id="8" type="number" value=<?php echo $rows[August]; ?> step="0.01" placeholder="0.00"></td>
                    <td><textarea name="note8" id="" cols="40" rows="2" placeholder="Any notes here..." value=<?php echo $rows[note8];?>></textarea></td>
                </tr>
                <tr>
                    <td>September</td>
                    <td><input name="sep" id="9" type="number" value=<?php echo $rows[September]; ?> step="0.01" placeholder="0.00"></td>
                    <td><textarea name="note9" id="" cols="40" rows="2" placeholder="Any notes here..." value=<?php echo $rows[note9];?> ></textarea></td>
                </tr>
                <tr>
                    <td>October</td>
                    <td><input name="oct" id="10" type="number" value=<?php echo $rows[October]; ?> step="0.01" placeholder="0.00"></td>
                    <td><textarea name="note10" id="" cols="40" rows="2" placeholder="Any notes here..." value=<?php echo $rows[note10];?>  ></textarea></td>
                </tr>
                <tr>
                    <td>November</td>
                    <td><input name="nov" id="11" type="number" value=<?php echo $rows[November]; ?> step="0.01" placeholder="0.00"></td>
                    <td><textarea name="note11" id="" cols="40" rows="2" placeholder="Any notes here..." value=<?php echo $rows[note11];?>  ></textarea></td>
                </tr>
                <tr>
                    <td>December</td>
                    <td><input name="dec" id="12" type="number" value=<?php echo $rows[December]; ?> step="0.01" placeholder="0.00"></td>
                    <td><textarea name="note12" id="" cols="40" rows="2" placeholder="Any notes here..." value=<?php echo $rows[note12];?>  ></textarea></td>
                </tr>
                <tr>
                    <td>Total Saving per Year </td>
                    <td style="border-right: none;" colspan="2">RM <?php echo $rows[totalPerYear]; ?></td>
                </tr>

                <tr class="btn">
                    <td style="border-right: none;" colspan="3">
                    <button name="btn">Save</button>
                </tr>

                <?php 
                    if(isset($_GET['Success']))
                    {
                        echo "<script>
                                alert('Save Succesfull');
                            </script>";
                    }
                
                    } 
                    mysql_close($conn);

                ?>
            </table>
        </form>
    </div>
</body>

</html>