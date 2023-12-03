<?php 
include("includes/session.php");
include '../database/database-helper.php';
$name = $_POST["itemName"];
$price = $_POST["itemPrice"];
$desc = $_POST["itemDesc"];
$category = $_POST["category"];

$sql = "SELECT MAX(product_id) AS max FROM products;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$itemID = $row["max"] + 1;

$sql = "INSERT INTO products (product_id, product_name, product_price, description, category) VALUES ('$itemID', '$name', '$price', '$desc', '$category')";

if ($conn->query($sql) === TRUE) {
	header("Location:front-food-items.php");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>