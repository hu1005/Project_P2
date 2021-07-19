<?php
include("header3.php");
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5 ">
                <h1> MY CART</h1>

            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th> </th>

                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php

                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $sr = $key + 1;


                                echo "
                                <tr>
                                <td>$sr</td>
                                <td>$value[Item_Name]</td>
                                <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>

                                
                                <td>
                                   <form action='manage_cart.php' method='POST'>

                                   <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                                   <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                   </form>

                                   
                                   </td>
                                <td class='itotal'></td>

                                <td>
                                <form action='manage_cart.php' method='POST'>

                                <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                </form>
                                </td>
                               

                                
                                
                                </tr>
                                ";
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Grand Total:</h4>
                    <h5 class="text-right" id="gtotal"></h5>
                    <br>

                    <form>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Pay via UPI
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Cash On Delivery
                            </label>
                        </div>
                        <br>

                        <button type="button" class="btn btn-link">
                        <a href="checkout1.html">Make Purchase</a>        
                    </button>
                        
                            
                       
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script>
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');



        function subTotal() {
            gt = 0;
            for (i = 0; i < iprice.length; i++) {
                itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
                gt = gt + (iprice[i].value) * (iquantity[i].value);

            }
            gtotal.innerText = gt;

        }

        subTotal();
    </script>

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
                                        <a href="index-2.html"><img src="assets/img/footer-logo.png" width="33%"
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
                                        <p>Kotabagh, Nainital, Uttarakhand<br /> India, Pin- 263159 </p>
                                        <p><label>Phone:</label> +91-7248383768</p>
                                        <p><label>Phone:</label> +91-7300859006</p>
                                        <p><label>Email:</label> info@himvalue.com</a></p>
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
                                    <p>Copyright © 2018-2019 <a href="https://acewebcreations.com/"
                                            target="_blank">Aceweb Creations</a>, All Rights Reserved.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6" style="text-align: right;">
                                <ul class="socil-icon">
                                    <li><a href="#" data-toggle="tooltip" title="Twitter"><i
                                                class="ion-social-twitter"></i></a></li>
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
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <!--Imagesloaded-->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!--Isotope-->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!--Ui js-->
        <script src="assets/js/jquery-ui.min.js"></script>
        <!--Countdown-->
        <script src="assets/js/jquery.countdown.min.js"></script>
        <!--Counterup-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!--ScrollUp-->
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <!--Chosen js-->
        <script src="assets/js/chosen.jquery.js"></script>
        <!--Meanmenu js-->
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <!--Instafeed-->
        <script src="assets/js/instafeed.min.js"></script>
        <!--EasyZoom-->
        <script src="assets/js/easyzoom.min.js"></script>
        <!--Fancybox-->
        <script src="assets/js/jquery.fancybox.pack.js"></script>
        <!--Nivo Slider-->
        <script src="assets/js/jquery.nivo.slider.js"></script>
        <!--Waypoints-->
        <script src="assets/js/waypoints.min.js"></script>
        <!--Carousel-->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!--Slick-->
        <script src="assets/js/slick.min.js"></script>
        <!--Wow-->
        <script src="assets/js/wow.min.js"></script>
        <!--Bootstrap-->
        <script src="assets/js/bootstrap.min.js"></script>
        <!--Plugins-->
        <script src="assets/js/plugins.js"></script>
        <!--Main Js-->
        <script src="assets/js/main.js"></script>



</body>

</html>