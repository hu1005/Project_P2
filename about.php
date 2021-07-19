<!doctype html>
<html class="no-js" lang="en">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>About Us</title>
    <style>
        .backg {
            background-image: url("https://wallpaperaccess.com/full/1638168.jpg");
            

        }
    </style>
	
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
                                          
                                                                                                                                       
											 <li><a href = #>Our Products<span class="caret"></span></a>
                                               <ul class="dropdown">
                                               <li><a href="products/category1.html">Category 1</a> </li>
											    <li><a href="products/category2.html">Category 2</a> </li>
											   <li><a href="products/category3.html">Category 3></a> </li>
											   <li><a href="products/category4.html">Category 4</a> </li>
											  
											   </ul></li>
											   
											   </li>
                                                                                            
                                            <li  class="active" ><a href="about.php" >About Us</a></li>
                                            <li><a href="near-by-attraction.php">Near By Attraction</a></li>
                                     
                            
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
                                          
                                                                                                                                       
											 <li><a href = #>Our Products<span class="caret"></span></a>
                                               <ul class="dropdown">
                                               <li><a href="products/category1.html">Category 1</a> </li>
											    <li><a href="products/category2.html">Category 2</a> </li>
											   <li><a href="products/category3.html"Category 3></a> </li>
											   <li><a href="products/category4.html">Category 4</a> </li>
											  
											   </ul></li>
											   
											   </li>
                                                                                            
                                            <li  class="active" ><a href="about.php" >About Us</a></li>
                                            <li><a href="near-by-attraction.php">Near By Attraction</a></li>
                                         
                                            
                                           <li><a href="contact.html">Contact us</a></li>
                                                                                          
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
        <!--Header Area End-->		<!--Header Area End-->
       <section class="heading-banner-area pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-banner">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="#">Home</a><span class="breadcome-separator">></span></li>
                                    <li>About Us</li>
                                </ul>
                            </div>
                            <div class="heading-banner-title">
                                <h1>About Us</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Heading Banner Area End-->
        <!--Aboout Us Area Start-->
        <!--About Us Image Start-->

        <!--About Us Image End-->
        <div class="container">
            <!--About Us Content Start-->
            <div class="about-us-title text-center">
                <h2><strong>Welcome to Project P2</strong> <br><strong>Organic Food and Farming</strong></h2>
            </div>
            <p>We have managed to cross numerous milestones. Being one of the rare companies in the Uttarakhand
                that deals with 100% organic Category 2, Category 4 and grocery. Our service of farming and selling
                organic Category 2 and Category 4 extends to Uttarakhand while we sell organic grocery expanded in PAN
                India. Being a company that is in Business to consumer modal, our constant aim is to satisfy our
                esteemed customers exceptionally good service.</p>
          
		<!--Slider Area Start-->
        <section class="slider-area ">
            <div class="slider-wrapper theme-default">
                <!--Slider Background Image Start-->
                <div id="slider" class="nivoSlider">
                    <img id="img1" src="img/about/slider-1.jpg" alt="" title="#htmlcaption" />
                    <img id="img2" src="img/about/slider-2.jpg" alt="" title="#htmlcaption2" />
                    <img id="img3" src="img/about/slider-4.jpg" alt="" title="#htmlcaption3" />
                </div>
            </div>
        </section>
        <!--Slider Area End-->
		
            <div class="about-us-btn text-center">
                <a href="#" class="button2">view Products </a>
            </div>
            <!--About Us Content End-->
        </div>

        <section class="service-item-area mt-20">

            <div class="container">
                <div class="row">
                    <!--Single Service Item Start-->
                    <div class="col-md-6 col-sm-6">
                        <div class="single-service-item">
                            <div class="service-img img-full mb-35">

                                <img src="img/service/mission.png" alt="">
                            </div>
                            <div class="service-content">
                                <div class="service-title">
                                    <h2><b>Mission</b></h2>
                                </div>
                                <p>We aim towards making the organic food available to those who wish to keep
                                    their health healthy. Apart from customer satisfaction, we also strive to sustain
                                    the environment and hence we believe that promoting organic food is not only our
                                    business but also rightful duty.</p>
                            </div>
                        </div>
                    </div>
                    <!--Single Service Item End-->
                    <!--Single Service Item Start-->
                    <div class="col-md-6 col-sm-6">
                        <div class="single-service-item">
                            <div class="service-img img-full mb-35">
                                <img src="img/service/vision.png" alt="">
                            </div>
                            <div class="service-content">
                                <div class="service-title">
                                    <h2><b> Vision </b></h2>
                                </div>
                                <p>We believe in growth and hence our only vision is to do better than the last
                                    day. Whether it is our products, service, performance, relations with clients or
                                    employees; we seek for growth and our promises.</p>
                            </div>
                        </div>
                    </div>
                    <!--Single Service Item End-->

                </div>
            </div>
        </section>
        <!--Unlimited Ideas Area Start-->
        <section class="unlimited-ideas-area">
            <div class="container-fluid">
                <div class="row">

                    <!--Unlimited Ideas Content Start-->
                    <div class="backg">


                        <div class="col-12">

                            <div class="unlimited-ideas-content">
                                <div class="unlimited-ideas-title">
                                    <h1><b>Organic Farming in Uttarakhand</b></h2>
                                </div>
                                <div class="unlimited-ideas-description mtb-60">
                                    <p> Organic farming is a form of agriculture that relies on techniques such
                                        as crop rotation, green manure, compost, and biological pest control. Depending
                                        on whose definition is used, organic farming uses fertilizers and pesticides
                                        (which include herbicides, insecticides, and fungicides) if they are considered
                                        natural (such as bone meal from animals or pyrethrin from flowers), but it
                                        excludes or strictly limits the use of various methods (including synthetic
                                        petrochemical fertilizers and pesticides; plant growth regulators such as
                                        hormones; antibiotic use in livestock; genetically modified organisms; human
                                        sewage sludge; and nanomaterials.) for reasons including sustainability,
                                        openness, independence, health, and safety.</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </section>


        <!--Unlimited Ideas Area End-->
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!--Imagesloaded-->
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

</html>