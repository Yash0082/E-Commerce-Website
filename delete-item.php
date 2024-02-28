<?php
include('config/constants.php');
// delete-item.php
if (isset($_POST['item_id'])) {
    // Delete item from the database based on item_id
    $item_id = $_POST['item_id'];

    // SQL connection 
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysqli_error($conn));

    //query
    $sql = "DELETE FROM cart WHERE item_id = $item_id";

    //run query and store it in a result variable
    $res = mysqli_query($conn, $sql);

    echo "Item deleted successfully";
} else {
    echo "Error: No item_id provided";
}
?>