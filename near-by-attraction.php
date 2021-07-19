<!doctype html>
<html class="no-js" lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!--   <title>Him Value - Organic Food and Farming</title> -->
    <title>Project P2</title>
	
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


<button class="open-button" onclick="openForm()">Check Service Availability</button>

<div class="form-popup" id="myForm">
  <form action="" class="form-container">
<input id="pincode" placeholder="Enter PINCODE"maxlength="6"> <br>
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
                                       <li class="support"><span><a id="signup" href = "signup.html">Sign Up | </a><a id="login"href = "login.html">Login</a></span></li>
                                      
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
                                    <a href="#"><img src="img/himvalue-logo.png" width="14%" class="logo-img"
                                            alt=""></a>
                                </div>
                            </div>
                            <!--Logo End-->

                            <!--Mini Cart Start-->
                            <div class="col-md-3 col-sm-4 col-xs-8">
                                <div class="mini-cart-area">
                                <ul>
                                       <li>
                                                                                  <a href="mycart.php"><i class="ion-android-cart"></i><span class="cart-add"></span><span class="cart-total"> </a>
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
                                                    <li><a href="products/product1.html">Product 1</a> </li>
                                                    <li><a href="products/product2.html">Product 2</a> </li>
                                                    <li><a href="products/product3.html">Product 3</a> </li>
                                                    <li><a href="products/product4.html">Product 4</a> </li>

                                                </ul>
                                            </li>

                                            </li>

                                            <li><a href="about.php">About Us</a></li>
                                            <li class="active"><a href="near-by-attraction.php">Near By Attraction</a>
                                            </li>

                                            
    
                                            <li><a href="contact.html">Contact us</a></li>
                                            <li><a href="index3.php">Our Store</a></li>


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
                                                    <li><a href="products/product1.html">Product 1</a> </li>
                                                    <li><a href="products/product2.html">Product 2</a> </li>
                                                    <li><a href="products/product3.html">Product 3</a> </li>
                                                    <li><a href="products/product4.html">Product 4</a> </li>

                                                </ul>
                                            </li>

                                            </li>

                                            <li><a href="about.php">About Us</a></li>
                                            <li class="active"><a href="near-by-attraction.php">Near By Attraction</a>
                                            </li>

                                            
    
                                            <li><a href="contact.html">Contact us</a></li>
                                            <li><a href="index3.php">Our Store</a></li>

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
        <!--Header Area End-->

        <!--Heading Banner Area Start-->
        <section class="heading-banner-area pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-banner">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a><span class="breadcome-separator">></span></li>
                                    <li>Near By Attraction</li>
                                </ul>
                            </div>
                            <div class="heading-banner-title">
                                <h1>Near By Attraction</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Heading Banner Area End-->
        <!--Blog Area Start-->

        <section class="blog-area mt-20">
            <div class="container">
                <div class="row">
                    <!--Blog No Sidebar Start-->
                    <div class="col-md-12">
                        <div class="all-single-blog">
                            <!--Single Blog Post Start-->
                            <div class="single-blog-post mb-40">
                                <div class="post-thumbnail img-full">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100"
                                                    src="https://bloggerz.co.in/wp-content/uploads/2019/05/jim-corbate.jpg"
                                                    alt="First slide">
                                            </div>
                                           
                            
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="postinfo-wrapper">
                                    <div class="post-header">

                                        <h1 class="post-title"><a href="#">Corbett National Park</a></h1>

                                    </div>
                                    <div class="post-info">
                                        <div class="entry-summary">
                                            <p>It is the oldest national park of India, built in 1936 by naturalist Jim
                                                Corbett. The aim of the national park was to conserve the Bengal tigers,
                                                which were an endangered species at time, with all the poaching and
                                                hunting. They are still endangered though, but a flock of these royal
                                                beauties can be seen in the national park. It is about a two hour drive
                                                from Kotabagh.</p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Single Blog Post End-->


                            <!--Single Blog Post Start-->
                            <div class="single-blog-post mb-40">
                                <div class="post-thumbnail img-full">
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100"
                                                    src="img/near-by-attraction/nainital.png" alt="First slide">
                                            </div>
                            
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="postinfo-wrapper">
                                    <div class="post-header">

                                        <h1 class="post-title"><a href="#">Nainital</a></h1>

                                    </div>
                                    <div class="post-info">
                                        <div class="entry-summary">
                                            <p>Situated at an hour drive from Kotabagh, Nainital is one of the most
                                                popular tourist attractions in Uttarakhand. It is crescent shaped,
                                                surrounded by hills and long tress, which adds to its beauty. It is a
                                                must-see place whenever you visit the state. The lake is frozen during
                                                winter, but during summer, you can go boating there.</p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Single Blog Post End-->


                            <!--Single Blog Post Start-->
                            <div class="single-blog-post mb-40">
                                <div class="post-thumbnail img-full">


                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100"
                                                    src="https://media-cdn.tripadvisor.com/media/photo-s/13/16/fa/da/corbett-falls.jpg"
                                                    alt="First slide">
                                            </div>
                                            
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="postinfo-wrapper">
                                    <div class="post-header">

                                        <h1 class="post-title"><a href="#">Corbett Fall</a></h1>

                                    </div>
                                    <div class="post-info">
                                        <div class="entry-summary">
                                            <p>Corbett Falls is a scenic water fall located at 17 kms from Kotabagh.
                                                Developed as a picnic spot for tourist, Corbett Water Falls is
                                                surrounded by dense teak wood forest which extends its natural beauty.
                                                Sound of the waterfall makes perfect melody with chippings of the birds.
                                                This picturesque waterfall, about 10mts high, draws a large number of
                                                visitors to its natural environs.</p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Single Blog Post End-->


                            <!--Single Blog Post Start-->
                            <div class="single-blog-post mb-40">
                                <div class="post-thumbnail img-full">

                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                  <div class="carousel-item active">
                                                    <img class="d-block w-100" src="https://media-cdn.tripadvisor.com/media/photo-s/12/98/85/9a/museum.jpg" alt="First slide">
                                                  </div>
                                                
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                  <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                  <span class="sr-only">Next</span>
                                                </a>
                                              </div>
                                </div>
                                <div class="postinfo-wrapper">
                                    <div class="post-header">

                                        <h1 class="post-title"><a href="#">Corbett Museum</a></h1>

                                    </div>
                                    <div class="post-info">
                                        <div class="entry-summary">
                                            <p>The Corbett museum is one of the most captivating parts of the dense
                                                Corbett Reserve beautifully located in Kaladhungi and is positioned just
                                                3 km away from its main town. The Kaladhungi location is ideally
                                                crisscrossed from Nainital via Khurtpal and the museum preposited here
                                                is the most featured sites for the tourists.</p>
                                            <p>

                                                The museum is actually a heritage bungalow of Jim Corbett, the renowned
                                                hunter turned environmentalist who raised the value of wildlife
                                                conservation; and this magnificent museum brings the memory of the life
                                                and activities of the spectacular and distinguished person in the jungle
                                                of the Kumaon hills. A visit to the Corbett Museum is more meaningful
                                                and knowledgeable since one can learn the importance of wildlife while
                                                roaming around the vast and majestic vicinity of the Corbett Reserve.
                                            </p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Single Blog Post End-->

                            <!--Single Blog Post Start-->
                            <div class="single-blog-post mb-40">
                                <div class="post-thumbnail img-full">
                                    <a href="#"><img
                                            src=""
                                            alt=""></a>
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                  <div class="carousel-item active">
                                                    <img class="d-block w-100" src="https://media-cdn.tripadvisor.com/media/photo-s/12/a0/30/fa/nainital-zoo.jpg" alt="First slide">
                                                  </div>
                                                  
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                  <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                  <span class="sr-only">Next</span>
                                                </a>
                                              </div>
                                </div>
                                <div class="postinfo-wrapper">
                                    <div class="post-header">

                                        <h1 class="post-title"><a href="#">High Altitude Zoo</a></h1>

                                    </div>
                                    <div class="post-info">
                                        <div class="entry-summary">
                                            <p>At a distance of 1.5 km from Tallital Bus Stand, G.B. Pant High Altitude
                                                Zoo is a high altitude zoo situated in Nainital. It is one of the
                                                popular Nainital tourist places and is one of the three High Altitude
                                                Zoo Parks in North India, apart from those in Darjeeling and Sikkim.</p>
                                            <p>The Zoo was established in 1984 and is spread over an area of 11 acres.
                                                It is situated on the Sher Ka Danda hill at an altitude of 2,100 m
                                                (6,900 feet) and is the only zoo in Uttarakhand. The Zoo was opened to
                                                visitors on 1st June 1995 and is managed by Bharat Ratna Pandit Govind
                                                Ballabh Pant High Altitude Zoo Management Society, Nainital from 1st
                                                March 2002.
                                            </p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Single Blog Post End-->




                        </div>
                    </div>
                    <!--Blog No Sidebar End-->
                </div>
            </div>
        </section>
        <!--Blog Area End-->










        <!--Footer Area Start-->
        <footer>
            <div class="footer-container bg-3">
                <!--Footer Top Area Start-->
                <div class="footer-top-area ptb-50">
                    <div class="container">
                        <div class="row">
                            <!--Single Footer Start-->
                            <div class="col-md-4 col-sm-6">
                                <div class="single-footer">
                                    <!--Footer Logo Start-->
                                    <div class="footer-logo">
                                        <a href="index-2.html"><img src="img/footer-logo.png" width="33%"
                                                alt=""></a>
                                    </div>
                                    <!--Footer Logo End-->
                                    <!--Footer Content Start-->
                                    <div class="footer-content">
                                        <p class="text-dark"><strong>Project P2</strong></p>
                                        <div class="contact">
                                            <p>Project By Team </p><br />

                                        </div>
                                    </div>


                                </div>
                                <!--Footer Content End-->
                            </div>

                            <!--Single Footer End-->
                            <!--Single Footer Start-->
                            <div class="col-md-2 col-sm-6">
                                <div class="single-footer mt-30">
                                    <div class="footer-title">
                                        <h3>information</h3>
                                    </div>
                                    <ul class="footer-info">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Near By Attraction</a></li>
                                        <li><a href="#">Contact</a></li>


                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-6">
                                <div class="single-footer mt-30">
                                    <div class="footer-title">
                                        <h3>information</h3>
                                    </div>
                                    <ul class="footer-info">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Near By Attraction</a></li>
                                        <li><a href="#">Contact</a></li>


                                    </ul>
                                </div>
                            </div>
                            <!--Single Footer End-->
                            <!--Single Footer Start-->
                            <!-- <div class="col-md-2 col-sm-6">
                                <div class="single-footer mt-30">
                                    <div class="footer-title">
                                        <h3>My Account</h3>
                                    </div>
                                    <ul class="footer-info">
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Shopping cart</a></li>
                                        <li><a href="#">Checkout</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                        <li><a href="#">Frequently Questions</a></li>
                                    </ul>
                                </div>
                            </div>
                             -->
                            <!--Single Footer End-->
                            <!--Single Footer Start-->
                            <div class="col-md-4 col-sm-6">
                                <div class="single-footer mt-30">
                                    <div class="footer-title">
                                        <h3>ADDRESS</h3>
                                   <p>Jaipur, Rajasthan<br/> India, Pin- 302033 </p>    
                                        <p><label>Phone:</label> +91-9462642837</p>
    
                                        <p><label>Email:</label> hupadhyay1005@gmail.com</a></p>
                                    </div>

                                </div>
                            </div>
                            <!--Single Footer End-->
                        </div>
                    </div>
                </div>
                <!--Footer Top Area End-->
                <!--Footer Bottom Area Start-->
                <div class="footer-bottom-area">
                    <div class="container">
                        <div class="row">
                            <!--Footer Left Content Start-->
                            <div class="col-md-6 col-sm-6">
                                <div class="copyright-text ">


                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6" style="text-align: right;">
                                <ul class="socil-icon">
                                    <li><a href="#" data-toggle="tooltip" title="Twitter"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Facebook"><i
                                                class="ion-social-facebook"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Google Plus"><i
                                                class="ion-social-googleplus"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="Youtube"><i
                                                class="ion-social-youtube"></i></a></li>

                                </ul>
                            </div>

                        </div>
                        <!--Footer Left Content End-->

                        <!--Footer Right Content End-->
                    </div>
                </div>

                <!--Footer Bottom Area End-->
            </div>
        </footer>
        <!--Footer Area End-->


        <!--All Js Here-->

        <!--Jquery 1.12.4-->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!--Imagesloaded-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!--Isotope-->
        <script src="js/isotope.pkgd.min.js"></script>
        <!--Ui js-->
        <script src="js/jquery-ui.min.js"></script>
        <!--Countdown-->
        <script src="js/jquery.countdown.min.js"></script>
        <!--Counterup-->
        <script src="js/jquery.counterup.min.js"></script>
        <!--ScrollUp-->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!--Chosen js-->
        <script src="js/chosen.jquery.js"></script>
        <!--Meanmenu js-->
        <script src="js/jquery.meanmenu.min.js"></script>
        <!--Instafeed-->
        <script src="js/instafeed.min.js"></script>
        <!--EasyZoom-->
        <script src="js/easyzoom.min.js"></script>
            
        <!--Nivo Slider-->
        <script src="js/jquery.nivo.slider.js"></script>
        <!--Waypoints-->
        <script src="js/waypoints.min.js"></script>
        <!--Carousel-->
        <script src="js/owl.carousel.min.js"></script>
        <!--Slick-->
        <script src="js/slick.min.js"></script>
        <!--Wow-->
        <script src="js/wow.min.js"></script>
        <!--Bootstrap-->
        <script src="js/bootstrap.min.js"></script>
        <!--Plugins-->
        <script src="js/plugins.js"></script>
        <!--Main Js-->
        <script src="js/main.js"></script>
</body>

<!-- Mirrored from himvalue.com/near-by-attraction by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Jun 2021 19:27:57 GMT -->

</html>