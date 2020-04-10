
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="homepage.css">
    <title>Document</title>
    <style>
        body {
            background: white;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .text-container {
            width: 600px;
            height: 250px;
            background: linear-gradient(147deg, #007065, #60a9a6);
            border-radius: 3px;
            box-shadow: 0 5px 6px -6px black;
        }

        h1 {
            font-size: 45px;
            font-family: 'Quattrocento Sans', sans-serif;
            text-align: center;
            padding-top: 10px;
            margin-bottom: -20px;
        }
        h2
        {
            margin-top:30px;
            text-align:center;
        }

        a:hover
        {
            text-decoration:underline;
            opacity:1;
        }

        p {
            text-align: center;
        }

        .img {
            margin-top: 35px;
            text-align: center;
            animation: rotate-center 0.6s ease-in-out both;
        }

        @keyframes rotate-center {
            0% {
                -webkit-transform: rotate(0);
                transform: rotate(0);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-container">
            <h1 style="color: white;">Registration Success</h1>
            <div class="img">
                <img src="pictures/Logo/checked.png" alt="" width="100px" height="100px;">
            </div>
           <h2> <a href="Login.php">Login Now</a></h2>
        </div>
    </div>
</body>

</html>