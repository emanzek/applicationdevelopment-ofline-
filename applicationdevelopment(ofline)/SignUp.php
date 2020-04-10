
<?php

$conn = mysqli_connect("localhost","root","root");
mysqli_select_db($conn,"RazafMart");

if(!$conn)
{
    die("Error! Cannot connect to server: ". mysql_error() );
}


$fnameErr = $lnameErr = $userErr = $phoneErr = $pwdErr = $pwd2Err = "";
$fname = $lname = $user = $phone = $pwd = $pwd2 = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($_POST["fname"])) 
    {
        $fnameErr = "Firstname cannot be empty";
    } 
    else 
    {
        $fname = test_input($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$fname)) 
        {
            $fnameErr = "Firstname can only contains alphabets"; 
        }
        else if(strlen($fname)<3)
        {
            $fnameErr = "Firstname must contain at least more than 3 characters";
        }
   
    }
    
    if (empty($_POST["lname"])) 
    {
        $lnameErr = "Lastname cannot be empty";
    } 
    else 
    {
        $lname = test_input($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$lname)) 
        {
            $lnameErr = "Lastname can only contains alphabets"; 
        }
        else if(strlen($lname)<3)
        {
            $lnameErr = "Lastname must contain at least more than 3 characters"; 
        }
    }
    
    if (empty($_POST["user"])) 
    {
        $userErr = "Username cannot be empty";
    }
    else 
    {
    
        $user= test_input($_POST["user"]);
        $s = "SELECT * FROM Customer WHERE  Username = '$user'";
        $result = mysqli_query($conn,$s);

        $num =  mysqli_num_rows($result);
        if(strlen($user)<3)
        {
            $userErr = "Username must contain at least more than 3 characters";
        }
        else if($num == 1)
        {
           $userErr = "Username already taken";
        }
    
    }

    if (empty($_POST["phone"])) 
    {
        $phoneErr = "Phone Number cannot be empty";
    } 
    else 
    {
        $phone = test_input($_POST["phone"]);
        if(!preg_match("/^[0-9]*$/",$phone))
        {
            $phoneErr = "Phone Number not in correct format";
        }
        else if(strlen($phone)<=9 || strlen($phone)>=12)
        {
            $phoneErr = "Phone Number not in correct format";
        }
    }

    if (empty($_POST["pwd"])) 
    {
        $pwdErr = "Password cannot be empty";
    } 
    else 
    {
        $pwd = test_input($_POST["pwd"]);
        if(!preg_match("/^(?=.*[^a-zA-Z])(?=.*[a-z])(?=.*[A-Z])\S{8,}$/",$pwd))
        {
            $pwdErr = "Password must contain at least 1 uppercase, lowercase letter and 1 digits";
        }
        else if(strlen($pwd)<8)
        {
            $pwdErr = "Password must contain at least 8 characters";
        }
    }

    
    if (empty($_POST["pwd2"])) 
    {
        $pwd2Err = "Confirm password cannot be empty";
    } 
    else 
    {
        $pwd2 = test_input($_POST["pwd2"]);
        if($pwd2 != $pwd)
        {
            $pwd2Err = "Password does not match";
        }
   
    }

    if(empty($nameErr) && empty($lnameErr) && empty($userErr) && empty($phoneErr) && empty($pwdErr) && empty($pwd2Err))
    {
        $reg = "INSERT INTO Customer(Firstname, Lastname, Username, PhoneNumber, Password) VALUES('$fname','$lname','$user','$phone','$pwd')"; 
        $sql="INSERT INTO `SavingPlan`( `Username`, `January`, `Februray`, `Mac`, `April`, `May`, `Jun`, `July`, `August`, `September`, `October`, `November`, `December`,`totalPerYear`,
        note1, note2, note3, note4, note5, note6, note7, note8, note9, note10, note11, note12) 
        VALUES('$user',0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,0.00,'','','','','','','','','','','','')";

        
        if (mysqli_query($conn,$reg)) {

            if(mysqli_query($conn, $sql) )
            {
                header("location:RegisterSuccess.php?success=registersuccess");
            }

        }

        else {
            echo "Error updating record: ". mysqli_error($conn);
        }
    

    }
}

