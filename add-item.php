<?php

include('config/constants.php');
if (isset($_POST['item_id'])) {
    $item_id = $_POST['item_id'];

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));

    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));

    $sql = "SELECT * FROM all_items WHERE item_id=$item_id";

    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        while ($row = mysqli_fetch_assoc($res)) {
            $all_items_id = $row['item_id'];
            $item_name = $row['item_name'];
            $item_price = $row['item_price'];
        }

        $conn2 = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn2));

        $db_select2 = mysqli_select_db($conn2, DB_NAME) or die(mysqli_error($conn2));
    
    
        // Check if the value already exists in all_items_id col
        $query = "SELECT * FROM cart WHERE all_items_id = '$item_id'";
        $result = mysqli_query($conn, $query);
    
        if (mysqli_num_rows($result) > 0) {
            // If the value exists, update item_quantity col
            $update_query = "UPDATE cart SET item_quantity = item_quantity+1 WHERE all_items_id = '$item_id'";
            $res1 = mysqli_query($conn, $update_query);
        } else {
            // If the value does not exist, insert a new row
            $sql2 = "INSERT INTO cart SET 
            all_items_id = '$all_items_id',
            item_name = '$item_name',
            item_price = '$item_price'
            ";
    
            $res2 = mysqli_query($conn2, $sql2);
        }
    }
    else{
        echo "Item not in the database yet!";
    }


}






//check if quantity is updated in cart.php
if (isset($_POST['quantity'])) {
    $item_quantiti = $_POST['quantity'];
    $conn2 = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysqli_error($conn2));
    $query2 = "UPDATE cart SET item_quantity = $item_quantiti WHERE all_items_id = '$item_id'";
    $result2 = mysqli_query($conn2, $query2);
}


// Update subtotal of items
// Calculate the total value of items in the cart
if (isset($_GET['subtotal_item_id'])) {
    $subtotal_item_id = $_GET['subtotal_item_id'];
    $quantity = $_GET['quantity'];

    $conn3 = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysqli_error($conn3));
    $sql3 = "SELECT ROUND(item_price * $quantity, 2) AS subtotal FROM cart WHERE item_id = '$subtotal_item_id'";
    $res3 = mysqli_query($conn3, $sql3);

    if (mysqli_num_rows($res3) > 0) {
        $row = mysqli_fetch_assoc($res3);
        $subtotalValue = $row["subtotal"];
        echo $subtotalValue;
    } else {
        echo "0";
    }
}

if (isset($_GET['total'])) {
    $conn4 = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysqli_error($conn4));
    $sql4 = "SELECT SUM(ROUND((item_price * item_quantity),2)) AS totalValue FROM cart";
    $res4 = mysqli_query($conn4, $sql4);

    if ($res4 && mysqli_num_rows($res4) > 0) {
        $row = mysqli_fetch_assoc($res4);
        $totalValue = $row["totalValue"];
        echo $totalValue;
    } else {
        echo "0";
    }
}
?>