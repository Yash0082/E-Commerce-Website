<!-- <html>
    <script>
            
            function update_subtotal(quantity) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "cart.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText); // Output: Response from add-item.php
                }
            };
            xhr.send("quantity=" + quantity);
        }
    </script>
</html> -->
<?php 

    include('config/constants.php');
    if(isset($_POST['item_id']))
    {
        $item_id = $_POST['item_id'];

        $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));
        
        $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));
        
        $sql = "SELECT * FROM all_items WHERE item_id=$item_id";
        
        $res = mysqli_query($conn, $sql);
        
        if($res==true)
        {
            while($row=mysqli_fetch_assoc($res))
            {
                $all_items_id = $row['item_id'];
                $item_name = $row['item_name'];
                $item_price = $row['item_price'];
            }
        }
        
    }
    else
    {
        header('location:'.SITEURL);
    }



    
    $conn2 = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn2));
    
    $db_select2 = mysqli_select_db($conn2, DB_NAME) or die(mysqli_error($conn2));
    

    // Check if the value already exists in all_items_id col
    $query = "SELECT * FROM cart WHERE all_items_id = '$item_id'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        // If the value exists, update item_quantity col
        $update_query = "UPDATE cart SET item_quantity = item_quantity+1 WHERE all_items_id = '$item_id'";
        $res1 = mysqli_query($conn, $update_query);
    } 
    else {
        // If the value does not exist, insert a new row
        $sql2 = "INSERT INTO cart SET 
        all_items_id = '$all_items_id',
        item_name = '$item_name',
        item_price = '$item_price'
        ";
    
        $res2 = mysqli_query($conn2, $sql2);

    }

    //check if quantity is updated in cart.php
    if(isset($_POST['quantity']))
    {
        $item_quantiti = $_POST['quantity'];
        $query2 = "UPDATE cart SET item_quantity = $item_quantiti WHERE all_items_id = '$item_id'";
        $result2 = mysqli_query($conn, $query2);
    }
    

?>
