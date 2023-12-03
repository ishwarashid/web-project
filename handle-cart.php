<?php include 'database/database-helper.php';

$productId = $_POST["id"];
$sql = "SELECT customer_id FROM customers";
$result = $conn->query($sql);

?>