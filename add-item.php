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

        // if($res2==true)
        // {
        //     $_SESSION['add'] = "Task Added Successfully.";
            
        //     header('location:'.SITEURL);
            
        // }
        // else
        // {
        //     $_SESSION['add_fail'] = "Failed to Add Task";
        //     header('location:'.SITEURL.'add-item.php');
        // }
    } 
    else {
        // If the value does not exist, insert a new row
        $sql2 = "INSERT INTO cart SET 
        all_items_id = '$all_items_id',
        item_name = '$item_name',
        item_price = '$item_price'
        ";
    
        $res2 = mysqli_query($conn2, $sql2);

        // if($res2==true)
        // {
        //     $_SESSION['add'] = "Task Added Successfully.";
            
        //     header('location:'.SITEURL);
            
        // }
        // else
        // {
        //     $_SESSION['add_fail'] = "Failed to Add Task";
        //     header('location:'.'http://localhost/E-Commerce-Website/'.'add-item.php');
        // }
    }

?>
