<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H&Y</title>
    <link rel="icon" type="image/png" href="img/H_Y-removebg-preview.png">
    <link rel="stylesheet" href="style.css">


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
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="cart.php"><img width="24" height="24" src="https://img.icons8.com/wired/64/shopping-bag--v1.png" alt="shopping-bag--v1" /></a></li>
            </ul>
        </div>
    </section>

    <section id="hero">
        <div class="con">
            <h4>Trade-in-offer</h4>
            <h2>Super valued deals</h2>
            <h1>On all products</h1>
            <p>Save more with coupones &up to 60%</p>
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
                <img class="product" src="img/products/p1.jpg" alt="shirt">
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
                    <h4>$79.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<? //php echo "http://localhost/E-Commerce-Website/"; 
                                ?>add-item.php?item_id=<? //php echo $item_id; 
                                                        ?>"><img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->





                <!-- Trying out feature -->
                <img class="cart" src="img/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">
                <!-- Trying out feature -->




            </div>

            <div class="pro">
                <?php $item_id = 2; ?>
                <img class="product" src="img/products/p2.jpg" alt="shirt">
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
                    <h4>$79.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<?//php echo "http://localhost/E-Commerce-Website/"; ?>add-item.php?item_id=<?//php echo $item_id; ?>">    <img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->

                <img class="cart" src="img/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">
            </div>

            <div class="pro">
                <?php $item_id = 3; ?>
                <img class="product" src="img/products/p3.jpg" alt="shirt">
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
                    <h4>$79.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<?//php echo "http://localhost/E-Commerce-Website/"; ?>add-item.php?item_id=<?//php echo $item_id; ?>"><img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->
                <img class="cart" src="img/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">

            </div>

            <div class="pro">
                <?php $item_id = 4; ?>
                <img class="product" src="img/products/p4.jpg" alt="shirt">
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
                    <h4>$79.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<?//php echo "http://localhost/E-Commerce-Website/"; ?>add-item.php?item_id=<?//php echo $item_id; ?>"><img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->
                <img class="cart" src="img/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">
            </div>

            <div class="pro">
                <?php $item_id = 5; ?>
                <img class="product" src="img/products/p5.jpg" alt="shirt">
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
                    <h4>$79.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<?//php echo "http://localhost/E-Commerce-Website/"; ?>add-item.php?item_id=<?//php echo $item_id; ?>"><img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->
                <img class="cart" src="img/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">
            </div>

            <div class="pro">
                <?php $item_id = 6; ?>
                <img class="product" src="img/products/p6.jpg" alt="shirt">
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
                    <h4>$79.99</h4>
                </div>
                <!-- <a href="#"><img class="cart" src="img/add-to-cart.png" alt="add-to cart" ></a> -->
                <!-- <a href="<?//php echo "http://localhost/E-Commerce-Website/"; ?>add-item.php?item_id=<?//php echo $item_id; ?>"><img class="cart" src="img/add-to-cart.png" alt="add-to cart"></a> -->
                <img class="cart" src="img/add-to-cart.png" alt="add-to cart" id="image" onclick="passData(<?php echo $item_id; ?>)">
            </div>
        </div>
    </section>

    <section id = "banner" class="section-m1">
        <h4>Rewards</h4>
        <h1>Claim your free trip to <span>HAWAI</span>!</h1>
        <button class="normal">Know More</button>
    </section>

    <script src="script.js"></script>
</body>

</html>