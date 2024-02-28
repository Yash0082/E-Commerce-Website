<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H&Y</title>
    <link rel="icon" type="image/png" href="img/H_Y-removebg-preview.png">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <section id="header">
        <a href="index.php" class="logo"><img height="60px" src="img/H_Y-removebg-preview.png" alt="logo"></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a class="active" href="cart.html"><img width="24" height="24" src="https://img.icons8.com/wired/64/shopping-bag--v1.png" alt="shopping-bag--v1" /></a></li>
            </ul>
        </div>
    </section>

    <section id="page-header">
        <div class="con">
        <h1>#cart</h1>
        <p>Save more with coupones up to 60%</p>
        </div>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><img class="rem-btn" src="img/buttons/x-button.png" alt="Remove" ></a></td>
                    <td><img src="img/products/p1.jpg" alt=""></td>
                    <td>Lei of Aloha Midnight</td>
                    <td>$79.99</td>
                    <td><input type="number" value="1"></td>
                    <td>$79.99</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter your coupon" >
                <button class="normal"> Apply</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart Total</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$80</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$80</strong></td>
                </tr>
                                
            </table>
            <button class="normal">Proceed to checkout</button

        </div>
    </section>

    <section id= "newsletter" class=" section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for Newsletter</h4>
            <p>Get E-mail update about  our latestt shop and <span>Special Offers.</span></p>
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
    