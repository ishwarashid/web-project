<?php 
include("includes/session.php");
include '../database/database-helper.php';
$name = $_POST["itemName"];
$price = $_POST["itemPrice"];
$desc = $_POST["itemDesc"];
$category = $_POST["category"];
// $img = $_POST["itemImg"];

$FileInfo = PATHINFO($_FILES["itemImg"]["name"]);
$NewFileName = $FileInfo['filename'] . "_" . time() . "." . $FileInfo['extension'];
move_uploaded_file($_FILES["itemImg"]["tmp_name"], "upload/" . $NewFileName);
$ImagePath = "upload/" . $NewFileName; // upload/abc_000384743436346436.j


$sql = "SELECT MAX(product_id) AS max FROM products;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$itemID = $row["max"] + 1;

$sql = "INSERT INTO products (product_id, product_name, product_price, description, image, category) VALUES ('$itemID', '$name', '$price', '$desc', '$ImagePath', '$category')";

if ($conn->query($sql) === TRUE) {
	header("Location:front-food-items.php");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>