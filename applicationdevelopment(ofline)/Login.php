<?php

    session_start();

    $conn = mysqli_connect("localhost","root","root");
    mysqli_select_db($conn,"RazafMart");

    if(!$conn)
    {
        die("Error! Cannot connect to server: ". mysql_error() );
    }

    $user = $_POST['user'];
    $pwd = $_POST['pwd'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $user= test_input($_POST["user"]);
        $pwd = test_input($_POST["pwd"]);

        $s = "SELECT * FROM Customer WHERE  Username = '$user' && Password = '$pwd'" ;
        $result = mysqli_query($conn,$s);
        $num =  mysqli_num_rows($result);

        if($num != 1)
        {
            $error = "Invalid username or password";
        }

        else 
        {
            $_SESSION['user'] = $user;
            header("location:homepage.php?Success=loginSuccess");
            exit();
        }
    }

    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="homepage.css">
    <title>Document</title>
</head>
<body>
    <section>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div id="login-con">
                <div>
                    <h1>Login</h1>
                </div>
                <div>
                    <input type="text" name="user" placeholder="Username" id="user" value="<?php echo $user; ?>">
                </div>
                <div>
                    <input type="password" name="pwd" placeholder="Password" id="pwd">
                    <p id="error"><?php  echo $error;?></p>
                </div>
                <div class="forgot">
                    <p><a class="link" href="SignUp.php" style="color:#0060ca">Not have an account yet?</a></p>
                    <p><span>Forgot Password</span> | Need Help ?</p>
                </div>
                <div class="button">
                    <div><a href="Login.php">Cancel</a></div>
                    <div><button name="login">Login</button></div> 
                </div>
            </div>
        </form>
    </section>
</body>
</html>