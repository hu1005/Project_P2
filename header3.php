<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!--theme swiching-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/theme.js"></script>

    <!--pincode popup and validation -->
    <script src="js/pincode-validate.js"></script>
    <script src="js/popup.js"></script>
    <link rel="stylesheet" href="css/popup.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="__img/favicon.html">
    <!-- Ionicons Font CSS-->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- font awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    
    <!-- UI CSS-->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    
    
    <!-- Meanmenu CSS (for mobile dropdown menus)-->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    
    
    
    <link rel="stylesheet" href="css/normalize.css">
    <!--Nivo Slider CSS-->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- Owl Carousel CSS ( for display of featured products)-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    
    
    <!-- Slick CSS-->
    <link rel="stylesheet" href="css/slick.css">


    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Modernizr Js -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

        <div class="container-fluid">
                <div>
                    <?php
                    $count = 0;
                    if (isset($_SESSION['cart'])) {
                        $count = count($_SESSION['cart']);
                    }
                    ?>


                </div>
            </div>
        </div>
    <button class="open-button" onclick="openForm()">Check Service Availability</button>

    <div class="form-popup" id="myForm">
        <form action="" class="form-container">
            <input id="pincode" placeholder="Enter PINCODE" maxlength="6"> <br>
            <button type="button" class="btn" onclick="myFunction()">Submit</button>
            <button type="button" class="btn" onclick="closeForm()">Close</button>
        </form>
    </div>


    <div class="wrapper home-5">
        <!--Header Area Start-->
        <header>

            <div class="header-container">


                <button id="themetoggle" onclick="toggleTheme()">Switch Theme</button>

                <!--Header Top Area Start-->
                <div class="header-top-area">
                    <div class="container">
                        <div class="row">
                            <!--Header Top Left Area Start-->
                            <div class="col-md-4 col-sm-4 col-xs-12 hidden-xs">
                                <div class="header-top-menu">
                                    <ul>
                                        <li>
                                            <i class="fa fa-envelope-o"> hupadhyay1005@gmail.com | </i><i class="fa fa-phone"> +91-9462642837 </i>
                                        
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12 hidden-xs">
                                <div class="header-top-menu">

                                </div>
                            </div>
                            <!--Header Top Right Area Start-->
                            <div class="col-md-8 col-sm-8 hidden-xs text-right">
                                <div class="header-top-menu">
                                    <ul>
                                        <li class="support"><span><a id="signup" href="signup.html">Sign Up | </a><a id="login" href="login.html">Login</a></span></li>

                                    </ul>
                                </div>
                            </div>
                            <!--Header Top Right Area End-->
                            <!--Header Top Area End-->
                            <!--Header Middel Area Start-->
                            <div class="header-middel-area">
                                <div class="container">
                                    <div class="row">
                                        <!--Logo Start-->
                                        <div class="col-md-9 col-sm-9 col-xs-4">
                                            <div class="logo">
                                                <a href="#"><img src="img/himvalue-logo.png" width="14%" class="logo-img" alt=""></a>
                                            </div>
                                        </div>
                                        <!--Logo End-->

                                        <!--Mini Cart Start-->
                                        <div class="col-md-3 col-sm-4 col-xs-8">
                                            <div class="mini-cart-area">
                                                <ul>
                                                    <li>
                                                        <a href="mycart.php"><i class="ion-android-cart"></i><span class="cart-add"><?php echo $count; ?></span><span class="cart-total"> My Cart (<?php echo $count; ?>)</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--Mini Cart End-->
                                    </div>
                                </div>
                            </div>
                            <!--Header Middel Area End-->
                            <!--Header bottom Area Start-->
                            <div class="header-bottom-area header-sticky">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <!--Main Menu Area Start-->
                                            <div class="main-menu-area">


                                                <nav>
                                                    <ul class="main-menu">
                                                        <li id="home"><a href="index.php">Home</a></li>


                                                        <li><a href=#>Our Products<span class="caret"></span></a>
                                                            <ul class="dropdown">
                                                                <li><a href="products/category1.html">Category 1</a> </li>
                                                                <li><a href="products/category2.html">Category 2</a> </li>
                                                                <li><a href="products/category3.html"> Category 3></a> </li>
                                                                <li><a href="products/category4.html">Category 4</a> </li>

                                                            </ul>
                                                        </li>

                                                        </li>

                                                        <li ><a href="about.php">About Us</a></li>
                                                        <li><a href="near-by-attraction.php">Near By Attraction</a></li>

                                                        
                                                        <li><a href="contact.html">Contact us</a></li>
                                                        <li class="active"><a href="store.php">Our Store</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <!--Main Menu Area End-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Header bottom Area End-->
                            <!--Mobile Menu Area Start-->
                            <div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="mobile-menu">
                                                <nav>
                                                    <ul class="main-menu">
                                                        <li id="home"><a href="index.php">Home</a></li>


                                                        <li><a href=#>Our Products<span class="caret"></span></a>
                                                            <ul class="dropdown">
                                                                <li><a href="products/category1.html">Category 1</a> </li>
                                                                <li><a href="products/category2.html">Category 2</a> </li>
                                                                <li><a href="products/category3.html" >Category 3></a> </li>
                                                                <li><a href="products/category4.html">Category 4</a> </li>

                                                            </ul>
                                                        </li>

                                                        </li>

                                                        <li><a href="about.php">About Us</a></li>
                                                        <li><a href="near-by-attraction.php">Near By Attraction</a></li>

                                                        
                                                        <li><a href="contact.html">Contact us</a></li>
                                                        <li class="active"><a href="store.php">Our Store</a></li>

                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Mobile Menu Area End-->
                        </div>
        </header>
        
</body>

</html>