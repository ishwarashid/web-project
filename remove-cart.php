<?php 
include 'database/database-helper.php';
include ("includes/session.php"); 

$orderId = $_GET["id"];

$sql = "DELETE FROM orders WHERE order_id='$orderId';";

if (mysqli_query($conn, $sql)) {
?>

    <script>
        location.href = 'cart.php';

   </script>

<?php

} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

?>