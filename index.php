<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H&Y</title>
    <link rel="icon" type="image/png" href="img/H_Y-removebg-preview.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



    <!-- New Script to add to cart w/o redirecting to add-item.php -->
    <script>
        function passData(item_id) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "add-item.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText); // Output: your_data_to_pass
                }
            };
            xhr.send("item_id=" + encodeURIComponent(item_id));
        }
    </script>
    <!-- New Script to add to cart w/o redirecting to add-item.php -->


</head>

<body>
    <section id="header">
        <a href="index.php" class="logo"><img height="60px" src="img/H_Y-removebg-preview.png" alt="logo"></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="index.php">Shop</a></li>
                <li><a href="index.php">About</a></li>
                <li><a href="index.php">Contact Us</a></li>
                <li id="lg-bag"><a href="cart.php"><img width="24" height="24" src="https://img.icons8.com/wired/64/shopping-bag--v1.png" alt="shopping-bag--v1" /></a></li>
                <a href="#" id="close"><img height = "20" src="img/buttons/cancel.png" alt="cancel" ></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><img width="24" height="24" src="https://img.icons8.com/wired/64/shopping-bag--v1.png" alt="shopping-bag--v1" /></a>
            <i id="bar" class ="fas fa-outdent"></i>
        </div>
    </section>

    <section id="hero">
        <div class="con">
            <h4>Trade-in-offer</h4>
            <h2>Super valued deals</h2>
            <h1>On all products</h1>
            <p>Save more with coupons & upto 60%</p>
            <button>Shop Now</button>
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/feature/free-shipping.png" alt="free-shipping">
            <h5>Free Shipping</h5>
        </div>

        <div class="fe-box">
            <img src="img/feature/fast-delivery.png" alt="fast-delivery">
            <h5>Fast Delivery</h5>
        </div>

        <div class="fe-box">
            <img src="img/feature/cash-on-delivery.png" alt="cash-on-delivery">
            <h5>Cash On Delivery</h5>
        </div>

        <div class="fe-box">
            <img src="img/feature/value-for-money.png" alt="value-for-money">
            <h5>Value for Money</h5>
        </div>

        <div class="fe-box">
            <img src="img/feature/24-hours-support.png" alt="24-hours-support">
            <h5>24 Hour Support</h5>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Summer Collection is here !</h2>
        <p>Special Hawaiian Collection is here with great discount!!</p>
        <div class="pro-container">
            <div class="pro">
                <?php $item_id = 1; ?>
                <img class="product" src="img/products/<?php echo $item_id; ?>.jpg" alt="shirt">
                <div class="des">
                    <span>H&Y</span>
                    <h5>Lei of Aloha Midnight</h5>
                    <div class="star">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                    </div>
                    <h4>₹79.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<? //php echo "http://localhost/E-Commerce-Website/"; 
                                ?>add-item.php?item_id=<? //php echo $item_id; 
                                                        ?>"><img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->





                <!-- Trying out feature -->
                <img class="cart" src="img/buttons/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">
                <!-- Trying out feature -->




            </div>

            <div class="pro">
                <?php $item_id = 2; ?>
                <img class="product" src="img/products/<?php echo $item_id; ?>.jpg" alt="shirt">
                <div class="des">
                    <span>H&Y</span>
                    <h5>Kahala Hibiscus Navy</h5>
                    <div class="star">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                    </div>
                    <h4>₹79.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<?//php echo "http://localhost/E-Commerce-Website/"; ?>add-item.php?item_id=<?//php echo $item_id; ?>">    <img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->

                <img class="cart" src="img/buttons/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">
            </div>

            <div class="pro">
                <?php $item_id = 3; ?>
                <img class="product" src="img/products/<?php echo $item_id; ?>.jpg" alt="shirt">
                <div class="des">
                    <span>H&Y</span>
                    <h5>Flamingo Island Blue</h5>
                    <div class="star">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                    </div>
                    <h4>₹79.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<?//php echo "http://localhost/E-Commerce-Website/"; ?>add-item.php?item_id=<?//php echo $item_id; ?>"><img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->
                <img class="cart" src="img/buttons/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">

            </div>

            <div class="pro">
                <?php $item_id = 4; ?>
                <img class="product" src="img/products/<?php echo $item_id; ?>.jpg" alt="shirt">
                <div class="des">
                    <span>H&Y</span>
                    <h5>Kahala Hibiscus White</h5>
                    <div class="star">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                    </div>
                    <h4>₹79.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<?//php echo "http://localhost/E-Commerce-Website/"; ?>add-item.php?item_id=<?//php echo $item_id; ?>"><img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->
                <img class="cart" src="img/buttons/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">
            </div>

            <div class="pro">
                <?php $item_id = 5; ?>
                <img class="product" src="img/products/<?php echo $item_id; ?>.jpg" alt="shirt">
                <div class="des">
                    <span>H&Y</span>
                    <h5>Kahala Hibiscus Yellow</h5>
                    <div class="star">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                    </div>
                    <h4>₹79.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<?//php echo "http://localhost/E-Commerce-Website/"; ?>add-item.php?item_id=<?//php echo $item_id; ?>"><img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->
                <img class="cart" src="img/buttons/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">
            </div>

            <div class="pro">
                <?php $item_id = 6; ?>
                <img class="product" src="img/products/<?php echo $item_id; ?>.jpg" alt="shirt">
                <div class="des">
                    <span>H&Y</span>
                    <h5>Lei of Aloha Sky</h5>
                    <div class="star">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                    </div>
                    <h4>₹79.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<?//php echo "http://localhost/E-Commerce-Website/"; ?>add-item.php?item_id=<?//php echo $item_id; ?>"><img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->
                <img class="cart" src="img/buttons/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">
            </div>
        </div>
    </section>

    <section id = "banner" class="section-m1">
        <h4>Rewards</h4>
        <h1>Claim your free trip to <span>HAWAI</span>!</h1>
        <button class="normal">Know More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Special Hawaiian Collection is here with great discount!!</p>
        <div class="pro-container">
            <div class="pro">
                <?php $item_id = 7; ?>
                <img class="product" src="img/products/<?php echo $item_id; ?>.jpg" alt="shirt">
                <div class="des">
                    <span>H&Y</span>
                    <h5>Palm Shorts</h5>
                    <div class="star">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                    </div>
                    <h4>₹179.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<? //php echo "http://localhost/E-Commerce-Website/"; 
                                ?>add-item.php?item_id=<? //php echo $item_id; 
                                                        ?>"><img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->





                <!-- Trying out feature -->
                <img class="cart" src="img/buttons/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">
                <!-- Trying out feature -->




            </div>

            <div class="pro">
                <?php $item_id = 8; ?>
                <img class="product" src="img/products/<?php echo $item_id; ?>.jpg" alt="shirt">
                <div class="des">
                    <span>H&Y</span>
                    <h5>White Flower Shorts</h5>
                    <div class="star">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                    </div>
                    <h4>₹149.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<?//php echo "http://localhost/E-Commerce-Website/"; ?>add-item.php?item_id=<?//php echo $item_id; ?>">    <img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->

                <img class="cart" src="img/buttons/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">
            </div>

            <div class="pro">
                <?php $item_id = 9; ?>
                <img class="product" src="img/products/<?php echo $item_id; ?>.jpg" alt="shirt">
                <div class="des">
                    <span>H&Y</span>
                    <h5>Island Blue shorts</h5>
                    <div class="star">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                    </div>
                    <h4>₹199.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<?//php echo "http://localhost/E-Commerce-Website/"; ?>add-item.php?item_id=<?//php echo $item_id; ?>"><img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->
                <img class="cart" src="img/buttons/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">

            </div>

            <div class="pro">
                <?php $item_id = 10; ?>
                <img class="product" src="img/products/<?php echo $item_id; ?>.jpg" alt="shirt">
                <div class="des">
                    <span>H&Y</span>
                    <h5>Grey Vintage Hat</h5>
                    <div class="star">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                    </div>
                    <h4>₹179.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<?//php echo "http://localhost/E-Commerce-Website/"; ?>add-item.php?item_id=<?//php echo $item_id; ?>"><img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->
                <img class="cart" src="img/buttons/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">
            </div>

            <div class="pro">
                <?php $item_id = 11; ?>
                <img class="product" src="img/products/<?php echo $item_id; ?>.jpg" alt="shirt">
                <div class="des">
                    <span>H&Y</span>
                    <h5>Brown with Gold Hat</h5>
                    <div class="star">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                    </div>
                    <h4>₹199.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<?//php echo "http://localhost/E-Commerce-Website/"; ?>add-item.php?item_id=<?//php echo $item_id; ?>"><img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->
                <img class="cart" src="img/buttons/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">
            </div>

            <div class="pro">
                <?php $item_id = 12; ?>
                <img class="product" src="img/products/<?php echo $item_id; ?>.jpg" alt="shirt">
                <div class="des">
                    <span>H&Y</span>
                    <h5>Beige with Silver Feather</h5>
                    <div class="star">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                        <img src="img/star.png" alt="star" height="15px">
                    </div>
                    <h4>₹279.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<?//php echo "http://localhost/E-Commerce-Website/"; ?>add-item.php?item_id=<?//php echo $item_id; ?>"><img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->
                <img class="cart" src="img/buttons/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">
            </div>
        </div>
    </section>

    <section id="sm-banner" class = "section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress i on sales at H&Y</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Love Season</h4>
            <h2>Valentine's Offer</h2>
            <span>The best classic dress for Valentines</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id = "banner3">
        <div class="banner-box">
            <h2>SEASON SALE</h2>
            <h3> Summer Collection -40% OFF</h3>
        </div>

        <div class="banner-box b2">
            <h2>New Beach Collection</h2>
            <h3> Beach Collection -50% OFF</h3>
        </div>

        <div class="banner-box b3">
            <h2>SEASON SALE is LIVE!!</h2>
            <h3> Huge Discount upto -70% OFF</h3>
        </div>

    </section>

    <section id= "newsletter" class=" section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for Newsletter</h4>
            <p>Get E-mail update about  our latest shop and <span>Special Offers.</span></p>
        </div>

        <div class="form">
            <input type="text" placeholder = "Your E-mail address">
            <button class="normal"> Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/H_Y-removebg-preview.png" alt="logo" >
            <h4>Contact</h4>
            <p><strong>Address</strong>: galli no. 3 Kisiko bhi pucho ghar tak chhodte</p>
            <p><strong>Phone</strong>:+92 54835 93832/(+91) 54324 99479</p>
            <p><strong>Hours</strong>: 10:00 - 18:00, Mon - Saturday</p>
            
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>

        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#" > About Us</a>
            <a href="#" > Delivery Information</a>
            <a href="#" > Privacy Policy</a>
            <a href="#" > Terms and Conditions</a>
            <a href="#" > Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#" > Sign in</a>
            <a href="#" > View Cart</a>
            <a href="#" > My Wishlist</a>
            <a href="#" > Track My Order</a>
            <a href="#" > Help</a>
        </div>

        <div class="col install">
            <h4> Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/install/gogl-logo.png" alt="google-play" width="248px">
                <img src="img/install/apl-logo.png" alt="apple-store" width="248px">
            </div>
            <p>Secured Payment Gateways</p>
            <img class="pg" src="img/install/pg1.png" alt="payment-gateways">
        </div>
        <div class="copyright">
            <p>&copy; 2023, H&Y </p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>