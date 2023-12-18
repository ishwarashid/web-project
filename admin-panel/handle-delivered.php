<?php 
include("includes/session.php");
include '../database/database-helper.php';

$orderID = $_POST["delivered"];
date_default_timezone_set("Asia/Karachi");
$date = date("Y-m-d");
$time = date("h:i:sa");

$sql = "UPDATE orders SET status='delivered', date='$date', time='$time' WHERE order_id='$orderID'";
$result = mysqli_query($conn, $sql);
if ($result) {

    ?>

        <script>
            location.href = 'front-orders.php';
            alert("Order Delivered!");
        </script>

    <?php
  
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}


?>