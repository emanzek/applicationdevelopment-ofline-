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
    <script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>

    <title>Vegetables</title>

    <style>
        
        body
        {
            background-color:whitesmoke;
            padding: 0;
            margin: 0;
        }
        .container
        {
            width: 100%;
            height: 85vh;
            display: flex;
            justify-content: center;
        }

        .sub-container
        {
            height: auto;
            margin-right: 20px;
        }

        .img-container
        {
            padding-left: 20px;
            padding-right: 20px;
            background:#fafafa;
            width: 350px;
            height: 520px;
            border-radius: 3px;
            padding-top:20px; 
            margin-top: 50px;
            transition:300ms;
            box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2);
	        animation: swing-in-top-bck 1s cubic-bezier(0.175, 0.885, 0.320, 1.275) both;
        }

        @keyframes swing-in-top-bck {
        0% {
            -webkit-transform: rotateX(70deg);
                    transform: rotateX(70deg);
            -webkit-transform-origin: top;
                    transform-origin: top;
            opacity: 0;
        }
        100% {
            -webkit-transform: rotateX(0deg);
                    transform: rotateX(0deg);
            -webkit-transform-origin: top;
                    transform-origin: top;
            opacity: 1;
        }
        }


        .details
        {
            display: flex;
        }

        h1
        {
            font-family: 'Hind Vadodara', sans-serif;
            color: hsl(0, 0%, 0%,70%);
            font-size: 30px;
            text-align: center;
        }

        h2
        {
            font-family: 'Hind Vadodara', sans-serif;
            color: #0060ca;
            margin-left: 20px;
            text-align: center;
        }

        p
        {
            color: hsl(0, 0%, 0%,50%);
            font-family: 'Hind Vadodara', sans-serif;
        }

        .price-quan
        {
            margin-top: -30px;
            display: flex;
        }

        .price-quan p
        {
            line-height: 40px;
        }

        .image
        {
            text-align: center;
            width: 350px;
            height: 250px;
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }

        .image img
        {
            border-radius: 3px;
        }

        #plus , #minus
        {
            text-align: center;
            font-size:25px;
            cursor:pointer;
            background: white;
            line-height: 37px;
            width: 35px;
            height: 37px;
            border: 1px solid lightgrey;
            font-family: optima;
            margin: -2px;

        }
        #plus
        {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
            border-left: none;
        }

        #minus
        {
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
            border-right: none;
        }

        .value
        {
            display: flex;
            margin-top: 20px;
        }

        input
        {
            margin: -3px;
            font-size: 18px;
            border: none;
            height: 35px;
            width: 45px;
            text-align: center;
            border: 1px solid lightgrey;
            font-family: optima;
        }

        span
        {
            line-height: 35px;
            margin-left: 15px;
            font-family: 'Roboto', sans-serif;
            color: hsl(0, 0%, 0%,50%);
            font-size: 13px;
        }

         button
        {
            margin-top: 30px;
            width: 130px;
            height: 40px;
            font-size: 16px;
            background-color: #0060ca;
            border: none;
            outline: none;
            color: white;
            letter-spacing: 1px;
            font-size: 13px;
            cursor: pointer;
            border-radius: 3px;
            position: relative;
            box-shadow: 0px 15px 20px rgba(0, 96, 202,0.4);
            margin-left: 40px;
        }
        
        button:nth-child(1)
        {
            margin-left: 0px;
            background: #4CAF50;
            box-shadow: 0px 15px 20px rgba(76, 175, 80,0.4);

        }

        table tr td:nth-child(1)
        {
            padding-right: 20px;
        }
        
        .btn
        {
            display: flex;
            justify-content: center;
        }
        
        nav
        {
            height: 80px;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .left
        {
            line-height: 50px;
            display: flex;
            justify-content: flex-start;
            margin-left: 10px;
        }

        .left img
        {
            margin-top: -60px;
        }

        .right
        {   
            display: flex;
            justify-content: flex-end;
        }

        .right img
        {
            margin-top: 20px;
        }

        .right p
        {
            cursor: pointer;
            margin-right: 20px;
            color: black;
        }

        .right div
        {
            margin-left: 20px;
            margin-right: 20px;
            line-height:50px;

        }

        .right img
        {
            cursor: pointer;
        }

        a
        {
            text-decoration: none;
            color: black;
            font-family: 'Hind Vadodara', sans-serif;
            margin: 20px;
            transition: 300ms;
        }

        #nav-bar p:hover 
        {
            opacity: 0.7;
        }

        ul 
        {
            font-family: 'Hind Vadodara', sans-serif;
            list-style:  none;
            text-align: center;
            width: 120px;
            opacity: 1;
            z-index: 999;
            position: relative;
            padding: 0;
        }

        ul li
        {
            cursor: pointer;
            transition: 300ms;
        }

        ul li ul li
        {
            height: 50px;
            line-height: 50px;
        }

        ul li ul li:nth-child(1)
        {
            animation: swing-in-left-fwd 0.5s cubic-bezier(0.175, 0.885, 0.320, 1.275) both;
            display: none;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        ul li ul li:nth-child(2)
        {
            animation: swing-in-left-fwd 0.6s cubic-bezier(0.175, 0.885, 0.320, 1.275) both;
            display: none;
        }

        ul li ul li:nth-child(3)
        {
            animation: swing-in-left-fwd 0.7s cubic-bezier(0.175, 0.885, 0.320, 1.275) both;
            display: none;
        }

        ul li ul li:nth-child(4)
        {
            animation: swing-in-left-fwd 0.8s cubic-bezier(0.175, 0.885, 0.320, 1.275) both;
            display: none;
        }

        ul li ul li:nth-child(5)
        {
            animation: swing-in-left-fwd 0.9s cubic-bezier(0.175, 0.885, 0.320, 1.275) both;
            display: none;
        }

        ul li ul li:nth-child(6)
        {
            animation: swing-in-left-fwd 1s cubic-bezier(0.175, 0.885, 0.320, 1.275) both;
            display: none;
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
            box-shadow: -2px 11px 15px -8px #000000;
        }



        @keyframes swing-in-left-fwd {
            0% {
            -webkit-transform: rotateY(100deg);
                    transform: rotateY(100deg);
            -webkit-transform-origin: left;
                    transform-origin: left;
            opacity: 0;
            }
            100% {
            -webkit-transform: rotateY(0);
                    transform: rotateY(0);
            -webkit-transform-origin: left;
                    transform-origin: left;
            opacity: 1;
            }
        }
        

        ul li:hover ul li 
        {
            display: block;
            background: rgb(0, 96, 202,0.8);
        }

        ul li ul li:hover
        {
            background: none;
        }

        ul li ul li a
        {
            color: white;
        }

        ul li ul li:hover a
        {
            color: #0060ca;
        }

        ul li ul li::before
        {
            content: "";
            display: block;
            position: absolute;
            background:#fffdfb;
            width: 0%;
            height:100%; 
            transition: 0.5s;
            z-index: -1;
        }

        ul li ul li:hover::before
        {
            width: 100%;
        }

    </style>
</head>
<body>
        <section>
                <nav id="nav-bar">
                    <div class="left">
                        <div><img src="pictures/LOGO2.png" alt=""></div>
                    </div>
    
                    <div class="right">
                        <div><p>Home</p></div>
                        <div><p>Help</p></div>
                        <div>
                            <ul>
                                <li>Categories
                                    <ul>
                                        <li><a href="vegetables.html">Vegetables</a></li>
                                        <li><a href="fruits.html">Fruits</a></li>
                                        <li><a href="">Meat</a></li>
                                        <li><a href="">Seafood</a></li>
                                        <li><a href="">Biscuits</a></li>
                                        <li><a href="">Beverages</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div><ul>
                                <li><?php echo $_SESSION['user']; ?>
                                    <ul>
                                        <li><a href="logout.php">Logout</a></li>
                                    </ul>
                            </li>
                            </ul></div> 
                        <div><img src="pictures/bag.png" alt=""></div>
                    </div>
                </nav>
            </section>

    <div class="container">
        <div class="sub-container">
            <form action="" class="img-container">
                <div class="image">
                    <img src="pictures/asparagus.jpg" alt="" width="350px" height="250px">
                </div>
                <h1>Fresh Asparagus</h1>
                <div class="price-quan">
                  <table>
                      <tr>
                          <td><p>Price</p></td>
                          <td></td>
                          <td ><h2>RM 5.00</h2></td>
                      </tr>
                  </table>
                </div>
                <div class="banas">
                    <div class="details">
                        <table>
                            <tr>
                                <td><p>Quantity</p></td>
                                <td class="input" ><input type="text" value="1" readonly></td>
                                <td><span>100 piece available</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
               
                <div class="btn">
                    <button>Add To Cart</button>
                    <button>Buy Now</button>
                </div>
            </form>
        </div>

        <div class="sub-container">
                <form action="" class="img-container">
                    <div class="image">
                        <img src="pictures/bellpepper.jpg" alt="" width="350px" height="250px">
                    </div>
                    <h1>Bell Peppper</h1>
                    <div class="price-quan">
                      <table>
                          <tr>
                              <td><p>Price</p></td>
                              <td></td>
                              <td ><h2>RM 6.90</h2></td>
                          </tr>
                      </table>
                    </div>
                    <div class="banas">
                        <div class="details">
                            <table>
                                <tr>
                                    <td><p>Quantity</p></td>
                                    <td class="input" ><input type="text" value="1" readonly></td>
                                    <td><span>100 piece available</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                   
                    <div class="btn">
                        <button>Add To Cart</button>
                        <button>Buy Now</button>
                    </div>
                </form>
            </div>

        <div class="sub-container">
                <form action="" class="img-container">
                    <div class="image">
                        <img src="pictures/carrot.jpg" alt="" width="350px" height="250px">
                    </div>
                    <h1>Carrots</h1>
                    <div class="price-quan">
                      <table>
                          <tr>
                              <td><p>Price</p></td>
                              <td></td>
                              <td ><h2>RM 8.90</h2></td>
                          </tr>
                      </table>
                    </div>
                    <div class="banas">
                        <div class="details">
                            <table>
                                <tr>
                                    <td><p>Quantity</p></td>
                                    <td class="input" ><input type="text" value="1" readonly></td>
                                    <td><span>100 piece available</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                   
                    <div class="btn">
                        <button>Add To Cart</button>
                        <button>Buy Now</button>
                    </div>
                </form>
            </div>
</div>

<div class="container">
        <div class="sub-container">
            <form action="" class="img-container">
                <div class="image">
                    <img src="pictures/cili.jpg" alt="" width="350px" height="250px">
                </div>
                <h1>Red Chilies</h1>
                <div class="price-quan">
                  <table>
                      <tr>
                          <td><p>Price</p></td>
                          <td></td>
                          <td ><h2>RM 4.90</h2></td>
                      </tr>
                  </table>
                </div>
                <div class="banas">
                    <div class="details">
                        <table>
                            <tr>
                                <td><p>Quantity</p></td>
                                <td class="input" ><input type="text" value="1" readonly></td>
                                <td><span>120 piece available</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
               
                <div class="btn">
                    <button>Add To Cart</button>
                    <button>Buy Now</button>
                </div>
            </form>
        </div>

        <div class="sub-container">
                <form action="" class="img-container">
                    <div class="image">
                        <img src="pictures/cili2.jpg" alt="" width="350px" height="250px">
                    </div>
                    <h1>Green Chillies</h1>
                    <div class="price-quan">
                      <table>
                          <tr>
                              <td><p>Price</p></td>
                              <td></td>
                              <td ><h2>RM 4.90</h2></td>
                          </tr>
                      </table>
                    </div>
                    <div class="banas">
                        <div class="details">
                            <table>
                                <tr>
                                    <td><p>Quantity</p></td>
                                    <td class="input" ><input type="text" value="1" readonly></td>
                                    <td><span>120 piece available</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                   
                    <div class="btn">
                        <button>Add To Cart</button>
                        <button>Buy Now</button>
                    </div>
                </form>
            </div>

        <div class="sub-container">
                <form action="" class="img-container">
                    <div class="image">
                        <img src="pictures/tomato.jpg" alt="" width="350px" height="250px">
                    </div>
                    <h1>Tomatoes</h1>
                    <div class="price-quan">
                      <table>
                          <tr>
                              <td><p>Price</p></td>
                              <td></td>
                              <td ><h2>RM 5.90</h2></td>
                          </tr>
                      </table>
                    </div>
                    <div class="banas">
                        <div class="details">
                            <table>
                                <tr>
                                    <td><p>Quantity</p></td>
                                    <td class="input" ><input type="text" value="1" readonly></td>
                                    <td><span>100 piece available</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                   
                    <div class="btn">
                        <button>Add To Cart</button>
                        <button>Buy Now</button>
                    </div>
                </form>
            </div>
</div>

    <script>
            $(function() 
            {
    
                $('<td class="button"><div id="minus" >-</div></td>').insertBefore(".input")
                $('<td class="button"><div id="plus" >+</div></td>').insertAfter(".input");
                
    
                $(".button").on("click", function() 
                {
    
                var $button = $(this);
                var oldValue = $button.parent().find("input").val();
    
                if ($button.text() == "+") 
                {
                    var newVal = parseFloat(oldValue) + 1;
                }
    
                else 
                {
                    if (oldValue > 1) 
                    {
                        var newVal = parseFloat(oldValue) - 1;
                    } 
                    else 
                    {
                        newVal = 1;
                    }
                }
    
                $button.parent().find("input").val(newVal);
    
                });
    
            });
        </script>
</body>
</html>