function test_input($data) {
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
    <title>Document</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
<section class="section2">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div id="signup-con">
                    <div>
                        <h1>Sign Up</h1>
                    </div>
                    <div>
                        <input id="fname" name="fname" type="text" value="<?php echo $fname;?>" placeholder="Firstname" onfocusout="validateFirstname()">
                        <p id="error"><?php echo $fnameErr;?> </p>
                    </div>

                    <div>            
                        <input id="lname" name="lname" type="text" value="<?php echo $lname;?>" placeholder="Lastname" onfocusout="validateLastname()">
                        <p id="error"><?php echo $lnameErr; ?></p>
                    </div>
                    <div>
                        <input id="user" name="user" type="text" value="<?php echo $user;?>" placeholder="Username" onfocusout="validateUsername()">
                        <p id="error"><?php echo $userErr; ?></p>
                    </div>

                    <div>            
                        <input id="phone" name="phone" type="text" value="<?php echo $phone;?>" placeholder="Phone Number" onfocusout="validatePhone()">
                        <p id="error"><?php echo $phoneErr; ?></p>
                    </div>

                    <div>            
                        <input id="pwd" name="pwd" type="password" value="<?php echo $pwd;?>" placeholder="Password" onfocusout="validatePwd()">
                        <p id="error"><?php echo $pwdErr; ?></p>
                    </div>
                    <div>
                        <input id="pwd2" name="pwd2" type="password" value="<?php echo $pwd2;?>" placeholder="Confirm Password" onfocusout="validatePwd2()">
                        <p id="error"><?php echo $pwd2Err; ?></p>
                    </div>
                    <div class="terms">
                        <p>By signing up, you agree to RazafMart <span>Terms of Services</span> </p>
                    </div>
                    <div>
                        <p style="margin-top:10px" ><a class="link" href="Login.php" style="color:#0060ca">Already have an Account?</a></p>
                    </div>
                    <div class="button">
                        <div ><a href="homepage.php">Cancel</a></div>
                        <div><button name="signupBtn">Sign Up</button></div> 
                    </div>
                </div>
            </form>
        </section>

        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

<script>


    //validate
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var user = document.getElementById("user");
    var phone = document.getElementById("phone");
    var pwd = document.getElementById("pwd");
    var pwd2 = document.getElementById("pwd2");

    //VALIDATE FIRSTNAME
    function validateFirstname()
    {
        if(checkIfEmpty(fname))
        {
            fname.nextElementSibling.innerHTML="Firstname cannot be empty";
        }
        else if(checkLength(fname))
        {
            fname.nextElementSibling.innerHTML="Firstname must contain at least more than 3 characters";
        }
        else if(checkonlyalphabets(fname))
        {
            fname.nextElementSibling.innerHTML="Firstname can only contains alphabets";
        }
        else
        {
            fname.nextElementSibling.innerHTML="";
            fname.style.borderLeft="2px solid green";
        }
    }

    //VALIDATE LASTNAME
    function validateLastname()
    {
        if(checkIfEmpty(lname))
        {
            lname.nextElementSibling.innerHTML="Lastname cannot be empty";
        }
        else if(checkLength(lname))
        {
            lname.nextElementSibling.innerHTML="Lastname must contain at least more than 3 characters";
        }
        else if(checkonlyalphabets(lname))
        {
            lname.nextElementSibling.innerHTML="Lastname can only contains alphabets";
        }
        else
        {
            lname.nextElementSibling.innerHTML="";
            lname.style.borderLeft="2px solid green";
        }
    }

    //VALIDATE USERNAME
    function validateUsername()
    {
        if(checkIfEmpty(user))
        {
            user.nextElementSibling.innerHTML="Username cannot be empty";
        }

        else if(checkLength(user))
        {
            user.nextElementSibling.innerHTML="Username must contain at least more than 3 characters";
        }

        else
        {
            user.nextElementSibling.innerHTML="";
            user.style.borderLeft="2px solid green";
        }
    }

    //VALIDATE PHONE NUMBER
    function validatePhone()
    {
        if(checkIfEmpty(phone))
        {
            phone.nextElementSibling.innerHTML="Phone Number cannot be empty";
        }

        else if(checkNumberOnly(phone))
        {
            phone.nextElementSibling.innerHTML="Phone Number not in correct format";
        }

        else if(checkPhoneLength(phone))
        {
            phone.nextElementSibling.innerHTML="Phone Number not in correct format";
        }
        else 
        {
            phone.nextElementSibling.innerHTML="";
            phone.style.borderLeft="2px solid green";
        }
    }

    //VALIDATE PASSWORD
    function validatePwd()
    {
        if(checkIfEmpty(pwd))
        {
            pwd.nextElementSibling.innerHTML="Password cannot be empty";
        }

        else if(checkPwdLength(pwd))
        {
            pwd.nextElementSibling.innerHTML="Password must contain at least 8 character";
        }

        else if(checkPwd(pwd))
        {
            pwd.nextElementSibling.innerHTML="Password must contain at least 1 uppercase, lowercase letter and 1 digits";       
        }
        else
        {
            pwd.nextElementSibling.innerHTML="";
            pwd.style.borderLeft="2px solid green";
        }
    }

    //VALIDATE PASSWORD2
    function validatePwd2()
    {
        if(checkIfEmpty(pwd2))
        {
            pwd2.nextElementSibling.innerHTML="Password cannot be empty"; 
        }

        else if(pwd.value != pwd2.value)
        {
            pwd2.nextElementSibling.innerHTML="Password does not match"; 
        }
        else
        {
            pwd2.nextElementSibling.innerHTML="";
            pwd2.style.borderLeft="2px solid green";
        }
    }

    // VALIDATE LOGIN USERNAME

    function validateLoginUsername()
    {
        if(checkIfEmpty(luser))
        {
            luser.nextElementSibling.innerHTML="Username cannot be empty";
        }
        else 
        {
            luser.nextElementSibling.innerHTML="";
            luser.style.borderLeft="2px solid green";
        }

    }

    // VALIDATE LOGIN PASSWORD

    function validateLoginPwd()
    {
        if(checkIfEmpty(lpwd))
        {
            lpwd.nextElementSibling.innerHTML="Password cannot be empty";
        }
        else 
        {
            lpwd.nextElementSibling.innerHTML="";
            lpwd.style.borderLeft="2px solid green";
        }
    }


    function checkIfEmpty(field)
    {
        if(field.value==""  || field.value==null)
        {
            field.style.borderLeft="2px solid red";
            return true;
        }
    }

    function checkLength(field)
    {
        if(field.value.length<3)
        {
            field.style.borderLeft="2px solid red";
            return true;
        }
    
    }

    function checkonlyalphabets(field)
    {
        var letters = /^[A-Za-z]+$/; 
        if(! field.value.match(letters))
        {
            field.style.borderLeft="2px solid red";
            return true;
        }
    
    }

    function checkNumberOnly(field)
    {
       var regexPhone = /^[0-9]*$/;
       if(!field.value.match(regexPhone))
       {
            field.style.borderLeft="2px solid red";
            return true;
       }
    }

    function checkPhoneLength(field)
    {
        if(field.value.length<=9 || field.value.length>=12 )
        {
            field.style.borderLeft="2px solid red";
            return true;
        }
    }

    function checkPwdLength(field)
    {
        if(field.value.length<8)
        {
            field.style.borderLeft="2px solid red";
            return true;
        }
    }

    function checkPwd(field)
    {
        var pwdRegex = /^(?=.*[^a-zA-Z])(?=.*[a-z])(?=.*[A-Z])\S{8,}$/;
        if(!field.value.match(pwdRegex))
        {
            field.style.borderLeft="2px solid red";
            return true;
        }
    }


</script>   
</body>
</html>