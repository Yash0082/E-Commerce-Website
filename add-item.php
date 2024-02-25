<?php 

    // include('config/constants.php');
    
    if(isset($_GET['item_id']))
    {
        $item_id = $_GET['item_id'];
        
        $conn = mysqli_connect('localhost', 'root', 'root') or die(mysqli_error($conn));
        
        $db_select = mysqli_select_db($conn, 'ecommerce') or die(mysqli_error($conn));
        
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
        header('location:'.'http://localhost/E-Commerce-Website/');
    }



    
    $conn2 = mysqli_connect('localhost', 'root', 'root') or die(mysqli_error($conn2));
    
    $db_select2 = mysqli_select_db($conn2, 'ecommerce') or die(mysqli_error($conn2));
    
    $sql2 = "INSERT INTO cart SET 
        all_items_id = '$all_items_id',
        item_name = '$item_name',
        item_price = '$item_price'
    ";
    
    $res2 = mysqli_query($conn2, $sql2);
    
    if($res2==true)
    {
        $_SESSION['add'] = "Task Added Successfully.";
        
        header('location:'.'http://localhost/E-Commerce-Website/');
        
    }
    else
    {
        $_SESSION['add_fail'] = "Failed to Add Task";
        header('location:'.'http://localhost/E-Commerce-Website/'.'add-item.php');
    }

?>