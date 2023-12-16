<?php 
include 'database/database-helper.php';
include ("includes/session.php"); 

$productId = $_GET["id"];
$customerId = $_SESSION['SESSION_ID'];
?>
<!-- <script>
  alert("<?php echo $_SESSION['SESSION_ID'] ?>")
<script> -->

<?php

$sql = "SELECT MAX(order_id) as max_id FROM orders;";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)==0){
    $id = 1;
}
else{
    $row = mysqli_fetch_assoc($result);
    $id = $row['max_id'] + 1;
}

$sqlQ = "SELECT * FROM orders WHERE customer_id='$customerId' AND product_id='$productId' AND status='pending';";
$result = mysqli_query($conn,$sqlQ) or die("Query Failed");

if(mysqli_num_rows($result)==0){
  $quantity = 1;
  $sql1 = "INSERT INTO orders (order_id, customer_id, product_id, quantity)
  VALUES ('$id', '$customerId', '$productId', '$quantity')";
}
else{
  $row = mysqli_fetch_assoc($result);
  $quantity = $row['quantity'] + 1;
  echo $quantity;
  $orderId = $row['order_id'];
  $sql1 = "UPDATE orders SET quantity ='$quantity' WHERE order_id = '$orderId'";

}


if (mysqli_query($conn, $sql1)) {
?>

  <script>
    alert("Item Added to Cart");
    location.href = 'menu.php';
  </script>

<?php

} else {
  echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}

?>