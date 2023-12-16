<?php 
include 'database/database-helper.php';
include ("includes/session.php"); 

$customerId = $_SESSION['SESSION_ID'];

$sql = "UPDATE orders SET status='placed' WHERE customer_id='$customerId'";

if (mysqli_query($conn, $sql)) {
    header("Location: cart.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

?>