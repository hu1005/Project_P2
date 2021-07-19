<?php  
?>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Project P2</title>
	
<!--theme swiching-->	
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
	<script src="theme.js"></script>
    	
<!--pincode popup and validation -->	
	<script src="pincode-validate.js"></script>
	<script src="popup.js"></script>
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
                                          <li id="home" class="active" ><a href="index.php">Home</a></li>
                                          
                                                                                                                                       
											 <li><a href = #>Our Products<span class="caret"></span></a>
                                               <ul class="dropdown">
                                               <li><a href="products/category1.html">Category 1</a> </li>
											    <li><a href="products/category2.html">Category 2</a> </li>
											   <li><a href="products/category3.html">Category 3</a> </li>
											   <li><a href="products/category4.html">Category 4</a> </li>
											  
											   </ul></li>
											   
											   </li>
                                                                                            
                                            <li ><a href="about.php" >About Us</a></li>
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
                                          <li id="home" class="active" ><a href="index.php">Home</a></li>
                                          
                                                                                                                                       
											 <li><a href = #>Our Products<span class="caret"></span></a>
                                               <ul class="dropdown">
                                               <li><a href="products/category1.html">Category 1</a> </li>
											    <li><a href="products/category2.html">Category 2</a> </li>
											   <li><a href="products/category3.html">Category 3</a> </li>
											   <li><a href="products/category4.html">Category 4</a> </li>
											  
											   </ul></li>
											   
											   </li>
                                                                                            
                                            <li ><a href="about.php" >About Us</a></li>
                                            <li><a href="near-by-attraction.php">Near By Attraction</a></li>
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
        <!--Header Area End-->		<!--Header Area End-->
		
		<!--Slider Area Start-->
        <section class="slider-area ">
            <div class="slider-wrapper theme-default">
                <!--Slider Background Image Start-->
                <div id="slider" class="nivoSlider">
                    <img src="img/slider/slider-1.jpg" alt="" title="#htmlcaption" />
                    <img src="img/slider/slider-2.jpg" alt="" title="#htmlcaption2" />
                    <img src="img/slider/slider-4.jpg" alt="" title="#htmlcaption3" />
                </div>
                <!--Slider Background Image End-->
                <!--1st Slider Caption Start-->
                <div id="htmlcaption" class="nivo-html-caption">
                    <div class="slider-caption">
                        <div class="slider-text">
                            <h5 class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Start Exploring our products</h5>
                            <h1 class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">--Text here--  <br><span> </span></h1>
                            <!--<h4 class="wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">Starting at <span>$560.99</span></h4>-->
                            <div class="slider-button">
                                <a href="#" class="wow button animated fadeInLeft" data-text="Shop now" data-wow-duration="2.5s" data-wow-delay="0.5s">Start Shopping Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--1st Slider Caption End-->
                <!--2nd Slider Caption Start-->
                <div id="htmlcaption2" class="nivo-html-caption">
                    <div class="slider-caption">
                        <div class="slider-text">
                            <h5 class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Start Exploring our products</h5>
                            <h1 class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">--Text here--  <br><span> </span></h1>
                            <!--<h4 class="wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">Starting at <span>$560.99</span></h4>-->
                            <div class="slider-button">
                                <a href="#" class="wow button animated fadeInLeft" data-text="Shop now" data-wow-duration="2.5s" data-wow-delay="0.5s">Start Shopping Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--2nd Slider Caption End-->
                <!--3rd Slider Caption Start-->
                <div id="htmlcaption3" class="nivo-html-caption">
                    <div class="slider-caption">
                        <div class="slider-text">
                            <h5 class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">Start Exploring our products</h5>
                            <h1 class="wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">--Text here--  <br><span> </span></h1>
                            <!--<h4 class="wow animated fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.5s">Starting at <span>$560.99</span></h4>-->
                            <div class="slider-button">
                                <a href="#" class="wow button animated fadeInLeft" data-text="Shop now" data-wow-duration="2.5s" data-wow-delay="0.5s">Start Shopping Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--3rd Slider Caption End-->
            </div>
        </section>
        <div class="text-top hidden-xs">
            <div class="marquee-main">

                <marquee scrollamount="8" onmouseover="this.stop()" onmouseout="this.start()"><b>NATURAL & ORGANIC FOOD
                        | FARMER TO DIRECT CONSUMER<span> </b></marquee>
            </div>
        </div>
        <center>
            <div class="container-fluid">
                <img src="https://www.gofarmz.com/assets-v1/img/home_image.png">

            </div>
        </center>
        <br><br><br><br><br><br>

        <div class=container>



            <div class="jumbotron">
                <h1 class="display-4"></h1>
                <p class="lead"><h1>How does the things happen at Himvalue</h1></p>
                <hr class="my-4">
                <p> Himvalue will be Delivering your organic products from 8AM to 6PM, Amidst the lockdown. Safety and
                    Hygiene guaranteed!
                    Himvalue’s mission to deliver fresh organic produce direct from farm to home has been successful
                    only because of You and our customers who had been our all-time supporters.

                    The entire humanity is now struggling through difficult times due to COVID19 but your trust and
                    confidence on us has grown manifold.

                    We at Himvalue would like to acknowledge and appreciate the patronage you shown on us and it
                    motivates to serve you better.

                    These difficult times wont stop us from prioritising our customer's needs but due to the sudden
                    surge in the number of orders along with newer government restrictions on working hours and
                    transportation, you may witness a delay in the delivery of your order.

                    We regret for the unavoidable inconvenience and request your understanding as our employees are on
                    the battlefield like frontline warriors still trying to serve your needs better!
                </p>
                <a class="btn btn-primary btn-lg" href="about.php" role="button">About Us</a>
            </div>
        </div>
        <!--Slider Area End-->
		<!--Corporate About Start-->
        <section class="corporate-about white-bg pt-20">
            <div class="container">
                <div class="row-2">
                    <div class="all-about">
                        <div class="col-3">
                            <div class="single-about">
                                <div class="block-wrapper">
                                    <div class="about-content">
                                        <h5>Free Delivery</h5>
                                        <p>Free shipping on all order</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="single-about">
                                <div class="block-wrapper2">
                                    <div class="about-content">
                                        <h5>24*7 service</h5>
                                        <p>Support</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="single-about">
                                <div class="block-wrapper3">
                                    <div class="about-content">
                                        <h5>Daily new offers</h5>
                                        <p>for regular and new customers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="single-about not-border">
                                <div class="block-wrapper4">
                                    <div class="about-content">
                                        <h5>100% quality products</h5>
                                        <h5></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </div>
        <div class="container">
            <center>
                <h2><b>Our Process </h2></b>
            </center>

            <h2>1) Enrolling Farmers</h2>
            We enroll the farmers who are following Organic, ZBNF or Natural Farming practices after visiting their
            farms and enquiring, to confirm their genuineness.
            <h2>2) Booking Customer orders</h2>
            We place the list of products available with us along with the farmer details, on our website and app and
            take orders from customers from thursday to Monday(10.30am) for Wednesday delivery and from Monday to
            thursday (10.30am) for Saturday delivery.
            <h2>3) Procuring and Packing</h2>
            Based on customer orders we procure the products from the farmers every Tuesday and Friday. We pack the
            items orderwise and get them ready for delivery.
            <h2>4) Delivery</h2>
            We deliver the orders to our customers door step on every Wednesday and Saturday to make it convenient for
            them.


        </div>

        <div class="container-fluid">
            <center>

           
            <img src="https://api.time.com/wp-content/uploads/2017/04/time-health-stock-healthy-food.jpg?quality=85&w=1200&h=628&crop=1" alt="">
        </center>
        </div>
    

        </div>

        <div class="container-fluid">

            <h2>Why Should You Go Organic?</h2>
            Organic foods often have more beneficial nutrients, such as antioxidants, than their conventionally-grown
            counterparts and people with allergies to foods, chemicals, or preservatives may find their symptoms lessen
            or go away when they eat only organic foods. Organic produce contains fewer pesticides.
            <br><br>

            <h3>The benefits of organic food</h3>
            How your food is grown or raised can have a major impact on your mental and emotional health as well as the
            environment. Organic foods often have more beneficial nutrients, such as antioxidants, than their
            conventionally-grown counterparts and people with allergies to foods, chemicals, or preservatives may find
            their symptoms lessen or go away when they eat only organic foods.

            <br>
            <b>1) Organic produce contains fewer pesticides</b><br>
            Chemicals such as synthetic fungicides, herbicides, and insecticides are widely used in conventional
            agriculture and residues remain on (and in) the food we eat.

            <br>
            <b>2) Organic food is often fresher</b> because it doesn’t contain preservatives that make it last longer.
            Organic produce is sometimes (but not always, so watch where it is from) produced on smaller farms nearer to
            where it is sold.

            <br>
            <b>3) Organic farming tends to be better for the environment. </b>Organic farming practices may reduce
            pollution, conserve water, reduce soil erosion, increase soil fertility, and use less energy. Farming
            without synthetic pesticides is also better for nearby birds and animals as well as people who live close to
            farms.

            <br>
            <b>4) Organically raised animals are NOT given antibiotics, growth hormones, or fed animal byproducts.
            </b>Feeding livestock animal byproducts increases the risk of mad cow disease (BSE) and the use of
            antibiotics can create antibiotic-resistant strains of bacteria. Organically-raised animals tend to be given
            more space to move around and access to the outdoors, which help to keep them healthy.

            <br>
            <b>5) Organic meat and milk can be richer in certain nutrients.</b> Results of a 2016 European study show
            that levels of certain nutrients, including omega-3 fatty acids, were up to 50 percent higher in organic
            meat and milk than in conventionally raised versions.

            <br>
            <b>6) Organic food is GMO-free.</b> Genetically Modified Organisms (GMOs) or genetically engineered (GE)
            foods are plants whose DNA has been altered in ways that cannot occur in nature or in traditional
            crossbreeding, most commonly in order to be resistant to pesticides or produce an insecticide.
        </div>
        <br><br><br><br><br><br><br><br>
        <div class="container">

            <center>
                <h2> <b>Testimonials</b> </h2>
            </center>
        </div>



        <div id="carouselContent" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <p><i>Mangos are very tasty and noticed a clear difference between organic fruits and hybrid fruits.
                            Thanks to Himvalue for giving us such a tasty mangos this summer which are naturally grown,
                            am sure without these mangos summer is not completed</i></p>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>



 <!--Bestseller Product Start-->
                                        
        <section class="bestseller-product mb-55">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--Section Title1 Start-->
                        <div class="section-title1-border">
                            <div class="section-title1">
                                <h3>Category 1 and 2</h3>
                            </div>
                        </div>
                        <!--Section Title1 End-->
                    </div>
                </div>

                <!--Product Tab Start-->
                <div class="tab-content">
                    <div id="fresh-produce" class="tab-pane fade in active">
                        <div class="row">
                            <div class="bestseller-category3 mb-30  owl-carousel">
                                <!--Single Product Start-->
                                                                 <div class="col-md-12 item-col">
                                    <div class="single-product">
                                        <div class="product-img" style="min-height: 210px;min-height: 210px;">
                                            <a href="#">
                                            <img class="first-img" src="uploads/product1_1.jpg" alt="">
                                             
                                        </a>
                                                                                     <span class="sicker">5%</span>
                                                                                    <ul class="product-action">
                                                <li><a href="javascript:;"  title="Quick View" class="productinfo" 
                                                    data-id="15"
                                                    data-url="shop/product/product1_1.html" 
                                                    data-img="uploads/product1_1.jpg"
                                                    data-name="Product 1_1"
                                                    data-discount="5"
                                                    data-newprice="190"
                                                    data-oldprice="200"
                                                    data-detail="Product 1_1"
                                                    ><i class="ion-android-expand"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h2><a href="#">Product 1_1</a></h2>
                                            <div class="product-price">
                                                                                                <span class="old-price">200</span>
                                                <span class="new-price">190</span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                              <div class="col-md-12 item-col">
                                    <div class="single-product">
                                        <div class="product-img" style="min-height: 210px;min-height: 210px;">
                                            <a href="#">
                                            <img class="first-img" src="uploads/product1_2.jpg" alt="">
                                             
                                        </a>
                                                                                     <span class="sicker">5%</span>
                                                                                    <ul class="product-action">
                                                <li><a href="javascript:;"  title="Quick View" class="productinfo" 
                                                    data-id="14"
                                                    data-url="shop/product/product1_2.html" 
                                                    data-img="uploads/product1_2.jpg"
                                                    data-name="Product 1_2"
                                                    data-discount="5"
                                                    data-newprice="52.25"
                                                    data-oldprice="55"
                                                    data-detail="Product 1_2"
                                                    ><i class="ion-android-expand"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h2><a href="#">Product 1_2</a></h2>
                                            <div class="product-price">
                                                                                                <span class="old-price">55</span>
                                                <span class="new-price">52.25</span>
                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                             <div class="col-md-12 item-col">
                                    <div class="single-product">
                                        <div class="product-img" style="min-height: 210px;min-height: 210px;">
                                            <a href="#">
                                            <img class="first-img" src="uploads/product1_3.jpg" alt="">
                                             
                                        </a>
                                                                                     <span class="sicker">5%</span>
                                                                                    <ul class="product-action">
                                                <li><a href="javascript:;"  title="Quick View" class="productinfo" 
                                                    data-id="13"
                                                    data-url="shop/product/product1_3.html" 
                                                    data-img="uploads/product1_3.jpg"
                                                    data-name="Product 1_3"
                                                    data-discount="5"
                                                    data-newprice="188.1"
                                                    data-oldprice="198"
                                                    data-detail="Product 1_3"
                                                    ><i class="ion-android-expand"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h2><a href="#">Product 1_3</a></h2>
                                            <div class="product-price">
                                                                                                <span class="old-price">198</span>
                                                <span class="new-price">188.1</span>
                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="col-md-12 item-col">
                                    <div class="single-product">
                                        <div class="product-img" style="min-height: 210px;min-height: 210px;">
                                            <a href="#">
                                            <img class="first-img" src="uploads/product1_4.jpg" alt="">
                                             
                                        </a>
                                                                                     <span class="sicker">10%</span>
                                                                                    <ul class="product-action">
                                                <li><a href="javascript:;"  title="Quick View" class="productinfo" 
                                                    data-id="12"
                                                    data-url="shop/product/product1_4.html" 
                                                    data-img="uploads/product1_4.jpg"
                                                    data-name="Product 1_4"
                                                    data-discount="10"
                                                    data-newprice="171"
                                                    data-oldprice="190"
                                                    data-detail="Product 1_4"
                                                    ><i class="ion-android-expand"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h2><a href="#">Product 1_4</a></h2>
                                            <div class="product-price">
                                                                                                <span class="old-price">190</span>
                                                <span class="new-price">171</span>
                                                                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
 
                                                                <!--Single Product End-->
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!--Product Tab End-->
            </div>
        </section>
        <!--Bestseller Product End-->

                                                     
        <section class="bestseller-product mb-55">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--Section Title1 Start-->
                        <div class="section-title1-border">
                            <div class="section-title1">
                                <h3>Category 3 and 4</h3>
                            </div>
                        </div>
                        <!--Section Title1 End-->
                    </div>
                </div>

                <!--Product Tab Start-->
                <div class="tab-content">
                    <div id="Category 1" class="tab-pane fade in active">
                        <div class="row">
                            <div class="bestseller-category3 mb-30  owl-carousel">
                                <!--Single Product Start-->
                                                                                                   <div class="col-md-12 item-col">
                                    <div class="single-product">
                                        <div class="product-img" style="min-height: 210px;min-height: 210px;">
                                            <a href="#">
                                            <img class="first-img" src="uploads/product3_2.jpg" alt="">
                                             
                                        </a>
                                                                                     <ul class="product-action">
                                                <li><a href="javascript:;"  title="Quick View" class="productinfo" 
                                                    data-id="5"
                                                    data-url="shop/product/product3_2.html" 
                                                    data-img="uploads/product3_2.jpg"
                                                    data-name="Product 3_2"
                                                    data-discount="0"
                                                    data-newprice="320"
                                                    data-oldprice="320"
                                                    data-detail="Product 3_2"
                                                    ><i class="ion-android-expand"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h2><a href="#">Product 3_2</a></h2>
                                            <div class="product-price">
                                                                                                <span class="new-price">320</span>
                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="col-md-12 item-col">
                                    <div class="single-product">
                                        <div class="product-img" style="min-height: 210px;min-height: 210px;">
                                            <a href="#">
                                            <img class="first-img" src="uploads/product3_1.jpg" alt="">
                                             
                                        </a>
                                                                                     <ul class="product-action">
                                                <li><a href="javascript:;"  title="Quick View" class="productinfo" 
                                                    data-id="6"
                                                    data-url="shop/product/product3_1.html" 
                                                    data-img="uploads/product3_1.jpg"
                                                    data-name="Product 3_1"
                                                    data-discount="0"
                                                    data-newprice="175"
                                                    data-oldprice="175"
                                                    data-detail="Product 3_1"
                                                    ><i class="ion-android-expand"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h2><a href="#">Product 3_1</a></h2>
                                            <div class="product-price">
                                                                                                <span class="new-price">175</span>
                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="col-md-12 item-col">
                                    <div class="single-product">
                                        <div class="product-img" style="min-height: 210px;min-height: 210px;">
                                            <a href="#">
                                            <img class="first-img" src="uploads/product4_4.jpg" alt="">
                                             
                                        </a>
                                                                                     <ul class="product-action">
                                                <li><a href="javascript:;"  title="Quick View" class="productinfo" 
                                                    data-id="7"
                                                    data-url="shop/product/product4_4.html" 
                                                    data-img="uploads/product4_4.jpg"
                                                    data-name="Product 4_4"
                                                    data-discount="0"
                                                    data-newprice="120"
                                                    data-oldprice="120"
                                                    data-detail="Product 4_4"
                                                    ><i class="ion-android-expand"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h2><a href="#">Product 4_4</a></h2>
                                            <div class="product-price">
                                                                                                <span class="new-price">120</span>
                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="col-md-12 item-col">
                                    <div class="single-product">
                                        <div class="product-img" style="min-height: 210px;min-height: 210px;">
                                            <a href="#">
                                            <img class="first-img" src="uploads/product4_3.jpg" alt="">
                                             
                                        </a>
                                                                                     <ul class="product-action">
                                                <li><a href="javascript:;"  title="Quick View" class="productinfo" 
                                                    data-id="8"
                                                    data-url="shop/product/product4_3.html" 
                                                    data-img="uploads/product4_3.jpg"
                                                    data-name="Product 4_3"
                                                    data-discount="0"
                                                    data-newprice="60"
                                                    data-oldprice="60"
                                                    data-detail="Product 4_3"
                                                    ><i class="ion-android-expand"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h2><a href="#">Product 4_3</a></h2>
                                            <div class="product-price">
                                                                                                <span class="new-price">60</span>
                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="col-md-12 item-col">
                                    <div class="single-product">
                                        <div class="product-img" style="min-height: 210px;min-height: 210px;">
                                            <a href="#">
                                            <img class="first-img" src="uploads/product4_2.jpg" alt="">
                                             
                                        </a>
                                                                                     <ul class="product-action">
                                                <li><a href="javascript:;"  title="Quick View" class="productinfo" 
                                                    data-id="9"
                                                    data-url="shop/product/product4_2.html" 
                                                    data-img="uploads/product4_2.jpg"
                                                    data-name="Product 4_2"
                                                    data-discount="0"
                                                    data-newprice="120"
                                                    data-oldprice="120"
                                                    data-detail="Product 4_2"
                                                    ><i class="ion-android-expand"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h2><a href="#">Product 4_2</a></h2>
                                            <div class="product-price">
                                                                                                <span class="new-price">120</span>
                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="col-md-12 item-col">
                                    <div class="single-product">
                                        <div class="product-img" style="min-height: 210px;min-height: 210px;">
                                            <a href="#">
                                            <img class="first-img" src="uploads/product4_1.jpg" alt="">
                                             
                                        </a>
                                                                                     <ul class="product-action">
                                                <li><a href="javascript:;"  title="Quick View" class="productinfo" 
                                                    data-id="10"
                                                    data-url="shop/product/product4_1.html" 
                                                    data-img="uploads/product4_1.jpg"
                                                    data-name="Product 4_1"
                                                    data-discount="0"
                                                    data-newprice="220"
                                                    data-oldprice="220"
                                                    data-detail="Product 4_1"
                                                    ><i class="ion-android-expand"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h2><a href="#">Product 4_1</a></h2>
                                            <div class="product-price">
                                                                                                <span class="new-price">220</span>
                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                        
                                                                <!--Single Product End-->
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!--Product Tab End-->
            </div>
        </section>
        <!--Bestseller Product End-->

                             
            <section class="bestseller-product mb-55">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--Section Title1 Start-->
                        <div class="section-title1-border">
                            <div class="section-title1">
                                <h3>Featured Products</h3>
                            </div>
                        </div>
                        <!--Section Title1 End-->
                    </div>
                </div>

                <!--Product Tab Start-->
                <div class="tab-content">
                    <div id="featured" class="tab-pane fade in active">
                        <div class="row">
                            <div class="bestseller-category3 mb-30  owl-carousel">
                                <!--Single Product Start-->
                                                                <div class="col-md-12 item-col">
                                    <div class="single-product">
                                        <div class="product-img" style="min-height: 210px;min-height: 210px;">
                                            <a href="#">
                                            <img class="first-img" src="uploads/product2_2.jpg" alt="">
                                             
                                        </a>
                                                                                     <ul class="product-action">
                                                <li><a href="javascript:;"  title="Quick View" class="productinfo"
                                                    data-id="16"
                                                    data-url="shop/product/product2_2.html" 
                                                    data-img="uploads/product2_2.jpg"
                                                    data-name="Product 2_2"
                                                    data-discount="0"
                                                    data-newprice="200"
                                                    data-oldprice="200"
                                                    data-detail="Product 2_2"
                                                    ><i class="ion-android-expand"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h2><a href="#">Product 2_2</a></h2>
                                            <div class="product-price">
                                                                                                <span class="new-price">Rs 200/-</span>
                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="col-md-12 item-col">
                                    <div class="single-product">
                                        <div class="product-img" style="min-height: 210px;min-height: 210px;">
                                            <a href="#">
                                            <img class="first-img" src="uploads/product1_2.jpg" alt="">
                                             
                                        </a>
                                                                                     <span class="sicker">5%</span>
                                                                                    <ul class="product-action">
                                                <li><a href="javascript:;"  title="Quick View" class="productinfo"
                                                    data-id="14"
                                                    data-url="shop/product/product1_2.html" 
                                                    data-img="uploads/product1_2.jpg"
                                                    data-name="Product 1_2"
                                                    data-discount="5"
                                                    data-newprice="52.25"
                                                    data-oldprice="55"
                                                    data-detail="Product 1_2"
                                                    ><i class="ion-android-expand"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h2><a href="#">Product 1_2</a></h2>
                                            <div class="product-price">
                                                                                                <span class="old-price">Rs 55/-</span>
                                                <span class="new-price">Rs 52.25/-</span>
                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="col-md-12 item-col">
                                    <div class="single-product">
                                        <div class="product-img" style="min-height: 210px;min-height: 210px;">
                                            <a href="#">
                                            <img class="first-img" src="uploads/product1_4.jpg" alt="">
                                             
                                        </a>
                                                                                     <span class="sicker">10%</span>
                                                                                    <ul class="product-action">
                                                <li><a href="javascript:;"  title="Quick View" class="productinfo"
                                                    data-id="12"
                                                    data-url="shop/product/product1_4.html" 
                                                    data-img="uploads/product1_4.jpg"
                                                    data-name="Product 1_4"
                                                    data-discount="10"
                                                    data-newprice="171"
                                                    data-oldprice="190"
                                                    data-detail="Product 1_4"
                                                    ><i class="ion-android-expand"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h2><a href="#">Product 1_4</a></h2>
                                            <div class="product-price">
                                                                                                <span class="old-price">Rs 190/-</span>
                                                <span class="new-price">Rs 171/-</span>
                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                       
                                                                <div class="col-md-12 item-col">
                                    <div class="single-product">
                                        <div class="product-img" style="min-height: 210px;min-height: 210px;">
                                            <a href="#">
                                            <img class="first-img" src="uploads/product4_1.jpg" alt="">
                                             
                                        </a>
                                                                                     <ul class="product-action">
                                                <li><a href="javascript:;"  title="Quick View" class="productinfo"
                                                    data-id="10"
                                                    data-url="shop/product/product4_1.html" 
                                                    data-img="uploads/product4_1.jpg"
                                                    data-name="Product 4_1"
                                                    data-discount="0"
                                                    data-newprice="220"
                                                    data-oldprice="220"
                                                    data-detail="Product 4_1"
                                                    ><i class="ion-android-expand"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h2><a href="shop/product/product4_1.html">Product 4_1</a></h2>
                                            <div class="product-price">
                                                                                                <span class="new-price">Rs 220/-</span>
                                                                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                <div class="col-md-12 item-col">
                                    <div class="single-product">
                                        <div class="product-img" style="min-height: 210px;min-height: 210px;">
                                            <a href="shop/product/product4_3.html">
                                            <img class="first-img" src="uploads/product4_3.jpg" alt="">
                                             
                                        </a>
                                                                                     <ul class="product-action">
                                                <li><a href="javascript:;"  title="Quick View" class="productinfo"
                                                    data-id="8"
                                                    data-url="shop/product/product4_3.html" 
                                                    data-img="uploads/product4_3.jpg"
                                                    data-name="Product 4_3"
                                                    data-discount="0"
                                                    data-newprice="60"
                                                    data-oldprice="60"
                                                    data-detail="Product 4_3"
                                                    ><i class="ion-android-expand"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product-content">
                                            <h2><a href="shop/product/product4_3.html">Product 4_3</a></h2>
                                            <div class="product-price">
                                                                                                <span class="new-price">Rs 60/-</span>
                                                                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                <!--Single Product End-->
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!--Product Tab End-->
            </div>
        </section>
    <!--Modal Start-->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal Content Strat-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="modal-details">
                    <div class="row">
                        <!--Product Img Strat-->
                        <div class="col-md-5 col-sm-5">
                            <!--Product Tab Content Start-->
                            <div class="tab-content">
                                <div id="watch1" class="tab-pane fade in active">
                                    <div class="modal-img img-full">
                                        <img src="img/single-product/large/1.jpg" alt="">
                                    </div>
                                </div>
                               
                            </div>
                            <!--Product Tab Content End-->
                            
                        </div>
                        <!--Product Img End-->
                        <!-- Product Content Start-->
                        <div class="col-md-7 col-sm-7">
                            <div class="product-info">
                                <h2 class="title"></h2>
                                <div class="product-price">
                                    <span class="old-price"></span>
                                    <span class="new-price"></span>
                                </div>
                                <a href="#" class="see-all">See all features</a>
                                <div class="add-to-cart quantity">
                                    <form class="add-quantity" method="POST" action="http://himvalue.com/cart/add">
                                        <div class="quantity modal-quantity">
                                            <label>Quantity</label>
                                            <input type="number" name="quantity" value="1">
                                            <input type="hidden" name="product" id="product">
                                        </div>
                                        <div class="add-to-link">
                                            
                                        </div>
                                    </form>
                                </div>
                                <div class="cart-description">
                                    <p></p>
                                </div>
                                <div class="social-share">
                                    <h3>Share this product</h3>
                                    <ul class="socil-icon2">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--Product Content End-->
                    </div>
                </div>
            </div>
        </div>
        <!--Modal Content Strat-->
    </div>
