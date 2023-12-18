<?php 
include 'database/database-helper.php';
include ("includes/session.php"); 

$phone = $_POST["phone"];
$address = $_POST["address"];
$customerId = $_SESSION['SESSION_ID'];
date_default_timezone_set("Asia/Karachi");
$date = date("Y-m-d");
$time = date("h:i:sa");

$sql = "UPDATE customers SET contact='$phone', address='$address' WHERE customer_id='$customerId'";
$result = mysqli_query($conn, $sql);
if ($result) {

    $sql = "UPDATE orders SET status ='placed', date='$date', time='$time' WHERE customer_id='$customerId' AND status='pending'";
    $res = mysqli_query($conn, $sql);
    if($res){
    ?>

        <script>
            location.href = 'cart.php';
            alert("Order Placed!");
        </script>

    <?php


    }
  
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}


?>