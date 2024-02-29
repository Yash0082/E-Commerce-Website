<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H&Y</title>
    <link rel="icon" type="image/png" href="img/H_Y-removebg-preview.png">
    <link rel="stylesheet" href="style.css">

    <script>
        // Script for updating cart items
        function updateItem(itemId, quantity) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "add-item.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText); // Output: Response from add-item.php
                }
            };
            xhr.send("item_id=" + itemId + "&quantity=" + quantity);
        }

        // Script for Deleting items
        function deleteItem(item_id) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "delete-item.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText); // Output: Response from delete-item.php
                    // Remove the item from the page
                    var item = document.getElementById("item-" + item_id);
                    if (item) {
                        item.remove();
                    }
                }
            };
            xhr.send("item_id=" + item_id);
        }

        //Script to update subtotal
        function updateSubtotal(itemId) {
            var quantity = document.getElementById("quantity-" + itemId).value;
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "add-item.php?subtotal_item_id=" + itemId + "&quantity=" + quantity, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var subtotalValue = xhr.responseText;
                    document.getElementById("subtotal-" + itemId).innerHTML = "₹" + subtotalValue;
                }
            };
            xhr.send();
        }

        //Script to update total
        function updateTotal() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "add-item.php?total=true", true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var totalValue = xhr.responseText;
                    document.getElementById("totalPrice").innerHTML = "₹" + totalValue;
                    console.log(totalValue);
                }
            };
            xhr.send();
            // console.log(totalValue);
        }
    </script>

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
                <li><a class="active" href="cart.php"><img width="24" height="24" src="https://img.icons8.com/wired/64/shopping-bag--v1.png" alt="shopping-bag--v1" /></a></li>
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
                <!-- --------------------------------------------------- -->


                <?php
                include('config/constants.php');
                //Connect Database
                $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));

                $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));

                $sql = "SELECT * FROM cart";

                $res = mysqli_query($conn, $sql);

                if ($res == true) {
                    $count_rows = mysqli_num_rows($res);

                    $sn = 1;

                    if ($count_rows > 0) {
                        while ($row = mysqli_fetch_assoc($res)) {
                            $item_id = $row['item_id'];
                            $all_items_id = $row['all_items_id'];
                            $item_name = $row['item_name'];
                            $item_price = $row['item_price'];
                            $item_quantity = $row['item_quantity'];
                ?>

                            <tr id="item-<?php echo $item_id ?>">
                                <td><img class="rem-btn" src="img/buttons/x-button.png" alt="Remove" onclick="deleteItem(<?php echo $item_id; ?>)"></a></td>
                                <td><img src="img/products/<?php echo $all_items_id; ?>.jpg" alt=""></td>
                                <td><?php echo $item_name; ?></td>
                                <td><?php echo "₹" . $item_price; ?></td>
                                <td><input type="number" id="quantity-<?php echo $item_id; ?>" value="<?php echo $item_quantity; ?>" min="1" onchange="updateItem(<?php echo $all_items_id; ?>, this.value); updateSubtotal(<?php echo $item_id; ?>); updateTotal()"></td>
                                <td id="subtotal-<?php echo $item_id; ?>"><?php echo "₹" . $item_price * $item_quantity; ?></td>
                            </tr>

                        <?php
                        }
                    } else {
                        ?>

                        <tr>
                            <td colspan="5">No Item Added Yet.</td>
                        </tr>

                <?php
                    }
                }

                ?>


                <!-- ------------------------------------------------------------- -->
                <!-- Static item values -->
                <!-- <tr>
                    <td><a href="#"><img class="rem-btn" src="img/buttons/x-button.png" alt="Remove"></a></td>
                    <td><img src="img/products/1.jpg" alt=""></td>
                    <td>Lei of Aloha Midnight</td>
                    <td>$79.99</td>
                    <td><input type="number" value="1"></td>
                    <td>$79.99</td>
                </tr> -->
                <!-- Static item values -->

            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter your coupon">
                <button class="normal"> Apply</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart Total</h3>
            <table>
                <?php 
                    $conn2 = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysqli_error($conn2));
                    $sql2 = "SELECT SUM(ROUND((item_price * item_quantity),2)) AS totalValue FROM cart"; 
                    $res2 = mysqli_query($conn2, $sql2);

                    if($res2 && (mysqli_num_rows($res2))>0)
                    {
                        $row = mysqli_fetch_assoc($res2);
                        $totalValue = $row['totalValue'];
                ?>
                <tr>
                    <td>Cart Subtotal</td>
                    <td id="totalPrice">₹<?php echo round($totalValue, 2); ?></td>
                </tr>

                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>₹<?php echo round($totalValue); ?></strong></td>
                </tr>
                <?php 
                    }
                    ?>
            </table>
            <button class="normal">Proceed to checkout</button>

        </div>
    </section>
    <script src="script.js"></script>

</body>

</html>