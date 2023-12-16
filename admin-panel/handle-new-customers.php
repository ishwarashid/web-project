<?php 
include("includes/session.php");
include '../database/database-helper.php';
$name = $_POST["name"];
$password = $_POST["password"];
$username = $_POST["username"];
$phone = $_POST["phone"];
// $status = $_POST["status"];
// intval()


$sql = "SELECT MAX(customer_id) AS max FROM customers;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$customerID = $row["max"] + 1;

$sql = "INSERT INTO customers (customer_id, name, contact, username, password) VALUES ('$customerID', '$name', '$phone', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
?>
    <script>
        alert("Cutomer Successfully Added");
        window.location.href= "front-people.php";
    </script>
<?php 

} else {
?>
    <script>
        alert("Failed");
        window.location.href= "front-people.php?failed";
    </script>
<?php 
}		
?>