</div>
<!--Modal End-->  
  
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
                                        <a href="index.php"><img src="img/footer-logo.png" width="33%" alt=""></a>
                                    </div>
                                    <!--Footer Logo End-->
                                    <!--Footer Content Start-->
                                    <div class="footer-content">
                                        <p class="text-dark"><strong>Project P2</strong></p>
                                        <div class="contact">
                                            <p>Project By Team </p><br/>
                                          
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
                                    
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About Us</a></li>
                                      <li><a href="near-by-attraction.php">Near By Attraction</a></li>
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
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About Us</a></li>
                                      <li><a href="near-by-attraction.php">Near By Attraction</a></li>
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
                             --><!--Single Footer End-->
                            <!--Single Footer Start-->
                            <div class="col-md-4 col-sm-6">
                                <div class="single-footer mt-30">
                                    <div class="footer-title">
                                      <h3>ADDRESS</h3>
                                    <p>Jaipur, Rajasthan<br/> India, Pin- 302033 </p>    
                                     <p><label>Phone:</label> +91-9462642837</p>
                                    <p><label>Email:</label>hupadhyay1005@gmail.com</a></p>
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
                                    <p>.</p>
                                </div>
                            </div>
<div class="col-md-6 col-sm-6" style="text-align: right;">
                                  <ul class="socil-icon">
                                        <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" title="Facebook"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" title="Google Plus"><i class="ion-social-googleplus"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" title="Youtube"><i class="ion-social-youtube"></i></a></li>
                                        
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
    <script src="js/main.js"></script><script type="text/javascript">
    $(".productinfo").click(function(event) {
        $("#myModal .title").text($(this).attr('data-name'));
        $("#myModal #watch1 img").attr('src',$(this).attr('data-img'));
        $("#myModal .see-all").attr('href',$(this).attr('data-url'));
        $("#myModal .cart-description p").text($(this).attr('data-detail'));
        $("#myModal #product").val($(this).attr('data-id'));
        var discount= parseInt($(this).attr('data-discount'));
        if (discount > 0) {
            $("#myModal .product-price .old-price").text("Rs "+$(this).attr('data-oldprice')+"/-");
            $("#myModal .product-price .new-price").text("Rs "+$(this).attr('data-newprice')+"/-");
        }else{
           $("#myModal .product-price .old-price").remove();
           $("#myModal .product-price .new-price").text("Rs "+$(this).attr('data-newprice')+"/-");
        }
        $("#myModal").modal("show");
    });
</script>
</body> 

</html>